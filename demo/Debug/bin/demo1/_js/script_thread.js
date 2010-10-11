// the script is executed in a separated native thread.
(function()
{
	var local_js = localJS,
		createObject = local_js.COM.createObject,
		dllCall = createObject('DllCall');

	//dllCall.checkAdd = true;
	dllCall.add("Kernel32.dll", "DWORD WINAPI GetCurrentThreadId(void);");
	dllCall.add("user32.dll", "int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);");

	var msgBox = function (msg, error)
	{
		var MB_INFO = 0x00052040, // MB_ICONINFORMATION | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL
			MB_ERR = 0x00052010; //MB_ICONERROR | MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL

		dllCall.MessageBox(0, msg, '新線程', error ? MB_ERR : MB_INFO);
	};

	var getCurrentThreadId = dllCall.GetCurrentThreadId;

	// catch error in thread and popup message box
	try
	{
		var function_passed_to_main_thread = function()
		{
			msgBox('在新線程中的函數function_passed_to_main_thread中，當前線程ID: ' + getCurrentThreadId());
		};

		msgBox('在新線程中，新線程的線程ID: ' + getCurrentThreadId() + "\n下面調用從主線程傳來的函數");
		threadArg[0](function_passed_to_main_thread);
		// do not call Windows API Sleep or SleepEx to sleep, since these functions will stop thread messaging as well
		// use localJS sleep function instead
		msgBox('在新線程中，新線程的線程ID: ' + getCurrentThreadId() + "\n下面新線程將睡眠10秒鐘");
		local_js.threading.sleep(10000);
		msgBox('在新線程中，從主線程傳來的字符串是：\n' + threadArg[1]);
	}
	catch (e)
	{
		msgBox(e.name + "\n" + e.description, '新线程', true);
	}
})();

