/*
	This code is part of LocalJS Open source.

	http://localjs.org/

	It's free to use this code anywhere, provided that this declaration is included
*/

// This script initializes namespace LOCALJS.FILE
(function ()
{
    if ("undefined" == typeof (LOCALJS))
        LOCALJS = {};

    var localjs_namespace = LOCALJS;

	if ("undefined" != typeof (localjs_namespace.FILE))
		return;

	localjs_namespace.FILE = {};

    // common variables of this closure
    var false_value = false, // this variable is used to make false be compressed by compressor.
		win = window,
		localjs_file = localjs_namespace.FILE,

		local_js = localJS,
		hostWnd = local_js.hostWnd,

		com = local_js.COM,
		createObject = com.createObject,

		shellApp,
		fnGetShellApp = function()
		{
			if (!shellApp)
				shellApp = createObject("Shell.Application");
			return shellApp;
		},

		wShell,
		fnGetShell = function()
		{
			if (!wShell)
				wShell = createObject("WScript.Shell");
			return wShell;
		},

		fso,
		fnGetFso = function()
		{
			if (!fso)
				fso = createObject("Scripting.FileSystemObject");
			return fso;
		},

		fnToBoolean = function(val)
		{
			return val ? true : false_value;
		},

		dllCall = createObject('DllCall'),

		addFunc = dllCall.add,
		newStruct = dllCall.newStruct,
		newBuffer = dllCall.newBuffer;

	//dllCall.checkAdd = GLOBAL_CHECK_ADD;
	addFunc("shell32.dll", "HINSTANCE ShellExecute(HWND hwnd,LPCTSTR lpOperation,LPCTSTR lpFile,LPCTSTR lpParameters,LPCTSTR lpDirectory,INT nShowCmd);");
	addFunc("Kernel32.dll", "UINT WINAPI GetPrivateProfileInt(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in INT nDefault,__in LPCTSTR lpFileName);");
	addFunc("Kernel32.dll", "DWORD WINAPI GetPrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpDefault,__out LPTSTR lpReturnedString,__in DWORD nSize,__in LPCTSTR lpFileName);");
	addFunc("Kernel32.dll", "BOOL WINAPI WritePrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpString,__in LPCTSTR lpFileName);");
	addFunc("kernel32.dll", "DWORD WINAPI GetModuleFileName(__in_opt HMODULE hModule,__out LPTSTR lpFilename,__in DWORD nSize);");
	addFunc("comdlg32.dll", "BOOL WINAPI GetOpenFileName(__inout LPOPENFILENAME lpofn);");
	addFunc("shlwapi.dll", "HRESULT UrlCombine(LPCTSTR pszBase,LPCTSTR pszRelative,LPTSTR pszCombined,LPDWORD pcchCombined,DWORD dwFlags);");
	addFunc("urlmon.dll", "STDAPI CoInternetParseUrl(LPCWSTR pwzUrl,PARSEACTION ParseAction,DWORD dwFlags,LPWSTR pszResult,DWORD cchResult,DWORD *pcchResult,DWORD dwReserved);", "parseUrl");
	addFunc("shlwapi.dll", "BOOL UrlIs(LPCTSTR pszUrl,URLIS UrlIs);");
	addFunc("shlwapi.dll", "BOOL PathIsURL(LPCTSTR pszPath);");
	addFunc("shlwapi.dll", "HRESULT UrlCreateFromPath(LPCTSTR pszPath,LPTSTR pszUrl,LPDWORD pcchUrl,DWORD dwReserved);");

	var shellExecute = dllCall.ShellExecute,
		getPrivateProfileInt = dllCall.GetPrivateProfileInt,
		getPrivateProfileString = dllCall.GetPrivateProfileString,
		writePrivateProfileString = dllCall.WritePrivateProfileString,
		getModuleFileName = dllCall.GetModuleFileName,
		getOpenFileName = dllCall.GetOpenFileName,
		urlCombine = dllCall.UrlCombine,
		parseUrl = dllCall.parseUrl,
		urlIs = dllCall.UrlIs,
		pathIsURL = dllCall.PathIsURL,
		urlCreateFromPath = dllCall.UrlCreateFromPath,

		PARSE_PATH_FROM_URL = 9,
		INTERNET_MAX_URL_LENGTH = 4200,

		URLIS_FILEURL = 3,
		URLIS_DIRECTORY = 5,

		URL_ESCAPE_PERCENT = 0x00001000,
		URL_ESCAPE_UNSAFE = 0x20000000;

	(function()
	{
		// settings to INI file
		localjs_file.iniWrite = function(filename, section, key, value)
		{
			try
			{
				value = value.toString();
			}
			catch (e)
			{
				value = 0;
			};

			writePrivateProfileString(section, key, value, filename);
		};

		localjs_file.iniReadInt = function(filename, section, key, default_value)
		{
			if (!default_value)
				default_value = 0;

			return getPrivateProfileInt(section, key, default_value, filename);
		}

		localjs_file.iniReadStr = function(filename, section, key, default_value)
		{
			try
			{
				default_value = default_value.toString();
			}
			catch (e)
			{
				default_value = "";
			}

			var str = newBuffer(4096);
			if (getPrivateProfileString(section, key, default_value, str, str.size >> 1, filename))
				return str.asStringW;
			return default_value;
		}

		// settings in registry
		localjs_file.regWrite = function(reg_path, val, strType)
		{
			fnGetShell().RegWrite(reg_path, val, strType);
		}

		localjs_file.regRead = function(reg_path)
		{
			return fnGetShell().RegRead(reg_path);
		}

		localjs_file.regDelete = function(reg_path)
		{
			fnGetShell().RegDelete(reg_path);
		}

		// file exist
		localjs_file.fileExists = function(filename)
		{
			return fnToBoolean(fnGetFso().FileExists(filename));
		}

		// folder exists
		localjs_file.folderExists = function(foldername)
		{
			return fnToBoolean(fnGetFso().FolderExists(foldername));
		}

		// get user data folder
		localjs_file.getAppDataFolder = function(sub_folder)
		{
			var appDataFolder = fnGetShellApp().Namespace(0x1a).Self.Path; //0x1a for APPLICATION_DATA
			return sub_folder ? fnGetFso().BuildPath(appDataFolder, sub_folder) : appDataFolder;
		}

		localjs_file.getProgramFolder = function(sub_folder)
		{
			var programFilesFolder = fnGetShellApp().Namespace(0x26).Self.Path; //ssfPROGRAMFILES is 0x26
			return sub_folder ? fnGetFso().BuildPath(programFilesFolder, sub_folder) : programFilesFolder;
		}

		// get exe filename
		localjs_file.getExeFilename = function()
		{
			var filename = newBuffer(1024);
			getModuleFileName(0, filename, filename.size >> 1);
			return filename.asStringW;
		}

		// get exe folder
		localjs_file.getExeFolder = function()
		{
			return fnGetFso().GetParentFolderName(localjs_file.getExeFilename());
		}

		// build path
		localjs_file.buildPath = function(parent, child)
		{
			return fnGetFso().BuildPath(parent, child);
		}

		// get parent folder
		localjs_file.getParentFolder = function(folder)
		{
			return fnGetFso().GetParentFolderName(folder);
		}

		// read utf8 file
		localjs_file.readFileUTF8 = function(filename)
		{
			try
			{
				var objStream = createObject("ADODB.Stream");

				objStream.Open();
				objStream.Charset = "utf-8";
				objStream.LoadFromFile(filename);
				var result = objStream.ReadText();
				objStream.Close();
				return result;
			}
			catch (e)
			{
				return false_value;
			}
		}

		// write utf8 data to file
		localjs_file.writeFileUTF8 = function(filename, text)
		{
			 var objStream = createObject("ADODB.Stream");
				 adSaveCreateOverWrite = 2; // constants value found in documentation of SaveOptionsEnum in MSDN

			objStream.Open();
			objStream.Charset = "utf-8";
			objStream.WriteText(text);
			objStream.SaveToFile(filename, adSaveCreateOverWrite);
			objStream.Close();
		}

		// delete file
		localjs_file.deleteFile = function(filespec, force)
		{
			fnGetFso().DeleteFile(filespec, force);
		}

		// create folder
		localjs_file.createFolder = function(folder)
		{
			if (!fnGetFso().FolderExists(folder))
				fnGetFso().CreateFolder(folder);
		}

		// delete folder
		localjs_file.deleteFolder = function(folderspec, force)
		{
			fnGetFso().DeleteFolder(folderspec, force);
		}

		// list files in folder
		localjs_file.listFolder = function(folder)
		{
			var result = [];

			if (fnGetFso().FolderExists(folder))
			{
				var f = fso.GetFolder(folder),
					fc = createObject("Enumerator", f.Files);

				for (; !fc.atEnd(); fc.moveNext())
				{
					result.push(fc.item());
				}
			}

			return result;
		}

		// browser for file
		localjs_file.browseFile = function(initialDir, strFilter, title, defExt, initialFile, readOnly)
		{
			// this is to demostrate GetOpenFileName. the steps to initialize a OPENFILENAME look complex for the first glance, but:
			// 1. In C++, similar steps have to be taken to initialize the structure.
			// 2. the steps can be wrapped up and hiden in a separated javascript file; other programmers just call it.
			//
			// here is how OPENFILENAME is defined in Commdlg.h
			//
			//  typedef struct tagOFN {
			//    DWORD         lStructSize;
			//    HWND          hwndOwner;
			//    HINSTANCE     hInstance;
			//    LPCTSTR       lpstrFilter;
			//    LPTSTR        lpstrCustomFilter;
			//    DWORD         nMaxCustFilter;
			//    DWORD         nFilterIndex;
			//    LPTSTR        lpstrFile;
			//    DWORD         nMaxFile;
			//    LPTSTR        lpstrFileTitle;
			//    DWORD         nMaxFileTitle;
			//    LPCTSTR       lpstrInitialDir;
			//    LPCTSTR       lpstrTitle;
			//    DWORD         Flags;
			//    WORD          nFileOffset;
			//    WORD          nFileExtension;
			//    LPCTSTR       lpstrDefExt;
			//    LPARAM        lCustData;
			//    LPOFNHOOKPROC lpfnHook;
			//    LPCTSTR       lpTemplateName;
			//  #if (_WIN32_WINNT >= 0x0500)
			//    void *        pvReserved;
			//    DWORD         dwReserved;
			//    DWORD         FlagsEx;
			//  #endif // (_WIN32_WINNT >= 0x0500)
			//  } OPENFILENAME, *LPOPENFILENAME;

			var fnCreateOpenFileName = function() // creation of complex structures can be wrapped up in functions to hide detail
			{
				var OFN_DONTADDTORECENT = 0x02000000,
					OFN_FILEMUSTEXIST = 0x00001000,
					OFN_PATHMUSTEXIST = 0x00000800,
					OFN_READONLY = 0x00000001,

				openfilename
					= newStruct().addLong('lStructSize')
							.addLong(hostWnd) // this field is hwndOwner: the field name can be ignored if you don't need to refer to this field later by name
							.addLong('hInstance')
							// address property returns a pointer object points to the buffer or structure object, pointer object takes 4 bytes
							// note we support string with embedded nulls characters for lpstrFilter: the final ending null character will be added automatically
							.add(newBuffer(512).address, 'lpstrFilter')
							.addLong('lpstrCustomFilter')
							.addLong('nMaxCustFilter')
							.addLong(1, 'nFilterIndex')
							.add(newBuffer(512).address, 'lpstrFile')
							.addLong('nMaxFile')
							.addLong('lpstrFileTitle')
							.addLong('nMaxFileTitle')
							.add(newBuffer(512).address, 'lpstrInitialDir')
							.add(newBuffer(512).address, 'lpstrTitle')
							.addLong(OFN_DONTADDTORECENT | OFN_FILEMUSTEXIST | OFN_PATHMUSTEXIST | (readOnly ? OFN_READONLY : 0), 'Flags')
							.addShort('nFileOffset')
							.addShort('nFileExtension')
							.add(newBuffer(128).address, 'lpstrDefExt')
							// multiple fields can be added as one continuous buffer: here we merged fields lCustData, lpfnHook, lpTemplateName, pvReserved, dwReserved, and FlagsEx. But then these fields cannot be accessed as individual fields directly.
							.add(newBuffer(24));

				// fill in size as requested by MSDN document for OPENFILENAME
				openfilename.lStructSize = openfilename.size;
				return openfilename;
			},
			openfilename = fnCreateOpenFileName();

			if (strFilter)
				openfilename.lpstrFilter = strFilter;
			if (initialDir)
				openfilename.lpstrInitialDir = initialDir;
			if (title)
				openfilename.lpstrTitle = title;
			else
				openfilename.lpstrTitle = document.title;
			if (defExt)
				openfilename.lpstrDefExt = defExt;
			if (initialFile)
				openfilename.lpstrFile = initialFile;
			openfilename.nMaxFile = openfilename.lpstrFile.size >> 1; // size in WCHAR

			if (getOpenFileName(openfilename))
				return openfilename.lpstrFile.asStringW;
			return false_value;
		}

		// browse for folder
		localjs_file.browseFolder = function(title, rootFolder)
		{
			try
			{
				var path = fnGetShellApp().BrowseForFolder(hostWnd, title ? title : document.title, 0, rootFolder).Self.Path;
				return fnGetFso().FolderExists(path) ? path : "";
			}
			catch (e)
			{
				return false_value;
			}
		}

		// exec file or url
		localjs_file.exec = function(file)
		{
			shellExecute(0, 0, file, 0, 0, 1);
		}

		// get url from a local path
		localjs_file.pathToUrl = function(path)
		{
			var url = newBuffer(INTERNET_MAX_URL_LENGTH),
				pcchUrl = newBuffer(4, url.size >> 1);

			if (urlCreateFromPath(path, url, pcchUrl, 0) >= 0)
				return url.asStringW;

			return false_value;
		}

		// get filename from url to a local file
		localjs_file.urlToPath = function(url)
		{
			var path = newBuffer(512),
				cchResult = newBuffer(4);

			if (parseUrl(url, PARSE_PATH_FROM_URL, 0, path, path.size >> 1, cchResult, 0) >= 0)
				return path.asStringW;

			return false_value;
		}

		// test if the string is a url
		localjs_file.isUrl = function(url)
		{
			return fnToBoolean(pathIsURL(url));
		}

		// test if url is a file url
		localjs_file.isFileUrl = function(url)
		{
			return fnToBoolean(urlIs(url, URLIS_FILEURL));
		}

		localjs_file.readUrl = function(url, callback)
		{
			if (urlIs(url, URLIS_FILEURL))
			{
				var path = localjs_file.urlToPath(url),
					file_content = false_value;

				if (false_value !== path && localjs_file.fileExists(path))
					file_content = localjs_file.readFileUTF8(path);

				if (!callback)
					return file_content;

				if (false_value === file_content)
				{
					if (callback.fail)
						callback.fail(file_content);
				}
				else if (callback.ok)
					callback.ok(file_content);
			}
			else
			{
				var localjs_ws = LOCALJS.WEB_SERVICE;
				if (callback)
				{
					localjs_ws.callUrl("GET", url, callback);
				}
				else
				{
					var status, content = false_value,

						onOK = function(responseText)
						{
							status = 1;
							content = responseText;
						},

						onFail = function()
						{
							status = -1;
						};

					for (var i = 0; i < 5; ++i)
					{
						status = 0;
						localjs_ws.callUrl("GET", url, {'ok' : onOK, 'fail' : onFail});
						while (0 == status)
						{
							if (!LOCALJS.UI.doEvents())
								return false_value;
						}

						if (1 == status)
							break;
					}

					return content;
				}
			}
		}

		localjs_file.buildUrl = function(baseUrl, relativeUrl)
		{
			var combined_url = newBuffer(INTERNET_MAX_URL_LENGTH),
				characters_combined = newBuffer(4, combined_url.size >> 1);

			if (urlCombine(baseUrl, relativeUrl, combined_url, characters_combined, URL_ESCAPE_PERCENT | URL_ESCAPE_UNSAFE) >= 0)
				return combined_url.asStringW;

			return false_value;
		}

		// normalize url to current document, optionally append a relative url
		localjs_file.normalizeUrl = function(relativeUrl)
		{
			var url = document.URL.replace(/[#\?].*$/, '');
			if (!relativeUrl)
				return url;

			return localjs_file.buildUrl(url, relativeUrl);
		}
	})();
})();
