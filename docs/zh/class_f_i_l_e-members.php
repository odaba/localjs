<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: 成员列表";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: 成员列表</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>FILE 成员列表</h1>  </div>
</div>
<div class="contents">
成员的完整列表，这些成员属于<a class="el" href="interface_f_i_l_e.php">FILE</a>，包括所有继承而来的成员<table>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a9f38cdfedb32bebacfaf1759228a61ea">browseFile</a>([optional] boolean forSave,[optional] String title,[optional] String initialDir,[optional] String strFilter,[optional] String defExt,[optional] String initialFile,[optional] boolean readOnly)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a4d5cb0d3bb58d2653ca5a28eb35ee84a">browseFolder</a>([optional] String title,[optional] String rootFolder)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ab2be2bfa8a34bf9e4cc76064213c9240">buildPath</a>(String parent, String child)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ab7cbd8e35cc7111c289225daf4696cea">buildUrl</a>(String baseUrl, String relativeUrl)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a11c4eb341be6b3dcf3f2ce9d855b058e">createFolder</a>(String foldername)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ae422d3995ad20fae50da0a6a5667654f">deleteFile</a>(String filespec,[optional] boolean force)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ac37bcb6da1316d7792a5491a2f7801a6">deleteFolder</a>(String folderspec,[optional] boolean force)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a7c00c5f992f9567ec7b69d6e3cf25934">exec</a>(String file)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#af3294a406276bff3baad8bcb719aab66">fileExists</a>(String filename)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a93e2667c7fe3288e3e2db065fcc9f063">folderExists</a>(String foldername)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a6181d0579cb9654e86cd506737f0475f">getAppDataFolder</a>([optional] String sub_folder)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a943b822f2c3c6f32774e389330bd6a63">getExeFilename</a>()</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ad1a8f26a2cf973ae0ddffc624a479e62">getExeFolder</a>()</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a7366dfecccd6c0170f9fe6c4709aad25">getParentFolder</a>(String folder)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a42f314c1d5c8bc86abf76ecb850039c0">getProgramFolder</a>([optional] String sub_folder)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a0f1894aaa83f22c87ac4cfc0f3ff05be">iniReadInt</a>(String filename, String section, String key,[optional] int default_value)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a3130fd3652e1b86373b61cfc0348981e">iniReadStr</a>(String filename, String section, String key,[optional] String default_value)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ab82c10757856fbd93d04603ce226cb38">iniWrite</a>(String filename, String section, String key,[optional] var value)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a0c351eaed10231b01698938550e31cbe">isFileUrl</a>(String url)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a58b7576336d5c990156ccc211bc09c3a">isUrl</a>(String url)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#af20f5de0d692771dafbeef7fb57fc500">listFolder</a>(String folder)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a841b182f6e93f43af7ba128d020dcea7">normalizeUrl</a>([optional], String relativeUrl)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ad6e821755d0d8b859a69853bb8b3144d">pathToUrl</a>(String path)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">readFileUTF8</a>(String filename)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a755585f93d7b4fdc84e455fe334a7e29">readUrl</a>(String url,[optional] Object callback)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#aa9ccfdf0c38f87f504a5ae2f763977b7">regDelete</a>(String reg_path)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#ae283d76f4b92fd2f67e1db96f607e70c">regRead</a>(String reg_path)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a461f0e68e5dc507ba50ac94d56a2cfcd">regWrite</a>(String reg_path, var val,[optional] String strType)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#af4d5763f007ae57760e4903712f323f3">urlToPath</a>(String url)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
  <tr class="memlist"><td><a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">writeFileUTF8</a>(String filename, String text)</td><td><a class="el" href="interface_f_i_l_e.php">FILE</a></td><td></td></tr>
</table></div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
