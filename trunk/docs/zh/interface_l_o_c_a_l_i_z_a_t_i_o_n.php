<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: LOCALIZATION类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a>  </div>
  <div class="headertitle">
<h1>LOCALIZATION类参考<br/>
<small>
[<a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="LOCALIZATION" -->
<p>Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.  
<a href="#_details">更多...</a></p>

<p><a href="class_l_o_c_a_l_i_z_a_t_i_o_n-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#a494b7408816f0e6545fe409d7f14a1a6">setPath</a> (String path,[optional] boolean reload)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Sets the path to language files folder.  <a href="#a494b7408816f0e6545fe409d7f14a1a6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#acaf64f0e414c32bfa3c5cee215b06373">setLang</a> (String lang,[optional] boolean reload)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Sets current language.  <a href="#acaf64f0e414c32bfa3c5cee215b06373"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#ab8161b47b743b715de4683c838c60d4d">getLang</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns current language set by <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#acaf64f0e414c32bfa3c5cee215b06373" title="Sets current language.">LOCALIZATION.setLang</a>.  <a href="#ab8161b47b743b715de4683c838c60d4d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#ad28f052945833b0267c4353afcbf58eb">get</a> (String key)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the String or JavaScript function defined in language file by key specified. If <em>key</em> is not found in language file, <em>key</em> is returned.  <a href="#ad28f052945833b0267c4353afcbf58eb"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#a0162e8ff61641568734b65adec1ad183">getAcceptLanguages</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a string indicating user langauge perference set at Internet Options.  <a href="#a0162e8ff61641568734b65adec1ad183"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it. </p>
<p><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php" title="Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALIZATION</a> module uses <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">localJS.globalDict</a> to save the language strings for current language, so the whole process only need to keep one copy of all the strings, which can be shared by all browser windows. The strings for current language are saved in <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">localJS.globalDict</a> with key 'LOCALJS.LOCALIZATION.CURRENT_LANG'. </p>
<hr/><h2>Method Documentation</h2>
<a class="anchor" id="a494b7408816f0e6545fe409d7f14a1a6"></a><!-- doxytag: member="LOCALIZATION::setPath" ref="a494b7408816f0e6545fe409d7f14a1a6" args="(String path,[optional] boolean reload)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">setPath </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>path</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>reload</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Sets the path to language files folder. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">path</td><td>Path to language files folder. Can be a url or local file path, either absolute or relative to url of current page. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">reload</td><td>Optional. Provided for debugging. If set to <code>true</code>, the language file will always be reloaded from disk even <em>path</em> is same as the <em>path</em> previously set. If set to <code>false</code> or omitted, the language file will be reloaded from disk only when <em>path</em> is different from the <em>path</em> previously set.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b>Language files</b></dt><dd></dd></dl>
<p><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php" title="Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALIZATION</a> uses language files to define strings for different languages. The language files are in JSON format, one file for each language, named with pattern language_name.json, for instance, 'en.json', 'cn.json'. ALl the language files should be in same folder.</p>
<p>Each key of the JSON format language data should be in type of String. The values can be either String or a JavaScript function. If it's JavaScript function, the function should not call other JavaScript functions defined in the language file.</p>
<p>Sample of language files: </p>
<div class="fragment"><pre class="fragment">    {
        <span class="stringliteral">&quot;years_old&quot;</span> : <span class="stringliteral">&quot; 岁&quot;</span>,
        <span class="stringliteral">&quot;Male&quot;</span> : <span class="stringliteral">&quot;男&quot;</span>,
        <span class="stringliteral">&quot;Female&quot;</span> : <span class="stringliteral">&quot;女&quot;</span>,
        <span class="stringliteral">&quot;formatDate&quot;</span> : function(dt)
                        {
                            <span class="keywordflow">return</span> dt.getFullYear() + <span class="stringliteral">&quot;年&quot;</span> + (dt.getMonth() + 1) + <span class="stringliteral">&quot;月&quot;</span> + dt.getDate() + <span class="stringliteral">&quot;日&quot;</span>;
                        }
    }
</pre></div><p>To call setPath method:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.setPath(<span class="stringliteral">&quot;path_to_language_folder&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="acaf64f0e414c32bfa3c5cee215b06373"></a><!-- doxytag: member="LOCALIZATION::setLang" ref="acaf64f0e414c32bfa3c5cee215b06373" args="(String lang,[optional] boolean reload)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">setLang </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>lang</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>reload</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Sets current language. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">lang</td><td>The current language. <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php" title="Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALIZATION</a> will load corresponding language file under language files folder. For instance, if <em>lang</em> is 'cn', the language file name will be 'cn.json'. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">reload</td><td>Optional. Provided for debugging. If set to <code>true</code>, the language file will always be reloaded from disk even <em>lang</em> is same as the <em>lang</em> previously set. If set to <code>false</code> or omitted, the language file will be reloaded from disk only when <em>lang</em> is different from the <em>lang</em> previously set.</td></tr>
  </table>
  </dd>
</dl>
<p>To set current language:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.setLang(<span class="stringliteral">&#39;cn&#39;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="ab8161b47b743b715de4683c838c60d4d"></a><!-- doxytag: member="LOCALIZATION::getLang" ref="ab8161b47b743b715de4683c838c60d4d" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getLang </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns current language set by <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#acaf64f0e414c32bfa3c5cee215b06373" title="Sets current language.">LOCALIZATION.setLang</a>. </p>
<p>If <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#acaf64f0e414c32bfa3c5cee215b06373" title="Sets current language.">LOCALIZATION.setLang</a> is not called before, <code>getLang</code> method returns <code>undefined</code>. </p>

</div>
</div>
<a class="anchor" id="ad28f052945833b0267c4353afcbf58eb"></a><!-- doxytag: member="LOCALIZATION::get" ref="ad28f052945833b0267c4353afcbf58eb" args="(String key)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String get </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>key</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns the String or JavaScript function defined in language file by key specified. If <em>key</em> is not found in language file, <em>key</em> is returned. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>The key to look for in language file.</td></tr>
  </table>
  </dd>
</dl>
<p>A typical usage of <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#ad28f052945833b0267c4353afcbf58eb" title="Returns the String or JavaScript function defined in language file by key specified. If key is not found in language file, key is returned.">LOCALIZATION.get</a> function:</p>
<div class="fragment"><pre class="fragment">    var localized_string = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.get(<span class="stringliteral">&#39;year&#39;</span>); <span class="comment">// return &#39;年&#39; for langauge &#39;cn&#39;.</span>
</pre></div><p>The language file for default language may not need to include all the keys. For instance, en.json doesn't have to include key 'year':</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.setLang(<span class="stringliteral">&#39;en&#39;</span>);
    var year_str = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.get(<span class="stringliteral">&#39;year&#39;</span>); <span class="comment">// return &#39;year&#39; even if en.json doesn&#39;t include key &#39;year&#39;.</span>
</pre></div><dl class="user"><dt><b>Use JavaScript function for localization</b></dt><dd></dd></dl>
<p>In some cases, localization is more than string replacement. For instance, localization of date. <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php" title="Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALIZATION</a> supports using JavaScript function for such cases. Assume there is JavaScript function defined in <code>cn.json</code> as below:</p>
<div class="fragment"><pre class="fragment">    {
        <span class="stringliteral">&quot;formatDate&quot;</span> : function(dt)
                        {
                            <span class="keywordflow">return</span> dt.getFullYear() + <span class="stringliteral">&quot;年&quot;</span> + (dt.getMonth() + 1) + <span class="stringliteral">&quot;月&quot;</span> + dt.getDate() + <span class="stringliteral">&quot;日&quot;</span>;
                        }
    }
</pre></div><p>And <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#ad28f052945833b0267c4353afcbf58eb" title="Returns the String or JavaScript function defined in language file by key specified. If key is not found in language file, key is returned.">LOCALIZATION.get</a> can be called as following:</p>
<div class="fragment"><pre class="fragment">    var dt = <span class="keyword">new</span> Date();
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.setLang(<span class="stringliteral">&#39;cn&#39;</span>);
    var localized_date = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.get(<span class="stringliteral">&#39;formatDate&#39;</span>)(dt);
</pre></div> 
</div>
</div>
<a class="anchor" id="a0162e8ff61641568734b65adec1ad183"></a><!-- doxytag: member="LOCALIZATION::getAcceptLanguages" ref="a0162e8ff61641568734b65adec1ad183" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getAcceptLanguages </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns a string indicating user langauge perference set at Internet Options. </p>
<p>The string returned is same as the HTTP header Accept-Language sent to web server by browser. The same string is returned by PHP variable <code>$_SERVER['HTTP_ACCEPT_LANGUAGE']</code>.</p>
<p>A typical string returned by method getAcceptLanguages is:</p>
<div class="fragment"><pre class="fragment">    var user_lang = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALIZATION</a>.getAcceptLanguages(); <span class="comment">// return &#39;en-us,zh-CN;q=0.7,zh-HK;q=0.3&#39;</span>
</pre></div> 
</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
