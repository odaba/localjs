<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: Threading类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: Threading类参考</title>
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
<h1>Threading类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="Threading" -->
<p><a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a> object exposes methods to create new script thread, sleep, get thread id, etc.  
<a href="#_details">更多...</a></p>

<p><a href="class_threading-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_thread.php">Thread</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64">newThread</a> (String code,[optional] String language,[optional] var arguments)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Create new script thread with optional arguments. Returns <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object represents the new thread.  <a href="#ab83b569dcb6b1ed35d6e9f13a8376a64"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_threading.php#a2f94dee6d866d46d1f949359c765f704">sleep</a> (long milliseconds)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Make current thread sleep for given milliseconds.  <a href="#a2f94dee6d866d46d1f949359c765f704"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_threading.php#ad28efcee5e8f0b2417a1776dc96365a6">currentThreadID</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns id of current thread.  <a href="#ad28efcee5e8f0b2417a1776dc96365a6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_threading.php#aef5e9b75a775657e77890df94dca043a">ending</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns <code>true</code> if current thread is told to end, <code>false</code> otherwise. Provides a chance for thread to end itself as a good citizen.  <a href="#aef5e9b75a775657e77890df94dca043a"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p><a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a> object exposes methods to create new script thread, sleep, get thread id, etc. </p>
<p>Retrieved from property <a class="el" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c">threading</a> of Object <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>. <p>To get access to object <a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a>: </p>
<div class="fragment"><pre class="fragment">    var threading = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>;
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_threading.php">Object Threading</a> </dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> </dd></dl>
<hr/><h2>方法文档</h2>
<a class="anchor" id="ab83b569dcb6b1ed35d6e9f13a8376a64"></a><!-- doxytag: member="Threading::newThread" ref="ab83b569dcb6b1ed35d6e9f13a8376a64" args="(String code,[optional] String language,[optional] var arguments)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_thread.php">Thread</a> newThread </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>code</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>language</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] var&#160;</td>
          <td class="paramname"> <em>arguments</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Create new script thread with optional arguments. Returns <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object represents the new thread. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">code</td><td>The script code to run in the new thread. Note that the code can be created dynamically on the fly. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">language</td><td>Optional. Specify the language of the script. Could be 'JavaScript' or 'JScript'. 'JavaScript' is assumed if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">arguments</td><td>Optional. Arguments passed to script in thread. Note that multiple arguments can be grouped into one JavaScript array or object.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object represents the new created thread.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>The supported JScript version is 5.7</dd></dl>
<h3>Prepare the code</h3>
<p>A very simple demostration of script thread:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(<span class="stringliteral">&quot;var var_in_thread = 1;&quot;</span>);
</pre></div><p>Obviously simple thread as above is not very useful. In most cases, script for new thread are saved in disk files:</p>
<div class="fragment"><pre class="fragment">    var script_thread_filename = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.buildPath(<a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getExeFolder(), <span class="stringliteral">&quot;script_thread.js&quot;</span>),
        thread_script = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.readFileUTF8(script_thread_filename);
    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(thread_script);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_f_i_l_e.php#ad1a8f26a2cf973ae0ddffc624a479e62">LOCALJS.FILE.getExeFolder</a> | <a class="el" href="interface_f_i_l_e.php#ab2be2bfa8a34bf9e4cc76064213c9240">LOCALJS.FILE.buildPath</a> | <a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">LOCALJS.FILE.readFileUTF8</a></dd></dl>
<h3>Receive arguments through <code>threadArg</code> Object</h3>
<p>Now the code is ready, the next step is to pass arguments to new thread. Suppose there are 3 variables <code>val1</code>, <code>val2</code> and <code>val3</code> to be passed to new thread, they can be grouped into a JavaScript array and passed as one argument:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(thread_script, [val1, val2, val3]);
</pre></div><p>Then in the script thread, the argument is available through a global object <code>threadArg:</code> </p>
<div class="fragment"><pre class="fragment">    <span class="comment">// This is code in new thread</span>
    var val_in_thread1 = threadArg[0],
        val_in_thread2 = threadArg[1],
        val_in_thread3 = threadArg[2];
