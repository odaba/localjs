<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: COM类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a>  </div>
  <div class="headertitle">
<h1>COM类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="COM" -->
<p>Object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a> exposes methods to create COM object, connect COM events, etc.  
<a href="#_details">更多...</a></p>

<p><a href="class_c_o_m-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881">createObject</a> (String progID,[optional] String location)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Create COM object by ProgID, optionally specify object location.  <a href="#a14285e3676c39b414cac2652046ec881"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d">getObject</a> (String displayName,[optional] String progID)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get reference to COM object by displayName, optionally specify ProgID for the object to be created.  <a href="#aa5d75d3298d5de451ecbead91d92b32d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_event_hook.php">EventHook</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247">connectEvents</a> (Object source, Object handler,[optional] boolean event_parameters_return_value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Connect JavaScript functions to COM object events.  <a href="#a03b548ce8da020a692d590d4a5b21247"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_c_o_m.php#a9742cc74cdf0445008d4adb2adbaa0d3">interface2Object</a> (long rawPointer)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Convert a raw <code>IDispatch</code> * pointer to an object usable in JavaScript.  <a href="#a9742cc74cdf0445008d4adb2adbaa0d3"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a> exposes methods to create COM object, connect COM events, etc. </p>
<p>Retrieved from property <a class="el" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594">COM</a> of Object <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>. <p>To get access to object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a>: </p>
<div class="fragment"><pre class="fragment">    var com = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>;
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php">Object COM</a> </dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> </dd></dl>
<hr/><h2>Method Documentation</h2>
<a class="anchor" id="a14285e3676c39b414cac2652046ec881"></a><!-- doxytag: member="COM::createObject" ref="a14285e3676c39b414cac2652046ec881" args="(String progID,[optional] String location)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object createObject </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>progID</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>location</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Create COM object by ProgID, optionally specify object location. </p>
<p>createObject creates arbitrary COM object just like <code>CreateObject</code> function of VBScript, and <code>new</code> <code>ActiveXObject</code> statement of JScript. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">progID</td><td>The ProgID of the COM object to be created. <em>ProgID</em> is a string often in form of <em>servername.typename</em>, refer to <a href="http://msdn.microsoft.com/en-us/library/dcw63t7z(VS.85).aspx" target="_blank">CreateObject Function (VBScript)</a> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">location</td><td>Optional, the server name where the created object locates. Default to <code>localhost</code> </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The COM object created</dd></dl>
<p>Code below creates a subfolder under user data folder. </p>
<dl class="user"><dt><b></b></dt><dd>Create a <a href="http://msdn.microsoft.com/en-us/library/bb774094(VS.85).aspx" target="_blank">Shell Object</a> first:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// Just like normal JavaScript method, createObject can be referred by a variable</span>
    var <a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a> = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>,

        <span class="comment">// create Shell object to get user application data folder</span>
        shellApp = <a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Shell.Application&quot;</span>),

        <span class="comment">// 0x1a means APPLICATION_DATA, refer to ShellSpecialFolderConstants below</span>
        appDataFolder = shellApp.Namespace(0x1a).Self.Path;
</pre></div><dl class="user"><dt><b></b></dt><dd>Next, create a <a href="http://msdn.microsoft.com/en-us/library/6kxy1a51(VS.85).aspx" target="_blank">FileSystemObject</a>:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// create FileSystemObject to create data folder</span>
    var fso = <a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Scripting.FileSystemObject&quot;</span>),
        mineDataFolder = fso.BuildPath(appDataFolder, <span class="stringliteral">&quot;LocalJSDemo&quot;</span>);
</pre></div><dl class="user"><dt><b></b></dt><dd>Use <a href="http://msdn.microsoft.com/en-us/library/6kxy1a51(VS.85).aspx" target="_blank">FileSystemObject</a> to create folder:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="keywordflow">if</span> (!fso.FolderExists(mineDataFolder))
        fso.CreateFolder(mineDataFolder);
</pre></div><dl class="user"><dt><b>Create LocalJS internal objects</b></dt><dd></dd></dl>
<p>In addition to progID registered in system, <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> also supports several internal objects: </p>
<ul>
<li>Call <code>createObject</code> with <em>progID</em> set to <code>"DllCall"</code> <br/>
 <br/>
 Create <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object. <p><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object enables JavaScript call functions exported by DLL or EXE files, including most Windows API functions. </p>
 The <em>second</em> <em>parameter</em> is ignored in this case. <br/>
 <br/>
 </li>
