// LocalJSDemoDll.cpp : Defines the entry point for the DLL application.
//

#include "stdafx.h"
#include "LocalJS.h"

BOOL APIENTRY DllMain( HANDLE hModule, 
                       DWORD  ul_reason_for_call, 
                       LPVOID lpReserved
					 )
{
    return TRUE;
}

DWORD WINAPI CallJSThreadProc(LPVOID lpParameter)
{
	CoInitialize(NULL);

	void * browser = lpParameter;
	assert(browser);

	const static LPCWSTR DIALOG_TITLE = L"Thread in DLL";

	// prepare parameters to be sent to JS function
	long lval = 10;
	
	WCHAR wstr[256];
	wcscpy(wstr, L"String passed from DLL");

	IDispatch * pdisp = NULL;

	// call JS function
	VARIANT vres;
	VariantInit(&vres);
	LocalJSHostAPI::callJSFunction(browser, true, &vres, "void funcCalledByDll(long * plval, LPWSTR str, IDispatch ** obj)", &lval, wstr, &pdisp);
	
	// display parameters changed by JavaScript function
	WCHAR info[2048];
	swprintf(info, L"Code in DLL:\nThe JS function returns %d\nThe value received from JS function is %d\nThe string received from JS function is:\n\t%s", vres.lVal, lval, wstr);
	MessageBoxW(NULL, info, DIALOG_TITLE, MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL | MB_ICONINFORMATION);

	VariantClear(&vres);

	// call JavaScript function passed by JavaScript function
	if (pdisp)
	{
		MessageBoxW(NULL, L"Code in DLL:\nNow call the JS function returned by previous JS function call:", DIALOG_TITLE, MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL | MB_ICONINFORMATION);

		VARIANT vResult;
		VariantInit(&vResult);

		DISPPARAMS disp_params = {NULL, NULL, 0, 0};
		pdisp->Invoke(DISPID_VALUE, IID_NULL, LOCALE_USER_DEFAULT, DISPATCH_METHOD, &disp_params, &vResult, NULL, NULL);
		
		VariantClear(&vResult);
	}

	CoUninitialize();
	return 0;
}


extern "C" void __stdcall callJSFunctionInNewThread(void * browser)
{
	assert(browser);

	HANDLE hThread = CreateThread(NULL, 0, CallJSThreadProc, browser, 0, NULL);
	assert(NULL != hThread);
	CloseHandle(hThread);

	return;
}
