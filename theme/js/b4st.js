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

			// sidebar search
			function myfunction()
			{
				event.preventDefault();
				var origin   = window.location.href;
				var playername = $( "#playername option:selected" ).text();
				var teamname = $( "#teamname option:selected" ).text();
				// alert(keywords);
				// var searchURI = origin + '/jobs/?s=' + category + '+' + jobtype + '+' + location;
				// console.log(searchURI);
				//window.location.replace(searchURI);
				//location.href = searchURI;

				if(playername != "" && teamname == "")
				{
					var searchURI = origin + '/?s=' + playername;
					window.location.replace(searchURI);
				}
				else if(teamname != "" && playername == "")
				{
					var searchURI = origin + '/?s=' + teamname;
					window.location.replace(searchURI);
				}else{
					var searchURI = origin + '/?s=' + teamname + "+" + playername;
					window.location.replace(searchURI);
				}

			}

	});

}(jQuery));
