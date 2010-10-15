// load / save check box value from / to ini file and registry
(function()
{
	// variables common to all functions in this scope
	var doc = document,

		local_js = localJS,

		locajs_namespace = LOCALJS,
		localjs_file = locajs_namespace.FILE,
		localjs_ui = locajs_namespace.UI,
		localization_get = locajs_namespace.LOCALIZATION.get,
		
		// entries in INI file
		SECTION_APP_SETTING = "AppSetting",

		KEY_EXIT_CONFIRM = "ExitConfirm",
		KEY_ALLOW_F5_RELOAD = "F5Reload",
		KEY_TITLE_BAR_VISIBLE = "TitleBarVisible";

	// this is for auto start process.
	window.attachEvent("onload", function()
	{
		var chkAutoStart = doc.getElementById('chkAutoStart'),

			reg_path = "HKCU\\Software\\Microsoft\\Windows\\CurrentVersion\\Run\\LocalJSDemo",

			exe_path = '"' + localjs_file.getExeFilename() + '"',

			fnGetAutoStart = function()
			{
				try
				{
					return exe_path.toLowerCase() == localjs_file.regRead(reg_path).toLowerCase();
				}
				catch (e)
				{
					return false;
				}
			},

			fnAutoStartClick = function()
			{
				try
				{
					if (chkAutoStart.checked)
						localjs_file.regWrite(reg_path, exe_path, "REG_SZ");
					else
						localjs_file.regDelete(reg_path);
				}
				catch (e)
				{
					// do nothing, maybe blocked by anti-virus program
				}

				// double check: some Anti-virus program may block the registry operation
				if (chkAutoStart.checked = fnGetAutoStart())
					localjs_ui.msgBox(localization_get("auto_start_ok_wording"));
				else
					localjs_ui.msgBox(localization_get("auto_start_no_wording"));
			};

		chkAutoStart.checked = fnGetAutoStart();
		chkAutoStart.attachEvent("onclick", fnAutoStartClick);
	});

	// this is for the close button on the top right corner of the window
	// exit confirm logic is in exit_confirm.js, it hooks COM event DWebBrowserEvents2::WindowClosing and WM_CLOSE message of main window
	window.attachEvent("onload", function()
	{
		var doc = document,
			chkConfirmExit = doc.getElementById("chkConfirmExit");

		doc.getElementById("app_close").attachEvent("onclick", function()
		{
			window.close();
		});

		// initialize the check confirm status
		chkConfirmExit.checked = true;
		if (localjs_file.fileExists(INI_FILE)) // INI_FILE is defined in global_functions.js
		{
			chkConfirmExit.checked = !!localjs_file.iniReadInt(INI_FILE, SECTION_APP_SETTING, KEY_EXIT_CONFIRM, 1);
		}

		chkConfirmExit.attachEvent("onclick", function()
		{
			localjs_file.iniWrite(INI_FILE, SECTION_APP_SETTING, KEY_EXIT_CONFIRM, chkConfirmExit.checked ? 1 : 0);
		});
	});

	// this is for the enable F5 check box
	window.attachEvent("onload", function()
	{
		var chkEnableF5 = document.getElementById("chkEnableF5");

		// initialize the check confirm status
		if (localjs_file.fileExists(INI_FILE)) // INI_FILE is defined in global_functions.js
		{
			local_js.enableF5 = !!localjs_file.iniReadInt(INI_FILE, SECTION_APP_SETTING, KEY_ALLOW_F5_RELOAD, 1);
		}
		chkEnableF5.checked = local_js.enableF5;

		chkEnableF5.attachEvent("onclick", function()
		{
			var enabled = chkEnableF5.checked;
			local_js.enableF5 = enabled;
			localjs_file.iniWrite(INI_FILE, SECTION_APP_SETTING, KEY_ALLOW_F5_RELOAD, enabled ? 1 : 0);
		});
	});

	// this is for title bar show / hide
	window.attachEvent("onload", function()
	{
		var radioTitle_on = doc.getElementById('radioTitle_on'),
			radioTitle_off = doc.getElementById('radioTitle_off'),
			showTitleBar = LOCALJS.UI.showTitleBar,

			fnOnClick = function()
			{
				showTitleBar(!radioTitle_on.checked);
				localjs_file.iniWrite(INI_FILE, SECTION_APP_SETTING, KEY_TITLE_BAR_VISIBLE, radioTitle_on.checked ? 1 : 0);
			};

		radioTitle_on.checked = false;
		if (localjs_file.fileExists(INI_FILE)) // INI_FILE is defined in global_functions.js
			radioTitle_on.checked = !!localjs_file.iniReadInt(INI_FILE, SECTION_APP_SETTING, KEY_TITLE_BAR_VISIBLE, 0);
		radioTitle_off.checked = !radioTitle_on.checked;

		showTitleBar(!radioTitle_on.checked);

		radioTitle_on.attachEvent("onclick", fnOnClick);
		radioTitle_off.attachEvent("onclick", fnOnClick);
	});
})();
