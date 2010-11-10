<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: FILE类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: FILE类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>FILE类参考<br/>
<small>
[<a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="FILE" -->
<p>开源的 JavaScript 对象。提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。  
<a href="#_details">更多...</a></p>

<p><a href="class_f_i_l_e-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td colspan="2"><div class="groupHeader">访问INI 文件和注册表</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a0f1894aaa83f22c87ac4cfc0f3ff05be">iniReadInt</a> (String filename, String section, String key,[optional] int default_value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">从 INI 文件中读一个整数  <a href="#a0f1894aaa83f22c87ac4cfc0f3ff05be"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a3130fd3652e1b86373b61cfc0348981e">iniReadStr</a> (String filename, String section, String key,[optional] String default_value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">从 INI 文件中读一个字符串  <a href="#a3130fd3652e1b86373b61cfc0348981e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ab82c10757856fbd93d04603ce226cb38">iniWrite</a> (String filename, String section, String key,[optional] var value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">向 INI 文件中写入字符串或从 INI 文件中删除一项。  <a href="#ab82c10757856fbd93d04603ce226cb38"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">var&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ae283d76f4b92fd2f67e1db96f607e70c">regRead</a> (String reg_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">读取注册表中的值。  <a href="#ae283d76f4b92fd2f67e1db96f607e70c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a461f0e68e5dc507ba50ac94d56a2cfcd">regWrite</a> (String reg_path, var val,[optional] String strType)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">在注册表中创建新的键值或更改已有的键值。  <a href="#a461f0e68e5dc507ba50ac94d56a2cfcd"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#aa9ccfdf0c38f87f504a5ae2f763977b7">regDelete</a> (String reg_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">从注册表中删除一项。  <a href="#aa9ccfdf0c38f87f504a5ae2f763977b7"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">文件系统操作</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af3294a406276bff3baad8bcb719aab66">fileExists</a> (String filename)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">如果文件存在，返回 <code>true，否则返回</code> <code>false。</code>  <a href="#af3294a406276bff3baad8bcb719aab66"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a93e2667c7fe3288e3e2db065fcc9f063">folderExists</a> (String foldername)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">如果文件夹存在，返回 <code>true，否则返回</code> <code>false。</code>  <a href="#a93e2667c7fe3288e3e2db065fcc9f063"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a6181d0579cb9654e86cd506737f0475f">getAppDataFolder</a> ([optional] String sub_folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回用户的个人程序数据文件夹的全路径名，或个人程序数据文件夹下的一个子文件夹的全路径名。  <a href="#a6181d0579cb9654e86cd506737f0475f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a42f314c1d5c8bc86abf76ecb850039c0">getProgramFolder</a> ([optional] String sub_folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回应用程序文件夹的全路径名，或应用程序文件夹下的一个子文件夹的全路径名。  <a href="#a42f314c1d5c8bc86abf76ecb850039c0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a943b822f2c3c6f32774e389330bd6a63">getExeFilename</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">得到当前可执行文件的全路径名。  <a href="#a943b822f2c3c6f32774e389330bd6a63"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ad1a8f26a2cf973ae0ddffc624a479e62">getExeFolder</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">得到当前可执行文件所在的文件夹的全路径名。  <a href="#ad1a8f26a2cf973ae0ddffc624a479e62"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a7366dfecccd6c0170f9fe6c4709aad25">getParentFolder</a> (String folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回给定文件夹的上一级文件夹的路径名。  <a href="#a7366dfecccd6c0170f9fe6c4709aad25"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ab2be2bfa8a34bf9e4cc76064213c9240">buildPath</a> (String parent, String child)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">把基本路径和相对路径组合成一个新的路径。  <a href="#ab2be2bfa8a34bf9e4cc76064213c9240"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">readFileUTF8</a> (String filename)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回UTF8格式的文件内容。如果读文件失败，返回 <code>false。</code>  <a href="#af18bb442d4a17a21806d850fab3dcb99"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">writeFileUTF8</a> (String filename, String text)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">以UTF8格式存储文件。已有的文件内容将被重写。如果文件名不存在，会创建一个新文件。  <a href="#a79aabfb4240680c61bf91440ff6e9823"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ae422d3995ad20fae50da0a6a5667654f">deleteFile</a> (String filespec,[optional] boolean force)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">删除指定文件。  <a href="#ae422d3995ad20fae50da0a6a5667654f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a11c4eb341be6b3dcf3f2ce9d855b058e">createFolder</a> (String foldername)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">创建一个文件夹。  <a href="#a11c4eb341be6b3dcf3f2ce9d855b058e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ac37bcb6da1316d7792a5491a2f7801a6">deleteFolder</a> (String folderspec,[optional] boolean force)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">删除指定文件夹及其内容。  <a href="#ac37bcb6da1316d7792a5491a2f7801a6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Array&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af20f5de0d692771dafbeef7fb57fc500">listFolder</a> (String folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回指定文件夹中所有的文件对象。  <a href="#af20f5de0d692771dafbeef7fb57fc500"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a9f38cdfedb32bebacfaf1759228a61ea">browseFile</a> ([optional] boolean forSave,[optional] String title,[optional] String initialDir,[optional] String strFilter,[optional] String defExt,[optional] String initialFile,[optional] boolean readOnly)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">弹出文件选择对话框。返回所选文件的全路径名。如果用户取消了对话框，返回 <code>false。</code>  <a href="#a9f38cdfedb32bebacfaf1759228a61ea"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a4d5cb0d3bb58d2653ca5a28eb35ee84a">browseFolder</a> ([optional] String title,[optional] String rootFolder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">弹出文件夹选择对话框。返回用户所选择文件夹的路径。如果用户取消了对话框，返回 <code>false。如果用户选择了虚拟文件夹，返回</code> ""。  <a href="#a4d5cb0d3bb58d2653ca5a28eb35ee84a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a7c00c5f992f9567ec7b69d6e3cf25934">exec</a> (String file)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">执行一个可执行文件，在用户的默认浏览器中打开一个 url，或者用默认应用程序打开一个文件。  <a href="#a7c00c5f992f9567ec7b69d6e3cf25934"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Url 操作</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ad6e821755d0d8b859a69853bb8b3144d">pathToUrl</a> (String path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回指向给定本地文件的 url。如果失败，返回 <code>false。</code>  <a href="#ad6e821755d0d8b859a69853bb8b3144d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af4d5763f007ae57760e4903712f323f3">urlToPath</a> (String url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回对应于给定 url 的本地文件名。如果失败，返回 <code>false。</code>  <a href="#af4d5763f007ae57760e4903712f323f3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a58b7576336d5c990156ccc211bc09c3a">isUrl</a> (String url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">如果给定字符串是合法的 url，返回 <code>true；否则返回</code> <code>false。</code>  <a href="#a58b7576336d5c990156ccc211bc09c3a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a0c351eaed10231b01698938550e31cbe">isFileUrl</a> (String url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">如果给定 url 指向本地文件或文件夹，返回 <code>true；否则返回</code> <code>false。</code>  <a href="#a0c351eaed10231b01698938550e31cbe"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a755585f93d7b4fdc84e455fe334a7e29">readUrl</a> (String url,[optional] Object callback)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">以同步或异步方式读取本地或 web 服务器上的文件。  <a href="#a755585f93d7b4fdc84e455fe334a7e29"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ab7cbd8e35cc7111c289225daf4696cea">buildUrl</a> (String baseUrl, String relativeUrl)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">把基本 url 和相对 url 组合成一个新的 url。返回 <code>false</code> 如果参数不正确。  <a href="#ab7cbd8e35cc7111c289225daf4696cea"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a841b182f6e93f43af7ba128d020dcea7">normalizeUrl</a> ([optional], String relativeUrl)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回格式化（去掉 url 的查询部分）后的当前页面的 url，或者当前页面的 url 和一个相对 url 的组合。  <a href="#a841b182f6e93f43af7ba128d020dcea7"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>开源的 JavaScript 对象。提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。 </p>
<hr/><h2>方法文档</h2>
<a class="anchor" id="a0f1894aaa83f22c87ac4cfc0f3ff05be"></a><!-- doxytag: member="FILE::iniReadInt" ref="a0f1894aaa83f22c87ac4cfc0f3ff05be" args="(String filename, String section, String key,[optional] int default_value)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int iniReadInt </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filename</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>section</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>key</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int&#160;</td>
          <td class="paramname"> <em>default_value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>从 INI 文件中读一个整数 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>要读取的 INI 文件名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">section</td><td>INI 中的 section 名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>INI 中的 Key 名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">default_value</td><td>可选参数。当 section 和 key 不存在的时候所返回的值。缺省值为0。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>从 INI 文件中读出的整数。如果 section 和 key 不存在，返回 <em>default_value。</em> </dd></dl>
<p>下面的例子从 INI 文件中读一个整数，如果没找到 section_name 和 key_name，返回 -1： </p>
<div class="fragment"><pre class="fragment">    var intVal = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.iniReadInt(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, -1);
</pre></div> 
</div>
</div>
<a class="anchor" id="a3130fd3652e1b86373b61cfc0348981e"></a><!-- doxytag: member="FILE::iniReadStr" ref="a3130fd3652e1b86373b61cfc0348981e" args="(String filename, String section, String key,[optional] String default_value)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String iniReadStr </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filename</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>section</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>key</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>default_value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>从 INI 文件中读一个字符串 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>要读取的 INI 文件名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">section</td><td>INI 中的 section 名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>INI 中的 Key 名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">default_value</td><td>可选参数。当 section 和 key 不存在的时候所返回的值。缺省值为 ""。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>从 INI 文件中读出的字符串。如果 section 和 key 不存在，返回 <em>default_value。</em> </dd></dl>
<p>下面的例子从 INI 文件中读一个整数，如果没找到 section_name 和 key_name，返回空字符串： </p>
<div class="fragment"><pre class="fragment">    var strVal = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.iniReadStr(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, <span class="stringliteral">&quot;&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="ab82c10757856fbd93d04603ce226cb38"></a><!-- doxytag: member="FILE::iniWrite" ref="ab82c10757856fbd93d04603ce226cb38" args="(String filename, String section, String key,[optional] var value)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">iniWrite </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filename</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>section</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>key</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] var&#160;</td>
          <td class="paramname"> <em>value</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>向 INI 文件中写入字符串或从 INI 文件中删除一项。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>要写入的 INI 文件名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">section</td><td>INI 中的 section 名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>INI 中的 Key 名 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>可选参数。要写入的字符串值。<em>value</em> 如果不是字符串，将会被转成字符串类型。如果 <em>value</em> 被省略或者不能被转成字符串类型（例如，传入 <code>undefined），<em>key</em> 将被从</code> INI 文件中删除。</td></tr>
  </table>
  </dd>
</dl>
<p>下面的代码把设置存入 INI 文件： </p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.iniWrite(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, <span class="stringliteral">&quot;value&quot;</span>);
</pre></div><p>从 INI 文件中删除一项：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.iniWrite(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, undefined);
</pre></div> 
</div>
</div>
<a class="anchor" id="ae283d76f4b92fd2f67e1db96f607e70c"></a><!-- doxytag: member="FILE::regRead" ref="ae283d76f4b92fd2f67e1db96f607e70c" args="(String reg_path)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">var regRead </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>reg_path</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>读取注册表中的值。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>注册表中的路径字符串。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>从注册表中读取的值。</dd></dl>
<p>本方法是 <a href="http://msdn.microsoft.com/en-us/library/x05fawxd(VS.85).aspx" target="_blank">WshShell 对象的 RegRead 方法</a>的简单封装。更多细节参见 <a href="http://msdn.microsoft.com/en-us/library/x05fawxd(VS.85).aspx" target="_blank">RegRead 方法</a>。</p>
<p>下面的代码从注册表中读取一项：</p>
<div class="fragment"><pre class="fragment">    var value = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.regRead(<span class="stringliteral">&quot;HKCU\\Software\\ACME\\FortuneTeller\\MindReader&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="a461f0e68e5dc507ba50ac94d56a2cfcd"></a><!-- doxytag: member="FILE::regWrite" ref="a461f0e68e5dc507ba50ac94d56a2cfcd" args="(String reg_path, var val,[optional] String strType)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">regWrite </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>reg_path</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">var&#160;</td>
          <td class="paramname"> <em>val</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>strType</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>在注册表中创建新的键值或更改已有的键值。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>要更改或添加的注册表路径。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">val</td><td>要更改或添加的新值。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">strType</td><td>可选参数。用不同的字符串表示要更改或添加的值的类型。细节参见 <a href="http://msdn.microsoft.com/en-us/library/yfdfhz1b(VS.85).aspx" target="_blank">WshShell 对象的 RegWrite 方法</a>。</td></tr>
  </table>
  </dd>
</dl>
<p>本方法是 <a href="http://msdn.microsoft.com/en-us/library/yfdfhz1b(VS.85).aspx" target="_blank">WshShell 对象的 RegWrite 方法</a>的简单封装。更多细节参见 <a href="http://msdn.microsoft.com/en-us/library/yfdfhz1b(VS.85).aspx" target="_blank">RegWrite 方法</a>。</p>
<p>下面的代码向注册表中写入一项：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.regWrite(<span class="stringliteral">&quot;HKCU\\Software\\ACME\\FortuneTeller\\MindReader&quot;</span>, <span class="stringliteral">&quot;Goocher!&quot;</span>, <span class="stringliteral">&quot;REG_SZ&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="aa9ccfdf0c38f87f504a5ae2f763977b7"></a><!-- doxytag: member="FILE::regDelete" ref="aa9ccfdf0c38f87f504a5ae2f763977b7" args="(String reg_path)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">regDelete </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>reg_path</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>从注册表中删除一项。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>要删除的注册表路径。</td></tr>
  </table>
  </dd>
</dl>
<p>本方法是 <a href="http://msdn.microsoft.com/en-us/library/293bt9hh(VS.85).aspx" target="_blank">WshShell 对象的 RegDelete 方法</a>的简单封装。更多细节参见 <a href="http://msdn.microsoft.com/en-us/library/293bt9hh(VS.85).aspx" target="_blank">RegDelete 方法</a>。</p>
<p>下面的代码从注册表中删除一项：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.regDelete(<span class="stringliteral">&quot;HKCU\\Software\\ACME\\FortuneTeller\\MindReader&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="af3294a406276bff3baad8bcb719aab66"></a><!-- doxytag: member="FILE::fileExists" ref="af3294a406276bff3baad8bcb719aab66" args="(String filename)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean fileExists </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filename</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>如果文件存在，返回 <code>true，否则返回</code> <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>文件名，可以是绝对路径或相对路径。不支持 * ? 之类的文件名通配符。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>如果文件存在，返回 <code>true，否则返回</code> <code>false。</code> </dd></dl>
<p>本方法是 <a href="http://msdn.microsoft.com/en-us/library/x23stk5t(VS.85).aspx" target="_blank">FileSystemObject 对象的 FileExists 方法</a>的简单封装。更多细节参见 <a href="http://msdn.microsoft.com/en-us/library/x23stk5t(VS.85).aspx" target="_blank">FileExists 方法</a>。</p>
<p>下面的代码检查文件是否存在：</p>
<div class="fragment"><pre class="fragment">    var exists = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.fileExists(<span class="stringliteral">&quot;C:\\test.ini&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="a93e2667c7fe3288e3e2db065fcc9f063"></a><!-- doxytag: member="FILE::folderExists" ref="a93e2667c7fe3288e3e2db065fcc9f063" args="(String foldername)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean folderExists </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>foldername</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>如果文件夹存在，返回 <code>true，否则返回</code> <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">foldername</td><td>文件夹名，可以是绝对路径或相对路径。不支持 * ? 之类的文件名通配符。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>如果文件夹存在，返回 <code>true，否则返回</code> <code>false。</code> </dd></dl>
<p>本方法是 <a href="http://msdn.microsoft.com/en-us/library/5xc78d8d(VS.85).aspx" target="_blank">FileSystemObject 对象的 FolderExists 方法</a>的简单封装。更多细节参见 <a href="http://msdn.microsoft.com/en-us/library/5xc78d8d(VS.85).aspx" target="_blank">FolderExists 方法</a>。</p>
<p>下面的代码检查文件夹是否存在：</p>
<div class="fragment"><pre class="fragment">    var exists = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.folderExists(<span class="stringliteral">&quot;C:\\Documents and Settings&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="a6181d0579cb9654e86cd506737f0475f"></a><!-- doxytag: member="FILE::getAppDataFolder" ref="a6181d0579cb9654e86cd506737f0475f" args="([optional] String sub_folder)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getAppDataFolder </td>
          <td>(</td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>sub_folder</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回用户的个人程序数据文件夹的全路径名，或个人程序数据文件夹下的一个子文件夹的全路径名。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">sub_folder</td><td>可选参数。子文件夹名。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>如果 <em>sub_folder</em> 被省略，返回用户的个人程序数据文件夹的全路径名；如果 <em>sub_folder</em> 没有被省略，返回个人程序数据文件夹下的该子文件夹的全路径名。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var app_data_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getAppDataFolder(); <span class="comment">// 在 Windows XP 上，返回 C:\Documents and Settings\Username\Application Data</span>
    var app_data_sub_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getAppDataFolder(<span class="stringliteral">&quot;LocalJS&quot;</span>); <span class="comment">// 在 Windows XP 上，返回 C:\Documents and Settings\Username\Application Data\LocalJS</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>如果子文件夹不存在，getAppDataFolder 方法不会创建它。 </dd></dl>

</div>
</div>
<a class="anchor" id="a42f314c1d5c8bc86abf76ecb850039c0"></a><!-- doxytag: member="FILE::getProgramFolder" ref="a42f314c1d5c8bc86abf76ecb850039c0" args="([optional] String sub_folder)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getProgramFolder </td>
          <td>(</td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>sub_folder</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回应用程序文件夹的全路径名，或应用程序文件夹下的一个子文件夹的全路径名。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">sub_folder</td><td>可选参数。子文件夹名。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>如果 <em>sub_folder</em> 被省略，返回应用程序文件夹的全路径名；如果 <em>sub_folder</em> 没有被省略，返回应用程序文件夹下的该子文件夹的全路径名。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var program_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getProgramFolder(); <span class="comment">// 返回 C:\Program Files</span>
    var program_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getProgramFolder(<span class="stringliteral">&quot;LocalJS&quot;</span>); <span class="comment">// 返回 C:\Program Files\LocalJS</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>如果子文件夹不存在，getProgramFolder 方法不会创建它。 </dd></dl>

</div>
</div>
<a class="anchor" id="a943b822f2c3c6f32774e389330bd6a63"></a><!-- doxytag: member="FILE::getExeFilename" ref="a943b822f2c3c6f32774e389330bd6a63" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getExeFilename </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>得到当前可执行文件的全路径名。 </p>
<dl class="return"><dt><b>返回:</b></dt><dd>当前可执行文件的全路径名。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var exe_name = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getExeFilename(); <span class="comment">// 例如，返回 C:\Program Files\LocalJS\app.exe</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="ad1a8f26a2cf973ae0ddffc624a479e62"></a><!-- doxytag: member="FILE::getExeFolder" ref="ad1a8f26a2cf973ae0ddffc624a479e62" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getExeFolder </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>得到当前可执行文件所在的文件夹的全路径名。 </p>
<dl class="return"><dt><b>返回:</b></dt><dd>当前可执行文件所在的文件夹的全路径名。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var exe_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getExeFolder(); <span class="comment">// 例如，返回 C:\Program Files\LocalJS</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="a7366dfecccd6c0170f9fe6c4709aad25"></a><!-- doxytag: member="FILE::getParentFolder" ref="a7366dfecccd6c0170f9fe6c4709aad25" args="(String folder)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String getParentFolder </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>folder</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回给定文件夹的上一级文件夹的路径名。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">folder</td><td>给定文件夹的路径。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>给定文件夹的上一级文件夹的路径名。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var parent_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getParentFolder(<span class="stringliteral">&quot;C:\\Program Files\\LocalJS&quot;</span>); <span class="comment">// 返回 C:\Program Files</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>getParentFolder 方法仅仅分析给定的文件夹路径。它不试图验证路径的有效性或者文件夹是否存在。 </dd></dl>

</div>
</div>
<a class="anchor" id="ab2be2bfa8a34bf9e4cc76064213c9240"></a><!-- doxytag: member="FILE::buildPath" ref="ab2be2bfa8a34bf9e4cc76064213c9240" args="(String parent, String child)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String buildPath </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>child</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>把基本路径和相对路径组合成一个新的路径。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">parent</td><td>基本路径。可以是绝对或相对路径。该路径可以不代表实际存在的文件夹。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">child</td><td>相对路径。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>组合得到的新路径。该路径可以不实际存在；如果不存在也不会被创建。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var path = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.buildPath(<span class="stringliteral">&quot;C:\\Program Files&quot;</span>, <span class="stringliteral">&quot;LocalJS&quot;</span>); <span class="comment">// 返回 C:\Program Files\LocalJS</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="af18bb442d4a17a21806d850fab3dcb99"></a><!-- doxytag: member="FILE::readFileUTF8" ref="af18bb442d4a17a21806d850fab3dcb99" args="(String filename)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String readFileUTF8 </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filename</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回UTF8格式的文件内容。如果读文件失败，返回 <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>要读取的文件名。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>UTF8 格式的文件内容。如果读文件失败，返回 <code>false。要判断读文件是否失败，用</code> <code>false</code> <code>===</code> .</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>UTF8 文件不能以 BOM 开头。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var content = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.readFileUTF8(<span class="stringliteral">&quot;C:\\settings.ini&quot;</span>);
    <span class="keywordflow">if</span> (<span class="keyword">false</span> === content)
        alert(<span class="stringliteral">&quot;读文件失败！&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="a79aabfb4240680c61bf91440ff6e9823"></a><!-- doxytag: member="FILE::writeFileUTF8" ref="a79aabfb4240680c61bf91440ff6e9823" args="(String filename, String text)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String writeFileUTF8 </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filename</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>text</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>以UTF8格式存储文件。已有的文件内容将被重写。如果文件名不存在，会创建一个新文件。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>要存入的文件名。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">text</td><td>要写入的内容。</td></tr>
  </table>
  </dd>
</dl>
<p>以UTF8格式存储文件。不包括前导 BOM。</p>
<p>如果写入失败，将产生一个错误。</p>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.writeFileUTF8(<span class="stringliteral">&quot;C:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;LocalJS&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="ae422d3995ad20fae50da0a6a5667654f"></a><!-- doxytag: member="FILE::deleteFile" ref="ae422d3995ad20fae50da0a6a5667654f" args="(String filespec,[optional] boolean force)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">deleteFile </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>filespec</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>force</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>删除指定文件。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filespec</td><td>要删除的文件名。文件名的最后一部分可以包含文件名通配符。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">force</td><td>可选参数。如果为 <code>true，将删除只读文件；如果为</code> <code>false，将不删除只读文件。</code> </td></tr>
  </table>
  </dd>
</dl>
<p>如果指定文件不存在，将产生一个错误。deleteFile 方法遇到第一个错误之后就停止执行，但是并不恢复已经被删除的文件。</p>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.deleteFile(<span class="stringliteral">&quot;C:\\settings.ini&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="a11c4eb341be6b3dcf3f2ce9d855b058e"></a><!-- doxytag: member="FILE::createFolder" ref="a11c4eb341be6b3dcf3f2ce9d855b058e" args="(String foldername)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">createFolder </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>foldername</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>创建一个文件夹。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">foldername</td><td>要创建的文件夹名。</td></tr>
  </table>
  </dd>
</dl>
<p>如果文件夹存在，createFolder 方法立刻返回，不产生错误。</p>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var a = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.createFolder(<span class="stringliteral">&quot;c:\\new folder&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="ac37bcb6da1316d7792a5491a2f7801a6"></a><!-- doxytag: member="FILE::deleteFolder" ref="ac37bcb6da1316d7792a5491a2f7801a6" args="(String folderspec,[optional] boolean force)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">deleteFolder </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>folderspec</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>force</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>删除指定文件夹及其内容。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">folderspec</td><td>要删除的文件夹的路径名。路径名的最后一部分可以包含通配符。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">force</td><td>可选参数。如果为 <code>true，将删除只读文件夹。如果为</code> <code>false，不删除只读文件夹。</code> </td></tr>
  </table>
  </dd>
</dl>
<p>无论文件夹有无内容，deleteFolder 方法都将删除文件夹。</p>
<p>如果指定文件夹不存在，deleteFolder 方法将产生一个错误。deleteFolder 方法遇到第一个错误之后就停止执行，但是并不恢复已经被删除的文件。</p>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.deleteFolder(<span class="stringliteral">&quot;C:\\Program Files\\LocalJS&quot;</span>);
</pre></div> 
</div>
</div>
<a class="anchor" id="af20f5de0d692771dafbeef7fb57fc500"></a><!-- doxytag: member="FILE::listFolder" ref="af20f5de0d692771dafbeef7fb57fc500" args="(String folder)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Array listFolder </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>folder</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回指定文件夹中所有的文件对象。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">folder</td><td>指定文件夹。</td></tr>
  </table>
  </dd>
</dl>
<p>listFolder 方法封装了 <a href="http://msdn.microsoft.com/en-us/library/18b41306(VS.85).aspx" target="_blank">Folder 对象的 Files 属性</a>，更多细节参见 <a href="http://msdn.microsoft.com/en-us/library/18b41306(VS.85).aspx" target="_blank">Files 属性</a>。</p>
<p>示例代码如下：</p>
<div class="fragment"><pre class="fragment">    var file_array = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.listFolder(<span class="stringliteral">&quot;C:\\Program Files&quot;</span>), s = <span class="stringliteral">&quot;&quot;</span>;
    <span class="keywordflow">for</span> (var i = 0; i &lt; file_array.length; ++i)
    {
        s += file_array[i].name;
        s += <span class="stringliteral">&quot;&lt;br/&gt;&quot;</span>;
    }
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.writeFileUTF8(<span class="stringliteral">&quot;C:\\test.html&quot;</span>, s);
</pre></div> 
</div>
</div>
<a class="anchor" id="a9f38cdfedb32bebacfaf1759228a61ea"></a><!-- doxytag: member="FILE::browseFile" ref="a9f38cdfedb32bebacfaf1759228a61ea" args="([optional] boolean forSave,[optional] String title,[optional] String initialDir,[optional] String strFilter,[optional] String defExt,[optional] String initialFile,[optional] boolean readOnly)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String browseFile </td>
          <td>(</td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>forSave</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>title</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>initialDir</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>strFilter</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>defExt</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>initialFile</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] boolean&#160;</td>
          <td class="paramname"> <em>readOnly</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>弹出文件选择对话框。返回所选文件的全路径名。如果用户取消了对话框，返回 <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">forSave</td><td>可选参数。为 <code>true</code> 则弹出文件保存对话框，为 <code>false</code> 或省略则弹出文件打开对话框。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">title</td><td>可选参数。文件选择对话框的标题。如果省略，对话框的标题和当前页面的标题一样。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">initialDir</td><td>可选参数。文件选择对话框的初始打开路径。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">strFilter</td><td>可选参数。文件名过滤字符串。例如：<code>"文本文件\0*.TXT\0文档文件\0*.TXT;*.DOC;*.BAK\0所有文件\0*.*\0"</code> </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">defExt</td><td>可选参数。当用户没有输入文件后缀名时自动附加的默认文件后缀名。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">initialFile</td><td>可选参数。文件选择对话框中显示的初始文件名。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">readOnly</td><td>可选参数。如果为 <code>true，文件打开对话框中的只读选项会被默认选择，为</code> <code>false</code> 或省略则默认不选择。只在 <em>forSave</em> 为 <code>false</code> 的时候起作用。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>所选文件的全路径名。如果用户取消了对话框，返回 <code>false。要判断是否用户取消了对话框，用</code> <code>false</code> <code>===</code> 。</dd></dl>
<p>参数 <em>strFilter</em> 必须以 <code>"\0"</code> 结尾。被 <code>"\0"</code> 所分成的子字符串必须成对：它们的意义是：<code>"过滤条件的显示名称\0过滤条件通配符\0过滤条件的显示名称\0过滤条件通配符\0"</code>。如果你觉得不太明白，不要紧，试试看下面的示例代码就明白了。</p>
<div class="fragment"><pre class="fragment">    var filename = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.browseFile(<span class="keyword">false</span>, <span class="stringliteral">&quot;请选择要打开的文件&quot;</span>, <span class="stringliteral">&quot;C:\\Program Files\\LocalJS&quot;</span>,
                                           <span class="stringliteral">&quot;文本文件\0*.TXT\0文档文件\0*.TXT;*.DOC;*.BAK\0所有文件\0*.*\0&quot;</span>,
                                           <span class="stringliteral">&quot;txt&quot;</span>, <span class="stringliteral">&quot;settings.txt&quot;</span>);
    <span class="keywordflow">if</span> (<span class="keyword">false</span> === filename)
        alert(<span class="stringliteral">&quot;您取消了文件对话框。&quot;</span>);
    <span class="keywordflow">else</span>
        alert(filename);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>browseFile 方法封装了 Windows API <a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a> 和 <a href="http://msdn.microsoft.com/en-us/library/ms646928(VS.85).aspx" target="_blank">GetSaveFileName Function</a>。如果你对更多细节感兴趣，参见 localjs_file.js 文件中 browseFile 方法的源码，<a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a>，<a href="http://msdn.microsoft.com/en-us/library/ms646928(VS.85).aspx" target="_blank">GetSaveFileName Function</a>，以及 <a href="http://msdn.microsoft.com/en-us/library/ms646839(VS.85).aspx" target="_blank">OPENFILENAME Structure</a>。 </dd></dl>

</div>
</div>
<a class="anchor" id="a4d5cb0d3bb58d2653ca5a28eb35ee84a"></a><!-- doxytag: member="FILE::browseFolder" ref="a4d5cb0d3bb58d2653ca5a28eb35ee84a" args="([optional] String title,[optional] String rootFolder)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String browseFolder </td>
          <td>(</td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>title</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>rootFolder</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>弹出文件夹选择对话框。返回用户所选择文件夹的路径。如果用户取消了对话框，返回 <code>false。如果用户选择了虚拟文件夹，返回</code> ""。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">title</td><td>可选参数。文件夹选择对话框的标题。如果省略，对话框的标题和当前页面的标题一样。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">rootFolder</td><td>可选参数。文件夹选择对话框的根文件夹。用户只能选择此文件夹的子文件夹。如果该参数被省略，文件夹选择对话框的根文件夹为桌面文件夹。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>用户所选择文件夹的路径。如果用户取消了对话框，返回 <code>false。如果用户选择了虚拟文件夹（例如，“我的电脑”），返回</code> ""。要判断用户是否取消了对话框，用 <code>false</code> <code>===</code> 。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.browseFolder(<span class="stringliteral">&quot;请选择一个文件夹&quot;</span>);
    <span class="keywordflow">if</span> (<span class="keyword">false</span> === folder)
        alert(<span class="stringliteral">&quot;您取消了文件夹对话框。&quot;</span>);
    <span class="keywordflow">else</span> <span class="keywordflow">if</span> (<span class="stringliteral">&quot;&quot;</span> == folder)
        alert(<span class="stringliteral">&quot;请重新选择文件夹。&quot;</span>);
    <span class="keywordflow">else</span>
        alert(folder);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>browseFolder 方法封装了 <a href="http://msdn.microsoft.com/en-us/library/bb774065(VS.85).aspx" target="_blank">Shell.BrowseForFolder 方法</a>。如果你对更多细节感兴趣，参见 localjs_file.js 中 browseFolder 方法的源代码，以及 <a href="http://msdn.microsoft.com/en-us/library/bb774065(VS.85).aspx" target="_blank">Shell.BrowseForFolder 方法</a>。 </dd></dl>

</div>
</div>
<a class="anchor" id="a7c00c5f992f9567ec7b69d6e3cf25934"></a><!-- doxytag: member="FILE::exec" ref="a7c00c5f992f9567ec7b69d6e3cf25934" args="(String file)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">exec </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>file</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>执行一个可执行文件，在用户的默认浏览器中打开一个 url，或者用默认应用程序打开一个文件。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">file</td><td>可执行文件，url，或者要用默认应用程序打开的文件。</td></tr>
  </table>
  </dd>
</dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.exec(<span class="stringliteral">&quot;http://localjs.org/&quot;</span>); <span class="comment">// 在默认浏览器中打开该站点。</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="ad6e821755d0d8b859a69853bb8b3144d"></a><!-- doxytag: member="FILE::pathToUrl" ref="ad6e821755d0d8b859a69853bb8b3144d" args="(String path)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String pathToUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>path</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回指向给定本地文件的 url。如果失败，返回 <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">path</td><td>本地文件的路径名。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>指向本地文件的 url。如果失败，返回 <code>false。要判断是否失败，用</code> <code>false</code> <code>===</code> 。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var url = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.pathToUrl(<span class="stringliteral">&quot;C:\\test.ini&quot;</span>); <span class="comment">// 返回 file:///C:/test.ini</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="af4d5763f007ae57760e4903712f323f3"></a><!-- doxytag: member="FILE::urlToPath" ref="af4d5763f007ae57760e4903712f323f3" args="(String url)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String urlToPath </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>url</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回对应于给定 url 的本地文件名。如果失败，返回 <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>给定的 url。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>对应于给定 url 的本地文件名。如果失败，返回 <code>false。要判断是否失败，用</code> <code>false</code> <code>===</code> 。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var path = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.urlToPath(<span class="stringliteral">&quot;file:///C:/test.ini&quot;</span>); <span class="comment">// 返回 C:\test.ini</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="a58b7576336d5c990156ccc211bc09c3a"></a><!-- doxytag: member="FILE::isUrl" ref="a58b7576336d5c990156ccc211bc09c3a" args="(String url)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean isUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>url</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>如果给定字符串是合法的 url，返回 <code>true；否则返回</code> <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>给定字符串。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>如果给定字符串是合法的 url，返回 <code>true；否则返回</code> <code>false。</code> </dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var ok = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.isUrl(<span class="stringliteral">&quot;http://localjs.org/&quot;</span>); <span class="comment">// 是有效的 url</span>
    var error = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.isUrl(<span class="stringliteral">&quot;localjs.org&quot;</span>);  <span class="comment">// 不是有效的 url</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="a0c351eaed10231b01698938550e31cbe"></a><!-- doxytag: member="FILE::isFileUrl" ref="a0c351eaed10231b01698938550e31cbe" args="(String url)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean isFileUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>url</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>如果给定 url 指向本地文件或文件夹，返回 <code>true；否则返回</code> <code>false。</code> </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>给定 url。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>如果给定 url 指向本地文件或文件夹，返回 <code>true；否则返回</code> <code>false。</code> </dd></dl>
<p>所指向的本地文件或文件夹不一定要存在。</p>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var ok = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.isFileUrl(<span class="stringliteral">&quot;file:///C:\\Windows\\system32\\notepad.exe&quot;</span>); <span class="comment">// 指向本地文件的 url</span>
    var error = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.isFileUrl(<span class="stringliteral">&quot;http://localjs.org/&quot;</span>);  <span class="comment">// http url</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="a755585f93d7b4fdc84e455fe334a7e29"></a><!-- doxytag: member="FILE::readUrl" ref="a755585f93d7b4fdc84e455fe334a7e29" args="(String url,[optional] Object callback)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String readUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>url</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] Object&#160;</td>
          <td class="paramname"> <em>callback</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>以同步或异步方式读取本地或 web 服务器上的文件。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>要读取的 url。可以指向本地文件或 web 服务器上的文件。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">callback</td><td>可选参数。细节见下面。</td></tr>
  </table>
  </dd>
</dl>
<p>如果 <em>callback</em> 参数被省略，readUrl 方法等待读操作结束，并返回 url 的内容。如果读操作失败，返回 <code>false。要判断是否失败，用</code> <code>false</code> <code>===。</code> </p>
<p>如果 <em>callback</em> 参数没有被省略，readUrl 方法启动读操作之后就返回。读操作的结果由 <em>callback</em> 对象中的函数返回。</p>
<p><code>callback</code> 对象需要有两个属性：<code>ok</code> 和 <code>fail，每个属性都是一个函数：</code> </p>
<div class="fragment"><pre class="fragment">    var callback = {<span class="stringliteral">&#39;ok&#39;</span> : function(contentText, oHttp) { <span class="comment">/* 读操作成功的后续处理 */</span> },
                    <span class="stringliteral">&#39;fail&#39;</span> : function(statusCode, oHttp) { <span class="comment">/* 读操作失败的后续处理 */</span> } };
</pre></div><ul>
<li>如果 <em>url</em> 指向本地文件，仅参数 <em>contentText</em> 有意义：当读操作成功时，所读取的文件内容。其他参数都没有意义。</li>
</ul>
<ul>
<li>如果 <em>url</em> 指向 web 服务器，<em>callback</em> 参数和 LOCALJS.WEB_SERVICE.callUrl 的 <em>callback</em> 参数一样。更多细节参见 LOCALJS.WEB_SERVICE.callUrl.</li>
</ul>
<p>示例代码如下：</p>
<div class="fragment"><pre class="fragment">    var content = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.readUrl(<span class="stringliteral">&quot;file:///C:\\settings.txt&quot;</span>); <span class="comment">// 同步的读操作：readUrl 等待读操作结束之后返回</span>

    <span class="comment">// 异步的读操作</span>
    var onOK = function(contentText)
    {
        alert(contentText);
    };

    var onFail = function(statusCode)
    {
        alert(<span class="stringliteral">&quot;读操作失败。错误码是 &quot;</span> + statusCode;
    };

    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.readUrl(<span class="stringliteral">&quot;http://example.com/example.php&quot;</span>, {<span class="stringliteral">&#39;ok&#39;</span>: onOK, <span class="stringliteral">&#39;fail&#39;</span>: onFail});
</pre></div> 
</div>
</div>
<a class="anchor" id="ab7cbd8e35cc7111c289225daf4696cea"></a><!-- doxytag: member="FILE::buildUrl" ref="ab7cbd8e35cc7111c289225daf4696cea" args="(String baseUrl, String relativeUrl)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String buildUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>baseUrl</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>relativeUrl</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>把基本 url 和相对 url 组合成一个新的 url。返回 <code>false</code> 如果参数不正确。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">baseUrl</td><td>基本 url。 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">relativeUrl</td><td>相对 url。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>组合得到的新 url。如果参数不正确，返回 <code>false。</code> </dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    var url = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.buildUrl(<span class="stringliteral">&quot;http://example.com/app/index.php&quot;</span>, <span class="stringliteral">&quot;../go.php&quot;</span>); <span class="comment">// 返回 &quot;http://example.com/go.php&quot;</span>
</pre></div> 
</div>
</div>
<a class="anchor" id="a841b182f6e93f43af7ba128d020dcea7"></a><!-- doxytag: member="FILE::normalizeUrl" ref="a841b182f6e93f43af7ba128d020dcea7" args="([optional], String relativeUrl)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String normalizeUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>relativeUrl</em>&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>返回格式化（去掉 url 的查询部分）后的当前页面的 url，或者当前页面的 url 和一个相对 url 的组合。 </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">relativeUrl</td><td>可选参数。相对 url。</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>格式化（去掉 url 的查询部分）后的当前页面的 url，或者当前页面的 url 和一个相对 url 的组合。</dd></dl>
<p>参见下面的示例代码：</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// assume current url is http://example.com/index.php?id=10&quot;</span>
    var url = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.normalizeUrl(); <span class="comment">// 返回 &quot;http://example.com/index.php&quot;</span>
    var url2 = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.normalizeUrl(<span class="stringliteral">&quot;app/go.php&quot;</span>); <span class="comment">// 返回 &quot;http://example.com/app/go.php&quot;</span>
</pre></div> 
</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
