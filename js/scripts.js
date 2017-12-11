$(window).on('load', function(){
  console.log('scripts');

	$('.instagram-tile').hover(function() {
			console.log('hover');
	        $(this).addClass('hover');
	    }, function() {
	        $(this).removeClass('hover');
	    }
	);

});
