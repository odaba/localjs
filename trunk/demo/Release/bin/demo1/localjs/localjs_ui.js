(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var K=LOCALJS;if("undefined"!=typeof(K.UI)){return}K.UI={};var aa=window,E=K.UI,aq=localJS,a=aq.hostWnd,U=aq.webBrowser,y=aq.COM,N=y.createObject,k=y.interface2Object,q=y.connectEvents,v=N("DllCall"),r=v.add,o=v.newStruct,n=v.newBuffer,av=function(){return o().addLong("left").addLong("top").addLong("right").addLong("bottom")},aA=function(){return o().addLong("x").addLong("y")},t=function(){var aD=o().addLong("length").addLong("flags").addLong("showCmd").add(aA(),"ptMinPosition").add(aA(),"ptMaxPosition").add(av(),"rcNormalPosition");aD.length=aD.size;return aD},A=function(){return o().addLong("hwnd").addLong("message").addLong("wParam").addLong("lParam").addLong("time").add(o().addLong("x").addLong("y"),"pt")};r("user32.dll","BOOL GetMessage(LPMSG lpMsg,HWND hWnd,UINT wMsgFilterMin,UINT wMsgFilterMax);");r("user32.dll","BOOL TranslateMessage(const MSG *lpMsg);");r("user32.dll","LRESULT DispatchMessage(const MSG *lpmsg);");r("user32.dll","void PostQuitMessage(int nExitCode);");r("LocalJS.dll","BOOL __stdcall translateBrowserAccelerator(LPMSG lpmsg);");r("user32.dll","LRESULT SendMessage(HWND hWnd,UINT Msg,WPARAM wParam,LPARAM lParam);");r("user32.dll","int WINAPI MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);");r("user32.dll","LONG SetWindowLong(HWND hWnd, int nIndex, LONG dwNewLong);");r("user32.dll","BOOL SetWindowPos(HWND hWnd, HWND hWndInsertAfter, int X, int Y, int cx, int cy, UINT uFlags);");r("user32.dll","BOOL SetForegroundWindow(HWND hWnd);");r("user32.dll","BOOL MoveWindow(HWND hWnd,int X,int Y,int nWidth,int nHeight,BOOL bRepaint);");r("user32.dll","BOOL GetWindowRect(HWND hWnd,LPRECT lpRect);");r("user32.dll","BOOL GetWindowPlacement(HWND hWnd,WINDOWPLACEMENT *lpwndpl);");r("user32.dll","BOOL SetWindowPlacement(HWND hWnd,WINDOWPLACEMENT *lpwndpl);");r("LocalJS.dll","void * __stdcall createBrowser(DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, LPCWSTR url_pattern, VARIANT * const pVarResult);");r("LocalJS.dll","void __stdcall deleteBrowser(void * browser)");r("LocalJS.dll","void __stdcall detachBrowser(void * browser);");r("LocalJS.dll","IDispatch * __stdcall getBrowserObj(void * browser);");r("LocalJS.dll","BOOL __stdcall browserRunning(void * browser);");r("LocalJS.dll","int __stdcall getBrowserType(void * browser);");r("LocalJS.dll","void * __stdcall createIE(LPCWSTR url, LPCWSTR url_pattern);");r("LocalJS.dll","HWND __stdcall getBrowserHostWnd(void * browser);");var d=v.GetMessage,w=v.TranslateMessage,G=v.DispatchMessage,h=v.PostQuitMessage,ao=v.translateBrowserAccelerator,f=v.SendMessage,ai=v.MessageBox,m=v.SetWindowLong,P=v.SetWindowPos,an=v.SetForegroundWindow,S=v.MoveWindow,M=v.GetWindowRect,az=v.GetWindowPlacement,ae=v.SetWindowPlacement,J=v.createBrowser,ag=v.deleteBrowser,j=v.detachBrowser,I=v.getBrowserObj,am=v.browserRunning,H=v.getBrowserHostWnd,W=v.getBrowserType,b=v.createIE,ab=1,l=2,p=-16,af=0,ar=2147483648,g=12582912,L=524288,D=131072,ax=65536,ap=268435456,B=262144,z=8388608,aB=af|g|L|B|D|ax,al=32,F=64,O=2,s=1,c=0,aj=16,ay=12,ak=2,R=16,ad=32,at=48,aC=64,e=65536,ah=8192,au=262144,aw=1,u=4,Y=256,V=512,i=R|e|au|ah,C=aC|e|au|ah,X=ad|e|au|ah|u,ac=ad|e|au|ah|aw,Q=1,T=6,Z=0;E.WS_CLOSE_ONLY=ar|B|g|L|ap;E.WS_NO_TITLE_BAR=ar|ap|L;E.WS_NORMAL=aB|ap;(function(){var aD=A();unloading=false;aa.attachEvent("onunload",function(){unloading=true});E.doEvents=function(){if(unloading){return false}var aE=d(aD,0,0,0);if(0==aE){h(aD.wParam);return false}if(aE>0){if(!ao(aD)){w(aD);G(aD)}}return true}})();(function(){var aE,aD=function(aF){return aF.getElementsByTagName("html")[0]};E.setDraggables=function(aF){aE=aF};E.addDraggable=function(aG){if(aG){if(!aE){aE=[];var aH=document,aF;if(aH){aE.push(aD(aH));aF=aH.body}if(aF){aE.push(aF)}}aE.push(aG)}};E.getDraggables=function(){return aE};aa.attachEvent("onload",function(){var aO=document,aL=aO.body,aJ=aD(aO);if(!aE){aE=[aL,aJ]}var aM=false,aF=av(),aP,aN,aG,aR,aI=function(aS){if(aE&&aE.length){for(var aT=0;aT<aE.length;++aT){if(aE[aT]===aS){return true}}}return false},aK,aH="onlosecapture",aQ=function(){aM=false;if(aK){aK.detachEvent(aH,aQ);aK=null}};aO.attachEvent("onmousedown",function(){aK=event.srcElement;if(!aM&&(1&event.button)&&aI(aK)&&event.clientX<aJ.clientWidth&&event.clientY<aJ.clientHeight){aM=true;aK.setCapture();aK.attachEvent(aH,aQ);M(a,aF);aG=aF.right-aF.left;aR=aF.bottom-aF.top;aP=event.screenX;aN=event.screenY}});aO.attachEvent("onmousemove",function(){if(aM){S(a,aF.left+event.screenX-aP,aF.top+event.screenY-aN,aG,aR,1)}});aO.attachEvent("onmouseup",function(){if(aM&&aK){aK.releaseCapture()}})})})();var x=function(aI){var aF=aI,aK=this,aD,aJ;this.webBrowser=k(I(aF));this.HWND=H(aF);this.initFunction=null;this.getHandle=function(){return aF};this.close=function(aM){if(aF){var aL=aF;aF=0;aK.webBrowser=null;aK.HWND=0;if(aJ){aJ.unhook()}if(aD){aD.disconnect()}if(aM){j(aL)}ag(aL)}};this.isRunning=function(){return am(aF)};this.getJSWindow=function(){if(aK.webBrowser&&aK.webBrowser.Document){return aK.webBrowser.Document.parentWindow}return null};this.getJSVariable=function(aL){var aM=aK.getJSWindow();if(aM){return aM[aL]}return null};var aH=false,aE=function(){if(!aH){var aL=aK.getJSWindow();if(aL){aL.attachEvent("onload",function(){var aM=aK.initFunction;if(aM){aM(aL)}});aL.attachEvent("onunload",function(){aH=false});aH=true}}},aG={DocumentComplete:aE,DownloadComplete:aE,NavigateComplete2:aE};switch(W(aF)){case l:aG.OnQuit=function(){aK.close()};break;case ab:aJ=N("WindowHook",aK.HWND);aJ.hookMessage(ak,function(aN,aO,aM,aL){aK.close();return aJ.CallOriginalWndProc(aN,aO,aM,aL)});break}aD=q(aK.webBrowser,aG,false)};(function(){E.createBrowser=function(aD,aE,aI,aL,aG,aN,aH,aF,aK,aM){var aJ;if(aD){aJ=new x(b(aE,0));S(aJ.HWND,aI,aL,aG,aN,1)}else{aJ=new x(J(aH,aI,aL,aG,aN,aF,aE,0,0))}if(aK){aJ.initFunction=aK}if(!aM){aa.attachEvent("onunload",function(){aJ.close()})}return aJ}})();(function(){E.msgBox=function(aE,aD){ai(a,aE,document.title,aD?i:C)};aa.alert=function(aD){E.msgBox(aD,true)};E.confirm=function(aG,aF,aE){var aD=ai(a,aG,document.title,(aE?ac:X)|(aF?0:Y));return aE?(aD==Q):(aD==T)};aa.confirm=function(aD){return E.confirm(aD)}})();(function(){E.showTitleBar=function(aD){v.SetWindowLong(a,p,aD?E.WS_NO_TITLE_BAR:E.WS_NORMAL);v.SetWindowPos(a,c,0,0,0,0,al|F|O|s)};E.updateWindowTitle=function(){f(a,ay,0,document.title)};E.bring2Top=function(){an(a)};E.centerWindow=function(aD,aH){var aG=screen,aE=aG.availWidth,aF=aG.availHeight;if(aD>aE){aD=aE}aH+=aq.btmBarHeight;if(aH>aF){aH=aF}S(a,(aE-aD)/2,(aF-aH)/2,aD,aH,1);an(a)};E.getWindowRect=function(){var aD=av();M(a,aD);return aD};E.moveWindow=function(aG,aF,aE,aD){S(a,aG,aF,aE,aD,1)};E.getWindowPlacement=function(){var aD=t();az(a,aD);return aD};E.setWindowPlacement=function(aD){ae(a,aD)}})();(function(){E.exitCallback=null;var aD=function(){return E.exitCallback?E.exitCallback():true};var aF=N("WindowHook",a);aF.hookMessage(aj,function(aI,aJ,aH,aG){return aD()?aF.CallOriginalWndProc(aI,aJ,aH,aG):0});var aE=q(U,{WindowClosing:function(aH,aG){aG.returnValue=true;if(aD()){aq.closeWindow()}}});aa.attachEvent("onunload",function(){aF.unhook();aE.disconnect()})})();(function(){E.newWindowCallback=null;var aD=q(U,{NewWindow3:function(aG,aJ,aF,aI,aH){var aE=E.newWindowCallback;if(aE&&aE(aG,aJ,aF,aI,aH)){return}var aK=screen;aG.returnValue=LOCALJS.UI.createBrowser(0,aH,aK.availWidth/2-10,aK.availHeight/2-10,10,10,LOCALJS.UI.WS_NO_TITLE_BAR,0)}});aa.attachEvent("onunload",function(){aD.disconnect()})})()})();