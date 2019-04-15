var gulp = require('gulp');
var php = require('gulp-connect-php');
var bs = require('browser-sync'); // create a browser sync instance.
var paths = {
      php:['*.php'],
      css:['*.css'],
      html:['*.html']
    };


gulp.task('php', function(done){
    gulp.src(paths.php).pipe(bs.reload({stream:true}));    
    done();
});
gulp.task('browser-sync',gulp.series('php', function(done) {
    php.server({},function(){
	    bs({
	    	proxy:'localhost:3000/Site/view'
	    });
    });
    done();
}));

gulp.task('watch', gulp.series('browser-sync', function (done) {
    gulp.watch(paths.css).on('change',function(){bs.reload();
    });
    gulp.watch(paths.php).on('change',function(){bs.reload();
    });
    gulp.watch(paths.html).on('change',function(){bs.reload();
    });
    done();
}));



