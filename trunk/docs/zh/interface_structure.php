<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: Structure类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: Structure类参考</title>
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
<h1>Structure类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="Structure" -->
<p><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object represents a C struct, used as parameters in Dll function call.  
<a href="#_details">更多...</a></p>

<p><a href="class_structure-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a> (<a class="el" href="interface_structure.php">Structure</a>/<a class="el" href="interface_buffer.php">Buffer</a>/address field,[optional] String fieldName)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Append field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify field name.  <a href="#a0ce42643bb28edae3ef95829c7257d18"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a> ([optional] byte initialValue,[optional] String fieldName)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Append a 1 byte field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name.  <a href="#a9823b3580b74ed81cf6542b5df88eff1"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a> ([optional] short initialValue,[optional] String fieldName)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Append a 2 bytes field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name.  <a href="#add3df9b88b7ecc45ee30cd9969020c28"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a> ([optional] long initialValue,[optional] String fieldName)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Append a 4 bytes field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name.  <a href="#a9281de28bee204692288a33173e38568"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a> ([optional] __int64 initialValue,[optional] String fieldName)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Append a 8 bytes field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name.  <a href="#a6fb29719905b419d362cb7db84fc363c"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top"><a class="el" href="interface_structure.php">Structure</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#aa993855d0ffaf23f5d40f784cadc4ee0">clone</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Returns a new <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object having same content.  <a href="#aa993855d0ffaf23f5d40f784cadc4ee0"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486">address</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns an object represents a pointer to the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.  <a href="#a948cb08f27bc32eb7afdd80cfc6f0486"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a9fd5a67375c442dddcf84e715abc92a8">field</a> (int_or_String field_index_or_name)<code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Get or set field of the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object by zero based index or name.  <a href="#a9fd5a67375c442dddcf84e715abc92a8"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a6725042366a2566ebaeecd8d267859ac">fieldCount</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the number of <em>direct</em> fields in the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.  <a href="#a6725042366a2566ebaeecd8d267859ac"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">long&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_structure.php#a37363161b41c4165b98cba7abc7a9d95">size</a><code> [get]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">ReadOnly. Returns the size of the structure (represented by the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object) in bytes.  <a href="#a37363161b41c4165b98cba7abc7a9d95"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object represents a C struct, used as parameters in Dll function call. </p>
<p><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object is used as parameters of type pointer (pointer to a struct) in Dll function call. Fields of <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> can be appended to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object through methods of <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.</p>
<p><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object is created from <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object as following:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        createStruct = dllCall.newStruct, <span class="comment">// newStruct method can be referred by a variable just like other JavaScript functions.</span>
        rect = createStruct(); <span class="comment">// create an empty Structure object</span>
