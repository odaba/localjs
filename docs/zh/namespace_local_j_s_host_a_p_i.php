<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: 包 LocalJSHostAPI</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>包 LocalJSHostAPI</h1>  </div>
</div>
<div class="contents">

<p>C functions to launch and manage LocalJS browser windows, also available to JavaScript. Detailed in <a class="el" href="group___host_a_p_i.php">LocalJS Host API</a>.  
<a href="#_details">更多...</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="func-members"></a>
函数</h2></td></tr>
<tr><td colspan="2"><div class="groupHeader">LocalJS initialization</div></td></tr>
<tr><td colspan="2"><div class="groupText"><p>Initialize and uninitialize LocalJS </p>
</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03">initializeLocalJS</a> (HINSTANCE hInst, HICON hIcon, HICON hIconSm)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Initialize LocalJS. <em>DO NOT call from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em>  <a href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5">uninitializeLocalJS</a> (void)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Uninitialize LocalJS, free resources taken. <em>DO NOT call from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em>  <a href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga7474b7f77001b41241fdadc926054645">setBrowserControlRegPath</a> (LPCSTR reg_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the default registry used by LocalJS browser window to save its own options.  <a href="group___host_a_p_i.php#ga7474b7f77001b41241fdadc926054645"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Launch LocalJS browser window</div></td></tr>
<tr><td colspan="2"><div class="groupText"><p>All these functions can be called from JavaScript through <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a>, to make it simple to launch new LocalJS browser window or close them from JavaScript </p>
</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void *__stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6">createBrowserWindow</a> (DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, VARIANT *const pVarResult)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Launch a LocalJS browser window.  <a href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void *__stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2">createIE</a> (LPCWSTR url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Launch a LocalJS standalone Internet Explorer application.  <a href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158">deleteBrowserWindow</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Free the browser window handle retuned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a>  <a href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141">detachBrowserWindow</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer application.  <a href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gaf4383b8a7a504809b0cee77f832bd27e">translateBrowserAccelerator</a> (LPMSG lpmsg)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Used in message loop of LocalJS bootstrap program, to make sure shortcut keys like Tab, Ctrl-C work on HTML page controls.  <a href="group___host_a_p_i.php#gaf4383b8a7a504809b0cee77f832bd27e"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Get information of running browser</div></td></tr>
<tr><td colspan="2"><div class="groupText"><p>All these functions can be called from JavaScript through <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a>, to make it simple to manage LocalJS browser from JavaScript </p>
</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35">browserWindowClosed</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Return <code>TRUE</code> if underlying LocalJS browser window or Internet Explorer has been closed, <code>FALSE</code> otherwise.  <a href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">HWND __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317">getBrowserHostWnd</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the HWND handle to LocalJS browser window or Internet Explorer application.  <a href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">HWND __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0">getIETabWnd</a> (void *ie)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the <code>HWND</code> handle of current browser window tab. <em>ONLY</em> apply to Internet Explorer 7 and above.  <a href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gaabaa683bb0dc2d56827f8369f594dff5">getBrowserType</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns underlying LocalJS browser window type. 1 for LocalJS browser window, 2 for LocalJS standalone Internet Explorer application.  <a href="group___host_a_p_i.php#gaabaa683bb0dc2d56827f8369f594dff5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">IDispatch *__stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806">getBrowserObj</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.  <a href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Call JavaScript functions</div></td></tr>
<tr><td colspan="2"><div class="groupText"><p>Call JavaScript function by C style function prototype </p>
</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __cdecl&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505">callJSFunction</a> (void *browser_window, const bool popup_error, VARIANT *pvarResult, LPCSTR prototype,...)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call JavaScript function by C style function prototype, passing variable number of arguments.  <a href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __cdecl&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e">callJSFunction_va_list</a> (void *browser_window, const bool popup_error, VARIANT *pvarResult, LPCSTR prototype, va_list vargs)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call JavaScript function by C style function prototype, passing variable number of arguments in one <code>va_list</code> argument.  <a href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>C functions to launch and manage LocalJS browser windows, also available to JavaScript. Detailed in <a class="el" href="group___host_a_p_i.php">LocalJS Host API</a>. </p>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
