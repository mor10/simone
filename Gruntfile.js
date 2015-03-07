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
		      'scss/compiled/style-verbose.css': 'scss/style.scss'
		    }
		  },
		  dist: {
		    options: {
		      style: 'compressed',
		      sourcemap: 'none',
		    },
		    files: {
		      'scss/compiled/style.css': 'scss/style.scss'
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