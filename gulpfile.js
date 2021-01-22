var
    gulp         = require("gulp"),
    rename       = require("gulp-rename"),
    autoprefixer = require("gulp-autoprefixer"),
    sourcemaps   = require("gulp-sourcemaps"),
    uglify       = require("gulp-uglify"),
    sass         = require("gulp-sass");

function build(done){
    gulp.src("sass/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({
            errorLogToConsole: true,
            outputStyle: "compressed"
        }))
        .on("error", console.error.bind(console))
        .pipe(autoprefixer(["last 15 versions", "> 1%", "ie 8", "ie 7"], { cascade: true }))
        .pipe(rename({suffix: ".min"}))
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest("layouts/"));

    done();
}  

function jsBuild(done){
	gulp.src('js/**/main.js')
		.pipe(sourcemaps.init())
		.pipe(uglify())
		.pipe(rename({suffix: ".min"}))
		.pipe(sourcemaps.write("./"))
		.pipe(gulp.dest("./js/"));

	done();	
}

function watch(){
    gulp.watch("sass/**/*.scss", build);
    gulp.watch("js/**/main.js", jsBuild);
}

gulp.task("default", gulp.parallel(watch));