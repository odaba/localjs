// This file demostrates calls back and forth between C++ and JavaScript
(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			local_js = localJS,
			dllCall = local_js.COM.createObject("DllCall"),

			localjs_file = LOCALJS.FILE,
			localjs_ui = LOCALJS.UI,

			msgBox = localjs_ui.msgBox;

		dllCall.add(localjs_file.buildPath(localjs_file.getExeFolder(), "LocalJSDemoDll.dll"),
					"void __stdcall callJSFunctionInNewThread(void * browser)", "demo");

		doc.getElementById('demoCallJS').attachEvent("onclick", function()
		{
			dllCall.demo(local_js.browserWindowHandle);
		});

		// this global function will be called by dll, refer to LocalJSDemoDll.cpp
		funcCalledByDll = function(lval, str, obj)
		{
			msgBox("Code in JavaScript:\nThe long value passed from DLL thread is " + lval + "\nThe string passed from DLL thread is:\n\t" + str);

			lval.returnValue = 20;
			str.returnValue = "String passed from Script";
			obj.returnValue = function ()
			{
				msgBox("Code in JavaScript:\nThis is another JavaScript function passed to DLL thread");
			};

			return 5;
		};
	});
})();
