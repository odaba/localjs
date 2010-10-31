<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: UI类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>UI类参考<br/>
<small>
[<a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="UI" -->
<p>Open source object. Provides methods for common UI operations. Include localjs_ui.js to use it.  
<a href="#_details">更多...</a></p>

<p><a href="class_u_i-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td colspan="2"><div class="groupHeader">Create and initialize new browser window</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_browser_window.php">BrowserWindow</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc">newWindow</a> (String url,[optional] int left,[optional] int top,[optional] int width,[optional] int height,[optional] int window_style,[optional] int parent_window,[optional] function initFunction,[optional] boolean leave_alone,[optional] boolean ie)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Creates a new browser window or standalone Internet Explorer and navigates to given url.  <a href="#a1affe0f3629c5b39d93ba05fd54fc3fc"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a8661d51c7e5389632e89177abfd92a45">showTitleBar</a> ([optional] boolean hide)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Shows or hides the title bar of current browser window.  <a href="#a8661d51c7e5389632e89177abfd92a45"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a733cb08eb4bc17051512573d8d67d388">updateTitle</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Updates the title of the browser window to the value of TITLE tag inside current page.  <a href="#a733cb08eb4bc17051512573d8d67d388"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#aed53a5a22874b3433e67982678c0d531">addDraggable</a> (var el,...)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Adds a html element to an internal dragging list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a>. Drag the items in the list will drag the browser window.  <a href="#aed53a5a22874b3433e67982678c0d531"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">array&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a036ec67a95716f85c0be9e723ac4782d">getDraggables</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the internal dragging list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> as an array of HTML DOM elements. Drag the items in the list will drag the browser window.  <a href="#a036ec67a95716f85c0be9e723ac4782d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a07804c8c056dedcec3467bc1c9470db4">setDraggables</a> (array el_draggable_array)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Sets the internal dragging list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a>. Drag the items in the list will drag the browser window.  <a href="#a07804c8c056dedcec3467bc1c9470db4"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Popup message box</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#ae4029da3a7b30a44c2a93b186146e3ae">msgBox</a> (String msg,[optional] boolean error)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Pops up a system message box with an information icon or error icon.  <a href="#ae4029da3a7b30a44c2a93b186146e3ae"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a8e8c34b33f063c99f3c36b7916e396b9">confirm</a> (String msg,[optional] boolean default_yes,[optional] boolean ok_cancel)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Pops up a system message box with a question icon asking for a choice from user and returns the user's choice.  <a href="#a8e8c34b33f063c99f3c36b7916e396b9"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Move and resize window</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#ab4f615fc494a1630d85d58ca37deb01a">bring2Top</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Bring the current browser window to foreground.  <a href="#ab4f615fc494a1630d85d58ca37deb01a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a23574b724ef4f4142a333c96a2cc59df">centerWindow</a> (int cx, int cy)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Moves the browser window to the center of the screen, with width specified by <em>cx</em> and height specified by <em>cy</em> in pixels.  <a href="#a23574b724ef4f4142a333c96a2cc59df"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#afe21d5b455eddf90a3260f387bb94379">getWindowRect</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object holding the postion of current browser window.  <a href="#afe21d5b455eddf90a3260f387bb94379"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb">moveWindow</a> (int left, int top, int width, int height)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Move current browser window to postion on screen specified by given parameters.  <a href="#a48bb86d6512ddef0a89997f6f26b28bb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a8077b95470f71884d59a6d5f09f29b5b">getWindowPlacement</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object holding the placement position of current browser window. Refer to <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> for fields in the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.  <a href="#a8077b95470f71884d59a6d5f09f29b5b"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a3fdde78a1c8ea2a61bac248bfc85e9df">setWindowPlacement</a> (<a class="el" href="interface_structure.php">Structure</a> placement)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Set window placement of current browser window.  <a href="#a3fdde78a1c8ea2a61bac248bfc85e9df"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Misc.</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#ad3d9b6673410aa22403cbb513c55ee4a">doEvents</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Allows application to handle other events that might be raised while you code runs. Similar to DoEvents function of Visual Basic.  <a href="#ad3d9b6673410aa22403cbb513c55ee4a"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td colspan="2"><div class="groupHeader">Callback functions</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">function&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a336a7e8690beb99db79da34c2a1f2810">exitCallback</a><code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Callback function which is called when user closes the current browser window by JavaScript <code>window.close</code> or from browser window system menu.  <a href="#a336a7e8690beb99db79da34c2a1f2810"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">function&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a474aa92c6232d183575e5986f50a35a2">newWindowCallback</a><code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Callback function which is called when a link is clicked to open a url in a new window.  <a href="#a474aa92c6232d183575e5986f50a35a2"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Predefined window styles.</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a80375f6cbd4820b29a2a99a0fd75f8e0">WS_CLOSE_ONLY</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Predefined window style used by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. The browser window has only a close button on the title bar with this style.  <a href="#a80375f6cbd4820b29a2a99a0fd75f8e0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a427576c9d7c9ec954db20eadde150301">WS_NO_TITLE_BAR</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Predefined window style used by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. The browser window doesn't have a title bar with this style.  <a href="#a427576c9d7c9ec954db20eadde150301"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a3f568fbb10b5e9901afe81d86c5d5989">WS_NORMAL</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Predefined window style used by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. The browser window has a normal title bar with this style.  <a href="#a3f568fbb10b5e9901afe81d86c5d5989"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Miscellaneous</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php#a862ffbf6976d63755adc1fc78f1a0354">isIE</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <code>true</code> if current page is loaded by standalone Internet Explorer, <code>false</code> if by LocalJS browser window.  <a href="#a862ffbf6976d63755adc1fc78f1a0354"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Open source object. Provides methods for common UI operations. Include localjs_ui.js to use it. </p>
<hr/><h2>Method Documentation</h2>
<a class="anchor" id="a1affe0f3629c5b39d93ba05fd54fc3fc"></a><!-- doxytag: member="UI::newWindow" ref="a1affe0f3629c5b39d93ba05fd54fc3fc" args="(String url,[optional] int left,[optional] int top,[optional] int width,[optional] int height,[optional] int window_style,[optional] int parent_window,[optional] function initFunction,[optional] boolean leave_alone,[optional] boolean ie)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_browser_window.php">BrowserWindow</a> newWindow </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>url</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>top</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>width</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>height</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>window_style</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>parent_window</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] function&#160;</td>
          <td class="paramname"> <em>initFunction</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>leave_alone</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>ie</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Creates a new browser window or standalone Internet Explorer and navigates to given url. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The url the new browser window or standalone Internet Explorer navigates to. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">left</td><td>Optional. The initial horizontal position of the window. Refer to parameter <em>x</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a>. If omitted, the default value is to center the window on the screen. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">top</td><td>Optional. The initial vertical position of the window. Refer to parameter <em>y</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a>. If omitted, the default value is to center the window on the screen. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">width</td><td>Optional. The width, in device units, of the window. Refer to parameter <em>nWidth</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a>. If omitted, the default value is 300. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">height</td><td>Optional. The height, in device units, of the window. Refer to parameter <em>nHeight</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a>. If omitted, the default value is 180. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">window_style</td><td>Optional. The style of the window being created, ignored by standalone Internet Explorer. Refer to parameter <em>dwStyle</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a>. <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> predefines some predefined window style: </p>
