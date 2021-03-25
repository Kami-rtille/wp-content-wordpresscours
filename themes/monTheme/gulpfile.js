const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();


// Compilation du SCSS en CSS

    function style (){
        return gulp.src('./assets/styles/scss/*.scss')

            .pipe(sass())

            .pipe(gulp.dest('./assets/styles/css/'))

            .pipe(browserSync.stream());
    }

function watch(){
    browserSync.init({
        proxy: 'http://localhost/wordpress-cours/',
        port: 8888
    });
    gulp.watch('./assets/styles/scss/**/*.scss', style);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
    gulp.watch('./assets/styles/css/*.css').on('change', browserSync.reload);
    gulp.watch('./assets/js/**/*.js').on('change', browserSync.reload);
}


exports.style = style;
exports.watch = watch;


