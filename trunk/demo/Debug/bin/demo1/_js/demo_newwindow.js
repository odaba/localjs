// This function demostrates create a new window with LOCALJS.UI.createBrowser, and interop among new created windows
(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			new_window_url = LOCALJS.FILE.normalizeUrl("./new_window_hk.html"),

			elDialog = $('<div>大多數情況下，使用HTML的Dialog已經足夠好。<br/>可以用CSS為HTML Dialog定制不同的樣式，用JavaScript實現Dialog彈出的動態效果。<br/>HTML Dialog和主體HTML頁面共享全局的數據和函數。<br/><br/>然而如果確實要打開另外的窗口，也很簡單：<div style="text-align:center;padding-top:10px"><a href="#">點擊這裡打開新窗口</a></div></div>');

		// refer to http://blog.nemikor.com/2009/04/08/basic-usage-of-the-jquery-ui-dialog/ about how to open jQuery dialog
		elDialog.dialog({
			autoOpen: false,
			title: doc.title,
			modal : true,
			show : 'fade',
			width : 500,
			height : 380,
			position : 'top',
			buttons : { 'OK' : function() { elDialog.dialog('close'); } }
		});

		var window_number = 0,
			aInDialog = elDialog.find("a").eq(0),
			added_select = null;

		aInDialog.click(function()
		{
			var fnAddSelect = function(select_html)
			{
				if (!added_select)
				{
					// adjust dialog layout to add a select element
					elDialog.dialog("option", "height", 450);

					added_select = $(select_html);
					aInDialog.before(added_select);
					added_select.before('<div style="padding-bottom:10px">這個ListBox將和多個新窗口中的ListBox都保持同步：</div>');
					added_select.wrap('<div style="padding-bottom:10px"/>');
				}

				return added_select;
			};

			// create the new browser window
			LOCALJS.UI.createBrowser(0, new_window_url, window_number * 50, window_number * 50, 600, 300, LOCALJS.UI.WS_CLOSE_ONLY, localJS.hostWnd, function(new_window)
			{
				// the "this" keyword in injected_function will refer to the window object in new browser. refer to createBrowser.js
				var new_doc = new_window.document;
					new_sel = new_doc.getElementsByTagName("select")[0];

				// disable the F5 reload page in the new window to make logic simpler (no need to handle page reload caused by user)
				new_window.localJS.enableF5 = false;

				// create a select at our dialog dynamically and pass to the new window script function
				new_window.hookOtherSelect(fnAddSelect("<select>" + new_sel.innerHTML + "</select>").get(0));
			});
			++window_number;

			return false;
		});

		doc.getElementById("demoNewWindow").attachEvent("onclick", function()
		{
			// simply display a html dialog.
			elDialog.dialog('open');
		});

		return false;
	});
})();
