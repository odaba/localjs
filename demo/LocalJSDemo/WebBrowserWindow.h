#pragma once

namespace GroundBase
{
namespace LocalBrowser
{

class CWebBrowserWindow
{
public:
	CWebBrowserWindow(void);
	~CWebBrowserWindow(void);

	bool createWindow(DWORD dwStyle, int x, int y, int nWidth, int nHeight, 
					  HWND hWndParent, LPCWSTR url, LPCWSTR url_pattern);

	bool dialogBox(DWORD dwStyle, int x, int y, int nWidth, int nHeight, 
				   HWND hWndParent, LPCWSTR url, LPCWSTR url_pattern, 
				   HWND hWndDisable, VARIANT * const pVarResult);

	HWND getHostWnd(void) const;
	bool running(void) const;

	static bool initializeLocalJS(HINSTANCE hInst, HICON hIcon, HICON hIconSm);
	static bool uninitializeLocalJS(void);

	static void setModelDialogForeground(void);
	static bool translateAccelerator(LPMSG lpmsg);

	static void setBrowserControlRegPath(LPCSTR reg_path);

private:
	// prevent from copy and assignment
	CWebBrowserWindow(const CWebBrowserWindow & /*that*/);
	CWebBrowserWindow & operator = (const CWebBrowserWindow & /*that*/);

	void *		m_localjs_window;
	static HWND	m_g_hWndIEModelDialog;
};

}
}
