/*
	This code is part of LocalJS Open source.

	http://localjs.org/

	It's free to use this code anywhere, provided that this declaration is included
*/

// This script initializes namespace LOCALJS.LOCALIZATION
(function ()
{
    if ("undefined" == typeof (LOCALJS))
        LOCALJS = {};

    var localjs_namespace = LOCALJS;

	if ("undefined" != typeof (localjs_namespace.LOCALIZATION))
		return;

	localjs_namespace.LOCALIZATION = {};

	var localjs_localization = localjs_namespace.LOCALIZATION,
		globalDict = localJS.globalDict,
		dict_key = 'LOCALJS.LOCALIZATION.CURRENT_LANG',
		key_lang = 'lang',
		key_url = 'url',
		key_words = 'words',
		key_funcs_name = 'func_names', // save name of functions member in localization file

		fnCreateDict = function()
		{
			return localJS.COM.createObject("Scripting.Dictionary");
		},

		get_dict_item = function()
		{
			if (!globalDict.Exists(dict_key))
				globalDict.Item(dict_key) = fnCreateDict();
			return globalDict.Item(dict_key);
		},

		readin = function()
		{
			var dict_item = get_dict_item();

			if (dict_item.Exists(key_url) && dict_item.Exists(key_lang))
			{
				var localjs_file = LOCALJS.FILE,
					url_lang_words = localjs_file.buildUrl(dict_item.Item(key_url), dict_item.Item(key_lang) + ".json"),
					lang_words = localjs_file.readUrl(url_lang_words);

				if (lang_words)
				{
					try
					{
						var json_lang_words = (new Function("return " + lang_words))(),
							newDict = fnCreateDict(),
							newFuncNames;

						for (var prop in json_lang_words)
						{
							var item = json_lang_words[prop];

							if ("function" == typeof(item))
							{
								item = item.toString();

								if (!newFuncNames)
									newFuncNames = fnCreateDict();
								newFuncNames.Item(prop) = 1;
							}

							newDict.Item(prop) = item;
						}

						dict_item.Item(key_words) = newDict;
						if (newFuncNames)
							dict_item.Item(key_funcs_name) = newFuncNames;
						else if (dict_item.Exists(key_funcs_name))
							dict_item.Remove(key_funcs_name);
						return;
					}
					catch (e)
					{
						// do nothing
					}
				}
			}

			if (dict_item.Exists(key_words))
				dict_item.Remove(key_words);
			if (dict_item.Exists(key_funcs_name))
				dict_item.Remove(key_funcs_name);
		};

	localjs_localization.setPath = function(path, reload)
	{
		var dict_item = get_dict_item(),
			url = LOCALJS.FILE.normalizeUrl(path);

		if (!url.match(/\/$/))
			url = url + "/";

		if (!dict_item.Exists(key_url) || url != dict_item.Item(key_url) || reload)
		{
			dict_item.Item(key_url) = url;
			readin();
		}
	};

	localjs_localization.setLang = function(lang, reload)
	{
		var dict_item = get_dict_item();

		if (!dict_item.Exists(key_lang) || lang != dict_item.Item(key_lang) || reload)
		{
			dict_item.Item(key_lang) = lang;
			readin();
		}
	};

	localjs_localization.getLang = function()
	{
		var dict_item = get_dict_item();
		return dict_item.Exists(key_lang) ? dict_item.Item(key_lang) : undefined;
	};

	localjs_localization.get = function(key)
	{
		var dict_item = get_dict_item(),
			words = dict_item.Exists(key_words) ? dict_item.Item(key_words) : undefined;

        if (words && words.Exists(key))
        {
            var word = words.Item(key);
		    if (dict_item.Exists(key_funcs_name))
		    {
			    var func_names = dict_item.Item(key_funcs_name);
			    if (func_names.Exists(key))
			    {
				    return (new Function("return " + word))();
			    }
		    }

		    return word;
		}
		else
        {
            return key;
        }
	};

	localjs_localization.getAcceptLanguages = function()
	{
		var dllCall = localJS.COM.createObject('DllCall'),
			newBuffer = dllCall.newBuffer,
			languages = newBuffer(512),
			languages_length = newBuffer(4, languages.size);

		dllCall.add("shlwapi.dll", "HRESULT GetAcceptLanguages(LPTSTR psz, LPDWORD pcch);", "f");
		if (dllCall.f(languages, languages_length) >= 0)
			return languages.asStringW;
		return false;
	};
})();
