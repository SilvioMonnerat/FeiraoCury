if(!window.log) {window.log = function() {log.history = log.history || [];log.history.push(arguments);if(this.console) {console.log(Array.prototype.slice.call(arguments));}};}

(function($, window, undefined){
	$(document).ready(function(){
		log('document ready');
		$( '.box2 > a' ).click( function() {
	        $('.ligamos-voce-agora', $(this).parent()).toggle();
	        return false;
	    });
	});
})(jQuery, window);

