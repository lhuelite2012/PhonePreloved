var startDate = new Date();
	
	var spantime = (endDate - startDate)/1000;
	function cal(){
		if(spantime >0){
		spantime --;
		var d = Math.floor(spantime / (24 * 3600));
		var h = Math.floor((spantime % (24*3600))/3600);
		var m = Math.floor((spantime % 3600)/(60));
		var s = Math.floor(spantime%60);
		str = d + "天" + h + "小時" + m +"分" + s + "秒";
		document.getElementById("pad").innerHTML = str;
		}
		else
		{
			str = "時間已到期";
		document.getElementById("pad").innerHTML = str;
		}
	}
	window.onload = function(){
		setInterval(cal, 1000);
	}