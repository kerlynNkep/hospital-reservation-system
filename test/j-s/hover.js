
	$(document).ready(function(){

		$("#log").mouseover(function(){
			$(this). Materialize.toast('I am a toast!', 4000) // 4000 is the duration of the toast
								// Materialize.toast(message, displayLength, className, completeCallback);
 
		});

		$("#note").mouseout(function(){
			$(this).css({"background-color":"black",
						"font-family":"Bradley Hand",
						"font-size":"19"});

		});

	});

		
