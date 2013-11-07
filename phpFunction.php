<?php
session_start();
//------------------------------function-----------------------------------
//-------------------------------------------------------------------------
//刪除 推薦(recommend) 內此會員的資料


	function delete_recommend($r_type,$m_number)
	{
		$re_sql = "select * from recommend where r_type = $r_type and m_number = $m_number";
		$re_query = mysql_query($re_sql);
		$re_row = mysql_fetch_row($re_query);
		if(isset($re_row))
		{
			$delete_sql = "delete from recommend where r_type = $r_type and m_number = $m_number";
			mysql_query($delete_sql);
		}
	}
//------------------------------|||||||||----------------------------------



//-------------------------------------------------------------------------	
//存入 推薦(recommend) 資料表 (依據筆數間距給分)


function floor_count($s_sql,$r_type,$r_score,$m_number,$what)
	{
		$s_query = mysql_query($s_sql);
		$r_total = mysql_num_rows($s_query); //計算總筆數   
		$f = floor($r_total / 5); //間距
		$a = $f;
		$count = 1; //計數
	
		while($s_row = mysql_fetch_array($s_query))
		{
			$is = $s_row[$what]; 
			$c_sql = "select c_number from commodity where $what = '$is' and m_number != $m_number";
			insert_recommend($c_sql,$r_type,$r_score,$m_number);
			if($r_score !=1)
			{
				if($f > $count)
				{
					$count++;
				}
				else if($f == $count)
				{
					$r_score --;
					$f = $f+$a;
					$count++;
				}
			}
		}
	}
	
//------------------------------|||||||||----------------------------------



//-------------------------------------------------------------------------	
//存入 推薦(recommend) 資料表


	function insert_recommend($c_sql,$r_type,$r_score,$m_number)
	{
		$c_query = mysql_query($c_sql);
		while($c_row = mysql_fetch_array($c_query))
		{
			$c_number = $c_row['c_number'];
			$insert_sql="insert into recommend (r_type,m_number,c_number,r_score) value ($r_type,$m_number,$c_number,$r_score)";
			mysql_query($insert_sql);			
		}
	} 
//------------------------------|||||||||----------------------------------

//-------------------------------------------------------------------------	
//試穿推薦  存入 推薦(recommend) 資料表


	function try_recommend($try_sql,$r_type,$r_score,$m_number,$what)
	{
		$try_mode = array("c_try_height","c_try_weight","c_try_shoulder","c_try_bust","c_try_waistline","c_try_hips");
		$try_query = mysql_query($try_sql);
		$try_row = mysql_fetch_array($try_query);
		for($a=0;$a<6;$a++){
			if($try_row[$a]!=0){
				$hi = $try_row[$a]+5;
				$lo = $try_row[$a]-5;
				$sql = "select c_number from commodity where $try_mode[$a] between $lo and $hi  ";
				$query = mysql_query($sql);
				while($c_row = mysql_fetch_array($query))
				{
					$c_number = $c_row['c_number'];
					$insert_sql="insert into recommend (r_type,m_number,c_number,r_score) value ($r_type,$m_number,$c_number,$r_score)";
					mysql_query($insert_sql);			
				}
			}
		}
		
	} 
//------------------------------|||||||||----------------------------------

