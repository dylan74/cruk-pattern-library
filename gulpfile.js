var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    jshint = require('gulp-jshint'),
    livereload = require('gulp-livereload');

    gulp.task('styles', function() {
      gulp.src('css/sass/styles.scss')
          .pipe(sass().on('error', sass.logError))
          .pipe(gulp.dest('./css'))
          .pipe(livereload());
  });


    gulp.task('default', ['watch', 'styles']);

    gulp.task('watch', function() {

      // Watch .scss files
      gulp.watch('css/**/*.scss', ['styles']);

      // // Watch .js files
      // gulp.watch('js/**/*.js', ['scripts']);

      // Create LiveReload server
      livereload.listen();

      // Watch any files in dist/, reload on change
      gulp.watch(['dist/**']).on('change', livereload.changed);

    });
