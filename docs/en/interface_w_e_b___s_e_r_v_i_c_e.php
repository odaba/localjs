<?php
require_once('../../_config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<?php include_once($base_path.'/_include/common_header_part1.php'); ?>
<title>LocalJS: WEB_SERVICE Class Reference</title>
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
      <li><a href="index.php"><span>Home</span></a></li>
      <li><a href="pages.php"><span>Getting&#160;Started</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
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
  <div class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
</div>
<div class="header">
  <div class="summary">
<a href="#pub-methods">Methods</a>  </div>
  <div class="headertitle">
<h1>WEB_SERVICE Class Reference<br/>
<small>
[<a class="el" href="group___j_s_src_objects.php">LocalJS Objects (Open Source)</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="WEB_SERVICE" -->
<p>Open source object. Provides method for web service call. Include localjs_webservice.js to use it.  
<a href="#_details">More...</a></p>

<p><a href="class_w_e_b___s_e_r_v_i_c_e-members.php">List of all members.</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
Methods</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php#a7eb6ada1e0326fa0119b999ab83efd55">callUrl</a> (String http_method, String url,[optional] Object callback,[optional] String request_body,[optional] String username,[optional] String password)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Call web service asynchronously.  <a href="#a7eb6ada1e0326fa0119b999ab83efd55"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>Detailed Description</h2>
<p>Open source object. Provides method for web service call. Include localjs_webservice.js to use it. </p>
<hr/><h2>Method Documentation</h2>
<a class="anchor" id="a7eb6ada1e0326fa0119b999ab83efd55"></a><!-- doxytag: member="WEB_SERVICE::callUrl" ref="a7eb6ada1e0326fa0119b999ab83efd55" args="(String http_method, String url,[optional] Object callback,[optional] String request_body,[optional] String username,[optional] String password)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">callUrl </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>http_method</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>url</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] Object&#160;</td>
          <td class="paramname"> <em>callback</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>request_body</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>username</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>password</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Call web service asynchronously. </p>
<dl><dt><b>Parameters:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">http_method</td><td>String that specifies the HTTP method used to open the connection: such as "GET", "POST", or "HEAD". This parameter is not case-sensitive. Refer to parameter <em>sMethod</em> of <a href="http://msdn.microsoft.com/en-us/library/ms536648(VS.85).aspx" target="_blank">open Method</a> of <a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">url</td><td>String that specifies either the absolute or a relative URL of the Web service. Refer to parameter <em>sUrl</em> of <a href="http://msdn.microsoft.com/en-us/library/ms536648(VS.85).aspx" target="_blank">open Method</a> of <a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">callback</td><td>Optional. Callback functions. Details are discussed below. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">request_body</td><td>Optional. Variable that specifies the body of the message being sent with the request. It may be a String, array of unsigned bytes, or an XML Document Object Model (DOM) object. Refer to parameter <em>varBody</em> of <a href="http://msdn.microsoft.com/en-us/library/ms536736(VS.85).aspx" target="_blank">send Method</a> of <a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">username</td><td>Optional. String that specifies the name of the user for authentication. If this parameter is empty string ("") or missing and the site requires authentication, a logon window is displayed. Refer to parameter <em>sUser</em> of <a href="http://msdn.microsoft.com/en-us/library/ms536648(VS.85).aspx" target="_blank">open Method</a> of <a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a>. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">password</td><td>Optional. String that specifies the password for authentication. This parameter is ignored if the username parameter is empty string ("") or missing. Refer to parameter <em>sPassword</em> of <a href="http://msdn.microsoft.com/en-us/library/ms536648(VS.85).aspx" target="_blank">open Method</a> of <a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a>.</td></tr>
  </table>
  </dd>
</dl>
<p>A typical <em>callback</em> parameter is defined as below: </p>
<div class="fragment"><pre class="fragment">    var callback = {<span class="stringliteral">&#39;ok&#39;</span> : function(contentText, oHttp) { <span class="comment">/* read ok handling */</span> },
                    <span class="stringliteral">&#39;fail&#39;</span> : function(statusCode, oHttp) { <span class="comment">/* error handling */</span> } };
</pre></div><p>If the call succeeds, <code>callback.ok</code> is called with the response text returned by web service (parameter <em>contentText</em>). If the call fails, <code>callback.fail</code> is called with the HTTP status code returned by web service (parameter <em>statusCode</em>). In both cases, <em>oHttp</em> is the <a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a> used for the web service call.</p>
<p>Following code illustrates how to use <code>callUrl</code> method to call web service:</p>
<div class="fragment"><pre class="fragment">    var onOK = function (responseText, objHttp)
    {
        <span class="comment">// assume the service returns JSON format string</span>
        var json_response = (<span class="keyword">new</span> Function(<span class="stringliteral">&quot;return &quot;</span> + responseText))();
    };

    var onFail = function (statusCode, objHttp)
    {
        alert(<span class="stringliteral">&quot;Web service call failed with &quot;</span> + statusCode);
    };

    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all open source JavaScript objects. Need to include JavaScript files from LOCALJS ...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a93d1c0c70becb07c74e108b0f1bd49d6" title="Returns WEB_SERVICE object, which provides method for web service call. Include localjs_webservice.js to use it.">WEB_SERVICE</a>.callUrl(<span class="stringliteral">&quot;GET&quot;</span>, <span class="stringliteral">&quot;http://localjs.org/demo/demo_ws.php&quot;</span>, { <span class="stringliteral">&#39;ok&#39;</span> : onOK, <span class="stringliteral">&#39;fail&#39;</span> : onFail });
</pre></div><dl class="see"><dt><b>See also:</b></dt><dd><a href="http://msdn.microsoft.com/en-us/library/ms535874(VS.85).aspx" target="_blank">XMLHttpRequest Object</a> | <a href="http://msdn.microsoft.com/en-us/library/ms536648(VS.85).aspx" target="_blank">open Method</a> | <a href="http://msdn.microsoft.com/en-us/library/ms536736(VS.85).aspx" target="_blank">send Method</a> </dd></dl>

</div>
</div>
</div>
<hr class="footer"/>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>