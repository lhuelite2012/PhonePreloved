<style type="text/css">
	#apDiv6 {
	position:absolute;
	width:86px;
	height:175px;
	z-index:1;
	left: 12px;
	top: 24px;
}/*apdiv6 購物下左邊進階搜尋欄*/
#apDiv2 {
	position:absolute;
	width: 139px;
	top: 400px;
	background:#F6F6E6;
	border-radius: 10px 10px 10px 10px ;
}/*apdiv2 購物下左邊進階搜尋欄圖*/
#test2{
	position:absolute;
	background:#F6F6E6;
	width:140px;
	height:250px;
	border-radius: 10px 10px 10px 10px ;
	border-style:solid;
	border-color:#CCC;
	border-width:2px;
	z-index:26;
}
#mode{
	position:absolute;
	text-align:center;
	margin: 15px 0px 0px -40px;
	z-index:26;
	cursor:pointer;
}
#mode li{
	list-style:none;
	height:35px;
	font-size:24px;
	width:139px;
	opacity:0.5;
	font-weight:bold;
	z-index:26;
	
} 
#mode2,#mode3,#mode4,#mode5,#mode6{
	position:absolute;
	height:250px;
	width:420px;
	background:#000;
	background: url(素材/1px_black2.png) repeat;
	z-index:25;
	margin:-1px;
	border-radius: 10px 10px 10px 10px;
	cursor:default;
	left:-360px;
}
#mode2 img,#mode3 img{
	cursor:pointer;
}
#hidde{
	position:absolute;
	width:570px;
	height:260px;
	overflow:hidden;
	left:10px;
}
.spa{
	font-size:20px;
	color:#FFFFFF;
}
#modecss{
	position:absolute;
	left:15px;
	top:5px;
	
}
.hidden{
	display:none;
}
.price_range{
	position:relative;
	margin:10px 5px 20px;
	float:left;
	width:120px;
	border-radius:5px 5px 5px 5px;
	color:#000;
	text-align:center;
	font-size:17px;
	background:#FFF;
	height:30px;
	line-height:30px;
	cursor:pointer;
	font-weight:bold;
}
.price_mode{
	position:relative;
	left:60px;
	margin:5px 5px 5px 5px ;
	float:left;
	width:120px;
	color:#C00;
	background:#FFF;
	border-radius:5px 5px 5px 5px;
	text-align:center;
	height:30px;
	line-height:30px;
	cursor:pointer;
	font-weight:bold;
}
.closebox{
	position:absolute;
	left:371px;
	cursor:pointer;
}
.locationbox{
	border-radius:5px 5px 5px 5px;
	margin:20px 0px 0px 0px ;
	height:30px;
	line-height:30px;
	text-align:center;
	position:relative;
	width:100px;
	font-size:16px;
	background:#FFF;
	color:#390;
	font-weight:bold;
}
.areat{
	position:relative;
	width:400px;
	color:#FFF;
	font-size:15px;
	margin:-25px 0px 0px 0px ;
	left:110px;
}
.sizebox{
	position:relative;
	left:55px;
	border-radius:5px 5px 5px 5px;
	margin:20px 10px 0px 5px ;
	height:30px;
	line-height:30px;
	text-align:center;
	position:relative;
	width:50px;
	font-size:16px;
	background:#FFF;
	color:#390;
	float:left;
	font-weight:bold;
}
.sizetable{
	position:relative;
	top:20px;
	color:#FFF;
	width:400px;
	border-collapse: collapse;
	border-top: 1px double #E0DDD4;
	border-right: 1px double #E0DDD4;
	border-bottom: 1px double #E0DDD4;
	border-left: 1px double #E0DDD4;
}
.sizetable td{
	text-align:center;
}
.sizetable th{
	text-align:center;
	background:#EAEAEA;
	color:#777265;
}
#clothesbox{
	position:relative;
	display:block;
}
#sex{
	margin:0px 20px;
	color:#E0E0E0;
	font-size:17px;
}
#modetest{
	margin:0px 20px;
	color:#E0E0E0;
	font-size:17px;
}

#pantsbox{
	display:none;
}
#dressesbox{
	display:none;
}
#shoesbox{
	display:none;
}

