<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: Thread类参考</title>
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
<h1>Thread类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS Advanced Objects</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="Thread" -->
<p>Represent a script thread.  
<a href="#_details">更多...</a></p>

<p><a href="class_thread-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Methods</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937">detach</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Detach the underlying thread apart from the <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object.  <a href="#aa4c7e8ce5147b0a22d6f2543c017a937"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_thread.php#a980d8518a01dac55c30b0fb2fb894eba">kill</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Force terminate the thread.  <a href="#a980d8518a01dac55c30b0fb2fb894eba"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_thread.php#a61ce2a4d4a93bba3bc16271882996fc4">handle</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns HANDLE to the thread.  <a href="#a61ce2a4d4a93bba3bc16271882996fc4"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_thread.php#a7350fbd6ad10618f3b750b1f99ca5c3c">id</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns ID of the thread.  <a href="#a7350fbd6ad10618f3b750b1f99ca5c3c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5">running</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns <code>true</code> if the thread is running, <code>false</code> if the thread has ended.  <a href="#a2bb58b88ac256b165a95a806ae3b41e5"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Represent a script thread. </p>
<p><a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object is created by method <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a>:</p>
<div class="fragment"><pre class="fragment">    var thr = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(<span class="stringliteral">&quot;var var_in_thread = 1;&quot;</span>);
</pre></div><p>Refer to <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a> for a sample of wait until thread ends without blocking all <a class="el" href="interface_u_i.php" title="Open source object. Provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a> actions.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a> | <a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a> | <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a> </dd></dl>
<hr/><h2>Method Documentation</h2>
<a class="anchor" id="aa4c7e8ce5147b0a22d6f2543c017a937"></a><!-- doxytag: member="Thread::detach" ref="aa4c7e8ce5147b0a22d6f2543c017a937" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">detach </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Detach the underlying thread apart from the <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object. </p>
<p>After a thread has been detached, accessing its properties generates an error, and call to methods <a class="el" href="interface_thread.php#a980d8518a01dac55c30b0fb2fb894eba">kill</a> and <a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937">detach</a> are ignored without error. The thread will run until script in thread exits (the thread terminates itself), or process ends (which is a forced termination). There is no more control to the underlying thread.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a980d8518a01dac55c30b0fb2fb894eba"></a><!-- doxytag: member="Thread::kill" ref="a980d8518a01dac55c30b0fb2fb894eba" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">kill </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Force terminate the thread. </p>
<p>After a thread has been killed, accessing its properties generates an error, and call to methods <a class="el" href="interface_thread.php#a980d8518a01dac55c30b0fb2fb894eba">kill</a> and <a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937">detach</a> are ignored without error.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>Kill a thread may cause resource taken by the thread not freed correctly.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a> </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a61ce2a4d4a93bba3bc16271882996fc4"></a><!-- doxytag: member="Thread::handle" ref="a61ce2a4d4a93bba3bc16271882996fc4" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long handle<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns HANDLE to the thread. </p>
<p>The handle returned is the return value of <a href="http://msdn.microsoft.com/en-us/library/ms682453(VS.85).aspx" target="_blank">CreateThread Function</a>. Read property <a class="el" href="interface_thread.php#a61ce2a4d4a93bba3bc16271882996fc4">handle</a> after thread has been killed or detached generates an error.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>HANDLE to the thread.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937" title="Detach the underlying thread apart from the Thread object.">Thread.detach</a> | <a class="el" href="interface_thread.php#a980d8518a01dac55c30b0fb2fb894eba" title="Force terminate the thread.">Thread.kill</a> | <a href="http://msdn.microsoft.com/en-us/library/ms682453(VS.85).aspx" target="_blank">CreateThread Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a7350fbd6ad10618f3b750b1f99ca5c3c"></a><!-- doxytag: member="Thread::id" ref="a7350fbd6ad10618f3b750b1f99ca5c3c" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long id<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns ID of the thread. </p>
<p>Read property <a class="el" href="interface_thread.php#a7350fbd6ad10618f3b750b1f99ca5c3c">id</a> after thread has been killed or detached generates an error.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>ID of the thread.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937" title="Detach the underlying thread apart from the Thread object.">Thread.detach</a> | <a class="el" href="interface_thread.php#a980d8518a01dac55c30b0fb2fb894eba" title="Force terminate the thread.">Thread.kill</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a2bb58b88ac256b165a95a806ae3b41e5"></a><!-- doxytag: member="Thread::running" ref="a2bb58b88ac256b165a95a806ae3b41e5" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean running<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns <code>true</code> if the thread is running, <code>false</code> if the thread has ended. </p>
<p>Read property <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5">running</a> after thread has been killed or detached generates an error.</p>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if the thread is running, <code>false</code> if the thread has ended.</dd></dl>
<p>Property <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5">running</a> can be used to wait for a thread ends:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// start the new thread:</span>
    var thread = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(code_for_thread);
    <span class="keywordflow">while</span> (thread.running)
    {
        <span class="keywordflow">if</span> (!<a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="Returns UI object, which provides methods for common UI operations. Include localjs_ui.js to use it.">UI</a>.doEvents())
            <span class="keywordflow">break</span>;
    }
    <span class="comment">// thread ends.</span>
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937" title="Detach the underlying thread apart from the Thread object.">Thread.detach</a> | <a class="el" href="interface_thread.php#a980d8518a01dac55c30b0fb2fb894eba" title="Force terminate the thread.">Thread.kill</a> | <a class="el" href="interface_u_i.php#ad3d9b6673410aa22403cbb513c55ee4a">LOCALJS.UI.doEvents</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
