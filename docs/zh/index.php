<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: 进一步了解 LocalJS</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>进一步了解 LocalJS </h1>  </div>
</div>
<div class="contents">
<h2><a class="anchor" id="localjs_components"></a>
LocalJS 包括三部分</h2>
<div class="yui-gc"> <div class="yui-u first"> <div class="myli"> <a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>. Objects wrapping up common desktop operations. <b>In most cases, you only need to deal with LocalJS Basic Objects</b>. </p>
<div class="indent">LocalJS Basic Objects are implemented by LocalJS open source JavaScript library, and based on <a class="el" href="group___j_s_objects.php">LocalJS Advanced Objects</a> and <a class="el" href="group___host_a_p_i.php">LocalJS Host API</a>.</div> </div> <div class="myli"> <a class="el" href="group___j_s_objects.php">LocalJS Advanced Objects</a>. A batch of JavaScript Objects which provide fully local access ability to JavaScript running in LocalJS browsers. </p>
<div class="indent">These objects are provided for advanced operations like access local database, call Windows API, create script thread, etc.</div> </div> <div class="myli"> <a class="el" href="group___host_a_p_i.php">LocalJS Host API</a>. A set of C functions exported by localjs.dll, used to launch and manage LocalJS browsers. </p>
<div class="indent">These functions are called by LocalJS bootstrap program. You only need to take a look at them when you need to control your application from out of JavaScript. For instance, call JavaScript functions from C++ code.</div> </div> </div> <div class="yui-u">  
<div class="download" style="padding-top:0.5em">
<a href="<?php echo $demo_7z_link; ?>" target="_blank"><span class="download link" style="width:8.5em">Download Demo</span><span class="download_end link">&nbsp;</span></a>
</div>
<div class="download" style="padding-top:0.5em">
<a href="<?php echo $release_zip_link; ?>" target="_blank"><span class="download link">Download Runtime</span><span class="download_end link">&nbsp;</span></a>
</div>
<a href="howto.php" style="color:MediumBlue"><div class="next link" style="width:12.5em;padding-left:0em;margin-left:1.5em;margin-top:1em;">Try Some JavaScript</div></a>
 </div> </div><p>Diagram below shows relationship among LocalJS components:</p>
<div align="center">
<img src="overview.png" alt="overview.png"/>
<p><strong>LocalJS Components</strong></p></div>
 <h2><a class="anchor" id="localjs_why"></a>
Why LocalJS?</h2>
<p><span class="blue"><b>Fast, Easy, and Low Cost.</b></span></p>
<div class="myli">LocalJS is very small, launch fast, and run fast</div> <div class="myli">LocalJS doesn't depend on anything else to run</div> <div class="myli">HTML/CSS/JavaScript is designed for easy to use, and easy to learn with <a href="http://www.javascriptkit.com/javatutors/" target="_blank">so many tutorials</a> on web</div> <div class="myli">Prototyping and developing in HTML/CSS/JavaScript are very fast and flexible</div> <div class="myli"><span class="red">FREE</span> JavaScript libraries like <a href="http://jQuery.com/" target="_blank">jQuery</a> make prototyping and programming in JavaScript even simpler</div> <div class="myli">JavaScript libraries like <a href="http://developer.yahoo.com/yui/" target="_blank">YUI</a> provide rich user interface controls for <span class="red">FREE</span></div> <div class="myli">It's much easier to maintain and upgrade desktop application from web</div><div class="big_separator"></div><h2><a class="anchor" id="localjs_safe"></a>
Is LocalJS safe?</h2>
<p>If you mean JavaScript code is not in binary:</p>
<div class="myli">Check out JavaScript compressors like <a href="http://developer.yahoo.com/yui/compressor/" target="_blank">YUI compressor</a>, which compresses and obfuscates JavaScript very well.</div> <div class="myli">Wrap up your secrets into Web Service, Dll or Exe. LocalJS can interop with them easily.</div><p>If you means system security:</p>
<div class="myli">LocalJS is <span class="green"><b>GREEN</b></span>. No COM object nor browser plugin is registered into system.</div> <div class="myli">All LocalJS objects are ONLY available to LocalJS application. No other browser is able to access them.</div> <div class="myli">Objects in different LocalJS applications cannot access each other.</div><div class="big_separator"></div><h2><a class="anchor" id="localjs_patforms"></a>
Which platforms does LocalJS support?</h2>
<p>At present LocalJS run on Windows XP / Windows Server 2003 and above. LocalJS binary is a 32 bits DLL.</p>
 
<a href="howto.php" style="color:MediumBlue"><div class="btm_next link" style="width:11.7em;padding-right:0em;margin-left:8em">Try Some JavaScript</div></a>
 </div>
<hr class="footer"/>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
