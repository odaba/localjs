(function(){window.attachEvent("onload",function(){var f=document.getElementById("demoThread"),e=localJS,b=e.COM.createObject("DllCall"),a=LOCALJS.UI.msgBox;b.add("Kernel32.dll","DWORD WINAPI GetCurrentThreadId(void);");var d=function(g){var i=LOCALJS.FILE,h=i.urlToPath(i.normalizeUrl());return i.readFileUTF8(i.buildPath(i.getParentFolder(h),g))};var c=function(g){a("在主線程中的函數func_passed_to_thread 中，當前線程ID: "+b.GetCurrentThreadId()+"\n下面調用由新線程傳來的函數function_passed_from_thread");g()};f.attachEvent("onclick",function(){a("準備創建新線程，主線程的線程ID: "+b.GetCurrentThreadId());var g=e.threading.newThread(d("_js\\script_thread.js"),[c,"LocalJS的線程同步很簡單"]);while(g.running){if(!LOCALJS.UI.doEvents()){break}}a("新線程（線程ID："+g.id+"）執行結束.")})})})();