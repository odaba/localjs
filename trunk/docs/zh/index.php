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
<div class="yui-gc"> <div class="yui-u first"> <div class="myli"> <a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>. 这一组对象封装了常用的本地操作。<b>LocalJS 基本对象能满足你绝大多数的应用需求。</b> </p>
<div class="indent"> LocalJS 基本对象基于<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a> 和 <a class="el" href="group___host_a_p_i.php">LocalJS 运行库接口</a>, 由LocalJS 开源JavaScript 库提供。 </div> </div> <div class="myli"> <a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>. 这一组对象为LocalJS 页面窗口中的JavaScript 提供了完整的本地访问能力。 </p>
<div class="indent"> 这一组对象主要用于较高级的本地操作，比如访问本地数据库，调用Windows API，创建Script 线程等。</div> </div> <div class="myli"> <a class="el" href="group___host_a_p_i.php">LocalJS 运行库接口</a>. 这是一组由localjs.dll 输出的C 函数，用于启动和管理LocaljS 页面窗口。 </p>
<div class="indent"> LocalJS 启动程序调用了这一组中的部分函数。除非需要JavaScript 之外的代码调用页面窗口（比如在C++ 代码中调用JavaScript 函数），你可以忽略这部分函数。</div> </div> </div> <div class="yui-u">  <!--[if IE]>
<style>
div.download span.download {
	position:relative;
	top:-1px;
}
</style>
<![endif]-->
  <div class="download" style="padding-top:0.5em">   
<a href="<?php echo $demo_7z_link; ?>" target="_blank"><span class="download link">下载演示程序</span><span class="download_end link">&nbsp;</span></a>   </div>
<div class="download" style="padding-top:0.5em">   <a href="<?php echo $release_zip_link; ?>" target="_blank"><span class="download link" style="width:5.8em">下载运行库</span><span class="download_end link">&nbsp;</span></a>   </div>
<div class="ver">
 当前版本：  
<?php echo $version; ?></div>
  
<a href="howto.php" style="color:MediumBlue"><div class="next link" style="width:10.6em;padding-left:0em;margin-left:1.5em;margin-top:1em;">动手写JavaScript</div></a>
 </div> </div><p>下面是LocalJS 各部分之间的关系图： </p>
<div align="center">
<img src="overview.png" alt="overview.png"/>
<p><strong>LocalJS 各部分关系图</strong></p></div>
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
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
