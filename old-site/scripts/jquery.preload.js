(function($) {
    $.fn.preload = function(options) {
	    var opts 	= $.extend({}, $.fn.preload.defaults, options),
		    o		= $.meta ? $.extend({}, opts, this.data()) : opts;
	    return this.each(function() {
		    var $e	= $(this),
			    t	= $e.attr('rel'),
			    i	= $e.attr('href'),
			    l	= 0;
		    $('<img/>').load(function(i){
			    ++l;
			    if(l==2) o.onComplete();
		    }).attr('src',i);	
		    $('<img/>').load(function(i){
			    ++l;
			    if(l==2) o.onComplete();
		    }).attr('src',t);	
	    });
    };
    $.fn.preload.defaults = {
	    onComplete	: function(){return false;}
    };
})(jQuery);
