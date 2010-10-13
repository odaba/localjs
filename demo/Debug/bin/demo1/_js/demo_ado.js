// this files load data_table_hk.html to demostrate database access
(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			data_table_url = LOCALJS.FILE.normalizeUrl(LOCALJS.LOCALIZATION.get("./" + "data_table_en.html")),
			new_page;

		doc.getElementById("demoADO").attachEvent("onclick", function()
		{
			if (new_page && new_page.isRunning())
				new_page.webBrowser.Navigate2(data_table_url);
			else
				new_page = LOCALJS.UI.createBrowser(0, data_table_url, -100, -100, 10, 10, LOCALJS.UI.WS_NORMAL, 0);
		});
	});
})();