#cm,#inch{
	font-size:16px;
}
.shoesbox{
	position:relative;
	left:40px;
	border-radius:5px 5px 5px 5px;
	margin:10px 15px 0px 5px ;
	height:30px;
	line-height:30px;
	text-align:center;
	position:relative;
	width:60px;
	font-size:16px;
	background:#FFF;
	color:#390;
	float:left;
	font-weight:bold;
}
.showbox{
	position:absolute;
	top:60px;
	left:5px;
	border-radius:5px 5px 5px 5px;
	margin:10px 5px 0px 5px ;
	height:30px;
	line-height:30px;
	text-align:center;
	position:relative;
	width:85px;
	font-size:16px;
	color:#FFF;
	float:left;
	font-weight:bold;
	border-style:solid;
	border-width:1px;
	border-color:#FFF;
}
#myshoes{
	color:#333;
	border-radius: 5px 5px 5px 5px ;
	font-size:20px;
	text-align:center;
	color:#390;
}
.green{
	color:#7AB709;
}
#unit{
	margin:0px 5px;
	font-size:15px;
}
.remark{
	position:absolute;
	color:#FFF; 
	top:200px; 
	border-style:none; 
	font-size:12px; 
	left:245px;
	width: 150px; 
	text-align:right;
}
.lists{
	list-style:none;
	font-size:16px;
	width:170px;
}
</style>
<div id="apDiv2">

  	<div id="test2">
    	<form action="" method="get" name="formmode">
   		<ul id="mode">
  			<li id="sortmode">分類 <img src="素材/進階搜尋欄三角1.png" /></li>
            <li id="sizemode">尺寸 <img  src="素材/進階搜尋欄三角1.png" /></li>
    		<li id="brandmode">品牌 <img src="素材/進階搜尋欄三角1.png" /></li>
    		<li id="pricemode">價格 <img  src="素材/進階搜尋欄三角1.png" /></li>
    		<li id="locationmode">地區 <img  src="素材/進階搜尋欄三角1.png" /></li>  
    	</ul>
        <div style=" position:relative; text-align:center;top:200px;">
        	<input type="hidden"  name="c_gender" />
            <input type="hidden"  name="s_fsort"  />
             <input type="hidden"  name="s_number" />
             <input type="hidden" name="clothes_size" placeholder="衣服尺寸" />
             <input type="hidden" name="shoes_size2" placeholder="鞋子尺寸" />
             <input type="hidden" name="brand_start" />
             <input type="hidden" name="price_mode" />
             <input type="hidden" name="price_range" />
             <input type="hidden" name="location" />
       		<input type="image" src="素材/進階搜尋鈕.png">
        </div>
        <div style=" position:relative; text-align:left;top:230px; margin:0px -10px; left:-50px;">
        	<ul class="lists">
            	<li style="text-align:center;">搜尋清單</li>
                <hr color="#339900" />
            	<li id="mm"></li>
                <li id="ss"></li>
                <li id="nn"></li>
                <li id="cc"></li>
                <li id="bb"></li>
                <li id="pp2"></li>
                <li id="pp"></li>
                <li id="ll"></li>
            </ul>
        </div>
  	</div>
  <div id="hidde" >
        <div id="mode2" >
            <div id="modecss">
            	<div class="closebox"><img src='素材/fancy_closebox.png'  /></div>
              <span class="spa">類型</span>
              <hr width="230px" align="left" />
            <img class="m1" src="素材/分類鈕-男白.png"  onclick="aa('男')"/>
            <img class="m3"src="素材/分類鈕-中性白.png"  onclick="aa('中性')"/>
            <img class="m2"src="素材/分類鈕-女白.png"  onclick="aa('女')"/><br />
            <span class="spa">商品</span>
            <hr width="350px" align="left" />
            <img class="s1"src="素材/分類鈕-衣服白.png" onclick="bb(1)"/>
            <img class="s2"src="素材/分類鈕-褲子白.png" onclick="bb(2)"/>
            <img class="s3"src="素材/分類鈕-洋裝白.png" onclick="bb(5)"/>
            <img class="s4"src="素材/分類鈕-包包白.png" onclick="bb(3)"/>
            <img class="s5"src="素材/分類鈕-鞋子白.png" onclick="bb(4)"/><br />
              <div id="nn1" class="hidden">
                <span class="spa">長短袖</span>
                <hr width="230px" align="left" />
                <img class="n1"src="素材/分類鈕-長袖白.png" onclick="cc(6)"/>
                <img class="n2"src="素材/分類鈕-短袖白.png" onclick="cc(7)"/>
                <img class="n3"src="素材/分類鈕-背心白.png" onclick="cc(8)"/>
              </div>
              <div id="nn2" class="hidden">
                <span class="spa">長短褲</span>
                <hr width="230px" align="left" />
                <img class="n4"src="素材/分類鈕-長褲白.png" onclick="cc(9)"/>
                <img class="n5"src="素材/分類鈕-短褲白.png" onclick="cc(10)"/>
              </div>
              <div id="nn3" class="hidden">
                <span class="spa">長短洋裝</span>
                <hr width="230px" align="left" />
                <img class="n6"src="素材/分類鈕-長洋裝白.png" onclick="cc(19)"/>
                <img class="n7"src="素材/分類鈕-短洋裝白.png" onclick="cc(20)"/>
              </div>
              <div id="nn4" class="hidden">
                <span class="spa">種類</span>
                <hr width="230px" align="left" />
                <img class="n8"src="素材/分類鈕-手拿包白.png" onclick="cc(11)"/>
                <img class="n9"src="素材/分類鈕-斜背包白.png" onclick="cc(12)"/>
                <img class="n10"src="素材/分類鈕-後背包白.png" onclick="cc(13)"/>
              </div>
              <div id="nn5" class="hidden">
                <span class="spa">種類</span>
                <hr width="230px" align="left" />
                <img class="n11"src="素材/分類鈕-籃球鞋白.png" onclick="cc(14)"/>
                <img class="n12"src="素材/分類鈕-跑步鞋白.png" onclick="cc(15)"/>
                <img class="n13"src="素材/分類鈕-休閒鞋白.png" onclick="cc(16)"/>
                <img class="n14"src="素材/分類鈕-高跟鞋白.png" onclick="cc(17)"/>
                <img class="n15"src="素材/分類鈕-平底鞋白.png" onclick="cc(18)"/>
              </div>
            </div>
        </div>
        <div id="mode3">
          <div id="modecss">
          	<div class="closebox"><img src='素材/fancy_closebox.png'  /></div>
            <span class="spa">品牌字首</span>
            <hr width="350px" align="left" />
           	<?php for ($i=65; $i<=90; $i++) {?>
					<img src="素材/<?php echo chr($i); ?>.png" onclick="dd('<?php echo chr($i); ?>')" title="<?php echo chr($i); ?>" />　　
			<?php }?>
          </div>
        </div>
    <div id="mode4">
      <div id="modecss">
      	<div class="closebox"><img src='素材/fancy_closebox.png'  /></div>
    	<div class="price_mode" id="price_mode1">底標價格</div> <div  class="price_mode" id="price_mode2">最高價格</div>
        <hr width="380px" align="left" />
        	<div class="price_range" id="price_range1">1500元以下</div>
            <div class="price_range" id="price_range2">1500~3000元</div>
            <div class="price_range" id="price_range3">3000~6000元</div>
            <div class="price_range" id="price_range4">6000~12000元</div>
            <div class="price_range" id="price_range5">12000~20000元</div>
            <div class="price_range" id="price_range6">20000元以上</div>
            <div  class="price_range" id="price_range7" style=" margin:0px 0px 0px 25px;width:300px; left:10px; cursor:default;">
                <span style="font-size:17px;">價格範圍</span> <input type="text" size="10" maxlength="10" placeholder="最低" name="low" id="low" />  -  <input type="text" size="10" maxlength="10" id="hi" name="hi"  placeholder="最高"/>
            </div>
   	  </div>
    </div>
    <div id="mode5">
      <div id="modecss">
      	<div class="closebox"><img src='素材/fancy_closebox.png'  /></div>
    	<span class="spa">地區</span>
        <hr width="230px" align="left" />
        	<div class="locationbox" id="locationbox1">北部地區</div><div class="areat" id="areat1">基隆市 台北市 新北市 桃園縣 新竹縣 苗栗縣</div>
            <div class="locationbox" id="locationbox2">中部地區</div><div class="areat" id="areat2">台中市 彰化縣 南投縣</div>
            <div class="locationbox" id="locationbox3">南部地區</div><div class="areat" id="areat3">雲林縣 嘉義縣 臺南市 高雄市 屏東縣</div>
            <div class="locationbox" id="locationbox4">東部地區</div><div class="areat" id="areat4">宜蘭 花蓮 台東</div>
      </div>
    </div>
    <div id="mode6">
      <div id="modecss">
      	<div class="closebox"><img src='素材/fancy_closebox.png'  /></div>
    	<span class="spa">尺寸   </span><span id="sex"></span><span id="modetest"></span>
        <hr width="350px" align="left" />
        <div id="clothesbox">
        	<div class="sizebox" id="size1">S</div>
        	<div class="sizebox" id="size2">M</div>
        	<div class="sizebox" id="size3">L</div>
        	<div class="sizebox" id="size4">XL</div>
            	<div class="clothes" id="clothesM" style="display:block">
                    <table align="center" class="sizetable" border="1">
                        <tr>
							<th>尺寸</th>
                            <th class="size11">S</th>
                            <th class="size22">M</th>
                            <th class="size33">L</th>
                            <th class="size44">XL</th>
						</tr>
                        <tr>
                            <th>身高(cm)</th>
                            <td class="size11">155-160</td>
                            <td class="size22">160-170</td>
                            <td class="size33">165-175</td>
                            <td class="size44">170-180</td>
                        </tr>                        
                        <tr>
                            <th>體重(kg)</th>
                            <td class="size11">60-65</td>
                            <td class="size22">65-70</td>
                            <td class="size33">70-75</td>
                            <td class="size44">75-80</td>
                        </tr>
                    </table>
                </div>
                <div class="clothes" id="clothesF" style="display:none">
                    <table align="center" class="sizetable" border="1">
                        <tr>
							<th>尺寸</th>
                            <th class="size11">S</th>
                            <th class="size22">M</th>
                            <th class="size33">L</th>
                            <th class="size44">XL</th>
						</tr>
                        <tr>
                            <th>身高(cm)</th>
                            <td class="size11">145-155</td>
                            <td class="size22">155-160</td>
                            <td class="size33">160-170</td>
                            <td class="size44">170-180</td>
                        </tr>                        
                        <tr>
                            <th>體重(kg)</th>
                            <td class="size11">40-50</td>
                            <td class="size22">50-55</td>
                            <td class="size33">55-60</td>
                            <td class="size44">60以上</td>
                        </tr>
                    </table>
                </div>
        </div>
        <div id="pantsbox">
        	<div class="sizebox" id="size11">S</div>
        	<div class="sizebox" id="size22">M</div>
        	<div class="sizebox" id="size33">L</div>
        	<div class="sizebox" id="size44">XL</div>
            <div class="clothes" id="clothesM" style="display:block">
                 <table align="center" class="sizetable" border="1">
                     <tr>
						<th>尺寸</th>
                        <th class="size11">S</th>
                        <th class="size22">M</th>
                        <th class="size33">L</th>
                        <th class="size44">XL</th>
					</tr>
                	<tr>
                        <th>腰圍(吋)</th>
                        <td class="size11">25-27</td>
                        <td class="size22">28-30</td>
                        <td class="size33">31-33</td>
                        <td class="size44">34-36</td>
                    </tr>                        
                    <tr>
                        <th>臀圍(吋)</th>
                        <td class="size11">35-37</td>
                        <td class="size22">38-40</td>
                        <td class="size33">41-43</td>
                        <td class="size44">44-46</td>
                    </tr>
                 </table>
                 <div align="center" style="position:relative; top:30px; color:#FFF;"><input type="text" name="cm" size="2" maxlength="3" id="cm" onKeyPress="return FormEnterKey(event)" />公分(cm) = <input type="text" name="inch" size="2" id="inch" maxlength="3" onKeyPress="return FormEnterKey(event)" />吋(inch)</div>
            </div>
        </div>
        <div id="dressesbox">
        	<div class="sizebox" id="size111">S</div>
        	<div class="sizebox" id="size222">M</div>
        	<div class="sizebox" id="size333">L</div>
        	<div class="sizebox" id="size444">XL</div>
				<div class="clothes" id="clothesF" >
                    <table align="center" class="sizetable" border="1">
                        <tr>
							<th>尺寸</th>
                            <th class="size11">S</th>
                            <th class="size22">M</th>
                            <th class="size33">L</th>
                            <th class="size44">XL</th>
						</tr>
                        <tr>
                            <th>身高(cm)</th>
                            <td class="size11">145-155</td>
                            <td class="size22">155-160</td>
                            <td class="size33">160-170</td>
                            <td class="size44">170-180</td>
                        </tr>                        
                        <tr>
                            <th>體重(kg)</th>
                            <td class="size11">40-50</td>
                            <td class="size22">50-55</td>
                            <td class="size33">55-60</td>
                            <td class="size44">60以上</td>
                        </tr>
                    </table>
                </div>        
        </div>
        <div id="shoesbox">
        	<div class="shoesbox" title="美國尺寸" id="us">US</div>
        	<div class="shoesbox" title="歐洲尺寸" id="uk">UK</div>
        	<div class="shoesbox" title="法國尺寸" id="fr">FR</div>
        	<div class="shoesbox" title="日本尺寸(公分)" id="jp">JP</div>
            <div align="center" style="position:absolute; font-size:20px; top:100px; left:70px; color:#FFF;">
            	我的腳掌長 <input type="text" id="myshoes" onKeyPress="return FormEnterKey(event)" name="myshoes" size="4" maxlength="5"/><span id="unit">公分(cm)</span>
            </div>
            <br />
            <div class="showbox" >US男 : <span class="green" id="showUS"></span></div>
            <div class="showbox" >UK : <span class="green" id="showUK"></span></div>
            <div class="showbox" >FR : <span class="green" id="showFR"></span></div>
            <div class="showbox" >JP : <span class="green" id="showJP"></span></div>
            <div class="showbox" >US女 : <span class="green" id="showUSw"></span></div>
            <div class="remark" >JP以公分為基準<br />＊尺寸對照仍會有些許落差</div>
        </div>
      </div>
    </div>
    
  </div>
  </form>
  
