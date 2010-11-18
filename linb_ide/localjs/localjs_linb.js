/*
	This code is part of LocalJS Open source.

	http://localjs.org/

	It's free to use this code anywhere, provided that this declaration is included
*/

// This script initializes namespace LOCALJS.LINB
(function ()
{
    if ("undefined" == typeof (LOCALJS))
        LOCALJS = {};

    var localjs_namespace = LOCALJS;

	localjs_namespace.LINB = localjs_namespace.LINB || {};

	var localjs_linb = localjs_namespace.LINB,
		localjs_file = LOCALJS.FILE;

	localjs_linb.callTemplateFile = function(template_filename, template_paras)
	{
		var template_content = localjs_file.readUrl(localjs_file.normalizeUrl('template/' + template_filename));

		if (false === template_content)
			return template_content;

		if (template_paras.clsName)
			template_content = template_content.replace(/\{clsName\}/g, template_paras.clsName);
		if (template_paras.theme)
			template_content = template_content.replace(/\{theme\}/g, template_paras.theme);
		if (template_paras.lang)
			template_content = template_content.replace(/\{lang\}/g, template_paras.lang);
		if (template_paras.content)
			template_content = template_content.replace(/\{content\}/g, template_paras.content);

		return template_content;
	};

	localjs_linb.saveTemplateFile = function(template_filename, template_paras, result_file_fullname)
	{
		try
		{
			var template_content = localjs_linb.callTemplateFile(template_filename, template_paras);
			if (false === template_content)
				return template_content;
			localjs_file.writeFileUTF8(result_file_fullname, template_content);
		}
		catch (e)
		{
			return false;
		}

		return true;
	};

	localjs_linb.isLocal = function()
	{
		return localjs_file.isFileUrl(localjs_file.normalizeUrl());
	};
})();
