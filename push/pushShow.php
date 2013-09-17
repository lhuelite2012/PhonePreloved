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
		left:10px;
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
    #push_time{
		position:relative;
	}
    #push_whoP{
		position:relative;	
	}
    #push_who{
		position:relative;
	}
</style>
<?php
	include("server.php");
	include("commodityPath.php");
	$push_sql = "select count(*) from push where m_number = $m_number and p_check = false";
	$push_result = mysql_query($push_sql);
	$push_total = mysql_fetch_row($push_result);
	if($push_total[0] == 0)
		$push_total[0] = "";
	
	$push_view = "select * from push join bid join commodity join members on push.m_number = members.m_number and push.bid_number = bid.bid_number and push.c_number = commodity.c_number where push.m_number = $m_number";
	$push_view_result = mysql_query($push_view);?>
    	<div id="beeper"></div>
    	<div id="pushShow">
        	<font color="#333333" size="3">　最新通知</font>
<?php
		while($push_row = mysql_fetch_array($push_view_result)){?>
        	<hr size="1px" color="#999999" />
            <div id="push_mp"><img src="<?php echo $displayPathWeb.$push_row['c_mp'];?>"  onload="javascript:DrawImage(this,90,90);" /></div>    
            <div id="push_name"><?php echo $push_row['c_name'];?></div>
            <div id="push_type"><?php echo $push_row['p_type'];?></div>
            <div id="push_view"><?php echo $push_row['bid_price'];?></div>
            <div id="push_time"><?php echo $push_row['p_time'];?></div>
            <div id="push_whoP"><img src="<?php echo "upload/".$push_row['file'];?>" onload="javascript:DrawImage(this,50,50);"/></div>
            <div id="push_who"><?php echo $push_row['name'];?></div>
            
<?php	}?>
		</div>
        
         <script src="jQuery/imageScaling.js"></script>