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
			localjs_ui = LOCALJS.UI;

		demoWndPlacement.attachEvent("onclick", function()
		{
			localjs_ui.msgBox("下面將把本窗口向左移動10個像素");

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
			localjs_file = LOCALJS.FILE;

		demoOpenFile.attachEvent("onclick", function()
		{
			localjs_ui.msgBox("下面將彈出一個文件選擇對話框，專門選擇iexplore.exe");
			var filename = localjs_file.browseFile(localjs_file.getProgramFolder('Internet Explorer'),
											   "Internet Explorer 可執行文件\0iexplore.exe\0",
											   "請選擇Internet Explorer的可執行文件",
											   "exe", "iexplore.exe", true);
			if (false === filename)
				localjs_ui.msgBox("您取消了文件對話框");
			else
				localjs_ui.msgBox("剛才選擇的文件是 " + filename);
		});
	});
})();
