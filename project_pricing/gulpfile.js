
//global const
const gulp = require("gulp");
const del = require("del");
const sass = require("gulp-sass");
const rename = require("gulp-rename");
const gulpif = require("gulp-if");
const htmlreplace = require("gulp-html-replace");
const autoprefixer = require("gulp-autoprefixer");
const cssnano = require("gulp-cssnano");
const uglify = require("gulp-uglify-es").default;
const browserSync = require("browser-sync").create();
const rollup = require("gulp-better-rollup");
const babel = require("rollup-plugin-babel");
const resolveNodeModules = require("rollup-plugin-node-resolve");

//global let
let isProductionBuild = false;

function runSass() {
  return gulp
    .src("app/scss/**/*.scss")
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(gulpif(isProductionBuild, cssnano()))
    .pipe(
      gulpif(
        isProductionBuild,
        rename({
          suffix: ".min",
        })
      )
    )
    .pipe(
      gulpif(isProductionBuild, gulp.dest("dist/css/"), gulp.dest("app/dev/"))
    )
    .pipe(browserSync.stream());
}

function reloadBrowser(done) {
  browserSync.reload();
  done();
}

function bundleJs() {
  return gulp
    .src("app/js/main.js")
    .pipe(
      rollup(
        {
          plugins: [babel(), resolveNodeModules()],
        },
        { format: "cjs" }
      )
    )
    .pipe(gulpif(isProductionBuild, uglify()))
    .pipe(
      gulpif(
        isProductionBuild,
        rename({
          suffix: ".min",
        }),
        rename({
          suffix: "-bundle",
        })
      )
    )
    .pipe(
      gulpif(isProductionBuild, gulp.dest("dist/js/"), gulp.dest("app/dev/"))
    );
}

function runWatch() {
  startBrowserSync();
  gulp.watch("app/scss/**/*.scss", runSass);
  gulp.watch("app/**/*.html", reloadBrowser);
  gulp.watch("app/**/*.php", reloadBrowser);
  gulp.watch(
    ["app/js/**/*.js", "!app/js/**/*-bundle.js"],
    gulp.series(bundleJs, reloadBrowser)
  );
}

function copyImages() {
  return gulp
    .src("app/img/*")
    .pipe(gulp.dest("dist/img/"));
}

function copyAudio() {
  return gulp
    .src("app/audio/*")
    .pipe(gulp.dest("dist/audio/"));
}

function copyFonts() {
  return gulp
    .src("app/fonts/*")
    .pipe(gulp.dest("dist/fonts/"));
}

function copyPHP() {
  return gulp
    .src("app/**/*.php")
    .pipe(
      htmlreplace({
        js: "js/main.min.js",
        css: "css/main.min.css",
      })
    )
    .pipe(gulp.dest("dist/"));
}

function runClean(done) {
  del.sync("dist");
  done();
}

function startProductionBuild(done) {
  isProductionBuild = true;
  done();
}

function reload(cb){
  browserSync.reload();
  cb();
}

function startBrowserSync() {
  browserSync.init({
      //für sync mit localhost/MAMP
      proxy: "http://localhost/web_developer/diplompruefung2020/festivallovers/" //korrekten link angeben!

              //für live:
        //server: {
        //    baseDir: 'app'
        //}
  });
}

//gulp.task("copyAudio", copyAudio);

gulp.task("sass", runSass);
gulp.task("sass:build", gulp.series(startProductionBuild, runSass));
gulp.task("bundle", bundleJs);
gulp.task("bundle:build", gulp.series(startProductionBuild, bundleJs));
gulp.task("watch", gulp.series(runSass, bundleJs, runWatch));

gulp.task("build", gulp.series(startProductionBuild, runClean,
    gulp.parallel(copyPHP, runSass, bundleJs, copyImages, copyAudio, copyFonts))
);