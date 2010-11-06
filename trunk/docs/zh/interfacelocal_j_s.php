<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: localJS类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: localJS类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a>  </div>
  <div class="headertitle">
<h1>localJS类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="localJS" -->
<p>The root object of all advanced JavaScript objects. <em>Available directly in JavaScript.</em>  
<a href="#_details">更多...</a></p>

<p><a href="classlocal_j_s-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a638f18884615ddd3e7cc901a3302f931">trust</a> (String trusted_source,...)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Trust web pages from given domain, url prefix, or path prefix. LocalJS objects are ONLY available in pages from trusted sources.  <a href="#a638f18884615ddd3e7cc901a3302f931"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c">closeWindow</a> ([optional] var result)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Close the current browser window. <em>NOT</em> available in standalone Internet Explorer application.  <a href="#ae0a273e38f45d2547157ddb6cfa6108c"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td colspan="2"><div class="groupHeader">Properties for local access</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_c_o_m.php">COM</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594">COM</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Readonly. Returns object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a>, which exposes methods to create COM object, connect COM events, etc.  <a href="#ac46dd82aca231ab33f6308ba12975594"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_threading.php">Threading</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c">threading</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Readonly. Returns object <a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a>, which exposes methods to create new script thread, sleep, get thread id, etc.  <a href="#ac12d811a674c6cc7417b6f9a8d39736c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">WebBrowser&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9">webBrowser</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Readonly. Returns <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a> of current browser. Help transparently moving forth and back between local and remote url.  <a href="#a426d92f4370abff654c9a85a060c25c9"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Properties for sharing data between different HTML pages and windows</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Dictionary&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa">windowDict</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns a <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> associated with current browser window. An ideal persistent storage between browser navigations.  <a href="#ad22e31bcafab13df9916ae10ec5ee3fa"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Dictionary&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1">globalDict</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns a <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> globally available in the process. An ideal global persistent storage.  <a href="#a3db8e9f0672a2aed8a468da67db3b2e1"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Browser related handles</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a89e9b0c0ce2312add432fb1cca52971e">browserWindowHandle</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the browser handle returned by function <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> when create this browser window or standalone Internet Explorer application.  <a href="#a89e9b0c0ce2312add432fb1cca52971e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#aa3da9fff8bb40b478ee513cba4f31a4f">hInst</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the <code>HINSTANCE</code> parameter passed to <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> function.  <a href="#aa3da9fff8bb40b478ee513cba4f31a4f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb">hostWnd</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the <code>HWND</code> handle of current browser window.  <a href="#aa05066bf1c7f31ea898c0d2aed29eedb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a231aa00f34826cb7baf3d21ca25cc2cc">IETabWnd</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the <code>HWND</code> handle of current browser window tab. <em>ONLY</em> apply to Internet Explorer 7 and above.  <a href="#a231aa00f34826cb7baf3d21ca25cc2cc"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Misc.</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a3566d4b69cb659d2e22501a77bc5af32">btmBarHeight</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the height of the bottom <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> bar in pixels.  <a href="#a3566d4b69cb659d2e22501a77bc5af32"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interfacelocal_j_s.php#a29a79e553fe87184f3a6ed6a9e0b270f">enableF5</a><code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set a boolean value to control whether pressing F5 key reloads HTML page. Ignored by standalone Internet Explorer application.  <a href="#a29a79e553fe87184f3a6ed6a9e0b270f"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>The root object of all advanced JavaScript objects. <em>Available directly in JavaScript.</em> </p>
<p><a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> object is where all local access starts from. The properties and methods of <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> object provide all kinds of local access abilities.</p>
<p>To get access to object <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>: </p>
<div class="fragment"><pre class="fragment">    var local_js = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>;
</pre></div><p>Advanced JavaScript objects are implemented by LocalJS.Dll, they are available without need to include any JavaScript files. Diagram below shows the creation relationship among all advanced LocalJS objects:</p>
<div align="center">
<img src="objects.png" alt="objects.png"/>
<p><strong>LocalJS Advanced Objects Tree</strong></p></div>
 <dl class="user"><dt><b>Comments:</b></dt><dd></dd></dl>
