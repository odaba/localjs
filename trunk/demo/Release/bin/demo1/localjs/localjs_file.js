(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var g=LOCALJS;if("undefined"!=typeof(g.FILE)){return}g.FILE={};var d=window,e=g.FILE,l=localJS,b=l.hostWnd,f=l.COM,s=f.createObject,x,m=function(){if(!x){x=s("Shell.Application")}return x},r,h=function(){if(!r){r=s("WScript.Shell")}return r},c,k=function(){if(!c){c=s("Scripting.FileSystemObject")}return c};dllCall=s("DllCall"),addFunc=dllCall.add,newStruct=dllCall.newStruct,newBuffer=dllCall.newBuffer;addFunc("shell32.dll","HINSTANCE ShellExecute(HWND hwnd,LPCTSTR lpOperation,LPCTSTR lpFile,LPCTSTR lpParameters,LPCTSTR lpDirectory,INT nShowCmd);");addFunc("Kernel32.dll","UINT WINAPI GetPrivateProfileInt(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in INT nDefault,__in LPCTSTR lpFileName);");addFunc("Kernel32.dll","DWORD WINAPI GetPrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpDefault,__out LPTSTR lpReturnedString,__in DWORD nSize,__in LPCTSTR lpFileName);");addFunc("Kernel32.dll","BOOL WINAPI WritePrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpString,__in LPCTSTR lpFileName);");addFunc("kernel32.dll","DWORD WINAPI GetModuleFileName(__in_opt HMODULE hModule,__out LPTSTR lpFilename,__in DWORD nSize);");addFunc("comdlg32.dll","BOOL WINAPI GetOpenFileName(__inout LPOPENFILENAME lpofn);");addFunc("shlwapi.dll","HRESULT UrlCombine(LPCTSTR pszBase,LPCTSTR pszRelative,LPTSTR pszCombined,LPDWORD pcchCombined,DWORD dwFlags);");addFunc("urlmon.dll","STDAPI CoInternetParseUrl(LPCWSTR pwzUrl,PARSEACTION ParseAction,DWORD dwFlags,LPWSTR pszResult,DWORD cchResult,DWORD *pcchResult,DWORD dwReserved);","parseUrl");var w=dllCall.ShellExecute,j=dllCall.GetPrivateProfileInt,i=dllCall.GetPrivateProfileString,u=dllCall.WritePrivateProfileString,v=dllCall.GetModuleFileName,p=dllCall.GetOpenFileName,o=dllCall.UrlCombine,t=dllCall.parseUrl,n=9,a=4096,q=536870912;(function(){e.iniWrite=function(y,C,z,A){try{A=A.toString()}catch(B){A=0}u(C,z,A,y)};e.iniReadInt=function(z,B,A,y){if(!y){y=0}return j(B,A,y,z)};e.iniReadStr=function(z,C,A,y){try{y=y.toString()}catch(B){y=0}var D=newBuffer(4096);if(i(C,A,y,D,D.size>>1,z)){return D.asStringW}return""};e.regWrite=function(y,A,z){h().RegWrite(y,A,z)};e.regRead=function(y){return h().RegRead(y)};e.regDelete=function(y){return h().RegDelete(y)};e.fileExists=function(y){return k().FileExists(y)};e.folderExists=function(y){return k().FolderExists(y)};e.getAppDataFolder=function(z){var y=m().Namespace(26).Self.Path;return z?k().BuildPath(y,z):y};e.getProgramFolder=function(z){var y=m().Namespace(38).Self.Path;return z?k().BuildPath(y,z):y};e.getExeFilename=function(){var y=newBuffer(512);v(0,y,y.size>>1);return y.asStringW};e.getExeFolder=function(){return k().GetParentFolderName(e.getExeFilename())};e.buildPath=function(y,z){return k().BuildPath(y,z)};e.getParentFolder=function(y){return k().GetParentFolderName(y)};e.readFileUTF8=function(z){try{var B=s("ADODB.Stream");B.Open();B.Charset="utf-8";B.LoadFromFile(z);var y=B.ReadText();B.Close();return y}catch(A){return""}};e.writeFileUTF8=function(y,A){var z=s("ADODB.Stream");adSaveCreateOverWrite=2;z.Open();z.Charset="utf-8";z.WriteText(A);z.SaveToFile(y,adSaveCreateOverWrite);z.Close()};e.deleteFile=function(y,z){if(k().FileExists(y)){k().DeleteFile(y,z)}};e.createFolder=function(y){if(!k().FolderExists(y)){k().CreateFolder(y)}};e.deleteFolder=function(z,y){if(k().FolderExists(z)){k().DeleteFolder(z,y)}};e.listFolder=function(A){var y=[];if(k().FolderExists(A)){var B=c.GetFolder(A),z=s("Enumerator",B.Files);for(;!z.atEnd();z.moveNext()){y.push(z.item())}}return y};e.browseFile=function(y,B,E,A,D,F){var C=function(){var G=33554432,J=4096,H=2048,K=1,I=newStruct().addLong("lStructSize").addLong(b).addLong("hInstance").add(newBuffer(512).address,"lpstrFilter").addLong("lpstrCustomFilter").addLong("nMaxCustFilter").addLong(1,"nFilterIndex").add(newBuffer(512).address,"lpstrFile").addLong("nMaxFile").addLong("lpstrFileTitle").addLong("nMaxFileTitle").add(newBuffer(512).address,"lpstrInitialDir").add(newBuffer(512).address,"lpstrTitle").addLong(G|J|H|(F?K:0),"Flags").addShort("nFileOffset").addShort("nFileExtension").add(newBuffer(128).address,"lpstrDefExt").add(newBuffer(24));I.lStructSize=I.size;return I},z=C();if(B){z.lpstrFilter=B}if(y){z.lpstrInitialDir=y}if(E){z.lpstrTitle=E}if(A){z.lpstrDefExt=A}if(D){z.lpstrFile=D}z.nMaxFile=z.lpstrFile.size>>1;if(p(z)){return z.lpstrFile.asStringW}return false};e.browseFolder=function(z,y){return m().BrowseForFolder(b,z?z:document.title,0,y)};e.exec=function(y){w(0,0,y,0,0,1)};e.urlToPath=function(z){var B=newBuffer(512),y=newBuffer(4),A=t(z,n,0,B,B.size>>1,y,0);if(A>=0){return B.asStringW}return z};e.normalizeUrl=function(y){var z=document.URL.replace(/#.*$/,"");if(!y){return z}var B=newBuffer(4200),A=newBuffer(4,B.size>>1);if(o(z,y,B,A,a|q)>=0){return B.asStringW}return z}})()})();