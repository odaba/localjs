<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: WindowHook类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: WindowHook类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a> &#124;
<a href="#properties">属性</a>  </div>
  <div class="headertitle">
<h1>WindowHook类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="WindowHook" -->
<p>Hook messages of the specified window.  
<a href="#_details">更多...</a></p>

<p><a href="class_window_hook-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17">hookMessage</a> (long message, Function handler)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Hook message processing with JavaScript function.  <a href="#a7ae2597fb98a0a318f2a9f6295c6bc17"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php#a1a92b100728f2a66ba2d2fe660857264">callDefaultWndProc</a> (long hWnd, long message, long wParam, long lParam)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call default window procedure with message parameters. Typically called in message handler functions.  <a href="#a1a92b100728f2a66ba2d2fe660857264"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php#a85fe484b22d5d233c6b84c2b193e508a">callOriginalWndProc</a> (long hWnd, long message, long wParam, long lParam)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call original window procedure with message parameters. Typically called in message handler functions.  <a href="#a85fe484b22d5d233c6b84c2b193e508a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php#a916fade963fb61259cb414f46d6f0bb3">unhook</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Unhook the current window and clear all hooked message handlers, if any.  <a href="#a916fade963fb61259cb414f46d6f0bb3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php#abaa21865555f3152ae8185807c50cd25">unhookMessage</a> (long message)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Stop receiving notification of specified window message.  <a href="#abaa21865555f3152ae8185807c50cd25"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php#a5c785feafd2dd03964acb3813cc605a8">hookedWnd</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns handle of current hooked window.  <a href="#a5c785feafd2dd03964acb3813cc605a8"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Hook messages of the specified window. </p>
<p><a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> object is created by <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> method as following:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// The second parameter is HWND handle to a window in same process:</span>
    var hook = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;WindowHook&quot;</span>, <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>);
</pre></div><p>The handle of current hooked window can be retrieved through property <a class="el" href="interface_window_hook.php#a5c785feafd2dd03964acb3813cc605a8" title="ReadOnly. Returns handle of current hooked window.">WindowHook.hookedWnd</a>.</p>
<p>A typical usage of object <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> is to hook the current browser window to process <code>WM_CLOSE</code> message, to get a chance to prompt user to confirm closing the browser window. When user closes browser window through context menu of window title bar, or shortcut key Alt-F4, JavaScript event <code>onbeforeunload</code> is <em>NOT</em> triggerred, thus <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> is the <em>ONLY</em> way to go.</p>
<p>Sample code below demostrates how to hook <code>WM_CLOSE</code> of current browser window.</p>
<dl class="user"><dt><b></b></dt><dd>First, define constant values used by Windows API <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox</a>:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// All these constant values can be found in MSDN, refer to See also section below</span>
    var WM_CLOSE = 0x0010,
        IDYES = 6,
        MB_ICONQUESTION = 0x00000020,
        MB_YESNO = 0x00000004,
        MB_DEFBUTTON2 = 0x00000100;
</pre></div><dl class="user"><dt><b></b></dt><dd>Prepare <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object to call <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox Function</a>:</dd></dl>
<div class="fragment"><pre class="fragment">    var doc = document,
        local_js = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>,
        hostWnd = local_js.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="comment">// hostWnd property return handle of browser window</span>
        createObject = local_js.COM.createObject,
        dllCall = createObject(<span class="stringliteral">&quot;DllCall&quot;</span>);

    <span class="comment">// System message box looks better than JavaScript alert message box. :-)</span>
    dllCall.add(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;int WINAPI MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;</span>);

    var messageBox = dllCall.MessageBox;
</pre></div><dl class="user"><dt><b></b></dt><dd>Hook <code>WM_CLOSE</code> message of of current browser window:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// Hook WM_CLOSE when user close the window through Alt-F4 or context menu of window title bar</span>
    <span class="comment">// JavaScript event onbeforeunload won&#39;t fire for browser control so we have to hook window procedure</span>
    <span class="comment">// WM_CLOSE is defined in global_functions.js</span>
    var hook = createObject(<span class="stringliteral">&quot;WindowHook&quot;</span>, hostWnd);
    hook.hookMessage(WM_CLOSE, function(hWnd, message, wParam, lParam)
    {
        <span class="keywordflow">if</span> (IDYES == messageBox(hostWnd, <span class="stringliteral">&quot;Are you sure to exit?&quot;</span>, doc.title, MB_ICONQUESTION | MB_YESNO | MB_DEFBUTTON2))
        {
            <span class="keywordflow">return</span> hook.CallOriginalWndProc(hWnd, message, wParam, lParam);
        }

        <span class="keywordflow">return</span> 0; <span class="comment">// to cancel window close, bypass original window procedure and directly return zero for WM_CLOSE message</span>
    });
