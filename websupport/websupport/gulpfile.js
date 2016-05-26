var gulp = require('gulp'),
    gulpCopy = require('gulp-file-copy'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    minifyCss = require('gulp-minify-css'),
    rename = require("gulp-rename"),
    sass = require('gulp-sass'),
    changed = require('gulp-changed'),
    //autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create();


gulp.task('serve', ['copy','sass','css','scripts','scriptMain'], function() {

    browserSync.init({
        proxy: "websupport2:81"
    });

    gulp.watch("./src/scss/**/*.scss", ['sass']);
    gulp.watch("./src/js/**/*.js", ['scripts']);
    gulp.watch("./src/js/**/*.js", ['scriptMain']);
    gulp.watch("*.php").on('change', browserSync.reload);
    gulp.watch("js/*.js").on('change', browserSync.reload);
});

gulp.task('copy', function() {
    gulp.src(
        './bower_components/font-awesome/fonts/*'
    )
        .pipe(changed('fonts/'))
        .pipe(gulp.dest('fonts/'))
});

gulp.task('sass', function() {
    return gulp.src("./src/scss/**/*.scss")
      .pipe(changed('./src/scss/**/*.scss'))
      .pipe(sass())
      .pipe(gulp.dest('css'))
      .pipe(minifyCss({compatibility: 'ie8',keepSpecialComments:'*'}))
      .pipe(gulp.dest('./'))
      .pipe(browserSync.stream());
});

gulp.task('css', function() {
    return gulp.src([
      './bower_components/Swiper/dist/css/swiper.min.css',
      './bower_components/font-awesome/css/font-awesome.min.css'
    ])
      .pipe(changed('css/'))
      .pipe(concat('vendor.css'))
      .pipe(gulp.dest('css/'))
      .pipe(minifyCss({compatibility: 'ie8'}))
      .pipe(rename('vendor.min.css'))
      .pipe(gulp.dest('css/'))
});

gulp.task('scripts', function() {
    return gulp.src([
      './bower_components/jquery/dist/jquery.min.js',
      './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
      './bower_components/Swiper/dist/js/swiper.min.js',
      './src/js/classie.js',
      './src/js/modernizr.custom.js',
      './src/js/map.js'
    ])
      .pipe(changed('js/'))
      .pipe(concat('vendor.js'))
      .pipe(gulp.dest('js/'))
      .pipe(uglify())
      .pipe(rename('vendor.min.js'))
      .pipe(gulp.dest('js/'))
});

gulp.task('scriptMain', function() {
  return gulp.src([
    './src/js/main.js'
  ])
    .pipe(changed('js/'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('js/'))
    .pipe(uglify())
    .pipe(rename('main.min.js'))
    .pipe(gulp.dest('js/'))
});

gulp.task('default', ['serve']);
