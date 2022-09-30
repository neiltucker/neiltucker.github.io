	var X = 0;
	var Y = 0;
	var bScroll = 0;
	if ("Microsoft Internet Explorer" == navigator.appName)
	{
	var http = hrefvalue.indexOf("http");
	var https = hrefvalue.indexOf("https");
	var nappVer = navigator.appVersion.indexOf("MSIE");
	if(nappVer != -1 )
	{
	nAppIndx=nappVer+5;
	IEVersion=navigator.appVersion.substring(nAppIndx,nAppIndx+1);
	}
	if(IEVersion>6)
	{
	if(http != -1)
	bScroll =1;
	else if(https != -1)
	bScroll =1;
	}
	}
	document.writeln('<OBJECT classid = "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"');
	if(document.location.protocol == "https:")
		document.writeln('codebase = "https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,0,0"');
	else
		document.writeln('codebase = "http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,0,0"');
	document.writeln('ID =L23 WIDTH = 1024 HEIGHT = 768 onfocus="doMouseEnter();" onblur = "doMouseOut();" onmouseenter="doMouseEnter();" onmouseleave="doMouseOut();">');
	document.writeln('<PARAM NAME = movie VALUE = "L2-3.swf'+ param +'">');
	document.writeln('<PARAM NAME = quality VALUE = high>');
	document.writeln('<PARAM NAME = bgcolor VALUE = #FFFFFF>');
	document.writeln('<PARAM NAME = menu VALUE = FALSE>');
	document.writeln('<PARAM NAME = scale VALUE = exactfit>');
	document.writeln('<EMBED Src = "L2-3.swf'+ param +'" quality = high bgcolor = #FFFFFF ');
	document.writeln('WIDTH = 1024 HEIGHT = 768');
	document.writeln('swLiveConnect = true');
	document.writeln('NAME = L23');
	document.writeln('TYPE = "application/x-shockwave-flash"');
	if(document.location.protocol == "https:")
		document.writeln('PLUGINSPAGE = "https://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">');
	else
		document.writeln('PLUGINSPAGE = "http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash">');
	document.writeln('</EMBED>');
	document.writeln('</OBJECT>');
