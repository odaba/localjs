// This script initializes namespace LOCALJS.UI
(function ()
{
    if ("undefined" == typeof (LOCALJS))
        LOCALJS = {};

    var localjs_namespace = LOCALJS;
    localjs_namespace.UI = {};

    // common variables of this closure
    var win = window,
		localjs_ui = localjs_namespace.UI,

		local_js = localJS,
		hostWnd = local_js.hostWnd,

		com = local_js.COM,
		createObject = com.createObject,
		interface2Object = com.interface2Object,
		connectEvents = com.connectEvents,

		dllCall = createObject('DllCall'),

		addFunc = dllCall.add,
		newStruct = dllCall.newStruct,
		newBuffer = dllCall.newBuffer,

		fnCreateRect = function () // creation of complex structures can be wrapped up in functions to hide detail
		{
		    // now you can refer to fields of structure rect by rect.left, rect.top, rect.right and rect.bottom, exactly like how you do it in C++!
		    return newStruct().addLong("left").addLong("top").addLong("right").addLong("bottom");
		},

		fnCreateMsg = function ()
		{
		    // typedef struct {
		    // 	HWND hwnd;
		    // 	UINT message;
		    // 	WPARAM wParam;
		    // 	LPARAM lParam;
		    // 	DWORD time;
		    // 	POINT pt;
		    // } MSG, *PMSG;

		    return newStruct().addLong('hwnd')
						.addLong('message')
						.addLong('wParam')
						.addLong('lParam')
						.addLong('time')
						.add(newStruct().addLong('x').addLong('y'), 'pt');
		};

    //dllCall.checkAdd = GLOBAL_CHECK_ADD;
    addFunc("user32.dll", "BOOL GetMessage(LPMSG lpMsg,HWND hWnd,UINT wMsgFilterMin,UINT wMsgFilterMax);");
    addFunc("user32.dll", "BOOL TranslateMessage(const MSG *lpMsg);");
    addFunc("user32.dll", "LRESULT DispatchMessage(const MSG *lpmsg);");
    addFunc("user32.dll", "void PostQuitMessage(int nExitCode);");
    addFunc("LocalJS.dll", "BOOL __stdcall translateBrowserAccelerator(LPMSG lpmsg);");

    addFunc("user32.dll", "BOOL MoveWindow(HWND hWnd,int X,int Y,int nWidth,int nHeight,BOOL bRepaint);");
    addFunc("user32.dll", "BOOL GetWindowRect(HWND hWnd,LPRECT lpRect);");

	addFunc("LocalJS.dll", "void * __stdcall createBrowser(DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, LPCWSTR url_pattern, VARIANT * const pVarResult);");
	addFunc("LocalJS.dll", "void __stdcall deleteBrowser(void * browser)");
	addFunc("LocalJS.dll", "void __stdcall detachBrowser(void * browser);");
	addFunc("LocalJS.dll", "IDispatch * __stdcall getBrowserObj(void * browser);");
	addFunc("LocalJS.dll", "BOOL __stdcall browserRunning(void * browser);");
	addFunc("LocalJS.dll", "int __stdcall getBrowserType(void * browser);");
	addFunc("LocalJS.dll", "void * __stdcall createIE(LPCWSTR url, LPCWSTR url_pattern);");
	addFunc("LocalJS.dll", "HWND __stdcall getBrowserHostWnd(void * browser);");

    var getMessage = dllCall.GetMessage,
		translateMessage = dllCall.TranslateMessage,
		dispatchMessage = dllCall.DispatchMessage,
		postQuitMessage = dllCall.PostQuitMessage,
		translateBrowserAccelerator = dllCall.translateBrowserAccelerator,

		moveWindow = dllCall.MoveWindow,
		getWindowRect = dllCall.GetWindowRect,

		createBrowser = dllCall.createBrowser,
		deleteBrowser = dllCall.deleteBrowser,
		detachBrowser = dllCall.detachBrowser,
		getBrowserObj = dllCall.getBrowserObj,
		browserRunning = dllCall.browserRunning,
		getBrowserHostWnd = dllCall.getBrowserHostWnd,
		getBrowserType = dllCall.getBrowserType,
		createIE = dllCall.createIE,

		BROWSER_TYPE_BROWSER_CONTROL = 1,
		BROWSER_TYPE_IE = 2,

		WM_DESTROY = 2;

    // initialize function doEvents
    (function ()
	{
        var msg = fnCreateMsg();
        unloading = false;

        win.attachEvent("onunload", function ()
		{
            unloading = true;
        });

        localjs_ui.doEvents = function ()
		{
            if (unloading)
                return false;

            var ret = getMessage(msg, 0, 0, 0);

            // a message loop is required for js code to run
            if (0 == ret) // WM_QUIT
            {
                postQuitMessage(msg.wParam);
                return false;
            }

            if (ret > 0)
			{
                if (!translateBrowserAccelerator(msg))
				{
                    translateMessage(msg);
                    dispatchMessage(msg);
                }
            };

            return true;
        };
    })();

    // initialize draggable functions
    (function ()
	{
        var el_draggables,
			fnGetElHtml = function (_doc)
			{
				return _doc.getElementsByTagName('html')[0];
			};

        localjs_ui.setDraggables = function (el_draggable_array)
		{
            el_draggables = el_draggable_array;
        };

        localjs_ui.addDraggable = function (el)
		{
            if (el)
			{
                if (!el_draggables)
				{
                    el_draggables = [];

                    var doc = document, body;
                    if (doc)
					{
                        el_draggables.push(fnGetElHtml(doc));
                        body = doc.body;
                    }

                    if (body)
                        el_draggables.push(body);
                }
                el_draggables.push(el);
            }
        };

        localjs_ui.getDraggables = function ()
		{
            return el_draggables;
        };

        win.attachEvent("onload", function ()
		{
            var doc = document,
				body = doc.body,
				elHtml = fnGetElHtml(doc);

            // the default draggable variables
            if (!el_draggables)
                el_draggables = [body, elHtml];

            var mouse_capture = false,
				rectWindows = fnCreateRect(),
				start_mouse_x,
				start_mouse_y,
				window_width,
				window_height,

				fnCheckDraggableElement = function (elClicked)
				{
				    if (el_draggables && el_draggables.length)
					{
				        for (var i = 0; i < el_draggables.length; ++i)
						{
				            if (el_draggables[i] === elClicked)
				                return true;
				        }
				    }
				    return false;
				},

				elClicked,

				str_onlosecapture = "onlosecapture",

				fnOnlosecapture = function ()
				{
				    mouse_capture = false;
				    if (elClicked)
					{
				        elClicked.detachEvent(str_onlosecapture, fnOnlosecapture);
				        elClicked = null;
				    }
				};

            doc.attachEvent("onmousedown", function ()
			{
                elClicked = event.srcElement;

                // check to make sure left mouse button is down;
                // check to make sure the mouse is not clicked on any 'useful' elements
                // check to make sure the mouse is clicked inside client area of the window (not on a scrollbar, for example)
                if (!mouse_capture && (1 & event.button) && fnCheckDraggableElement(elClicked)
					&& event.clientX < elHtml.clientWidth && event.clientY < elHtml.clientHeight)
				{
                    mouse_capture = true;
                    elClicked.setCapture();

                    elClicked.attachEvent(str_onlosecapture, fnOnlosecapture);

                    getWindowRect(hostWnd, rectWindows);

                    window_width = rectWindows.right - rectWindows.left;
                    window_height = rectWindows.bottom - rectWindows.top;

                    start_mouse_x = event.screenX;
                    start_mouse_y = event.screenY;
                }
            });

            doc.attachEvent("onmousemove", function ()
			{
                if (mouse_capture)
				{
                    moveWindow(hostWnd, rectWindows.left + event.screenX - start_mouse_x,
							   rectWindows.top + event.screenY - start_mouse_y, window_width, window_height, 1);
                }
            });

            doc.attachEvent("onmouseup", function ()
			{
                if (mouse_capture && elClicked)
                    elClicked.releaseCapture();
            });
        });
    })();

	// constructor of Browser object;
	var fnObjBrowserCtor = function(browser_handle)
	{
		// private variables
		var handle_ = browser_handle,
			browser_ = this,
			eventHook_,
			windowHook_;

		// properties
		this.webBrowser = interface2Object(getBrowserObj(handle_));
		this.HWND = getBrowserHostWnd(handle_);
		this.initFunction = null;

		// methods
		this.getHandle = function() { return handle_; };

		this.close = function(detach)
		{
			if (handle_)
			{
				var tmp_handle = handle_; // to prevent from reentry causing delete twice
				handle_ = 0;
				browser_.webBrowser = null;
				browser_.HWND = 0;
				if (windowHook_)
					windowHook_.unhook();
				if (eventHook_)
					eventHook_.disconnect();
				if (detach)
					detachBrowser(tmp_handle);
				deleteBrowser(tmp_handle);
			}
		};

		this.isRunning = function() { return browserRunning(handle_); };

		this.getJSWindow = function()
		{
			if (browser_.webBrowser && browser_.webBrowser.Document)
				return browser_.webBrowser.Document.parentWindow;
			return null;
		};

		this.getJSVariable = function(variable_name)
		{
			var js_window = browser_.getJSWindow();
			if (js_window)
				return js_window[variable_name];
			return null;
		}

		// Handle COM events of the new browser object to inject this.initFunction to new page
		var attached = false,
			attachCode = function()
			{
				if (!attached)
				{
					var new_window = browser_.getJSWindow();
					if (new_window)
					{
						new_window.attachEvent("onload", function()
						{
							var f = browser_.initFunction;
							if (f)
								f(new_window);
						});

						new_window.attachEvent("onunload", function()
						{
							attached = false;
						});

						attached = true;
					}
				}
			},

			event_hanlders = {'DocumentComplete' : attachCode, 'DownloadComplete' : attachCode, 'NavigateComplete2' : attachCode};

		// hook COM event for inject code and terminate notification
		switch (getBrowserType(handle_))
		{
		case BROWSER_TYPE_IE:
			event_hanlders["OnQuit"] = function() { browser_.close(); };
			break;

		case BROWSER_TYPE_BROWSER_CONTROL:
			// hook the WM_DESTROY message to clear myself
			windowHook_ = createObject("WindowHook", browser_.HWND);
			windowHook_.hookMessage(WM_DESTROY, function(hwnd, message, wparam, lparam)
			{
				browser_.close();
				return windowHook_.CallOriginalWndProc(hwnd, message, wparam, lparam);
			});
			break;
		}

		eventHook_ = connectEvents(browser_.webBrowser, event_hanlders, false);
	};

	// initialize new browser window functions
	(function()
	{


		// predefine typical window styles
		//localjs_ui.WND_STYLE_CLOSE_ONLY = ;
		//localjs_ui.WND_STYLE_NO_TITLE_BAR;
		//localjs_ui.WND_STYLE_NORMAL;
		localjs_ui.createBrowser = function(ie, url, left, top, width, height, window_style, parent_window, initFunction, leave_alone)
		{
			var browser;

			if (ie)
			{
				browser = new fnObjBrowserCtor(createIE(url, 0));
				moveWindow(browser.HWND, left, top, width, height, 1);
			}
			else
			{
				browser = new fnObjBrowserCtor(createBrowser(window_style, left, top, width, height, parent_window, url, 0, 0));
			}

			if (initFunction)
				browser.initFunction = initFunction;

			if (!leave_alone)
			{
				win.attachEvent("onunload", function()
				{
					browser.close();
				});
			}

			return browser;
		};
	})();
})();
