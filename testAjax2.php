<?php include("server.php"); ?>
<script src="jQuery/imageScaling.js"></script>
	<div id="push_all">
    	<div id="beeper"></div>
    	<div id="pushShow">
        <?php
		if(isset($m_number) or $m_number!="")
			$m_number;
		else
			$m_number = $_POST['m_number'];
			
		$push_view = "select  p.p_type,p.p_time,p.c_number,p.bid_number,b.bid_price,b.m_number,c.c_name,c.c_mp,m.account,m.file  from push p join bid  b join commodity c join members m on b.m_number = m.m_number and p.bid_number = b.bid_number and p.c_number = c.c_number where p.push_m_number = $m_number order by p.p_time desc limit 6 ";
		$push_view_result = mysql_query($push_view);
		$push_view_total =mysql_num_rows($push_view_result);
			if($push_view_total>0){?>
        	<font color="#333333" size="3">　最新通知</font>
		<?php }else{?>
			<font color="#333333" size="3">　沒有任何最新動態</font>
<?php	}
		$n =0;
		$time = array();
		
		while($push_row = mysql_fetch_array($push_view_result)){?>
        	<hr size="1px" color="#999999" />
            <div id="push_mp"><img src="<?php echo $displayPathWeb.$push_row['c_mp'];?>"  onload="javascript:DrawImage(this,90,95);" /></div>    
            <div id="push_name">您追蹤的商品 <strong><?php echo $push_row['c_name'];?></strong></div>
            <div id="push_who">已被 <strong><?php echo $push_row['account'] ." ".$push_row['p_type'];?></strong></div>
            <div id="push_type"> </div>
            <?php if($push_row['file']!=""){?>
            	<div id="push_whoP"><img src="<?php echo "../upload/".$push_row['file'];?>" onload="javascript:DrawImage(this,50,50);"/></div>
            <?php }?> 
            <div id="push_view">出價金額為 <strong><?php echo $push_row['bid_price'];?></strong></div>
            <div id="push_time<?php echo $n;?>" class="push_time"></div>
<?php	$n++;
		$time[] = $push_row['p_time'];
		}
?>
	<script>var time = new Array(<?php echo count($time);?>);  //建立javascropt b陣列</script>
<?php
	for($i=0;$i<= count($time);$i++){
?>
		<script>
			time[<?php echo $i;?>]="<?php echo $time[$i];?>";     //將$a陣列 存入 b陣列中
		</script>
<?php
    }
?>
		</div>
    </div>
        
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