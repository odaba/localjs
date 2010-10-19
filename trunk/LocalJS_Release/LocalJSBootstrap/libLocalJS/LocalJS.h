#pragma once

namespace LocalJSHostAPI
{

// all exported functions declared here
#ifdef __cplusplus
extern "C"
{
#endif

BOOL __stdcall initializeLocalJS(HINSTANCE hInst, HICON hIcon, HICON hIconSm);
BOOL __stdcall uninitializeLocalJS(void);
void __stdcall setBrowserControlRegPath(LPCSTR reg_path);
void __stdcall setLicense(LPCSTR license);

void * __stdcall createBrowserWindow(DWORD dwStyle, int x, int y, int nWidth, int nHeight,
								     HWND hWndParent, LPCWSTR url, VARIANT * const pVarResult);
void * __stdcall createIE(LPCWSTR url);
void __stdcall deleteBrowserWindow(void * browser_window);
void __stdcall detachBrowserWindow(void * browser_window);
BOOL __stdcall translateBrowserAccelerator(LPMSG lpmsg);

BOOL __stdcall browserWindowClosed(void * browser_window);
HWND __stdcall getBrowserHostWnd(void * browser_window);
HWND __stdcall getIETabWnd(void * ie);
int __stdcall getBrowserType(void * browser_window);
IDispatch * __stdcall getBrowserObj(void * browser_window);

void __cdecl callJSFunction(void * browser_window, const bool popup_error, VARIANT * pvarResult, LPCSTR prototype, ...);
void __cdecl callJSFunction_va_list(void * browser_window, const bool popup_error, VARIANT * pvarResult, LPCSTR prototype, va_list vargs);

#ifdef __cplusplus
}
#endif

}
