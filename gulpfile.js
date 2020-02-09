const gulp = require('gulp')
const sass = require('gulp-sass')
const sourcemaps = require('gulp-sourcemaps')
const watch = require('gulp-watch')

gulp.task('sass-compile',()=>{
    return gulp.src('./wp-content/themes/wp-shop-theme/assets/sass/style.sass')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./wp-content/themes/wp-shop-theme/'))
})
gulp.task('watch',()=>{
    gulp.watch('./wp-content/themes/wp-shop-theme/assets/**/*.sass',gulp.series('sass-compile'))
})
