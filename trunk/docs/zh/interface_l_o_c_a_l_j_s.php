<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: LOCALJS类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: LOCALJS类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#properties">属性</a>  </div>
  <div class="headertitle">
<h1>LOCALJS类参考<br/>
<small>
[<a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="LOCALJS" -->
<p>所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。  
<a href="#_details">更多...</a></p>

<p><a href="class_l_o_c_a_l_j_s-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a49ca3d2aae1b4847965178deb5633261"></a><!-- doxytag: member="LOCALJS::FILE" ref="a49ca3d2aae1b4847965178deb5633261" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261">FILE</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回 <a class="el" href="interface_f_i_l_e.php">FILE</a> 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。 <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a88c39a8606c41168abfe2e3d8d0198c9"></a><!-- doxytag: member="LOCALJS::UI" ref="a88c39a8606c41168abfe2e3d8d0198c9" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9">UI</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回 <a class="el" href="interface_u_i.php">UI</a> object，它提供了常用的 UI 操作。需要包含 localjs_ui.js。 <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a93d1c0c70becb07c74e108b0f1bd49d6"></a><!-- doxytag: member="LOCALJS::WEB_SERVICE" ref="a93d1c0c70becb07c74e108b0f1bd49d6" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a93d1c0c70becb07c74e108b0f1bd49d6">WEB_SERVICE</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回 <a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php">WEB_SERVICE</a> 对象，它提供了调用 web 服务的方法。需要包含 localjs_webservice.js。 <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a98bcca2bbefab54c92e47741132d25a9"></a><!-- doxytag: member="LOCALJS::LOCALIZATION" ref="a98bcca2bbefab54c92e47741132d25a9" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9">LOCALIZATION</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">返回 <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php">LOCALIZATION</a> 对象，它提供了多语言支持。需要包含 localjs_localization.js，localjs_file.js，localjs_ui.js 和 localjs_webservice.js。 <br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。 </p>
<p><a class="el" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a> 对象为所有的 LocalJS 基本对象提供了一个根命名空间。所有的 LocalJS 基本对象都源于 <a class="el" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.</p>
<p>要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。一些基本对象依赖于其他对象。下图是所有基本对象之间的依赖关系：</p>
<div align="center">
<img src="open_src_objects_zh.png" alt="open_src_objects_zh.png"/>
<p><strong>LocalJS 基本对象间的依赖关系</strong></p></div>
<p> 比如，要使用 <a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">LOCALJS.FILE</a> 对象，需要包含 localjs_file.js，localjs_ui.js 和 localjs_webservice.js 三个文件；要使用 <a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="返回 LOCALIZATION 对象，它提供了多语言支持。需要包含 localjs_localization.js，localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">LOCALJS.LOCALIZATION</a>, 所有四个 JavaScript 文件都要被包含。文件可以以任意次序被包含。 </p>
 </div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
