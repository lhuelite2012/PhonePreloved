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
			
		$push_view = "select * from push where push_m_number = $m_number order by p_time desc limit 6 ";
		$push_view_result = mysql_query($push_view);
		$push_view_total =mysql_num_rows($push_view_result);
		if($push_view_total>0){?>
        	<font color="#333333" size="3">　最新通知</font>
		<?php }else{?>
			<font color="#333333" size="3">　沒有任何最新動態</font>
		<?php	}

		while($push_row = mysql_fetch_array($push_view_result)){
			$c_number = $push_row['c_number'];
			$p_type = $push_row['p_type'];
			$p_time = $push_row['p_time'];
			$push_m_number = $push_row['push_m_number'];
			$sql = "select c_name,c_mp from commodity where c_number = $c_number";
			$result = mysql_query($sql);
			$row = mysql_fetch_array($result);
			$c_name = $row['c_name'];
			$c_mp = $row['c_mp'];
			
			switch ($p_type){
				case "追蹤被出價":
					$sql = "select b.bid_price,m.account,m.file from bid b join members m on b.m_number = m.m_number where b.bid_time = '$p_time' and b.c_number = $c_number";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$who = $row['account'];
					$view = $row['bid_price'];
					$action = "追蹤的商品";
					$action2 = "出價了";
					$m_file = $row['file'];
					$view2 = "出價金額為";
					$data = 1;
					$no = "";
				break;
				case "販賣被出價":
					$sql = "select b.bid_price,m.account,m.file from bid b join members m on b.m_number = m.m_number where b.bid_time = '$p_time' and b.c_number = $c_number";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$who = $row['account'];
					$view = $row['bid_price'];
					$action = "販賣的商品";
					$action2 = "出價了";
					$m_file = $row['file'];
					$view2 = "出價金額為";
					$data = 1;
					$no = "";
				break;
				case "發問":
					$sql = "select m.account,m.file from qa q join members m on q.m_number = m.m_number where q.q_time = '$p_time' and q.c_number = $c_number";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$who = $row['account'];
					$view = "";
					$action = "販賣的商品";
					$action2 = "發問了";
					$m_file = $row['file'];
					$view2 = "趕快去看看吧！";
					$data = 4;
					$no = "";
				break;
				case "回答":
					$sql = "select account,file from members where m_number = $m_number";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$who = "　賣家　";
					$view = "";
					$action = "發問的商品";
					$action2 = "回答了";
					$m_file = $row['file'];
					$view2 = "趕快去看看吧！";
					$data = 4;
					$no = "";
				break;
				case "得標":
					$sql = "select account,file from members where m_number = $m_number";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$who = "　賣家　";
					$view = "";
					$action = "出價的商品";
					$action2 = "選為得標者！";
					$m_file = $row['file'];
					$view2 = "恭喜您　趕快進行交易吧！";
					$data = 1;
					$no = "";
				break;
				case "未得標":
					$sql = "select account,file from members where m_number = $m_number";
					$result = mysql_query($sql);
					$row = mysql_fetch_array($result);
					$who = "　賣家　";
					$view = "";
					$action = "出價的商品";
					$action2 = "選上！";
					$m_file = $row['file'];
					$view2 = "別難過　繼續尋找吧！";
					$data = 1;
					$no = "未";
				break;
			}
			
			?>
        	<a href="commodity.php?c_number=<?php echo $push_row['c_number'];?>&data=<? echo $data; ?>">
            <div id="push_a" class="push_a">
                <hr size="1px" color="#999999" />
                您<font color="#000099"><? echo $action;?>
                <div id="push_mp"><img src="../<? echo $displayPathWeb.$c_mp;?>" onload="javascript:DrawImage(this,90,95);" /></div>    
                <div id="push_name"></font><strong>「<? echo $c_name;?>」</strong></div>
                <div id="push_who"><? echo $no; ?>被<strong><? echo $who;?></strong><? echo $action2;?></div>
 
                <div id="push_whoP"><img src="../<? echo $m_file;?>" onload="javascript:DrawImage(this,50,50);"/></div>
                <div id="push_view"><? echo $view2;?><strong><? echo $view;?></strong></div>
                <div id="push_time" class="push_time"><? echo $p_time;?></div>
             
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