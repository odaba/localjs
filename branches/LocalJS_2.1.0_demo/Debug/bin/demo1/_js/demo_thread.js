// this file read javascript code from disk file, run the code in a new thread, and interop with the new thread with passed parameters
(function()
{
	window.attachEvent("onload", function()
	{
		var demoThread = document.getElementById("demoThread"),
			local_js = localJS,
			localization_get = LOCALJS.LOCALIZATION.get,
			dllCall = local_js.COM.createObject('DllCall'),
			msgBox = LOCALJS.UI.msgBox;

		dllCall.add("Kernel32.dll", "DWORD WINAPI GetCurrentThreadId(void);");

		var getCurrentThreadId = dllCall.GetCurrentThreadId;
		
		var fnReadJSFile = function (filename)
		{
			var localjs_file = LOCALJS.FILE,
				path = localjs_file.urlToPath(localjs_file.normalizeUrl()); // parse file name of current html out from url

			return localjs_file.readFileUTF8(localjs_file.buildPath(localjs_file.getParentFolder(path), filename));
		};

		var func_passed_to_thread = function(function_passed_from_thread)
		{
			msgBox(localization_get("demo_thread_wording_1")(getCurrentThreadId()));
			function_passed_from_thread();
		};

		demoThread.attachEvent("onclick", function()
		{
			msgBox(localization_get("demo_thread_wording_2") + getCurrentThreadId());
			var thread = local_js.threading.newThread(fnReadJSFile("_js\\script_thread.js"), [func_passed_to_thread, localization_get("demo_thread_wording_3"), localization_get]);
			while (thread.running)
			{
				if (!LOCALJS.UI.doEvents())
				break;
			}
			msgBox(localization_get("demo_thread_wording_4")(thread.id));
		});
	});
})();
