/*
	This code is part of LocalJS Open source.

	http://localjs.org/

	It's free to use this code anywhere, provided that this declaration is included
*/

// This script initializes namespace LOCALJS.WEB_SERVICE
(function ()
{
    if ("undefined" == typeof (LOCALJS))
        LOCALJS = {};

    var localjs_namespace = LOCALJS;

	localjs_namespace.WEB_SERVICE = localjs_namespace.WEB_SERVICE || {};

	var localjs_ws = localjs_namespace.WEB_SERVICE,

		local_js = localJS,
		com = local_js.COM,
		createObject = com.createObject;

	localjs_ws.callUrl = function(http_method, url, callback, request_body, username, password)
	{
		var oHttp = createObject("Microsoft.XMLHTTP");

		// this is the way to use onreadystatechange but avoid memory leak.
		oHttp.onreadystatechange = function()
		{
			if (4 == oHttp.readyState)
			{
				oHttp.onreadystatechange = function() {};

				if (200 == oHttp.status)
				{
					if (callback && callback.ok)
						callback.ok(oHttp.responseText, oHttp);
				}
				else
				{
					if (callback && callback.fail)
						callback.fail(oHttp.status, oHttp);
				}

				oHttp = null; // this statement is a must to clear memory leak
			}
		}

		oHttp.open(http_method, url, true, username, password);
		oHttp.send(request_body);

		// The poll way to avoid memory leak
		/*var fnPullReadyState = function()
		{
			if (4 == oHttp.readyState)
			{
				if (200 == oHttp.status)
				{
					if (callback && callback.ok)
						callback.ok(oHttp.responseText, oHttp);
				}
				else
				{
					if (callback && callback.fail)
						callback.fail(oHttp.status, oHttp);
				}
			}
			else
				setTimeout(fnPullReadyState, 500);
		};

		setTimeout(fnPullReadyState, 500);*/
	}
})();
