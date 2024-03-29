/*
	This code is part of LocalJS Open source.

	http://localjs.org/

	It's free to use this code anywhere, provided that this declaration is included
*/

// This script initializes namespace LOCALJS.UI
(function ()
{
    if ("undefined" == typeof (LOCALJS))
        LOCALJS = {};

    var localjs_namespace = LOCALJS;

	localjs_namespace.UI = localjs_namespace.UI || {};

    // common variables of this closure
    var false_value = false, // this variable is used to make false be compressed by compressor.
		true_value = true, // this variable is used to make true be compressed by compressor.
		win = window,
		scr = screen,
		localjs_ui = localjs_namespace.UI,
		localjs_file = localjs_namespace.FILE,

		local_js = localJS,
		hostWnd = local_js.hostWnd,
		webBrowser = local_js.webBrowser,

		com = local_js.COM,
		createObject = com.createObject,
		interface2Object = com.interface2Object,
		connectEvents = com.connectEvents,

		dllCall = createObject('DllCall'),

		addFunc = dllCall.add,
		newStruct = dllCall.newStruct,
		newBuffer = dllCall.newBuffer,

		fnCheckOptionalParameter = function(p, default_value)
		{
			return "undefined" == typeof(p) ? default_value : p;
		},

		fnCreateRect = function () // creation of complex structures can be wrapped up in functions to hide detail
		{
			//  typedef struct _RECT {
			//    LONG left;
			//    LONG top;
			//    LONG right;
			//    LONG bottom;
			//  }RECT, *PRECT;

		    // now you can refer to fields of structure rect by rect.left, rect.top, rect.right and rect.bottom, exactly like how you do it in C++!
		    return newStruct().addLong("left").addLong("top").addLong("right").addLong("bottom");
		},

		fnCreatePoint = function ()
		{
			//  typedef struct tagPOINT {
			//    LONG x;
			//    LONG y;
			//  }POINT, *PPOINT;

			return newStruct().addLong('x').addLong('y');
		},

		fnCreateWindowPlacement = function()
		{
			//  typedef struct _WINDOWPLACEMENT {
			//  	UINT length;
			//  	UINT flags;
			//  	UINT showCmd;
			//  	POINT ptMinPosition;
			//  	POINT ptMaxPosition;
			//  	RECT rcNormalPosition;
			//  } WINDOWPLACEMENT;

			var placement = newStruct().addLong('length')
							   .addLong('flags')
							   .addLong('showCmd')
							   .add(fnCreatePoint(), 'ptMinPosition')
							   .add(fnCreatePoint(), 'ptMaxPosition')
							   .add(fnCreateRect(), 'rcNormalPosition');

			placement.length = placement.size;
			return placement;
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
	addFunc("user32.dll", "LRESULT SendMessage(HWND hWnd,UINT Msg,WPARAM wParam,LPARAM lParam);");

	addFunc("user32.dll", "int WINAPI MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);");
	addFunc("user32.dll", "LONG SetWindowLong(HWND hWnd, int nIndex, LONG dwNewLong);");
	addFunc("user32.dll", "BOOL SetWindowPos(HWND hWnd, HWND hWndInsertAfter, int X, int Y, int cx, int cy, UINT uFlags);");
	addFunc("user32.dll", "BOOL SetForegroundWindow(HWND hWnd);");
    addFunc("user32.dll", "BOOL MoveWindow(HWND hWnd,int X,int Y,int nWidth,int nHeight,BOOL bRepaint);");
    addFunc("user32.dll", "BOOL GetWindowRect(HWND hWnd,LPRECT lpRect);");

	addFunc('user32.dll', 'BOOL GetWindowPlacement(HWND hWnd,WINDOWPLACEMENT *lpwndpl);');
	addFunc('user32.dll', 'BOOL SetWindowPlacement(HWND hWnd,WINDOWPLACEMENT *lpwndpl);');

	addFunc("LocalJS.dll", "void * __stdcall createBrowserWindow(DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, VARIANT * const pVarResult);");
	addFunc("LocalJS.dll", "void __stdcall deleteBrowserWindow(void * browser)");
	addFunc("LocalJS.dll", "void __stdcall detachBrowserWindow(void * browser);");
	addFunc("LocalJS.dll", "IDispatch * __stdcall getBrowserObj(void * browser);");
	addFunc("LocalJS.dll", "BOOL __stdcall browserWindowClosed(void * browser);");
	addFunc("LocalJS.dll", "int __stdcall getBrowserType(void * browser);");
	addFunc("LocalJS.dll", "void * __stdcall createIE(LPCWSTR url);");
	addFunc("LocalJS.dll", "HWND __stdcall getBrowserHostWnd(void * browser);");

    var getMessage = dllCall.GetMessage,
		translateMessage = dllCall.TranslateMessage,
		dispatchMessage = dllCall.DispatchMessage,
		postQuitMessage = dllCall.PostQuitMessage,
		translateBrowserAccelerator = dllCall.translateBrowserAccelerator,
		sendMessage = dllCall.SendMessage,

		messageBox = dllCall.MessageBox,
		setWindowLong = dllCall.SetWindowLong,
		setWindowPos = dllCall.SetWindowPos,
		setForegroundWindow = dllCall.SetForegroundWindow,
		moveWindow = dllCall.MoveWindow,
		getWindowRect = dllCall.GetWindowRect,

		getWindowPlacement = dllCall.GetWindowPlacement,
		setWindowPlacement = dllCall.SetWindowPlacement,

		createBrowserWindow = dllCall.createBrowserWindow,
		deleteBrowserWindow = dllCall.deleteBrowserWindow,
		detachBrowserWindow = dllCall.detachBrowserWindow,
		getBrowserObj = dllCall.getBrowserObj,
		browserWindowClosed = dllCall.browserWindowClosed,
		getBrowserHostWnd = dllCall.getBrowserHostWnd,
		getBrowserType = dllCall.getBrowserType,
		createIE = dllCall.createIE,

		BROWSER_TYPE_BROWSER_CONTROL = 1,
		BROWSER_TYPE_IE = 2,

		GWL_STYLE = -16,

		WS_OVERLAPPED = 0x00000000,
		WS_POPUP = 0x80000000,
		WS_CAPTION = 0x00C00000,
		WS_SYSMENU = 0x00080000,
		WS_MINIMIZEBOX = 0x00020000,
		WS_MAXIMIZEBOX = 0x00010000,
		WS_VISIBLE = 0x10000000,
		WS_THICKFRAME = 0x00040000,
		WS_BORDER = 0x00800000,
		WS_OVERLAPPEDWINDOW = WS_OVERLAPPED | WS_CAPTION | WS_SYSMENU | WS_THICKFRAME | WS_MINIMIZEBOX | WS_MAXIMIZEBOX,

		SWP_FRAMECHANGED = 0x0020,
		SWP_SHOWWINDOW = 0x0040,
		SWP_NOMOVE = 0x0002,
		SWP_NOSIZE = 0x0001,

		SW_SHOWMAXIMIZED = 3,
		SW_SHOWNORMAL = 1,

		HWND_TOP = 0,

		WM_CLOSE = 0x0010,
		WM_SETTEXT = 0xC,
		WM_DESTROY = 2,

		MB_ICONERROR = 0x00000010,
		MB_ICONQUESTION = 0x00000020,
		MB_ICONEXCLAMATION = 0x00000030,
		MB_ICONINFORMATION = 0x00000040,

		MB_SETFOREGROUND = 0x00010000,
		MB_TASKMODAL = 0x00002000,
		MB_TOPMOST = 0x00040000,

		MB_OKCANCEL = 0x00000001,
		MB_YESNO = 0x00000004,

		MB_DEFBUTTON2 = 0x00000100,
		MB_DEFBUTTON3 = 0x00000200,

		MB_ERR = MB_ICONERROR | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL,
		MB_INFO = MB_ICONINFORMATION | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL,
		MB_CONFIRM_YES_NO = MB_ICONQUESTION | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL | MB_YESNO,
		MB_CONFIRM_OK_CANCEL = MB_ICONQUESTION | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL | MB_OKCANCEL,

		IDOK = 1,
		IDYES = 6,

		NULL = 0;


	// predefine typical window styles
	localjs_ui.WS_CLOSE_ONLY = WS_POPUP | WS_THICKFRAME | WS_CAPTION | WS_SYSMENU | WS_VISIBLE;
	localjs_ui.WS_NO_TITLE_BAR = WS_POPUP | WS_VISIBLE | WS_SYSMENU;
	localjs_ui.WS_NORMAL = WS_OVERLAPPEDWINDOW | WS_VISIBLE;

	localjs_ui.isIE = BROWSER_TYPE_IE == getBrowserType(local_js.browserWindowHandle);

    // initialize function doEvents
    (function ()
	{
        var msg = fnCreateMsg();
        unloading = false_value;

        win.attachEvent("onunload", function ()
		{
            unloading = true_value;
        });

        localjs_ui.doEvents = function ()
		{
            if (unloading)
                return false_value;

            var ret = getMessage(msg, 0, 0, 0);

            // a message loop is required for js code to run
            if (0 == ret) // WM_QUIT
            {
                postQuitMessage(msg.wParam);
                return false_value;
            }

            if (ret > 0)
			{
                if (!translateBrowserAccelerator(msg))
				{
                    translateMessage(msg);
                    dispatchMessage(msg);
                }
            };

            return true_value;
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

        localjs_ui.addDraggable = function ()
		{
			var i = 0, args = arguments;
			for (; i < args.length; ++i)
			{
				var el = args[i];
				if ("string" == typeof(el))
					el = document.getElementById(el);

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

            var mouse_capture = false_value,
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
				                return true_value;
				        }
				    }
				    return false_value;
				},

				elClicked,

				str_onlosecapture = "onlosecapture",

				fnOnlosecapture = function ()
				{
				    mouse_capture = false_value;
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
                    mouse_capture = true_value;
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
	var fnObjBrowserWindowCtor = function(browser_handle)
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
		this.isIE = BROWSER_TYPE_IE == getBrowserType(handle_);

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
					detachBrowserWindow(tmp_handle);
				deleteBrowserWindow(tmp_handle);
			}
		};

		this.isClosed = function() { return browserWindowClosed(handle_) ? true_value : false_value; };

		this.getJSWindow = function(timout_seconds)
		{
			timout_seconds = fnCheckOptionalParameter(timout_seconds, 10);
			var start = (new Date()).getTime() / 1000;

			do
			{
				if (browser_.webBrowser && browser_.webBrowser.Document)
					return browser_.webBrowser.Document.parentWindow;
			} while (((new Date()).getTime() / 1000) - start < timout_seconds && localjs_ui.doEvents());

			return undefined;
		};

		this.getJSVariable = function(variable_name, timout_seconds)
		{
			timout_seconds = fnCheckOptionalParameter(timout_seconds, 10);

			var start = (new Date()).getTime() / 1000,
				js_window = browser_.getJSWindow(timout_seconds);

			if (js_window)
			{
				while (undefined == js_window[variable_name] && ((new Date()).getTime() / 1000) - start < timout_seconds && localjs_ui.doEvents());
				return js_window[variable_name];
			}

			return undefined;
		};

		// Handle COM events of the new browser object to inject this.initFunction to new page
		var attached = false_value,
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
							attached = false_value;
						});

						attached = true_value;
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

		eventHook_ = connectEvents(browser_.webBrowser, event_hanlders, false_value);
	};

	// initialize new browser window functions
	(function()
	{
		localjs_ui.newWindow = function(url, left, top, width, height, window_style, parent_window, initFunction, leave_alone, ie)
		{
			var browser;

			width = fnCheckOptionalParameter(width, 300);
			height = fnCheckOptionalParameter(height, 180);

			left = fnCheckOptionalParameter(left, (scr.availWidth - width) >> 1);
			top = fnCheckOptionalParameter(top, (scr.availHeight - height) >> 1);

			if (ie)
			{
				browser = new fnObjBrowserWindowCtor(createIE(url));
				moveWindow(browser.HWND, left, top, width, height, 1);
			}
			else
			{
				if (!window_style)
					window_style = localjs_ui.WS_NORMAL;

				if (!parent_window)
					parent_window = 0;

				browser = new fnObjBrowserWindowCtor(createBrowserWindow(window_style, left, top, width, height, parent_window, url, 0));
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

	// initialize message box functions
	(function()
	{
		localjs_ui.msgBox = function(msg, error)
		{
			messageBox(hostWnd, msg, document.title, error ? MB_ERR : MB_INFO);
		};

		// replace default alert function
		win.alert = function(msg)
		{
			localjs_ui.msgBox(msg, true_value);
		}

		localjs_ui.confirm = function(msg, default_yes, ok_cancel)
		{
			var ret = messageBox(hostWnd, msg, document.title, (ok_cancel ? MB_CONFIRM_OK_CANCEL : MB_CONFIRM_YES_NO) | (default_yes ? 0 : MB_DEFBUTTON2));
			return ok_cancel ? (ret == IDOK) : (ret == IDYES);
		};

		// replace default confirm function
		win.confirm = function(msg, default_yes, ok_cancel)
		{
			return localjs_ui.confirm(msg, default_yes, ok_cancel);
		}
	})();

	// set window title to doc title, show / hide title bar, bring window to top, get / set window position, center window
	(function()
	{
		localjs_ui.showTitleBar = function(hide)
		{
			dllCall.SetWindowLong(hostWnd, GWL_STYLE, hide ? localjs_ui.WS_NO_TITLE_BAR : localjs_ui.WS_NORMAL);
			dllCall.SetWindowPos(hostWnd, HWND_TOP, 0, 0, 0, 0, SWP_FRAMECHANGED | SWP_SHOWWINDOW | SWP_NOMOVE | SWP_NOSIZE);
		}

		localjs_ui.updateTitle = function()
		{
			sendMessage(hostWnd, WM_SETTEXT, 0, document.title);
		}

		localjs_ui.bring2Top = function()
		{
			setForegroundWindow(hostWnd);
		}

		localjs_ui.centerWindow = function(cx, cy) // cx, cy are window width
		{
			var scrWidth = scr.availWidth,
				scrHeight = scr.availHeight;
			if (cx > scrWidth)
				cx = scrWidth;
			cy += local_js.btmBarHeight;
			if (cy > scrHeight)
				cy = scrHeight;
			moveWindow(hostWnd, (scrWidth - cx) / 2, (scrHeight - cy) / 2, cx, cy, 1);
			setForegroundWindow(hostWnd);
		};

		localjs_ui.getWindowRect = function()
		{
			var rect = fnCreateRect();
			getWindowRect(hostWnd, rect);
			return rect;
		}

		localjs_ui.moveWindow = function(left, top, width, height)
		{
			moveWindow(hostWnd, left, top, width, height, 1);
		}

		localjs_ui.getWindowPlacement = function()
		{
			var placement = fnCreateWindowPlacement();
			getWindowPlacement(hostWnd, placement);
			return placement;
		}

		localjs_ui.setWindowPlacement = function(placement)
		{
			setWindowPlacement(hostWnd, placement);
		}

		localjs_ui.saveWindowPosition = function(ini_file, section_name, key_name_prefix)
		{
			var placement = localjs_ui.getWindowPlacement(),
				rcNormalPosition = placement.rcNormalPosition,
				iniWrite = localjs_file.iniWrite;

			iniWrite(ini_file, section_name, key_name_prefix + "left", rcNormalPosition.left.asLong);
			iniWrite(ini_file, section_name, key_name_prefix + "top", rcNormalPosition.top.asLong);
			iniWrite(ini_file, section_name, key_name_prefix + "right", rcNormalPosition.right.asLong);
			iniWrite(ini_file, section_name, key_name_prefix + "bottom", rcNormalPosition.bottom.asLong);
			iniWrite(ini_file, section_name, key_name_prefix + "maximized", SW_SHOWMAXIMIZED == placement.showCmd ? "1" : "0");
		}

		localjs_ui.loadWindowPosition = function(ini_file, section_name, key_name_prefix)
		{
			var iniReadInt = localjs_file.iniReadInt,

				left = iniReadInt(ini_file, section_name, key_name_prefix + "left", 50),
				top = iniReadInt(ini_file, section_name, key_name_prefix + "top", 50),
				right = iniReadInt(ini_file, section_name, key_name_prefix + "right", 800),
				bottom = iniReadInt(ini_file, section_name, key_name_prefix + "bottom", 600),
				maximized = iniReadInt(ini_file, section_name, key_name_prefix + "maximized", 0),

				scrWidth = scr.availWidth,
				scrHeight = scr.availHeight,

				placement = fnCreateWindowPlacement(),
				rcNormalPosition = placement.rcNormalPosition,
				ptMinPosition = placement.ptMinPosition,
				ptMaxPosition = placement.ptMaxPosition;

			if (left < 0)
				left = 0;
			if (top < 0)
				top = 0;
			if (right > scrWidth)
				right = scrWidth;
			if (bottom > scrHeight)
				bottom = scrHeight;

			placement.showCmd = maximized ? SW_SHOWMAXIMIZED : SW_SHOWNORMAL;
			ptMinPosition.x = ptMinPosition.y = ptMaxPosition.x = ptMaxPosition.y = -1;
			rcNormalPosition.left = left;
			rcNormalPosition.top = top;
			rcNormalPosition.right = right;
			rcNormalPosition.bottom = bottom;
			localjs_ui.setWindowPlacement(placement);
		}
	})();

	// exitCallback: confirm exit
	(function()
	{
		localjs_ui.exitCallback = null;

		var exitConfirm = function()
		{
			return localjs_ui.exitCallback ? localjs_ui.exitCallback() : true_value;
		};

		var windowHook = createObject('WindowHook', hostWnd);
		windowHook.hookMessage(WM_CLOSE, function(hwnd, message, wparam, lparam)
		{
			return exitConfirm() ? windowHook.CallOriginalWndProc(hwnd, message, wparam, lparam) : 0;
		});

		var eventHook = connectEvents(webBrowser, {'WindowClosing': function(IsChildWindow, cancel)
		{
			// let's always cancel the close event since otherwise it will popup an unwanted confirm dialog
			cancel.returnValue = true_value;

			if (exitConfirm())
			{
				if (localjs_ui.isIE)
					webBrowser.Quit();
				else
					local_js.closeWindow();
			}
		}});

		win.attachEvent("onunload", function()
		{
			windowHook.unhook();
			eventHook.disconnect();
		});
	})();

	// newWindowCallback
	(function()
	{
		localjs_ui.newWindowCallback = null;

		var eventHook = connectEvents(webBrowser, {'NewWindow3' : function(disp, cancel, flags, url_context, url)
		{
			var newWindowCallback = localjs_ui.newWindowCallback;
			if (newWindowCallback && newWindowCallback(disp, cancel, flags, url_context, url))
				return;

			// use our default process
			// make the new window start from center of screen
			var scr = screen;
			disp.returnValue = LOCALJS.UI.newWindow(url, scr.availWidth / 2 - 5, scr.availHeight / 2 - 5, 10, 10, LOCALJS.UI.WS_NO_TITLE_BAR);
		}});

		win.attachEvent("onunload", function()
		{
			eventHook.disconnect();
		});
	})();
})();
