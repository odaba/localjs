// global variables and folder initialize
(function()
{
	var localjs_file = LOCALJS.FILE,
		mineDataFolder = localjs_file.getAppDataFolder("LocalJSDemo");

	localjs_file.createFolder(mineDataFolder);

	// INI_FILE is global variable since it's defined without var
	INI_FILE = localjs_file.buildPath(mineDataFolder, "localJSDemoSetting.ini");
})();
