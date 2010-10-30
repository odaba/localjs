<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: BrowserWindow类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">Methods</a> &#124;
<a href="#properties">属性</a>  </div>
  <div class="headertitle">
<h1>BrowserWindow类参考<br/>
<small>
[<a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="BrowserWindow" -->
<p>Open source object. Represents a browser window. Returned by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. Include localjs_ui.js to use it.  
<a href="#_details">更多...</a></p>

<p><a href="class_browser_window-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Methods</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">window&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#ad2d8da20a97eb156c4c54ae708c6a389">getJSWindow</a> ([optional] int timout_seconds)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the JavaScript <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> of the browser window.  <a href="#ad2d8da20a97eb156c4c54ae708c6a389"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">var&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#a280f7ebe3df2ce474a5852d5cd2191d7">getJSVariable</a> (String variable_name,[optional] int timout_seconds)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the global variable or function defined in the browser window page by name.  <a href="#a280f7ebe3df2ce474a5852d5cd2191d7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#a4bc7c90e1f4048197bac2c5ff797e9be">isClosed</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <code>true</code> if the browser window is closed, <code>false</code> otherwise.  <a href="#a4bc7c90e1f4048197bac2c5ff797e9be"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#aa69c8bf1f1dcf4e72552efff1fe3e87e">close</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Close the browser window.  <a href="#aa69c8bf1f1dcf4e72552efff1fe3e87e"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">WebBrowser&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#a426d92f4370abff654c9a85a060c25c9">webBrowser</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser object</a> of the browser window.  <a href="#a426d92f4370abff654c9a85a060c25c9"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#ab814a25959c1cc0849f8a4fc780c1b50">HWND</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the HWND window handle of the browser window.  <a href="#ab814a25959c1cc0849f8a4fc780c1b50"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php#a862ffbf6976d63755adc1fc78f1a0354">isIE</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <code>true</code> if the <a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> object refers to a standalone Internet Explorer, <code>false</code> for LocalJS browser window.  <a href="#a862ffbf6976d63755adc1fc78f1a0354"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Open source object. Represents a browser window. Returned by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. Include localjs_ui.js to use it. </p>
<hr/><h2>Method Documentation</h2>
<a class="anchor" id="ad2d8da20a97eb156c4c54ae708c6a389"></a><!-- doxytag: member="BrowserWindow::getJSWindow" ref="ad2d8da20a97eb156c4c54ae708c6a389" args="([optional] int timout_seconds)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">window getJSWindow </td>
          <td>(</td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>timout_seconds</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the JavaScript <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> of the browser window. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">timout_seconds</td><td>Optional. Seconds to wait before JavaScript <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> is available in the browser window. The JavaScript <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> of the browser window is not available before the page in the browser window is fully loaded. The default value of <em>timout_seconds</em> is 10 seconds if omitted.</td></tr>
  </table>
  </dd>
</dl>
<p>You can use <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> to attach JavaScript function in current page to the event in the browser window:</p>
<div class="fragment"><pre class="fragment">    var browser_window = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindow(<span class="stringliteral">&quot;http://example.com/exampleApp/&quot;</span>),
        browser_jswindow = browser_window.getJSWindow();
    <span class="keywordflow">if</span> (browser_jswindow)
        browser_jswindow.attachEvent(<span class="stringliteral">&quot;onunload&quot;</span>, function() { alert(<span class="stringliteral">&quot;ByeBye&quot;</span>); });
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php#a280f7ebe3df2ce474a5852d5cd2191d7" title="Returns the global variable or function defined in the browser window page by name.">BrowserWindow.getJSVariable</a> | LOCALJS.UI.newWindow | <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a> | <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a280f7ebe3df2ce474a5852d5cd2191d7"></a><!-- doxytag: member="BrowserWindow::getJSVariable" ref="a280f7ebe3df2ce474a5852d5cd2191d7" args="(String variable_name,[optional] int timout_seconds)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">var getJSVariable </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>variable_name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>timout_seconds</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the global variable or function defined in the browser window page by name. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">variable_name</td><td>The name of the global variable or function defined in browser window page. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">timout_seconds</td><td>Optional. Seconds to wait before the global variable is available in the browser window. The default value of <em>timout_seconds</em> is 10 seconds if omitted.</td></tr>
  </table>
  </dd>
</dl>
<p>You can access a global function or variable defined in the browser window page from current page:</p>
<div class="fragment"><pre class="fragment">    var browser_window = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindow(<span class="stringliteral">&quot;http://example.com/exampleApp/&quot;</span>),
        browser_function = browser_window.getJSVariable(<span class="stringliteral">&quot;global_function_name&quot;</span>);
    <span class="keywordflow">if</span> (browser_function)
        browser_function(<span class="stringliteral">&quot;I got you!&quot;</span>);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php#ad2d8da20a97eb156c4c54ae708c6a389" title="Returns the JavaScript window object of the browser window.">BrowserWindow.getJSWindow</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a4bc7c90e1f4048197bac2c5ff797e9be"></a><!-- doxytag: member="BrowserWindow::isClosed" ref="a4bc7c90e1f4048197bac2c5ff797e9be" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean isClosed </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns <code>true</code> if the browser window is closed, <code>false</code> otherwise. </p>
<p>If the browser window has been closed by user or by <a class="el" href="interface_browser_window.php#aa69c8bf1f1dcf4e72552efff1fe3e87e" title="Close the browser window.">BrowserWindow.close</a> method, isClosed method returns <code>true</code>.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>To get a notification when the browser window is closed, hook the <code>onunload</code> event of the <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> of the browser page.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php#aa69c8bf1f1dcf4e72552efff1fe3e87e" title="Close the browser window.">BrowserWindow.close</a> | <a class="el" href="interface_browser_window.php#ad2d8da20a97eb156c4c54ae708c6a389" title="Returns the JavaScript window object of the browser window.">BrowserWindow.getJSWindow</a> | <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">window object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aa69c8bf1f1dcf4e72552efff1fe3e87e"></a><!-- doxytag: member="BrowserWindow::close" ref="aa69c8bf1f1dcf4e72552efff1fe3e87e" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">close </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Close the browser window. </p>
<p>It's OK to call close method multiple times on same <a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> object.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php#a4bc7c90e1f4048197bac2c5ff797e9be" title="Returns true if the browser window is closed, false otherwise.">BrowserWindow.isClosed</a> </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a426d92f4370abff654c9a85a060c25c9"></a><!-- doxytag: member="BrowserWindow::webBrowser" ref="a426d92f4370abff654c9a85a060c25c9" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">WebBrowser webBrowser<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser object</a> of the browser window. </p>
<p>You may need to get access to the <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser object</a> of the browser window in some cases. Provide it here for convenience.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">localJS.webBrowser</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ab814a25959c1cc0849f8a4fc780c1b50"></a><!-- doxytag: member="BrowserWindow::HWND" ref="ab814a25959c1cc0849f8a4fc780c1b50" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int HWND<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the HWND window handle of the browser window. </p>
<p>You may need to use this handle in some cases. Provide it here for convenience.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>For LocalJS Internet Explorer, it's the handle to the main window of Internet Explorer, not to the tab window of the page.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a> | <a class="el" href="interfacelocal_j_s.php#a231aa00f34826cb7baf3d21ca25cc2cc" title="ReadOnly. Returns the HWND handle of current browser window tab. ONLY apply to Internet Explorer 7 an...">localJS.IETabWnd</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a862ffbf6976d63755adc1fc78f1a0354"></a><!-- doxytag: member="BrowserWindow::isIE" ref="a862ffbf6976d63755adc1fc78f1a0354" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean isIE<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns <code>true</code> if the <a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> object refers to a standalone Internet Explorer, <code>false</code> for LocalJS browser window. </p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a862ffbf6976d63755adc1fc78f1a0354" title="Returns true if current page is loaded by standalone Internet Explorer, false if by LocalJS browser w...">UI.isIE</a> </dd></dl>

</div>
</div>
</div>
<hr class="footer"/>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
