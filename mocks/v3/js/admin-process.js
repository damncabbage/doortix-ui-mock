
$(document).ready(function(){

	// HACK: Switch to a form submission handler, make AJAX request, etc.
	$('#search form.search').submit(function(e){
		e.preventDefault();

		// TODO: Move animation out to somewhere generic.
		oldPanel = $('#search');
		newPanel = $('#search-results');

		// HACK: Styling values embedded in javascript.
		oldPanel.animate({
			left: '-960px',
			opacity: 0
		}, 'slow', 'swing', function(){
			$(this).addClass('hide previous');
		});

		newPanel.animate({
			left: '0px',
			opacity: 1
		}, 'slow', 'swing', function(){
			$(this).removeClass('hide next');
		});


	});


});
