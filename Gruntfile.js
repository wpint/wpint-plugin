module.exports = function( grunt ) {

	'use strict';

	// Project configuration
	grunt.initConfig( {

		pkg: grunt.file.readJSON( 'package.json' ),

		addtextdomain: {
			options: {
				textdomain: 'wpint-plugin',
			},
			update_all_domains: {
				options: {
					updateDomains: true
				},
				src: [ '*.php', '**/*.php', '!\.git/**/*', '!bin/**/*', '!node_modules/**/*', '!tests/**/*' ]
			}
		},

		wp_readme_to_markdown: {
			your_target: {
				files: {
					'README.md': 'readme.txt'
				}
			},
		},

		makepot: {
			target: {
				options: {
					domainPath: '/languages',
					exclude: [ '\.git/*', 'bin/*', 'node_modules/*', 'tests/*' ],
					mainFile: 'wpint-plugin.php',
					potFilename: 'wpint-plugin.pot',
					potHeaders: {
						poedit: true,
						'x-poedit-keywordslist': true
					},
					type: 'wp-plugin',
					updateTimestamp: true
				}
			}
		},

		concat: {
			options: {
			  separator: ';'
			},
			dist: {
			  src: ['resources/scripts/src/js/**/*.js'],
			  dest: 'resources/scripts/dist/<%= pkg.name %>.js'
			}
		},

		uglify: {
			options: {
			  banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
			},
			dist: {
			  files: {
				'resources/scripts/dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
			  }
			}
		},

		concat_css: {
			options: {
			  // Task-specific options go here.
			},
			all: {
			  src: ["resources/scripts/src/css/**/*.css"],
			  dest: "resources/scripts/dist/<%= pkg.name %>.css"
			},
		},

		cssmin: {
			options: {
			  mergeIntoShorthands: false,
			  roundingPrecision: -1
			},
			target: {
			  files: {
				'resources/scripts/dist/<%= pkg.name %>.min.css': ['<%= concat_css.all.dest %>']
			  }
			}
		},

		jshint: {
			files: ['Gruntfile.js', 'resources/scripts/src/**/*.js', 'resources/scripts/test/**/*.js'],
			options: {
			  // options here to override JSHint defaults
			  globals: {
				jQuery: true,
				console: true,
				module: true,
				document: true
			  }
			}
		},

		watch: {
			files: ['<%= jshint.files %>'],
			tasks: ['jshint'] // qunit is deleted
		}

	} );

	grunt.loadNpmTasks( 'grunt-wp-i18n' );
	grunt.loadNpmTasks( 'grunt-wp-readme-to-markdown' );

	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	// grunt.loadNpmTasks('grunt-contrib-qunit');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-concat-css');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('test', ['jshint']); // qunit

	grunt.registerTask( 'default', [ 'i18n','readme', 'jshint', 'concat', 'uglify', 'concat_css', 'cssmin'] ); // qunit

	grunt.registerTask('js', ['jshint', 'concat', 'uglify', 'concat_css', 'cssmin']);

	grunt.registerTask( 'css', ['concat_css', 'cssmin'] );

	grunt.registerTask( 'i18n', ['addtextdomain', 'makepot'] );
	grunt.registerTask( 'readme', ['wp_readme_to_markdown'] );



	grunt.util.linefeed = '\n';

};
