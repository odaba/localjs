LocalJS Release 2.1.0

For any issues, please contact me at martin@localjs.org.
�������뷢�ʼ��� martin@localjs.org��

File list:
�ļ��б�
	localJS.cfg
		Configuration file of LocalJS. MUST be in the same folder with LocalJS.dll.
		LocalJS �������ļ�������� LocalJS.dll ��ͬһĿ¼�¡�

	LocalJS.dll
		LocalJS library files.
		LocalJS �Ŀ��ļ���

	LocalJSBootstrap.exe
		LocalJS bootstrap program. It is used as this:
			LocalJSBootstrap.exe first_page.html
			LocalJSBootstrap.exe then creates a LocalJS browser window and opens first_page.html in that window.

		If no command line arguments is given, LocalJSBootstrap.exe will look for a file under same folder with same filename having .html extension name as the first page to open, in this case it looks for LocalJSBootstrap.html��

		You can rename LocalJSBootstrap.exe to yourname.exe, then it will looks for yourname.html if no command line arguments is given.

		LocalJS �����������÷����£�
			LocalJSBootstrap.exe first_page.html
			LocalJSBootstrap.exe ����һ�� LocalJS ��������ڲ������д� first_page.html��

		���û�������в�����LocalJSBootstrap.exe ��ͬһĿ¼��Ѱ��һ��ͬ���Ĵ� .html ��׺�����ļ���������������д��������� LocalJSBootstrap.html��

		����Խ� LocalJSBootstrap.exe ����Ϊ yourname.exe����û�������в�����ʱ��������ͬһĿ¼��Ѱ�� yourname.html��

	LocalJSBootstrap.html
		The default html file loaded by LocalJSBootstrap.exe.
		LocalJSBootstrap.exe Ĭ�ϴ򿪵� html �ļ���


Folder list:
Ŀ¼�б�
	localjs
		LOCALJS JavaScript Open Source Library, wrapping up common local operations to JavaScript functions.
		��Դ�� LOCALJS JavaScript�������õı��ز�����װΪ JavaScript ������

	LocalJSBootstrap
		Source code and Visual C++ 6 project file of LocalJSBootstrap.exe. You can modify and use it freely.
		LocalJSBootstrap.exe ��Դ����� Visual C++ 6 �����ļ�����������ɵ��޸ĺ�ʹ������

Change History:

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
	For security reason, LocalJS will send information about program hosting LocalJS to LocalJS server, to identify what program is using LocalJS.