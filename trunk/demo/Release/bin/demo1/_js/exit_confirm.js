(function(){window.attachEvent("onload",function(){var a=document.getElementById("chkConfirmExit");LOCALJS.UI.exitCallback=function(){return !a.checked||LOCALJS.UI.confirm("這個確認是在 exit_confirm.js 中實現的：\n\n確定要退出？")}})})();