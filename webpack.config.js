module.exports = {
  // モード値を production に設定すると最適化された状態で、
  // development に設定するとソースマップ有効(es5)でJSファイルが出力される
  mode: 'development',
  // ソースマップ有効(es6)
  // devtool: 'source-map', // これをコメントアウトするとdeveloper toolのsource mapが更新される なぜ？？

  context: __dirname + '/src/js',
  // エントリーポイント
  entry: ['./entry.js'],

  output: {
    path: __dirname + '/js',
    filename: 'bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        use: [
          {
            // Babel を利用する
            loader: 'babel-loader',
            // Babel のオプションを指定する
            options: {
              presets: [
                // プリセットを指定することで、ES2018 を ES5 に変換
                '@babel/preset-env',
              ]
            }
          }
        ]
      }
    ]
  }
}