<ul>
<li>Objects like ADODB are system objects available through LocalJS </li>
<li>.Net object will be available in future version</li>
</ul>
<p>Those objects above are <em>ONLY</em> available in LocalJS browsers (browsers hosted by LocalJS) and LocalJS Internet Explorer (standalone Internet Explorer application launched by LocalJS). They are not available to any other applications or browsers. </p>
 <hr/><h2>方法文档</h2>
<a class="anchor" id="a638f18884615ddd3e7cc901a3302f931"></a><!-- doxytag: member="localJS::trust" ref="a638f18884615ddd3e7cc901a3302f931" args="(String trusted_source,...)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">trust </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>trusted_source</em>, </td>
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

<p>Trust web pages from given domain, url prefix, or path prefix. LocalJS objects are ONLY available in pages from trusted sources. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">trusted_source</td><td>It can be: </p>
<ul>
<li>Domain name like <code>"mysite.com"</code>. All pages from the domain and its subdomains are trusted. </li>
<li>Url prefix like <code>"http://mysite.com/myapp/"</code>. Pages match this url prefix are trusted. </li>
<li>Path prefix like <code>"C:\\Program Files\\MyApp\\"</code>. Pages whose path match this path prefix are trusted. </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">...</td><td>Optional. More trusted sources to be added.</td></tr>
  </table>
  </dd>
