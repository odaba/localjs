(function(){window.attachEvent("onload",function(){var d=document,a=LOCALJS.FILE.normalizeUrl("./_image/google.png"),c=$('<div style="text-align:center">當用戶點擊了頁面上的一個鏈接之後，LOCALJS.UI.newWindowCallback 會被調用。可以在該回調函數中決定是否打開此鏈接。<br/><br/><span></span><br/><br/><select><option value="0"></option><option value="1">在新窗口中打開</option><option value="2">在Internet Explorer中打開</option></select></div>'),b=$("<div>函數LOCALJS.UI.createBrowser在打開新窗口的同時，可以將一个 JavaScript 函數插入到新窗口的頁面中運行：它可以修改新頁面的內容，也可以在窗口之間實現互操作。</div>");LOCALJS.UI.newWindowCallback=function(m,o,i,f,g){if(g.toLowerCase()!="http://www.google.com.hk/"){return false}c.children("span").eq(0).text("是否要打開 "+g+" ?");c.children("select").eq(0).children("option").eq(0).text("不打開 "+g);var j=0,h=function(){var r=c.children("select").eq(0).get(0),e=r.options;for(var p=0;p<e.length;++p){var q=e[p];if(q.selected){j=q.value;break}}c.dialog("close")};c.dialog({autoOpen:false,title:d.title,modal:true,show:"fade",width:500,height:340,buttons:{Ok:h}});c.dialog("open");try{while(c.dialog("isOpen")){if(!LOCALJS.UI.doEvents()){break}}}catch(k){j=0}if(0==j){o.returnValue=true;return true}b.dialog({title:d.title,autoOpen:false,show:"slide",width:400,height:290,buttons:{OK:function(){b.dialog("close")}}});b.dialog("open");var l=function(r){var s=r.document;if(g!=s.URL){return}var e=s.getElementsByTagName("head")[0],p=s.createElement("script");p.type="text/javascript";p.src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js";e.appendChild(p);var q=function(){if(r.$){var x=r.$("#logo");if(null!=x){if(x.is("img")){x.attr("src",2==j?"http://localjs.org/demo/_image/google.png":a)}else{x.css("background","url("+a+") no-repeat");x.children("div").eq(0).text("LocalJS")}s.title="Loogle Powered By LocalJS";var t=r.localJS;if(t){t.enableF5=false;var u=t.hostWnd;if(u){var w=t.COM.createObject("DllCall"),v=12;w.add("user32.dll","LRESULT SendMessage(HWND hWnd,UINT Msg,WPARAM wParam,LPARAM lParam);");w.SendMessage(u,v,0,s.title)}}return}}r.setTimeout(q,50)};q()};var n=LOCALJS.UI.createBrowser(2==j,"about:blank",10,10,500,300,LOCALJS.UI.WS_CLOSE_ONLY,localJS.hostWnd,l);m.returnValue=n.webBrowser;return true}})})();