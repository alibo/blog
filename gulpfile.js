var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.assetsPath = 'content/_includes/assets';
elixir.config.publicPath = 'content/assets';

elixir(function(mix) {
    var env = argv.e || argv.env || 'default';

    mix.styles([
	    'prism.css',
		'poole.css',
		'syntax.css',
		'lanyon.css',
	])
	.scripts([
		'prism.js'
	])
    .exec('php katana build --env=' + env, [
    	'./content/*', 
    	'./content/**/*', 
    	'./config*.php'
    ])
    .browserSync({
        server: { baseDir: 'public' },
        proxy: null,
        files: [ 'public/**/*' ]
    });
});
