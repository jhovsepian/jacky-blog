$('.post').readmore({
	speed: 75,
	maxHeight: 500
});

$('.posts').readmore({
	afterToggle: function(trigger, element, expanded) {
		if(! expanded) {
			$('html, body').animate( { scrollTop: element.offset().top}, {duration: 100} );
		}
	}
});