<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: EventHook类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: EventHook类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a>  </div>
  <div class="headertitle">
<h1>EventHook类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="EventHook" -->
<p>Returned by method <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a>, used to disconnect COM event connected.  
<a href="#_details">更多...</a></p>

<p><a href="class_event_hook-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_event_hook.php#abe175fcf658475bc56e9d6fa02bc88ec">disconnect</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Disconnect COM events connected by <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> method.  <a href="#abe175fcf658475bc56e9d6fa02bc88ec"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Returned by method <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a>, used to disconnect COM event connected. </p>
<p><a class="el" href="interface_event_hook.php" title="Returned by method COM.connectEvents, used to disconnect COM event connected.">EventHook</a> object is returned by <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> method. It has only one method <a class="el" href="interface_event_hook.php#abe175fcf658475bc56e9d6fa02bc88ec">disconnect</a>, which disconnects COM events connected.</p>
<p>Refer to <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> for sample code using <a class="el" href="interface_event_hook.php" title="Returned by method COM.connectEvents, used to disconnect COM event connected.">EventHook</a> object. </p>
<hr/><h2>方法文档</h2>
<a class="anchor" id="abe175fcf658475bc56e9d6fa02bc88ec"></a><!-- doxytag: member="EventHook::disconnect" ref="abe175fcf658475bc56e9d6fa02bc88ec" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">disconnect </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Disconnect COM events connected by <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> method. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value.</dd></dl>
<p>Refer to <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> for sample code calling <a class="el" href="interface_event_hook.php#abe175fcf658475bc56e9d6fa02bc88ec">disconnect</a> method. </p>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
