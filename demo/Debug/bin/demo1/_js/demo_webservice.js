// the goal of wrap up all code in an anonymous function is to make all local variable names having page scope
// if you want to hide the logic and make javascript/css files smaller for delivery, YUI compressor (http://developer.yahoo.com/yui/compressor/) is a very good tool, and FREE!
(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			localjs_ui = LOCALJS.UI,
			localjs_ws = LOCALJS.WEB_SERVICE;

		document.getElementById("demoWebService").attachEvent("onclick", function()
		{
			var onOK = function (responseText, objHttp)
			{
				// this one line simple code is how JSON string get parsed in javascript
				var json_response = (new Function("return " + responseText))();
				localjs_ui.msgBox("LocalJS 示例 Web Service 返回 JSON 字符串：\n\n" + responseText + "\n\n用JavaScript很容易解析JSON格式，得到:\n\n" + json_response.info);
			};

			var onFail = function (statusCode, objHttp)
			{
				alert("LocalJS 示例 Web Service 調用失敗，http 錯誤碼為 " + statusCode);
			};

			localjs_ws.callUrl("GET", "http://localjs.org/demo/demo_ws.php", { 'ok' : onOK, 'fail' : onFail });
		});
	});
})();
