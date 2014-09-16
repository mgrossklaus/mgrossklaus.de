var gulp       = require('gulp'),
	imagemin   = require('gulp-imagemin'),
	uncss      = require('gulp-uncss'),
	rename     = require('gulp-rename'),
	compressor = require('gulp-compressor'),
	minifyCSS  = require('gulp-minify-css'),
	frep       = require('gulp-frep'),

	dist       = 'dist/',
	patterns   = [{
		pattern: /localhost/ig,
		replacement: 'static.mgrossklaus.de'
 	}, {
 		pattern: /styles.css/ig,
 		replacement: 'styles.min.css'
 	}];

gulp
	.task('images', function() {
		gulp.src('images/*')
			.pipe(imagemin({
				progressive: true
			}))
			.pipe(gulp.dest(dist + 'images/'));
	})
	.task('css', function() {
		gulp.src('css/*.css')
			.pipe(uncss({
				html: ['index.html']
			}))
			.pipe(minifyCSS())
			.pipe(rename({suffix: '.min'}))
			.pipe(gulp.dest(dist + 'css/'));
	})

	.task('html', function() {
		gulp.src('index.html')
			.pipe(frep(patterns))
			.pipe(compressor({
				'remove-intertag-spaces': true,
				'simple-bool-attr': true,
				'compress-js': true,
				'compress-css': true
			}))
			.pipe(gulp.dest(dist));
	})

	.task('default', ['images', 'css', 'html']);