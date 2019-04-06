// const gulp = require('gulp');
// const sass = require('gulp-sass');
// // const postcss = require("gulp-postcss");
// // const cssnano = require("cssnano");
// const sourcemaps = require("gulp-sourcemaps");
// const concat = require('gulp-concat');
// const autoprefixer = require('gulp-autoprefixer');
// const cleanCSS = require('gulp-clean-css');
// const uglify = require('gulp-uglify');
// const babel = require('gulp-babel');
// const del = require('del');
// const browserSync = require('browser-sync').create();
//
// function html() {
//   return gulp.src('./source/*.html')
//     .pipe(gulp.dest('./build/'))
//     .pipe(browserSync.stream());
// }
//
// function styles() {
//   return gulp.src('./source/scss/**/*.scss')
//     .pipe(sourcemaps.init())
//     .pipe(sass())
//     .pipe(sourcemaps.write('.', { sourceRoot: '/' }))
//     .pipe(autoprefixer({
//       browsers: ['> 0.1%'],
//       cascade: false
//     }))
//     .pipe(cleanCSS({
//       level: 2
//     }))
//     .pipe(sourcemaps.write())
//     .pipe(gulp.dest('./build/css'))
//     .pipe(browserSync.stream());
// }
//
// function scripts() {
//   return gulp.src('./source/js/**/*.js')
//     .pipe(concat('main.js'))
//     .pipe(babel({
//       presets: ['@babel/env']
//     }))
//     .pipe(uglify({
//       toplevel: true
//     }))
//     .pipe(gulp.dest('./build/js'))
//     .pipe(browserSync.stream());
// }
//
// function img() {
//   return gulp.src('./source/img/**/*')
//     .pipe(gulp.dest('./build/img'))
// }
//
// function fonts() {
//   return gulp.src('./source/fonts/**/*')
//     .pipe(gulp.dest('./build/fonts'))
// }
//
// function watch() {
//   browserSync.init({
//     server: {
//       baseDir: "./build"
//     }
//   });
//
//   gulp.watch('./source/scss/**/*.scss', styles);
//   gulp.watch('./source/js/**/*.js', scripts);
//   gulp.watch('./source/fonts/**/*', fonts);
//   gulp.watch('./source/img/**/*', img);
//   gulp.watch('./source/*.html', html);
// }
//
// function clean() {
//   del(['build/*'])
// }
//
// gulp.task('html', html);
// gulp.task('styles', styles);
// gulp.task('scripts', scripts);
// gulp.task('img', img);
// gulp.task('fonts', fonts);
// gulp.task('watch', watch);
// gulp.task('dell', clean);

const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require("gulp-sourcemaps");
const concat = require('gulp-concat');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const babel = require('gulp-babel');
const del = require('del');
const browserSync = require('browser-sync').create();
//
// function html() {
//   return gulp.src('./source/*.html')
//     .pipe(gulp.dest('./build/'))
//     .pipe(browserSync.stream());
// }

function styles() {
  return gulp.src('./source/scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer(['last 2 versions'], {cascade: false}))
    .pipe(cleanCSS({
      level: 2
    }))
    .pipe(concat('main.css'))
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('build/css'))
    .pipe(browserSync.stream());
}

function scripts() {
  return gulp.src('./source/js/**/*.js')
    .pipe(concat('main.js'))
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(uglify({
      toplevel: true
    }))
    .pipe(gulp.dest('./build/js'))
    .pipe(browserSync.stream());
}

function img() {
  return gulp.src('./source/img/**/*')
    .pipe(gulp.dest('./build/img'))
    .pipe(browserSync.stream());
}

function fonts() {
  return gulp.src('./source/fonts/**/*')
    .pipe(gulp.dest('./build/fonts'))
}

function watch() {
  browserSync.init({
    server: {
      baseDir: "./build"
    }
  });

  gulp.watch('./source/scss/**/*.scss', styles);
  gulp.watch('./source/js/**/*.js', scripts);
  gulp.watch('./source/fonts/**/*', fonts);
  gulp.watch('./source/img/**/*', img);
  // gulp.watch('./source/*.html', html);
}

function clean() {
  del(['build/*'])
}

// gulp.task('html', html);
gulp.task('styles', styles);
gulp.task('scripts', scripts);
gulp.task('img', img);
gulp.task('fonts', fonts);
gulp.task('watch', watch);
gulp.task('dell', clean);