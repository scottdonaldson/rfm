module.exports = function(grunt) {

    // not available as grunt module?
    // after running grunt stuff, we're going to take screenshot-base.png
    // and add the current version number
    var fs = require('fs'),
        gm = require('gm');

    var css = fs.readFileSync(__dirname + '/style.css', 'utf8'),
        version;
    // break into array of lines
    css = css.split('\n');
    // find the line that starts with "Version:"
    css.forEach(function(line) {
        if ( !!line.match(/Version: /) ) version = line.slice(9);
    });

    var screenshotBase = gm(__dirname + '/screenshot-base.png');
    screenshotBase
        .font(__dirname + '/fonts/FranklinGothic-Demi.otf', 28)
        .drawText(20, 40, 'v' + version, 'NorthEast')
        .write(__dirname + '/screenshot.png', function(err) {
            if ( !err ) console.log('Generated screenshot.png');
        });

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    compass: true,
                    style: 'compressed'
                },
                files: {
                    'css/style.css': 'scss/style.scss'
                }
            }
        },

        autoprefixer: {
            options: {
                browsers: ['> 1%']
            },
            no_dest: {
                src: ['css/style.css']
            }
        },

        watch: {
            options: {
                livereload: true
            },
            css: {
                files: ['scss/*.scss', 'css/style.css'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass', 'autoprefixer', 'watch']);

};
