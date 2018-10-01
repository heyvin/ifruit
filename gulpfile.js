'use strict';

var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

gulp.task('default', function () {
    gulp.src('public/css/*.css')
        .pipe(cssmin())
        .pipe(rename('page.min.css'))
        .pipe(gulp.dest('public/css/'));
});
