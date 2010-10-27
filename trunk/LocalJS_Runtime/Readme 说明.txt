LocalJS Runtime Release 2.1.1

For any issues, please contact me at martin@localjs.org.
有问题请发邮件到 martin@localjs.org。

File list:
文件列表：
	localJS.cfg
		Configuration file of LocalJS. MUST be in the same folder with LocalJS.dll.
		LocalJS 的配置文件。必须和 LocalJS.dll 在同一目录下。

	LocalJS.dll
		LocalJS library files.
		LocalJS 的库文件。

	LocalJSBootstrap.exe
		LocalJS bootstrap program. It is used as this:
			LocalJSBootstrap.exe first_page.html
			LocalJSBootstrap.exe then creates a LocalJS browser window and opens first_page.html in that window.

		If no command line arguments is given, LocalJSBootstrap.exe will look for a file under same folder with same filename having .html extension name as the first page to open, in this case it looks for LocalJSBootstrap.html。

		You can rename LocalJSBootstrap.exe to yourname.exe, then it will looks for yourname.html if no command line arguments is given.

		LocalJS 的启动程序。用法如下：
			LocalJSBootstrap.exe first_page.html
			LocalJSBootstrap.exe 创建一个 LocalJS 浏览器窗口并在其中打开 first_page.html。

		如果没有命令行参数，LocalJSBootstrap.exe 在同一目录下寻找一个同名的带 .html 后缀名的文件，在浏览器窗口中打开它。比如 LocalJSBootstrap.html。

		你可以将 LocalJSBootstrap.exe 改名为 yourname.exe，则当没有命令行参数的时候，它将在同一目录下寻找 yourname.html。

	LocalJSBootstrap.html
		The default html file loaded by LocalJSBootstrap.exe.
		LocalJSBootstrap.exe 默认打开的 html 文件。


Folder list:
目录列表：
	localjs
		LOCALJS JavaScript Open Source Library, wrapping up common local operations to JavaScript functions.
		开源的 LOCALJS JavaScript，将常用的本地操作封装为 JavaScript 函数。

	LocalJSBootstrap
		Source code and Visual C++ 6 project file of LocalJSBootstrap.exe. You can modify and use it freely.
		LocalJSBootstrap.exe 的源代码和 Visual C++ 6 工程文件。你可以自由地修改和使用它。

Change History:

2010-10-20
	LocalJS 2.1.1 rename localJS.browserHandle to localJS.browserWindowHandle
		add properties LOCALJS.UI.isIE and BrowserWindow.isIE
		LOCALJS.UI.addDraggable accepts variable number of arguments, and can be id of HTML element or HTML element object
		Other small fixes of LOCALJS.UI

2010-10-18
	LocalJS 2.1.0 remove url_pattern parameter from C function createBrowserWindow, add localJS.trust method.
		add LOCALJS.LOCALIZATION.getAcceptLanguages 

2010-10-17
	LocalJS 2.0.3 rename C functions exported by LocalJS.Dll for better readability.

2010-10-15
	LocalJS 2.0.2 released with a batch of small fixes in LOCALJS.FILE.

2010-10-13
	LocalJS 2.0.1 released with LOCALJS.LOCALIZATION added. Also several functions have been added to LOCALJS.FILE. Demo application updated

2010-10-10
	LocalJS 2.0 released along with demo application
	
Agreement:
	For security reason, LocalJS will send information about program hosting LocalJS to LocalJS server, to identify what program is using LocalJS. LocalJS doesn't collect any user personal information.