(function(){if("undefined"==typeof(LOCALJS)){LOCALJS={}}var l=LOCALJS;if("undefined"!=typeof(l.FILE)){return}l.FILE={};var h=window,i=l.FILE,q=localJS,d=q.hostWnd,j=q.COM,z=j.createObject,I,s=function(){if(!I){I=z("Shell.Application")}return I},y,n=function(){if(!y){y=z("WScript.Shell")}return y},g,p=function(){if(!g){g=z("Scripting.FileSystemObject")}return g},H=function(J){return J?true:false},b=z("DllCall"),f=b.add,C=b.newStruct,F=b.newBuffer;f("shell32.dll","HINSTANCE ShellExecute(HWND hwnd,LPCTSTR lpOperation,LPCTSTR lpFile,LPCTSTR lpParameters,LPCTSTR lpDirectory,INT nShowCmd);");f("Kernel32.dll","UINT WINAPI GetPrivateProfileInt(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in INT nDefault,__in LPCTSTR lpFileName);");f("Kernel32.dll","DWORD WINAPI GetPrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpDefault,__out LPTSTR lpReturnedString,__in DWORD nSize,__in LPCTSTR lpFileName);");f("Kernel32.dll","BOOL WINAPI WritePrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpString,__in LPCTSTR lpFileName);");f("kernel32.dll","DWORD WINAPI GetModuleFileName(__in_opt HMODULE hModule,__out LPTSTR lpFilename,__in DWORD nSize);");f("comdlg32.dll","BOOL WINAPI GetOpenFileName(__inout LPOPENFILENAME lpofn);");f("shlwapi.dll","HRESULT UrlCombine(LPCTSTR pszBase,LPCTSTR pszRelative,LPTSTR pszCombined,LPDWORD pcchCombined,DWORD dwFlags);");f("urlmon.dll","STDAPI CoInternetParseUrl(LPCWSTR pwzUrl,PARSEACTION ParseAction,DWORD dwFlags,LPWSTR pszResult,DWORD cchResult,DWORD *pcchResult,DWORD dwReserved);","parseUrl");f("shlwapi.dll","BOOL UrlIs(LPCTSTR pszUrl,URLIS UrlIs);");f("shlwapi.dll","BOOL PathIsURL(LPCTSTR pszPath);");f("shlwapi.dll","HRESULT UrlCreateFromPath(LPCTSTR pszPath,LPTSTR pszUrl,LPDWORD pcchUrl,DWORD dwReserved);");var G=b.ShellExecute,o=b.GetPrivateProfileInt,m=b.GetPrivateProfileString,B=b.WritePrivateProfileString,E=b.GetModuleFileName,w=b.GetOpenFileName,u=b.UrlCombine,A=b.parseUrl,k=b.UrlIs,r=b.PathIsURL,D=b.UrlCreateFromPath,t=9,v=4200,e=3,a=5,c=4096,x=536870912;(function(){i.iniWrite=function(J,N,K,L){try{L=L.toString()}catch(M){L=0}B(N,K,L,J)};i.iniReadInt=function(K,M,L,J){if(!J){J=0}return o(M,L,J,K)};i.iniReadStr=function(K,N,L,J){try{J=J.toString()}catch(M){J=""}var O=F(4096);if(m(N,L,J,O,O.size>>1,K)){return O.asStringW}return J};i.regWrite=function(J,L,K){n().RegWrite(J,L,K)};i.regRead=function(J){return n().RegRead(J)};i.regDelete=function(J){n().RegDelete(J)};i.fileExists=function(J){return H(p().FileExists(J))};i.folderExists=function(J){return H(p().FolderExists(J))};i.getAppDataFolder=function(K){var J=s().Namespace(26).Self.Path;return K?p().BuildPath(J,K):J};i.getProgramFolder=function(K){var J=s().Namespace(38).Self.Path;return K?p().BuildPath(J,K):J};i.getExeFilename=function(){var J=F(1024);E(0,J,J.size>>1);return J.asStringW};i.getExeFolder=function(){return p().GetParentFolderName(i.getExeFilename())};i.buildPath=function(J,K){return p().BuildPath(J,K)};i.getParentFolder=function(J){return p().GetParentFolderName(J)};i.readFileUTF8=function(K){try{var M=z("ADODB.Stream");M.Open();M.Charset="utf-8";M.LoadFromFile(K);var J=M.ReadText();M.Close();return J}catch(L){return false}};i.writeFileUTF8=function(J,L){var K=z("ADODB.Stream");adSaveCreateOverWrite=2;K.Open();K.Charset="utf-8";K.WriteText(L);K.SaveToFile(J,adSaveCreateOverWrite);K.Close()};i.deleteFile=function(J,K){p().DeleteFile(J,K)};i.createFolder=function(J){if(!p().FolderExists(J)){p().CreateFolder(J)}};i.deleteFolder=function(J,K){p().DeleteFolder(J,K)};i.listFolder=function(L){var J=[];if(p().FolderExists(L)){var M=g.GetFolder(L),K=z("Enumerator",M.Files);for(;!K.atEnd();K.moveNext()){J.push(K.item())}}return J};i.browseFile=function(J,M,P,L,O,Q){var N=function(){var R=33554432,U=4096,S=2048,V=1,T=C().addLong("lStructSize").addLong(d).addLong("hInstance").add(F(512).address,"lpstrFilter").addLong("lpstrCustomFilter").addLong("nMaxCustFilter").addLong(1,"nFilterIndex").add(F(512).address,"lpstrFile").addLong("nMaxFile").addLong("lpstrFileTitle").addLong("nMaxFileTitle").add(F(512).address,"lpstrInitialDir").add(F(512).address,"lpstrTitle").addLong(R|U|S|(Q?V:0),"Flags").addShort("nFileOffset").addShort("nFileExtension").add(F(128).address,"lpstrDefExt").add(F(24));T.lStructSize=T.size;return T},K=N();if(M){K.lpstrFilter=M}if(J){K.lpstrInitialDir=J}if(P){K.lpstrTitle=P}else{K.lpstrTitle=document.title}if(L){K.lpstrDefExt=L}if(O){K.lpstrFile=O}K.nMaxFile=K.lpstrFile.size>>1;if(w(K)){return K.lpstrFile.asStringW}return false};i.browseFolder=function(L,J){try{return s().BrowseForFolder(d,L?L:document.title,0,J).Self.Path}catch(K){return false}};i.exec=function(J){G(0,0,J,0,0,1)};i.pathToUrl=function(L){var J=F(v),K=F(4,J.size>>1);if(D(L,J,K,0)>=0){return J.asStringW}return false};i.urlToPath=function(K){var L=F(512),J=F(4);if(A(K,t,0,L,L.size>>1,J,0)>=0){return L.asStringW}return false};i.isUrl=function(J){return H(r(J))};i.isFileUrl=function(J){return H(k(J,e))};i.readUrl=function(K,R){if(k(K,e)){var S=i.urlToPath(K),M=false;if(false!==S&&i.fileExists(S)){M=i.readFileUTF8(S)}if(!R){return M}if(false===M){if(R.fail){R.fail(M)}}else{if(R.ok){R.ok(M)}}}else{var O=LOCALJS.WEB_SERVICE;if(R){O.callUrl("GET",K,R)}else{var N,Q=false,L=function(T){N=1;Q=T},J=function(){N=-1};for(var P=0;P<5;++P){N=0;O.callUrl("GET",K,{ok:L,fail:J});while(0==N){if(!LOCALJS.UI.doEvents()){return false}}if(1==N){break}}return Q}}};i.buildUrl=function(L,J){var K=F(v),M=F(4,K.size>>1);if(u(L,J,K,M,c|x)>=0){return K.asStringW}return false};i.normalizeUrl=function(J){var K=document.URL.replace(/[#\?].*$/,"");if(!J){return K}return i.buildUrl(K,J)}})()})();