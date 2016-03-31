;
(function ($) {

	// Scripts which runs after DOM load

	$(document).ready(function () {

		// Add fancybox to images
		var $img;
		if ($img = $('img[class*="wp-image"]')) {
			$img.parent('a[href$="jpg"], a[href$="png"], a[href$="gif"]').fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		}

		$('a[rel*="album"]').fancybox({
			helpers: {
				overlay: {
					locked: false
				}
			}
		});

	});

	// Scripts which runs after all elements load

	$(window).load(function () {

		//jQuery code goes here

	});

	// Scripts which runs at window resize

	$(window).resize(function () {

	});

}(jQuery));