<ul>
<li>LOCALJS.UI.WS_CLOSE_ONLY: The browser window has only a close button on the title bar. </li>
<li>LOCALJS.UI.WS_NO_TITLE_BAR: The browser window doesn't have a title bar. </li>
<li>LOCALJS.UI.WS_NORMAL: The browser window has a normal title bar. This is the default value if <em>window_style</em> is omitted. </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">parent_window</td><td>Optional. The HWND handle to the parent or owner window of the browser window being created, ignored by standalone Internet Explorer. To use the HWND handle of the current browser window, pass in <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a>. If omitted, the default value is zero. Refer to parameter <em>hWndParent</em> of <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">initFunction</td><td>Optional. A JavaScript function which will be executed when the new browser window or standalone Internet Explorer loads page. </p>
<ul>
<li>The JavaScript function will be passed with the JavaScript window object of the browser window page as parameter. <div class="fragment"><pre class="fragment">    var initFunction = function(new_jswindow)
    {
        <span class="comment">// code to operate DOM or JavaScript objects defined in the new page.</span>
    };
</pre></div> </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">leave_alone</td><td>Optional. If set to <code>false</code>, the new browser window or standalone Internet Explorer will be closed when current browser window reloads page or is closed. It set to <code>true</code>, the new browser window or standalone Internet Explorer is not closed when current browser window reloads page or is closed. The default value is <code>false</code> if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">ie</td><td>Optional. If set to <code>true</code>, a standalone Internet Explorer will be created. If set to <code>false</code>, a LocalJS browser window will be created. The default value is <code>false</code> if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> object for the new created browser window or standalone Internet Explorer.</dd></dl>
<p>You don't have to calculate the position of the new browser window in <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> method. It might be better to initialize the new browser window position at the page loaded by the created browser window with methods <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb" title="Move current browser window to postion on screen specified by given parameters.">UI.moveWindow</a> or <a class="el" href="interface_u_i.php#a23574b724ef4f4142a333c96a2cc59df" title="Moves the browser window to the center of the screen, with width specified by cx and height specified...">UI.centerWindow</a>, in which case each browser window initializes themselves.</p>
<p>To create a new browser window without title bar: </p>
<div class="fragment"><pre class="fragment">    var browser_window = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindow(<span class="stringliteral">&quot;http://myapp.com/&quot;</span>, 20, 30, 400, 300, <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.WS_NO_TITLE_BAR);
</pre></div><p>To inject a JavaScript function to the new created browser window: </p>
<div class="fragment"><pre class="fragment">    var funcInjected = function(new_jswindow)
    {
        <span class="comment">// access the DOM node of the new browser window page:</span>
        var new_html = new_jswindow.document.getElementsByTagName(<span class="stringliteral">&#39;html&#39;</span>)[0];
    };

    var browser_window = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindow(<span class="stringliteral">&quot;http://myapp.com/&quot;</span>, 20, 30, 400, 300, <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.WS_NO_TITLE_BAR, <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, funcInjected);
</pre></div><dl class="attention"><dt><b>注意:</b></dt><dd>If <em>parent_window</em> is <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a> and <em>ie</em> is false or omitted, the new created browser window will always be closed when current browser window is closed.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> | <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb" title="Move current browser window to postion on screen specified by given parameters.">UI.moveWindow</a> | <a class="el" href="interface_u_i.php#a23574b724ef4f4142a333c96a2cc59df" title="Moves the browser window to the center of the screen, with width specified by cx and height specified...">UI.centerWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632679(VS.85).aspx" target="_blank">CreateWindow Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a8661d51c7e5389632e89177abfd92a45"></a><!-- doxytag: member="UI::showTitleBar" ref="a8661d51c7e5389632e89177abfd92a45" args="([optional] boolean hide)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">showTitleBar </td>
          <td>(</td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>hide</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Shows or hides the title bar of current browser window. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">hide</td><td>Optional. Set to <code>true</code> to hide the title bar of the browser window, <code>false</code> to show the title bar. <code>false</code> is the default value if omitted.</td></tr>
  </table>
  </dd>
</dl>
<p>To hide the title bar of current browser window: </p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.showTitleBar(<span class="keyword">true</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="a733cb08eb4bc17051512573d8d67d388"></a><!-- doxytag: member="UI::updateTitle" ref="a733cb08eb4bc17051512573d8d67d388" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">updateTitle </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Updates the title of the browser window to the value of TITLE tag inside current page. </p>
<p>When a page is loaded, LocalJS sets the browser window title to the value of TITLE tag of the paged loaded. However, if the page title is changed later by JavaScript, you can call <code>updateTitle</code> to synchronize the changes to the browser window title. For instance:</p>
<div class="fragment"><pre class="fragment">    document.title = <span class="stringliteral">&quot;New HTML Title&quot;</span>;
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.updateTitle();
</pre></div> 
</div>
</div>
<a class="anchor" id="aed53a5a22874b3433e67982678c0d531"></a><!-- doxytag: member="UI::addDraggable" ref="aed53a5a22874b3433e67982678c0d531" args="(var el,...)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">addDraggable </td>
          <td>(</td>
          <td class="paramtype">var&#160;</td>
          <td class="paramname"> <em>el</em>, </td>
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

<p>Adds a html element to an internal dragging list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a>. Drag the items in the list will drag the browser window. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">el</td><td>The HTML DOM element to be added to the internal dragging list, or id of the HTML DOM element. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">...</td><td>Optional. More HTML DOM elements to be added to the internal dragging list, or id of the HTML DOM element.</td></tr>
  </table>
  </dd>
</dl>
<p>This method is typically used to make a HTML element act as title bar of the browser window. For example, if you want to create a COOL title bar, you can hide the title bar of browser window, and use one or more HTML elements to act as title bar:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.showTitleBar(<span class="keyword">true</span>);
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.addDraggable(<span class="stringliteral">&#39;id_of_title_bar_element&#39;</span>, <span class="stringliteral">&#39;id_of_title_bar_element2&#39;</span>);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>By default <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> adds HTML and BODY elements to the internal dragging list.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a036ec67a95716f85c0be9e723ac4782d" title="Returns the internal dragging list maintained by LOCALJS.UI as an array of HTML DOM elements...">UI.getDraggables</a> | <a class="el" href="interface_u_i.php#a07804c8c056dedcec3467bc1c9470db4" title="Sets the internal dragging list maintained by LOCALJS.UI. Drag the items in the list will drag the br...">UI.setDraggables</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a036ec67a95716f85c0be9e723ac4782d"></a><!-- doxytag: member="UI::getDraggables" ref="a036ec67a95716f85c0be9e723ac4782d" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">array getDraggables </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the internal dragging list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> as an array of HTML DOM elements. Drag the items in the list will drag the browser window. </p>
<p>In most cases, you only need to call <a class="el" href="interface_u_i.php#aed53a5a22874b3433e67982678c0d531" title="Adds a html element to an internal dragging list maintained by LOCALJS.UI. Drag the items in the list...">UI.addDraggable</a>. <a class="el" href="interface_u_i.php#a036ec67a95716f85c0be9e723ac4782d" title="Returns the internal dragging list maintained by LOCALJS.UI as an array of HTML DOM elements...">UI.getDraggables</a> is provided in case you want to modify the internal list directly.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#aed53a5a22874b3433e67982678c0d531" title="Adds a html element to an internal dragging list maintained by LOCALJS.UI. Drag the items in the list...">UI.addDraggable</a> | <a class="el" href="interface_u_i.php#a07804c8c056dedcec3467bc1c9470db4" title="Sets the internal dragging list maintained by LOCALJS.UI. Drag the items in the list will drag the br...">UI.setDraggables</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a07804c8c056dedcec3467bc1c9470db4"></a><!-- doxytag: member="UI::setDraggables" ref="a07804c8c056dedcec3467bc1c9470db4" args="(array el_draggable_array)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">setDraggables </td>
          <td>(</td>
          <td class="paramtype">array&#160;</td>
          <td class="paramname"> <em>el_draggable_array</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Sets the internal dragging list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a>. Drag the items in the list will drag the browser window. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">el_draggable_array</td><td>An array of HTML DOM elements which will replace the previous internal list maintained by <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a>.</td></tr>
  </table>
  </dd>
</dl>
<p>In most cases, you only need to call <a class="el" href="interface_u_i.php#aed53a5a22874b3433e67982678c0d531" title="Adds a html element to an internal dragging list maintained by LOCALJS.UI. Drag the items in the list...">UI.addDraggable</a>. <a class="el" href="interface_u_i.php#a07804c8c056dedcec3467bc1c9470db4" title="Sets the internal dragging list maintained by LOCALJS.UI. Drag the items in the list will drag the br...">UI.setDraggables</a> is provided in case you want to modify the internal list directly.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#aed53a5a22874b3433e67982678c0d531" title="Adds a html element to an internal dragging list maintained by LOCALJS.UI. Drag the items in the list...">UI.addDraggable</a> | <a class="el" href="interface_u_i.php#a036ec67a95716f85c0be9e723ac4782d" title="Returns the internal dragging list maintained by LOCALJS.UI as an array of HTML DOM elements...">UI.getDraggables</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ae4029da3a7b30a44c2a93b186146e3ae"></a><!-- doxytag: member="UI::msgBox" ref="ae4029da3a7b30a44c2a93b186146e3ae" args="(String msg,[optional] boolean error)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">msgBox </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>msg</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>error</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Pops up a system message box with an information icon or error icon. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">msg</td><td>Message text to be displayed. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">error</td><td>Optional. <code>true</code> to display an error icon within the message box, <code>false</code> for an information icon. The default value is <code>false</code> if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> replaces standard JavaScript <code>alert</code> function with a call to LOCALJS.UI.msgBox with <em>error</em> set to <code>true</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="a8e8c34b33f063c99f3c36b7916e396b9"></a><!-- doxytag: member="UI::confirm" ref="a8e8c34b33f063c99f3c36b7916e396b9" args="(String msg,[optional] boolean default_yes,[optional] boolean ok_cancel)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean confirm </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>msg</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>default_yes</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>ok_cancel</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Pops up a system message box with a question icon asking for a choice from user and returns the user's choice. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">msg</td><td>Message text to be displayed. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">default_yes</td><td>Optional. <code>true</code> means the default option is the "YES" or "OK" button, <code>false</code> means the default option is the "NO" or "CANCEL" button. The default value is <code>false</code> if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">ok_cancel</td><td>Optional. <code>true</code> means the message box will display "OK" and "CANCEL" as options, <code>false</code> means the message box will display "YES" and "NO" as options. The default value is <code>false</code> if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if user choosed "YES" or "OK", <code>false</code> if "NO" or "CANCEL" was chosen.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> replaces standard JavaScript <code>confirm</code> function with a call to LOCALJS.UI.msgBox with both <em>default_yes</em> and <em>ok_cancel</em> set to <code>false</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ab4f615fc494a1630d85d58ca37deb01a"></a><!-- doxytag: member="UI::bring2Top" ref="ab4f615fc494a1630d85d58ca37deb01a" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bring2Top </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Bring the current browser window to foreground. </p>
<p>Bring the current browser window to foreground to attract user's attention. For instance:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordflow">if</span> (news_comes)
        <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.bring2Top();
</pre></div> 
</div>
</div>
<a class="anchor" id="a23574b724ef4f4142a333c96a2cc59df"></a><!-- doxytag: member="UI::centerWindow" ref="a23574b724ef4f4142a333c96a2cc59df" args="(int cx, int cy)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">centerWindow </td>
          <td>(</td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>cx</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>cy</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Moves the browser window to the center of the screen, with width specified by <em>cx</em> and height specified by <em>cy</em> in pixels. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">cx</td><td>the width of the browser window, in pixels. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">cy</td><td>the height of the browser window, in pixels.</td></tr>
  </table>
  </dd>
</dl>
<p>Method centerWindow is typically used to initialize browser window's position:</p>
<div class="fragment"><pre class="fragment">    window.attachEvent(<span class="stringliteral">&quot;onload&quot;</span>, function()
    {
        <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.centerWindow(300, 180);
    });
</pre></div><p>You don't have to calculate the position of the new browser window in <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> method. It might be better to initialize the new browser window position at the page loaded by the created browser window with methods <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb" title="Move current browser window to postion on screen specified by given parameters.">UI.moveWindow</a> or <a class="el" href="interface_u_i.php#a23574b724ef4f4142a333c96a2cc59df" title="Moves the browser window to the center of the screen, with width specified by cx and height specified...">UI.centerWindow</a>, in which case each browser window initializes themselves.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> | <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb" title="Move current browser window to postion on screen specified by given parameters.">UI.moveWindow</a> </dd></dl>

</div>
</div>
<a class="anchor" id="afe21d5b455eddf90a3260f387bb94379"></a><!-- doxytag: member="UI::getWindowRect" ref="afe21d5b455eddf90a3260f387bb94379" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> getWindowRect </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object holding the postion of current browser window. </p>
<p>The returned <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object has 4 properties: <code>left</code>, <code>top</code>, <code>right</code>, and <code>bottom</code>, which holds the positions of the current browser window.</p>
<p>Following code illustrates how to use the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object retuned:</p>
<div class="fragment"><pre class="fragment">    var rect = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.getWindowRect();
    var window_width = rect.right - rect.left;
    var window_height = rect.bottom - rect.top;
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a48bb86d6512ddef0a89997f6f26b28bb"></a><!-- doxytag: member="UI::moveWindow" ref="a48bb86d6512ddef0a89997f6f26b28bb" args="(int left, int top, int width, int height)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">moveWindow </td>
          <td>(</td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>left</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>top</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>width</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"> <em>height</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Move current browser window to postion on screen specified by given parameters. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">left</td><td>The new position of the left side of the window. Refer to parameter <em>x</em> of <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow Function</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">top</td><td>The new position of the top of the window. Refer to parameter <em>y</em> of <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow Function</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">width</td><td>The new width of the window. Refer to parameter <em>nWidth</em> of <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow Function</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">height</td><td>The new height of the window. Refer to parameter <em>nHeight</em> of <a href="http://msdn.microsoft.com/en-us/library/ms633534(VS.85).aspx" target="_blank">MoveWindow Function</a>.</td></tr>
  </table>
  </dd>
</dl>
<p>To move current browser window to top left of the screen when the page is loaded: </p>
<div class="fragment"><pre class="fragment">    window.attachEvent(<span class="stringliteral">&quot;onload&quot;</span>, function()
    {
        <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.moveWindow(0, 0, 100, 50);
    }):
</pre></div><p>You don't have to calculate the position of the new browser window in <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> method. It might be better to initialize the new browser window position at the page loaded by the created browser window with methods <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb" title="Move current browser window to postion on screen specified by given parameters.">UI.moveWindow</a> or <a class="el" href="interface_u_i.php#a23574b724ef4f4142a333c96a2cc59df" title="Moves the browser window to the center of the screen, with width specified by cx and height specified...">UI.centerWindow</a>, in which case each browser window initializes themselves.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>If the current browser window is created as child window with window style WS_CHILD, then the position is relative to it's parent window, not to the screen. By default all browser window are not created as child window.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> | <a class="el" href="interface_u_i.php#a23574b724ef4f4142a333c96a2cc59df" title="Moves the browser window to the center of the screen, with width specified by cx and height specified...">UI.centerWindow</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a8077b95470f71884d59a6d5f09f29b5b"></a><!-- doxytag: member="UI::getWindowPlacement" ref="a8077b95470f71884d59a6d5f09f29b5b" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> getWindowPlacement </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object holding the placement position of current browser window. Refer to <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> for fields in the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object. </p>
<p>The benefit of getWindowPlacement is it can retrieve more information than <a class="el" href="interface_u_i.php#afe21d5b455eddf90a3260f387bb94379" title="Returns a Structure object holding the postion of current browser window.">UI.getWindowRect</a>. For example, the value of rcNormalPosition field of the structure is not influenced by maximized or minimized status of current browser window.</p>
<p>Following code illustrates the usage of method <code>getWindowPlacement:</code> </p>
<div class="fragment"><pre class="fragment">    var SW_SHOWNA = 8,
        placement = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.getWindowPlacement(),

        rect = placement.rcNormalPosition;

    <span class="comment">// move current browser window 10 pixels to the left:</span>
    rect.left -= 10;
    rect.right -= 10;
    placement.flags = 0;
    placement.showCmd = SW_SHOWNA;
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.setWindowPlacement(placement);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a3fdde78a1c8ea2a61bac248bfc85e9df" title="Set window placement of current browser window.">UI.setWindowPlacement</a> | <a class="el" href="interface_u_i.php#afe21d5b455eddf90a3260f387bb94379" title="Returns a Structure object holding the postion of current browser window.">UI.getWindowRect</a> | <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633518(VS.85).aspx" target="_blank">GetWindowPlacement Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a3fdde78a1c8ea2a61bac248bfc85e9df"></a><!-- doxytag: member="UI::setWindowPlacement" ref="a3fdde78a1c8ea2a61bac248bfc85e9df" args="(Structure placement)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">setWindowPlacement </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="interface_structure.php">Structure</a>&#160;</td>
          <td class="paramname"> <em>placement</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Set window placement of current browser window. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">placement</td><td><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object returned by <a class="el" href="interface_u_i.php#a8077b95470f71884d59a6d5f09f29b5b" title="Returns a Structure object holding the placement position of current browser window. Refer to WINDOWPLACEMENT Structure for fields in the Structure object.">UI.getWindowPlacement</a>.</td></tr>
  </table>
  </dd>
</dl>
<p>Refer to <a class="el" href="interface_u_i.php#a8077b95470f71884d59a6d5f09f29b5b" title="Returns a Structure object holding the placement position of current browser window. Refer to WINDOWPLACEMENT Structure for fields in the Structure object.">UI.getWindowPlacement</a> for more detail.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a8077b95470f71884d59a6d5f09f29b5b" title="Returns a Structure object holding the placement position of current browser window. Refer to WINDOWPLACEMENT Structure for fields in the Structure object.">UI.getWindowPlacement</a> | <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb" title="Move current browser window to postion on screen specified by given parameters.">UI.moveWindow</a> | <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633544(VS.85).aspx" target="_blank">SetWindowPlacement Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ad3d9b6673410aa22403cbb513c55ee4a"></a><!-- doxytag: member="UI::doEvents" ref="ad3d9b6673410aa22403cbb513c55ee4a" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean doEvents </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Allows application to handle other events that might be raised while you code runs. Similar to DoEvents function of Visual Basic. </p>
<dl class="return"><dt><b>返回:</b></dt><dd><code>false</code> if the page is being unloaded or the process is shutting down, <code>true</code> otherwise.</dd></dl>
<p>doEvents function is typically used in a loop when you are waiting for something and at the same time do not want to block other code from execution. The loop should end when doEvents function returns <code>false</code>.</p>
<p>Following code illustrates the usage of doEvents function:</p>
<div class="fragment"><pre class="fragment">    <span class="keywordflow">while</span> (!condition_is_ready)
    {
        <span class="keywordflow">if</span> (!<a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.doEvents())
            <span class="keywordflow">break</span>;
    }

    <span class="keywordflow">if</span> (condition_is_ready)
    {
        <span class="comment">// future processing;</span>
    }
</pre></div> 
</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a336a7e8690beb99db79da34c2a1f2810"></a><!-- doxytag: member="UI::exitCallback" ref="a336a7e8690beb99db79da34c2a1f2810" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">function exitCallback<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Callback function which is called when user closes the current browser window by JavaScript <code>window.close</code> or from browser window system menu. </p>
<p>The return value of this callback function decides whether the current browser window will be closed. Returns <code>true</code> to allow the current browser window be closed, <code>false</code> to cancel the window close action.</p>
<p>exitCallback is used as a chance to confirm exit from current browser window with user:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.exitCallback = function()
    {
        <span class="keywordflow">return</span> <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.confirm(<span class="stringliteral">&quot;Are you sure to exit?&quot;</span>);
    };
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> method won't trigger exitCallback.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a474aa92c6232d183575e5986f50a35a2"></a><!-- doxytag: member="UI::newWindowCallback" ref="a474aa92c6232d183575e5986f50a35a2" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">function newWindowCallback<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Callback function which is called when a link is clicked to open a url in a new window. </p>
<p>newWindowCallback can be used to cancel the new window or create a customized browser window and open the link inside it.</p>
<p>默认状态下，当用户在新窗口中打开链接的时候，LocalJS 会创建一个新的页面窗口来打开这个链接；这个新页面窗口中的JavaScript 代码可以初始化这个新的页面窗口，比如设置标题栏，窗口位置等。但是有时，你也许希望能在新页面窗口打开链接之前初始化它。这种情况下，你可以创建一个自定义的浏览器窗口，并在其中打开链接。</p>
<p>Following code illustrates how to use newWindowCallback: </p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindowCallback = function(disp, cancel, flags, url_context, url)
    {
        <span class="keywordflow">if</span> (ok_to_open_the_url)
        {
            var browser_obj = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindow(<span class="stringliteral">&quot;about:blank&quot;</span>);
            disp.returnValue = browser_obj.webBrowser;
        }
        <span class="keywordflow">else</span>
        {
            cancel.returnValue = <span class="keyword">true</span>;
        }
        <span class="keywordflow">return</span> <span class="keyword">true</span>;
    }
</pre></div><p>The parameters passed to newWindowCallback are similar to parameters of <a href="http://msdn.microsoft.com/en-us/library/aa768337(VS.85).aspx" target="_blank">NewWindow3 Event</a> of <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a>:</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[out]</td><td class="paramname">disp</td><td>Optionally returns a <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a> which will be used to open the new url. </p>
<ul>
<li>Code below creates a new <a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> and passed the WebBrowser object of the new <a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> to <em>disp:</em> <div class="fragment"><pre class="fragment">    var browser_obj = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.newWindow(<span class="stringliteral">&quot;about:blank&quot;</span>);
    disp.returnValue = browser_obj.webBrowser;
</pre></div> </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in,out]</td><td class="paramname">cancel</td><td>Boolean value determines whether or not to cancel the new window. The initial value of <em>cancel</em> is <code>false</code>. </p>
<ul>
<li>Code below cancels the open of the new window: <div class="fragment"><pre class="fragment">    cancel.returnValue = <span class="keyword">true</span>;
</pre></div> </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">flags</td><td>The flags from the <a href="http://msdn.microsoft.com/en-us/library/bb762518(VS.85).aspx" target="_blank">NWMF enumeration</a> that pertain to the new window. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">url_context</td><td>The URL of the page that is opening the new window. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The URL that is opened in the new window.</td></tr>
  </table>
  </dd>
</dl>
<p>If newWindowCallback returns <code>true</code>, <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> will not do future prcessing about the new window opening; if newWindowCallback is not set or returns <code>false</code>, <a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">LOCALJS.UI</a> will open a small new browser window centered at screen to open the url.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php" title="Open source object. Represents a browser window. Returned by UI.newWindow. Include localjs_ui...">BrowserWindow</a> | <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/aa768337(VS.85).aspx" target="_blank">NewWindow3 Event</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a> | <a href="http://msdn.microsoft.com/en-us/library/bb762518(VS.85).aspx" target="_blank">NWMF enumeration</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a80375f6cbd4820b29a2a99a0fd75f8e0"></a><!-- doxytag: member="UI::WS_CLOSE_ONLY" ref="a80375f6cbd4820b29a2a99a0fd75f8e0" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int WS_CLOSE_ONLY<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Predefined window style used by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. The browser window has only a close button on the title bar with this style. </p>
<p>The definition of this style is WS_POPUP | WS_THICKFRAME | WS_CAPTION | WS_SYSMENU | WS_VISIBLE</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632600(VS.85).aspx" target="_blank">Window Styles</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a427576c9d7c9ec954db20eadde150301"></a><!-- doxytag: member="UI::WS_NO_TITLE_BAR" ref="a427576c9d7c9ec954db20eadde150301" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int WS_NO_TITLE_BAR<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Predefined window style used by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. The browser window doesn't have a title bar with this style. </p>
<p>The definition of this style is WS_POPUP | WS_VISIBLE | WS_SYSMENU</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632600(VS.85).aspx" target="_blank">Window Styles</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a3f568fbb10b5e9901afe81d86c5d5989"></a><!-- doxytag: member="UI::WS_NORMAL" ref="a3f568fbb10b5e9901afe81d86c5d5989" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int WS_NORMAL<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Predefined window style used by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. The browser window has a normal title bar with this style. </p>
<p>The definition of this style is WS_OVERLAPPEDWINDOW | WS_VISIBLE</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632600(VS.85).aspx" target="_blank">Window Styles</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a862ffbf6976d63755adc1fc78f1a0354"></a><!-- doxytag: member="UI::isIE" ref="a862ffbf6976d63755adc1fc78f1a0354" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean isIE<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns <code>true</code> if current page is loaded by standalone Internet Explorer, <code>false</code> if by LocalJS browser window. </p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_browser_window.php#a862ffbf6976d63755adc1fc78f1a0354" title="Returns true if the BrowserWindow object refers to a standalone Internet Explorer, false for LocalJS browser window.">BrowserWindow.isIE</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
