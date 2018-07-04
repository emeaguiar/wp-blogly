import gulp from 'gulp';
import svgSprite from 'gulp-svg-sprites';
import pump from 'pump';

gulp.task( 'sprites', ( cb ) => {
	const fileSrc = './assets/svg/**/*.svg';
	
	const fileDest = './dist';

	const svgOpts = {
		mode: 'symbols',
		preview: false
	};

	pump( [
		gulp.src( fileSrc ),
		svgSprite( svgOpts ),
		gulp.dest( fileDest )
	], cb );
} );

