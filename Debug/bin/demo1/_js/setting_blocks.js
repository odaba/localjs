// this file implements slide up / down effect of each UI block, using jQuery
(function()
{
	$(document).ready(function()
	{
		// for show / hide setting blocks
		var fnFindTitleIconFromBody = function(setting_body)
			{
				// The Collection returned by prevAll starts from the last html elments
				return setting_body.prevAll("div.setting_title").eq(0).children("img.title_arrow").eq(0);
			},

			fnShowUpDown = function(img_icon, up)
			{
				img_icon.attr("src", up ? '_image/arrow_up.png' : '_image/arrow_down.png');
			};

		$("div.setting_title").click(function()
		{
			var slide_time_ms = 300,
				// the jQuery code: get the DOM element of first following sibling div element having css class "setting_body",
				// which is the setting body div next to setting title div
				this_setting_body = $(this).nextAll("div.setting_body").get(0);

			// loop each setting block element
			$("div.setting_body").each(function()
			{
				if ($(this).get(0) == this_setting_body) // check if the DOM elements retrieved from two jQuery objects matches
				{
					fnShowUpDown(fnFindTitleIconFromBody($(this)), $(this).is(":hidden"));
					$(this).slideToggle(slide_time_ms);
				}
				else
				{
					$(this).slideUp(slide_time_ms, function()
					{
						fnShowUpDown(fnFindTitleIconFromBody($(this)), false);
					});
				}
			});
		});

		// hide all setting blocks except the first one initially
		var i = 0;
		$("div.setting_body").each(function()
		{
			if (i++)
			{
				$(this).hide();
				fnShowUpDown(fnFindTitleIconFromBody($(this)), false);
			}
			else
			{
				$(this).show();
				fnShowUpDown(fnFindTitleIconFromBody($(this)), true);
			}
		});

		// logic for opacity, because for IE, opacity need a width to take effect
		var fnResize = function()
		{
			var new_width = $("div.width_marker").width() - 24; // 24: (body.padding + body.margin) * 2
			if (new_width > 200)
			{
				$("div.setting_title").css("width", new_width);
				$("div.setting_body").css("width", new_width);
			}
		};

		$(window).resize(fnResize);
		fnResize();
	});
})();
