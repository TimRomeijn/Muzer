module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        /*concat: {
            vendors:{
                src: ['js/vendor/!*.js'],
                dest: '../../../Source/www/js/vendor.concat.js'
            },
            dpi: {
                src: ['js/dpi/!**!/!*.js'],
                dest: '../../../Source/www/js/main.concat.js'
            }
        },*/
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

        watch: {
            /*jsdpi: {
                files: ['js/dpi/!**!/!*.js'],
                tasks: ['concat:dpi', 'sftp-deploy']
            },
            jsvendor: {
                files: ['js/vendor/!*.js'],
                tasks: ['concat:vendors', 'sftp-deploy']
            },*/
            css: {
                files: ['sass/**/*.scss'],
                tasks: ['sass'],
                options: {
                    livereload: true
                }
            }
        }
    });
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.registerTask('build', ['sass', 'concat']);
    grunt.registerTask('default', ['sass']);
};