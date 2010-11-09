// This file demostrates call to LOCALJS.UI functions, which wrap up call Windows API with structure parameters
(function()
{
	// this is to demostrate GetWindowPlacement and SetWindowPlacement
	// run this function each time move the window a little bit left
	//
	window.attachEvent("onload", function()
	{
		var doc = document,
			demoWndPlacement = doc.getElementById('demoWndPlacement'),
			localjs_ui = LOCALJS.UI,
			localization_get = LOCALJS.LOCALIZATION.get;

		demoWndPlacement.attachEvent("onclick", function()
		{
			localjs_ui.msgBox(localization_get("Next, move the window 10 pixels to left"));

			var SW_SHOWNA = 8,
				placement = localjs_ui.getWindowPlacement(),

				rect = placement.rcNormalPosition;

			rect.left -= 10;
			rect.right -= 10;
			placement.flags = 0;
			placement.showCmd = SW_SHOWNA;
			localjs_ui.setWindowPlacement(placement);
		});
	});
})();

(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			demoOpenFile = doc.getElementById('demoOpenFile'),

			localjs_ui = LOCALJS.UI,
			localjs_file = LOCALJS.FILE,
			localization_get = LOCALJS.LOCALIZATION.get;

		demoOpenFile.attachEvent("onclick", function()
		{
			localjs_ui.msgBox(localization_get("Next, a file open dialog will be popped up, special for iexplore.exe"));
			var filename = localjs_file.browseFile(false, localjs_file.getProgramFolder('Internet Explorer'),
											   localization_get("Internet Explorer Executable File") + "\0iexplore.exe\0",
											   localization_get("Please Choose Executable File of Internet Explorer"),
											   "exe", "iexplore.exe", true);
			if (false === filename)
				localjs_ui.msgBox(localization_get("The file open dialog was canceled"));
			else
				localjs_ui.msgBox(localization_get("The file just selected is") + " " + filename);
		});
	});
})();
