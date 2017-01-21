/*!
 * Grunt file
 */

/*jshint node:true */
module.exports = function ( grunt ) {
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browserify');

    grunt.initConfig({
        pkg: grunt.file.readJSON( 'package.json' ),
        sass: {
            options: {
                style: 'compressed'
            },
            dist: {
                files: {
                    'app/styles/style.css': 'app/styles/style.scss'
                }
            }
        },

        /*browserify: {
            react: {
                src: [],
                dest: 'react_components/app.lib.js',
                options: {
                    alias: [ // modules we want to require and export
                        'react:',
                        'react-dom:'
                    ]
                }
            },

            home: {
                options: {
                   transform: [['babelify', {presets: ['es2015', 'react']}]],
                   external: ['react', 'react-dom']
                },        
                src: ['react_components/feed/*.jsx'],
                dest: 'react_components/app.home.js',
            },

            profile: {
                options: {
                   transform: [['babelify', {presets: ['es2015', 'react']}]],
                   external: ['react', 'react-dom']
                },        
                src: ['react_components/feed/*.jsx'],
                dest: 'react_components/app.profile.js',
            }
        },*/

        /*watch: {
            home: {
                files: 'react_components/feed/*.jsx',
                tasks: ['browserify:home']
            },

            profile: {
                files: 'react_components/feed/*.jsx',
                tasks: ['browserify:profile']
            }
        },  */

        watch: {
            files: [
                'app/styles/**/*.scss'
            ],
            tasks: ['build']
        }
    });

    /*grunt.registerTask( 'default', [ 'sass', 'browserify' ] );*/
    grunt.registerTask( 'build', [ 'sass' ] );
    
    grunt.registerTask( 'default', 'build' );
};