<li>Call <code>createObject</code> with <em>progID</em> set to <code>"Enumerator"</code> <br/>
 <br/>
 Create <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> object. <p>Similar to <a href="http://msdn.microsoft.com/en-us/library/6ch9zb09(VS.85).aspx" target="_blank">Enumerator object in JScript</a>, providing access to items in Collection object. </p>
 In this case, the <em>second</em> <em>parameter</em> is <em>NOT</em> a String; it's the <em>collection</em> <em>object</em> to be enumerated. <br/>
 <br/>
 </li>
<li>Call <code>createObject</code> with <em>progID</em> set to <code>"WindowHook"</code> <br/>
 <br/>
 Create <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> object. <p>Hook messages of the specified window. </p>
 In this case, the <em>second</em> <em>parameter</em> is <em>NOT</em> a String; it's HWND handle to the window be hooked. Property <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">localJS.hostWnd</a> returns HWND to current LocalJS browser window.</li>
</ul>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> | <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> | <a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> | <a href="http://msdn.microsoft.com/en-us/library/dcw63t7z(VS.85).aspx" target="_blank">CreateObject Function (VBScript)</a> | <a href="http://msdn.microsoft.com/en-us/library/7sw4ddf8(VS.85).aspx" target="_blank">ActiveXObject Object (JScript)</a> | <a href="http://msdn.microsoft.com/en-us/library/dd542719(VS.85).aspx" target="_blank">&lt;ProgID&gt; Key (COM Fundamentals)</a> | <a href="http://msdn.microsoft.com/en-us/library/bb774085(VS.85).aspx" target="_blank">Shell.NameSpace Method</a> | <a href="http://msdn.microsoft.com/en-us/library/bb774096(VS.85).aspx" target="_blank">ShellSpecialFolderConstants</a> | <a href="http://msdn.microsoft.com/en-us/library/6kxy1a51(VS.85).aspx" target="_blank">FileSystemObject</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aa5d75d3298d5de451ecbead91d92b32d"></a><!-- doxytag: member="COM::getObject" ref="aa5d75d3298d5de451ecbead91d92b32d" args="(String displayName,[optional] String progID)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object getObject </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>displayName</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>progID</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get reference to COM object by displayName, optionally specify ProgID for the object to be created. </p>
<p>getObject gets reference to COM Object from the Object's moniker name. For an Object to be loaded from file, the absolute path of the file is the moniker name. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">displayName</td><td>The moniker name of the COM object </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">progID</td><td>Optional, the meaning of <em>progID</em> depends on <em>displayName</em> </p>
<ul>
<li>When <em>displayName</em> is an absolute path of an existing file, and the file supports more than one class of object, <em>progID</em> can specify which object to be activated. This is similar to <code>GetObject</code> function of VBScript. Refer to <a href="http://msdn.microsoft.com/en-us/library/kdccchxa(VS.85).aspx" target="_blank">GetObject Function (VBScript)</a> </li>
<li>Otherwise, <em>progID</em> is ignored. </li>
</ul>
</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>Reference to the COM object</dd></dl>
<p>One of the popular usage of getObject method is to connect to <a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">Windows Management Instrumentation (WMI) Objects</a>:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// Following code popups description of each processor in running Windows.</span>
    var com = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>,
        <span class="comment">// get WMI object</span>
        objWMI = com.<a class="code" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">getObject</a>(<span class="stringliteral">&quot;winmgmts:&quot;</span>);
</pre></div><dl class="user"><dt><b></b></dt><dd>Lots of system information can be queried through WMI objects. Code below retrieves CPU information into a Collection object:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// Query processor information</span>
    var colItems = objWMI.ExecQuery(<span class="stringliteral">&quot;Select * from  Win32_Processor&quot;</span>);
</pre></div><dl class="user"><dt><b></b></dt><dd>Items in Collection object are accessed through object <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a>, similarly to the <code>For...Each</code> statement in VBScript:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// create enumerator object to enumerate items in collection object</span>
    var enumItems = com.createObject(<span class="stringliteral">&quot;Enumerator&quot;</span>, colItems);

    <span class="comment">// Just loop the enumeration</span>
    <span class="keywordflow">if</span> (!enumItems.atEnd())
    {
        <span class="keywordflow">do</span>
        {
            var objItem = enumItems.item();
            alert(objItem.Description);
        } <span class="keywordflow">while</span> (enumItems.moveNext())
    }

    <span class="comment">// Alternatively loop the collection in JScript way</span>
    <span class="comment">// In JScript, methods moveFirst and moveNext do not return value</span>
    enumItems.moveFirst();
    <span class="keywordflow">while</span> (!enumItems.atEnd())
    {
        var objItem = enumItems.item();
        alert(objItem.Description);
        enumItems.moveNext();
    }
