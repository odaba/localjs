<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: LocalJS 基本对象";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: LocalJS 基本对象</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#nested-classes">组合类型</a>  </div>
  <div class="headertitle">
<h1>LocalJS 基本对象</h1>  </div>
</div>
<div class="contents">

<p>基本对象封装了常用的桌面操作。它们都源于根对象 <a class="el" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.  
<a href="#_details">更多...</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
组合类型</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php">BrowserWindow</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open source object. Represents a browser window. Returned by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="创建新的页面窗口或者启动一个 Internet Explorer 并转向给定的 url。">UI.newWindow</a>. Include localjs_ui.js to use it.  <a href="interface_browser_window.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php">FILE</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">开源的 JavaScript 对象。提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。  <a href="interface_f_i_l_e.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php">LOCALIZATION</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.  <a href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php">LOCALJS</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。  <a href="interface_l_o_c_a_l_j_s.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php">UI</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">开源的 JavaScript 对象。提供了常用的界面操作。需要包含localjs_ui.js。  <a href="interface_u_i.php#_details">更多...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php">WEB_SERVICE</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open source object. Provides method for web service call. Include localjs_webservice.js to use it.  <a href="interface_w_e_b___s_e_r_v_i_c_e.php#_details">更多...</a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>基本对象封装了常用的桌面操作。它们都源于根对象 <a class="el" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>. </p>
<p>要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。一些基本对象依赖于其他对象。下图是所有基本对象之间的依赖关系：</p>
<div align="center">
<img src="open_src_objects_zh.png" alt="open_src_objects_zh.png"/>
<p><strong>LocalJS 基本对象间的依赖关系</strong></p></div>
<p> 比如，要使用 <a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">LOCALJS.FILE</a> 对象，需要包含 localjs_file.js，localjs_ui.js 和 localjs_webservice.js 三个文件；要使用 <a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="返回 LOCALIZATION 对象，它提供了多语言支持。需要包含 localjs_localization.js，localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">LOCALJS.LOCALIZATION</a>, 所有四个 JavaScript 文件都要被包含。文件可以以任意次序被包含。 </p>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
