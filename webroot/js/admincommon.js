;(function($, window, undefined) {

	$.fn.tiny_mce = function() {
		tinymce.init({
		    selector: "textarea",
		    plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    height : 300,
		    resize : true
		});
	}

	$.fn.delete_img = function() {
		$('.drop').click(function(event){

			event.preventDefault();

			var url = $(this).attr('href');
			var conten = $(this).attr('data');

			$.ajax({
				type	: "POST",
				url		: url,
				async	: false,
				success	: function(){	
					//location.reload();	

					$('#'+conten).fadeOut('slow', function() {
						$(this).remove()
					});
				}
			});
		});
	}

})(jQuery, window)


	function convertDate(timestamp){
		var fecha = new Date(timestamp*1000);
		var months = ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];
		var year = fecha.getFullYear();
		var month = months[fecha.getMonth()];
		var date = fecha.getDate();
		var time = date+' '+month+' '+year;
		return time;
	};

	function convertDateTime(timestamp){
		var fecha = new Date(timestamp*1000);
		var months = ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];
		var year = fecha.getFullYear();
		var month = months[fecha.getMonth()];
		var date = fecha.getDate();
		var hour = fecha.getHours();
		if (hour<10)
		 hour = '0'+hour
		var minute = fecha.getMinutes();
		if (minute<10)
		 minute = '0'+minute
		var second = fecha.getSeconds();
		if (second<10)
		 second = '0'+second
		var time = date+' '+month+' '+year+' '+hour+':'+minute+':'+second;
		return time;
	};
