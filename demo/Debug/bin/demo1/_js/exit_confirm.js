// Popup a confirm message box when window is being closed
(function()
{
	window.attachEvent("onload", function()
	{
		var chkConfirmExit = document.getElementById("chkConfirmExit");
		LOCALJS.UI.exitCallback = function()
		{
			return !chkConfirmExit.checked || LOCALJS.UI.confirm(LOCALJS.LOCALIZATION.get("exit_confirm_wording"));
		}
	});
})();
