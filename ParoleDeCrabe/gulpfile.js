var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));
var autoprefixer = require("gulp-autoprefixer");

function buildScss() {
  return gulp
    .src("./styles/main.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(
      autoprefixer({
        cascade: false,
      })
    )
    .pipe(gulp.dest("./styles"));
}

exports.default = buildScss;
exports.watch = function () {
  gulp.watch("./styles/**/*.scss", gulp.series(["default"]));
};
