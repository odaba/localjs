// This file use LOCALJS.UI.newWindowCallback to handle the event of create a new window.
// The callback function uses LOCALJS.UI.newWindow to create a window with initial javascript code injected to the new browser window, which changes google logo in page
(function()
{
	window.attachEvent("onload", function()
	{
		var doc = document,
			path_to_bk_image = LOCALJS.FILE.normalizeUrl("./_image/google.png"),

			localization_get = LOCALJS.LOCALIZATION.get,

			elDialog = $(localization_get('demo_google_dialog_1')),

			elDialog2 = $(localization_get('demo_google_dialog_2'));

		LOCALJS.UI.newWindowCallback = function(disp, cancel, flags, url_context, url)
		{
			if (url.toLowerCase() != "http://www.google.com.hk/")
				return false;

			elDialog.children("span").eq(0).text(localization_get('Are you going to open') + " " +  url +" ?");
			elDialog.children("select").eq(0).children("option").eq(0).text(localization_get("Don't open") + ' ' + url);

			var action = 0,
				onOK = function()
				{
					var sel = elDialog.children("select").eq(0).get(0),
						options = sel.options;

					for (var i = 0; i < options.length; ++i)
					{
						var option = options[i];
						if (option.selected)
						{
							action = option.value;
							break;
						}
					}

					elDialog.dialog('close');
				};

			// refer to http://blog.nemikor.com/2009/04/08/basic-usage-of-the-jquery-ui-dialog/ about how to open jQuery dialog
			elDialog.dialog({
				autoOpen: false,
				title: doc.title,
				modal : true,
				show : 'fade',
				width : 500,
				height : 380,
				buttons : {'Ok': onOK }
			});

			elDialog.dialog('open');

			// Like Windows modal dialog, HTML modal dialog will disable all UI access to all other elements on the same page
			// Unlike Windows modal dialog, HTML modal dialog function returns immediately after dialog is shown.
			// We can use LOCALJS.UI.doEvents function to wait until the dialog is closed, which simulate behavior of windows modal dialog
			// Note: have to check isOpen before drop the dialog element from page
			// Note: if user press F5 to refresh the page when waiting for modal dialog, jQuery will generate an error, simply catch the error and return.
			try
			{
				while (elDialog.dialog("isOpen"))
				{
					if (!LOCALJS.UI.doEvents())
						break;
				}
			}
			catch (e)
			{
				action = 0;
			}

			if (0 == action)
			{
				cancel.returnValue = true;
				return true;
			}

			// Display another html modaless dialog
			elDialog2.dialog({
				title: doc.title,
				autoOpen: false,
				show : 'slide',
				width : 400,
				height : 350,
				buttons : { 'OK' : function() { elDialog2.dialog('close'); } }
			});

			elDialog2.dialog('open');

			// now create the browser object
			var fnInjected_to_google = function(new_window)
			{
				var new_doc = new_window.document;

				// here we choose to only attach code for the url directly opened
				if (url != new_doc.URL)
					return;

				// let's first get jQuery loaded in google page
				// this is not a must, just demostrate how easy it is to add javascript to another page not owned by you
				var elHead = new_doc.getElementsByTagName("head")[0],
					newScript = new_doc.createElement('script');

				newScript.type = 'text/javascript';
				newScript.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js';
				elHead.appendChild(newScript);

				// now we change the logo of google HK :-)
				var change_google = function()
				{
					if (new_window.$) // if jQuery hasn't been ready yet...
					{
						// now change something in google page
						var d = new_window.$("#logo");
						if (null != d) // if document has been ready
						{
							if (d.is("img"))
							{
								// this looks like google global site
								d.attr('src', 2 == action ? "http://localjs.org/demo/_image/google.png" : path_to_bk_image);
							}
							else
							{
								d.css("background", "url(" + path_to_bk_image + ") no-repeat");
								d.children("div").eq(0).text("LocalJS");
							}

							// and with localJS, we can change the new window title
							new_doc.title = "Loogle Powered By LocalJS";

							var new_localJS = new_window.localJS;
							if (new_localJS)
							{
								new_localJS.enableF5 = false; // enableF5 has not effect for standalone internet explorer application since it's in a different process
								var new_hostWnd = new_localJS.hostWnd;
								if (new_hostWnd)
								{
									var newDllCall = new_localJS.COM.createObject("DllCall"),
										WM_SETTEXT = 0xC;
									newDllCall.add("user32.dll", "LRESULT SendMessage(HWND hWnd,UINT Msg,WPARAM wParam,LPARAM lParam);");
									// please note how easy it is to refer to the localJS object in another window
									newDllCall.SendMessage(new_hostWnd, WM_SETTEXT, 0, new_doc.title);
								}
							}

							return;
						}
					}

					// use a timer here to wait jQuery or document fully initialized
					new_window.setTimeout(change_google, 50);
				};

				change_google();
			};

			// create new browser window and inject function above into google page
			var browser_obj = LOCALJS.UI.newWindow("about:blank", 10, 10, 500, 300, LOCALJS.UI.WS_CLOSE_ONLY, 
												   localJS.hostWnd, fnInjected_to_google, false, '^http://www.google.com', 2 == action);
			disp.returnValue = browser_obj.webBrowser;

			return true;
		};
	});
})();