</pre></div><p>There are a lots of sample code about WMI on web in VBScript or JScript, simply search it.</p>
<p>When <em>displayName</em> is an absolute path of an existing file, getObject internally calls <a href="http://msdn.microsoft.com/en-us/library/ms694473(VS.85).aspx" target="_blank">CoGetInstanceFromFile</a> to create the object; otherwise, <a href="http://msdn.microsoft.com/en-us/library/ms678805(VS.85).aspx" target="_blank">CoGetObject</a> is called to fullfill the object creation request.</p>
<dl class="note"><dt><b>注解:</b></dt><dd><code>GetObject</code> function of VBScript supports create a new object when its first parameter is zero length string "", and get reference to an existing object when its first parameter is omitted. <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> achieves same thing in a simpler method: <ul>
<li>To create a new Object, simply use <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> method. </li>
<li>To get reference to an existing object, such as WMI object, simply use the moniker name of the object (for WMI object, it's <code>winmgmts:</code>) for parameter <em>displayName</em>, and omit the second parameter <em>progID</em>.</li>
</ul>
</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> | <a href="http://msdn.microsoft.com/en-us/library/kdccchxa(VS.85).aspx" target="_blank">GetObject Function (VBScript)</a> | <a href="http://msdn.microsoft.com/en-us/library/ms678805(VS.85).aspx" target="_blank">CoGetObject Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms694473(VS.85).aspx" target="_blank">CoGetInstanceFromFile Function</a> | <a href="http://msdn.microsoft.com/en-us/library/aa394582(VS.85).aspx" target="_blank">Windows Management Instrumentation</a> | <a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">Connecting to WMI Objects</a> | <a href="http://www.codeproject.com/KB/vbscript/VvvHardwareInfo.aspx" target="_blank">Retrieving hardware information with WMI</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a03b548ce8da020a692d590d4a5b21247"></a><!-- doxytag: member="COM::connectEvents" ref="a03b548ce8da020a692d590d4a5b21247" args="(Object source, Object handler,[optional] boolean event_parameters_return_value)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_event_hook.php">EventHook</a> connectEvents </td>
          <td>(</td>
          <td class="paramtype">Object&#160;</td>
          <td class="paramname"> <em>source</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">Object&#160;</td>
          <td class="paramname"> <em>handler</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>event_parameters_return_value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Connect JavaScript functions to COM object events. </p>
<p>COM object events are identified by event name. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">source</td><td>The COM object firing events </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">handler</td><td>Object matching event name to JavaScript functions handling events, see sample code below </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">event_parameters_return_value</td><td>Optional. Can be set to <code>false</code> to indicate the value of event parameters don't need to be changed in event handler. <br/>
 Default <code>true</code>. Set it to <code>false</code> can improve performance. </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><a class="el" href="interface_event_hook.php" title="Returned by method COM.connectEvents, used to disconnect COM event connected.">EventHook</a> object used to disconnect COM events if connected successfully. <code>false</code> otherwise.</dd></dl>
<p>COM object sometimes allows event handler control behavior of the COM object by changing event parameters. To change event parameters in JavaScript event handling functions, leave <em>event_parameters_return_value</em> omitted (so it has default value <code>true</code>), and assign new value to the parameter through property <code>returnValue</code> of the parameter:</p>
<div class="fragment"><pre class="fragment">    parameter.returnValue = newValue;
</pre></div><p>Following code connects JavaScript functions to COM events <code>NewWindow3</code> and <code>DocumentComplete</code> fired by <code>WebBrowser</code> object. </p>
<dl class="user"><dt><b></b></dt><dd>Create handling function for <code>NewWindow3</code> event:</dd></dl>
<div class="fragment"><pre class="fragment">    var local_js = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>,
        com = local_js.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>;

    <span class="comment">// Handler for WebBrowser event NewWindow3</span>
    <span class="comment">// NewWindow3 event is fired when a new window is to be created. For example, when a link is clicked to open a url in a new window</span>
    var onNewWindow3 = function(disp, cancel, flags, url_context, url)
    {
        <span class="comment">// ok_to_open_new_window is a global variable defined elsewhere</span>
        <span class="keywordflow">if</span> (ok_to_open_new_window)
        {
            <span class="comment">// let&#39;s open the url in a new localJS browser window created here.</span>
            <span class="comment">// assume createBrowserWindow is a global JavaScript function defined elsewhere</span>
            disp.returnValue = <a class="code" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow</a>(url, -100, -100, 10, 10, WS_POPUP | WS_CAPTION | WS_VISIBLE | WS_SYSMENU | WS_THICKFRAME, 0);
        }
        <span class="keywordflow">else</span>
        {
            <span class="comment">// simply cancel the new window</span>
            cancel.returnValue = <span class="keyword">true</span>;
        }
    }
</pre></div><dl class="user"><dt><b></b></dt><dd>Create handling function for <code>DocumentComplete</code> event:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// Handler for WebBrowser event DocumentComplete</span>
    <span class="comment">// DocumentComplete event is fired when a document is completely loaded and initialized.</span>
    <span class="comment">// Note that although COM event DocumentComplete has two parameters, we could ignore them in JavaScript handling function if we don&#39;t need those parameters.</span>
    var onDocumentComplete = function()
    {
        alert(<span class="stringliteral">&quot;DocumentComplete&quot;</span>);
    }
</pre></div><dl class="user"><dt><b></b></dt><dd>Connect above JavaScript functions to COM events through <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> method:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// local_js.webBrowser returns the WebBrowser object of current browser.</span>
    <span class="comment">// We need to return value through parameters of NewWindow3 event, so leave the 3rd parameter omitted (with default value true).</span>
    var event_hook = com.connectEvents(local_js.webBrowser, {<span class="stringliteral">&#39;NewWindow3&#39;</span>:onNewWindow3, <span class="stringliteral">&#39;DocumentComplete&#39;</span>:onDocumentComplete});
</pre></div><dl class="user"><dt><b></b></dt><dd>Once the event connection is not required, call <a class="el" href="interface_event_hook.php#abe175fcf658475bc56e9d6fa02bc88ec" title="Disconnect COM events connected by COM.connectEvents method.">EventHook.disconnect</a> to disconnect:</dd></dl>
<div class="fragment"><pre class="fragment">    event_hook.disconnect();
</pre></div><p>It's not necessary to include all event names in parameter <em>handler</em>. You can only list those to be handled.</p>
<p>One JavaScript function can be used to handle multiple COM events. In other words, code below is OK:</p>
<div class="fragment"><pre class="fragment">    com.connectEvents(local_js.webBrowser, {<span class="stringliteral">&#39;NewWindow3&#39;</span>:onNewWindow3, <span class="stringliteral">&#39;DocumentComplete&#39;</span>:onDocumentComplete, <span class="stringliteral">&#39;DownloadComplete&#39;</span>:onDocumentComplete});
</pre></div><p>JavaScript event handling function doesn't have to list all COM event parameters if the parameters are ignored.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Property <code>returnValue</code> is only available to COM event parameters being able to return value (parameters passed by reference by COM object), and when <em>event_parameters_return_value</em> is omitted or set to true.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_event_hook.php" title="Returned by method COM.connectEvents, used to disconnect COM event connected.">EventHook</a> | webBrowser | <a href="http://msdn.microsoft.com/en-us/library/aa768337(VS.85).aspx" target="_blank">NewWindow3 Event</a> | <a href="http://msdn.microsoft.com/en-us/library/aa768329(VS.85).aspx" target="_blank">DocumentComplete Event</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9742cc74cdf0445008d4adb2adbaa0d3"></a><!-- doxytag: member="COM::interface2Object" ref="a9742cc74cdf0445008d4adb2adbaa0d3" args="(long rawPointer)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object interface2Object </td>
          <td>(</td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>rawPointer</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Convert a raw <code>IDispatch</code> * pointer to an object usable in JavaScript. </p>
<p><code>interface2Object</code> method helps expanding JavaScript ability with your <em>internal</em> COM Objects. </p>
<dl class="user"><dt><b></b></dt><dd><em>You can simply ignore content below if you are not familiar with COM. To use JavaScript well, you don't have to understand COM. :-)</em></dd></dl>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">rawPointer</td><td>The raw <code>IDispatch</code> * pointer, passed as a 32 bits integer </td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The object to be used in JavaScript</dd></dl>
<p><code>interface2Object</code> is useful to bridge your internal COM object (implementing <code>IDispatch</code>) to JavaScript.</p>
<p>Suppose you have following function in C++:</p>
<div class="fragment"><pre class="fragment">    IDispatch * g_internal_object = NULL; <span class="comment">// Assume g_internal_object is initialized elsewhere.</span>

    <span class="comment">// Suppose the function is exported by demo.dll</span>
    <span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> IDispatch * __stdcall getInternalDispatchObject(<span class="keywordtype">void</span>)
    {
        <span class="keywordflow">if</span> (g_internal_object)
            g_internal_object-&gt;AddRef();

        <span class="keywordflow">return</span> g_internal_object;
    }
</pre></div><dl class="user"><dt><b></b></dt><dd>Then the internal object can be introduced to JavaScript like this:</dd></dl>
<div class="fragment"><pre class="fragment">    var com = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>,
        dllCall = com.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&#39;DllCall&#39;</span>);

    <span class="comment">// localJS is able to parse the function prototype for function name, return type, and parameters.</span>
    dllCall.add(<span class="stringliteral">&#39;path_to_demo.dll&#39;</span>, <span class="stringliteral">&#39;extern &quot;C&quot; IDispatch * __stdcall getInternalDispatchObject(void)&#39;</span>);

    var objInternal = com.interface2Object(dllCall.getInternalDispatchObject());
</pre></div><p>Refer to <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> function for example code using <a class="el" href="interface_c_o_m.php#a9742cc74cdf0445008d4adb2adbaa0d3">interface2Object</a> when create new LocalJS browser from JavaScript.</p>
<dl class="note"><dt><b>注解:</b></dt><dd><code>interface2Object</code> method does <em>NOT</em> modify reference count of the <code>IDispatch</code> * pointer passed in. Function <code>getInternalDispatchObject</code> <em>SHOULD</em> make sure the reference count is increased by 1. When corresponding JavaScript object is destructed, it will decrease the reference count of the object by 1.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>Illustration using QueryInterface:</dd></dl>
<div class="fragment"><pre class="fragment">    IInternalInterface * g_internal_object2 = NULL; <span class="comment">// Assume g_internal_object2 is initialized elsewhere.</span>

    <span class="comment">// This function should be exported to be available in JavaScript</span>
    <span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> IDispatch * __stdcall getInternalDispatchObject2(<span class="keywordtype">void</span>)
    {
        IDispatch * disp_interface = NULL;

        <span class="comment">// IUnknown::QueryInterface increases reference count by 1.</span>
        <span class="keywordflow">if</span> (g_internal_object2 &amp;&amp; SUCCEEDED(g_internal_object2-&gt;QueryInterface(IID_IDispatch, (<span class="keywordtype">void</span> **) &amp;disp_interface)))
            <span class="keywordflow">return</span> disp_interface;

        <span class="keywordflow">return</span> NULL;
    }
</pre></div><dl class="user"><dt><b></b></dt><dd>Illustration using CComQIPtr:</dd></dl>
<div class="fragment"><pre class="fragment">    CComPtr&lt;IInternalInterface&gt; g_internal_object3; <span class="comment">// Assume g_internal_object3 is initialized elsewhere.</span>

    <span class="comment">// This function should be exported to be available in JavaScript</span>
    <span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> IDispatch * __stdcall getInternalDispatchObject3(<span class="keywordtype">void</span>)
    {
        <span class="comment">// constructor of CComQIPtr&lt;IDispatch&gt; increases reference count by 1.</span>
        CComQIPtr&lt;IDispatch&gt; disp_interface(g_internal_object3);

        <span class="comment">// after Detach() is called, destructor of CComQIPtr&lt;IDispatch&gt; does not decrease reference count any more.</span>
        <span class="keywordflow">return</span> disp_interface.Detach();
    }
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> | <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#gad71e54ddf1d1fad062c95a5c9b574806" title="Returns the WebBrowser object of underlying LocalJS browser window or Internet Explorer.">getBrowserObj()</a> | <a href="http://msdn.microsoft.com/en-us/library/ms693431(VS.85).aspx" target="_blank">Implementing Reference Counting</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