//-------------------------------------------------------------------------	
//鞋子尺寸推薦  存入 推薦(recommend) 資料表


	function try_shoes_recommend($try_sql,$r_type,$r_score,$m_number,$what)
	{
		$try_query = mysql_query($try_sql);
		$try_row = mysql_fetch_array($try_query);
		$JP22 = array(5,4,3.5,36,22);
		$fh = array("36.00","36.67","37.33","38.00","38.67","39.33","40.00","40.67","41.33","42.00","42.67","43.33","44.00","44.67","45.33","46.00","46.67","47.33","48.00","48.67","49.33","50.00","50.67");
		switch ($try_row[0]){
			case "美國(女)":
				$shoes_size = $try_row[1];
				$fh_number = ($shoes_size-$JP22[0])*2;
				$size_mode = array($shoes_size,$shoes_size-1,$shoes_size-1.5,$fh[$fh_number],$shoes_size+17);
				//return $size_mode[0]." ".$size_mode[1]." ".$size_mode[2]." ".$size_mode[3]." ".$size_mode[4];
				break;
			case "美國(男)":
				$shoes_size = $try_row[1];
				$fh_number = ($shoes_size-$JP22[1])*2;
				$size_mode = array($shoes_size+1,$shoes_size,$shoes_size-0.5,$fh[$fh_number],$shoes_size+18);
				
				break;
			case "英國":
				$shoes_size = $try_row[1];
				$fh_number = ($shoes_size-$JP22[2])*2;
				$size_mode = array($shoes_size+1.5,$shoes_size+0.5,$shoes_size,$fh[$fh_number],$shoes_size+18.5);
				
				break;
			case "法國":
				$shoes_size = $try_row[1];
				$a=0;
				while($shoes_size!=$fh[$a]){
					$a++;
				}
				$size_mode = array($JP22[0]+$a/2,$JP22[1]+$a/2,$JP22[2]+$a/2,$shoes_size,$JP22[4]+$a/2);
				
				break;
			case "日本":
				$shoes_size = $try_row[1];
				$fh_number = ($shoes_size-$JP22[4])*2;
				$size_mode = array($shoes_size-17,$shoes_size-18,$shoes_size-18.5,$fh[$fh_number],$shoes_size);
				
				break;
		}
		$size_range = array($size_mode[0]-0.5,$size_mode[0]+0.5,$size_mode[1]-0.5,$size_mode[1]+0.5,$size_mode[2]-0.5,$size_mode[2]+0.5,$size_mode[3]-0.67,$size_mode[3]+0.67,$size_mode[4]-0.5,$size_mode[4]+0.5);
		$sql = "select c_number from commodity where  (s_size='美國(女)' and size between ".$size_range[0]." and ".$size_range[1].")  or  (s_size='美國(男)' and size between ".$size_range[2]." and ".$size_range[3].")  or  (s_size='英國' and size between ".$size_range[4]." and ".$size_range[5].") or  (s_size='法國' and size between  ".$size_range[6]." and ".$size_range[7].") or  (s_size='日本' and size between  ".$size_range[8]." and ".$size_range[9].")";
		$result = mysql_query($sql);
		while($row = mysql_fetch_array($result)){
			$c_number = $row['c_number'];
			$insert_sql="insert into recommend (r_type,m_number,c_number,r_score) value ($r_type,$m_number,$c_number,$r_score)";	
			mysql_query($insert_sql);
		}
	} 
//------------------------------|||||||||----------------------------------



//細分類
 	function finesort($s_fsort){
		$sql = "select * from sort where s_fsort = $s_fsort";
		$result = mysql_query($sql);
		while($rows = mysql_fetch_row($result)){
		?>
            <tr align="left">
            	<td align="left">
                	<a href="?s_fsort=<?php echo $s_fsort;?>&s_number=<?php echo $rows[0];?>"><?php echo "-".$rows[1];?></a>
                </td>
            </tr>
        <?php
		}
	}
//-------------------------------------------------------------------------	
//試穿者資料

		function try_fun($str){
		  if($str !="" and $str!="0")
		  	 return $str;
		  else
		  	 return "沒有試穿資訊";
	  }
	  
//------------------------------|||||||||----------------------------------
//-------------------------------------------------------------------------	
//通知
	function push($p_type,$addtime,$c_number,$push_who){
		$push_sql = "insert into push(p_type,p_time,c_number,push_m_number) values ('$p_type','$addtime','$c_number','$push_who')";
		mysql_query($push_sql);
	}

//------------------------------|||||||||----------------------------------
//-------------------------------------------------------------------------
//尺寸換算
	function changeSize($gender,$format,$value){	//$format 格式  $value 值
		$JP22 = Array(5,4,3.5,36,22); //JP尺寸
		switch($format){
			case "US": //轉換成美國
				if($gender=="男"){//男性
					return $JP22[4]+($value-$JP22[1]);
				}else{			 //女性
					return $JP22[4]+($value-$JP22[0]);
				}
			break;
			case "UK": //轉換成英國
				return $JP22[4]+($value-$JP22[2]);
			break;
			case "FR": //轉換成法國
				return round($JP22[4]+($value-$JP22[3])*0.75,2);
			break;
			case "JP": //日本
				return $value;
			break;
		}
		
	}
//------------------------------|||||||||----------------------------------
?>