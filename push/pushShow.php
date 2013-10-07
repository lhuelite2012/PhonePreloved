<?php include("../server.php"); 
	include("../commodityPath.php");
	include("../addtime.php");
?>
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
		$time = array();
		
		while($push_row = mysql_fetch_array($push_view_result)){?>
        	<a href="commodity.php?c_number=<?php echo $push_row['c_number'];?>"><div id="push_a" class="push_a">
            <hr size="1px" color="#999999" />
           
            <div id="push_mp"><img src="<?php echo $displayPathWeb.$push_row['c_mp'];?>"  onload="javascript:DrawImage(this,90,95);" /></div>    
            <div id="push_name">您追蹤的商品 <strong><?php echo $push_row['c_name'];?></strong></div>
            <div id="push_who">已被 <strong><?php echo $push_row['account'] ." ".$push_row['p_type'];?></strong></div>
            <div id="push_type"> </div>
            <?php if($push_row['file']!=""){?>
            	<div id="push_whoP"><img src="<?php echo "../upload/".$push_row['file'];?>" onload="javascript:DrawImage(this,50,50);"/></div>
            <?php }?> 
            <div id="push_view">出價金額為 <strong><?php echo $push_row['bid_price'];?></strong></div>
            <div id="push_time" class="push_time"><?php echo $push_row['p_time'];?></div>
            </div>
            </a>
<?php		
		}
?>
		</div>
<script type="text/javascript" >
	$(document).ready(function(e) {
		$('.push_a').hover(function(){
			$(this).css('background','#E7EAC1');}
		,function(){
			$(this).css('background','#F6F7E7');
		})
    });
</script>