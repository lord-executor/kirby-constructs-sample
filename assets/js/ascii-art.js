
(function ($) {

	$(document).ready(function () {

		$('.async-ascii-art').each(function () {
			var $art = $(this);
			$.get('/artiiproxy', { text: $art.text() })
				.done(function (response) {
					$art.html(response.text);
				});
		});


		console.log('gurray');
	});

})(jQuery);
