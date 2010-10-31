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
<p>Open source object. Provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.  
<a href="#_details">更多...</a></p>

<p><a href="class_f_i_l_e-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td colspan="2"><div class="groupHeader">INI and registry access</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a0f1894aaa83f22c87ac4cfc0f3ff05be">iniReadInt</a> (String filename, String section, String key,[optional] int default_value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Read an integer from INI file.  <a href="#a0f1894aaa83f22c87ac4cfc0f3ff05be"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a3130fd3652e1b86373b61cfc0348981e">iniReadStr</a> (String filename, String section, String key,[optional] String default_value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Read a string from INI file.  <a href="#a3130fd3652e1b86373b61cfc0348981e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ab82c10757856fbd93d04603ce226cb38">iniWrite</a> (String filename, String section, String key,[optional] var value)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Write an entry to INI file or delete the entry from INI file.  <a href="#ab82c10757856fbd93d04603ce226cb38"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">var&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ae283d76f4b92fd2f67e1db96f607e70c">regRead</a> (String reg_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the value of a key or value-name from the registry.  <a href="#ae283d76f4b92fd2f67e1db96f607e70c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a461f0e68e5dc507ba50ac94d56a2cfcd">regWrite</a> (String reg_path, var val,[optional] String strType)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Creates a new key, adds another value-name to an existing key (and assigns it a value), or changes the value of an existing value-name.  <a href="#a461f0e68e5dc507ba50ac94d56a2cfcd"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#aa9ccfdf0c38f87f504a5ae2f763977b7">regDelete</a> (String reg_path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Deletes a key or one of its values from the registry.  <a href="#aa9ccfdf0c38f87f504a5ae2f763977b7"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">File and folder operations</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af3294a406276bff3baad8bcb719aab66">fileExists</a> (String filename)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <code>true</code> if a specified file exists; <code>false</code> if it does not.  <a href="#af3294a406276bff3baad8bcb719aab66"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a93e2667c7fe3288e3e2db065fcc9f063">folderExists</a> (String foldername)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <code>true</code> if a specified folder exists; <code>false</code> if it does not.  <a href="#a93e2667c7fe3288e3e2db065fcc9f063"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a6181d0579cb9654e86cd506737f0475f">getAppDataFolder</a> ([optional] String sub_folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get user data folder, optionally provide a sub folder name.  <a href="#a6181d0579cb9654e86cd506737f0475f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a42f314c1d5c8bc86abf76ecb850039c0">getProgramFolder</a> ([optional] String sub_folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get Program Files folder, optionally provide a sub folder name.  <a href="#a42f314c1d5c8bc86abf76ecb850039c0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a943b822f2c3c6f32774e389330bd6a63">getExeFilename</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get full filename of current exe file.  <a href="#a943b822f2c3c6f32774e389330bd6a63"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ad1a8f26a2cf973ae0ddffc624a479e62">getExeFolder</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get folder where current exe file exists.  <a href="#ad1a8f26a2cf973ae0ddffc624a479e62"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a7366dfecccd6c0170f9fe6c4709aad25">getParentFolder</a> (String folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a string containing the name of the parent folder of the last component in a specified path.  <a href="#a7366dfecccd6c0170f9fe6c4709aad25"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ab2be2bfa8a34bf9e4cc76064213c9240">buildPath</a> (String parent, String child)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Appends a name to an existing path.  <a href="#ab2be2bfa8a34bf9e4cc76064213c9240"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">readFileUTF8</a> (String filename)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Read UTF8 format file and return the content, or false if read fails.  <a href="#af18bb442d4a17a21806d850fab3dcb99"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">writeFileUTF8</a> (String filename, String text)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Save text to file in UTF8 format. Existing content will be overwritten. A new file will be created if not exists.  <a href="#a79aabfb4240680c61bf91440ff6e9823"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ae422d3995ad20fae50da0a6a5667654f">deleteFile</a> (String filespec,[optional] boolean force)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Deletes a specified file.  <a href="#ae422d3995ad20fae50da0a6a5667654f"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a11c4eb341be6b3dcf3f2ce9d855b058e">createFolder</a> (String foldername)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Creates a folder.  <a href="#a11c4eb341be6b3dcf3f2ce9d855b058e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ac37bcb6da1316d7792a5491a2f7801a6">deleteFolder</a> (String folderspec,[optional] boolean force)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Deletes a specified folder and its contents.  <a href="#ac37bcb6da1316d7792a5491a2f7801a6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Array&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af20f5de0d692771dafbeef7fb57fc500">listFolder</a> (String folder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns an array of all File objects contained in the specified folder, including those with hidden and system file attributes set.  <a href="#af20f5de0d692771dafbeef7fb57fc500"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a561e6ec182a20ebe1d85653d67b0ae44">browseFile</a> (String initialDir, String strFilter, String title, String defExt,[optional] String initialFile,[optional] boolean readOnly)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open file dialig to browse to a file, return path to the select file, or false if the dialog is canceled.  <a href="#a561e6ec182a20ebe1d85653d67b0ae44"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a5ddc249346092c53b6e0fadd644a0fb7">browseFolder</a> (String title,[optional] String rootFolder)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Creates a dialog box that enables the user to select a folder and then returns the path to the selected folder, false if the dialog is canceled, or "" if user doesn't select a file system folder.  <a href="#a5ddc249346092c53b6e0fadd644a0fb7"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a7c00c5f992f9567ec7b69d6e3cf25934">exec</a> (String file)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Execute a executable file, open a url in user default browser, or open a file with system default application.  <a href="#a7c00c5f992f9567ec7b69d6e3cf25934"></a><br/></td></tr>
<tr><td colspan="2"><div class="groupHeader">Url operations</div></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ad6e821755d0d8b859a69853bb8b3144d">pathToUrl</a> (String path)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the url points to a local file, returns false if fails.  <a href="#ad6e821755d0d8b859a69853bb8b3144d"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#af4d5763f007ae57760e4903712f323f3">urlToPath</a> (String url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns the local file path from a url, return false if fails.  <a href="#af4d5763f007ae57760e4903712f323f3"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a58b7576336d5c990156ccc211bc09c3a">isUrl</a> (String url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Return <code>true</code> if the url given is a valid url, <code>false</code> if it's not.  <a href="#a58b7576336d5c990156ccc211bc09c3a"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a0c351eaed10231b01698938550e31cbe">isFileUrl</a> (String url)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Return <code>true</code> if the url given is a file system url, <code>false</code> if it's not.  <a href="#a0c351eaed10231b01698938550e31cbe"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a755585f93d7b4fdc84e455fe334a7e29">readUrl</a> (String url,[optional] Object callback)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">One single function to read both local and remote files, synchronized or asynchronized.  <a href="#a755585f93d7b4fdc84e455fe334a7e29"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#ab7cbd8e35cc7111c289225daf4696cea">buildUrl</a> (String baseUrl, String relativeUrl)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">When provided with a relative URL and its base, returns a URL in canonical form, or <code>false</code> if the parameters are incorrect.  <a href="#ab7cbd8e35cc7111c289225daf4696cea"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php#a841b182f6e93f43af7ba128d020dcea7">normalizeUrl</a> ([optional], String relativeUrl)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns normalized url of current document (remove trailing query strings), optionally append a relative url.  <a href="#a841b182f6e93f43af7ba128d020dcea7"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>Open source object. Provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it. </p>
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

<p>Read an integer from INI file. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>INI file name to read from </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">section</td><td>Section in INI file </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>Key of the value to read from </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">default_value</td><td>Optional. default value to be returned if the section and key do not exist. Zero is assumed if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The integer read from INI file, or <em>default_value</em> if the section and key do not exist.</dd></dl>
<p>Code below read an integer from INI file; if not found, return -1: </p>
<div class="fragment"><pre class="fragment">    var intVal = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.iniReadInt(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, -1);
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

<p>Read a string from INI file. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>INI file name to read from </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">section</td><td>Section in INI file </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>Key of the value to read from </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">default_value</td><td>Optional. default value to be returned if the section and key do not exist. "" is assumed if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The string read from INI file, or <em>default_value</em> if the section and key do not exist.</dd></dl>
<p>Code below read a string from INI file; if not found, return an empty string: </p>
<div class="fragment"><pre class="fragment">    var strVal = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.iniReadStr(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, <span class="stringliteral">&quot;&quot;</span>);
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

<p>Write an entry to INI file or delete the entry from INI file. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>INI file name to write to </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">section</td><td>Section in INI file </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">key</td><td>Key of the value to write </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">value</td><td>Optional. String value to write to. <em>vlaue</em> will be converted to string if it's not. If <em>value</em> is omitted or cannot be converted to a string (e.g., pass in <code>undefined</code>), the key will be deleted from INI file.</td></tr>
  </table>
  </dd>
</dl>
<p>Code below saves settings to INI <a href="file:">file:</a> </p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.iniWrite(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, <span class="stringliteral">&quot;value&quot;</span>);
</pre></div><p>To remove an entry from ini <a href="file:">file:</a></p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.iniWrite(<span class="stringliteral">&quot;c:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;section_name&quot;</span>, <span class="stringliteral">&quot;key_name&quot;</span>, undefined);
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

<p>Returns the value of a key or value-name from the registry. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>String value indicating the key or value-name whose value you want.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The value read from registry.</dd></dl>
<p>This method simply wraps up <a href="http://msdn.microsoft.com/en-us/library/x05fawxd(VS.85).aspx" target="_blank">RegRead method of WshShell Object</a>. Refer to <a href="http://msdn.microsoft.com/en-us/library/x05fawxd(VS.85).aspx" target="_blank">RegRead</a> for more detail.</p>
<p>Code below reads registry:</p>
<div class="fragment"><pre class="fragment">    var value = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.regRead(<span class="stringliteral">&quot;HKCU\\Software\\ACME\\FortuneTeller\\MindReader&quot;</span>);
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

<p>Creates a new key, adds another value-name to an existing key (and assigns it a value), or changes the value of an existing value-name. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>String value indicating the key-name, value-name, or value you want to create, add, or change. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">val</td><td>The name of the new key you want to create, the name of the value you want to add to an existing key, or the new value you want to assign to an existing value-name. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">strType</td><td>Optional. String value indicating the value's data type. Refer to <a href="http://msdn.microsoft.com/en-us/library/yfdfhz1b(VS.85).aspx" target="_blank">RegWrite method of WshShell Object</a> for detail.</td></tr>
  </table>
  </dd>
</dl>
<p>This method simply wraps up <a href="http://msdn.microsoft.com/en-us/library/yfdfhz1b(VS.85).aspx" target="_blank">RegWrite method of WshShell Object</a>. Refer to <a href="http://msdn.microsoft.com/en-us/library/yfdfhz1b(VS.85).aspx" target="_blank">RegWrite</a> for more detail.</p>
<p>Code below writes a value to registry:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.regWrite(<span class="stringliteral">&quot;HKCU\\Software\\ACME\\FortuneTeller\\MindReader&quot;</span>, <span class="stringliteral">&quot;Goocher!&quot;</span>, <span class="stringliteral">&quot;REG_SZ&quot;</span>);
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

<p>Deletes a key or one of its values from the registry. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">reg_path</td><td>String value indicating the name of the registry key or key value you want to delete.</td></tr>
  </table>
  </dd>
</dl>
<p>This method simply wraps up <a href="http://msdn.microsoft.com/en-us/library/293bt9hh(VS.85).aspx" target="_blank">RegDelete method of WshShell Object</a>. Refer to <a href="http://msdn.microsoft.com/en-us/library/293bt9hh(VS.85).aspx" target="_blank">RegDelete</a> for more detail.</p>
<p>Code below deletes a value from registry:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.regDelete(<span class="stringliteral">&quot;HKCU\\Software\\ACME\\FortuneTeller\\MindReader&quot;</span>);
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

<p>Returns <code>true</code> if a specified file exists; <code>false</code> if it does not. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>The name of the file whose existence is to be determined. A complete path specification (either absolute or relative) must be provided if the file isn't expected to exist in the current folder. Wildcard characters (*, ?, and so on) are not supported.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if a specified file exists; <code>false</code> if it does not.</dd></dl>
<p>This method simply wraps up <a href="http://msdn.microsoft.com/en-us/library/x23stk5t(VS.85).aspx" target="_blank">FileExists method of FileSystemObject Object</a>. Refer to <a href="http://msdn.microsoft.com/en-us/library/x23stk5t(VS.85).aspx" target="_blank">FileExists</a> for more detail.</p>
<p>The following code illustrates how to check if a file exists or not:</p>
<div class="fragment"><pre class="fragment">    var exists = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.fileExists(<span class="stringliteral">&quot;C:\\test.ini&quot;</span>);
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

<p>Returns <code>true</code> if a specified folder exists; <code>false</code> if it does not. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">foldername</td><td>The name of the folder whose existence is to be determined. A complete path specification (either absolute or relative) must be provided if the folder isn't expected to exist in the current folder.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if a specified folder exists; <code>false</code> if it does not.</dd></dl>
<p>This method simply wraps up <a href="http://msdn.microsoft.com/en-us/library/5xc78d8d(VS.85).aspx" target="_blank">FolderExists method of FileSystemObject Object</a>. Refer to <a href="http://msdn.microsoft.com/en-us/library/5xc78d8d(VS.85).aspx" target="_blank">FolderExists</a> for more detail.</p>
<p>The following code illustrates how to check if a folder exists or not:</p>
<div class="fragment"><pre class="fragment">    var exists = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.folderExists(<span class="stringliteral">&quot;C:\\Documents and Settings&quot;</span>);
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

<p>Get user data folder, optionally provide a sub folder name. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">sub_folder</td><td>Optional. If present, return sub folder name under user data folder.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>User data folder if <em>sub_folder</em> is omitted; if <em>sub_folder</em> presents, returns the sub folder under user data folder.</dd></dl>
<p>The following code illustrates how to use the getAppDataFolder method:</p>
<div class="fragment"><pre class="fragment">    var app_data_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getAppDataFolder(); <span class="comment">// On Windows XP, return C:\Documents and Settings\Username\Application Data</span>
    var app_data_sub_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getAppDataFolder(<span class="stringliteral">&quot;LocalJS&quot;</span>); <span class="comment">// On Windows XP, return C:\Documents and Settings\Username\Application Data\LocalJS</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>The getAppDataFolder method doesn't create the sub folder if it doesn't exists. </dd></dl>

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

<p>Get Program Files folder, optionally provide a sub folder name. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">sub_folder</td><td>Optional. If present, return sub folder name under user Program Files folder.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>Program Files folder if <em>sub_folder</em> is omitted; if <em>sub_folder</em> presents, returns the sub folder under Program Files folder.</dd></dl>
<p>The following code illustrates how to use the getProgramFolder method:</p>
<div class="fragment"><pre class="fragment">    var program_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getProgramFolder(); <span class="comment">// return C:\Program Files</span>
    var program_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getProgramFolder(<span class="stringliteral">&quot;LocalJS&quot;</span>); <span class="comment">// return C:\Program Files\LocalJS</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>The getProgramFolder method doesn't create the sub folder if it doesn't exists. </dd></dl>

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

<p>Get full filename of current exe file. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>Full filename of current exe file.</dd></dl>
<p>The following code illustrates how to use the getExeFilename method:</p>
<div class="fragment"><pre class="fragment">    var exe_name = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getExeFilename(); <span class="comment">// for example, return C:\Program Files\LocalJS\app.exe</span>
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

<p>Get folder where current exe file exists. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>Folder where current exe file exists.</dd></dl>
<p>The following code illustrates how to use the getExeFolder method:</p>
<div class="fragment"><pre class="fragment">    var exe_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getExeFolder(); <span class="comment">// for example, return C:\Program Files\LocalJS</span>
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

<p>Returns a string containing the name of the parent folder of the last component in a specified path. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">folder</td><td>The path specification for the component whose parent folder name is to be returned.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>A string containing the name of the parent folder of the last component in a specified path.</dd></dl>
<p>The following code illustrates how to use the getParentFolder method:</p>
<div class="fragment"><pre class="fragment">    var parent_folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getParentFolder(<span class="stringliteral">&quot;C:\\Program Files\\LocalJS&quot;</span>); <span class="comment">// return C:\Program Files</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>The getParentFolder method works only on the provided path string. It does not attempt to resolve the path, nor does it check for the existence of the specified path. </dd></dl>

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

<p>Appends a name to an existing path. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">parent</td><td>Existing path to which name is appended. Path can be absolute or relative and need not specify an existing folder. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">child</td><td>Name being appended to the existing path.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The combined path. The path doesn't have to exist and wonn't be created if not existed.</dd></dl>
<p>The following code illustrates how to use the buildPath method:</p>
<div class="fragment"><pre class="fragment">    var path = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.buildPath(<span class="stringliteral">&quot;C:\\Program Files&quot;</span>, <span class="stringliteral">&quot;LocalJS&quot;</span>); <span class="comment">// return C:\Program Files\LocalJS</span>
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

<p>Read UTF8 format file and return the content, or false if read fails. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>The UTF8 format file to read.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>Content of the file as string, or false if read fails. Use <code>false</code> <code>===</code> to test if reading fails.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>The UTF8 file should not have the leading BOM.</dd></dl>
<p>The following code illustrates how to use the readFileUTF8 method to read file in:</p>
<div class="fragment"><pre class="fragment">    var content = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.readFileUTF8(<span class="stringliteral">&quot;C:\\settings.ini&quot;</span>);
    <span class="keywordflow">if</span> (<span class="keyword">false</span> === content)
        alert(<span class="stringliteral">&quot;Reading failed!&quot;</span>);
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

<p>Save text to file in UTF8 format. Existing content will be overwritten. A new file will be created if not exists. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filename</td><td>the name of file to write to </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">text</td><td>the text to write to.</td></tr>
  </table>
  </dd>
</dl>
<p>The text will be saved to file in UTF8 format. No leading BOM is prepended to the file.</p>
<p>An error will be generated if write fails.</p>
<p>The following code illustrates how to use the writeFileUTF8 method to save text to a <a href="file:">file:</a></p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.writeFileUTF8(<span class="stringliteral">&quot;C:\\settings.ini&quot;</span>, <span class="stringliteral">&quot;LocalJS&quot;</span>);
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

<p>Deletes a specified file. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">filespec</td><td>The name of the file to delete. The <em>filespec</em> can contain wildcard characters in the last path component. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">force</td><td>Optional. Boolean value that is <code>true</code> if files with the read-only attribute set are to be deleted; <code>false</code> (default) if they are not.</td></tr>
  </table>
  </dd>
</dl>
<p>An error occurs if no matching files are found. The deleteFile method stops on the first error it encounters. No attempt is made to roll back or undo any changes that were made before an error occurred.</p>
<p>The following example illustrates the use of the deleteFile method.</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.deleteFile(<span class="stringliteral">&quot;C:\\settings.ini&quot;</span>);
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

<p>Creates a folder. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">foldername</td><td>String expression that identifies the folder to create.</td></tr>
  </table>
  </dd>
</dl>
<p>If the folder already exists, this method simply returns without generating an error.</p>
<p>The following code illustrates how to use the createFolder method to create a folder.</p>
<div class="fragment"><pre class="fragment">    var a = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.createFolder(<span class="stringliteral">&quot;c:\\new folder&quot;</span>);
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

<p>Deletes a specified folder and its contents. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">folderspec</td><td>The name of the folder to delete. The folderspec can contain wildcard characters in the last path component. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">force</td><td>Boolean value that is <code>true</code> if folders with the read-only attribute set are to be deleted; <code>false</code> (default) if they are not.</td></tr>
  </table>
  </dd>
</dl>
<p>The deleteFolder method does not distinguish between folders that have contents and those that do not. The specified folder is deleted regardless of whether or not it has contents.</p>
<p>An error occurs if no matching folders are found. The deleteFolder method stops on the first error it encounters. No attempt is made to roll back or undo any changes that were made before an error occurred.</p>
<p>The following example illustrates the use of the deleteFolder method.</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.deleteFolder(<span class="stringliteral">&quot;C:\\Program Files\\LocalJS&quot;</span>);
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

<p>Returns an array of all File objects contained in the specified folder, including those with hidden and system file attributes set. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">folder</td><td>name whose content to be listed.</td></tr>
  </table>
  </dd>
</dl>
<p>The listFolder method wraps up <a href="http://msdn.microsoft.com/en-us/library/18b41306(VS.85).aspx" target="_blank">Files Property of Folder object</a>, refer to <a href="http://msdn.microsoft.com/en-us/library/18b41306(VS.85).aspx" target="_blank">Files Property</a> for more detail.</p>
<p>The following code illustrates how to use the listFolder method:</p>
<div class="fragment"><pre class="fragment">    var file_array = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.listFolder(<span class="stringliteral">&quot;C:\\Program Files&quot;</span>), s = <span class="stringliteral">&quot;&quot;</span>;
    <span class="keywordflow">for</span> (var i = 0; i &lt; file_array.length; ++i)
    {
        s += file_array[i].name;
        s += <span class="stringliteral">&quot;&lt;br/&gt;&quot;</span>;
    }
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.writeFileUTF8(<span class="stringliteral">&quot;C:\\test.html&quot;</span>, s);
</pre></div> 
</div>
</div>
<a class="anchor" id="a561e6ec182a20ebe1d85653d67b0ae44"></a><!-- doxytag: member="FILE::browseFile" ref="a561e6ec182a20ebe1d85653d67b0ae44" args="(String initialDir, String strFilter, String title, String defExt,[optional] String initialFile,[optional] boolean readOnly)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String browseFile </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>initialDir</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>strFilter</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>title</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
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

<p>Open file dialig to browse to a file, return path to the select file, or false if the dialog is canceled. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">initialDir</td><td>The initial directory the dialog opens at </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">strFilter</td><td>A string like <code>"Text Files\0*.TXT\0Document Files\0*.TXT;*.DOC;*.BAK\0All Files\0*.*\0"</code> to specify file filter of the dialog. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">title</td><td>The title for the dialog. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">defExt</td><td>The default extension appended to the file name if the user fails to type an extension. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">initialFile</td><td>Optional. The initial filename displayed in edit control of the file dialog. If omitted, the edit control is left empty. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">readOnly</td><td>Optional. If <code>true</code>, the Read Only check box will be initially checked; <code>false</code> (default value) to not check it.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The filename user selected, or false if user cancels the dialog. Use <code>false</code> <code>===</code> to check if the dialog is canceled.</dd></dl>
<p>Parameter <em>strFilter</em> has to be ended by <code>"\0"</code>. The sub strings separated by <code>"\0"</code> have to be in pairs: they are in <code>"Filter name displayed\0Filter\0Filter name displayed\0Filter"</code> format. If you feel confused, it's OK. Simply try the sample code below you will understand it.</p>
<p>The following code illustrates how to use the browseFile method:</p>
<div class="fragment"><pre class="fragment">    var filename = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.browseFile(<span class="stringliteral">&quot;C:\\Program Files\\LocalJS&quot;</span>,
                                           <span class="stringliteral">&quot;Text Files\0*.TXT\0Document Files\0*.TXT;*.DOC;*.BAK\0All Files\0*.*\0&quot;</span>,
                                           <span class="stringliteral">&quot;Please choose the file&quot;</span>, <span class="stringliteral">&quot;txt&quot;</span>, <span class="stringliteral">&quot;settings.txt&quot;</span>);
    <span class="keywordflow">if</span> (<span class="keyword">false</span> === filename)
        alert(<span class="stringliteral">&quot;The file dialog was canceled&quot;</span>);
    <span class="keywordflow">else</span>
        alert(filename);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>The browseFile method wraps up Windows API <a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a>. If you are interested at more detail, refer to the source code of browseFile method in localjs_file.js, <a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a> and <a href="http://msdn.microsoft.com/en-us/library/ms646839(VS.85).aspx" target="_blank">OPENFILENAME Structure</a>. </dd></dl>

</div>
</div>
<a class="anchor" id="a5ddc249346092c53b6e0fadd644a0fb7"></a><!-- doxytag: member="FILE::browseFolder" ref="a5ddc249346092c53b6e0fadd644a0fb7" args="(String title,[optional] String rootFolder)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String browseFolder </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
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

<p>Creates a dialog box that enables the user to select a folder and then returns the path to the selected folder, false if the dialog is canceled, or "" if user doesn't select a file system folder. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">title</td><td>A String value that represents the title displayed inside the Browse dialog box. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">rootFolder</td><td>Optional. The root folder to use in the dialog box. The user cannot browse higher in the tree than this folder. If this value is not specified, the root folder used in the dialog box is the desktop.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The path to the selected folder, false if user cancels the dialog, or "" if user doesn't select a file system folder (for example, "My Computer"). Use <code>false</code> <code>===</code> to check if the dialog is canceled.</dd></dl>
<p>The following code illustrates how to use the browseFolder method:</p>
<div class="fragment"><pre class="fragment">    var folder = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.browseFolder(<span class="stringliteral">&quot;Please choose a folder&quot;</span>);
    <span class="keywordflow">if</span> (<span class="keyword">false</span> === folder)
        alert(<span class="stringliteral">&quot;The folder dialog was canceled&quot;</span>);
    <span class="keywordflow">else</span> <span class="keywordflow">if</span> (<span class="stringliteral">&quot;&quot;</span> == folder)
        alert(<span class="stringliteral">&quot;Please reselect the folder&quot;</span>);
    <span class="keywordflow">else</span>
        alert(folder);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>The browseFolder method wraps up <a href="http://msdn.microsoft.com/en-us/library/bb774065(VS.85).aspx" target="_blank">Shell.BrowseForFolder Method</a>. If you are interested at more detail, refer to the source code of browseFolder method in localjs_file.js, and <a href="http://msdn.microsoft.com/en-us/library/bb774065(VS.85).aspx" target="_blank">Shell.BrowseForFolder Method</a>. </dd></dl>

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

<p>Execute a executable file, open a url in user default browser, or open a file with system default application. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">file</td><td>The executable filename, or a url, or a file to be opened by system default application.</td></tr>
  </table>
  </dd>
</dl>
<p>The following code illustrates how to use the exec method:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.exec(<span class="stringliteral">&quot;http://localjs.org/&quot;</span>); <span class="comment">// Open the site at user default browser.</span>
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

<p>Returns the url points to a local file, returns false if fails. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">path</td><td>The path to the local file</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The url points to the local file, or <code>false</code> if cannot get the url. Use <code>false</code> <code>===</code> to check if the convert fails.</dd></dl>
<p>The following code illustrates how to use the pathToUrl method:</p>
<div class="fragment"><pre class="fragment">    var url = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.pathToUrl(<span class="stringliteral">&quot;C:\\test.ini&quot;</span>); <span class="comment">// return file:///C:/test.ini</span>
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

<p>Returns the local file path from a url, return false if fails. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The url whose local file path will be returned.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The local file path from the url, or <code>false</code> if fails to convert. Use <code>false</code> <code>===</code> to check if the convert fails.</dd></dl>
<p>The following code illustrates how to use the urlToPath method:</p>
<div class="fragment"><pre class="fragment">    var path = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.urlToPath(<span class="stringliteral">&quot;file:///C:/test.ini&quot;</span>); <span class="comment">// return C:\test.ini</span>
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

<p>Return <code>true</code> if the url given is a valid url, <code>false</code> if it's not. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The url to be checked</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if the url given is a valid url, <code>false</code> if it's not.</dd></dl>
<p>The following code illustrates how to use the isUrl method:</p>
<div class="fragment"><pre class="fragment">    var ok = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.isUrl(<span class="stringliteral">&quot;http://localjs.org/&quot;</span>); <span class="comment">// a valid url</span>
    var error = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.isUrl(<span class="stringliteral">&quot;localjs.org&quot;</span>);  <span class="comment">// not a valid url</span>
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

<p>Return <code>true</code> if the url given is a file system url, <code>false</code> if it's not. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The url to be checked</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd><code>true</code> if the url given is a file system url, <code>false</code> if it's not.</dd></dl>
<p>The file or folder pointed by the url doesn't have to exist.</p>
<p>The following code illustrates how to use the isFileUrl method:</p>
<div class="fragment"><pre class="fragment">    var ok = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.isFileUrl(<span class="stringliteral">&quot;file:///C:\\Windows\\system32\\notepad.exe&quot;</span>); <span class="comment">// a file system url</span>
    var error = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.isFileUrl(<span class="stringliteral">&quot;http://localjs.org/&quot;</span>);  <span class="comment">// a http url</span>
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

<p>One single function to read both local and remote files, synchronized or asynchronized. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>The url to be read. Can be a file url or http url </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">callback</td><td>Optional. Details are discussed below.</td></tr>
  </table>
  </dd>
</dl>
<p>If <em>callback</em> is omitted, the readUrl method waits until the read operation ends and returns the content of the url. If read fails, readUrl returns <code>false</code>. Use <code>false</code> <code>===</code> to check if the read fails.</p>
<p>If <em>callback</em> is not omitted, then readUrl method returns immediately and read result are passed to functions in callback object.</p>
<p>The callback object should have two properties <code>ok</code> and <code>fail</code>, each be a function:</p>
<div class="fragment"><pre class="fragment">    var callback = {<span class="stringliteral">&#39;ok&#39;</span> : function(contentText, oHttp) { <span class="comment">/* read ok handling */</span> },
                    <span class="stringliteral">&#39;fail&#39;</span> : function(statusCode, oHttp) { <span class="comment">/* error handling */</span> } };
</pre></div><ul>
<li>If <em>url</em> is a file system url, only <em>contentText</em> is used, which is the file content if read succeeded. Other parameters in callback functions are not used.</li>
</ul>
<ul>
<li>If <em>url</em> is a web url, then <em>callback</em> is same as the <em>callback</em> parameter passed to LOCALJS.WEB_SERVICE.callUrl. Refer to LOCALJS.WEB_SERVICE.callUrl for more detail.</li>
</ul>
<p>The following code illustrates how to use the readUrl method:</p>
<div class="fragment"><pre class="fragment">    var content = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.readUrl(<span class="stringliteral">&quot;file:///C:\\settings.txt&quot;</span>); <span class="comment">// synchronized read</span>

    <span class="comment">// asynchronized read</span>
    var onOK = function(contentText)
    {
        alert(contentText);
    };

    var onFail = function(statusCode)
    {
        alert(<span class="stringliteral">&quot;Read failed, the error status is &quot;</span> + statusCode;
    };

    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.readUrl(<span class="stringliteral">&quot;http://example.com/example.php&quot;</span>, {<span class="stringliteral">&#39;ok&#39;</span>: onOK, <span class="stringliteral">&#39;fail&#39;</span>: onFail});
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

<p>When provided with a relative URL and its base, returns a URL in canonical form, or <code>false</code> if the parameters are incorrect. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">baseUrl</td><td>The base url </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">relativeUrl</td><td>The relative url</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The combined url, or <code>false</code> if the parameters are incorrect.</dd></dl>
<p>The following code illustrates how to use the buildUrl method:</p>
<div class="fragment"><pre class="fragment">    var url = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.buildUrl(<span class="stringliteral">&quot;http://example.com/app/index.php&quot;</span>, <span class="stringliteral">&quot;../go.php&quot;</span>); <span class="comment">// return &quot;http://example.com/go.php&quot;</span>
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

<p>Returns normalized url of current document (remove trailing query strings), optionally append a relative url. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">relativeUrl</td><td>Optional. If present, the relative url will be appended to result url.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>Normalized url.</dd></dl>
<p>The following code illustrates how to use the normalizeUrl method:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// assume current url is http://example.com/index.php?id=10&quot;</span>
    var url = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.normalizeUrl(); <span class="comment">// return &quot;http://example.com/index.php&quot;</span>
    var url2 = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.normalizeUrl(<span class="stringliteral">&quot;app/go.php&quot;</span>); <span class="comment">// return &quot;http://example.com/app/go.php&quot;</span>
</pre></div> 
</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
