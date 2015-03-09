module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		/**
		 * Sass
		 */
		sass: {
		  dev: {
		    options: {
		      style: 'expanded',
		      sourcemap: 'none',
		    },
		    files: {
		      'scss/compiled/style-verbose.css': 'scss/style.scss',
		      'scss/compiled/layouts/content-sidebar-verbose.css': 'scss/layouts/content-sidebar.scss',
		      'scss/compiled/layouts/no-sidebar-verbose.css': 'scss/layouts/no-sidebar.scss',
		      'scss/compiled/layouts/sidebar-content-verbose.css': 'scss/layouts/sidebar-content.scss'
		    }
		  },
		  dist: {
		    options: {
		      style: 'compressed',
		      sourcemap: 'none',
		    },
		    files: {
		      'scss/compiled/style.css': 'scss/style.scss',
		      'scss/compiled/layouts/content-sidebar.css': 'scss/layouts/content-sidebar.scss',
		      'scss/compiled/layouts/no-sidebar.css': 'scss/layouts/no-sidebar.scss',
		      'scss/compiled/layouts/sidebar-content.css': 'scss/layouts/sidebar-content.scss'
		    }
		  }
		},

		/**
		 * Autoprefixer
		 */
		autoprefixer: {
		    options: {
	      		browsers: ['last 2 versions']
		    },
			// prefix all files
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'scss/compiled/*.css', 
				dest: '' 
			},
			// prefix all files
			multiple_files: {
				expand: true,
				flatten: true,
				src: 'scss/compiled/layouts/*.css', 
				dest: 'layouts/' 
			},
	  	},

	  	/**
	  	 * Watch
	  	 */
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass', 'autoprefixer']
			}
		},

	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.registerTask('default',['watch']);
}