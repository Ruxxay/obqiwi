//ajax'ик
$(function() {
	$("#form").submit(function() {
	   return false;
	});

	$('#submit').click(function() {
		var search = $('#search').val();
		if (search == '') {

		}
		else 
		{
			$.ajax({
				url:        'scr_search.php',
				type:       'POST',
				cache:      false,
				data:       {'search':search},
				dataType:   'html',
				success: function(data) {
					$('#ResultMessage').html(data);
					$('#ResultMessage').fadeIn('slow');
				}
			});
		}
	});
});