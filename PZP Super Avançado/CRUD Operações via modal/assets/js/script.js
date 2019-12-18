$(function() {
	$('.modal_ajax').on('click', function(e) {
		e.preventDefault();

		$('.modal_bg').show();
		$('.modal').html('Carregando...');

		var link = $(this).attr('href');

		$.ajax({
			url:link,
			type:'GET',
			success: function(html){
				$('.modal').html(html);
			}
		})

	});
});