</div>


<script type="text/javascript">
<?php if(isset($_SESSION['m_number'])){
		$result_shoes = mysql_query("select clothes_size,shoes_size2 from members where m_number = $m_number");
		$shoes_row = mysql_fetch_row($result_shoes);
?>		$("input[name='myshoes']").val("<?php echo $shoes_row[1]; ?>");
<?php }?>
//按enter無submit------------------------------------
	function FormEnterKey(e)
	{
     	var key;      
     	if(window.event)
          key = window.event.keyCode; 
     	else
          key = e.which;  

     	return (key != 13);
	}
//----------------------------------------------		
	function aa(a){
		document.formmode.c_gender.value=a;
		$('#sex').html("尺寸標準 - "+a);
	}
	function bb(a){
		document.formmode.s_fsort.value=a;
		switch(a){
			case 1:
				name = "衣服";
				break;
			case 2:
				name = "褲子";
				break;
			case 3:
				name = "洋裝";
				break;
			case 5:
				name = "鞋子";
				break;
		}
		$('#modetest').html(" 商品 - "+name);
	}
	function cc(a){
		document.formmode.s_number.value=a;
	}
	function dd(a){
		document.formmode.brand_start.value=a;
		$('#bb').html("品牌字首　"+a);
	}
	function ee(a){
		document.formmode.price_range.value=a;
	}
	function ff(a){
		document.formmode.price_mode.value=a;
	}
	function gg(a){
		document.formmode.location.value=a;
	}
	function hh(a){
		document.formmode.shoes_size2.value=a;
	}
	function ii(a){
		document.formmode.clothes_size.value=a;
	}

