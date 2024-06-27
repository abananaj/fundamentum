'use strict';

const { src, dest } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const webpack = require('webpack-stream');

function buildStyles(cb) {
  src('./assets/scss/index.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./assets/dist'));
  cb();
};
function buildScripts(cb) {
  src('./assets/js/main.js')
    .pipe(webpack())
    .pipe(dest('./assets/dist'));
  cb();
}
exports.buildStyles = buildStyles;
exports.buildScripts = buildScripts;
// exports.watch = function () {
//   gulp.watch('./sass/**/*.scss', ['sass']);
// };