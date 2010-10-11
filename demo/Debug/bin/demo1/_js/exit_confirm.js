// Popup a confirm message box when window is being closed
(function()
{
	window.attachEvent("onload", function()
	{
		var chkConfirmExit = document.getElementById("chkConfirmExit");
		LOCALJS.UI.exitCallback = function()
		{
			return !chkConfirmExit.checked || LOCALJS.UI.confirm("這個確認是在 exit_confirm.js 中實現的：\n\n確定要退出？");
		}
	});
})();
