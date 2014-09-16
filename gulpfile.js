var gulp     = require('gulp'),
	imagemin = require('gulp-imagemin'),
	cssmin   = require('gulp-cssmin'),
	webp     = require('gulp-webp'),
	uncss    = require('gulp-uncss'),
	uglify   = require('gulp-uglify'),
	rename   = require('gulp-rename'),
	compressor = require('gulp-compressor');

gulp
	.task('imagemin', function () {
		gulp.src('assets/images/*')
			.pipe(imagemin({
				progressive: true
			}))
			.pipe(gulp.dest('dist'));
	})
	.task('webp', function () {
		gulp.src('images/mg.jpg')
			.pipe(webp())
			.pipe(gulp.dest('dist'));
	})
	.task('cssmin', function () {
		gulp.src('assets/css/*.css')
			.pipe(cssmin())
			.pipe(rename({suffix: '.min'}))
			.pipe(gulp.dest('dist'));
	})
	.task('uncss', function() {
		gulp.src('dist/*.css')
			.pipe(uncss({
				html: ['index.html']
			}))
			.pipe(gulp.dest('dist'));
	})
	.task('compressor', function () {
		gulp.src('index.html')
			.pipe(compressor({
				'remove-intertag-spaces': true,
				'simple-bool-attr': true,
				'compress-js': true,
				'compress-css': true
			}))
			.pipe(gulp.dest('dist'));
	})

	.task('default', ['imagemin', 'webp', 'uncss', 'cssmin', 'compressor']);