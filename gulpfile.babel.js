import gulp from 'gulp';

// ----- Plugins -----

import {deleteSync as del} from 'del';
import server from 'gulp-webserver';
import image from 'gulp-image';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
const sass = gulpSass(dartSass);
import autoPrefixer from 'gulp-autoprefixer';
import csso from 'gulp-csso';
import browserify from 'gulp-bro';
import babelify from 'babelify';
import fileinclude from 'gulp-file-include';

// ----- Routes -----

const theme_assets = 'public/content/themes/ideals/assets';
const routes = {
	html: {
		watch: 'src/html/**/*.html',
		src: 'src/html/**/*.html',
		dest: `${theme_assets}/html/`
	},
	img: {
		src: 'src/img/*',
		dest: `${theme_assets}/img/`
	},
	sass: {
		watch: 'src/sass/*.sass',
		src: 'src/sass/**/*.sass',
		dest: `${theme_assets}/css/`
	},
	js: {
		watch: 'src/js/*.js',
		src: 'src/js/main.js',
		dest: `${theme_assets}/js/`
	},
	libs: {
		watch: 'src/libs/*',
		src: 'src/libs/*',
		dest: `${theme_assets}/libs/`
	}
}

// ----- Prepare -----

const clear = resolve => {
	del([routes.img.dest, routes.js.dest]);
	resolve();
};

const img = async () => {
	gulp.src(routes.img.src)
	.pipe(image())
	.pipe(gulp.dest(routes.img.dest));
}

const prepare = gulp.series([clear, img]);

// ----- Compile -----

const html_combine = () => {
	return gulp.src(routes.html.src)
	.pipe(fileinclude({
		prefix: '@@',
		basepath: '@file'
	}))
	.pipe(gulp.dest(routes.html.dest));
}

const sass_compile = () => {
	return gulp.src(routes.sass.src)
	.pipe(sass())
	.on('error', sass.logError)
	.pipe(autoPrefixer())
	.pipe(csso())
	.pipe(gulp.dest(routes.sass.dest));
}

const js_compile = () => {
	return gulp.src(routes.js.src)
	.pipe(browserify({
		transform: [babelify.configure({ presets: ['@babel/preset-env'] })]
	}))
	.pipe(gulp.dest(routes.js.dest));
}

const process_libs = () => {
	return gulp.src(routes.libs.src)
	.pipe(gulp.dest(routes.libs.dest));
}

const assets = gulp.series([html_combine, process_libs, sass_compile, js_compile]);

// ----- Watch -----

const watch_options = {
	delay: 0,
	interval: 0,
	binaryInterval: 0
}

const watch = async () => {
	gulp.watch([routes.html.watch], watch_options, html_combine);
	gulp.watch([routes.libs.watch], watch_options, process_libs);
	gulp.watch([routes.sass.watch], watch_options, sass_compile);
	gulp.watch([routes.js.watch], watch_options, js_compile);
}

// ----- Server -----

const server_settings = {
	livereload: true,
	open: true
}

const server_run = () => {
	gulp.src(`${theme_assets}/html`)
	.pipe(server(server_settings));
}

const start = gulp.parallel([
	server_run,
	watch
]);

// ----- Run -----

export const build = gulp.series([
	prepare,
	assets
]);

export const dev = gulp.series([
	build,
	start
]);