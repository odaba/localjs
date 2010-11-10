<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: Buffer类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: Buffer类参考</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="summary">
<a href="#pub-methods">方法</a> &#124;
<a href="#properties">属性</a>  </div>
  <div class="headertitle">
<h1>Buffer类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="Buffer" -->
<p><a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object represents a fixed size buffer, used as parameters in Dll function call.  
<a href="#_details">更多...</a></p>

<p><a href="class_buffer-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_buffer.php">Buffer</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#ae92cd8c68053b3cd5197dfdd93f39529">clone</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a new <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object having same content.  <a href="#ae92cd8c68053b3cd5197dfdd93f39529"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#a948cb08f27bc32eb7afdd80cfc6f0486">address</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns an object represents a pointer to the buffer object.  <a href="#a948cb08f27bc32eb7afdd80cfc6f0486"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">byte&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e">asByte</a> ([optional] int offsetBytes)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set the 1 byte value of the buffer, optionally at given offset.  <a href="#a9b4cb31d5174d4de8731ed3af15e348e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#ae60d4e9dd793b189919de121e297f2d6">asShort</a> ([optional] int offsetBytes)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set the 2 bytes value of the buffer, optionally at given offset.  <a href="#ae60d4e9dd793b189919de121e297f2d6"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#ad1b100412adf8563f02dab7d03e1ed49">asLong</a> ([optional] int offsetBytes)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set the 4 bytes value of the buffer, optionally at given offset.  <a href="#ad1b100412adf8563f02dab7d03e1ed49"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">__int64&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#ad4a18dcb3d2b30cfffde1c69bcbe27ac">asLongLong</a> ([optional] int offsetBytes)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set the 8 bytes value of the buffer, optionally at given offset.  <a href="#ad4a18dcb3d2b30cfffde1c69bcbe27ac"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#a38cfdfb341762d2219745b74fc6d4098">asStringA</a> ([optional] int offsetBytes)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set the ANSI string value of the buffer, optionally at given offset.  <a href="#a38cfdfb341762d2219745b74fc6d4098"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">String&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#a6d6c189bbcee710e8bc2481099d1a5d1">asStringW</a> ([optional] int offsetBytes)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set the UNICODE string value of the buffer, optionally at given offset.  <a href="#a6d6c189bbcee710e8bc2481099d1a5d1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95">size</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the size of the buffer in bytes.  <a href="#a37363161b41c4165b98cba7abc7a9d95"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p><a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object represents a fixed size buffer, used as parameters in Dll function call. </p>
<p><a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object is used for parameters of </p>
<ul>
<li>type String (when the string may be modified by Dll function call) </li>
<li>or pointer (pointer to a buffer) in Dll function call </li>
<li>or fields in <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> Object.</li>
</ul>
<p><a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object is created from <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object as following:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(512); <span class="comment">// create a 512 bytes buffer</span>
</pre></div><p>A typical usage of <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object is to return a string from Dll function.</p>
<p>First, call <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> method to add dll functions as methods of <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object:</p>
<div class="fragment"><pre class="fragment">    var addFunc = dllCall.add;

    addFunc(<span class="stringliteral">&quot;kernel32.dll&quot;</span>, <span class="stringliteral">&quot;DWORD WINAPI GetModuleFileName(__in_opt HMODULE hModule,__out LPTSTR lpFilename,__in DWORD nSize);&quot;</span>);
    addFunc(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;</span>);
</pre></div><p>Then the added methods can be referred by a variable just like other JavaScript methods:</p>
<div class="fragment"><pre class="fragment">    var getModuleFileName = dllCall.GetModuleFileName,
        messageBox = dllCall.MessageBox,
        NULL = 0,
        MB_ICONINFORMATION = 0x00000040; <span class="comment">// The constants used by MessageBox can be found in MSDN</span>
