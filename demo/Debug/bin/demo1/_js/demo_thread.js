// this file read javascript code from disk file, run the code in a new thread, and interop with the new thread with passed parameters
(function()
{
	window.attachEvent("onload", function()
	{
		var demoThread = document.getElementById("demoThread"),
			local_js = localJS,
			dllCall = local_js.COM.createObject('DllCall'),
			msgBox = LOCALJS.UI.msgBox;

		dllCall.add("Kernel32.dll", "DWORD WINAPI GetCurrentThreadId(void);");

		var fnReadJSFile = function (filename)
		{
			var localjs_file = LOCALJS.FILE,
				path = localjs_file.urlToPath(localjs_file.normalizeUrl()); // parse file name of current html out from url

			return localjs_file.readFileUTF8(localjs_file.buildPath(localjs_file.getParentFolder(path), filename));
		};

		var func_passed_to_thread = function(function_passed_from_thread)
		{
			msgBox("在主線程中的函數func_passed_to_thread 中，當前線程ID: " + dllCall.GetCurrentThreadId() + "\n下面調用由新線程傳來的函數function_passed_from_thread");
			function_passed_from_thread();
		};

		demoThread.attachEvent("onclick", function()
		{
			msgBox("準備創建新線程，主線程的線程ID: " + dllCall.GetCurrentThreadId());
			var thread = local_js.threading.newThread(fnReadJSFile("_js\\script_thread.js"), [func_passed_to_thread, "LocalJS的線程同步很簡單"]);
			while (thread.running)
			{
				if (!LOCALJS.UI.doEvents())
				break;
			}
			msgBox("新線程（線程ID：" + thread.id + "）執行結束.");
		});
	});
})();
