<div id=page><br />
<br />

<?php
/****** 建立分頁連結 ******/	
			//若只有1頁
			if($page_count >1)
			{
			// 顯示的頁數範圍
			$range = 3;
			// 若果正在顯示第一頁，無需顯示「前一頁」連結	
			if ($page > 1) {
    			// 使用 << 連結回到第一頁	
    			echo " <a href='{$_SERVER['PHP_SELF']}?page=1'>第一頁</a> ";
				// 前一頁的頁數
				$prevpage = $page - 1;
				// 使用 < 連結回到前一頁
				echo " <a href='{$_SERVER['PHP_SELF']}?page=$prevpage'>上一頁</a> ";	
			} // end if
			
			// 顯示當前分頁鄰近的分頁頁數
			for ($x = (($page - $range) - 1); $x < (($page + $range) + 1); $x++) {
				// 如果這是一個正確的頁數...
				if (($x > 0) && ($x <= $page_count)) {
					// 如果這一頁等於當前頁數...
					if ($x == $page) {
						// 不使用連結, 但用高亮度顯示
						echo " [<b>$x</b>] ";	
						// 如果這一頁不是當前頁數...
					} else {	
						// 顯示連結	
						echo " <a href='{$_SERVER['PHP_SELF']}?page=$x'>$x</a> ";
					} // end else	
				} // end if	
			} // end for
			
			// 如果不是最後一頁, 顯示跳往下一頁及最後一頁的連結	
			if ($page != $page_count) {	
				// 下一頁的頁數	
				$nextpage = $page + 1;	
				// 顯示跳往下一頁的連結	
				echo " <a href='{$_SERVER['PHP_SELF']}?page=$nextpage'>下一頁</a> ";
				// 顯示跳往最後一頁的連結	
				echo " <a href='{$_SERVER['PHP_SELF']}?page=$page_count'>最後一頁</a> ";
			} // end if	
			} else {
				echo " [<b>1</b>] ";	
			}
			/****** 完成建立分頁連結 ******/
?><br />
<br />
<br />
<br />
<br />

</div>