</dl>
<p>Typically <code>trust</code> is called at the first html file loaded by LocalJS bootstrap program, which by default is LocalJSBootstrap.html.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Initially the sub folders of folder containing LocalJS bootstrap program exe file are trusted. So those folders don't have to be passed to <code>trust</code> method.</dd></dl>
<p>Following code illustrates how to trust pages from your site: </p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a638f18884615ddd3e7cc901a3302f931" title="Trust web pages from given domain, url prefix, or path prefix. LocalJS objects are ONLY available in ...">trust</a>(<span class="stringliteral">&quot;mysite.com&quot;</span>, <span class="stringliteral">&quot;mysite.org&quot;</span>); <span class="comment">// All pages from mysite.com, or any subdomain like &quot;app.mysite.com&quot; are trusted.</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="ae0a273e38f45d2547157ddb6cfa6108c"></a><!-- doxytag: member="localJS::closeWindow" ref="ae0a273e38f45d2547157ddb6cfa6108c" args="([optional] var result)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">closeWindow </td>
          <td>(</td>
          <td class="paramtype">[optional] var&#160;</td>
          <td class="paramname"> <em>result</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Close the current browser window. <em>NOT</em> available in standalone Internet Explorer application. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">result</td><td>Optional. A value to be copied to parameter <em>pVarResult</em> of <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> function. Used to return result to hosting API.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>This method doesn't return a value.</dd></dl>
<p>Method <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c">closeWindow</a> provides the way to close current browser window from within JavaScript.</p>
<p>Following code illustrates how to use method closeWindow:</p>
<div class="fragment"><pre class="fragment">    document.getElementById(<span class="stringliteral">&#39;close_button&#39;</span>).attachEvent(<span class="stringliteral">&quot;onclick&quot;</span>, function()
    {
        <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">closeWindow</a>();
    });
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>To close the browser window of standalone Internet Explorer application, use:</dd></dl>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">webBrowser</a>.Quit();
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">localJS.webBrowser</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752084(VS.85).aspx" target="_blank">InternetExplorer Object</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752097(VS.85).aspx" target="_blank">Quit Method</a> </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="ac46dd82aca231ab33f6308ba12975594"></a><!-- doxytag: member="localJS::COM" ref="ac46dd82aca231ab33f6308ba12975594" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_c_o_m.php">COM</a> <a class="el" href="interface_c_o_m.php">COM</a><code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Readonly. Returns object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a>, which exposes methods to create COM object, connect COM events, etc. </p>
<p>To get access to object <a class="el" href="interface_c_o_m.php" title="Object COM exposes methods to create COM object, connect COM events, etc.">COM</a>: </p>
<div class="fragment"><pre class="fragment">    var com = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>;
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php">Object COM</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ac12d811a674c6cc7417b6f9a8d39736c"></a><!-- doxytag: member="localJS::threading" ref="ac12d811a674c6cc7417b6f9a8d39736c" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_threading.php">Threading</a> threading<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Readonly. Returns object <a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a>, which exposes methods to create new script thread, sleep, get thread id, etc. </p>
<p>To get access to object <a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a>: </p>
<div class="fragment"><pre class="fragment">    var <a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a> = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>;
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_threading.php">Object Threading</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a426d92f4370abff654c9a85a060c25c9"></a><!-- doxytag: member="localJS::webBrowser" ref="a426d92f4370abff654c9a85a060c25c9" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">WebBrowser webBrowser<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Readonly. Returns <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a> of current browser. Help transparently moving forth and back between local and remote url. </p>
<dl class="return"><dt><b>返回:</b></dt><dd><a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a> of current browser.</dd></dl>
<p>An <em>UNIQUE</em> usage of <a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9">webBrowser</a> property is to transparently move forth and back between local HTML pages on disk and remote url on web server. The JavaScript <a href="http://www.javascriptkit.com/jsref/location.shtml" target="_blank">Location object</a> provides <code>replace</code> method to navigate from url to url, but it cannot navigate from remote url to local url.</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// Assuming the current url is a http url like http://www.google.com</span>
    <span class="comment">// The code below generates &#39;access denied&#39; error:</span>
    location.replace(<span class="stringliteral">&quot;file:///C:/test.html&quot;</span>);
</pre></div><p>However, with <a href="http://msdn.microsoft.com/en-us/library/aa752093(VS.85).aspx" target="_blank">Navigate Method</a> of <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a>, it's very simple:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// The code below works well:</span>
    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">webBrowser</a>.Navigate(<span class="stringliteral">&quot;file:///C:/test.html&quot;</span>);
</pre></div><p>Another typical usage of <a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9">webBrowser</a> property is to connect JavaScript functions to events of <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a>. Refer to examples in <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a>, <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a>.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> | <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser Object</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752093(VS.85).aspx" target="_blank">Navigate Method</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ad22e31bcafab13df9916ae10ec5ee3fa"></a><!-- doxytag: member="localJS::windowDict" ref="ad22e31bcafab13df9916ae10ec5ee3fa" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Dictionary windowDict<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns a <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> associated with current browser window. An ideal persistent storage between browser navigations. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>A <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> associated with current browser window.</dd></dl>
<p>The <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> returned by <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa">windowDict</a> property is an ideal persistent storage between browser navigations. The <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> is always available and unchanged as long as the browser window exists. When browser reloads page, or moved between different url, the content of the <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> remains unchanged.</p>
<p>Each browser window has its own <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> instance for <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa">windowDict</a> property.</p>
<p><a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa">windowDict</a> property can be used to pass functions, objects and other variables between navigation:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">windowDict</a>.Item(<span class="stringliteral">&#39;callback_func&#39;</span>) = function(para1, para2) { <span class="keywordflow">return</span> para1 * para2 } ;
    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">windowDict</a>.Item(<span class="stringliteral">&#39;callback_para&#39;</span>) = {<span class="stringliteral">&#39;para1&#39;</span> : 10, <span class="stringliteral">&#39;para2&#39;</span> : 8};
    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">webBrowser</a>.Navigate(<span class="stringliteral">&quot;url_to_some_process&quot;</span>);
</pre></div><p>In the page navigated to, these parameters can be retrieved as below:</p>
<div class="fragment"><pre class="fragment">    var callback_func = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">windowDict</a>.Item(<span class="stringliteral">&#39;callback_func&#39;</span>);
    var callback_para = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">windowDict</a>.Item(<span class="stringliteral">&#39;callback_para&#39;</span>);
    alert(callback_func(callback_para[<span class="stringliteral">&#39;para1&#39;</span>], callback_para[<span class="stringliteral">&#39;para2&#39;</span>]));
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">localJS.webBrowser</a> | <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">localJS.globalDict</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752093(VS.85).aspx" target="_blank">Navigate Method</a> | <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a3db8e9f0672a2aed8a468da67db3b2e1"></a><!-- doxytag: member="localJS::globalDict" ref="a3db8e9f0672a2aed8a468da67db3b2e1" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Dictionary globalDict<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns a <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> globally available in the process. An ideal global persistent storage. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>A <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> globally available.</dd></dl>
<p>The <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> returned by <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1">globalDict</a> property is an ideal global persistent storage. The <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> is always available and unchanged in the whole process lifetime.</p>
<p>Every <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1">globalDict</a> property returns the same <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> instance.</p>
<p><a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1">globalDict</a> property is a good place to keep global variables:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">globalDict</a>.Item(<span class="stringliteral">&#39;user_data&#39;</span>) = {<span class="stringliteral">&#39;login&#39;</span> : <span class="stringliteral">&#39;username&#39;</span>, <span class="stringliteral">&#39;passwd&#39;</span> : <span class="stringliteral">&#39;userpassword&#39;</span>};
</pre></div><p>Any script code can access the data saved above:</p>
<div class="fragment"><pre class="fragment">    var user_data = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">globalDict</a>.Item(<span class="stringliteral">&#39;user_data&#39;</span>),
        login = user_data[<span class="stringliteral">&#39;login&#39;</span>],
        passwd = user_data[<span class="stringliteral">&#39;passwd&#39;</span>];
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Access to <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> returned by <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1">globalDict</a> property from different threads have been automatically synchronized.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">localJS.webBrowser</a> | <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">localJS.windowDict</a> | <a class="el" href="interface_threading.php" title="Threading object exposes methods to create new script thread, sleep, get thread id, etc.">Threading</a> | <a href="http://msdn.microsoft.com/en-us/library/aa752093(VS.85).aspx" target="_blank">Navigate Method</a> | <a href="http://msdn.microsoft.com/en-us/library/x4k5wbx4(VS.85).aspx" target="_blank">Dictionary Object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a89e9b0c0ce2312add432fb1cca52971e"></a><!-- doxytag: member="localJS::browserWindowHandle" ref="a89e9b0c0ce2312add432fb1cca52971e" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long browserWindowHandle<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the browser handle returned by function <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> when create this browser window or standalone Internet Explorer application. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The browser window handle returned by function <a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> or <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> when create this browser window or standalone Internet Explorer application.</dd></dl>
<p>Property browserWindowHandle can be used for parameter <code>void * browser_window</code> when call <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> hosting functions.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga1ca250104d8e424d1af1fae979bea9d6" title="Launch a LocalJS browser window.">createBrowserWindow()</a> | <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aa3da9fff8bb40b478ee513cba4f31a4f"></a><!-- doxytag: member="localJS::hInst" ref="aa3da9fff8bb40b478ee513cba4f31a4f" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long hInst<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the <code>HINSTANCE</code> parameter passed to <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> function. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The <code>HINSTANCE</code> parameter passed to <a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> function.</dd></dl>
<p><a class="el" href="interfacelocal_j_s.php#aa3da9fff8bb40b478ee513cba4f31a4f">hInst</a> can be used when JavaScript calls Windows API functions that requires a handle to HINSTANCE. For example, <a href="http://msdn.microsoft.com/en-us/library/ms648072(VS.85).aspx" target="_blank">LoadIcon Function</a>.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="group___host_a_p_i.php#ga2bda3d0035edca22e5fd7d3cbca3fa03" title="Initialize LocalJS. DO NOT call from DllMain.">initializeLocalJS()</a> | <a href="http://msdn.microsoft.com/en-us/library/ms648072(VS.85).aspx" target="_blank">LoadIcon Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aa05066bf1c7f31ea898c0d2aed29eedb"></a><!-- doxytag: member="localJS::hostWnd" ref="aa05066bf1c7f31ea898c0d2aed29eedb" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long hostWnd<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the <code>HWND</code> handle of current browser window. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The <code>HWND</code> handle of current browser window. For Internet Explorer 7 and above, it's the main window of the Internet Explorer application, not the tab window of the page.</dd></dl>
<p><a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb">hostWnd</a> property is widely used when the <code>HWND</code> handle of browser window is required as parameter. Refer to sections listed in <em>See</em> <em>also</em> for examples.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Some browsers replace system object "InternetExplorer.Application" with their own browser object. In this case, <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> will launch their browser and <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb">hostWnd</a> property in LocalJS Internet Explorer may return NULL.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_window_hook.php" title="Hook messages of the specified window.">WindowHook</a> | <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> | <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">closeWindow</a> | <a class="el" href="interfacelocal_j_s.php#a3566d4b69cb659d2e22501a77bc5af32" title="ReadOnly. Returns the height of the bottom localJS bar in pixels.">btmBarHeight</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a231aa00f34826cb7baf3d21ca25cc2cc"></a><!-- doxytag: member="localJS::IETabWnd" ref="a231aa00f34826cb7baf3d21ca25cc2cc" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long IETabWnd<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the <code>HWND</code> handle of current browser window tab. <em>ONLY</em> apply to Internet Explorer 7 and above. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The <code>HWND</code> handle of current browser window tab. <em>ONLY</em> apply to Internet Explorer 7 and above.</dd></dl>
<p>Compared to <a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb">hostWnd</a> property, which returns <code>HWND</code> to the main window of the Internet Explorer application, <a class="el" href="interfacelocal_j_s.php#a231aa00f34826cb7baf3d21ca25cc2cc">IETabWnd</a> property returns <code>HWND</code> to the tab window of the page.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>Some browsers replace system object "InternetExplorer.Application" with their own browser object. In this case, <a class="el" href="group___host_a_p_i.php#ga392ee050a9bb4f8bc3a549498f2491c2" title="Launch a LocalJS standalone Internet Explorer application.">createIE()</a> will launch their browser and <a class="el" href="interfacelocal_j_s.php#a231aa00f34826cb7baf3d21ca25cc2cc">IETabWnd</a> property in LocalJS Internet Explorer may return NULL.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a3566d4b69cb659d2e22501a77bc5af32"></a><!-- doxytag: member="localJS::btmBarHeight" ref="a3566d4b69cb659d2e22501a77bc5af32" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long btmBarHeight<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the height of the bottom <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> bar in pixels. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The height of the bottom <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> bar in pixels.</dd></dl>
<p>Trial version of <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> appends a bar at the bottom of the browser window. Property <a class="el" href="interfacelocal_j_s.php#a3566d4b69cb659d2e22501a77bc5af32">btmBarHeight</a> is mainly used in window position calculation. For example, function below moves the window to the center of the screen with specified width and height in pixels:</p>
<div class="fragment"><pre class="fragment">    var centerWindow = function(cx, cy)
    {
        var scr = screen,
            scrWidth = scr.availWidth,
            scrHeight = scr.availHeight;

        <span class="keywordflow">if</span> (cx &gt; scrWidth)
            cx = scrWidth - 10;
        cy += <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a3566d4b69cb659d2e22501a77bc5af32" title="ReadOnly. Returns the height of the bottom localJS bar in pixels.">btmBarHeight</a>;
        <span class="keywordflow">if</span> (cy &gt; scrHeight)
            cy = scrHeight - 10;

        <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="返回 UI object，它提供了常用的 UI 操作。需要包含 localjs_ui.js。">UI</a>.moveWindow((scrWidth - cx) / 2, (scrHeight - cy) / 2, cx, cy);
        <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="返回 UI object，它提供了常用的 UI 操作。需要包含 localjs_ui.js。">UI</a>.bring2Top();
    };
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb">LOCALJS.UI.moveWindow</a> | <a class="el" href="interface_u_i.php#ab4f615fc494a1630d85d58ca37deb01a">LOCALJS.UI.bring2Top</a> | <a href="http://www.javascriptkit.com/jsref/screen.shtml" target="_blank">Screen Object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a29a79e553fe87184f3a6ed6a9e0b270f"></a><!-- doxytag: member="localJS::enableF5" ref="a29a79e553fe87184f3a6ed6a9e0b270f" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean enableF5<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set a boolean value to control whether pressing F5 key reloads HTML page. Ignored by standalone Internet Explorer application. </p>
<p>When set to <code>false</code>, pressing F5 key will be ignored. When set to <code>true</code>, which is the default value, if user presses F5, the page will be reloaded and all JavaScript variables are reinitialized.</p>
<p>A typical usage is to enable F5 key for development, so it's easier to reload the page and re-run all JavaScript code. But disable F5 key for production release so JavaScript code doesn't have to handle the case when user unexpectedly presses F5 key and everything get reinitialized.</p>
<p>To disable F5 key:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a29a79e553fe87184f3a6ed6a9e0b270f" title="Get or set a boolean value to control whether pressing F5 key reloads HTML page. Ignored by standalon...">enableF5</a> = <span class="keyword">false</span>; <span class="comment">// the default value of enableF5 is true.</span>
</pre></div> 
</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
