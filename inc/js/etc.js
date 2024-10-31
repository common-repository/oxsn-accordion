(function($) {

	$.fn.findNext = function(selector, steps, scope)
	{
	    if (steps)
	    {
	        steps = Math.floor(steps);
	    }
	    else if (steps === 0)
	    {
	        return this;
	    }
	    else
	    {
	        var next = this.next(selector);
	        if (next.length)
	            return next;
	        steps = 1;
	    }

	    scope = (scope) ? $(scope) : $(document);

	    var kids = this.find(selector);

	    hay = $(this);
	    while(hay[0] != scope[0])
	    {
	        hay = hay.parent();     
	        var rs = hay.find(selector).not(kids).add($(this));
	        var id = rs.index(this) + steps;
	        if (id > -1 && id < rs.length)
	            return $(rs[id]);
	    }
	    return $([]);
	}

	$('.oxsn_accordion_title').click(function(e){

		$(this).toggleClass('active').findNext('.oxsn_accordion_content').slideToggle();

	});

})(jQuery);