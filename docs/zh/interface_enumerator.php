<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: Enumerator类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a>  </div>
  <div class="headertitle">
<h1>Enumerator类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="Enumerator" -->
<p>Similar to <a href="http://msdn.microsoft.com/en-us/library/6ch9zb09(VS.85).aspx" target="_blank">Enumerator object in JScript</a>, providing access to items in Collection object.  
<a href="#_details">更多...</a></p>

<p><a href="class_enumerator-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_enumerator.php#ad8e6c6206cf37f968bbe6dbf187122ed">atEnd</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a Boolean value indicating if the enumerator is at the end of the collection.  <a href="#ad8e6c6206cf37f968bbe6dbf187122ed"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_enumerator.php#a7ceba38a65084b6f9b35b5c930ca0420">item</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the current item in the collection.  <a href="#a7ceba38a65084b6f9b35b5c930ca0420"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_enumerator.php#a6ee9f6f3140a53b0805c17ff3155d2f1">moveFirst</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Resets the current item in the collection to the first item.  <a href="#a6ee9f6f3140a53b0805c17ff3155d2f1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_enumerator.php#aa8ea58356f7061aa51df936b16acb242">moveNext</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Moves the current item to the next item in the collection.  <a href="#aa8ea58356f7061aa51df936b16acb242"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Similar to <a href="http://msdn.microsoft.com/en-us/library/6ch9zb09(VS.85).aspx" target="_blank">Enumerator object in JScript</a>, providing access to items in Collection object. </p>
<p><a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> object is created by <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> method as following:</p>
<div class="fragment"><pre class="fragment">    var enumerator = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Enumerator&quot;</span>, object_collection);
</pre></div><p>The methods of object <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> are similar to <a href="http://msdn.microsoft.com/en-us/library/6ch9zb09(VS.85).aspx" target="_blank">Enumerator object in JScript</a>, with a little bit enhancement: methods <code>moveFirst</code> and <code>moveNext</code> of object <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> return boolean values to indicate enumeration status.</p>
<p>Refer to <a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">COM.getObject</a> for an example of using object <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> </p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">COM.getObject</a> | <a href="http://msdn.microsoft.com/en-us/library/6ch9zb09(VS.85).aspx" target="_blank">Enumerator object in JScript</a> </dd></dl>
<hr/><h2>方法文档</h2>
<a class="anchor" id="ad8e6c6206cf37f968bbe6dbf187122ed"></a><!-- doxytag: member="Enumerator::atEnd" ref="ad8e6c6206cf37f968bbe6dbf187122ed" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean atEnd </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns a Boolean value indicating if the enumerator is at the end of the collection. </p>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if there is no more items to enumerate in the collection, or the collection is empty. <code>false</code> Otherwise. </dd></dl>

</div>
</div>
<a class="anchor" id="a7ceba38a65084b6f9b35b5c930ca0420"></a><!-- doxytag: member="Enumerator::item" ref="a7ceba38a65084b6f9b35b5c930ca0420" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object item </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the current item in the collection. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The current item. If the collection is empty or the current item is undefined, it returns undefined. </dd></dl>

</div>
</div>
<a class="anchor" id="a6ee9f6f3140a53b0805c17ff3155d2f1"></a><!-- doxytag: member="Enumerator::moveFirst" ref="a6ee9f6f3140a53b0805c17ff3155d2f1" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean moveFirst </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Resets the current item in the collection to the first item. </p>
<p>If there are no items in the collection, the current item is set to undefined. </p>
<dl class="return"><dt><b>返回:</b></dt><dd><code>false</code> if the collection is empty, <code>true</code> otherwise. </dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>After object <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> is created, it has called moveFirst internally. </dd></dl>

</div>
</div>
<a class="anchor" id="aa8ea58356f7061aa51df936b16acb242"></a><!-- doxytag: member="Enumerator::moveNext" ref="aa8ea58356f7061aa51df936b16acb242" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean moveNext </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Moves the current item to the next item in the collection. </p>
<p>If the enumerator is at the end of the collection or the collection is empty, the current item is set to undefined. </p>
<dl class="return"><dt><b>返回:</b></dt><dd><code>false</code> if enumerator is at the end of the collection or the collection is empty, <code>true</code> otherwise. </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
