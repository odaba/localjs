<?php
require_once('../../_config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<?php include_once($base_path.'/_include/common_header_part1.php'); ?>
<title>LocalJS: Documentation Home</title>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<link href="doxygen.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $yui_root; ?>fonts/fonts-min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $yui_root; ?>grids/grids-min.css"/>
<?php include_once($base_path.'/_include/common_header_part2.php'); ?>
<!-- Generated by Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'Search');
--></script>
<div class="navigation" id="top">
  <div class="tabs">
    <ul class="tablist">
      <li class="current"><a href="index.php"><span>Home</span></a></li>
      <li><a href="pages.php"><span>Getting&#160;Started</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li><a href="annotated.php"><span>Classes</span></a></li>
      <li id="searchli">
        <div id="MSearchBox" class="MSearchBoxInactive">
          <span class="left">
            <form id="FSearchBox" action="search.php" method="get">
              <img id="MSearchSelect" src="search/mag.png" alt=""/>
              <input type="text" id="MSearchField" name="query" value="Search" size="20" accesskey="S" 
                     onfocus="searchBox.OnSearchFieldFocus(true)" 
                     onblur="searchBox.OnSearchFieldFocus(false)"/>
            </form>
          </span><span class="right"></span>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="headertitle">
<h1>Documentation Home </h1>  </div>
</div>
<div class="contents">
<h3 class="version">2.1.1 </h3><p>Quick jump link: </p>
<ul>
<li><a class="el" href="index.php#localjs_overview">LocalJS Overview</a> </li>
<li><a class="el" href="getting_started.php">Getting Started</a> </li>
<li><a class="el" href="howto.php">How To ...</a> </li>
<li><a class="el" href="tutorial_js4cpp.php">JavaScript Jump Start For C++ Programmers</a> <span style="color:red;position:relative;left:0.2em;top:-0.3em;font-style:italic;font-size:90%;">NEW</span> </li>
<li><a class="el" href="tutorials.php">JavaScript Tutorials</a></li>
</ul>
<h2><a class="anchor" id="localjs_overview"></a>
LocalJS Overview</h2>
<p>LocalJS is composed of:</p>
<ul>
<li><a class="el" href="group___j_s_src_objects.php">LocalJS Objects (Open Source)</a>. Open source JavaScript library wrapping up common desktop operations, based on <a class="el" href="group___j_s_objects.php">LocalJS Objects (Advanced)</a> and <a class="el" href="group___host_a_p_i.php">LocalJS Hosting API</a>. </li>
<li><a class="el" href="group___j_s_objects.php">LocalJS Objects (Advanced)</a>. A batch of JavaScript Objects which provide fully local access ability to JavaScript running in LocalJS browsers. </li>
<li><a class="el" href="group___host_a_p_i.php">LocalJS Hosting API</a>. A set of C functions exposed by localjs.dll, used to launch and manage LocalJS browsers.</li>
</ul>
<p>Diagram below shows typical structure of LocalJS application:</p>
<div align="center">
<img src="overview.png" alt="overview.png"/>
<p><strong>LocalJS Overview</strong></p></div>
<p>LocalJS application is launched by a very light bootstrap program which simply kicks off the first LocalJS browser, then JavaScript can do everything else.</p>
<p>A typical bootstrap program is provided as source, included in <a href="http://sourceforge.net/projects/localjs/files/" target="_blank">LocalJS demo application</a>, available for download on site.</p>
<dl class="user"><dt><b>LocalJS Open Source Objects</b></dt><dd></dd></dl>
<p>Open source JavaScript objects are available by including JavaScript files from LOCALJS Open Source Library. Some objects depend on other objects to work. Diagram below shows the dependencies relationship among all open source LocalJS objects:</p>
<div align="center">
<img src="open_src_objects.png" alt="open_src_objects.png"/>
<p><strong>LocalJS Open Source Objects Dependencies</strong></p></div>
<p> For example, to use <a class="el" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">LOCALJS.FILE</a>, localjs_file.js, localjs_ui.js and localjs_webservice.js should be included; to use <a class="el" href="interface_l_o_c_a_l_j_s.php#a98bcca2bbefab54c92e47741132d25a9" title="Return LOCALIZATION Object, which provides method for multi-languages support. Include localjs_locali...">LOCALJS.LOCALIZATION</a>, all the 4 JavaScript files should be included. The sequence of files being included doesn't matter. </p>
<dl class="user"><dt><b>LocalJS Advanced Objects</b></dt><dd></dd></dl>
<p>Advanced JavaScript objects are implemented by LocalJS.Dll, they are available without need to include any JavaScript files. Diagram below shows the creation relationship among all advanced LocalJS objects:</p>
<div align="center">
<img src="objects.png" alt="objects.png"/>
<p><strong>LocalJS Advanced Objects Tree</strong></p></div>
 <dl class="user"><dt><b>Comments:</b></dt><dd></dd></dl>
<ul>
<li>Objects like ADODB are system objects available through LocalJS </li>
<li>.Net object will be available in the next version</li>
</ul>
<p>Those objects above are <em>ONLY</em> available in LocalJS browsers (browsers hosted by LocalJS) and LocalJS Internet Explorer (standalone Internet Explorer application launched by LocalJS). They are not available to any other applications or browsers. </p>
<div align="center"><em>Next:</em> <a class="el" href="getting_started.php">Getting Started</a></div> </div>
<hr class="footer"/>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>