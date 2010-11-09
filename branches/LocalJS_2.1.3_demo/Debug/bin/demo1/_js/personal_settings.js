// load / save edit and selection data from / to ini file
(function()
{
	var win = window,
		doc = document,
		localjs_file = LOCALJS.FILE,

		// entries in INI file
		SECTION_PERSONAL_SETTING = "PersonalSetting",

		KEY_NAME = "Name",
		KEY_STAR = "Constellation",
		KEY_RESUME = "Resume",
		KEY_CARS = "Cars";

	// for edit handling
	var fnHandlerEdit = function(elID, ini_key)
	{
		win.attachEvent("onload", function()
		{
			var el = doc.getElementById(elID),

				fnSave = function()
				{
					// Use encodeURIComponent to escape substring like '[section]'
					localjs_file.iniWrite(INI_FILE, SECTION_PERSONAL_SETTING, ini_key, encodeURIComponent(el.value));
				};

			el.value = "";
			if (localjs_file.fileExists(INI_FILE)) // INI_FILE is defined in global_functions.js
			{
				el.value = decodeURIComponent(localjs_file.iniReadStr(INI_FILE, SECTION_PERSONAL_SETTING, ini_key, ""));
			}

			el.attachEvent("onfocus", function()
			{
				el.select();
			});

			el.attachEvent("onfocusout", fnSave);
			win.attachEvent("onunload", fnSave); // when the text has focus and user press F5 to reload page, event onfocusout will not be fired.
		});
	};

	fnHandlerEdit("username", KEY_NAME);
	fnHandlerEdit("resume", KEY_RESUME);

	// for select handling
	var fnHandleSelect = function(elID, ini_key)
	{
		win.attachEvent("onload", function()
		{
			var el = doc.getElementById(elID);

			el.selectedIndex = -1;
			if (localjs_file.fileExists(INI_FILE)) // INI_FILE is defined in global_functions.js
			{
				// str is not a String object although in most cases it can be directly used as string.
				// but in the context when a String object is needed, use asStringW method to return the string represented by the WCHAR buffer.
				var values = localjs_file.iniReadStr(INI_FILE, SECTION_PERSONAL_SETTING, ini_key, "").split(/\t/),
					hash = {};

				for (var i = 0; i < values.length; ++i)
				{
					hash[values[i]] = 1;
				}

				var options = el.options;
				for (var i = 0; i < options.length; ++i)
				{
					var option = options[i];
					option.selected = !!hash[option.value];
				}
			}

			el.attachEvent("onchange", function()
			{
				var values = [],
					options = el.options;

				for (var i = 0; i < options.length; ++i)
				{
					var option = options[i];
					if (option.selected)
						values.push(option.value);
				}

				localjs_file.iniWrite(INI_FILE, SECTION_PERSONAL_SETTING, ini_key, values.join("\t"));
			});
		});
	};

	fnHandleSelect("selStar", KEY_STAR);
	fnHandleSelect("selCar", KEY_CARS);
})();
