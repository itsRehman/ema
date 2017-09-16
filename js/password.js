
$(document).ready(function(){
	$('#status').keyup(function(){
		var len = $('#status').val().length;
		if(len<1){
			$('.first').text("");
			$('.first').removeClass("red green orange");
			
		}
		else if(len<=4){
			$('.first').text("Weak");
			$('.first').addClass("red");
			$('.first').removeClass("green orange");
		
		}
		else if(len<=8){
			$('.first').text("Good");
			$('.first').addClass("orange");
			$('.first').removeClass("green red");
		}
		else
		{
		$('.first').text("Strong");
		$('.first').addClass("green");	
		$('.first').removeClass("red orange");
		}
	});
});


