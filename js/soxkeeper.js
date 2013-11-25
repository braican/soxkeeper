
(function(SOX, $, undefined){

	SOX.init = function(){

		$("#opponent").chosen();

		$('form').on('submit', function(e){
		    e.preventDefault();
		    console.log($(this).serialize());
		    $.ajax({
		        type     : "POST",
		        cache    : false,
		        url      : $(this).attr('action'),
		        data	 : $(this).serialize(),
		        success  : function(data) {
		        	console.log(data);

		            $(".success-text").empty().html(data).animate({opacity:1});
		            setTimeout(function(){
		            	$(".success-text").animate({opacity:0});
		            }, 10000);
		            $(".game-list").load("util/game-list.php");
		        }
		    });

			$('form input[type=text]').val('');

		});
	}

	$(document).ready(function($) {
		SOX.init();	
	});
	
})(window.SOX = window.SOX || {}, jQuery);