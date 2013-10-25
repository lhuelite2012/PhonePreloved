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