</pre></div><p>Now simply call the dll functions as a normal JavaScript method call, note that the <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object can be used directly as a string value after filled by <a href="http://msdn.microsoft.com/en-us/library/ms683197(VS.85).aspx" target="_blank">GetModuleFileName Function</a>:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// localJS default use UNICODE string, and GetModuleFileName asks for size in characters,</span>
    <span class="comment">// so the size passed to GetModuleFileName is buf.size / 2</span>
    getModuleFileName(NULL, buf, buf.size &gt;&gt; 1);

    <span class="comment">// buf has been filled with string, so it can be used as a string value.</span>
    messageBox(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="stringliteral">&quot;The EXE file name is &quot;</span> + buf, document.title, MB_ICONINFORMATION);
</pre></div><p>Another usage is to use <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object as pointer to a buffer, note that the 4 bytes <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object is used directly as an integer value:</p>
<div class="fragment"><pre class="fragment">    addFunc(<span class="stringliteral">&#39;user32.dll&#39;</span>, <span class="stringliteral">&#39;DWORD GetWindowThreadProcessId(HWND hWnd, LPDWORD lpdwProcessId);&#39;</span>);

    var createBuffer = dllCall.newBuffer, <span class="comment">// method newBuffer can be referred by a variable just like other JavaScript methods</span>
        processID = createBuffer(4),
        threadID = dllCall.GetWindowThreadProcessId(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, processID);

    <span class="comment">// The 4 bytes buffer can be used as an integer value</span>
    messageBox(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="stringliteral">&quot;Process ID is &quot;</span> + processID + <span class="stringliteral">&quot;, Thread ID is &quot;</span> + threadID, document.title, MB_ICONINFORMATION);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms683197(VS.85).aspx" target="_blank">GetModuleFileName Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633522(VS.85).aspx" target="_blank">GetWindowThreadProcessId Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox Function</a> </dd></dl>
<hr/><h2>方法文档</h2>
<a class="anchor" id="ae92cd8c68053b3cd5197dfdd93f39529"></a><!-- doxytag: member="Buffer::clone" ref="ae92cd8c68053b3cd5197dfdd93f39529" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_buffer.php">Buffer</a> clone </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns a new <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object having same content. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>new <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object cloned.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#aa993855d0ffaf23f5d40f784cadc4ee0" title="Returns a new Structure object having same content.">Structure.clone</a> </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a948cb08f27bc32eb7afdd80cfc6f0486"></a><!-- doxytag: member="Buffer::address" ref="a948cb08f27bc32eb7afdd80cfc6f0486" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object address<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns an object represents a pointer to the buffer object. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>the object represents a pointer to the buffer object.</dd></dl>
<dl class="attention"><dt><b>注意:</b></dt><dd>The pointer object is typically used in <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a>, to add fields which are pointers to a buffer. <em>It's barely used elsewhere</em>.</dd></dl>
<dl class="user"><dt><b></b></dt><dd><em> Following code is WRONG !!!</em></dd></dl>
<div class="fragment"><pre class="fragment">    addFunc(<span class="stringliteral">&#39;user32.dll&#39;</span>, <span class="stringliteral">&#39;DWORD GetWindowThreadProcessId(HWND hWnd, LPDWORD lpdwProcessId);&#39;</span>);

    var processID = dllCall.newBuffer(4),

        <span class="comment">// INCORRECT: DO NOT pass the address property to Dll function when the Dll function asks for a pointer !!!</span>
        threadID = dllCall.GetWindowThreadProcessId(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, processID.address);

    <span class="comment">// CORRECT: Pass the buffer object instead.</span>
    threadID = dllCall.GetWindowThreadProcessId(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, processID);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> | <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">Structure.address</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9b4cb31d5174d4de8731ed3af15e348e"></a><!-- doxytag: member="Buffer::asByte" ref="a9b4cb31d5174d4de8731ed3af15e348e" args="([optional] int offsetBytes)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">byte asByte([optional] int offsetBytes)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set the 1 byte value of the buffer, optionally at given offset. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">offsetBytes</td><td>Optional, assumed zero if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b></b></dt><dd><ul>
<li>If non-negative, <em>offsetBytes</em> specifies the offset (in bytes) from the start of the buffer. </li>
<li>If <em>offsetBytes</em> is negative, the offset counts from the end of the buffer. For example, -1 means the last byte, and -2 means the byte before the last byte.</li>
</ul>
</dd></dl>
<dl class="user"><dt><b></b></dt><dd></dd></dl>
<p>If <em>offsetBytes</em> &gt;= <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>, or offsetBytes &lt; (-1 * <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>), or <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a> is zero, an error will be generated.</p>
<p><a class="anchor" id="parameterized_property_usage"></a><a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e" title="Get or set the 1 byte value of the buffer, optionally at given offset.">Buffer.asByte</a> is a Parameterized Property, which is not often seen in JavaScript programming. Here are how Parameterized Property is used:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(1);

    buf.asByte = 4; <span class="comment">// set the first byte in the buffer to 4.</span>
    buf.asByte(0) = 4; <span class="comment">// same thing</span>
    buf.asByte() = 4; <span class="comment">// same thing</span>

    var val = buf.asByte; <span class="comment">// val will have value 4.</span>
    val = buf.asByte(0); <span class="comment">// same thing</span>
    val = buf.asByte(); <span class="comment">// same thing</span>

    val = buf.asByte(1); <span class="comment">// this will generate an error since buffer size is 1.</span>
</pre></div><p>A <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object whose size is 1 byte can be used as byte value by default:</p>
<div class="fragment"><pre class="fragment">    buf = 5;
    val = buf; <span class="comment">// val will have value 5.</span>
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ae60d4e9dd793b189919de121e297f2d6"></a><!-- doxytag: member="Buffer::asShort" ref="ae60d4e9dd793b189919de121e297f2d6" args="([optional] int offsetBytes)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">short asShort([optional] int offsetBytes)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set the 2 bytes value of the buffer, optionally at given offset. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">offsetBytes</td><td>Optional, assumed zero if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b></b></dt><dd><ul>
<li>If non-negative, <em>offsetBytes</em> specifies the offset (in bytes) from the start of the buffer. </li>
<li>If <em>offsetBytes</em> is negative, the offset counts from the end of the buffer. For example, -1 means the last byte, and -2 means the byte before the last byte.</li>
</ul>
</dd></dl>
<dl class="user"><dt><b></b></dt><dd></dd></dl>
<p>If <em>offsetBytes</em> + 1 &gt;= <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>, or offsetBytes &lt; (-1 * <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>), or <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a> &lt; 2, an error will be generated.</p>
<p><a class="el" href="interface_buffer.php#ae60d4e9dd793b189919de121e297f2d6" title="Get or set the 2 bytes value of the buffer, optionally at given offset.">Buffer.asShort</a> is a Parameterized Property. Refer to <a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e" title="Get or set the 1 byte value of the buffer, optionally at given offset.">Buffer.asByte</a> to see <a href="#parameterized_property_usage">how to use Parameterized Property</a>.</p>
<p>A <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object whose size is 2 byte can be used as short value by default:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(2);

    buf = 1024;
    var val = buf; <span class="comment">// val will have value 1024.</span>
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | <a href="#parameterized_property_usage">How to Use Parameterized Property</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ad1b100412adf8563f02dab7d03e1ed49"></a><!-- doxytag: member="Buffer::asLong" ref="ad1b100412adf8563f02dab7d03e1ed49" args="([optional] int offsetBytes)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long asLong([optional] int offsetBytes)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set the 4 bytes value of the buffer, optionally at given offset. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">offsetBytes</td><td>Optional, assumed zero if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b></b></dt><dd><ul>
<li>If non-negative, <em>offsetBytes</em> specifies the offset (in bytes) from the start of the buffer. </li>
<li>If <em>offsetBytes</em> is negative, the offset counts from the end of the buffer. For example, -1 means the last byte, and -2 means the byte before the last byte.</li>
</ul>
</dd></dl>
<dl class="user"><dt><b></b></dt><dd></dd></dl>
<p>If <em>offsetBytes</em> + 3 &gt;= <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>, or offsetBytes &lt; (-1 * <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>), or <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a> &lt; 4, an error will be generated.</p>
<p><a class="el" href="interface_buffer.php#ad1b100412adf8563f02dab7d03e1ed49" title="Get or set the 4 bytes value of the buffer, optionally at given offset.">Buffer.asLong</a> is a Parameterized Property. Refer to <a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e" title="Get or set the 1 byte value of the buffer, optionally at given offset.">Buffer.asByte</a> to see <a href="#parameterized_property_usage">how to use Parameterized Property</a>.</p>
<p>A <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object whose size is 4 byte can be used as long value by default:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(4);

    buf = 102400;
    var val = buf; <span class="comment">// val will have value 102400.</span>
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | <a href="#parameterized_property_usage">How to Use Parameterized Property</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ad4a18dcb3d2b30cfffde1c69bcbe27ac"></a><!-- doxytag: member="Buffer::asLongLong" ref="ad4a18dcb3d2b30cfffde1c69bcbe27ac" args="([optional] int offsetBytes)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">__int64 asLongLong([optional] int offsetBytes)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set the 8 bytes value of the buffer, optionally at given offset. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">offsetBytes</td><td>Optional, assumed zero if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b></b></dt><dd><ul>
<li>If non-negative, <em>offsetBytes</em> specifies the offset (in bytes) from the start of the buffer. </li>
<li>If <em>offsetBytes</em> is negative, the offset counts from the end of the buffer. For example, -1 means the last byte, and -2 means the byte before the last byte.</li>
</ul>
</dd></dl>
<dl class="user"><dt><b></b></dt><dd></dd></dl>
<p>If <em>offsetBytes</em> + 7 &gt;= <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>, or offsetBytes &lt; (-1 * <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a>), or <a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a> &lt; 8, an error will be generated.</p>
<p><a class="el" href="interface_buffer.php#ad4a18dcb3d2b30cfffde1c69bcbe27ac" title="Get or set the 8 bytes value of the buffer, optionally at given offset.">Buffer.asLongLong</a> is a Parameterized Property. Refer to <a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e" title="Get or set the 1 byte value of the buffer, optionally at given offset.">Buffer.asByte</a> to see <a href="#parameterized_property_usage">how to use Parameterized Property</a>.</p>
<p>A <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object whose size is 8 byte can be used as 64 bits integer value by default:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(8);

    buf = 102400;
    var val = buf; <span class="comment">// val will have value 102400.</span>
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | <a href="#parameterized_property_usage">How to Use Parameterized Property</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a38cfdfb341762d2219745b74fc6d4098"></a><!-- doxytag: member="Buffer::asStringA" ref="a38cfdfb341762d2219745b74fc6d4098" args="([optional] int offsetBytes)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String asStringA([optional] int offsetBytes)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set the ANSI string value of the buffer, optionally at given offset. </p>
<p>The content of the buffer is assumed to be ANSI string (each character takes 1 byte) by <a class="el" href="interface_buffer.php#a38cfdfb341762d2219745b74fc6d4098" title="Get or set the ANSI string value of the buffer, optionally at given offset.">Buffer.asStringA</a>.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">offsetBytes</td><td>Optional, assumed zero if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b></b></dt><dd><ul>
<li>If non-negative, <em>offsetBytes</em> specifies the offset (in bytes) from the start of the buffer. </li>
<li>If <em>offsetBytes</em> is negative, the offset counts from the end of the buffer. For example, -1 means the last byte, and -2 means the byte before the last byte.</li>
</ul>
</dd></dl>
<dl class="user"><dt><b></b></dt><dd></dd></dl>
<p>If the string to be set extends beyond the buffer boundary, an error will be generated:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        ansi_buf = dllCall.newBuffer(<span class="stringliteral">&quot;ANSI12345678&quot;</span>, <span class="keyword">true</span>); <span class="comment">// Create an ANSI string buffer</span>

    ansi_buf.asStringA(4) = <span class="stringliteral">&quot;abcde&quot;</span>; <span class="comment">// OK, the buffer will hold ANSIabcde678</span>

    <span class="comment">// This will generate an error: there is only 2 bytes left for characters (the terminating null character needs to be reserved) since offset 10 in the buffer, and the string try to assign to is 5 bytes long.</span>
    ansi_buf.asStringA(10) = <span class="stringliteral">&quot;abcde&quot;</span>;
</pre></div><p><a class="el" href="interface_buffer.php#a38cfdfb341762d2219745b74fc6d4098" title="Get or set the ANSI string value of the buffer, optionally at given offset.">Buffer.asStringA</a> is a Parameterized Property. Refer to <a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e" title="Get or set the 1 byte value of the buffer, optionally at given offset.">Buffer.asByte</a> to see <a href="#parameterized_property_usage">how to use Parameterized Property</a>.</p>
<p>In most cases, if the buffer is simply used to retrieve string from Dll function and passed around, you don't need to call this function explicitly.</p>
<p>Given following code to call the ANSI version of Windows API function <a href="http://msdn.microsoft.com/en-us/library/ms683197(VS.85).aspx" target="_blank">GetModuleFileName</a>, which is exported as <code>GetModuleFileNameA:</code> </p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(512); <span class="comment">// create a 512 bytes buffer</span>

    <span class="comment">// Please be noted that the function name is GetModuleFileNameA and the type of parameter lpFilename is LPSTR, which means ANSI string.</span>
    dllCall.add(<span class="stringliteral">&quot;kernel32.dll&quot;</span>, <span class="stringliteral">&quot;DWORD WINAPI GetModuleFileNameA(__in_opt HMODULE hModule,__out LPSTR lpFilename,__in DWORD nSize);&quot;</span>);

    <span class="comment">// For ANSI string, the size in bytes is the size in characters.</span>
    dllCall.GetModuleFileNameA(NULL, buf, buf.size);
</pre></div><p>After <code>GetModuleFileNameA</code> fills the string buffer, the <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object can be directly used as as a string value:</p>
<div class="fragment"><pre class="fragment">    var MB_ICONINFORMATION = 0x00000040; <span class="comment">// The constants used by MessageBox can be found in MSDN</span>

    dllCall.add(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;</span>);
    dllCall.MessageBox(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="stringliteral">&quot;The EXE file name is &quot;</span> + buf, document.title, MB_ICONINFORMATION);
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Although the <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object can be used as string value after filled with string, it's still a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object, <em>NOT</em> a <code>String</code> object in JavaScript. It doesn't support the methods of JavaScript <code>String</code> object.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>There is a simple work around for this:</dd></dl>
<div class="fragment"><pre class="fragment">    var str = buf, <span class="comment">// save the string value represented by buf into a real String object</span>
        strLCase = str.toLowerCase();
</pre></div><dl class="user"><dt><b></b></dt><dd>Alternatively work around:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// Need to make sure the string buffer is in ANSI format</span>
    var strLCase = buf.asStringA.toLowerCase();
</pre></div><dl class="attention"><dt><b>注意:</b></dt><dd><em>DO</em> <em>NOT</em> use same <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object for both ANSI and UNICODE string operations unless you know what you are doing.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | <a class="el" href="interface_buffer.php#a6d6c189bbcee710e8bc2481099d1a5d1" title="Get or set the UNICODE string value of the buffer, optionally at given offset.">Buffer.asStringW</a> | <a href="#parameterized_property_usage">How to Use Parameterized Property</a> | <a href="http://msdn.microsoft.com/en-us/library/ms683197(VS.85).aspx" target="_blank">GetModuleFileName Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a6d6c189bbcee710e8bc2481099d1a5d1"></a><!-- doxytag: member="Buffer::asStringW" ref="a6d6c189bbcee710e8bc2481099d1a5d1" args="([optional] int offsetBytes)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">String asStringW([optional] int offsetBytes)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set the UNICODE string value of the buffer, optionally at given offset. </p>
<p>The content of the buffer is assumed to be UNICODE string (each character takes 2 bytes) by <a class="el" href="interface_buffer.php#a6d6c189bbcee710e8bc2481099d1a5d1" title="Get or set the UNICODE string value of the buffer, optionally at given offset.">Buffer.asStringW</a>.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">offsetBytes</td><td>Optional, assumed zero if omitted.</td></tr>
  </table>
  </dd>
</dl>
<dl class="user"><dt><b></b></dt><dd><ul>
<li>If non-negative, <em>offsetBytes</em> specifies the offset (in bytes) from the start of the buffer. </li>
<li>If <em>offsetBytes</em> is negative, the offset counts from the end of the buffer. For example, -1 means the last byte, and -2 means the byte before the last byte.</li>
</ul>
</dd></dl>
<dl class="user"><dt><b></b></dt><dd></dd></dl>
<p>If the string to be set extends beyond the buffer boundary, an error will be generated:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(<span class="stringliteral">&quot;UNICODE12345678&quot;</span>); <span class="comment">// Create an UNICODE string buffer</span>

    <span class="comment">// Note that for UNICODE string, each character takes 2 bytes, and the offset is by bytes</span>
    buf.asStringW(14) = <span class="stringliteral">&quot;abcde&quot;</span>; <span class="comment">// OK, the buffer will hold UNICODEabcde678</span>

    <span class="comment">// This will generate an error: there is only 2 characters room left (the terminating null character needs to be reserved) since offset 26 in the buffer, and the string try to assign to is 5 characters long.</span>
    buf.asStringW(26) = <span class="stringliteral">&quot;abcde&quot;</span>;
</pre></div><p><a class="el" href="interface_buffer.php#a6d6c189bbcee710e8bc2481099d1a5d1" title="Get or set the UNICODE string value of the buffer, optionally at given offset.">Buffer.asStringW</a> is a Parameterized Property. Refer to <a class="el" href="interface_buffer.php#a9b4cb31d5174d4de8731ed3af15e348e" title="Get or set the 1 byte value of the buffer, optionally at given offset.">Buffer.asByte</a> to see <a href="#parameterized_property_usage">how to use Parameterized Property</a>.</p>
<p>In most cases, if the buffer is simply used to retrieve string from Dll function and passed around, you don't need to call this function explicitly. The sample code at <a href="#_details">Detailed Description of Buffer Object</a> demonstrates using UNICODE string buffer object directly as as a string value.</p>
<p>A <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object whose size is not 1, 2, 4, nor 8 byte can be used as UNICODE string value by default:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        buf = dllCall.newBuffer(128);

    buf = <span class="stringliteral">&quot;UNICODE String&quot;</span>;
    var str = buf; <span class="comment">// str will be &quot;UNICODE String&quot;;</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Although the <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object can be used as string value after filled with string, it's still a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object, <em>NOT</em> a <code>String</code> object in JavaScript. It doesn't support the methods of JavaScript <code>String</code> object.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>There is a simple work around for this:</dd></dl>
<div class="fragment"><pre class="fragment">    var str = buf, <span class="comment">// save the string value represented by buf into a real String object</span>
        strLCase = str.toLowerCase();
</pre></div><dl class="user"><dt><b></b></dt><dd>Alternatively work around:</dd></dl>
<div class="fragment"><pre class="fragment">    <span class="comment">// Need to make sure the string buffer is in UNICODE format</span>
    var strLCase = buf.asStringW.toLowerCase();
</pre></div><dl class="attention"><dt><b>注意:</b></dt><dd><em>DO</em> <em>NOT</em> use same <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object for both ANSI and UNICODE string operations unless you know what you are doing.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | | <a class="el" href="interface_buffer.php#a38cfdfb341762d2219745b74fc6d4098" title="Get or set the ANSI string value of the buffer, optionally at given offset.">Buffer.asStringA</a> | <a href="#parameterized_property_usage">How to Use Parameterized Property</a> | <a href="#_details">Detailed Description of Buffer Object</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a37363161b41c4165b98cba7abc7a9d95"></a><!-- doxytag: member="Buffer::size" ref="a37363161b41c4165b98cba7abc7a9d95" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long size<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the size of the buffer in bytes. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The size of the buffer in bytes.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>String length (or string buffer size) in most Windows API are counted by characters, not by bytes. Since <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> uses UNICODE string (each single character takes 2 bytes) by default, when pass buffer as string to Windows API, unless ANSI string is explicitly used, remember the buffer size passed to Windows API should be <code>buffer.size / 2</code>, or <code>buffer.size &gt;&gt; 1</code>.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the structure (represented by the Structure object) in bytes...">Structure.size</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>