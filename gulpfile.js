'use strict';

const { src, dest, watch, parallel } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const webpack = require('webpack-stream');

const filePaths = {
  js: '',
  css: ''
}

function buildStyles(cb) {
  src('./index.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./css'));
  cb();
};
function buildScripts(cb) {
  src('./main.js')
    .pipe(webpack())
    .pipe(dest('./index.js'));
  cb();
}
function watchFiles(cb) {
  watch(['./*.scss', './*.js'], parallel(buildStyles, buildScripts));
  cb();
}

exports.buildStyles = buildStyles;
exports.buildScripts = buildScripts;
exports.watch = watchFiles;