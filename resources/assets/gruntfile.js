let babelify = require('babelify');
let envify = require('envify/custom');
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            vendors:{
                src: ['js/vendor/**/*.js'],
                dest: '../../public/js/vendor.concat.js'
            },
            main: {
                src: ['js/main/**/*.js'],
                dest: '../../public/js/main.concat.js'
            }
        },
        sass: {
            options: {
                outputStyle: 'compressed',
                sourceMap: true,
                livereload: false,
                expand: true
            },
            dist: {
                files: {
                    '../../public/css/app.css': 'sass/main.scss'
                }
            }
        },
        browserify: {

            dist: {
                src: '../../public/js/main.concat.js',

                dest: '../../public/js/main.browser.js',

                options: {
                    // Function to deviate from grunt-browserify's default order
                    configure: b => b
                        .transform('vueify')
                        .transform(
                            // Required in order to process node_modules files
                            { global: true },
                            envify({ NODE_ENV: 'production' })
                        ).transform(babelify.configure({
                            presets: ["D:\\github\\Muzer\\resources\\assets\\node_modules\\babel-preset-es2015"]
                        }))
                        .bundle(),
                    alias: {
                        'vue': '../../node_modules/vue/dist/vue.js'
                    }
                }
            }
        },


        js: {
            options: {
                outputStyle: 'compressed',
                sourceMap: true,
                livereload: false,
                expand: true
            },
            dist: {
                files: {
                    '../../public/js/app.js': 'js/main.js'
                }
            }
        },
        jsvendor: {
            options: {
                outputStyle: 'compressed',
                sourceMap: true,
                livereload: false,
                expand: true
            }
        },

        watch: {
            js: {
                files: ['js/main/**/*.js'],
                tasks: ['concat:main']
            },
            jsvendor: {
                files: ['js/vendor/**/*.js'],
                tasks: ['concat:vendors']
            },
            css: {
                files: ['sass/**/*.scss'],
                tasks: ['sass'],
                options: {
                    livereload: true
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-browserify');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.registerTask('build', ['sass', 'concat']);
    grunt.registerTask('default', ['sass']);
};