</pre></div><p>Remember JavaScript functions are variables themselves, so functions can be passed to thread just as other type of variables.</p>
<p>Alternatively, these 3 variables can be grouped into one JavaScript object:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(thread_script, {<span class="stringliteral">&#39;arg1&#39;</span> : val1, <span class="stringliteral">&#39;arg2&#39;</span> : val2, <span class="stringliteral">&#39;arg3&#39;</span> : val3]);
</pre></div><p>And in script thread, the arguments can be referred by name through <code>threadArg:</code> </p>
<div class="fragment"><pre class="fragment">    <span class="comment">// This is code in new thread</span>
    var val_in_thread1 = threadArg[<span class="stringliteral">&#39;arg1&#39;</span>],
        val_in_thread2 = threadArg[<span class="stringliteral">&#39;arg2&#39;</span>],
        val_in_thread3 = threadArg[<span class="stringliteral">&#39;arg3&#39;</span>];
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Object <code>threadArg</code> is <em>ONLY</em> globaly available in script threads created by <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64">newThread</a> method. <em>NOT</em> available in script running in browser.</dd></dl>
<h3>localJS object in thread</h3>
<p>In addition to <code>threadArg</code>, there is another gloabl object available in script thread: <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> object.</p>
<p>The <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> object in script thread does <em>NOT</em> have browser related properties and methods. It has <em>ONLY</em> 3 properties and no methods: </p>
<ul>
<li><a class="el" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594">COM</a>, returns <a class="el" href="interface_c_o_m.php">Object COM</a> </li>
<li><a class="el" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c">threading</a>, returns <a class="el" href="interface_threading.php">Object Threading</a> </li>
<li><a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1">globalDict</a>, returns the gloabl Dictionary object.</li>
</ul>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">localJS.COM</a> | <a class="el" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">localJS.threading</a> | <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">localJS.globalDict</a></dd></dl>
<h3>Thread lifetime</h3>
<ul>
<li>If the <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object returned by <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64">newThread</a> method is ignored as below:</li>
</ul>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(thread_script, [val1, val2, val3]);
</pre></div><dl class="user"><dt><b></b></dt><dd>Then the thread will run until script in thread exits (the thread terminates itself), or process ends (which is a forced termination). There is no more control to the thread created.</dd></dl>
<ul>
<li>If the <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object returned by <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64">newThread</a> method is referred by a variable:</li>
</ul>
<div class="fragment"><pre class="fragment">    var thr = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(thread_script, [val1, val2, val3]);
</pre></div><dl class="user"><dt><b></b></dt><dd>Then the thread will run until script in thread exits (the thread terminates itself), or all variables referring <code>thr</code> have run out of scope (which is a forced termination).</dd></dl>
<ul>
<li>If it's unwanted to force terminate the thread when all referring variables run out of scope, use method <a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937" title="Detach the underlying thread apart from the Thread object.">Thread.detach</a>:</li>
</ul>
<div class="fragment"><pre class="fragment">    thr.detach();
</pre></div><dl class="user"><dt><b></b></dt><dd>Then the thread will run until script in thread exits, or process ends. There is also no more control to the thread.</dd></dl>
<p>Refer to <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a> for a sample of wait until thread ends without blocking all UI actions.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a> | <a class="el" href="interface_thread.php#aa4c7e8ce5147b0a22d6f2543c017a937" title="Detach the underlying thread apart from the Thread object.">Thread.detach</a></dd></dl>
<h3> <a id="synchronization"></a>  线程同步</h3>
<p>Thread synchronization becomes <span class="red">EXTREMELY SIMPLE</span> for localJS script: you don't need to synchronize access to variables from different script threads; they will be synchronized automatically.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Detail of automatic synchronization:</dd></dl>
<ul>
<li>Function will always be executed in the thread where it's defined, no matter which thread it's called from </li>
<li>Properties and methods of object will always be executed in the thread where the object is defined, no matter which thread it's called from</li>
</ul>
<p>Find out a more completed script thread example in <a href="http://sourceforge.net/projects/localjs/files/" target="_blank">demo application</a>. </p>

</div>
</div>
<a class="anchor" id="a2f94dee6d866d46d1f949359c765f704"></a><!-- doxytag: member="Threading::sleep" ref="a2f94dee6d866d46d1f949359c765f704" args="(long milliseconds)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sleep </td>
          <td>(</td>
          <td class="paramtype">long&#160;</td>
          <td class="paramname"> <em>milliseconds</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Make current thread sleep for given milliseconds. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">milliseconds</td><td>The milliseconds to sleep</td></tr>
  </table>
  </dd>
</dl>
<dl class="note"><dt><b>注解:</b></dt><dd><em>DO NOT</em> call Windows API <a href="http://msdn.microsoft.com/en-us/library/ms686298(VS.85).aspx" target="_blank">Sleep Function</a> or <a href="http://msdn.microsoft.com/en-us/library/ms686307(VS.85).aspx" target="_blank">SleepEx Function</a> to make current thread enter sleeping state, since these functions may also hang up script running in other threads when current thread is sleeping.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>Use <a class="el" href="interface_threading.php#a2f94dee6d866d46d1f949359c765f704">sleep</a> method instead.</dd></dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The method doesn't return a value. </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="ad28efcee5e8f0b2417a1776dc96365a6"></a><!-- doxytag: member="Threading::currentThreadID" ref="ad28efcee5e8f0b2417a1776dc96365a6" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long currentThreadID<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns id of current thread. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>ID of current thread. </dd></dl>

</div>
</div>
<a class="anchor" id="aef5e9b75a775657e77890df94dca043a"></a><!-- doxytag: member="Threading::ending" ref="aef5e9b75a775657e77890df94dca043a" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean ending<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns <code>true</code> if current thread is told to end, <code>false</code> otherwise. Provides a chance for thread to end itself as a good citizen. </p>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if current thread is told to end, <code>false</code> otherwise.</dd></dl>
<p>The value of <a class="el" href="interface_threading.php#aef5e9b75a775657e77890df94dca043a">ending</a> property is initialized to <code>false</code> when script thread is created. When <a class="el" href="interface_thread.php#a21571c3d25402f70379cfa4facaf8dfa" title="Forcely terminate the thread.">Thread.kill</a> is called, or the <a class="el" href="interface_thread.php" title="Represent a script thread.">Thread</a> object (returned by newThread method) run out of scope, it becomes <code>true</code>.</p>
<p>If the thread is doing something in a loop, then it can use <a class="el" href="interface_threading.php#aef5e9b75a775657e77890df94dca043a">ending</a> property as a signal to end the loop.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Property <a class="el" href="interface_threading.php#aef5e9b75a775657e77890df94dca043a">ending</a> is only available inside a new created script thread. It's not available in the JavaScript run inside browser.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_thread.php#a21571c3d25402f70379cfa4facaf8dfa" title="Forcely terminate the thread.">Thread.kill</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
