<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: LocalJS 高级对象";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: LocalJS 高级对象</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#nested-classes">组合类型</a>  </div>
  <div class="headertitle">
<h1>LocalJS 高级对象</h1>  </div>
</div>
<div class="contents">

<p>All advanced JavaScript objects provided by LocalJS, implemented by LocalJS.Dll, and accessable from root object <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.  
<a href="#_details">更多...</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
组合类型</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php">Buffer</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object represents a fixed size buffer, used as parameters in Dll function call.  <a href="interface_buffer.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_c_o_m.php">COM</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a> exposes methods to create COM object, connect COM events, etc.  <a href="interface_c_o_m.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_dll_call.php">DllCall</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object enables JavaScript call functions exported by DLL or EXE files, including most Windows API functions.  <a href="interface_dll_call.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_enumerator.php">Enumerator</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Similar to <a href="http://msdn.microsoft.com/en-us/library/6ch9zb09(VS.85).aspx" target="_blank">Enumerator object in JScript</a>, providing access to items in Collection object.  <a href="interface_enumerator.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_event_hook.php">EventHook</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returned by method <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a>, used to disconnect COM event connected.  <a href="interface_event_hook.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php">localJS</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The root object of all advanced JavaScript objects. <em>Available directly in JavaScript.</em>  <a href="interfacelocal_j_s.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php">Structure</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object represents a C struct, used as parameters in Dll function call.  <a href="interface_structure.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_thread.php">Thread</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Represent a script thread.  <a href="interface_thread.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_threading.php">Threading</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight"><a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a> object exposes methods to create new script thread, sleep, get thread id, etc.  <a href="interface_threading.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_window_hook.php">WindowHook</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Hook messages of the specified window.  <a href="interface_window_hook.php#_details">更多...</a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>All advanced JavaScript objects provided by LocalJS, implemented by LocalJS.Dll, and accessable from root object <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>. </p>
<p>Advanced JavaScript objects are implemented by LocalJS.Dll, they are available without need to include any JavaScript files. Diagram below shows the creation relationship among all advanced LocalJS objects:</p>
<div align="center">
<img src="objects.png" alt="objects.png"/>
<p><strong>LocalJS Advanced Objects Tree</strong></p></div>
 <dl class="user"><dt><b>Comments:</b></dt><dd></dd></dl>
<ul>
<li>Objects like ADODB are system objects available through LocalJS </li>
<li>.Net object will be available in future version</li>
</ul>
<p>Those objects above are <em>ONLY</em> available in LocalJS browsers (browsers hosted by LocalJS) and LocalJS Internet Explorer (standalone Internet Explorer application launched by LocalJS). They are not available to any other applications or browsers. </p>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
