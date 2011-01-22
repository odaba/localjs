// the script is executed in a separated native thread.
(function()
{
	var local_js = localJS,
		func_passed_to_thread = threadArg[0],
		string_from_main_thread = threadArg[1],
		localization_get = threadArg[2],
		createObject = local_js.COM.createObject,
		dllCall = createObject('DllCall');

	//dllCall.checkAdd = true;
	dllCall.add("Kernel32.dll", "DWORD WINAPI GetCurrentThreadId(void);");
	dllCall.add("user32.dll", "int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);");

	var msgBox = function (msg, error)
	{
		var MB_INFO = 0x00052040, // MB_ICONINFORMATION | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL
			MB_ERR = 0x00052010; //MB_ICONERROR | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL

		dllCall.MessageBox(0, msg, localization_get('New Thread'), error ? MB_ERR : MB_INFO);
	};

	var getCurrentThreadId = dllCall.GetCurrentThreadId;

	// catch error in thread and popup message box
	try
	{
		var function_passed_to_main_thread = function()
		{
			msgBox(localization_get('script_thread_wording_1') + getCurrentThreadId());
		};

		msgBox(localization_get('script_thread_wording_2') + getCurrentThreadId() + "\n" + localization_get('script_thread_wording_3'));
		func_passed_to_thread(function_passed_to_main_thread);
		// do not call Windows API Sleep or SleepEx to sleep, since these functions will stop thread messaging as well
		// use localJS sleep function instead
		msgBox(localization_get('script_thread_wording_2') + getCurrentThreadId() + "\n" + localization_get('script_thread_wording_4'));
		local_js.threading.sleep(10000);
		msgBox(localization_get('script_thread_wording_5') + '\n' + string_from_main_thread);
	}
	catch (e)
	{
		msgBox(e.name + "\n" + e.description, true);
	}
})();

