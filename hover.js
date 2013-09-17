$(function(){
		$('.nice_choice').hover(
			function(){
				$(this).animate({'box-Shadow': '0 0 10px #6B8E99'});
			}
			,
			function(){
				$(this).animate({'box-Shadow': '0 0 0px'});
			}
		);
		$('.track').hover(
			function(){
				$(this).animate({'box-Shadow': '0 0 10px #000000'});
			}
			,
			function(){
				$(this).animate({'box-Shadow': '0 0 0px'});
			}
		);
		
	});