<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>安裝PKI</title>
<script type="text/javascript">
function installPlugin(){
	var agent = navigator.userAgent.toLowerCase();
	var browser = "Unknown browser";
	if (agent.search ("msie") > -1) {
		browser = "Internet Explorer";
	} else	if (agent.search ("firefox") > -1) {
			browser = "Firefox";
	} else if (agent.search ("chrome") > -1) {
					browser = "Google Chrome";
	} else if (agent.search ("safari") > -1) {
		browser = "Safari";
	}
	var OSName="Unknown OS";
	if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
	if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
	if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
	if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
	var container = document.getElementById("installDiv");
	if(browser=="Safari"){
		if(OSName=="Windows") container.innerHTML="<a href=\"http://pki.hinet.net/CommonClient/href/HiPKIClientInstaller.exe\">Install Safari plugin for windows</a><br/>";
		if(OSName=="MacOS") container.innerHTML="<a href=\"http://pki.hinet.net/CommonClient/href/HiPKIClientInstaller.pkg\">Install Safari plugin for Mac OS</a><br/>";
	}
	else if(browser=="Google Chrome"){
		if(OSName=="Windows") container.innerHTML="<a href=\"http://pki.hinet.net/CommonClient/href/npHiPKIClient-win.crx\">Install Chrome plugin for windows</a><br/>";
		else if(OSName=="Linux" || OSName=="UNIX") container.innerHTML="<a href=\"http://pki.hinet.net/CommonClient/href/npHiPKIClient-linux.crx\">Install Chrome plugin for linux</a><br/>";
		else if(OSName=="MacOS") container.innerHTML="<a href=\"http://pki.hinet.net/CommonClient/href/npHiPKIClient-mac.crx\">Install Chrome plugin for Mac OS</a><br/>";
		else alert("No plugin for "+OSName+" "+browser);
	}else if(browser=="Firefox"){
		if(OSName=="Windows") container.innerHTML="<object id='plugin' type='application/x-hipki-client' codebase='http://pki.hinet.net/CommonClient/href/npHiPKIClient-win.xpi' width=1 height=1></object>";
		else if(OSName=="Linux" || OSName=="UNIX") container.innerHTML="<object id='plugin' type='application/x-hipki-client' codebase='http://pki.hinet.net/CommonClient/href/npHiPKIClient-linux.xpi' width=1 height=1></object>";
		else if(OSName=="MacOS") container.innerHTML="<object id='plugin' type='application/x-hipki-client' codebase='href/npHiPKIClient-mac.xpi' width=1 height=1></object>";
		else alert("No plugin for "+OSName+" "+browser);
	}else if(browser=="Internet Explorer"){
		container.innerHTML="<OBJECT id=\"plugin\"  codebase=\"http://pki.hinet.net/CommonClient/href/npHiPKIClient.cab#Version=1,4,1,0828\" classid=\"clsid:fd0100ea-e360-5e6f-a09b-e9a0a9b7b90f\" width=1 height=1 VIEWASTEXT></OBJECT>";
	}else alert("No plugin for "+OSName+" "+browser); 
	
}
</script>
</head>
<body onload="installPlugin()">

<H2>Install HiPKI Plugin</H2>
<div id="installDiv"></div><br/>

Manual plugin install package<br/>
<a href="http://pki.hinet.net/CommonClient/href/HiPKIClientInstaller.exe">Install plugin for windows</a><br/>
<a href="http://pki.hinet.net/CommonClient/href/HiPKIClientInstaller.pkg">Install plugin for Mac OS</a><br/>
<input type="button" name="back" value="Back" onclick="javascript:history.go(-1)"/>
</body>
</html>