const gulp = require("gulp");
const htmlmin = require("gulp-htmlmin");
const jsmin = require("gulp-jsmin");
const php2html = require("gulp-php2html");
const dist = "./dist";

gulp.task("php", () => {
  return gulp
    .src(["index.php", "offline.php"])
    .pipe(
      php2html({
        baseDir: "./"
      })
    )
    .pipe(gulp.dest(dist));
});

gulp.task("compress", () => {
  return gulp
    .src("sw.js")
    .pipe(jsmin())
    .pipe(gulp.dest(dist));
});

gulp.task("html", () => {
  return gulp
    .src([`${dist}/index.html`, `${dist}/offline.html`])
    .pipe(
      htmlmin({
        collapseWhitespace: true,
        minifyCSS: true,
        minifyJS: true,
        removeAttributeQuotes: true,
        removeComments: true
      })
    )
    .pipe(gulp.dest(dist));
});

gulp.task("copyImages", () => {
  return gulp.src("images/*").pipe(gulp.dest(`${dist}/images`));
});

gulp.task("copyOther", () => {
  return gulp
    .src(["./manifest.json", "./impressum.txt", "./favicon.ico"])
    .pipe(gulp.dest(dist));
});

gulp.task(
  "default",
  gulp.series("php", "compress", "html", "copyImages", "copyOther")
);
