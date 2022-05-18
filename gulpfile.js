// gulpプラグインの読み込み
const gulp = require("gulp");
// Sassをコンパイルするプラグインの読み込み
const sass = require("gulp-sass")(require("sass"));
//const browserSync = require("browser-sync");





gulp.task("default", function() {
    // ★ style.scssファイルを監視
    return gulp.watch("sass/**.scss", function() {
      // style.scssの更新があった場合の処理
  
      // style.scssファイルを取得
      return (
        gulp
          .src("sass/**.scss")
          // Sassのコンパイルを実行
          .pipe(
            sass({
              outputStyle: "compressed"
            })
              // Sassのコンパイルエラーを表示
              // (これがないと自動的に止まってしまう)
              .on("error", sass.logError)
          )
        //   .pipe(autoprefixer({
        //     cascade:false
        //   }))
          // cssフォルダー以下に保存
          .pipe(gulp.dest("css"))
      );
    });
  });