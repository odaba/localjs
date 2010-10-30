<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: LocalJS Host API</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>LocalJS Host API</h1>  </div>
</div>
<div class="contents">

<p>C functions to launch and manage LocalJS browser windows, also available to JavaScript. Typically, you can simply use the bootstrap program come with <a href="http://sourceforge.net/projects/localjs/files/" target="_blank">demo application</a> on site.  
<a href="#_details">更多...</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="member-group"></a>
LocalJS initialization</h2></td></tr>
<tr><td colspan="2"><p><a class="anchor" id="amgrp7ff900691d65ed08d2a584a8680f27e1"></a> Initialize and uninitialize LocalJS </p>
<br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03">initializeLocalJS</a> (HINSTANCE hInst, HICON hIcon, HICON hIconSm)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Initialize LocalJS. <em>DO NOT call from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em>  <a href="#ga2bda3d0035edca22e5fd7d3cbca3fa03"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5">uninitializeLocalJS</a> (void)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Uninitialize LocalJS, free resources taken. <em>DO NOT call from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em>  <a href="#gac45d62dc3eb89dfd8715187967f9ccd5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga7474b7f77001b41241fdadc926054645">setBrowserControlRegPath</a> (LPCSTR reg_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the default registry used by LocalJS browser window to save its own options.  <a href="#ga7474b7f77001b41241fdadc926054645"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="member-group"></a>
Launch LocalJS browser window</h2></td></tr>
<tr><td colspan="2"><p><a class="anchor" id="amgrp83ee4c5da5a0d2f08676d52f49e37892"></a> All these functions can be called from JavaScript through <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a>, to make it simple to launch new LocalJS browser window or close them from JavaScript </p>
<br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void *__stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6">createBrowserWindow</a> (DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, VARIANT *const pVarResult)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Launch a LocalJS browser window.  <a href="#ga1ca250104d8e424d1af1fae979bea9d6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void *__stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2">createIE</a> (LPCWSTR url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Launch a LocalJS standalone Internet Explorer application.  <a href="#ga392ee050a9bb4f8bc3a549498f2491c2"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158">deleteBrowserWindow</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Free the browser window handle retuned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a>  <a href="#ga314b0a2593ed6d4c12248d2068082158"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141">detachBrowserWindow</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer application.  <a href="#gac47c4be12c58fe280e658329f798c141"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gaf4383b8a7a504809b0cee77f832bd27e">translateBrowserAccelerator</a> (LPMSG lpmsg)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Used in message loop of LocalJS bootstrap program, to make sure shortcut keys like Tab, Ctrl-C work on HTML page controls.  <a href="#gaf4383b8a7a504809b0cee77f832bd27e"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="member-group"></a>
Get information of running browser</h2></td></tr>
<tr><td colspan="2"><p><a class="anchor" id="amgrp5331a66a7f8be57d6fb2c1e148498784"></a> All these functions can be called from JavaScript through <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a>, to make it simple to manage LocalJS browser from JavaScript </p>
<br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">BOOL __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35">browserWindowClosed</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Return <code>TRUE</code> if underlying LocalJS browser window or Internet Explorer has been closed, <code>FALSE</code> otherwise.  <a href="#ga2411f33e78c102a27ddd2c921ff03d35"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">HWND __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317">getBrowserHostWnd</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the HWND handle to LocalJS browser window or Internet Explorer application.  <a href="#ga8d6df87cf800c5be2e7be541b34c1317"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">HWND __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0">getIETabWnd</a> (void *ie)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the <code>HWND</code> handle of current browser window tab. <em>ONLY</em> apply to Internet Explorer 7 and above.  <a href="#ga0c446918df21860233f6543b19740ea0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int __stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gaabaa683bb0dc2d56827f8369f594dff5">getBrowserType</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns underlying LocalJS browser window type. 1 for LocalJS browser window, 2 for LocalJS standalone Internet Explorer application.  <a href="#gaabaa683bb0dc2d56827f8369f594dff5"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">IDispatch *__stdcall&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806">getBrowserObj</a> (void *browser_window)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.  <a href="#gad71e54ddf1d1fad062c95a5c9b574806"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="member-group"></a>
Call JavaScript functions</h2></td></tr>
<tr><td colspan="2"><p><a class="anchor" id="amgrp05389c451d8d3b5f4f2fd2d8b4e57fcf"></a> Call JavaScript function by C style function prototype </p>
<br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __cdecl&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505">callJSFunction</a> (void *browser_window, const bool popup_error, VARIANT *pvarResult, LPCSTR prototype,...)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call JavaScript function by C style function prototype, passing variable number of arguments.  <a href="#ga779ed3a959cb0e21f8aad4b899bdb505"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">void __cdecl&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e">callJSFunction_va_list</a> (void *browser_window, const bool popup_error, VARIANT *pvarResult, LPCSTR prototype, va_list vargs)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call JavaScript function by C style function prototype, passing variable number of arguments in one <code>va_list</code> argument.  <a href="#ga1cd8332c156b5897050189b2250dca2e"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>C functions to launch and manage LocalJS browser windows, also available to JavaScript. Typically, you can simply use the bootstrap program come with <a href="http://sourceforge.net/projects/localjs/files/" target="_blank">demo application</a> on site. </p>
<p>Except functions <a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> and <a class="el" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e" title="Call JavaScript function by C style function prototype, passing variable number of arguments in one v...">callJSFunction_va_list()</a> (which support variable number of arguments), all other functions are available to JavaScript through <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object. Typically, LocalJS bootstrap program only uses these functions to create the first LocalJS browser window, everything else can be left to JavaScript.</p>
<p>Diagram below briefy shows typical workflow of LocalJS application:</p>
<div align="center">
<img src="overview.png" alt="overview.png"/>
<p><strong>LocalJS Workflow Overview</strong></p></div>
<p> Pseudo code illustrating the workflow above:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS</a>();

    <span class="comment">// create main browser window:</span>
    <span class="keywordtype">void</span> * main_browser_window = <a class="code" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow</a>();
    <span class="comment">// Code flow transferred to JavaScript</span>

    <span class="comment">// JavaScript can call createBrowserWindow() to create more browser windows</span>
    <span class="comment">// ...</span>
    <span class="comment">// Before main browser window exits, JavaScript calls deleteBrowserWindow() to free browser window created by JavaScript</span>

    <span class="comment">// Code flow transferred back to bootstrap program</span>
    <a class="code" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow</a>(main_browser_window);

    <a class="code" href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5" title="Uninitialize LocalJS, free resources taken. DO NOT call from DllMain.">uninitializeLocalJS</a>();
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>A typical LocalJS bootstrap program is provided along with source along with <a href="http://sourceforge.net/projects/localjs/files/" target="_blank">demo application</a> on site. </dd></dl>
<hr/><h2>函数文档</h2>
<a class="anchor" id="ga2bda3d0035edca22e5fd7d3cbca3fa03"></a><!-- doxytag: member="LocalJSHostAPI::initializeLocalJS" ref="ga2bda3d0035edca22e5fd7d3cbca3fa03" args="(HINSTANCE hInst, HICON hIcon, HICON hIconSm)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">BOOL __stdcall initializeLocalJS </td>
          <td>(</td>
          <td class="paramtype">HINSTANCE&#160;</td>
          <td class="paramname"> <em>hInst</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">HICON&#160;</td>
          <td class="paramname"> <em>hIcon</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">HICON&#160;</td>
          <td class="paramname"> <em>hIconSm</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Initialize LocalJS. <em>DO NOT call from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em> </p>
<p>Function <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> should be called <em>before</em> any other LocalJS functions get called.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">hInst</td><td>A handle to the current instance of the application. Typically it's the <code>HINSTANCE</code> <code>hInstance</code> parameter passed to <a href="http://msdn.microsoft.com/en-us/library/ms633559(VS.85).aspx" target="_blank">WinMain Function</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">hIcon</td><td>Handle to the icon for browser window. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">hIconSm</td><td>Handle to the small icon for browser window. Can be same as <em>hIcon</em>.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>TRUE for successfully initialized, FALSE otherwise.</dd></dl>
<dl class="attention"><dt><b>注意:</b></dt><dd><em>DO NOT call <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em> Function <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> calls <a href="http://msdn.microsoft.com/en-us/library/ms678543(VS.85).aspx" target="_blank">CoInitialize Function</a> and <a href="http://msdn.microsoft.com/en-us/library/ms686615(VS.85).aspx" target="_blank">CoCreateInstance Function</a>, which should not be called in <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a> according to MSDN.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5" title="Uninitialize LocalJS, free resources taken. DO NOT call from DllMain.">uninitializeLocalJS()</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633559(VS.85).aspx" target="_blank">WinMain Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain Callback Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="gac45d62dc3eb89dfd8715187967f9ccd5"></a><!-- doxytag: member="LocalJSHostAPI::uninitializeLocalJS" ref="gac45d62dc3eb89dfd8715187967f9ccd5" args="(void)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">BOOL __stdcall uninitializeLocalJS </td>
          <td>(</td>
          <td class="paramtype">void&#160;</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Uninitialize LocalJS, free resources taken. <em>DO NOT call from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em> </p>
<p>Function <a class="el" href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5" title="Uninitialize LocalJS, free resources taken. DO NOT call from DllMain.">uninitializeLocalJS()</a> should be called <em>after</em> any other LocalJS functions get called.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>TRUE for successfully uninitialized, FALSE otherwise.</dd></dl>
<dl class="attention"><dt><b>注意:</b></dt><dd><em>DO NOT call <a class="el" href="group___host_a_p_i.php#gac45d62dc3eb89dfd8715187967f9ccd5" title="Uninitialize LocalJS, free resources taken. DO NOT call from DllMain.">uninitializeLocalJS()</a> from <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a>.</em> Function <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> calls <a href="http://msdn.microsoft.com/en-us/library/ms688715(VS.85).aspx" target="_blank">CoUninitialize Function</a>, which should not be called in <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain</a> according to MSDN.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> | <a href="http://msdn.microsoft.com/en-us/library/ms682583(VS.85).aspx" target="_blank">DllMain Callback Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga7474b7f77001b41241fdadc926054645"></a><!-- doxytag: member="LocalJSHostAPI::setBrowserControlRegPath" ref="ga7474b7f77001b41241fdadc926054645" args="(LPCSTR reg_path)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void __stdcall setBrowserControlRegPath </td>
          <td>(</td>
          <td class="paramtype">LPCSTR&#160;</td>
          <td class="paramname"> <em>reg_path</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Change the default registry used by LocalJS browser window to save its own options. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>The new registry path</td></tr>
  </table>
  </dd>
</dl>
<p>Calling this function is optional. You can ignore this function if you don't need to change it.</p>
<p>LocalJS browser window (launched by function <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a>) will not load any plugin or BHO(Browser Helper Object) objects installed to system and loaded by standalone Internet Explorer application. It uses a different registry entry to save browser settings like home page, fonts, etc.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>LocalJS standalone Internet Explorer application (launched by function <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a>) doesn't use this registry entry and will load BHO objects and plugins as a normal Internet Explorer application does.</dd></dl>
<p>The default registry entry used by LocalJS browser window is HKEY_CURRENT_USER\Software\LocalJS\WebBrowser. You can change the path by passing another path style string like:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="group___host_a_p_i.php#ga7474b7f77001b41241fdadc926054645" title="Change the default registry used by LocalJS browser window to save its own options.">setBrowserControlRegPath</a>(<span class="stringliteral">&quot;Software\\YourProduct\\YourName&quot;</span>);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd><ul>
<li>The root path HKEY_CURRENT_USER cannot be changed. </li>
<li>The default registry entry will be created automatically by LocalJS. </li>
<li>If you changed the registry entry, please make sure the new entry exists in system registry. </li>
</ul>
</dd></dl>

</div>
</div>
<a class="anchor" id="ga1ca250104d8e424d1af1fae979bea9d6"></a><!-- doxytag: member="LocalJSHostAPI::createBrowserWindow" ref="ga1ca250104d8e424d1af1fae979bea9d6" args="(DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, VARIANT *const pVarResult)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void *__stdcall createBrowserWindow </td>
          <td>(</td>
          <td class="paramtype">DWORD&#160;</td>
          <td class="paramname"> <em>dwStyle</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>x</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>y</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>nWidth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>nHeight</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">HWND&#160;</td>
          <td class="paramname"> <em>hWndParent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">LPCWSTR&#160;</td>
          <td class="paramname"> <em>url</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">VARIANT *const &#160;</td>
          <td class="paramname"> <em>pVarResult</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Launch a LocalJS browser window. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">dwStyle</td><td>The window style of the browser window. Refer to <a href="http://msdn.microsoft.com/en-us/library/ms632600(VS.85).aspx" target="_blank">Window Styles</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">x</td><td>The initial horizontal position of the window. Refer to parameter <em>x</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">y</td><td>The initial vertical position of the window. Refer to parameter <em>y</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">nWidth</td><td>The width, in device units, of the window. Refer to parameter <em>nWidth</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">nHeight</td><td>The height, in device units, of the window. Refer to parameter <em>nHeight</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">hWndParent</td><td>A handle to the parent or owner window of the window being created. Refer to parameter <em>hWndParent</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The initial url the browser navigates to. If <em>url</em> is NULL, the browser doesn't navigate to anywhere. </td></tr>
    <tr><td class="paramdir">[out]</td><td class="paramname">pVarResult</td><td>Receive the parameter <em>result</em> passed to JavaScript method <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a>. Can be NULL to ignore the <em>result</em>.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>A handle to the LocalJS browser window created. Note that it's a handle private to LocalJS, not Windows HWND handle to the browser window. The handle <em>MUST</em> be passed to <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> to be freed.</dd></dl>
<p>Code below launches a LocalJS browser window:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordtype">void</span> * hLocalJSBrowserWindow = <a class="code" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">LocalJS::createBrowserWindow</a>(WS_POPUP | WS_VISIBLE, 100, 100, 300, 200, NULL, L<span class="stringliteral">&quot;http://localJS.org/&quot;</span>, NULL);
</pre></div><p><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> can be called from JavaScript to create another LocalJS browser window:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&#39;DllCall&#39;</span>);
    dllCall.add(<span class="stringliteral">&quot;LocalJS.dll&quot;</span>, <span class="stringliteral">&quot;void * __stdcall createBrowserWindow(DWORD dwStyle, int x, int y, int nWidth, int nHeight, HWND hWndParent, LPCWSTR url, VARIANT * const pVarResult);&quot;</span>);

    var WS_POPUP = 0x80000000, <span class="comment">// Refer to window styles in MSDN</span>
        WS_VISIBLE = 0x10000000;

    var browser_window = dllCall.createBrowserWindow(WS_POPUP | WS_VISIBLE, 100, 100, 300, 200, 0, <span class="stringliteral">&quot;http://www.localJS.org/&quot;</span>, 0);
</pre></div><p>To get the WebBrowser object of the new LocalJS browser window, call <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a>:</p>
<div class="fragment"><pre class="fragment">    dllCall.add(<span class="stringliteral">&quot;LocalJS.dll&quot;</span>, <span class="stringliteral">&quot;IDispatch * __stdcall getBrowserObj(void * browser_window);&quot;</span>);
    var browser_obj = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a9742cc74cdf0445008d4adb2adbaa0d3" title="Convert a raw IDispatch * pointer to an object usable in JavaScript.">interface2Object</a>(dllCall.getBrowserObj(browser_window));

    <span class="comment">// To navigate the new LocalJS browser window with WebBrowser object:</span>
    browser_obj.Navigate2(<span class="stringliteral">&quot;http://www.google.com/&quot;</span>);
</pre></div><p>To access the <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">JavaScript Window object</a> of the new LocalJS browser window:</p>
<div class="fragment"><pre class="fragment">    var new_window = browser_obj.Document.parentWindow;
</pre></div><p>Next, to access <em>global</em> JavaScript functions and variables in the new LocalJS browser window page:</p>
<div class="fragment"><pre class="fragment">    var new_window_func = new_window.function_name; <span class="comment">// assuming function_name is a global function name in the new page</span>
    var new_window_variable = new_window.variable_name; <span class="comment">// assuming variable_name is a global variable name in the new page</span>
</pre></div><p>Now JavaScript in the creating page has access to JavaScript functions and variables in the new created browser window page, the two pages then can call each other back and forth as they co-exist in same page!</p>
<p>Finally, don't forget to delete the browser window handle with <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a>:</p>
<div class="fragment"><pre class="fragment">    dllCall.add(<span class="stringliteral">&quot;LocalJS.dll&quot;</span>, <span class="stringliteral">&quot;void __stdcall deleteBrowserWindow(void * browser_window)&quot;</span>);
    dllCall.deleteBrowserWindow(browser_window);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>It's not necessary to calculate the window position and window style in <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a>. Both position and window style can be changed in JavaScript by call Windows API functions <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow</a>, <a href="http://msdn.microsoft.com/en-us/library/ms633545(VS.85).aspx" target="_blank">SetWindowPos</a> and <a href="http://msdn.microsoft.com/en-us/library/ms633591(VS.85).aspx" target="_blank">SetWindowLong</a>. Refer to <a class="el" href="interfacelocal_j_s.php#a3566d4b69cb659d2e22501a77bc5af32" title="ReadOnly. Returns the height of the bottom localJS bar in pixels.">localJS.btmBarHeight</a> for an example.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> | <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> | <a class="el" href="interface_c_o_m.php#a9742cc74cdf0445008d4adb2adbaa0d3" title="Convert a raw IDispatch * pointer to an object usable in JavaScript.">COM.interface2Object</a> | <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> | <a class="el" href="interfacelocal_j_s.php#a3566d4b69cb659d2e22501a77bc5af32" title="ReadOnly. Returns the height of the bottom localJS bar in pixels.">localJS.btmBarHeight</a> | <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">JavaScript Window object</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633545(VS.85).aspx" target="_blank">SetWindowPos</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633591(VS.85).aspx" target="_blank">SetWindowLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga392ee050a9bb4f8bc3a549498f2491c2"></a><!-- doxytag: member="LocalJSHostAPI::createIE" ref="ga392ee050a9bb4f8bc3a549498f2491c2" args="(LPCWSTR url)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void *__stdcall createIE </td>
          <td>(</td>
          <td class="paramtype">LPCWSTR&#160;</td>
          <td class="paramname"> <em>url</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Launch a LocalJS standalone Internet Explorer application. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The initial url Internet Explorer navigates to. If <em>url</em> is NULL, Internet Explorer goes to it's home page.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>A handle to the Internet Explorer created. The handle <em>MUST</em> be passed to <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> to be freed.</dd></dl>
<p>Code below launches a LocalJS standalone Internet Explorer:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordtype">void</span> * hLocalJSIE = <a class="code" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">LocalJS::createIE</a>(L<span class="stringliteral">&quot;http://www.localJS.org/&quot;</span>);
</pre></div><p><a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> can be called from JavaScript:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&#39;DllCall&#39;</span>);
    dllCall(<span class="stringliteral">&quot;LocalJS.dll&quot;</span>, <span class="stringliteral">&quot;void * __stdcall createIE(LPCWSTR url);&quot;</span>);
    var browser_window = dllCall.createIE(<span class="stringliteral">&quot;http://www.localJS.org/&quot;</span>);
</pre></div><p>Although the position where the Internet Explorer application window initially appear cannot be specified, the window can be moved in JavaScript when HTML page is loaded:</p>
<div class="fragment"><pre class="fragment">    window.attachEvent(<span class="stringliteral">&quot;onload&quot;</span>, function()
    {
        dllCall.add(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;BOOL MoveWindow(HWND hWnd,int X,int Y,int nWidth,int nHeight,BOOL bRepaint);&quot;</span>);
        dllCall.add(<span class="stringliteral">&quot;LocalJS.dll&quot;</span>, <span class="stringliteral">&quot;HWND __stdcall getBrowserHostWnd(void * browser_window);&quot;</span>);
        dllCall.MoveWindow(dllCall.getBrowserHostWnd(browser_window), 50, 50, 300, 200, 1);
    }
</pre></div><p>With the browser window handle returned by createIE, all example code using the browser window handle in section <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> work in the same way. Although the standalone Internet Explorer application is in a separated process from LocalJS browser windows, the JavaScript running in LocalJS Internet Explorer can still interop with JavaScript running in LocalJS browser window.</p>
<p>The handle retuned by <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> <em>MUST</em> be freed by <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a>.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Since LocalJS standalone Internet Explorer application is in a separated process from LocalJS bootstrap program, following LocalJS properties and methods behave differently for LocalJS Internet Explorer application: <ul>
<li><a class="el" href="interfacelocal_j_s.php#a29a79e553fe87184f3a6ed6a9e0b270f" title="Get or set a boolean value to control whether pressing F5 key reloads HTML page. Ignored by standalon...">localJS.enableF5</a> cannot disable F5 key press for LocalJS Internet Explorer </li>
<li><a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> is not available for LocalJS Internet Explorer </li>
<li><a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> object cannot hook window message of LocalJS Internet Explorer window</li>
</ul>
</dd>
<dd>
Some browsers replace system object "InternetExplorer.Application" with their own browser object. In this case, <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> will launch their browser.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a> | <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> | <a class="el" href="interfacelocal_j_s.php#a29a79e553fe87184f3a6ed6a9e0b270f" title="Get or set a boolean value to control whether pressing F5 key reloads HTML page. Ignored by standalon...">localJS.enableF5</a> | <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> | <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga314b0a2593ed6d4c12248d2068082158"></a><!-- doxytag: member="LocalJSHostAPI::deleteBrowserWindow" ref="ga314b0a2593ed6d4c12248d2068082158" args="(void *browser_window)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void __stdcall deleteBrowserWindow </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Free the browser window handle retuned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> </p>
<p>Call this function will close the underlying LocalJS browser window or terminate LocalJS standalone Internet Explorer application, unless <a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141" title="Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer appl...">detachBrowserWindow()</a> has been called on the browser window handle.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle to be freed, retuned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> | <a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141" title="Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer appl...">detachBrowserWindow()</a> </dd></dl>

</div>
</div>
<a class="anchor" id="gac47c4be12c58fe280e658329f798c141"></a><!-- doxytag: member="LocalJSHostAPI::detachBrowserWindow" ref="gac47c4be12c58fe280e658329f798c141" args="(void *browser_window)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void __stdcall detachBrowserWindow </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer application. </p>
<p>After <a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141" title="Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer appl...">detachBrowserWindow()</a> is called, call <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> on the same browser window handle won't close the LocalJS browser window nor terminate LocalJS standalone Internet Explorer application. Function <a class="el" href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35" title="Return TRUE if underlying LocalJS browser window or Internet Explorer has been closed, FALSE otherwise.">browserWindowClosed()</a> returns 1 on the detached browser window handle. Functions <a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a>, <a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0" title="Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 and above...">getIETabWnd()</a>, <a class="el" href="group___host_a_p_i.php#gaabaa683bb0dc2d56827f8369f594dff5" title="Returns underlying LocalJS browser window type. 1 for LocalJS browser window, 2 for LocalJS standalon...">getBrowserType()</a> and <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> return 0 on the detached browser window handle.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle to be detached, retuned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<p>It's OK to call <a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141" title="Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer appl...">detachBrowserWindow()</a> more than once on same browser window handle.</p>
<dl class="attention"><dt><b>注意:</b></dt><dd>The browser window handle passed to <a class="el" href="group___host_a_p_i.php#gac47c4be12c58fe280e658329f798c141" title="Detach the browser window handle from the underlying LocalJS browser window or Internet Explorer appl...">detachBrowserWindow()</a> still need to be freed by <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a>.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> | <a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35" title="Return TRUE if underlying LocalJS browser window or Internet Explorer has been closed, FALSE otherwise.">browserWindowClosed()</a> | <a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a> | <a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0" title="Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 and above...">getIETabWnd()</a> | <a class="el" href="group___host_a_p_i.php#gaabaa683bb0dc2d56827f8369f594dff5" title="Returns underlying LocalJS browser window type. 1 for LocalJS browser window, 2 for LocalJS standalon...">getBrowserType()</a> | <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> </dd></dl>

</div>
</div>
<a class="anchor" id="gaf4383b8a7a504809b0cee77f832bd27e"></a><!-- doxytag: member="LocalJSHostAPI::translateBrowserAccelerator" ref="gaf4383b8a7a504809b0cee77f832bd27e" args="(LPMSG lpmsg)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">BOOL __stdcall translateBrowserAccelerator </td>
          <td>(</td>
          <td class="paramtype">LPMSG&#160;</td>
          <td class="paramname"> <em>lpmsg</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Used in message loop of LocalJS bootstrap program, to make sure shortcut keys like Tab, Ctrl-C work on HTML page controls. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in,out]</td><td class="paramname">lpmsg</td><td>Pointer to a <a href="http://msdn.microsoft.com/en-us/library/ms644958(VS.85).aspx" target="_blank">MSG Structure</a> passed to <a href="http://msdn.microsoft.com/en-us/library/ms644936(VS.85).aspx" target="_blank">GetMessage Function</a>.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>TRUE</code> if the message has been translated to other messages, <code>FALSE</code> otherwise.</dd></dl>
<p>Sample message loop using <a class="el" href="group___host_a_p_i.php#gaf4383b8a7a504809b0cee77f832bd27e" title="Used in message loop of LocalJS bootstrap program, to make sure shortcut keys like Tab...">translateBrowserAccelerator()</a>:</p>
<div class="fragment"><pre class="fragment">    BOOL bRet;
    <span class="keywordflow">while</span>( (bRet = GetMessage(&amp;msg, hWnd, 0, 0 )) != 0)
    {
        <span class="keywordflow">if</span> (bRet == -1)
        {
            <span class="comment">// handle the error and possibly exit</span>
        }
        <span class="keywordflow">else</span>
        {
            <span class="keywordflow">if</span> (!<a class="code" href="group___host_a_p_i.php#gaf4383b8a7a504809b0cee77f832bd27e" title="Used in message loop of LocalJS bootstrap program, to make sure shortcut keys like Tab...">LocalJS::translateBrowserAccelerator</a>(&amp;msg))
            {
                TranslateMessage(&amp;msg);
                DispatchMessage(&amp;msg);
            }
        }
    }
</pre></div><p>Refer to <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a> for an example using <a class="el" href="group___host_a_p_i.php#gaf4383b8a7a504809b0cee77f832bd27e" title="Used in message loop of LocalJS bootstrap program, to make sure shortcut keys like Tab...">translateBrowserAccelerator()</a> in JavaScript function <code>doEvents</code>.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a> | <a href="http://msdn.microsoft.com/en-us/library/ms644958(VS.85).aspx" target="_blank">MSG Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms644936(VS.85).aspx" target="_blank">GetMessage Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga2411f33e78c102a27ddd2c921ff03d35"></a><!-- doxytag: member="LocalJSHostAPI::browserWindowClosed" ref="ga2411f33e78c102a27ddd2c921ff03d35" args="(void *browser_window)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">BOOL __stdcall browserWindowClosed </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Return <code>TRUE</code> if underlying LocalJS browser window or Internet Explorer has been closed, <code>FALSE</code> otherwise. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle returned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>TRUE</code> if the underlying LocalJS browser window or Internet Explorer has been closed, <code>FALSE</code> otherwise</dd></dl>
<p>Function <a class="el" href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35" title="Return TRUE if underlying LocalJS browser window or Internet Explorer has been closed, FALSE otherwise.">browserWindowClosed()</a> can be used to reuse opening browser window:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordtype">bool</span> function goto_url(LPCWSTR url)
    {
        <span class="keywordflow">if</span> (<a class="code" href="group___host_a_p_i.php#ga2411f33e78c102a27ddd2c921ff03d35" title="Return TRUE if underlying LocalJS browser window or Internet Explorer has been closed, FALSE otherwise.">LocalJS::browserWindowClosed</a>(browser_window))
        {
            <a class="code" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">LocalJS::deleteBrowserWindow</a>(browser_window);
            browser = <a class="code" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">LocalJS::createBrowserWindow</a>(WS_POPUP | WS_VISIBLE, 100, 100, 300, 200, NULL, url, NULL);
            <span class="keywordflow">return</span> <span class="keyword">true</span>;
        }
        <span class="keywordflow">else</span>
        {
            <span class="comment">// navigate existing browser to the url</span>
            IDispatch * pdisp_browser = <a class="code" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">LocalJS::getBrowserObj</a>(browser_window);
            <span class="keywordflow">if</span> (!pdisp_browser)
                <span class="keywordflow">return</span> <span class="keyword">false</span>;

            CComQIPtr&lt;IWebBrowser2&gt; pweb_browser(pdisp_browser);
            pdisp_browser-&gt;Release();

            <span class="keywordflow">if</span> (!pweb_browser)
                <span class="keywordflow">return</span> <span class="keyword">false</span>;

            CComVariant flags(0);
            CComVariant target(_T(<span class="stringliteral">&quot;_self&quot;</span>));
            CComVariant postData;
            CComVariant headers;
            <span class="keywordflow">return</span> SUCCEEDED(pweb_browser-&gt;Navigate(CComBSTR(url), &amp;flags, &amp;target, &amp;postData, &amp;headers));
        }
    }
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga314b0a2593ed6d4c12248d2068082158" title="Free the browser window handle retuned by createBrowserWindow() or createIE()">deleteBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> | <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga8d6df87cf800c5be2e7be541b34c1317"></a><!-- doxytag: member="LocalJSHostAPI::getBrowserHostWnd" ref="ga8d6df87cf800c5be2e7be541b34c1317" args="(void *browser_window)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWND __stdcall getBrowserHostWnd </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the HWND handle to LocalJS browser window or Internet Explorer application. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle returned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <code>HWND</code> handle of current browser window. For Internet Explorer 7 and above, it's the main window of the Internet Explorer application, not the tab window of the page. Returns zero for detached browser window handle.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a> returns same value as <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a>.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>Some browsers replace system object "InternetExplorer.Application" with their own browser object. In this case, <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> will launch their browser and <a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a> may return NULL.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> | <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga0c446918df21860233f6543b19740ea0"></a><!-- doxytag: member="LocalJSHostAPI::getIETabWnd" ref="ga0c446918df21860233f6543b19740ea0" args="(void *ie)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">HWND __stdcall getIETabWnd </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>ie</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the <code>HWND</code> handle of current browser window tab. <em>ONLY</em> apply to Internet Explorer 7 and above. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">ie</td><td>handle returned by <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <code>HWND</code> handle of current browser window tab. Returns zero for detached browser window handle. <em>ONLY</em> apply to Internet Explorer 7 and above.</dd></dl>
<p>Compared to <a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a>, which returns <code>HWND</code> to the main window of the Internet Explorer application, <a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0" title="Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 and above...">getIETabWnd()</a> returns <code>HWND</code> to the tab window of the page.</p>
<dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0" title="Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 and above...">getIETabWnd()</a> returns same value as <a class="el" href="interfacelocal_j_s.php#a231aa00f34826cb7baf3d21ca25cc2cc" title="ReadOnly. Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 an...">localJS.IETabWnd</a>.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>Some browsers replace system object "InternetExplorer.Application" with their own browser object. In this case, <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> will launch their browser and <a class="el" href="group___host_a_p_i.php#ga0c446918df21860233f6543b19740ea0" title="Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 and above...">getIETabWnd()</a> may return NULL.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> | <a class="el" href="group___host_a_p_i.php#ga8d6df87cf800c5be2e7be541b34c1317" title="Returns the HWND handle to LocalJS browser window or Internet Explorer application.">getBrowserHostWnd()</a> | <a class="el" href="interfacelocal_j_s.php#a231aa00f34826cb7baf3d21ca25cc2cc" title="ReadOnly. Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 an...">localJS.IETabWnd</a> </dd></dl>

</div>
</div>
<a class="anchor" id="gaabaa683bb0dc2d56827f8369f594dff5"></a><!-- doxytag: member="LocalJSHostAPI::getBrowserType" ref="gaabaa683bb0dc2d56827f8369f594dff5" args="(void *browser_window)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int __stdcall getBrowserType </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns underlying LocalJS browser window type. 1 for LocalJS browser window, 2 for LocalJS standalone Internet Explorer application. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle returned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The underlying LocalJS browser window type. <ul>
<li>1 for LocalJS browser window </li>
<li>2 for LocalJS standalone Internet Explorer application </li>
<li>0 for detached browser window handle </li>
</ul>
</dd></dl>

</div>
</div>
<a class="anchor" id="gad71e54ddf1d1fad062c95a5c9b574806"></a><!-- doxytag: member="LocalJSHostAPI::getBrowserObj" ref="gad71e54ddf1d1fad062c95a5c9b574806" args="(void *browser_window)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">IDispatch *__stdcall getBrowserObj </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle returned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a></td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The WebBrowser object of underlying LocalJS browser window or Internet Explorer. NULL for detached browser window handle.</dd></dl>
<p>The return value of <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> can be directly passed to <a class="el" href="interface_c_o_m.php#a9742cc74cdf0445008d4adb2adbaa0d3" title="Convert a raw IDispatch * pointer to an object usable in JavaScript.">COM.interface2Object</a> to make the WebBrowser object available in JavaScript. Refer to <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> for an example.</p>
<dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> calls <a href="http://msdn.microsoft.com/en-us/library/ms691379(VS.85).aspx" target="_blank">AddRef</a> on the returned IDispatch * pointer.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="interface_c_o_m.php#a9742cc74cdf0445008d4adb2adbaa0d3" title="Convert a raw IDispatch * pointer to an object usable in JavaScript.">COM.interface2Object</a> | <a href="http://msdn.microsoft.com/en-us/library/ms691379(VS.85).aspx" target="_blank">AddRef</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga779ed3a959cb0e21f8aad4b899bdb505"></a><!-- doxytag: member="LocalJSHostAPI::callJSFunction" ref="ga779ed3a959cb0e21f8aad4b899bdb505" args="(void *browser_window, const bool popup_error, VARIANT *pvarResult, LPCSTR prototype,...)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void __cdecl callJSFunction </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const bool&#160;</td>
          <td class="paramname"> <em>popup_error</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">VARIANT *&#160;</td>
          <td class="paramname"> <em>pvarResult</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">LPCSTR&#160;</td>
          <td class="paramname"> <em>prototype</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">&#160;</td>
          <td class="paramname"> <em>...</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Call JavaScript function by C style function prototype, passing variable number of arguments. </p>
<p>Function <a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> enables C++ code call JavaScript in specified browser window by C style function prototype, and get the return value of JavaScript function. Any errors in the process can be optionally popped up as message box, useful for debugging.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">browser_window</td><td>Browser window handle returned by <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">popup_error</td><td>If <code>true</code>, any error will be popped up in message box; if <code>false</code>, no message pop up. Set it to true for debug. </td></tr>
    <tr><td class="paramdir">[out]</td><td class="paramname">pvarResult</td><td>If not NULL, will receive the return result of JavaScript function. Can be set to NULL to ignore the return result. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">prototype</td><td>C style function prototype string. See discussion below for detail. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">...</td><td>Variable number of arguments, interpreted by parameter <em>prototype</em>. See discussion below for detail.</td></tr>
  </table>
  </dd>
</dl>
<h3>Example code</h3>
<p>Assuming we have JavaScript function defined as:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// funcCalledByCPP is a global variable</span>
    funcCalledByCPP = function(lval, str, obj)
    {
        lval.returnValue = 20;
        str.returnValue = <span class="stringliteral">&quot;String passed from Script&quot;</span>;
        obj.returnValue = function ()
        {
            <span class="keywordflow">return</span> str + <span class="stringliteral">&quot; &quot;</span> + lval;
        };

        <span class="keywordflow">return</span> 5;
    };
</pre></div><p>In C++ code, the JavaScript function <code>funcCalledByCPP</code> is called as below:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordtype">void</span> * browser_window = lpPara; <span class="comment">// Assume lpPara is passed from calling function</span>

    <span class="comment">// Prepare variables</span>
    <span class="keywordtype">long</span> lval = 10;
    WCHAR wstr[256];
    wcscpy(wstr, L<span class="stringliteral">&quot;String passed from DLL&quot;</span>);
    IDispatch * pdisp = NULL;

    <span class="comment">// call JavaScript function</span>
    VARIANT vres;
    VariantInit(&amp;vres);
    <a class="code" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">LocalJS::callJSFunction</a>(browser_window, <span class="keyword">true</span>, &amp;vres, <span class="stringliteral">&quot;void funcCalledByCPP(long * plval, LPWSTR str, IDispatch ** obj)&quot;</span>, &amp;lval, wstr, &amp;pdisp);
</pre></div><p>After <a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> returns, check the variables:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// display parameters changed by JavaScript function</span>
    WCHAR info[2048];
    swprintf(info, L<span class="stringliteral">&quot;The JS function returns %d\nThe value received from JS function is %d\nThe string received from JS function is:\n\t%s&quot;</span>, vres.lVal, lval, wstr);
    MessageBoxW(NULL, info, L<span class="stringliteral">&quot;TEST&quot;</span>, MB_SETFOREGROUND | MB_TOPMOST | MB_TASKMODAL | MB_ICONINFORMATION);

    VariantClear(&amp;vres);
</pre></div><p>The returned <code>IDispatch * pdisp</code> can be invoked too:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordflow">if</span> (pdisp)
    {
        VARIANT vResult;
        VariantInit(&amp;vResult);

        DISPPARAMS disp_params = {NULL, NULL, 0, 0};
        pdisp-&gt;Invoke(DISPID_VALUE, IID_NULL, LOCALE_USER_DEFAULT, DISPATCH_METHOD, &amp;disp_params, &amp;vResult, NULL, NULL);

        <span class="comment">// vResult now holds string &quot;String passed from Script 20&quot;</span>
        VariantClear(&amp;vResult);
    }
</pre></div><h3>Detail of function prototype</h3>
<p>Function prototype in <a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> is a C style function prototype following rules below:</p>
<ul>
<li>
Declaration of function return type in prototype is ignored. </li>
<li>
Parameter names are optional. </li>
<li>
Parameter types can <em>ONLY</em> be chosen from table below: <br/>
 <br/>
 <table class="doxtable">
<tr>
<td><b>Type</b></td><td><b>Explaination</b> </td></tr>
<tr>
<td><code>LPSTR</code> </td><td>A ANSI / Multi-bytes string, can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>LPWSTR</code> </td><td>A wide / unicode string, can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>char</code> </td><td>A single signed byte </td></tr>
<tr>
<td><code>char *</code></td><td>pointer to a signed char variable whose value can be changed by JavaScript function using <code>para.returnValue</code>. <br/>
 <em>To pass ANSI string, use <code>LPSTR</em></code> </td></tr>
<tr>
<td><code>unsigned char</code></td><td>A single unsigned byte </td></tr>
<tr>
<td><code>unsigned char *</code></td><td>Pointer to a signed unsigned char variable whose value can be changed by JavaScript function using <code>para.returnValue</code>. <br/>
 <em>To pass ANSI string, use <code>LPSTR</em></code> </td></tr>
<tr>
<td><code>short</code> </td><td>A signed 2 bytes integer </td></tr>
<tr>
<td><code>short *</code></td><td>Pointer to a short variable whose value can be changed by JavaScript function using <code>para.returnValue</code>. <br/>
 <em>To pass wide/unicode string, use <code>LPWSTR</em></code> </td></tr>
<tr>
<td><code>unsigned short</code></td><td>An unsigned 2 bytes integer </td></tr>
<tr>
<td><code>unsigned short *</code></td><td>Pointer to an unsigned short variable whose value can be changed by JavaScript function using <code>para.returnValue</code>. <br/>
 <em>To pass wide/unicode string, use <code>LPWSTR</em></code> </td></tr>
<tr>
<td><code>long</code> </td><td>A signed 4 bytes integer </td></tr>
<tr>
<td><code>long *</code></td><td>Pointer to a long variable whose value can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>unsigned long</code></td><td>An unsigned 4 bytes integer </td></tr>
<tr>
<td><code>unsigned long *</code></td><td>Pointer to a unsigned long variable whose value can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>__int64</code> </td><td>A signed 8 bytes integer </td></tr>
<tr>
<td><code>__int64 *</code></td><td>Pointer to a __int64 variable whose value can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>unsigned <code>__int64</code></code> </td><td>An unsigned 8 bytes integer </td></tr>
<tr>
<td><code>unsigned <code>__int64</code> *</code></td><td>Pointer to an unsigned __int64 variable whose value can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>float</code> </td><td>A float variable </td></tr>
<tr>
<td><code>float *</code></td><td>Pointer to a float variable whose value can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>double</code> </td><td>A double variable </td></tr>
<tr>
<td><code>double *</code></td><td>Pointer to an double variable whose value can be changed by JavaScript function using <code>para.returnValue</code> </td></tr>
<tr>
<td><code>IDispatch *</code></td><td>An pointer of IDispatch * </td></tr>
<tr>
<td><code>IDispatch **</code></td><td>An pointer of IDispatch **, can be used to returned an IDispatch * by JavaScript function using <code>para.returnValue</code> </td></tr>
</table>
</li>
</ul>
<dl class="attention"><dt><b>注意:</b></dt><dd><ul>
<li>
The number and type of parameters following parameter <em>prototype</em> <em>MUST</em> match the number and types described in parameter <em>prototype</em>. </li>
<li>
The JavaScript function name <em>MUST</em> be global, or the variable holding the function <em>MUST</em> be a global variable. </li>
</ul>
</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> internally calls <a class="el" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e" title="Call JavaScript function by C style function prototype, passing variable number of arguments in one v...">callJSFunction_va_list()</a> for implementation:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="keywordtype">void</span> __cdecl <a class="code" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction</a>(<span class="keywordtype">void</span> * browser_window, <span class="keyword">const</span> <span class="keywordtype">bool</span> popup_error, VARIANT * pvarResult, LPCSTR prototype, ...)
    {
        va_list args;
        va_start(args, prototype);
        <a class="code" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e" title="Call JavaScript function by C style function prototype, passing variable number of arguments in one v...">callJSFunction_va_list</a>(browser_window, popup_error, pvarResult, prototype, args);
        va_end(args);
        <span class="keywordflow">return</span>;
    }
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e" title="Call JavaScript function by C style function prototype, passing variable number of arguments in one v...">callJSFunction_va_list()</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ga1cd8332c156b5897050189b2250dca2e"></a><!-- doxytag: member="LocalJSHostAPI::callJSFunction_va_list" ref="ga1cd8332c156b5897050189b2250dca2e" args="(void *browser_window, const bool popup_error, VARIANT *pvarResult, LPCSTR prototype, va_list vargs)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void __cdecl callJSFunction_va_list </td>
          <td>(</td>
          <td class="paramtype">void *&#160;</td>
          <td class="paramname"> <em>browser_window</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const bool&#160;</td>
          <td class="paramname"> <em>popup_error</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">VARIANT *&#160;</td>
          <td class="paramname"> <em>pvarResult</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">LPCSTR&#160;</td>
          <td class="paramname"> <em>prototype</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">va_list&#160;</td>
          <td class="paramname"> <em>vargs</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Call JavaScript function by C style function prototype, passing variable number of arguments in one <code>va_list</code> argument. </p>
<p>Function <a class="el" href="group___host_a_p_i.php#ga1cd8332c156b5897050189b2250dca2e" title="Call JavaScript function by C style function prototype, passing variable number of arguments in one v...">callJSFunction_va_list()</a> is the internal implementation of <a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a>. It's provided to be wrapped inside user functions accepting variable number arguments.</p>
<p>Refer to <a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> for details.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga779ed3a959cb0e21f8aad4b899bdb505" title="Call JavaScript function by C style function prototype, passing variable number of arguments...">callJSFunction()</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
