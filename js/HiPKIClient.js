
function getHiPKIPlugin(){
	var agent = navigator.userAgent.toLowerCase();
	var browser = "Unknown browser";
	var hipkiclient;
	alert("getHiPKIPlugin:  "+agent.search ("msie"));
	if (agent.search ("msie") > -1) {
		browser = "Internet Explorer";
		try{
			hipkiclient = new ActiveXObject("CHT.HiPKIClient.1");
		}catch(e){
			alert("Create HiPKIClient ActiveX Object Error!");
			return null;
		}
		if(typeof(hipkiclient)=='object'){
			return hipkiclient;
		}
		return null;
	} else {//non IE Browsers
		if(navigator.mimeTypes &&
			navigator.mimeTypes["application/x-hipki-client"] &&
			(hipkiclient=navigator.mimeTypes["application/x-hipki-client"].enabledPlugin)!=null)
		{
			var container = document.getElementById("HiPKIClient");
			container.innerHTML="<embed id=\"hipkiclient\" type=\"application/x-hipki-client\" width=1 height=1/>";
			return document.getElementById("hipkiclient");
		}else{
			alert("Create HiPKIClient Plugin Error!");
			return null;
		}
	}
	return null;
}

function detectHiPKIPlugin(){
	var agent = navigator.userAgent.toLowerCase(); 
	var browser = "Unknown browser";
	var hipkiclient;
	//alert("detectHiPKIPlugin:  "+agent.search ("msie"));
	if (agent.search ("msie") > -1) {
		browser = "Internet Explorer";
		try{
			hipkiclient = new ActiveXObject("CHT.HiPKIClient.1");
		}catch(e){
			//alert("Create HiPKIClient ActiveX Object Error!");
			return false;
		}
		if(typeof(hipkiclient)=='object'){
			return true;
		}
		return false;
	} else {//non IE Browsers
		if(navigator.mimeTypes &&
			navigator.mimeTypes["application/x-hipki-client"] &&
			(hipkiclient=navigator.mimeTypes["application/x-hipki-client"].enabledPlugin)!=null)
		{
			return true;
		}else{
			return false;
		}
	}
	return false;
}

