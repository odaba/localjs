(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var t=LOCALJS;t.FILE=t.FILE||{};var B=false,E=window,b=t.FILE,D=localJS,x=D.hostWnd,f=D.COM,K=f.createObject,H,r=function(){if(!H){H=K("Shell.Application")}return H},l,v=function(){if(!l){l=K("WScript.Shell")}return l},p,d=function(){if(!p){p=K("Scripting.FileSystemObject")}return p},A=function(L){return L?true:B},m=K("DllCall"),z=m.add,F=m.newStruct,a=m.newBuffer;z("shell32.dll","HINSTANCE ShellExecute(HWND hwnd,LPCTSTR lpOperation,LPCTSTR lpFile,LPCTSTR lpParameters,LPCTSTR lpDirectory,INT nShowCmd);");z("Kernel32.dll","UINT WINAPI GetPrivateProfileInt(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in INT nDefault,__in LPCTSTR lpFileName);");z("Kernel32.dll","DWORD WINAPI GetPrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpDefault,__out LPTSTR lpReturnedString,__in DWORD nSize,__in LPCTSTR lpFileName);");z("Kernel32.dll","BOOL WINAPI WritePrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpString,__in LPCTSTR lpFileName);");z("kernel32.dll","DWORD WINAPI GetModuleFileName(__in_opt HMODULE hModule,__out LPTSTR lpFilename,__in DWORD nSize);");z("comdlg32.dll","BOOL WINAPI GetOpenFileName(__inout LPOPENFILENAME lpofn);");z("comdlg32.dll","BOOL WINAPI GetSaveFileName(__inout LPOPENFILENAME lpofn);");z("shlwapi.dll","HRESULT UrlCombine(LPCTSTR pszBase,LPCTSTR pszRelative,LPTSTR pszCombined,LPDWORD pcchCombined,DWORD dwFlags);");z("urlmon.dll","STDAPI CoInternetParseUrl(LPCWSTR pwzUrl,PARSEACTION ParseAction,DWORD dwFlags,LPWSTR pszResult,DWORD cchResult,DWORD *pcchResult,DWORD dwReserved);","parseUrl");z("shlwapi.dll","BOOL UrlIs(LPCTSTR pszUrl,URLIS UrlIs);");z("shlwapi.dll","BOOL PathIsURL(LPCTSTR pszPath);");z("shlwapi.dll","HRESULT UrlCreateFromPath(LPCTSTR pszPath,LPTSTR pszUrl,LPDWORD pcchUrl,DWORD dwReserved);");var o=m.ShellExecute,C=m.GetPrivateProfileInt,j=m.GetPrivateProfileString,J=m.WritePrivateProfileString,q=m.GetModuleFileName,k=m.GetOpenFileName,s=m.GetSaveFileName,c=m.UrlCombine,w=m.parseUrl,h=m.UrlIs,e=m.PathIsURL,n=m.UrlCreateFromPath,y=9,i=4200,G=3,g=5,I=4096,u=536870912;(function(){b.iniWrite=function(L,P,M,N){try{N=N.toString()}catch(O){N=0}J(P,M,N,L)};b.iniReadInt=function(M,O,N,L){if(!L){L=0}return C(O,N,L,M)};b.iniReadStr=function(M,P,N,L){try{L=L.toString()}catch(O){L=""}var Q=a(4096);if(j(P,N,L,Q,Q.size>>1,M)){return Q.asStringW}return L};b.regWrite=function(L,N,M){v().RegWrite(L,N,M)};b.regRead=function(L){return v().RegRead(L)};b.regDelete=function(L){v().RegDelete(L)};b.fileExists=function(L){return A(d().FileExists(L))};b.folderExists=function(L){return A(d().FolderExists(L))};b.getAppDataFolder=function(M){var L=r().Namespace(26).Self.Path;return M?d().BuildPath(L,M):L};b.getProgramFolder=function(M){var L=r().Namespace(38).Self.Path;return M?d().BuildPath(L,M):L};b.getExeFilename=function(){var L=a(1024);q(0,L,L.size>>1);return L.asStringW};b.getExeFolder=function(){return d().GetParentFolderName(b.getExeFilename())};b.buildPath=function(L,M){return d().BuildPath(L,M)};b.getParentFolder=function(L){return d().GetParentFolderName(L)};b.getFileName=function(L){return d().GetFileName(L)};b.getBaseName=function(L){return d().GetBaseName(L)};b.getExtensionName=function(L){return d().GetExtensionName(L)};b.readFileUTF8=function(M){try{var O=K("ADODB.Stream");O.Open();O.Charset="utf-8";O.LoadFromFile(M);var L=O.ReadText();O.Close();return L}catch(N){return B}};b.writeFileUTF8=function(L,N){var M=K("ADODB.Stream");adSaveCreateOverWrite=2;M.Open();M.Charset="utf-8";M.WriteText(N);M.SaveToFile(L,adSaveCreateOverWrite);M.Close()};b.deleteFile=function(L,M){try{d().DeleteFile(L,M);return true}catch(N){return false}};b.createFolder=function(L){if(!d().FolderExists(L)){d().CreateFolder(L)}};b.deleteFolder=function(L,M){try{d().DeleteFolder(L,M);return true}catch(N){return false}};b.copyFile=function(N,L,M){d().CopyFile(N,L,!M)};b.copyFolder=function(N,L,M){d().CopyFolder(N,L,!M)};b.listFolder=function(N){var L=[];if(d().FolderExists(N)){var O=p.GetFolder(N),M=K("Enumerator",O.Files);for(;!M.atEnd();M.moveNext()){L.push(M.item())}}return L};b.browseFile=function(O,R,Q,M,P,N,T){var S=function(){var U=33554432,X=4096,V=2048,Y=1,W=F().addLong("lStructSize").addLong(x).addLong("hInstance").add(a(512).address,"lpstrFilter").addLong("lpstrCustomFilter").addLong("nMaxCustFilter").addLong(1,"nFilterIndex").add(a(512).address,"lpstrFile").addLong("nMaxFile").addLong("lpstrFileTitle").addLong("nMaxFileTitle").add(a(512).address,"lpstrInitialDir").add(a(512).address,"lpstrTitle").addLong(U|X|V|(T?Y:0),"Flags").addShort("nFileOffset").addShort("nFileExtension").add(a(128).address,"lpstrDefExt").add(a(24));W.lStructSize=W.size;return W},L=S();if(M){L.lpstrFilter=M}if(Q){L.lpstrInitialDir=Q}if(R){L.lpstrTitle=R}else{L.lpstrTitle=document.title}if(P){L.lpstrDefExt=P}if(N){L.lpstrFile=N}L.nMaxFile=L.lpstrFile.size>>1;if(O?s(L):k(L)){return L.lpstrFile.asStringW}return B};b.browseFolder=function(O,L){try{var N=r().BrowseForFolder(x,O?O:document.title,0,L).Self.Path;return d().FolderExists(N)?N:""}catch(M){return B}};b.exec=function(L){o(0,0,L,0,0,1)};b.pathToUrl=function(N){var L=a(i),M=a(4,L.size>>1);if(n(N,L,M,0)>=0){return L.asStringW}return B};b.urlToPath=function(M){var N=a(512),L=a(4);if(w(M,y,0,N,N.size>>1,L,0)>=0){return N.asStringW}return B};b.isUrl=function(L){return A(e(L))};b.isFileUrl=function(L){return A(h(L,G))};b.readUrl=function(M,T){if(h(M,G)){var U=b.urlToPath(M),O=B;if(B!==U&&b.fileExists(U)){O=b.readFileUTF8(U)}if(!T){return O}if(B===O){if(T.fail){T.fail(O)}}else{if(T.ok){T.ok(O)}}}else{var Q=LOCALJS.WEB_SERVICE;if(T){Q.callUrl("GET",M,T)}else{var P,S=B,N=function(V){P=1;S=V},L=function(){P=-1};for(var R=0;R<5;++R){P=0;Q.callUrl("GET",M,{ok:N,fail:L});while(0==P){if(!LOCALJS.UI.doEvents()){return B}}if(1==P){break}}return S}}};b.buildUrl=function(N,L){var M=a(i),O=a(4,M.size>>1);if(c(N,L,M,O,I|u)>=0){return M.asStringW}return B};b.normalizeUrl=function(L){var M=document.URL.replace(/[#\?].*$/,"");if(!L){return M}return b.buildUrl(M,L)}})()})();(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var i=LOCALJS;i.LOCALIZATION=i.LOCALIZATION||{};var j=i.LOCALIZATION,b=localJS.globalDict,c="LOCALJS.LOCALIZATION.CURRENT_LANG",g="lang",h="url",f="words",e="func_names",a=function(){return localJS.COM.createObject("Scripting.Dictionary")},k=function(){if(!b.Exists(c)){b.Item(c)=a()}return b.Item(c)},d=function(){var n=k();if(n.Exists(h)&&n.Exists(g)){var o=LOCALJS.FILE,t=o.buildUrl(n.Item(h),n.Item(g)+".json"),m=o.readUrl(t);if(m){try{var q=(new Function("return "+m))(),s=a(),r;for(var l in q){var u=q[l];if("function"==typeof(u)){u=u.toString();if(!r){r=a()}r.Item(l)=1}s.Item(l)=u}n.Item(f)=s;if(r){n.Item(e)=r}else{if(n.Exists(e)){n.Remove(e)}}return}catch(p){}}}if(n.Exists(f)){n.Remove(f)}if(n.Exists(e)){n.Remove(e)}};j.setPath=function(o,m){var n=k(),l=LOCALJS.FILE.normalizeUrl(o);if(!l.match(/\/$/)){l=l+"/"}if(!n.Exists(h)||l!=n.Item(h)||m){n.Item(h)=l;d()}};j.setLang=function(n,l){var m=k();if(!m.Exists(g)||n!=m.Item(g)||l){m.Item(g)=n;d()}};j.getLang=function(){var l=k();return l.Exists(g)?l.Item(g):undefined};j.get=function(m){var n=k(),p=n.Exists(f)?n.Item(f):undefined;if(p&&p.Exists(m)){var o=p.Item(m);if(n.Exists(e)){var l=n.Item(e);if(l.Exists(m)){return(new Function("return "+o))()}}return o}else{return m}};j.getAcceptLanguages=function(){var l=localJS.COM.createObject("DllCall"),m=l.newBuffer,o=m(512),n=m(4,o.size);l.add("shlwapi.dll","HRESULT GetAcceptLanguages(LPTSTR psz, LPDWORD pcch);","f");if(l.f(o,n)>=0){return o.asStringW}return false}})();(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var P=LOCALJS;P.UI=P.UI||{};var b=false,W=true,ag=window,ao=screen,K=P.UI,E=P.FILE,ay=localJS,a=ay.hostWnd,aa=ay.webBrowser,B=ay.COM,S=B.createObject,m=B.interface2Object,s=B.connectEvents,z=S("DllCall"),t=z.add,q=z.newStruct,p=z.newBuffer,w=function(aL,aK){return"undefined"==typeof(aL)?aK:aL},aC=function(){return q().addLong("left").addLong("top").addLong("right").addLong("bottom")},aH=function(){return q().addLong("x").addLong("y")},x=function(){var aK=q().addLong("length").addLong("flags").addLong("showCmd").add(aH(),"ptMinPosition").add(aH(),"ptMaxPosition").add(aC(),"rcNormalPosition");aK.length=aK.size;return aK},D=function(){return q().addLong("hwnd").addLong("message").addLong("wParam").addLong("lParam").addLong("time").add(q().addLong("x").addLong("y"),"pt")};t("user32.dll","BOOL GetMessage(LPMSG lpMsg,HWND hWnd,UINT wMsgFilterMin,UINT wMsgFilterMax);");t("user32.dll","BOOL TranslateMessage(const MSG *lpMsg);");t("user32.dll","LRESULT DispatchMessage(const MSG *lpmsg);");t("user32.dll","void PostQuitMessage(int nExitCode);");t("LocalJS.dll","BOOL __stdcall translateBrowserAccelerator(LPMSG lpmsg);");t("user32.dll","LRESULT SendMessage(HWND hWnd,UINT Msg,WPARAM wParam,LPARAM lParam);");t("user32.dll","int WINAPI MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);");t("user32.dll","LONG SetWindowLong(HWND hWnd, int nIndex, LONG dwNewLong);");t("user32.dll","BOOL SetWindowPos(HWND hWnd, HWND hWndInsertAfter, int X, int Y, int cx, int cy, UINT uFlags);");t("user32.dll","BOOL SetForegroundWindow(HWND hWnd);");t("user32.dll","BOOL MoveWindow(HWND hWnd,int X,int Y,int nWidth,int nHeight,BOOL bRepaint);");t("user32.dll","BOOL GetWindowRect(HWND hWnd,LPRECT lpRect);");t("user32.dll","BOOL GetWindowPlacement(HWND hWnd,WINDOWPLACEMENT *lpwndpl);");t("user32.dll","BOOL SetWindowPlacement(HWND hWnd,WINDOWPLACEMENT *lpwndpl);");t("LocalJS.dll","void * __stdcall createBrowserWindow(DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, VARIANT * const pVarResult);");t("LocalJS.dll","void __stdcall deleteBrowserWindow(void * browser)");t("LocalJS.dll","void __stdcall detachBrowserWindow(void * browser);");t("LocalJS.dll","IDispatch * __stdcall getBrowserObj(void * browser);");t("LocalJS.dll","BOOL __stdcall browserWindowClosed(void * browser);");t("LocalJS.dll","int __stdcall getBrowserType(void * browser);");t("LocalJS.dll","void * __stdcall createIE(LPCWSTR url);");t("LocalJS.dll","HWND __stdcall getBrowserHostWnd(void * browser);");var e=z.GetMessage,A=z.TranslateMessage,M=z.DispatchMessage,i=z.PostQuitMessage,aw=z.translateBrowserAccelerator,g=z.SendMessage,aq=z.MessageBox,o=z.SetWindowLong,U=z.SetWindowPos,av=z.SetForegroundWindow,Y=z.MoveWindow,R=z.GetWindowRect,aG=z.GetWindowPlacement,al=z.SetWindowPlacement,v=z.createBrowserWindow,l=z.deleteBrowserWindow,H=z.detachBrowserWindow,O=z.getBrowserObj,I=z.browserWindowClosed,N=z.getBrowserHostWnd,ac=z.getBrowserType,c=z.createIE,ah=1,n=2,r=-16,an=0,az=2147483648,h=12582912,Q=524288,J=131072,aE=65536,ax=268435456,F=262144,C=8388608,aI=an|h|Q|F|J|aE,au=32,L=64,T=2,u=1,ak=3,am=1,d=0,ar=16,aF=12,at=2,X=16,aj=32,aB=48,aJ=64,f=65536,ap=8192,aA=262144,aD=1,y=4,ae=256,ab=512,j=X|f|aA|ap,G=aJ|f|aA|ap,ad=aj|f|aA|ap|y,ai=aj|f|aA|ap|aD,V=1,Z=6,af=0;K.WS_CLOSE_ONLY=az|F|h|Q|ax;K.WS_NO_TITLE_BAR=az|ax|Q;K.WS_NORMAL=aI|ax;K.isIE=n==ac(ay.browserWindowHandle);(function(){var aK=D();unloading=b;ag.attachEvent("onunload",function(){unloading=W});K.doEvents=function(){if(unloading){return b}var aL=e(aK,0,0,0);if(0==aL){i(aK.wParam);return b}if(aL>0){if(!aw(aK)){A(aK);M(aK)}}return W}})();(function(){var aL,aK=function(aM){return aM.getElementsByTagName("html")[0]};K.setDraggables=function(aM){aL=aM};K.addDraggable=function(){var aO=0,aN=arguments;for(;aO<aN.length;++aO){var aP=aN[aO];if("string"==typeof(aP)){aP=document.getElementById(aP)}if(aP){if(!aL){aL=[];var aQ=document,aM;if(aQ){aL.push(aK(aQ));aM=aQ.body}if(aM){aL.push(aM)}}aL.push(aP)}}};K.getDraggables=function(){return aL};ag.attachEvent("onload",function(){var aV=document,aS=aV.body,aQ=aK(aV);if(!aL){aL=[aS,aQ]}var aT=b,aM=aC(),aW,aU,aN,aY,aP=function(aZ){if(aL&&aL.length){for(var a0=0;a0<aL.length;++a0){if(aL[a0]===aZ){return W}}}return b},aR,aO="onlosecapture",aX=function(){aT=b;if(aR){aR.detachEvent(aO,aX);aR=null}};aV.attachEvent("onmousedown",function(){aR=event.srcElement;if(!aT&&(1&event.button)&&aP(aR)&&event.clientX<aQ.clientWidth&&event.clientY<aQ.clientHeight){aT=W;aR.setCapture();aR.attachEvent(aO,aX);R(a,aM);aN=aM.right-aM.left;aY=aM.bottom-aM.top;aW=event.screenX;aU=event.screenY}});aV.attachEvent("onmousemove",function(){if(aT){Y(a,aM.left+event.screenX-aW,aM.top+event.screenY-aU,aN,aY,1)}});aV.attachEvent("onmouseup",function(){if(aT&&aR){aR.releaseCapture()}})})})();var k=function(aP){var aM=aP,aR=this,aK,aQ;this.webBrowser=m(O(aM));this.HWND=N(aM);this.initFunction=null;this.isIE=n==ac(aM);this.getHandle=function(){return aM};this.close=function(aT){if(aM){var aS=aM;aM=0;aR.webBrowser=null;aR.HWND=0;if(aQ){aQ.unhook()}if(aK){aK.disconnect()}if(aT){H(aS)}l(aS)}};this.isClosed=function(){return I(aM)?W:b};this.getJSWindow=function(aS){aS=w(aS,10);var aT=(new Date()).getTime()/1000;do{if(aR.webBrowser&&aR.webBrowser.Document){return aR.webBrowser.Document.parentWindow}}while(((new Date()).getTime()/1000)-aT<aS&&K.doEvents());return undefined};this.getJSVariable=function(aS,aU){aU=w(aU,10);var aV=(new Date()).getTime()/1000,aT=aR.getJSWindow(aU);if(aT){while(undefined==aT[aS]&&((new Date()).getTime()/1000)-aV<aU&&K.doEvents()){}return aT[aS]}return undefined};var aO=b,aL=function(){if(!aO){var aS=aR.getJSWindow();if(aS){aS.attachEvent("onload",function(){var aT=aR.initFunction;if(aT){aT(aS)}});aS.attachEvent("onunload",function(){aO=b});aO=W}}},aN={DocumentComplete:aL,DownloadComplete:aL,NavigateComplete2:aL};switch(ac(aM)){case n:aN.OnQuit=function(){aR.close()};break;case ah:aQ=S("WindowHook",aR.HWND);aQ.hookMessage(at,function(aU,aV,aT,aS){aR.close();return aQ.CallOriginalWndProc(aU,aV,aT,aS)});break}aK=s(aR.webBrowser,aN,b)};(function(){K.newWindow=function(aL,aP,aS,aN,aU,aO,aM,aR,aT,aK){var aQ;aN=w(aN,300);aU=w(aU,180);aP=w(aP,(ao.availWidth-aN)>>1);aS=w(aS,(ao.availHeight-aU)>>1);if(aK){aQ=new k(c(aL));Y(aQ.HWND,aP,aS,aN,aU,1)}else{if(!aO){aO=K.WS_NORMAL}if(!aM){aM=0}aQ=new k(v(aO,aP,aS,aN,aU,aM,aL,0))}if(aR){aQ.initFunction=aR}if(!aT){ag.attachEvent("onunload",function(){aQ.close()})}return aQ}})();(function(){K.msgBox=function(aL,aK){aq(a,aL,document.title,aK?j:G)};ag.alert=function(aK){K.msgBox(aK,W)};K.confirm=function(aN,aM,aL){var aK=aq(a,aN,document.title,(aL?ai:ad)|(aM?0:ae));return aL?(aK==V):(aK==Z)};ag.confirm=function(aM,aL,aK){return K.confirm(aM,aL,aK)}})();(function(){K.showTitleBar=function(aK){z.SetWindowLong(a,r,aK?K.WS_NO_TITLE_BAR:K.WS_NORMAL);z.SetWindowPos(a,d,0,0,0,0,au|L|T|u)};K.updateTitle=function(){g(a,aF,0,document.title)};K.bring2Top=function(){av(a)};K.centerWindow=function(aK,aN){var aL=ao.availWidth,aM=ao.availHeight;if(aK>aL){aK=aL}aN+=ay.btmBarHeight;if(aN>aM){aN=aM}Y(a,(aL-aK)/2,(aM-aN)/2,aK,aN,1);av(a)};K.getWindowRect=function(){var aK=aC();R(a,aK);return aK};K.moveWindow=function(aN,aM,aL,aK){Y(a,aN,aM,aL,aK,1)};K.getWindowPlacement=function(){var aK=x();aG(a,aK);return aK};K.setWindowPlacement=function(aK){al(a,aK)};K.saveWindowPosition=function(aP,aK,aO){var aN=K.getWindowPlacement(),aL=aN.rcNormalPosition,aM=E.iniWrite;aM(aP,aK,aO+"left",aL.left.asLong);aM(aP,aK,aO+"top",aL.top.asLong);aM(aP,aK,aO+"right",aL.right.asLong);aM(aP,aK,aO+"bottom",aL.bottom.asLong);aM(aP,aK,aO+"maximized",ak==aN.showCmd?"1":"0")};K.loadWindowPosition=function(aM,aN,aV){var aR=E.iniReadInt,aO=aR(aM,aN,aV+"left",50),aS=aR(aM,aN,aV+"top",50),aX=aR(aM,aN,aV+"right",800),aL=aR(aM,aN,aV+"bottom",600),aP=aR(aM,aN,aV+"maximized",0),aW=ao.availWidth,aU=ao.availHeight,aQ=x(),aT=aQ.rcNormalPosition,aK=aQ.ptMinPosition,aY=aQ.ptMaxPosition;if(aO<0){aO=0}if(aS<0){aS=0}if(aX>aW){aX=aW}if(aL>aU){aL=aU}aQ.showCmd=aP?ak:am;aK.x=aK.y=aY.x=aY.y=-1;aT.left=aO;aT.top=aS;aT.right=aX;aT.bottom=aL;K.setWindowPlacement(aQ)}})();(function(){K.exitCallback=null;var aK=function(){return K.exitCallback?K.exitCallback():W};var aM=S("WindowHook",a);aM.hookMessage(ar,function(aP,aQ,aO,aN){return aK()?aM.CallOriginalWndProc(aP,aQ,aO,aN):0});var aL=s(aa,{WindowClosing:function(aO,aN){aN.returnValue=W;if(aK()){if(K.isIE){aa.Quit()}else{ay.closeWindow()}}}});ag.attachEvent("onunload",function(){aM.unhook();aL.disconnect()})})();(function(){K.newWindowCallback=null;var aK=s(aa,{NewWindow3:function(aN,aQ,aM,aP,aO){var aL=K.newWindowCallback;if(aL&&aL(aN,aQ,aM,aP,aO)){return}var aR=screen;aN.returnValue=LOCALJS.UI.newWindow(aO,aR.availWidth/2-5,aR.availHeight/2-5,10,10,LOCALJS.UI.WS_NO_TITLE_BAR)}});ag.attachEvent("onunload",function(){aK.disconnect()})})()})();(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var e=LOCALJS;e.WEB_SERVICE=e.WEB_SERVICE||{};var a=e.WEB_SERVICE,d=localJS,c=d.COM,b=c.createObject;a.callUrl=function(h,g,l,k,j,f){var i=b("Microsoft.XMLHTTP");i.onreadystatechange=function(){if(4==i.readyState){i.onreadystatechange=function(){};if(200==i.status){if(l&&l.ok){l.ok(i.responseText,i)}}else{if(l&&l.fail){l.fail(i.status,i)}}i=null}};i.open(h,g,true,j,f);i.send(k)}})();(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var a=LOCALJS;a.LINB=a.LINB||{};var c=a.LINB,b=a.FILE;c.callTemplateFile=function(f,d){var e=b.readUrl(b.normalizeUrl("template/"+f));if(false===e){return e}if(d.clsName){e=e.replace(/\{clsName\}/g,d.clsName)}if(d.theme){e=e.replace(/\{theme\}/g,d.theme)}if(d.lang){e=e.replace(/\{lang\}/g,d.lang)}if(d.content){e=e.replace(/\{content\}/g,d.content)}return e};c.saveTemplateFile=function(i,d,h){try{var f=c.callTemplateFile(i,d);if(false===f){return f}b.writeFileUTF8(h,f)}catch(g){return false}return true};c.isLocal=function(){return b.isFileUrl(b.normalizeUrl())};c.getSingleTemplateUrl=function(d){return b.normalizeUrl("template/single"+((linb.debug&&!d)?"debug":"")+".html")}})();