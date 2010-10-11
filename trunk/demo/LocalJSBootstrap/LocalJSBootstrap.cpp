// LocalJSBootstrap.cpp : Defines the entry point for the application.
//

#include "stdafx.h"
#include "WebBrowserWindow.h"
#include "Resource.h"

using namespace GroundBase;
using namespace GroundBase::LocalBrowser;

int APIENTRY WinMain(HINSTANCE hInstance, HINSTANCE /*hPrevInstance*/, LPSTR /*lpCmdLine*/, int /*nCmdShow*/)
{
	// Usage: LocalJSBootstrap.exe start_html_file_name
	// Check command line parameter first
	WCHAR start_html_file_name[MAX_PATH];
	start_html_file_name[0] = L'\0';

	static LPCWSTR MESSAGE_CAPTION = L"LocalJS Bootstrap";

	int num_args = 0;
	LPWSTR * args = CommandLineToArgvW(GetCommandLineW(), &num_args);
	if (args)
	{
		if (num_args > 1 && wcslen(args[1]) < DIM(start_html_file_name))
		{
			WCHAR path[MAX_PATH];
			GetModuleFileNameW(NULL, path, DIM(path));
			PathRemoveFileSpecW(path);
			PathCombineW(start_html_file_name, path, args[1]);
			
			if (!PathFileExistsW(start_html_file_name))
				start_html_file_name[0] = L'\0';
		}

		LocalFree(args);
	}

	// if the file given by command line is not found, 
	// try a file having same name as the exe file with html filename extension, 
	// and locates at same folder
	if (!start_html_file_name[0])
	{	
		GetModuleFileNameW(NULL, start_html_file_name, DIM(start_html_file_name));
		PathRemoveExtensionW(start_html_file_name);
		wcscat(start_html_file_name, L".html");
	}

	if (PathFileExistsW(start_html_file_name))
	{
		// An optional icon
		HICON hIcon = (HICON) LoadImage(hInstance, MAKEINTRESOURCE(IDI_ICON1), IMAGE_ICON, 32, 32, LR_DEFAULTCOLOR);
		CWebBrowserWindow::initializeLocalJS(hInstance, hIcon, hIcon);
	
		// window position / style can be changed in javascript when HTML is loaded. so here we can give any valid value.
		{
			// make sure dlgInit destructed before LocalJS::UninitializeLocalJS
			CWebBrowserWindow dlgInit;
			dlgInit.dialogBox(WS_POPUP | WS_VISIBLE, -100, -100, 0, 0, NULL, start_html_file_name, NULL, NULL, NULL);
		}
		
		CWebBrowserWindow::uninitializeLocalJS();
		DestroyIcon(hIcon);
	}
	else
	{
		WCHAR buf[MAX_PATH + 64];
		swprintf(buf, L"LocalJS bootstrap file %s doesn't exist.", start_html_file_name);
		MessageBoxW(NULL, buf, MESSAGE_CAPTION, MB_OK | MB_TOPMOST | MB_ICONERROR);
	}

	
	return 0;
}

