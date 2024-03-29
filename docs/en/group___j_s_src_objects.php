<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: LocalJS Basic Objects";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: LocalJS Basic Objects</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- Generated by Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'Search');
--></script>
<div class="header">
  <div class="summary">
<a href="#nested-classes">Classes</a>  </div>
  <div class="headertitle">
<h1>LocalJS Basic Objects</h1>  </div>
</div>
<div class="contents">

<p>Objects wrapping up common desktop operations, derived from root object <a class="el" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.  
<a href="#_details">More...</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_browser_window.php">BrowserWindow</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open source object. Represents a browser window. Returned by <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc" title="Creates a new browser window or standalone Internet Explorer and navigates to given url...">UI.newWindow</a>. Include localjs_ui.js to use it.  <a href="interface_browser_window.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_f_i_l_e.php">FILE</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">JavaScript Object open sourced. Provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.  <a href="interface_f_i_l_e.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php">LOCALIZATION</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open source object. Provides method for multi-languages support. Include localjs_localization.js, localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.  <a href="interface_l_o_c_a_l_i_z_a_t_i_o_n.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_l_o_c_a_l_j_s.php">LOCALJS</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Source Library to be available.  <a href="interface_l_o_c_a_l_j_s.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_u_i.php">UI</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">JavaScript Object open sourced. Provides methods for common UI operations. Include localjs_ui.js to use it.  <a href="interface_u_i.php#_details">More...</a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php">WEB_SERVICE</a></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Open source object. Provides method for web service call. Include localjs_webservice.js to use it.  <a href="interface_w_e_b___s_e_r_v_i_c_e.php#_details">More...</a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Objects wrapping up common desktop operations, derived from root object <a class="el" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>. </p>
<p>LocalJS Basic Objects are available by including JavaScript files from LocalJS Open Source Library. Some objects depend on other objects to work. Diagram below shows the dependencies relationship among all open source LocalJS objects:</p>
<div align="center">
<img src="open_src_objects.png" alt="open_src_objects.png"/>
<p><strong>LocalJS Basic Objects Dependencies</strong></p></div>
<p> For example, to use <a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALJS.FILE</a>, localjs_file.js, localjs_ui.js and localjs_webservice.js should be included; to use <a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALJS.LOCALIZATION</a>, all the 4 JavaScript files should be included. The sequence of files being included doesn't matter. </p>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
