// プラグインの読み込み ※npm installしたものを読み込む
var gulp = require('gulp');
var sass = require('gulp-sass');

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
  var src = 'src/scss/style.scss';
  gulp.watch(src, function(done){
    gulp.src(src)
      .pipe(sass({
        outputStyle: 'expanded'
      }))
      .on('error', sass.logError)
      .pipe(gulp.dest('.'));
    done();
  });
});
