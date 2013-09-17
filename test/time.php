<html>
<SCRIPT language="javascript"> 
var startDate = new Date();
var endDate = new Date(2013,7,8,11,10);
var spantime = (endDate - startDate)/1000;
 
function getString(dt){
    return dt.getFullYear() + "年" + (dt.getMonth()+1) + "月" +    dt.getDate() + "日" + dt.getHours() + "时" + dt.getMinutes() + "分";
}
function cal(){
    spantime --;
    var d = Math.floor(spantime / (24 * 3600));
    var h = Math.floor((spantime % (24*3600))/3600);
    var m = Math.floor((spantime % 3600)/(60));
    var s = Math.floor(spantime%60);
    str = d + "天 " + h + "时 " + m + "分 " + s + "秒 ";
    document.getElementById("pad").innerHTML = str;
}
 
window.onload = function(){
    document.getElementById("start_pad").innerHTML = getString(startDate);
    document.getElementById("end_pad").innerHTML = getString(endDate);
    setInterval(cal, 1000);
}
</SCRIPT>  
</head>
<body>
开始时间：<span id="start_pad"></span><br>
结束时间：<span id="end_pad"></span><br>
剩余时间：<span id="pad"></span>
</body>
</html>