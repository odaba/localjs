(function(){window.attachEvent("onload",function(){var h=document.getElementById("demoThread"),g=localJS,a=LOCALJS.LOCALIZATION.get,c=g.COM.createObject("DllCall"),b=LOCALJS.UI.msgBox;c.add("Kernel32.dll","DWORD WINAPI GetCurrentThreadId(void);");var f=c.GetCurrentThreadId;var e=function(i){var k=LOCALJS.FILE,j=k.urlToPath(k.normalizeUrl());return k.readFileUTF8(k.buildPath(k.getParentFolder(j),i))};var d=function(i){b(a("demo_thread_wording_1")(f()));i()};h.attachEvent("onclick",function(){b(a("demo_thread_wording_2")+f());var i=g.threading.newThread(e("_js\\script_thread.js"),[d,a("demo_thread_wording_3"),a]);while(i.running){if(!LOCALJS.UI.doEvents()){break}}b(a("demo_thread_wording_4")(i.id))})})})();