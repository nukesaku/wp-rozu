// プラグインの読み込み ※npm installしたものを読み込む
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
// shellスクリプト実行モジュール
// var execSync = require('child_process').execSync;
// var fs = require('fs');

gulp.task('default', function(done) {
  // 読み込みファイル
  gulp.src('src/scss/style.scss')
  // sassコンパイルの実行
  .pipe(sass({
    // 見慣れたcssに整形
    outputStyle: 'expanded'
  }))
  // 出力先ディレクトリ
  .pipe(gulp.dest('.'));
  // 実行完了通知(gulp@4.0.0~必要)
  done();
});

gulp.task('watch', function() {
  var src = 'src/scss/*.scss';
  gulp.watch(src, function(done){
    /* パーシャル更新時にstyle.scssを更新
       (パーシャル更新時にコンパイルさせる) */
    // execSync('touch src/scss/style.scss');
    // fs.utimes('src/scss/style.scss', new Date(), new Date(), function (err) {});
    gulp.src(src)
      .pipe(sourcemaps.init()) // map生成
      .pipe(sass({
        outputStyle: 'expanded'
      }))
      .on('error', sass.logError)
      .pipe(sourcemaps.write('map'))
      .pipe(gulp.dest('.'));
    done();
  });
});