</pre></div><p>Methods <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a>, <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a> of <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object all append fields to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object with an optional field name.</p>
<p>If field name is present, the field can be referred by that name like <code>Structure.fieldName</code>. <em>Different <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> objects may have different properties because of different field names added to it</em>.</p>
<p>Following code adds fields of a <a href="http://msdn.microsoft.com/en-us/library/dd162897(VS.85).aspx" target="_blank">RECT Structure</a> to <code>rect</code>, note that since all adding methods return the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object itself, it's easy to join all adding call into one statement:</p>
<div class="fragment"><pre class="fragment">    rect.addLong(<span class="stringliteral">&quot;left&quot;</span>).addLong(<span class="stringliteral">&quot;top&quot;</span>).addLong(<span class="stringliteral">&quot;right&quot;</span>).addLong(<span class="stringliteral">&quot;bottom&quot;</span>);
</pre></div><p>Next create another empty <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object and add fields of <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> to it. In this example, values in fields ptMinPosition and ptMaxPosition of <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> are not used, and a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object with same size is added to take up the place of fields ptMinPosition and ptMaxPosition.</p>
<div class="fragment"><pre class="fragment">    var placement = createStruct().addLong(<span class="stringliteral">&#39;length&#39;</span>).addLong(<span class="stringliteral">&#39;flags&#39;</span>).addLong(<span class="stringliteral">&#39;showCmd&#39;</span>)

                    <span class="comment">// Take up the place of fields ptMinPosition and ptMaxPosition since in this example, these two fields are not used.</span>
                    <span class="comment">// Field name is omitted too.</span>
                    .add(dllCall.newBuffer(16))

                    <span class="comment">// Add the rect object created above for field &#39;RECT rcNormalPosition&#39;</span>
                    <span class="comment">// Doesn&#39;t have to use the field name defined in MSDN. Welcome to scripting world! :-)</span>
                    .<a class="code" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">add</a>(rect, <span class="stringliteral">&#39;rc&#39;</span>);

    <span class="comment">// As mentioned in MSDN, field &#39;length&#39; should be initialized with the size of the struct</span>
    placement.length = placement.<a class="code" href="interface_structure.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the structure (represented by the Structure object) in bytes...">size</a>;
</pre></div><p>Now the placement object can be passed to Windows API <a href="http://msdn.microsoft.com/en-us/library/ms633518(VS.85).aspx" target="_blank">GetWindowPlacement Function</a> and <a href="http://msdn.microsoft.com/en-us/library/ms633544(VS.85).aspx" target="_blank">SetWindowPlacement Function</a>. Following code moves current browser window 10 pixels to left:</p>
<div class="fragment"><pre class="fragment">    var addFunc = dllCall.add;
    addFunc(<span class="stringliteral">&#39;user32.dll&#39;</span>, <span class="stringliteral">&#39;BOOL WINAPI GetWindowPlacement(__in HWND hWnd, __inout WINDOWPLACEMENT *lpwndpl);&#39;</span>);
    addFunc(<span class="stringliteral">&#39;user32.dll&#39;</span>, <span class="stringliteral">&#39;BOOL WINAPI SetWindowPlacement(__in HWND hWnd, __in const WINDOWPLACEMENT *lpwndpl);&#39;</span>);

    var hostWnd = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>,
        SW_SHOWNA = 8; <span class="comment">// refer to WINDOWPLACEMENT in MSDN for value of SW_SHOWNA</span>

    <span class="keywordflow">if</span> (dllCall.GetWindowPlacement(hostWnd, placement))
    {
        var rc = placement.rc; <span class="comment">// the added RECT Structure object can be retrieved by field name specified when the field was added.</span>
        rc.left -= 10; <span class="comment">// the field of RECT Structure object can also be referred by name, and used as a normal integer value.</span>
        rc.right -= 10;
        placement.flags = 0;
        placement.showCmd = SW_SHOWNA;
        dllCall.SetWindowPlacement(hostWnd, placement);
    }
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a class="el" href="interface_dll_call.php#ac5fb73dfc65171de9e56b090a56b1269" title="Create an empty Structure object.">DllCall.newStruct</a> | <a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e" title="Create a Buffer object, optionaly initialized it to given value.">DllCall.newBuffer</a> | <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> | <a href="http://msdn.microsoft.com/en-us/library/dd162897(VS.85).aspx" target="_blank">RECT Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633518(VS.85).aspx" target="_blank">GetWindowPlacement Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms633544(VS.85).aspx" target="_blank">SetWindowPlacement Function</a> </dd></dl>
<hr/><h2>方法文档</h2>
<a class="anchor" id="a0ce42643bb28edae3ef95829c7257d18"></a><!-- doxytag: member="Structure::add" ref="a0ce42643bb28edae3ef95829c7257d18" args="(Structure/Buffer/address field,[optional] String fieldName)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> add </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="interface_structure.php">Structure</a>/<a class="el" href="interface_buffer.php">Buffer</a>/address&#160;</td>
          <td class="paramname"> <em>field</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>fieldName</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Append field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify field name. </p>
<p>Once a field is added, it can be referred by zero based field index. If a field name is given, the field can be refer by name like <code>Structure.fieldName</code>.</p>
<p><em>Different <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> objects may have different properties because of different field names added to it</em>.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>The name of new added property <em>SHOULD NOT</em> conflict with existing property names.</dd></dl>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">field</td><td>The field object to be added. Can <em>ONLY</em> be one of: </p>
<ul>
<li>A <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object </li>
<li>A <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object </li>
<li>Return value of <a class="el" href="interface_buffer.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the buffer object.">Buffer.address</a> </li>
<li>Return value of <a class="el" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">Structure.address</a>. </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">fieldName</td><td>Optional. If specified, the added field can be referred as <code>Structure.fieldName</code>. If omitted, the field can still be acessed through field index. Refer to property <a class="el" href="interface_structure.php#a9fd5a67375c442dddcf84e715abc92a8" title="Get or set field of the Structure object by zero based index or name.">Structure.field</a>.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object itself. This makes it easy to join multiple adding calls into one statement.</dd></dl>
<p>To simulate a C struct, always start from an empty <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object created by <a class="el" href="interface_dll_call.php#ac5fb73dfc65171de9e56b090a56b1269" title="Create an empty Structure object.">DllCall.newStruct</a>, then append fields to the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object one by one:</p>
<ul>
<li>If the C struct field type is a basic type (for example, byte, short, DWORD), add a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object with same size in bytes. <dl class="note"><dt><b>注解:</b></dt><dd><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object provides 4 similar shortcut methods to add basic type field: <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a>.</dd></dl>
</li>
<li>If the C struct field type is a struct (for example, POINT, RECT), add a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object with same layout, or a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object with same size in bytes to the field.</li>
</ul>
<dl class="user"><dt><b></b></dt><dd>Sample code below (part of the sample code in <a href="#_details">Detailed Description</a>) simulates a <a href="http://msdn.microsoft.com/en-us/library/ms632611(VS.85).aspx" target="_blank">WINDOWPLACEMENT Structure</a>. The code calls <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a> for basic type fields; and calls <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a> to add a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object and another <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.</dd></dl>
<div class="fragment"><pre class="fragment">    var placement = createStruct().addLong(<span class="stringliteral">&#39;length&#39;</span>).addLong(<span class="stringliteral">&#39;flags&#39;</span>).addLong(<span class="stringliteral">&#39;showCmd&#39;</span>)

                    <span class="comment">// Take up the place of fields ptMinPosition and ptMaxPosition since in this example, these two fields are not used.</span>
                    <span class="comment">// Field name is omitted too.</span>
                    .add(dllCall.newBuffer(16))

                    <span class="comment">// Add the rect object created above for field &#39;RECT rcNormalPosition&#39;</span>
                    <span class="comment">// Doesn&#39;t have to use the field name defined in MSDN. Welcome to scripting world! :-)</span>
                    .<a class="code" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">add</a>(rect, <span class="stringliteral">&#39;rc&#39;</span>);

    <span class="comment">// As mentioned in MSDN, field &#39;length&#39; should be initialized with the size of the struct</span>
    placement.length = placement.<a class="code" href="interface_structure.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the structure (represented by the Structure object) in bytes...">size</a>;
</pre></div><ul>
<li>If the C struct field type is a pointer to a buffer, create a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object <code>buf</code> with required size, add <code>buf.address</code>. </li>
<li>If the C struct field type is a pointer to a struct, create a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object <code>struct</code> with matching layout, add <code>struct.address</code>.</li>
</ul>
<dl class="user"><dt><b></b></dt><dd>Sample function below creates a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object represents an <a href="http://msdn.microsoft.com/en-us/library/ms646839(VS.85).aspx" target="_blank">OPENFILENAME Structure</a>:</dd></dl>
<div class="fragment"><pre class="fragment">    var fnCreateOpenFileName = function() <span class="comment">// creation of complex structures can be wrapped up in functions to hide detail</span>
    {
        var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&#39;DllCall&#39;</span>),

            <span class="comment">// refer newBuffer method with a variable so JavaScript compressor generates smaller code</span>
            newBuffer = dllCall.newBuffer,

            <span class="comment">// These constant values can be found in OPENFILENAME documentation in MSDN.</span>
            OFN_DONTADDTORECENT = 0x02000000,
            OFN_FILEMUSTEXIST = 0x00001000,
            OFN_PATHMUSTEXIST = 0x00000800,
            OFN_READONLY = 0x00000001,

            openfilename = dllCall.newStruct().addLong(<span class="stringliteral">&#39;lStructSize&#39;</span>)

                    <span class="comment">// The corresponding field in OPENFILENAME is hwndOwner.</span>
                    <span class="comment">// the field name can be ignored if the field doesn&#39;t need to be referred by name</span>
                    .addLong(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>)

                    <span class="comment">// In this case, the initial value of the field is omitted (assumed zero if omitted)</span>
                    .addLong(<span class="stringliteral">&#39;hInstance&#39;</span>)

                    <span class="comment">// The corresponding field lpstrFilter in OPENFILENAME is a pointer to a buffer,</span>
                    <span class="comment">// so here a Buffer object is created and Buffer.address is added to Structure object.</span>
                    .add(newBuffer(512).<a class="code" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">address</a>, <span class="stringliteral">&#39;lpstrFilter&#39;</span>)

                    <span class="comment">// lpstrCustomFilter is also a pointer to buffer, in this example lpstrCustomFilter is not used and should be set to zero.</span>
                    <span class="comment">// addLong method adds a 4 bytes field and initializes it to zero (when initial value is omitted, it&#39;s assumed zero).</span>
                    .addLong(<span class="stringliteral">&#39;lpstrCustomFilter&#39;</span>)

                    <span class="comment">// nMaxCustFilter field is initialized to zero too</span>
                    .addLong(<span class="stringliteral">&#39;nMaxCustFilter&#39;</span>)

                    <span class="comment">// nFilterIndex is initialized to 1</span>
                    .addLong(1, <span class="stringliteral">&#39;nFilterIndex&#39;</span>)

                    <span class="comment">// lpstrFile is another pointer to buffer</span>
                    .add(newBuffer(512).<a class="code" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">address</a>, <span class="stringliteral">&#39;lpstrFile&#39;</span>)

                    <span class="comment">// These 3 fields are 4 bytes and initialized to zero.</span>
                    .addLong(<span class="stringliteral">&#39;nMaxFile&#39;</span>)
                    .addLong(<span class="stringliteral">&#39;lpstrFileTitle&#39;</span>)
                    .addLong(<span class="stringliteral">&#39;nMaxFileTitle&#39;</span>)

                    <span class="comment">// Another 2 pointers to buffer</span>
                    .add(newBuffer(512).<a class="code" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">address</a>, <span class="stringliteral">&#39;lpstrInitialDir&#39;</span>)
                    .add(newBuffer(512).<a class="code" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">address</a>, <span class="stringliteral">&#39;lpstrTitle&#39;</span>)

                    <span class="comment">// Add a 4 bytes field with initial value</span>
                    .addLong(OFN_DONTADDTORECENT | OFN_FILEMUSTEXIST | OFN_PATHMUSTEXIST | OFN_READONLY, <span class="stringliteral">&#39;Flags&#39;</span>)

                    <span class="comment">// These 2 fields each is 2 bytes, initialized to zero (when initial value is omitted, it&#39;s assumed zero).</span>
                    .addShort(<span class="stringliteral">&#39;nFileOffset&#39;</span>)
                    .addShort(<span class="stringliteral">&#39;nFileExtension&#39;</span>)

                    <span class="comment">// The last pointer field to be added</span>
                    .add(newBuffer(128).<a class="code" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">address</a>, <span class="stringliteral">&#39;lpstrDefExt&#39;</span>)

                    <span class="comment">// The last 6 fields lCustData, lpfnHook, lpTemplateName, pvReserved, dwReserved and FlagsEx, each takes 4 bytes,</span>
                    <span class="comment">// all should be initialized to zero and not used in this example.</span>
                    <span class="comment">// To make it simple, a single 24 bytes buffer is ued to take up the room of these 6 fields</span>
                    .add(newBuffer(24));

        <span class="comment">// fill in size as requested by OPENFILENAME documentation in MSDN</span>
        openfilename.lStructSize = openfilename.size;
        <span class="keywordflow">return</span> openfilename;
    };
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Following rules needs to be followed when adding fields to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object: <ul>
<li>
The final size of the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object should be equal to the size of the C struct </li>
<li>
Pointer fields in C struct, if used in dll call, should be mapped to either <a class="el" href="interface_buffer.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the buffer object.">Buffer.address</a> or <a class="el" href="interface_structure.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the Structure object.">Structure.address</a> </li>
</ul>
</dd></dl>
<p><br/>
 The fields of <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object created above need to be initialized before passed to Windows API <a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a>:</p>
<div class="fragment"><pre class="fragment">    var openfilename = fnCreateOpenFileName();

    <span class="comment">// lpstrFilter asks for a string with embedded NULL characters. Note that localJS will add the final ending NULL character</span>
    openfilename.lpstrFilter = <span class="stringliteral">&quot;Internet Explorer EXE file\0iexplore.exe\0&quot;</span>;

    openfilename.lpstrInitialDir = <span class="stringliteral">&#39;C:\\Program Files\\Internet Explorer&#39;</span>);
    openfilename.lpstrTitle = <span class="stringliteral">&quot;Please choose Internet Explorer EXE file&quot;</span>;
    openfilename.lpstrDefExt = <span class="stringliteral">&quot;exe&quot;</span>;
    openfilename.lpstrFile = <span class="stringliteral">&quot;iexplore.exe&quot;</span>;
    openfilename.nMaxFile = openfilename.lpstrFile.size &gt;&gt; 1; <span class="comment">// nMaxFile asks for size in UNICODE characters</span>
</pre></div><p>After initialized, the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object can be passed to Windows API <a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a>:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&#39;DllCall&#39;</span>),

    dllCall.add(<span class="stringliteral">&quot;comdlg32.dll&quot;</span>, <span class="stringliteral">&quot;BOOL WINAPI GetOpenFileName(__inout LPOPENFILENAME lpofn);&quot;</span>);
    dllCall.add(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;</span>);

    var MB_ICONINFORMATION = 0x00000040; <span class="comment">// The constants used by MessageBox can be found in MSDN</span>

    <span class="keywordflow">if</span> (dllCall.GetOpenFileName(openfilename))
        dllCall.MessageBox(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="stringliteral">&quot;You just selected &quot;</span> + openfilename.lpstrFile, document.title, MB_ICONINFORMATION);
    <span class="keywordflow">else</span>
        dllCall.MessageBox(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="stringliteral">&quot;You just canceled the dialog&quot;</span>, document.title, MB_ICONINFORMATION);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a9fd5a67375c442dddcf84e715abc92a8" title="Get or set field of the Structure object by zero based index or name.">Structure.field</a> | <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1" title="Append a 1 byte field to Structure object, optionally specify initial value and field name...">Structure.addByte</a> | <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28" title="Append a 2 bytes field to Structure object, optionally specify initial value and field name...">Structure.addShort</a> | <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568" title="Append a 4 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLong</a> | <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c" title="Append a 8 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLongLong</a> | <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> | <a href="http://msdn.microsoft.com/en-us/library/ms646839(VS.85).aspx" target="_blank">OPENFILENAME Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms646927(VS.85).aspx" target="_blank">GetOpenFileName Function</a> | <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox Function</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9823b3580b74ed81cf6542b5df88eff1"></a><!-- doxytag: member="Structure::addByte" ref="a9823b3580b74ed81cf6542b5df88eff1" args="([optional] byte initialValue,[optional] String fieldName)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> addByte </td>
          <td>(</td>
          <td class="paramtype">[optional] byte&#160;</td>
          <td class="paramname"> <em>initialValue</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>fieldName</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Append a 1 byte field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name. </p>
<p><a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a> is a shortcut method to <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a>. It creates a 1 byte <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object and calls <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a> internally.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">initialValue</td><td>Optional. The initial value of the byte field. Assumed zero if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">fieldName</td><td>Optional. Same as parameter <em>fieldName</em> of <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> method.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object itself. This makes it easy to join multiple adding calls into one statement.</dd></dl>
<p>There are 4 similar shortcut methods to add basic type field: <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a>.</p>
<p>Refer to method <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> for more information.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28" title="Append a 2 bytes field to Structure object, optionally specify initial value and field name...">Structure.addShort</a> | <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568" title="Append a 4 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLong</a> | <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c" title="Append a 8 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLongLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="add3df9b88b7ecc45ee30cd9969020c28"></a><!-- doxytag: member="Structure::addShort" ref="add3df9b88b7ecc45ee30cd9969020c28" args="([optional] short initialValue,[optional] String fieldName)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> addShort </td>
          <td>(</td>
          <td class="paramtype">[optional] short&#160;</td>
          <td class="paramname"> <em>initialValue</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>fieldName</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Append a 2 bytes field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name. </p>
<p><a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a> is a shortcut method to <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a>. It creates a 2 bytes <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object and calls <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a> internally.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">initialValue</td><td>Optional. The initial value of the byte field. Assumed zero if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">fieldName</td><td>Optional. Same as parameter <em>fieldName</em> of <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> method.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object itself. This makes it easy to join multiple adding calls into one statement.</dd></dl>
<p>There are 4 similar shortcut methods to add basic type field: <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a>.</p>
<p>Refer to method <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> for more information and sample usage.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1" title="Append a 1 byte field to Structure object, optionally specify initial value and field name...">Structure.addByte</a> | <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568" title="Append a 4 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLong</a> | <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c" title="Append a 8 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLongLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9281de28bee204692288a33173e38568"></a><!-- doxytag: member="Structure::addLong" ref="a9281de28bee204692288a33173e38568" args="([optional] long initialValue,[optional] String fieldName)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> addLong </td>
          <td>(</td>
          <td class="paramtype">[optional] long&#160;</td>
          <td class="paramname"> <em>initialValue</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>fieldName</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Append a 4 bytes field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name. </p>
<p><a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a> is a shortcut method to <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a>. It creates a 4 bytes <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object and calls <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a> internally.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">initialValue</td><td>Optional. The initial value of the byte field. Assumed zero if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">fieldName</td><td>Optional. Same as parameter <em>fieldName</em> of <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> method.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object itself. This makes it easy to join multiple adding calls into one statement.</dd></dl>
<p>There are 4 similar shortcut methods to add basic type field: <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a>.</p>
<p>Refer to method <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> for more information and sample usage.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1" title="Append a 1 byte field to Structure object, optionally specify initial value and field name...">Structure.addByte</a> | <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28" title="Append a 2 bytes field to Structure object, optionally specify initial value and field name...">Structure.addShort</a> | <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c" title="Append a 8 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLongLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a6fb29719905b419d362cb7db84fc363c"></a><!-- doxytag: member="Structure::addLongLong" ref="a6fb29719905b419d362cb7db84fc363c" args="([optional] __int64 initialValue,[optional] String fieldName)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> addLongLong </td>
          <td>(</td>
          <td class="paramtype">[optional] __int64&#160;</td>
          <td class="paramname"> <em>initialValue</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>fieldName</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Append a 8 bytes field to <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, optionally specify initial value and field name. </p>
<p><a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a> is a shortcut method to <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a>. It creates a 8 bytes <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object and calls <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a> internally.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">initialValue</td><td>Optional. The initial value of the byte field. Assumed zero if omitted. </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">fieldName</td><td>Optional. Same as parameter <em>fieldName</em> of <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> method.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>The <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object itself. This makes it easy to join multiple adding calls into one statement.</dd></dl>
<p>There are 4 similar shortcut methods to add basic type field: <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a>.</p>
<p>Refer to method <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> for more information.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1" title="Append a 1 byte field to Structure object, optionally specify initial value and field name...">Structure.addByte</a> | <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28" title="Append a 2 bytes field to Structure object, optionally specify initial value and field name...">Structure.addShort</a> | <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568" title="Append a 4 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="aa993855d0ffaf23f5d40f784cadc4ee0"></a><!-- doxytag: member="Structure::clone" ref="aa993855d0ffaf23f5d40f784cadc4ee0" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="interface_structure.php">Structure</a> clone </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Returns a new <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object having same content. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>new <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object cloned.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_buffer.php#ae92cd8c68053b3cd5197dfdd93f39529" title="Returns a new Buffer object having same content.">Buffer.clone</a> </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a948cb08f27bc32eb7afdd80cfc6f0486"></a><!-- doxytag: member="Structure::address" ref="a948cb08f27bc32eb7afdd80cfc6f0486" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object address<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns an object represents a pointer to the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>the object represents a pointer to the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.</dd></dl>
<dl class="attention"><dt><b>注意:</b></dt><dd>The pointer object is typically used in <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a>, to add fields which are pointers to a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a>. <em>It's barely used elsewhere</em>.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_buffer.php#a948cb08f27bc32eb7afdd80cfc6f0486" title="ReadOnly. Returns an object represents a pointer to the buffer object.">Buffer.address</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a9fd5a67375c442dddcf84e715abc92a8"></a><!-- doxytag: member="Structure::field" ref="a9fd5a67375c442dddcf84e715abc92a8" args="(int_or_String field_index_or_name)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object field( int_or_String field_index_or_name)<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Get or set field of the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object by zero based index or name. </p>
<p>The index of the first added field is zero.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">field_index_or_name</td><td>If it's a string, it's field name; if it's an integer, it's zero based field index.</td></tr>
  </table>
  </dd>
</dl>
<p>In addition to access named field like <code>Structure.fieldName</code>, property <a class="el" href="interface_structure.php#a9fd5a67375c442dddcf84e715abc92a8">field</a> provides an unified way to access fields in <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object. It is a Parameterized Property, which is not often seen in JavaScript programming. Here are sample codes of how to use it:</p>
<p>First create a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> for C RECT struct:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
        rect = dllCall.newStruct().addLong(<span class="stringliteral">&quot;left&quot;</span>).addLong(<span class="stringliteral">&quot;top&quot;</span>).addLong(<span class="stringliteral">&quot;right&quot;</span>).addLong(<span class="stringliteral">&quot;bottom&quot;</span>);
</pre></div><p>To access the fields of the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object:</p>
<div class="fragment"><pre class="fragment">    rect.field(<span class="stringliteral">&quot;left&quot;</span>) = 10;
    rect.field(1) = 5;
    alert(rect.field(0)); <span class="comment">// popup 10</span>
    alert(rect.field(<span class="stringliteral">&quot;top&quot;</span>)); <span class="comment">// popup 5</span>
</pre></div><p>In addition, property <a class="el" href="interface_structure.php#a9fd5a67375c442dddcf84e715abc92a8">field</a> is the <em>DEFAULT</em> property of <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, which means following code work exactly same as above sample code:</p>
<div class="fragment"><pre class="fragment">    rect(<span class="stringliteral">&quot;left&quot;</span>) = 10;
    rect(1) = 5;
    alert(rect(0)); <span class="comment">// popup 10</span>
    alert(rect(<span class="stringliteral">&quot;top&quot;</span>)); <span class="comment">// popup 5</span>
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1" title="Append a 1 byte field to Structure object, optionally specify initial value and field name...">Structure.addByte</a> | <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28" title="Append a 2 bytes field to Structure object, optionally specify initial value and field name...">Structure.addShort</a> | <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568" title="Append a 4 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLong</a> | <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c" title="Append a 8 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLongLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a6725042366a2566ebaeecd8d267859ac"></a><!-- doxytag: member="Structure::fieldCount" ref="a6725042366a2566ebaeecd8d267859ac" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long fieldCount<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the number of <em>direct</em> fields in the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object. </p>
<p>Only fields added by <a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18">add</a>, <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1">addByte</a>, <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28">addShort</a>, <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568">addLong</a>, or <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c">addLongLong</a> are counted. If a field is a <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object, the subfields in the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> field is <em>NOT</em> counted, and the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> field is counted as 1.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>The number of <em>direct</em> fields in the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php#a0ce42643bb28edae3ef95829c7257d18" title="Append field to Structure object, optionally specify field name.">Structure.add</a> | <a class="el" href="interface_structure.php#a9823b3580b74ed81cf6542b5df88eff1" title="Append a 1 byte field to Structure object, optionally specify initial value and field name...">Structure.addByte</a> | <a class="el" href="interface_structure.php#add3df9b88b7ecc45ee30cd9969020c28" title="Append a 2 bytes field to Structure object, optionally specify initial value and field name...">Structure.addShort</a> | <a class="el" href="interface_structure.php#a9281de28bee204692288a33173e38568" title="Append a 4 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLong</a> | <a class="el" href="interface_structure.php#a6fb29719905b419d362cb7db84fc363c" title="Append a 8 bytes field to Structure object, optionally specify initial value and field name...">Structure.addLongLong</a> </dd></dl>

</div>
</div>
<a class="anchor" id="a37363161b41c4165b98cba7abc7a9d95"></a><!-- doxytag: member="Structure::size" ref="a37363161b41c4165b98cba7abc7a9d95" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">long size<code> [get]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>ReadOnly. Returns the size of the structure (represented by the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object) in bytes. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The size of the structure (represented by the <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object) in bytes.</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_buffer.php#a37363161b41c4165b98cba7abc7a9d95" title="ReadOnly. Returns the size of the buffer in bytes.">Buffer.size</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>