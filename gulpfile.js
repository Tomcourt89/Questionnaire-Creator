var elixir = require('laravel-elixir');

elixir(function(mix) {
    
    mix.sass(
        'app.scss',
        'public/css',
        'resources/sass',
        {includePaths: ['vendor/bower_components/foundation/scss']}
    );

    mix.scripts(
        ['vendor/modernizr.js', 'vendor/jquery.js', 'foundation.min.js'],
        'public/js/app.js',
        'vendor/bower_components/foundation/js/'
    );
});
