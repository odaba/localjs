LocalJS演示程序

運行Debug\bin\LocalJSDemo.exe或者Release\bin\LocalJSDemo.exe

1. Release\bin\demo1\_js中的JavaScript文件，Release\bin\demo1\localjs中的JavaScript文件，以及Release\bin\demo1\_css中的css文件是經過YUI compressor壓縮的。
2. 附帶我自己用來壓縮js和css（調用YUI compressor）的Perl程序compress_js.pl，供參考。
3. 程序的設置保存在用戶個人目錄\Application Data\LocalJSDemo 目錄下。
4. demo_ws.php是Web Service示例所調用的簡單PHP文件。
5. LocalJSDemo目錄下是LocalJS的啟動程序源代碼及Visual C++ 6的工程文件。
6. LocalJSDemoDll目錄下是DLL和JavaScript函數互相調用的DLL源代碼及Visual C++ 6的工程文件。