<?php
require_once('../../_config.php');
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
<p>The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Source Library to be available.  
<a href="#_details">更多...</a></p>

<p><a href="class_l_o_c_a_l_j_s-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a49ca3d2aae1b4847965178deb5633261"></a><!-- doxytag: member="LOCALJS::FILE" ref="a49ca3d2aae1b4847965178deb5633261" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261">FILE</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <a class="el" href="interface_f_i_l_e.php">FILE</a> object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a88c39a8606c41168abfe2e3d8d0198c9"></a><!-- doxytag: member="LOCALJS::UI" ref="a88c39a8606c41168abfe2e3d8d0198c9" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9">UI</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <a class="el" href="interface_u_i.php">UI</a> object, which provides methods for common UI operations. Include localjs_ui.js to use it. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a93d1c0c70becb07c74e108b0f1bd49d6"></a><!-- doxytag: member="LOCALJS::WEB_SERVICE" ref="a93d1c0c70becb07c74e108b0f1bd49d6" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a93d1c0c70becb07c74e108b0f1bd49d6">WEB_SERVICE</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns <a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php">WEB_SERVICE</a> object, which provides method for web service call. Include localjs_webservice.js to use it. <br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a98bcca2bbefab54c92e47741132d25a9"></a><!-- doxytag: member="LOCALJS::LOCALIZATION" ref="a98bcca2bbefab54c92e47741132d25a9" args="" -->
&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9">LOCALIZATION</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Return <a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php">LOCALIZATION</a> Object, which provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it. <br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p>The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Source Library to be available. </p>
<p>The <a class="el" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a> global object provides a single global namespace for all LocalJS Basic Objects. All Basic Objects derive from <a class="el" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.</p>
<p>LocalJS Basic Objects are available by including JavaScript files from LocalJS Open Source Library. Some objects depend on other objects to work. Diagram below shows the dependencies relationship among all open source LocalJS objects:</p>
<div align="center">
<img src="open_src_objects.png" alt="open_src_objects.png"/>
<p><strong>LocalJS Basic Objects Dependencies</strong></p></div>
<p> For example, to use <a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALJS.FILE</a>, localjs_file.js, localjs_ui.js and localjs_webservice.js should be included; to use <a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALJS.LOCALIZATION</a>, all the 4 JavaScript files should be included. The sequence of files being included doesn't matter. </p>
 </div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
