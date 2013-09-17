function Buildkey(num) {
	var ctr=1;
	document.form1.subtype.selectedIndex=0;
	document.form1.address.value="";  
	document.form1.subtype.options[0]=new Option("請選擇區域...","");

	/*臺北市*/  
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("中正區","[100]臺北市中正區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("大同區","[103]臺北市大同區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("中山區","[104]臺北市中山區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("松山區","[105]臺北市松山區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("大安區","[106]臺北市大安區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("萬華區","[108]臺北市萬華區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("信義區","[110]臺北市信義區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("士林區","[111]臺北市士林區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("北投區","[112]臺北市北投區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("內湖區","[114]臺北市內湖區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("南港區","[115]臺北市南港區");	ctr=ctr+1;	}
	if(num=="1") {	document.form1.subtype.options[ctr]=new Option("文山區","[116]臺北市文山區");	ctr=ctr+1;	}
	/*基隆市*/  
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("仁愛區","[200]基隆市仁愛區");	ctr=ctr+1;	}
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("信義區","[201]基隆市信義區");	ctr=ctr+1;	}
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("中正區","[202]基隆市中正區");	ctr=ctr+1;	}
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("中山區","[203]基隆市中山區");	ctr=ctr+1;	}
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("安樂區","[204]基隆市安樂區");	ctr=ctr+1;	}
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("暖暖區","[205]基隆市暖暖區");	ctr=ctr+1;	}
	if(num=="2") {	document.form1.subtype.options[ctr]=new Option("七堵區","[206]基隆市七堵區");	ctr=ctr+1;	}
	/*臺北縣*/  
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("萬里鄉","[207]臺北縣萬里鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("金山鄉","[208]臺北縣金山鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("板橋市","[220]臺北縣板橋市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("汐止市","[221]臺北縣汐止市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("深坑鄉","[222]臺北縣深坑鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("石碇鄉","[223]臺北縣石碇鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("瑞芳鎮","[224]臺北縣瑞芳鎮");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("平溪鄉","[226]臺北縣平溪鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("雙溪鄉","[227]臺北縣雙溪鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("貢寮鄉","[228]臺北縣貢寮鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("新店市","[231]臺北縣新店市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("坪林鄉","[232]臺北縣坪林鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("烏來鄉","[233]臺北縣烏來鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("永和市","[234]臺北縣永和市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("中和市","[235]臺北縣中和市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("土城市","[236]臺北縣土城市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("三峽鎮","[237]臺北縣三峽鎮");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("樹林市","[238]臺北縣樹林市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("鶯歌鎮","[239]臺北縣鶯歌鎮");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("三重市","[241]臺北縣三重市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("新莊市","[242]臺北縣新莊市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("泰山鄉","[243]臺北縣泰山鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("林口鄉","[244]臺北縣林口鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("蘆洲市","[247]臺北縣蘆洲市");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("五股鄉","[248]臺北縣五股鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("八里鄉","[249]臺北縣八里鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("淡水鎮","[251]臺北縣淡水鎮");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("三芝鄉","[252]臺北縣三芝鄉");	ctr=ctr+1;	} 
	if(num=="3") {	document.form1.subtype.options[ctr]=new Option("石門鄉","[253]臺北縣石門鄉");	ctr=ctr+1;	} 
	/*宜蘭縣*/
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("宜蘭市","[260]宜蘭縣宜蘭市");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("頭城鎮","[261]宜蘭縣頭城鎮");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("礁溪鄉","[262]宜蘭縣礁溪鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("壯圍鄉","[263]宜蘭縣壯圍鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("員山鄉","[264]宜蘭縣員山鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("羅東鎮","[265]宜蘭縣羅東鎮");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("三星鄉","[266]宜蘭縣三星鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("大同鄉","[267]宜蘭縣大同鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("五結鄉","[268]宜蘭縣五結鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("冬山鄉","[269]宜蘭縣冬山鄉");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("蘇澳鎮","[270]宜蘭縣蘇澳鎮");	ctr=ctr+1;	} 
	if(num=="4") {	document.form1.subtype.options[ctr]=new Option("南澳鄉","[272]宜蘭縣南澳鄉");	ctr=ctr+1;	} 
	/*新竹縣市*/
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("新竹市","[300]新竹市");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("竹北市","[302]新竹縣竹北市");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("湖口鄉","[303]新竹縣湖口鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("新豐鄉","[304]新竹縣新豐鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("新埔鎮","[305]新竹縣新埔鎮");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("關西鎮","[306]新竹縣關西鎮");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("芎林鄉","[307]新竹縣芎林鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("寶山鄉","[308]新竹縣寶山鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("竹東鎮","[310]新竹縣竹東鎮");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("五峰鄉","[311]新竹縣五峰鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("橫山鄉","[312]新竹縣橫山鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("尖石鄉","[313]新竹縣尖石鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("北埔鄉","[314]新竹縣北埔鄉");	ctr=ctr+1;	} 
	if(num=="5") {	document.form1.subtype.options[ctr]=new Option("峨眉鄉","[315]新竹縣峨嵋鄉");	ctr=ctr+1;	} 
	/*桃園縣*/
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("中壢市","[320]桃園縣中壢市");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("平鎮市","[324]桃園縣平鎮市");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("龍潭鄉","[325]桃園縣龍潭鄉");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("楊梅鎮","[326]桃園縣楊梅鎮");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("新屋鄉","[327]桃園縣新屋鄉");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("觀音鄉","[328]桃園縣觀音鄉");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("桃園市","[330]桃園縣桃園市");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("龜山鄉","[333]桃園縣龜山鄉");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("八德市","[334]桃園縣八德市");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("大溪鎮","[335]桃園縣大溪鎮");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("復興鄉","[336]桃園縣復興鄉");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("大園鄉","[337]桃園縣大園鄉");	ctr=ctr+1;	} 
	if(num=="6") {	document.form1.subtype.options[ctr]=new Option("蘆竹鄉","[338]桃園縣蘆竹鄉");	ctr=ctr+1;	} 
	/*苗栗縣*/
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("竹南鎮","[350]苗栗縣竹南鎮");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("頭份鎮","[351]苗栗縣頭份鎮");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("三灣鄉","[352]苗栗縣三灣鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("南庄鄉","[353]苗栗縣南庄鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("獅潭鄉","[354]苗栗縣獅潭鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("後龍鎮","[356]苗栗縣後龍鎮");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("通霄鎮","[357]苗栗縣通宵鎮");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("苑裡鎮","[358]苗栗縣苑裡鎮");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("苗栗市","[360]苗栗縣苗栗市");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("造橋鄉","[361]苗栗縣造橋鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("頭屋鄉","[362]苗栗縣頭屋鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("公館鄉","[363]苗栗縣公館鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("大湖鄉","[364]苗栗縣大湖鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("泰安鄉","[365]苗栗縣泰安鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("銅鑼鄉","[366]苗栗縣銅鑼鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("三義鄉","[367]苗栗縣三義鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("西湖鄉","[368]苗栗縣西湖鄉");	ctr=ctr+1;	} 
	if(num=="7") {	document.form1.subtype.options[ctr]=new Option("卓蘭鎮","[369]苗栗縣卓蘭鄉");	ctr=ctr+1;	}
	/*臺中市*/ 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("中　區","[400]臺中市中區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("東　區","[401]臺中市東區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("南　區","[402]臺中市南區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("西　區","[403]臺中市西區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("北　區","[404]臺中市北區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("北屯區","[406]臺中市北屯區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("西屯區","[407]臺中市西屯區");	ctr=ctr+1;	} 
	if(num=="8") {	document.form1.subtype.options[ctr]=new Option("南屯區","[408]臺中市南屯區");	ctr=ctr+1;	} 
	/*臺中縣*/
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("太平市","[411]臺中縣太平市");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("大里市","[412]臺中縣大里市");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("霧峰鄉","[413]臺中縣霧峰鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("烏日鄉","[414]臺中縣烏日鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("豐原市","[420]臺中縣豐原市");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("后里鄉","[421]臺中縣后里鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("石岡鄉","[422]臺中縣石崗鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("東勢鎮","[423]臺中縣東勢鎮");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("和平鄉","[242]臺中縣和平鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("新社鄉","[426]臺中縣新社鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("潭子鄉","[427]臺中縣潭子鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("大雅鄉","[428]臺中縣大雅鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("神岡鄉","[429]臺中縣神岡鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("大肚鄉","[432]臺中縣大肚鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("沙鹿鎮","[433]臺中縣沙鹿鎮");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("龍井鄉","[434]臺中縣龍井鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("梧棲鎮","[435]臺中縣梧棲鎮");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("清水鎮","[436]臺中縣清水鎮");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("大甲鎮","[437]臺中縣大甲鎮");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("外埔鄉","[438]臺中縣外埔鄉");	ctr=ctr+1;	} 
	if(num=="9") {	document.form1.subtype.options[ctr]=new Option("大安鄉","[439]臺中縣大安鄉");	ctr=ctr+1;	}
	/*彰化縣*/ 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("彰化市","[500]彰化縣彰化市");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("芬園鄉","[502]彰化縣芬園鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("花壇鄉","[503]彰化縣花壇鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("秀水鄉","[504]彰化縣秀水鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("鹿港鎮","[505]彰化縣鹿港鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("福興鄉","[506]彰化縣福興鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("線西鄉","[507]彰化縣線西鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("和美鎮","[508]彰化縣和美鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("伸港鄉","[509]彰化縣伸港鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("員林鎮","[510]彰化縣員林鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("社頭鄉","[511]彰化縣社頭鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("永靖鄉","[512]彰化縣永靖鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("埔心鄉","[513]彰化縣埔心鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("溪湖鎮","[514]彰化縣溪湖鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("大村鄉","[515]彰化縣大村鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("埔鹽鄉","[516]彰化縣埔鹽鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("田中鎮","[520]彰化縣田中鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("北斗鎮","[521]彰化縣北斗鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("田尾鄉","[522]彰化縣田尾鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("埤頭鄉","[523]彰化縣埤頭鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("溪州鄉","[524]彰化縣溪洲鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("竹塘鄉","[525]彰化縣竹塘鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("二林鎮","[526]彰化縣二林鎮");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("大城鄉","[527]彰化縣大城鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("芳苑鄉","[528]彰化縣芳苑鄉");	ctr=ctr+1;	} 
	if(num=="10") {	document.form1.subtype.options[ctr]=new Option("二水鄉","[530]彰化縣二水鄉");	ctr=ctr+1;	} 
	/*南投縣*/
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("南投市","[540]南投縣南投市");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("中寮鄉","[541]南投縣中寮鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("草屯鎮","[542]南投縣草屯鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("國姓鄉","[544]南投縣國姓鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("埔里鎮","[545]南投縣埔里鎮");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("仁愛鄉","[546]南投縣仁愛鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("名間鄉","[551]南投縣名間鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("集集鎮","[552]南投縣集集鎮");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("水里鄉","[553]南投縣水里鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("魚池鄉","[555]南投縣魚池鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("信義鄉","[556]南投縣信義鄉");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("竹山鎮","[557]南投縣竹山鎮");	ctr=ctr+1;	} 
	if(num=="11") {	document.form1.subtype.options[ctr]=new Option("鹿谷鄉","[558]南投縣鹿谷鄉");	ctr=ctr+1;	} 
	/*嘉義縣市*/
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("嘉義市","[600]嘉義市");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("番路鄉","[602]嘉義縣番路鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("梅山鄉","[603]嘉義縣梅山鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("竹崎鄉","[604]嘉義縣竹崎鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("阿里山","[605]嘉義縣阿里山");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("中埔鄉","[606]嘉義縣中埔鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("大埔鄉","[607]嘉義縣大埔鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("水上鄉","[608]嘉義縣水上鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("鹿草鄉","[611]嘉義縣鹿草鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("太保市","[612]嘉義縣太保市");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("朴子市","[613]嘉義縣朴子市");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("東石鄉","[614]嘉義縣東石鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("六腳鄉","[615]嘉義縣六腳鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("新港鄉","[616]嘉義縣新港鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("民雄鄉","[621]嘉義縣民雄鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("大林鎮","[622]嘉義縣大林鎮");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("溪口鄉","[623]嘉義縣溪口鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("義竹鄉","[624]嘉義縣義竹鄉");	ctr=ctr+1;	} 
	if(num=="12") {	document.form1.subtype.options[ctr]=new Option("布袋鎮","[625]嘉義縣布袋鎮");	ctr=ctr+1;	} 
	/*雲林縣*/
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("斗南鎮","[630]雲林縣斗南鎮");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("大埤鄉","[631]雲林縣大埤鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("虎尾鎮","[632]雲林縣虎尾鎮");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("土庫鎮","[633]雲林縣土庫鎮");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("褒忠鄉","[634]雲林縣褒忠鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("東勢鄉","[635]雲林縣東勢鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("台西鄉","[636]雲林縣台西鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("崙背鄉","[637]雲林縣崙背鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("麥寮鄉","[638]雲林縣麥寮鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("斗六市","[640]雲林縣斗六市");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("林內鄉","[643]雲林縣林內鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("古坑鄉","[646]雲林縣古坑鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("莿桐鄉","[647]雲林縣莿桐鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("西螺鎮","[648]雲林縣西螺鎮");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("二崙鄉","[649]雲林縣二崙鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("北港鎮","[651]雲林縣北港鎮");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("水林鄉","[652]雲林縣水林鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("口湖鄉","[653]雲林縣口湖鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("四湖鄉","[654]雲林縣四湖鄉");	ctr=ctr+1;	} 
	if(num=="13") {	document.form1.subtype.options[ctr]=new Option("元長鄉","[655]雲林縣元長鄉");	ctr=ctr+1;	} 
	/*臺南市*/
	if(num=="14") {	document.form1.subtype.options[ctr]=new Option("中西區","[700]臺南市中西區");	ctr=ctr+1;	} 
	if(num=="14") {	document.form1.subtype.options[ctr]=new Option("東　區","[701]臺南市東區");	ctr=ctr+1;	} 
	if(num=="14") {	document.form1.subtype.options[ctr]=new Option("南　區","[702]臺南市南區");	ctr=ctr+1;	} 
	if(num=="14") {	document.form1.subtype.options[ctr]=new Option("北　區","[704]臺南市北區");	ctr=ctr+1;	} 
	if(num=="14") {	document.form1.subtype.options[ctr]=new Option("安平區","[708]臺南市安平區");	ctr=ctr+1;	} 
	if(num=="14") {	document.form1.subtype.options[ctr]=new Option("安南區","[709]臺南市安南區");	ctr=ctr+1;	} 
	/*臺南縣*/
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("永康市","[710]臺南縣永康市");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("歸仁鄉","[711]臺南縣歸仁鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("新化鎮","[712]臺南縣新化鎮");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("左鎮鄉","[713]臺南縣左鎮鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("玉井鄉","[714]臺南縣玉井鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("楠西鄉","[715]臺南縣楠西鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("南化鄉","[716]臺南縣南化鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("仁德鄉","[717]臺南縣仁德鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("關廟鄉","[718]臺南縣關廟鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("龍崎鄉","[719]臺南縣龍崎鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("官田鄉","[720]臺南縣官田鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("麻豆鎮","[721]臺南縣麻豆鎮");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("佳里鎮","[722]臺南縣加里鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("西港鄉","[723]臺南縣西港鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("七股鄉","[724]臺南縣七股鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("將軍鄉","[725]臺南縣將軍鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("學甲鎮","[726]臺南縣學甲鎮");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("北門鄉","[727]臺南縣北門鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("新營市","[730]臺南縣新營市");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("後壁鄉","[731]臺南縣後壁鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("白河鎮","[732]臺南縣白河鎮");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("東山鄉","[733]臺南縣東山鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("六甲鄉","[734]臺南縣六甲鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("下營鄉","[735]臺南縣下營鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("柳營鄉","[736]臺南縣柳營鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("鹽水鎮","[737]臺南縣鹽水鎮");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("善化鎮","[741]臺南縣善化鎮");	ctr=ctr+1;	}  
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("大內鄉","[742]臺南縣大內鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("山上鄉","[743]臺南縣山上鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("新市鄉","[744]臺南縣新市鄉");	ctr=ctr+1;	} 
	if(num=="15") {	document.form1.subtype.options[ctr]=new Option("安定鄉","[745]臺南縣安定鄉");	ctr=ctr+1;	}
	/*高雄市*/
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("新興區","[800]高雄市新興區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("前金區","[801]高雄市前金區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("苓雅區","[802]高雄市苓雅區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("鹽埕區","[803]高雄市鹽埕區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("鼓山區","[804]高雄市鼓山區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("旗津區","[805]高雄市旗津區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("前鎮區","[806]高雄市前鎮區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("三民區","[807]高雄市三民區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("楠梓區","[811]高雄市楠梓區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("小港區","[812]高雄市小港區");	ctr=ctr+1;	} 
	if(num=="16") {	document.form1.subtype.options[ctr]=new Option("左營區","[813]高雄市左營區");	ctr=ctr+1;	} 	
	/*高雄縣*/
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("仁武鄉","[814]高雄縣仁武鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("大社鄉","[815]高雄縣大社鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("岡山鎮","[820]高雄縣岡山鎮");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("路竹鄉","[821]高雄縣路竹鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("阿蓮鄉","[822]高雄縣阿連鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("田寮鄉","[823]高雄縣田寮鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("燕巢鄉","[824]高雄縣燕巢鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("橋頭鄉","[825]高雄縣橋頭鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("梓官鄉","[826]高雄縣梓官鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("彌陀鄉","[827]高雄縣彌陀鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("永安鄉","[828]高雄縣永安鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("湖內鄉","[829]高雄縣湖內鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("鳳山市","[830]高雄縣鳳山市");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("大寮鄉","[831]高雄縣大寮鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("林園鄉","[832]高雄縣林園鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("鳥松鄉","[833]高雄縣烏松鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("大樹鄉","[840]高雄縣大樹鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("旗山鎮","[842]高雄縣旗山鎮");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("美濃鎮","[843]高雄縣美濃鎮");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("六龜鄉","[844]高雄縣六龜鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("內門鄉","[845]高雄縣內門鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("杉林鄉","[846]高雄縣杉林鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("甲仙鄉","[847]高雄縣甲仙鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("桃源鄉","[848]高雄縣桃源鄉");	ctr=ctr+1;	}
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("那瑪夏鄉","[848]高雄縣那瑪夏鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("茂林鄉","[851]高雄縣茂林鄉");	ctr=ctr+1;	} 
	if(num=="17") {	document.form1.subtype.options[ctr]=new Option("茄萣鄉","[852]高雄縣茄萣鄉");	ctr=ctr+1;	} 
	/*澎湖縣*/
	if(num=="18") {	document.form1.subtype.options[ctr]=new Option("馬公市","[880]澎湖縣馬公市");	ctr=ctr+1;	} 
	if(num=="18") {	document.form1.subtype.options[ctr]=new Option("西嶼鄉","[881]澎湖縣西嶼鄉");	ctr=ctr+1;	} 
	if(num=="18") {	document.form1.subtype.options[ctr]=new Option("望安鄉","[882]澎湖縣望安鄉");	ctr=ctr+1;	} 
	if(num=="18") {	document.form1.subtype.options[ctr]=new Option("七美鄉","[883]澎湖縣七美鄉");	ctr=ctr+1;	} 
	if(num=="18") {	document.form1.subtype.options[ctr]=new Option("白沙鄉","[884]澎湖縣白沙鄉");	ctr=ctr+1;	} 
	if(num=="18") {	document.form1.subtype.options[ctr]=new Option("湖西鄉","[885]澎湖縣湖西鄉");	ctr=ctr+1;	} 
	/*屏東縣*/
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("屏東市","[900]屏東縣屏東市");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("三地門","[901]屏東縣三地門");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("霧台鄉","[902]屏東縣霧台鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("瑪家鄉","[903]屏東縣瑪家鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("九如鄉","[904]屏東縣九如鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("里港鄉","[905]屏東縣里港鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("高樹鄉","[906]屏東縣高樹鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("鹽埔鄉","[907]屏東縣鹽埔鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("長治鄉","[908]屏東縣長治鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("麟洛鄉","[909]屏東縣麟洛鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("竹田鄉","[911]屏東縣竹田鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("內埔鄉","[912]屏東縣內埔鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("萬丹鄉","[913]屏東縣萬丹鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("潮州鎮","[920]屏東縣潮州鎮");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("泰武鄉","[921]屏東縣泰武鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("來義鄉","[922]屏東縣來義鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("萬巒鄉","[923]屏東縣萬巒鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("崁頂鄉","[924]屏東縣崁頂鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("新埤鄉","[925]屏東縣新畢鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("南州鄉","[926]屏東縣南州鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("林邊鄉","[927]屏東縣林邊鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("東港鎮","[928]屏東縣東港鎮");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("琉球鄉","[929]屏東縣琉球鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("佳冬鄉","[931]屏東縣佳冬鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("新園鄉","[932]屏東縣新園鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("枋寮鄉","[940]屏東縣枋寮鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("枋山鄉","[941]屏東縣枋山鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("春日鄉","[942]屏東縣春日鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("獅子鄉","[943]屏東縣獅子鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("車城鄉","[944]屏東縣車城鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("牡丹鄉","[945]屏東縣牡丹鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("恆春鎮","[946]屏東縣恆春鄉");	ctr=ctr+1;	} 
	if(num=="19") {	document.form1.subtype.options[ctr]=new Option("滿州鄉","[947]屏東縣滿州鄉");	ctr=ctr+1;	} 
	/*臺東縣*/
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("台東市","[950]臺東縣台東市");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("綠島鄉","[951]臺東縣綠島鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("蘭嶼鄉","[952]臺東縣蘭嶼鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("延平鄉","[953]臺東縣延平鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("卑南鄉","[954]臺東縣卑南鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("鹿野鄉","[955]臺東縣鹿野鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("關山鎮","[956]臺東縣關山鎮");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("海端鄉","[957]臺東縣海端鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("池上鄉","[958]臺東縣池上鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("東河鄉","[959]台東縣東河鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("成功鎮","[961]台東縣成功鎮");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("長濱鄉","[962]台東縣長濱鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("太麻里","[963]台東縣太麻里");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("金峰鄉","[964]台東縣金峰鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("大武鄉","[965]台東縣大武鄉");	ctr=ctr+1;	} 
	if(num=="20") {	document.form1.subtype.options[ctr]=new Option("達仁鄉","[966]台東縣達仁鄉");	ctr=ctr+1;	} 
	/*花蓮縣*/
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("花蓮市","[970]花蓮縣花蓮市");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("新城鄉","[971]花蓮縣新城鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("秀林鄉","[972]花蓮縣秀林鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("吉安鄉","[973]花蓮縣吉安鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("壽豐鄉","[974]花蓮縣壽豐鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("鳳林鎮","[975]花蓮縣鳳林鎮");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("光復鄉","[976]花蓮縣光復鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("豐濱鄉","[977]花蓮縣豐濱鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("瑞穗鄉","[978]花蓮縣瑞穗鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("萬榮鄉","[979]花蓮縣萬榮鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("玉里鎮","[981]花蓮縣玉里鎮");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("卓溪鄉","[982]花蓮縣桌溪鄉");	ctr=ctr+1;	} 
	if(num=="21") {	document.form1.subtype.options[ctr]=new Option("富里鄉","[983]花蓮縣富里鄉");	ctr=ctr+1;	} 
	/*金門縣*/
	if(num=="22") {	document.form1.subtype.options[ctr]=new Option("金沙鎮","[890]金門縣金沙鎮");	ctr=ctr+1;	} 
	if(num=="22") {	document.form1.subtype.options[ctr]=new Option("金湖鎮","[891]金門縣金湖鎮");	ctr=ctr+1;	} 
	if(num=="22") {	document.form1.subtype.options[ctr]=new Option("金寧鄉","[892]金門縣金寧鄉");	ctr=ctr+1;	} 
	if(num=="22") {	document.form1.subtype.options[ctr]=new Option("金城鎮","[893]金門縣金城鎮");	ctr=ctr+1;	} 
	if(num=="22") {	document.form1.subtype.options[ctr]=new Option("烈嶼鄉","[894]金門縣烈嶼鄉");	ctr=ctr+1;	} 
	if(num=="22") {	document.form1.subtype.options[ctr]=new Option("烏坵鄉","[896]金門縣烏坵鄉");	ctr=ctr+1;	}
	/*連江縣*/
	if(num=="23") {	document.form1.subtype.options[ctr]=new Option("南竿鄉","[209]連江縣南竿鄉");	ctr=ctr+1;	} 
	if(num=="23") {	document.form1.subtype.options[ctr]=new Option("北竿鄉","[210]連江縣北竿鄉");	ctr=ctr+1;	} 
	if(num=="23") {	document.form1.subtype.options[ctr]=new Option("莒光鄉","[211]連江縣莒光鄉");	ctr=ctr+1;	} 
	if(num=="23") {	document.form1.subtype.options[ctr]=new Option("東引鄉","[212]連江縣東引鄉");	ctr=ctr+1;	} 

	document.form1.subtype.length=ctr;
	document.form1.subtype.options[0].selected=true;
} 