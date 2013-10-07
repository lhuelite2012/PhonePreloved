<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>
<style type="text/css">
#pushShow{
		position:absolute;
		width:350px;
		border: solid 2px #ddd;
		z-index: 100;
		background: #F6F7E7;
		border-radius:3px 3px 3px 3px;
		left:670px;
		top:51px;
		padding:5px 0px 5px 0px ;
	}
	#beeper{
		position:absolute;
		background:url(../%E7%B4%A0%E6%9D%90/beeper.png);
		width:20px;
		height:12px;
		left:815px;
		top:43px;
		z-index: 101;
	}
	#push_mp{
		position:relative;
		float:left;
		padding:0px 5px 0px 10px ;
		width:85px;
		height:85px;
	}
	#push_name{
		position:relative;
	}
    #push_type{
		position:relative;
	}
    #push_view{
		position:relative;
	}
    .push_time{
		position:relative;
		height:15px;
		text-align:left;
		font-size:9px;
		padding:15px 0px 0px 0px;
	}
    #push_whoP{
		position:absolute;
		left:290px;
		width:50px;
		height:50px;
	}
    #push_who{
		position:relative;
	}
</style>
<script type="text/javascript" src="jquery1.2.6.js"></script>

<body>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(e) {
    $('body').load("testAjax2.php",{"m_number":"7"});
});
</script>
<script type="text/javascript">
	$(function(){
		var push_click = 1;
		$("#pushbox").click(function(){
			if(push_click == 1){
				$("#push_all").show();
				push_click = 0;
			}
			else{
				$("#push_all").hide();
				push_click = 1;
			}
				
		});
		$('body').click(function(evt) {
            if($(evt.target).parents("#push_all").length==0 &&
evt.target.id != "pushbox") {
				push_click = 1;
                $('#push_all').hide();
            }
        });
		
		function cal(){
				var i = 0;
				while(i <= <?php echo count($time); ?>){
					var startDate = new Date();
					var endDate = new Date(time[i]);
					var spantime = (startDate-endDate)/1000;
						spantime --;
						var d = Math.floor(spantime / (24 * 3600));
						var h = Math.floor((spantime % (24*3600))/3600);
						var m = Math.floor((spantime % 3600)/(60));
						var s = Math.floor(spantime%60);
						if(d>365)
							str = "民國" + Number(endDate.getYear()-11) + "年" + Number(endDate.getMonth()+1) +"月" + endDate.getDate()+"日" ;
						else if(d>10)
							str = Number(endDate.getMonth()+1) +"月" + endDate.getDate()+"日";
						else if(d>1)
							str = d + "天前";
						else if(h>1)
							str = h + "小時前";
						else if(m>1)
							str = m + "分鐘前";
						else 
							str = "幾秒前";
						
						document.getElementById("push_time"+i).innerHTML = str;
					i++;
				}
				
			}
			window.onload = function(){
				setInterval(cal, 1000);
			}
	});	
</script>