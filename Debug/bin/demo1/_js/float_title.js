// This code adjusts size of the floating title when browser window is resized
(function()
{
	window.attachEvent("onload", function()
	{
		var divFloat = $('#div_app_title').get(0); // this returns the first DOM element having ID div_app_title
			
			fnMove = function()
			{
				// the jQuery selector returns the first DIV element having css style 'setting_title'
				var width = $("div.width_marker").get(0).offsetWidth;
				if (width > 200)
					divFloat.style.width = width + 'px';
			};

		window.attachEvent("onresize", fnMove);
		fnMove();
	});
})();
