<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: 进一步了解 LocalJS";
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
 
<style>h2{font-size:150%;font-weight:normal;color:blue}</style>
<h2><a class="anchor" id="localjs_components"></a>
LocalJS 包括三部分</h2>
<div class="yui-gc"> <div class="yui-u first"> <div class="myli"> <a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>. 这一组对象封装了常用的本地操作。<b>LocalJS 基本对象能满足绝大多数的本地访问需求。</b> </p>
<div class="indent"> LocalJS 基本对象基于<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a> 和 <a class="el" href="group___host_a_p_i.php">LocalJS 运行库接口</a>, 由LocalJS 开源JavaScript 库提供。 </div> </div> <div class="myli"> <a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>. 这一组对象为LocalJS 页面窗口中的JavaScript 提供了完整的本地访问能力。 </p>
<div class="indent"> 这一组对象主要用于较高级的本地操作，比如访问本地数据库，调用Windows API，创建Script 线程等。</div> </div> <div class="myli"> <a class="el" href="group___host_a_p_i.php">LocalJS 运行库接口</a>. 这是一组由localjs.dll 输出的C 函数，用于启动和管理LocaljS 页面窗口。 </p>
<div class="indent"> LocalJS 启动程序调用了这一组中的部分函数。除非需要JavaScript 之外的代码调用页面窗口（比如在C++ 代码中调用JavaScript 函数），你可以忽略这部分函数。</div> </div> </div> <div class="yui-u">  <div class="download" style="padding-top:0.5em">   
<a href="<?php echo $demo_7z_link; ?>" target="_blank"><span class="download link">下载演示程序</span><span class="download_end link">&nbsp;</span></a>   </div>
<div class="download" style="padding-top:0.5em">   <a href="<?php echo $release_zip_link; ?>" target="_blank"><span class="download link" style="width:5.8em">下载运行库</span><span class="download_end link">&nbsp;</span></a>   </div>
<div class="ver">
 当前版本：  
<?php echo $version; ?></div>
  
<a href="howto.php" style="color:MediumBlue"><div class="next link" style="width:11em;padding-left:0em;margin-left:2em;margin-top:1em;">动手写JavaScript！</div></a>
 </div> </div><p>下面是LocalJS 各部分之间的关系图： </p>
<div align="center">
<img src="overview_zh.png" alt="overview_zh.png"/>
<p><strong>LocalJS 各部分关系图</strong></p></div>
<h2><a class="anchor" id="localjs_why"></a>
为什么选择 LocalJS?</h2>
<p><span class="blue" style="font-size:115%">轻巧，简单，低成本。</span></p>
<div class="myli">LocalJS 桌面程序可以很方便地从Web 上分发和升级</div> <div class="myli">LocalJS 非常小，启动快，运行快</div> <div class="myli">LocalJS 不依赖于任何其他库就能运行</div> <div class="myli">HTML/CSS/JavaScript 易用易学，在网上很容易找到相关教程</div> <div class="myli">无论用 HTML/CSS/JavaScript 建立程序原型还是正式开发，不但非常快，而且容易修改</div> <div class="myli">像<a href="http://jQuery.com/" target="_blank">jQuery</a> 一类的<span class="red">免费</span>JavaScript 库进一步简化了JavaScript 的建模和代码实现</div> <div class="myli">像<a href="http://developer.yahoo.com/yui/" target="_blank">YUI</a> 一类的开源JavaScript 库<span class="red">免费</span>提供了大量用户界面控件</div><div class="big_separator"></div><h2><a class="anchor" id="localjs_safe"></a>
LocalJS 安全吗?</h2>
<p>如果你担心 JavaScript 源码泄漏代码的秘密：</p>
<div class="myli">使用JavaScript 压缩程序，例如<a href="http://developer.yahoo.com/yui/compressor/" target="_blank">YUI compressor</a>，能够很好地压缩和扰乱JavaScript 代码。</div> <div class="myli">把秘密封装成Web Service、Dll 或者Exe。LocalJS 可以很容易地和它们互相调用。</div><p>如果你担心系统的安全性会受到影响：</p>
<div class="myli">LocalJS 是<span class="green"><b>绿色</b></span>软件。它不向系统中注册任何COM 对象或浏览器插件。</div> <div class="myli">所有的LocalJS 对象只在LocalJS 程序中存在，其他的浏览器无法访问。</div> <div class="myli">不同的LocalJS 程序中的对象互相不能访问。</div><div class="big_separator"></div><h2><a class="anchor" id="localjs_patforms"></a>
LocalJS 支持哪些平台?</h2>
<p>目前 LocalJS 支持 Windows XP 或 Windows Server 2003 及之后的平台。LocalJS 运行库本身是一个 32 位的 DLL。</p>
 
<a href="howto.php" style="color:MediumBlue"><div class="btm_next link" style="width:10.5em;padding-right:0em;margin-left:9.5em">动手写JavaScript！</div></a>
 </div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
