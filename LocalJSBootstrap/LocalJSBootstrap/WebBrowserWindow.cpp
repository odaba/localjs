#include "stdafx.h"
#include "WebBrowserWindow.h"
#include "LocalJS.h"

using namespace LocalJSHostAPI;

namespace GroundBase
{
namespace LocalBrowser
{

HWND CWebBrowserWindow::m_g_hWndIEModelDialog = NULL;

CWebBrowserWindow::CWebBrowserWindow(void) : m_localjs_window(NULL)
{
	return;
}

CWebBrowserWindow::~CWebBrowserWindow(void)
{
	if (m_localjs_window)
	{
		deleteBrowserWindow(m_localjs_window);
		m_localjs_window = NULL;
	}

	return;
}

bool CWebBrowserWindow::createWindow(DWORD dwStyle, int x, int y, int nWidth, int nHeight, 
									 HWND hWndParent, LPCWSTR url, LPCWSTR url_pattern)
{
	m_localjs_window = createBrowserWindow(dwStyle, x, y, nWidth, nHeight, hWndParent, url, url_pattern, NULL);
	return NULL != m_localjs_window;
}

bool CWebBrowserWindow::dialogBox(DWORD dwStyle, int x, int y, int nWidth, int nHeight, 
								  HWND hWndParent, LPCWSTR url, LPCWSTR url_pattern, 
								  HWND hWndDisable, VARIANT * const pVarResult)
{
	// Disable some windows to make the browser UI behaves like a modal dialog. :-)
	// the window be enabled/diabled will receive WM_ENABLE message.
	if (hWndParent)
		EnableWindow(hWndParent, FALSE);
	if (hWndDisable)
		EnableWindow(hWndDisable, FALSE);

	m_localjs_window = createBrowserWindow(dwStyle, x, y, nWidth, nHeight, hWndParent, url, url_pattern, pVarResult);
	bool bRes = (NULL != m_localjs_window);
	HWND hWndHost = NULL;
	if (bRes)
	{
		HWND hWndHost = getBrowserHostWnd(m_localjs_window);

		if (hWndHost)
		{
			SetForegroundWindow(hWndHost);

			// m_g_hWndIEModelDialog: it helps the browser UI behaves like a modal dialog: if a disabled window 
			// receives UI messages like mouse click, then it can simply bring up m_g_hWndIEModelDialog to 
			// foreground if NULL != m_g_hWndIEModelDialog (which is modal dialog behavior).
			m_g_hWndIEModelDialog = hWndHost;
		
			MSG msg;
			while (running())
			{
				// GetMessage:
				// If the function retrieves a message other than WM_QUIT, the return value is nonzero.
				// If the function retrieves the WM_QUIT message, the return value is zero. 
				// If there is an error, the return value is -1. 

				BOOL bRet = GetMessage(&msg, NULL, 0, 0);
				if (0 == bRet) // WM_QUIT
				{
					DestroyWindow(hWndHost);
					PostQuitMessage(msg.wParam);
					break;
				}

				if (bRet > 0)
				{	
					if (!translateAccelerator(&msg))
					{
						TranslateMessage(&msg); // translates virtual key codes
						DispatchMessage(&msg);  // dispatches message to Window
					}
				};
			}
		}
	}

	m_g_hWndIEModelDialog = NULL;

	if (hWndParent)
		EnableWindow(hWndParent, TRUE);
	if (hWndDisable)
		EnableWindow(hWndDisable, TRUE);

	return bRes;
}

HWND CWebBrowserWindow::getHostWnd(void) const
{
	return getBrowserHostWnd(m_localjs_window);
}

bool CWebBrowserWindow::running(void) const
{
	return !browserWindowClosed(m_localjs_window);
}

void CWebBrowserWindow::setModelDialogForeground(void)
{
	if (m_g_hWndIEModelDialog)
		SetForegroundWindow(m_g_hWndIEModelDialog);
	return;
}

bool CWebBrowserWindow::translateAccelerator(LPMSG lpmsg)
{
	return !!translateBrowserAccelerator(lpmsg);
}

void CWebBrowserWindow::setBrowserControlRegPath(LPCSTR reg_path)
{
	LocalJSHostAPI::setBrowserControlRegPath(reg_path);
	return;
}

bool CWebBrowserWindow::initializeLocalJS(HINSTANCE hInst, HICON hIcon, HICON hIconSm)
{
	return !!LocalJSHostAPI::initializeLocalJS(hInst, hIcon, hIconSm);
}

bool CWebBrowserWindow::uninitializeLocalJS(void)
{
	return !!LocalJSHostAPI::uninitializeLocalJS();
}

}
}
