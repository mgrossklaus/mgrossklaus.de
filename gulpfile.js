var gulp     = require('gulp'),
	imagemin = require('gulp-imagemin'),
	cssmin   = require('gulp-cssmin'),
	webp     = require('gulp-webp'),
	uncss    = require('gulp-uncss'),
	uglify   = require('gulp-uglify'),
	htmlmin  = require('gulp-htmlmin'),
	rename   = require('gulp-rename');

gulp
	.task('imagemin', function () {
		gulp.src('images/*')
			.pipe(imagemin({
				progressive: true
			}))
			.pipe(gulp.dest('dist'));
	})
	.task('cssmin', function () {
		gulp.src('index.html')
			.pipe(cssmin())
			.pipe(rename({suffix: '.min'}))
			.pipe(gulp.dest('dist'));
	})
	.task('webp', function () {
		gulp.src('images/mg.jpg')
			.pipe(webp())
			.pipe(gulp.dest('dist'));
	})
	.task('uncss', function() {
		gulp.src('dist/*.css')
			.pipe(uncss({
				html: ['index.html']
			}))
			.pipe(gulp.dest('dist'));
	})
	.task('uglify', function() {
		gulp.src('js/*.js')
			.pipe(uglify())
			.pipe(gulp.dest('dist'))
	})
	.task('htmlmin', function() {
		gulp.src('index.html')
		.pipe(htmlmin({collapseWhitespace: true}))
		.pipe(gulp.dest('dist'))
	})

	.task('default', ['imagemin', 'cssmin', 'webp', 'uncss', 'uglify', 'htmlmin']);