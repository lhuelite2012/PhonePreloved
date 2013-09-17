$(function(){
		$('.nice_choice').hover(
			function(){
				$(this).animate({boxShadow: '0px 0px 20px #F04E17'});
			}
			,
			function(){
				$(this).animate({boxShadow: '0 0 0px'});
			}
		);
		$('.track').hover(
			function(){
				$(this).animate({boxShadow: '0 0 10px #000000'});
			}
			,
			function(){
				$(this).animate({boxShadow: '0 0 0px'});
			}
		);
		
	});