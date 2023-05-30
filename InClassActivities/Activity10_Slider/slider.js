$(document).ready(function () {
	$("#slider").bxSlider({
		auto: true,
		minSlides: 1,
		maxSlides: 1,
		slideWidth: 250,
		slideMargin: 10,
		captions: true,
		pager: true,
		pagerSelector: '#pager',
		pagerType: 'short',
		pagerShortSeparator: ' / ',
		pause: 3000,
		moveSlides: 1,
		randomStart: true,
	});
});