</pre></div><dl class="user"><dt><b></b></dt><dd>The same window could be hooked more than once by different <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> objects, and multiple handler functions will be called by the sequence they are hooked. This makes multiple plugins can hook window without worrying about other hooks:</dd></dl>
<div class="fragment"><pre class="fragment">    var hook2 = createObject(<span class="stringliteral">&quot;WindowHook&quot;</span>, hostWnd);
    hook2.hookMessage(WM_CLOSE, function(hWnd, message, wParam, lParam)
    {
        <span class="keywordflow">if</span> (IDYES == messageBox(hostWnd, <span class="stringliteral">&quot;Do you still want to exit?&quot;</span>, doc.title, MB_ICONQUESTION | MB_YESNO | MB_DEFBUTTON2))
        {
            <span class="comment">// call default window procedure (which will destroy the window for WM_CLOSE message), bypassing all other handler hooked after this one.</span>
            <span class="keywordflow">return</span> hook2.callDefaultWndProc(hWnd, message, wParam, lParam);
        }

        <span class="keywordflow">return</span> 0; <span class="comment">// to cancel window close, bypass original window procedure and directly return zero for WM_CLOSE message</span>
    });
</pre></div><dl class="user"><dt><b></b></dt><dd><em>It's recommended to unhook hooks installed at window <code>unload</code> event</em></dd></dl>
<div class="fragment"><pre class="fragment">    window.attachEvent(<span class="stringliteral">&quot;onunload&quot;</span>, function()
    {
        hook.unhook();
        hook2.unhook();
    });
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Only window in same process can be hooked. For standalone LocalJS Internet Explorer application, Internet Explorer runs in a process different from the process <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> objects exit, so <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> cannot hook the Window procedure of the Internet Explorer window.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>However, JavaScript objects in Internet Explorer can still co-operate with JavaScript objects in other LocalJS browser windows (crossing process boundary).</dd></dl>
<dl class="user"><dt><b></b></dt><dd>When user closes window of Internet Explorer, JavaScript event <code>onbeforeunload</code> is triggerred, so you still have the chance to prompt user to confirm closing window.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> | <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632617(VS.85).aspx" target="_blank">WM_CLOSE Message</a> | <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632586(VS.85).aspx" target="_blank">Windows and Messages</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632593(VS.85).aspx" target="_blank">Window Procedures</a> </dd></dl>
<hr/><h2>方法文档</h2>
<a class="anchor" id="a7ae2597fb98a0a318f2a9f6295c6bc17"></a><!-- doxytag: member="WindowHook::hookMessage" ref="a7ae2597fb98a0a318f2a9f6295c6bc17" args="(long message, Function handler)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">hookMessage </td>
          <td>(</td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>message</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Function&#160;</td>
          <td class="paramname"> <em>handler</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Hook message processing with JavaScript function. </p>
<p><code>hookMessage</code> method routes notification of specified window message to the given JavaScript function</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>ID of the message to hook, a 32 bits integer. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">handler</td><td>The message handle function. It typically has 4 parameters: hWnd, message, wParam, lParam, just like a Window procedure does. </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value</dd></dl>
<p>If the hook object is not successfully hooked to a window, <a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17">hookMessage</a> method generates an error.</p>
<p>If same message is hooked multiple times on same <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> object, the handler set latter will overwrite the handler set earlier.</p>
<dl class="user"><dt><b>Parameters and return values of handler function</b></dt><dd></dd></dl>
<p>A typical handler function takes 4 parameters, and return a 32 bits integer:</p>
<div class="fragment"><pre class="fragment">    function(hWnd,      <span class="comment">// handle to the window the message belongs to, 32 bit integer</span>
             message,   <span class="comment">// message identifier, 32 bit integer</span>
             wParam,    <span class="comment">// first message parameter, 32 bit integer</span>
             lParam)    <span class="comment">// second message parameter, 32 bit integer</span>
    {
        <span class="keywordflow">return</span> 0; <span class="comment">// return value should be a 32 bit integer.</span>
    }
</pre></div><p>When a window message is generated, the handler function will be called, refer to MSDN for the meanings of 4 parameters for different messages.</p>
<p>The return value of handler function will be the return value of the message processing.</p>
<p>Individual message requires different return values for different meanings, please refer to MSDN for detail about the message hooked. In most cases, 0 should be returned.</p>
<dl class="user"><dt><b>Message process flow inside handler function</b></dt><dd></dd></dl>
<p><em>After handler function returns an integer, NO MORE message processing goes on.</em> In other words, if the handler function doesn't invoke original window procedure with method <a class="el" href="interface_window_hook.php#a85fe484b22d5d233c6b84c2b193e508a" title="Call original window procedure with message parameters. Typically called in message handler functions...">WindowHook.callOriginalWndProc</a>, the original window procedure will be totally by passed for this mesasge. If the window has been hooked multiple times for the same message, the handler function hooked after the current handler will not be called either.</p>
<p>This feature makes it simple and flexible for JavaScript function to process messages: the handler function could choose to do some pre-processing before call original window procedure, or do some post-processing after, or directly call default window procedure by invoking method <a class="el" href="interface_window_hook.php#a1a92b100728f2a66ba2d2fe660857264" title="Call default window procedure with message parameters. Typically called in message handler functions...">WindowHook.callDefaultWndProc</a> (skip all other handler functions hooked after the current handler), or simply bypassing any other handlers and window procedures by not calling <a class="el" href="interface_window_hook.php#a85fe484b22d5d233c6b84c2b193e508a" title="Call original window procedure with message parameters. Typically called in message handler functions...">WindowHook.callOriginalWndProc</a> nor <a class="el" href="interface_window_hook.php#a1a92b100728f2a66ba2d2fe660857264" title="Call default window procedure with message parameters. Typically called in message handler functions...">WindowHook.callDefaultWndProc</a>.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>If JavaScript handler function doesn't return a value, or fail to return a valid integer (for example, return a string which cannot be converted to a valid integer), the original window procedure will be called after JavaScript handler function returns.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd>WindowHook.hookWindow | <a class="el" href="interface_window_hook.php#a85fe484b22d5d233c6b84c2b193e508a" title="Call original window procedure with message parameters. Typically called in message handler functions...">WindowHook.callOriginalWndProc</a> | <a class="el" href="interface_window_hook.php#a1a92b100728f2a66ba2d2fe660857264" title="Call default window procedure with message parameters. Typically called in message handler functions...">WindowHook.callDefaultWndProc</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632586(VS.85).aspx" target="_blank">Windows and Messages</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632593(VS.85).aspx" target="_blank">Window Procedures</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633572(VS.85).aspx" target="_blank">DefWindowProc Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a1a92b100728f2a66ba2d2fe660857264"></a><!-- doxytag: member="WindowHook::callDefaultWndProc" ref="a1a92b100728f2a66ba2d2fe660857264" args="(long hWnd, long message, long wParam, long lParam)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long callDefaultWndProc </td>
          <td>(</td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>hWnd</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>message</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>wParam</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>lParam</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Call default window procedure with message parameters. Typically called in message handler functions. </p>
<p>This will bypass all other handler functions hooked after current handler, as well as the original window procedure.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">hWnd</td><td>handle to the window the message belongs to, 32 bit integer </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>message identifier, 32 bit integer </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">wParam</td><td>first message parameter, 32 bit integer </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">lParam</td><td>second message parameter, 32 bit integer </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>the return value of default window procedure</dd></dl>
<p>Refer to <a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17" title="Hook message processing with JavaScript function.">WindowHook.hookMessage</a> for usage of this method.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17" title="Hook message processing with JavaScript function.">WindowHook.hookMessage</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633572(VS.85).aspx" target="_blank">DefWindowProc Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a85fe484b22d5d233c6b84c2b193e508a"></a><!-- doxytag: member="WindowHook::callOriginalWndProc" ref="a85fe484b22d5d233c6b84c2b193e508a" args="(long hWnd, long message, long wParam, long lParam)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long callOriginalWndProc </td>
          <td>(</td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>hWnd</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>message</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>wParam</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>lParam</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Call original window procedure with message parameters. Typically called in message handler functions. </p>
<p>If there are other handler functions hooked after current handler, <a class="el" href="interface_window_hook.php#a85fe484b22d5d233c6b84c2b193e508a" title="Call original window procedure with message parameters. Typically called in message handler functions...">WindowHook.callOriginalWndProc</a> will call the next handler function; otherwise it calls the original window procedure.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">hWnd</td><td>handle to the window the message belongs to, 32 bit integer </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>message identifier, 32 bit integer </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">wParam</td><td>first message parameter, 32 bit integer </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">lParam</td><td>second message parameter, 32 bit integer </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>the return value of original window procedure</dd></dl>
<p>Refer to <a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17" title="Hook message processing with JavaScript function.">WindowHook.hookMessage</a> for usage of this method.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17" title="Hook message processing with JavaScript function.">WindowHook.hookMessage</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632593(VS.85).aspx" target="_blank">Window Procedures</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a916fade963fb61259cb414f46d6f0bb3"></a><!-- doxytag: member="WindowHook::unhook" ref="a916fade963fb61259cb414f46d6f0bb3" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unhook </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Unhook the current window and clear all hooked message handlers, if any. </p>
<p>If the current <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> has been unhooked, the method simply return without generating an error.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value</dd></dl>
<p>It's safe to call <a class="el" href="interface_window_hook.php#a916fade963fb61259cb414f46d6f0bb3">unhook</a> method in message handler functions.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_window_hook.php#a7ae2597fb98a0a318f2a9f6295c6bc17" title="Hook message processing with JavaScript function.">WindowHook.hookMessage</a> </dd></dl>

</div>
</div>
<a class="anchor" id="abaa21865555f3152ae8185807c50cd25"></a><!-- doxytag: member="WindowHook::unhookMessage" ref="abaa21865555f3152ae8185807c50cd25" args="(long message)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unhookMessage </td>
          <td>(</td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>message</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Stop receiving notification of specified window message. </p>
<p>Used to unhook a specified message. If the message hasn't been hooked before, the call is simply ignored without generating an error.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">message</td><td>ID of the message to unhook, a 32 bits integer. </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a5c785feafd2dd03964acb3813cc605a8"></a><!-- doxytag: member="WindowHook::hookedWnd" ref="a5c785feafd2dd03964acb3813cc605a8" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long hookedWnd<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns handle of current hooked window. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>handle of current hooked window. 0 if current <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> object has been unhooked.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd>WindowHook.hookWindow </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