$(document).ready(function(e) {
	
	
//公分吋換算---------------------------------------------------------
	$("input[name='cm']").bind('change',function(){
		$("input[name='inch']").val(Math.round($("input[name='cm']").val()/2.54*10)/10);
	})
	$("input[name='inch']").bind('change',function(){
		$("input[name='cm']").val(Math.round($("input[name='inch']").val()*2.54*10)/10);
	})

//------------------------------------------------------------------
//鞋子*************************************************************
//button-------------------------
	JP22 = new Array(5,4,3.5,36,22);
	var myshoes = $("input[name='myshoes']").val();
	$("input[name='myshoes']").bind('change',function(){
		var myshoes = $("input[name='myshoes']").val();
		if( myshoes>=4 && myshoes<=15){
			$('#unit').html("US");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#us').css('color','#FFF').css('background','#666');
			$('#showUS').html($("input[name='myshoes']").val());
			myshoesCM = Number(myshoes-JP22[0]+JP22[4]).toFixed(1); //換算成公分
			$('#showUSw').html(Number(JP22[1]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUK').html(Number(JP22[2]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showFR').html(Number(JP22[3]+(myshoesCM-JP22[4])*2*0.67).toFixed(1));
			$('#showJP').html(Number(myshoes-JP22[0]+JP22[4]).toFixed(1));
			hh(Number(myshoes-JP22[0]+JP22[4]).toFixed(1));
			$('#cc').html("尺寸　"+$('#showUS').html()+" US");
		}else if(myshoes >=3 && myshoes<=15){
			$('#unit').html("UK");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#uk').css('color','#FFF').css('background','#666');
			$('#showUK').html($("input[name='myshoes']").val());
			myshoesCM = Number(myshoes-JP22[2]+JP22[4]).toFixed(1); //換算成公分
			$('#showUS').html(Number(JP22[0]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUSw').html(Number(JP22[1]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showFR').html(Number(JP22[3]+(myshoesCM-JP22[4])*2*0.67).toFixed(1));
				$('#showJP').html(Number(myshoes-JP22[2]+JP22[4]).toFixed(1));
				hh(Number(myshoes-JP22[2]+JP22[4]).toFixed(1));
				$('#cc').html("尺寸　"+$('#showUK').html()+" UK");
		}else if(myshoes <=51 && myshoes>=34){
			$('#unit').html("FR");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#fr').css('color','#FFF').css('background','#666');
			$('#showFR').html($("input[name='myshoes']").val());
			myshoesCM = Number((myshoes-JP22[3])*0.75+JP22[4]).toFixed(1); //換算成公分
			$('#showUS').html(Number(JP22[0]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUSw').html(Number(JP22[1]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUK').html(Number(JP22[2]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showJP').html(Number((myshoes-JP22[3])*0.75+JP22[4]).toFixed(1));
			hh(Number((myshoes-JP22[3])*0.75+JP22[4]).toFixed(1));
			$('#cc').html("尺寸　"+$('#showFR').html()+" FR");
		}else if(myshoes >=22 && myshoes<34){
			$('#cc').html("尺寸　"+myshoes+" JP(cm)");
			$('#unit').html("公分(cm)");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#jp').css('color','#FFF').css('background','#666');
			$('#showUS').html(Number(JP22[0]+(myshoes-JP22[4])*2*0.5).toFixed(1));
			$('#showUSw').html(Number(JP22[1]+(myshoes-JP22[4])*2*0.5).toFixed(1));
			$('#showUK').html(Number(JP22[2]+(myshoes-JP22[4])*2*0.5).toFixed(1));
			$('#showFR').html(Number(JP22[3]+(myshoes-JP22[4])*2*0.67).toFixed(1));
			$('#showJP').html($("input[name='myshoes']").val());
			hh($("input[name='myshoes']").val());
			
		}else{
			$("input[name='myshoes']").val("");
		}
	});
	$("input[name='myshoes']").keypress(function(e){
		if(e.keyCode==13){
			var myshoes = $("input[name='myshoes']").val();
		if( myshoes>=4 && myshoes<=15){
			$('#unit').html("US");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#us').css('color','#FFF').css('background','#666');
			$('#showUS').html($("input[name='myshoes']").val());
			myshoesCM = Number(myshoes-JP22[0]+JP22[4]).toFixed(1); //換算成公分
			$('#showUSw').html(Number(JP22[1]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUK').html(Number(JP22[2]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showFR').html(Number(JP22[3]+(myshoesCM-JP22[4])*2*0.67).toFixed(1));
			$('#showJP').html(Number(myshoes-JP22[0]+JP22[4]).toFixed(1));
			hh(Number(myshoes-JP22[0]+JP22[4]).toFixed(1));
			$('#cc').html("尺寸　"+$('#showUS').html()+" US");
		}else if(myshoes >=3 && myshoes<=15){
			$('#unit').html("UK");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#uk').css('color','#FFF').css('background','#666');
			$('#showUK').html($("input[name='myshoes']").val());
			myshoesCM = Number(myshoes-JP22[2]+JP22[4]).toFixed(1); //換算成公分
			$('#showUS').html(Number(JP22[0]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUSw').html(Number(JP22[1]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showFR').html(Number(JP22[3]+(myshoesCM-JP22[4])*2*0.67).toFixed(1));
				$('#showJP').html(Number(myshoes-JP22[2]+JP22[4]).toFixed(1));
				hh(Number(myshoes-JP22[2]+JP22[4]).toFixed(1));
				$('#cc').html("尺寸　"+$('#showUK').html()+" UK");
		}else if(myshoes <=51 && myshoes>=34){
			$('#unit').html("FR");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#fr').css('color','#FFF').css('background','#666');
			$('#showFR').html($("input[name='myshoes']").val());
			myshoesCM = Number((myshoes-JP22[3])*0.75+JP22[4]).toFixed(1); //換算成公分
			$('#showUS').html(Number(JP22[0]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUSw').html(Number(JP22[1]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showUK').html(Number(JP22[2]+(myshoesCM-JP22[4])).toFixed(1));
			$('#showJP').html(Number((myshoes-JP22[3])*0.75+JP22[4]).toFixed(1));
			hh(Number((myshoes-JP22[3])*0.75+JP22[4]).toFixed(1));
			$('#cc').html("尺寸　"+$('#showFR').html()+" FR");
		}else if(myshoes >=22 && myshoes<34){
			$('#cc').html("尺寸　"+myshoes+" JP(cm)");
			$('#unit').html("公分(cm)");
			$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
			$('#jp').css('color','#FFF').css('background','#666');
			$('#showUS').html(Number(JP22[0]+(myshoes-JP22[4])*2*0.5).toFixed(1));
			$('#showUSw').html(Number(JP22[1]+(myshoes-JP22[4])*2*0.5).toFixed(1));
			$('#showUK').html(Number(JP22[2]+(myshoes-JP22[4])*2*0.5).toFixed(1));
			$('#showFR').html(Number(JP22[3]+(myshoes-JP22[4])*2*0.67).toFixed(1));
			$('#showJP').html($("input[name='myshoes']").val());
			hh($("input[name='myshoes']").val());
			
		}else{
			$("input[name='myshoes']").val("");
		}
		}
	})
	$('#us').click(function(){
		$('#unit').html("US");
		$("input[name='myshoes']").val($('#showUS').html());
		hh($('#showJP').html());	
		$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
		$(this).css('color','#FFF').css('background','#666');
		$('#cc').html("尺寸　"+$('#showUS').html()+" US");
	});
	$('#uk').click(function(){
		$('#unit').html("UK");
		$("input[name='myshoes']").val($('#showUK').html());
		$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
		$(this).css('color','#FFF').css('background','#666');
		hh($('#showJP').html());	
		$('#cc').html("尺寸　"+$('#showUK').html()+" UK");
	});
	$('#fr').click(function(){
		$('#unit').html("FR");
		$("input[name='myshoes']").val($('#showFR').html());
		$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
		$(this).css('color','#FFF').css('background','#666');
		hh($('#showJP').html());
		$('#cc').html("尺寸　"+$('#showFR').html()+" FR");
	});
	$('#jp').click(function(){
		$('#unit').html("公分(cm)");
		$("input[name='myshoes']").val($('#showJP').html());
		$('#us,#uk,#fr,#jp').css('color','#390').css('background','#FFF');
		$(this).css('color','#FFF').css('background','#666');
		hh($("input[name='myshoes']").val());
		$('#cc').html("尺寸　"+$('#showJP').html()+" JP(cm)");
	});
//-------------------------------
//*************************************************************	
//衣服尺寸-------------------------------------------------------	
		$('#size1').click(function(){
			$('#size1,#size2,#size3,#size4').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size11').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('S');
			$('#cc').html("尺寸　S");
		})
		$('#size2').click(function(){
			$('#size1,#size2,#size3,#size4').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size22').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('M');
			$('#cc').html("尺寸　M");
		})
		$('#size3').click(function(){
			$('#size1,#size2,#size3,#size4').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size33').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('L');
			$('#cc').html("尺寸　L");
		})
		$('#size4').click(function(){
			$('#size1,#size2,#size3,#size4').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size44').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('XL');
			$('#cc').html("尺寸　XL");
		})
		
		$('#size11').click(function(){
			$('#size11,#size22,#size33,#size44').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size11').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('S');
			$('#cc').html("尺寸　S");
		})
		$('#size22').click(function(){
			$('#size11,#size22,#size33,#size44').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size22').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('M');
			$('#cc').html("尺寸　M");
		})
		$('#size33').click(function(){
			$('#size11,#size22,#size33,#size44').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size33').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('L');
			$('#cc').html("尺寸　L");
		})
		$('#size44').click(function(){
			$('#size11,#size22,#size33,#size44').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size44').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('XL');
			$('#cc').html("尺寸　XL");
		})
		
		$('#size111').click(function(){
			$('#size111,#size222,#size333,#size444').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size11').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('S');
			$('#cc').html("尺寸　S");
		})
		$('#size222').click(function(){
			$('#size111,#size222,#size333,#size444').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size22').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('M');
			$('#cc').html("尺寸　M");
		})
		$('#size333').click(function(){
			$('#size111,#size222,#size333,#size444').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size33').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('L');
			$('#cc').html("尺寸　L");
		})
		$('#size444').click(function(){
			$('#size111,#size222,#size333,#size444').css('color','#390').css('background','#FFF');
			$('.size11,.size22,.size33,.size44').css('color','#FFF');
			$('.sizetable th ').css('color','#777265');	
			$('.size44').css('color','#F63');	
			$(this).css('color','#FFF').css('background','#666');
			ii('XL');
			$('#cc').html("尺寸　XL");
		})
		
		
		$('#test2').hover(function(){
			$(this).animate({'border-color':'#CCC'},100);}
		,function(){
			$(this).animate({'border-color':'#CCC'},500);	
		})
		
priceMode = 1;
//選擇價格範圍方式------------------------------------------------------
		$('#price_mode1').click(function(){
			$(this).css('color','#FFF').css('background','#666');
			ff('c_price');
			$('#price_mode2').css('color','#C00').css('background','#FFF');
			$('#pp2').html("價格篩選　底標價格");
			priceMode = 1;
		});
		$('#price_mode2').click(function(){
			ff('hi_bid_price');
			$(this).css('color','#FFF').css('background','#666');
			$('#price_mode1').css('color','#C00').css('background','#FFF');
			$('#pp2').html("價格篩選　最高價格");
			priceMode = 2;
		});
//------------------------------------------------------------------
//選擇價格範圍-----------------------------------------------------
		$('#price_range1').click(function(){
			$(this).css('color','#FFF').css('background','#666');
			ee(' <= 1500');
			$('#price_range2,#price_range3,#price_range4,#price_range5,#price_range6,#price_range7').css('color','#000').css('background','#FFF');
			$('#pp').html("價格　<br/>小於1500元");
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
		});
		$('#price_range2').click(function(){
			ee(' between 1500 and 3000');
			$(this).css('color','#FFF').css('background','#666');
			$('#price_range1,#price_range3,#price_range4,#price_range5,#price_range6,#price_range7').css('color','#000').css('background','#FFF');
			$('#pp').html("價格　<br/>介於1500-3000元");
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			
		});
		$('#price_range3').click(function(){
			ee(' between 3000 and 6000');
			$(this).css('color','#FFF').css('background','#666');
			$('#price_range1,#price_range2,#price_range4,#price_range5,#price_range6,#price_range7').css('color','#000').css('background','#FFF');
			$('#pp').html("價格　<br/>介於3000-6000元");
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
		});
		$('#price_range4').click(function(){
			ee(' between 6000 and 12000');
			$(this).css('color','#FFF').css('background','#666');
			$('#price_range1,#price_range3,#price_range2,#price_range5,#price_range6,#price_range7').css('color','#000').css('background','#FFF');
			$('#pp').html("價格　<br/>介於6000-12000元");
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
		});
$('#price_range5').click(function(){
			ee(' between 12000 and 20000');
			$(this).css('color','#FFF').css('background','#666');
			$('#price_range1,#price_range3,#price_range4,#price_range2,#price_range6,#price_range7').css('color','#000').css('background','#FFF');
			$('#pp').html("價格　<br/>介於12000-20000元");
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
		});
		$('#price_range6').click(function(){
			ee(' > 20000');
			$(this).css('color','#FFF').css('background','#666');
			$('#price_range1,#price_range3,#price_range4,#price_range5,#price_range2,#price_range7').css('color','#000').css('background','#FFF');
			$('#pp').html("價格　<br/>高於20000元");
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
		});
		$('#price_range7').click(function(){
			$(this).css('color','#FFF').css('background','#666');
			$('#price_range1,#price_range3,#price_range4,#price_range5,#price_range2,#price_range6').css('color','#000').css('background','#FFF');
			if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
		});
		$("input[name='hi']").bind('change',function(){
			if(Number($("input[name='low']").val()) > Number($("input[name='hi']").val())){
				ee(" between "+ $("input[name='hi']").val() +" and "+ $("input[name='low']").val());
				$('#pp').html("價格　<br/>介於"+$("input[name='hi']").val()+"-"+$("input[name='low']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if(Number($("input[name='low']").val()) < Number($("input[name='hi']").val())){
				ee(" between "+ $("input[name='low']").val() +" and "+ $("input[name='hi']").val());
				$('#pp').html("價格　<br/>介於"+$("input[name='low']").val()+"-"+$("input[name='hi']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if($("input[name='low']").val() == $("input[name='hi']").val()){
				ee(" = "+$("input[name='low']").val());
				$('#pp').html("價格　<br/>等於"+$("input[name='low']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if($("input[name='low']").val()==""){
				ee(" <= "+$("input[name='hi']").val());
				$('#pp').html("價格　<br/>小於"+$("input[name='hi']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if($("input[name='low']").val()=="" && $("input[name='hi']").val()==""){
				ee("");
				$('#pp').html("");
			}
		})
		$("input[name='low']").bind('change',function(){
			if(Number($("input[name='low']").val()) > Number($("input[name='hi']").val())){
				ee(" between "+ $("input[name='hi']").val() +" and "+ $("input[name='low']").val());
				$('#pp').html("價格　<br/>介於"+$("input[name='hi']").val()+"-"+$("input[name='low']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if(Number($("input[name='low']").val()) < Number($("input[name='hi']").val())){
				ee(" between "+ $("input[name='low']").val() +" and "+ $("input[name='hi']").val());
				$('#pp').html("價格　<br/>介於"+$("input[name='low']").val()+"-"+$("input[name='hi']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if($("input[name='low']").val() == $("input[name='hi']").val()){
				ee(" = "+$("input[name='low']").val());
				$('#pp').html("價格　<br/>等於"+$("input[name='low']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if($("input[name='hi']").val()==""){
				ee(" >= "+$("input[name='low']").val());
				$('#pp').html("價格　<br/>大於"+$("input[name='low']").val());
				if(priceMode==1){
				ff("c_price");					
				$('#pp2').html("價格篩選　底標價格");
			}else if(priceMode==2){
				ff('hi_bid_price');					
				$('#pp2').html("價格篩選　最高價格");
			}
			}
			if($("input[name='low']").val()=="" && $("input[name='hi']").val()==""){
				ee("");
				$('#pp').html("");
			}
		})
		
//--------------------------------------------------------------------------------------------		
//地區選擇----------------------------------------------------------------------------------
	$('#locationbox1').click(function(){
		$(this).css('color','#FFF').css('background','#666');
		$('#locationbox2,#locationbox3,#locationbox4').css('color','#390').css('background','#FFF');
		$('#areat1').css('color','#F63');
		$('#areat2,#areat3,#areat4').css('color','#FFF');
		gg("( location like '%基隆%' or location like '%臺北%' or location like '%新北%' or location like '%桃園%' or location like '%新竹%' or location like '%苗栗%' )");
		$("#ll").html("地區　北部地區");
	})
	$('#locationbox2').click(function(){
		$(this).css('color','#FFF').css('background','#666');
		$('#locationbox1,#locationbox3,#locationbox4').css('color','#390').css('background','#FFF');
		$('#areat2').css('color','#F63');
		$('#areat1,#areat3,#areat4').css('color','#FFF');
		gg("( location like '%臺中%' or  location like '%彰化%' or  location like '%南投%' )");
		$("#ll").html("地區　中部地區");
	})
	$('#locationbox3').click(function(){
		$(this).css('color','#FFF').css('background','#666');
		$('#locationbox2,#locationbox1,#locationbox4').css('color','#390').css('background','#FFF');
		$('#areat3').css('color','#F63');
		$('#areat2,#areat1,#areat4').css('color','#FFF');
		gg("( location like '%雲林%' or  location like '%嘉義%' or  location like '%臺南%' or  location like '%高雄%' or  location like '%屏東%' )");
		$("#ll").html("地區　南部地區");
	})
	$('#locationbox4').click(function(){
		$(this).css('color','#FFF').css('background','#666');
		$('#locationbox2,#locationbox3,#locationbox1').css('color','#390').css('background','#FFF');
		$('#areat4').css('color','#F63');
		$('#areat2,#areat3,#areat1').css('color','#FFF');
		gg("( location like '%臺東%' or  location like '%花蓮%' or  location like '%宜蘭%' )");
		$("#ll").html("地區　東部地區");
	})

//--------------------------------------------------------------------------------------------		
		$('#sortmode').click(function(){
			$('#mode3,#mode4,#mode5,#mode6').stop().animate({left: -360},200);
			$('#mode2').stop().animate({left: 140},300);
			$(this).animate({opacity: 1},500);
		});
		
		$('#brandmode').click(function(){
			$('#mode2,#mode4,#mode5,#mode6').stop().animate({left: -360},200);
			$('#mode3').stop().animate({left: 140},300);
			$(this).animate({opacity: 1},500);
		});
		$('#pricemode').click(function(){
			$('#mode2,#mode3,#mode5,#mode6').stop().animate({left: -360},200);
			$('#mode4').stop().animate({left: 140},300);
			$(this).animate({opacity: 1},500);
			$('#price_mode2').css('color','#C00').css('background','#FFF');
		});
		$('#locationmode').click(function(){
			$('#mode2,#mode3,#mode4,#mode6').stop().animate({left: -360},200);
			$('#mode5').stop().animate({left: 140},300);
			$(this).animate({opacity: 1},500);
		});
		$('#sizemode').click(function(){
			$('#mode2,#mode3,#mode4,#mode5').stop().animate({left: -360},200);
			$('#mode6').stop().animate({left: 140},300);
			$(this).animate({opacity: 1},500);
		});
		$('.closebox').click(function(){
			$('#mode2,#mode3,#mode4,#mode5,#mode6').stop().animate({left: -360},200);
		})
		
		
		
        $('#mode li').hover(
			function(){
				$(this).animate({opacity: 1},500);
			}
		,
			function(){
				$(this).animate({opacity: 0.5},500);
			}
		);
		
		$('#sortmode').click(
			function(){
				$('#sortmode img').attr("src","素材/進階搜尋欄三角2.png");
				$('#brandmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#pricemode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#locationmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#sizemode img').attr("src","素材/進階搜尋欄三角1.png");
			}
		);
		$('#brandmode').click(
			function(){
				$('#brandmode img').attr("src","素材/進階搜尋欄三角2.png");
				$('#sortmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#pricemode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#locationmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#sizemode img').attr("src","素材/進階搜尋欄三角1.png");
			}
		);
		$('#pricemode').click(
			function(){
				$('#price_mode1').css('color','#FFF').css('background','#666');
				$('#price_mode2').css('color','#c00').css('background','#fff');
				$('#pricemode img').attr("src","素材/進階搜尋欄三角2.png");
				$('#sortmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#locationmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#brandmode img').attr("src","素材/進階搜尋欄三角1.png");
			}
		);
		$('#locationmode').click(
			function(){
				$('#locationmode img').attr("src","素材/進階搜尋欄三角2.png");
				$('#sizemode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#pricemode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#sortmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#brandmode img').attr("src","素材/進階搜尋欄三角1.png");
			}
		);
		$('#sizemode').click(
			function(){
				$('#sizemode img').attr("src","素材/進階搜尋欄三角2.png");
				$('#pricemode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#sortmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#brandmode img').attr("src","素材/進階搜尋欄三角1.png");
				$('#locationmode img').attr("src","素材/進階搜尋欄三角1.png");
			}
		);
		
		/*種類*/
	$('.m1').click(function(){
		$(this).attr('src',"素材/分類鈕-男灰.png");
		$('.m2').attr('src',"素材/分類鈕-女白.png");
		$('.m3').attr('src',"素材/分類鈕-中性白.png");
		$('.s3').hide("normal");
		$('#clothesM').css('display','block');
		$('#clothesF').css('display','none');
		var sex = 1;
      	$("#mm").html("類型　男");    
		$('.n14').hide("normal"); 
	})
	$('.m2').click(function(){
		$('.s3').show("normal");	
		$(this).attr('src',"素材/分類鈕-女灰.png");
		$('.m1').attr('src',"素材/分類鈕-男白.png");
		$('.m3').attr('src',"素材/分類鈕-中性白.png");
		$('#clothesF').css('display','block');
		$('#clothesM').css('display','none');
		var sex = 2;
		$("#mm").html("類型　女");
		$('.n14').show("normal");
	})
	$('.m3').click(function(){
		$('.s3').hide("normal");	
		$(this).attr('src',"素材/分類鈕-中性灰.png");
		$('.m1').attr('src',"素材/分類鈕-男白.png");
		$('.m2').attr('src',"素材/分類鈕-女白.png");
		$('#clothesM').css('display','block');
		$('#clothesF').css('display','none');
		var sex = 1;
		$("#mm").html("類型　中性");
		$('.n14').hide("normal");
	})
	/*商品*/
	$('.s1').click(function(){
		$('#sizemode').show("normal");
		$(this).attr('src',"素材/分類鈕-衣服灰.png");
		$('.s2').attr('src',"素材/分類鈕-褲子白.png");
		$('.s3').attr('src',"素材/分類鈕-洋裝白.png");
		$('.s4').attr('src',"素材/分類鈕-包包白.png");
		$('.s5').attr('src',"素材/分類鈕-鞋子白.png");
		$('#nn1').show("normal");
		$('#nn2').hide("normal");
		$('#nn3').hide("normal");
		$('#nn4').hide("normal");
		$('#nn5').hide("normal");
		$('#clothesbox').css('display','block');
		$('#pantsbox').css('display','none');
		$('#dressesbox').css('display','none');
		$('#shoesbox').css('display','none');
		$('.m1').show("normal");
		$('.m3').show("normal");
		cc("");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$('.n4').attr('src',"素材/分類鈕-長褲白.png");
		$('.n5').attr('src',"素材/分類鈕-短褲白.png");
		$('.n6').attr('src',"素材/分類鈕-長洋裝白.png");
		$('.n7').attr('src',"素材/分類鈕-短洋裝白.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#ss").html("商品　衣服");
		$("#nn").html("");
		$("input[name='shoes_size2']").val("");
		$('#cc').html("");
	})
	$('.s2').click(function(){
		$('#sizemode').show("normal");
		$(this).attr('src',"素材/分類鈕-褲子灰.png");
		$('.s1').attr('src',"素材/分類鈕-衣服白.png");
		$('.s3').attr('src',"素材/分類鈕-洋裝白.png");
		$('.s4').attr('src',"素材/分類鈕-包包白.png");
		$('.s5').attr('src',"素材/分類鈕-鞋子白.png");
		$('#nn2').show("normal");
		$('#nn1').hide("normal");
		$('#nn3').hide("normal");
		$('#nn4').hide("normal");
		$('#nn5').hide("normal");
		$('.m1').show("normal");
		$('.m3').show("normal");
		$('#clothesbox').css('display','none');
		$('#pantsbox').css('display','block');
		$('#dressesbox').css('display','none');
		$('#shoesbox').css('display','none');
		$('#clothesbox').hide();
		cc("");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$('.n4').attr('src',"素材/分類鈕-長褲白.png");
		$('.n5').attr('src',"素材/分類鈕-短褲白.png");
		$('.n6').attr('src',"素材/分類鈕-長洋裝白.png");
		$('.n7').attr('src',"素材/分類鈕-短洋裝白.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#ss").html("商品　褲子");
		$("#nn").html("");
		$("input[name='shoes_size2']").val("");
		$('#cc').html("");
	})
	$('.s3').click(function(){
		$('#sizemode').show("normal");
		$(this).attr('src',"素材/分類鈕-洋裝灰.png");
		$('.s1').attr('src',"素材/分類鈕-衣服白.png");
		$('.s2').attr('src',"素材/分類鈕-褲子白.png");
		$('.s4').attr('src',"素材/分類鈕-包包白.png");
		$('.s5').attr('src',"素材/分類鈕-鞋子白.png");
		$('#nn3').show("normal");
		$('#nn1').hide("normal");
		$('#nn2').hide("normal");
		$('#nn4').hide("normal");
		$('#nn5').hide("normal");
		$('.m1').hide("normal");
		$('.m3').hide("normal");
		$('#clothesbox').css('display','none');
		$('#pantsbox').css('display','none');
		$('#dressesbox').css('display','block');
		$('#shoesbox').css('display','none');
		cc("");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$('.n4').attr('src',"素材/分類鈕-長褲白.png");
		$('.n5').attr('src',"素材/分類鈕-短褲白.png");
		$('.n6').attr('src',"素材/分類鈕-長洋裝白.png");
		$('.n7').attr('src',"素材/分類鈕-短洋裝白.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#ss").html("商品　洋裝");
		$("#nn").html("");
		$("input[name='shoes_size2']").val("");
	})
	$('.s4').click(function(){
		$(this).attr('src',"素材/分類鈕-包包灰.png");
		$('.s1').attr('src',"素材/分類鈕-衣服白.png");
		$('.s2').attr('src',"素材/分類鈕-褲子白.png");
		$('.s3').attr('src',"素材/分類鈕-洋裝白.png");
		$('.s5').attr('src',"素材/分類鈕-鞋子白.png");
		$('#sizemode').hide("normal");
		$('#nn4').show("normal");
		$('#nn1').hide("normal");
		$('#nn2').hide("normal");
		$('#nn3').hide("normal");
		$('#nn5').hide("normal");
		$('.m1').show("normal");
		$('.m3').show("normal");
		cc("");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$('.n4').attr('src',"素材/分類鈕-長褲白.png");
		$('.n5').attr('src',"素材/分類鈕-短褲白.png");
		$('.n6').attr('src',"素材/分類鈕-長洋裝白.png");
		$('.n7').attr('src',"素材/分類鈕-短洋裝白.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#ss").html("商品　包包");
		$("#nn").html("");
		$("input[name='shoes_size2']").val("");
		$('#cc').html("");
	})
	$('.s5').click(function(){
		$('#sizemode').show("normal");
		$(this).attr('src',"素材/分類鈕-鞋子灰.png");
		$('.s1').attr('src',"素材/分類鈕-衣服白.png");
		$('.s2').attr('src',"素材/分類鈕-褲子白.png");
		$('.s3').attr('src',"素材/分類鈕-洋裝白.png");
		$('.s4').attr('src',"素材/分類鈕-包包白.png");
		$('#nn5').show("normal");
		$('#nn1').hide("normal");
		$('#nn2').hide("normal");
		$('#nn3').hide("normal");
		$('#nn4').hide("normal");
		$('.m1').show("normal");
		$('.m3').show("normal");
		$('#clothesbox').css('display','none');
		$('#pantsbox').css('display','none');
		$('#dressesbox').css('display','none');
		$('#shoesbox').css('display','block');
		cc("");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$('.n4').attr('src',"素材/分類鈕-長褲白.png");
		$('.n5').attr('src',"素材/分類鈕-短褲白.png");
		$('.n6').attr('src',"素材/分類鈕-長洋裝白.png");
		$('.n7').attr('src',"素材/分類鈕-短洋裝白.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
			
		$("#ss").html("商品　鞋子");
		$("#nn").html("");
		$("input[name='clothes_size']").val("");
		$('#cc').html("");
	})
	
	/*樣式*/
	$('.n1').click(function(){
		$(this).attr('src',"素材/分類鈕-長袖灰.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$("#nn").html("樣式　長袖");
	})
	$('.n2').click(function(){
		$(this).attr('src',"素材/分類鈕-短袖灰.png");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n3').attr('src',"素材/分類鈕-背心白.png");
		$("#nn").html("樣式　短袖");
	})
	$('.n3').click(function(){
		$(this).attr('src',"素材/分類鈕-背心灰.png");
		$('.n1').attr('src',"素材/分類鈕-長袖白.png");
		$('.n2').attr('src',"素材/分類鈕-短袖白.png");
		$("#nn").html("樣式　背心");
	})
	$('.n4').click(function(){
		$(this).attr('src',"素材/分類鈕-長褲灰.png");
		$('.n5').attr('src',"素材/分類鈕-短褲白.png");
		$("#nn").html("樣式 長褲袖");
	})
	$('.n5').click(function(){
		$(this).attr('src',"素材/分類鈕-短褲灰.png");
		$('.n4').attr('src',"素材/分類鈕-長褲白.png");
		$("#nn").html("樣式　短褲");
	})
	$('.n6').click(function(){
		$(this).attr('src',"素材/分類鈕-長洋裝灰.png");
		$('.n7').attr('src',"素材/分類鈕-短洋裝白.png");
		$("#nn").html("樣式　長洋裝");
	})
	$('.n7').click(function(){
		$(this).attr('src',"素材/分類鈕-短洋裝灰.png");
		$('.n6').attr('src',"素材/分類鈕-長洋裝白.png");
		$("#nn").html("樣式　短洋裝");
	})
	$('.n8').click(function(){
		$(this).attr('src',"素材/分類鈕-手拿包灰.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$("#nn").html("樣式　手拿包");
	})
	$('.n9').click(function(){
		$(this).attr('src',"素材/分類鈕-斜背包灰1.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n10').attr('src',"素材/分類鈕-後背包白.png");
		$("#nn").html("樣式　斜背包");
	})
	$('.n10').click(function(){
		$(this).attr('src',"素材/分類鈕-後背包灰.png");
		$('.n8').attr('src',"素材/分類鈕-手拿包白.png");
		$('.n9').attr('src',"素材/分類鈕-斜背包白.png");
		$("#nn").html("樣式　後背包");
	})
	$('.n11').click(function(){
		$(this).attr('src',"素材/分類鈕-籃球鞋灰.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#nn").html("樣式　籃球鞋");
	})
	$('.n12').click(function(){
		$(this).attr('src',"素材/分類鈕-跑步鞋灰.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#nn").html("樣式　跑步鞋");
	})
	$('.n13').click(function(){
		$(this).attr('src',"素材/分類鈕-休閒鞋灰.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#nn").html("樣式　休閒鞋");
	})
	$('.n14').click(function(){
		$(this).attr('src',"素材/分類鈕-高跟鞋灰.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$('.n15').attr('src',"素材/分類鈕-平底鞋白.png");
		$("#nn").html("樣式　高跟鞋");
	})
	$('.n15').click(function(){
		$(this).attr('src',"素材/分類鈕-平底鞋灰.png");
		$('.n11').attr('src',"素材/分類鈕-籃球鞋白.png");
		$('.n13').attr('src',"素材/分類鈕-休閒鞋白.png");
		$('.n14').attr('src',"素材/分類鈕-高跟鞋白.png");
		$('.n12').attr('src',"素材/分類鈕-跑步鞋白.png");
		$("#nn").html("樣式　平底鞋");
	})
    });
	
</script>