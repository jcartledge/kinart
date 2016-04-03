const gulp = require('gulp');
const gulpUtil = require('gulp-util');
const ftp = require('vinyl-ftp');

gulp.task('stage', function () {
  const conn = ftp.create(Object.assign(
    {log: gulpUtil.log},
    require('./ftp.json')
  ));
  var globs = [
    '**',
    '!ftp*.json',
    '!wp-config.php',
    '!wp-options.php',
    '!package.json',
    '!node_modules/**',
    '!gulp**'
  ];

  const dest = '/webspace/httpdocs/test';
  return gulp.src(globs, { base: '.', buffer: false })
    .pipe(conn.newer(dest)) // only upload newer files
    .pipe(conn.dest(dest));
});
