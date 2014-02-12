;(function($, window, undefined) {

	$.fn.changePermission = function() {

		var url = $(this).attr('action');

		$('.upd').on('change', function(){

			if ($(this).is(':checked')) {
				var action = $(this).attr('name')+'-add';
			} else {
				var action = $(this).attr('name')+'-remove';
			};

			$.ajax({
				type : "POST",
				url : url+'-'+action,
				dataType : "html",
				success : function(data) {
					$('.error-msg').empty().append(data).fadeIn();
					$('.error-msg').delay(2000).fadeOut();
					//$('.error-msg').empty();
				}
			});

		});
	}

})(jQuery, window)