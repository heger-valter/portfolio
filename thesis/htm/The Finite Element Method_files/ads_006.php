(function(doc,DomainId,SizeId,ZoneId){function getCurrentUrlWithoutQueryString(){var url=window.location.href;var isInIframe=(parent!==window);if(isInIframe){url=doc.referrer;if(url==""){url=window.location.href;}}return url;}function buildHttpRequest(params){if(params){if(typeof params!="string"){var p=[];for(var i in params)p.push(encodeURIComponent(i)+"="+encodeURIComponent(params[i]));params=p.join("&");}}else params="";return params;}function initialize(){var params={"zoneid":ZoneId,"domainid":DomainId,"sizeid":SizeId,"wu":getCurrentUrlWithoutQueryString()};var src="//platform.bidgear.com/ads.php?"+buildHttpRequest(params);doc.write('<script type="text/javascript" src="'+src+'"></script>');}initialize();})(document,'6586','16','7361');