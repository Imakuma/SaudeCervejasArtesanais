var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');
var terser = require('gulp-terser');
var webp = require('gulp-webp');
 
gulp.task('webp', () =>
    gulp.src('public/assets/img/*.*')
        .pipe(webp())
        .pipe(gulp.dest('public/assets/img/webp'))
);

// task para o concat - mescla os arquivos js 'pre-files/js/all/*.js'
// npm install --save-dev gulp gulp-sass gulp-concat gulp-watch gulp-autoprefixer gulp-sourcemaps gulp-rename gulp-terser gulp-imagemin

// task para o sass
// task para o sass
gulp.task('sass', gulp.series(function() {

  return gulp.src('public/pre-files/sass/**/*.sass')
  
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 4 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('public/assets/css'))
    
    .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
      .pipe(autoprefixer({
          browsers: ['last 4 versions'],
          cascade: false
      }))
      
      .pipe(sourcemaps.write('./'))
      .pipe(rename({suffix: '.min'}))
      .pipe(gulp.dest('public/assets/css'));
}));
/// terser comprime os js da pasta "pre-files/js" e salva min em "assets/js"

/// terser comprime os js da pasta "pre-files/js" e salva min em "assets/js"
gulp.task('terser', gulp.series(function () {
  return gulp.src('public/pre-files/js/*.js')
    .pipe(terser())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('public/assets/js'));

}));

// task para watch
gulp.task('watch', gulp.series(function () {
  gulp.watch('public/pre-files/sass/**/*.scss', gulp.parallel(['sass']))
  gulp.watch('public/pre-files/sass/**/*.sass', gulp.parallel(['sass']))
  gulp.watch('public/pre-files/js/*.js', gulp.parallel(['terser']))
  gulp.watch('public/assets/img/*.jpg', gulp.parallel(['webp']))
}));


// task default gulp
gulp.task('default', gulp.series(['sass', 'watch']));