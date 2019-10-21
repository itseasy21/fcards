/*
 * b4st JS
 */

(function ($) {

	'use strict';

	$(document).ready(function() {

		// Comments

		$('.commentlist li').addClass('card mb-3');
		$('.comment-reply-link').addClass('btn btn-secondary');

		// Forms

		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Pagination fix for ellipsis

		$('.pagination .dots').addClass('page-link').parent().addClass('disabled');

		// You can put your own code in here
				$('.customer-logos').slick({
						slidesToShow: 6,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 1500,
						arrows: false,
						dots: false,
						pauseOnHover: false,
						responsive: [{
								breakpoint: 768,
								settings: {
										slidesToShow: 4
								}
						}, {
								breakpoint: 520,
								settings: {
										slidesToShow: 3
								}
						}]
				});

	});

}(jQuery));
