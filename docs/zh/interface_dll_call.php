<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: DllCall类参考";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: DllCall类参考</title>
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
<h1>DllCall类参考<br/>
<small>
[<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a>]</small>
</h1>  </div>
</div>
<div class="contents">
<!-- doxytag: class="DllCall" -->
<p><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object enables JavaScript call functions exported by DLL or EXE files, including most Windows API functions.  
<a href="#_details">更多...</a></p>

<p><a href="class_dll_call-members.php">所有成员的列表。</a></p>
<table class="memberdecls">
<tr><td colspan="2"><h2><a name="pub-methods"></a>
方法</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0">add</a> (String dllPath, String prototype,[optional] String renameTo)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Add function exported by DLL or EXE file as a method of current <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object.  <a href="#ab6730ea57a7678c1f07953ce331edca0"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_dll_call.php#af9c99ab123bbf569e623a9c5e5c9f40e">newBuffer</a> (int/String sizeOrString,[optional] int/boolean valueOrAnsi)</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Create a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object, optionaly initialized it to given value.  <a href="#af9c99ab123bbf569e623a9c5e5c9f40e"></a><br/></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">Object&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_dll_call.php#ac5fb73dfc65171de9e56b090a56b1269">newStruct</a> ()</td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Create an empty <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object.  <a href="#ac5fb73dfc65171de9e56b090a56b1269"></a><br/></td></tr>
<tr><td colspan="2"><h2><a name="properties"></a>
属性</h2></td></tr>
<tr><td class="memItemLeft" align="right" valign="top">boolean&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6">checkAdd</a><code> [get, set]</code></td></tr>
<tr><td class="mdescLeft">&#160;</td><td class="mdescRight">Specify whether <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> popup details. Useful for Debug.  <a href="#a3bdaadf97fcc30c6e0d280fe3926afa6"></a><br/></td></tr>
</table>
<hr/><a name="_details"></a><h2>详细描述</h2>
<p><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object enables JavaScript call functions exported by DLL or EXE files, including most Windows API functions. </p>
<p><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object adds functions exported by DLL or EXE files as methods of <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object, then the added methods can be called by other JavaScript code.</p>
<p><em>Different <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> objects may have different methods because of different functions added to it</em>.</p>
<p><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object is created by <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> method as following:</p>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>);
</pre></div><p>A simple demostration of <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object, popup a message box:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// For most cases, simply copy the function prototype in MSDN just works.</span>
    dllCall.add(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;int WINAPI MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;</span>);

    <span class="comment">// once a function is added, it becomes a method of DllCall object, and can be referred by a variable just like other JavaScript functions</span>
    var messageBox = dllCall.MessageBox,
        MB_ICONINFORMATION = 0x00000040; <span class="comment">// The constants used by MessageBox can be found in MSDN</span>

    <span class="comment">// localJS.hostWnd returns handle of current browser window</span>
    messageBox(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>, <span class="stringliteral">&quot;MessageBox popped by Windows API&quot;</span>, document.title, MB_ICONINFORMATION);
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> | <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> | <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms645505(VS.85).aspx" target="_blank">MessageBox Function</a> </dd></dl>
<hr/><h2>方法文档</h2>
<a class="anchor" id="ab6730ea57a7678c1f07953ce331edca0"></a><!-- doxytag: member="DllCall::add" ref="ab6730ea57a7678c1f07953ce331edca0" args="(String dllPath, String prototype,[optional] String renameTo)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean add </td>
          <td>(</td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>dllPath</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">String&#160;</td>
          <td class="paramname"> <em>prototype</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] String&#160;</td>
          <td class="paramname"> <em>renameTo</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Add function exported by DLL or EXE file as a method of current <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object. </p>
<p>Once a function is added, then it can be called as a normal JavaScript method, or referred by a variable just like other JavaScript functions. This is useful to make JavaScript compressors like YUI compressor generate smaller JavaScript file.</p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">dllPath</td><td>Dll or EXE file name to load. <br/>
 For example, <code>"user32.dll"</code>, <code>"shell32.dll"</code>, <code>"Kernel32.dll"</code>, <code>"shlwapi.dll"</code>, etc. <br/>
 <br/>
 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">prototype</td><td>Simply copy paste the C style function prototype here. <br/>
 For Windows API, you can find the prototype in MSDN. <br/>
 <br/>
 Note that <em>parameter names have to be included in the function prototype string</em>. <br/>
 <br/>
 </td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">renameTo</td><td>Optional. If present, the added function appear in JavaScript with name <em>renameTo</em>, not the name declared in prototype. <br/>
 It can be used to rename a long Windows API name to a shorter one in JavaScript. Omit it if you don't need to do so.</td></tr>
  </table>
  </dd>
</dl>
<dl class="return"><dt><b>返回:</b></dt><dd>This method always returns <code>true</code>. If add failed (for example, cannot find the function), an error is generated.</dd></dl>
<p><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> method looks for <em>dllPath</em> with the same file searching rule with Windows API <a href="http://msdn.microsoft.com/en-us/library/ms684175(VS.85).aspx" target="_blank">LoadLibrary</a>. For Windows API, only the filename of the DLL is necessary, absoluted file path is not required. Note that it can also load functions exported by an exe file.</p>
<p>For Windows API, the dll where the function exists can be found at the bottom of function documentation in MSDN.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>If the function name in prototype cannot be found in the dll or exe file, <a class="el" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a> will append the function name with suffix 'W' and retry. This is because most character involved Windows API have both ansi and unicode versions, and LocalJS default uses unicode. If both cannot be found, the add call fails with an error. Even if the function name exported is the one having 'W' suffix, the function is still called with the name declared in prototype unless <em>renameTo</em> parameter specifies a different name. </dd></dl>
<dl class="user"><dt><b></b></dt><dd>If two functions are added to same <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object with same name, it will be uncertain which one will be called. The name of new added method <em>SHOULD NOT</em> conflict with existing method names.</dd></dl>
<p><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> method parses <em>prototype</em> according to configuration file <em>localJS.cfg</em>, locates in same folder with <em>localJS.dll</em>. It's a well commented <a href="http://www.json.org/" target="_blank">JSON</a> format configuration file. <em>localJS.cfg</em> has been pre-configured to recognize function prototype of most Windows API in MSDN, as well as all standard C++ data types. It includes: </p>
<ul>
<li>Keywords often seen in MSDN for different data type </li>
<li>Macros often seen in MSDN function for function prototype </li>
<li>A list of dll names which default export function in cdecl calling convention</li>
</ul>
<p>You can modify <em>localJS.cfg</em> to make <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object recognize new keywords / macros.</p>
<dl class="attention"><dt><b>注意:</b></dt><dd><em>localJS.cfg</em> must exists in the same folder with <em>localJS.dll</em> for <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> method to work.</dd></dl>
<p>At present <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object recognizes two calling conventions: <code>stdcall</code> and <code>cdecl</code>. If a calling convention is not included in function prototype, the calling convention is considered <code>stdcall</code>, unless the dll name is found in list under item <em>"cdecl_dll"</em> in <em>localJS.cfg</em> file, in which case the calling convention is <code>cdecl</code> by default. You can modify the list in <em>localJS.cfg</em> to set default <code>cdecl</code> calling convention for more dll.</p>
<p><a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object introduces property <a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6" title="Specify whether DllCall.add popup details. Useful for Debug.">DllCall.checkAdd</a> to help find out how a function is added LocalJS, which is useful for debugging. Refer to <a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6" title="Specify whether DllCall.add popup details. Useful for Debug.">DllCall.checkAdd</a> for detail.</p>
<p>For more examples of using <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object, refer to <a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6" title="Specify whether DllCall.add popup details. Useful for Debug.">DllCall.checkAdd</a>, <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> and <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a>.</p>
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6" title="Specify whether DllCall.add popup details. Useful for Debug.">DllCall.checkAdd</a> | <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> | <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> | <a href="http://msdn.microsoft.com/en-us/library/ms684175(VS.85).aspx" target="_blank">LoadLibrary Function</a> | <a href="http://www.json.org/" target="_blank">JSON</a> </dd></dl>

</div>
</div>
<a class="anchor" id="af9c99ab123bbf569e623a9c5e5c9f40e"></a><!-- doxytag: member="DllCall::newBuffer" ref="af9c99ab123bbf569e623a9c5e5c9f40e" args="(int/String sizeOrString,[optional] int/boolean valueOrAnsi)" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object newBuffer </td>
          <td>(</td>
          <td class="paramtype">int/String&#160;</td>
          <td class="paramname"> <em>sizeOrString</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">[optional] int/boolean&#160;</td>
          <td class="paramname"> <em>valueOrAnsi</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Create a <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object, optionaly initialized it to given value. </p>
<dl><dt><b>参数:</b></dt><dd>
  <table class="params">
    <tr><td class="paramdir">[in]</td><td class="paramname">sizeOrString</td><td>Could be an integer or String: </p>
<ul>
<li>If <em>sizeOrString</em> is an integer, it specifies the size of the buffer to be created. </li>
<li>If <em>sizeOrString</em> is a String, the String is used to initialize the buffer. </li>
</ul>
</td></tr>
    <tr><td class="paramdir">[in]</td><td class="paramname">valueOrAnsi</td><td>Optional. Meaning varies according to parameter <em>sizeOrString:</em> </p>
<ul>
<li>If <em>sizeOrString</em> is an integer which specifies buffer size, <em>valueOrAnsi</em> specifies another integer used to initialize the <em>beginning bytes</em> of the buffer. <br/>
 Zero is assumed if this parameter is omitted. </li>
<li>If <em>sizeOrString</em> is a String, <em>valueOrAnsi</em> is a boolean value which specifies whether the buffer hold the string in ANSI or UNICODE format. <code>true</code> for ANSI, <code>false</code> for UNICODE. <br/>
 <code>false</code> is assumed if this parameter is omitted.</li>
</ul>
</td></tr>
  </table>
  </dd>
</dl>
<dl class="remark"><dt><b>评论:</b></dt><dd>If <em>sizeOrString</em> is an integer, which specifies the buffer size, all bytes of the new created buffer is first initialized to zero. Then, if <em>valueOrAnsi</em> specifies an integer, the integer will be copied to the <em>beginning</em> of the buffer, up to 8 bytes. If buffer size is less than 8 bytes, then higher bytes of <em>valueOrAnsi</em> are ignored.</dd></dl>
<dl class="user"><dt><b></b></dt><dd>If <em>sizeOrString</em> is a string, and <em>valueOrAnsi</em> is false or omitted, the created buffer size will be 2 * (<em>sizeOrString.length</em> + 1) bytes. The last 2 bytes are filled with zero. If <em>valueOrAnsi</em> is true, the the created buffer size will be (<em>sizeOrString.length</em> + 1) bytes. The last 1 byte is initialized to zero. In both cases, the string in buffer is NULL terminated.</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>The size of the buffer cannot be changed once the buffer is created.</dd></dl>
<dl class="return"><dt><b>返回:</b></dt><dd>new <a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> object created.</dd></dl>
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
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_buffer.php" title="Buffer object represents a fixed size buffer, used as parameters in Dll function call.">Buffer</a> </dd></dl>

</div>
</div>
<a class="anchor" id="ac5fb73dfc65171de9e56b090a56b1269"></a><!-- doxytag: member="DllCall::newStruct" ref="ac5fb73dfc65171de9e56b090a56b1269" args="()" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Object newStruct </td>
          <td>(</td>
          <td class="paramname">&#160;)</td>
          <td></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Create an empty <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object. </p>
<dl class="return"><dt><b>返回:</b></dt><dd>The new <a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> object created.</dd></dl>
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
<dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_structure.php" title="Structure object represents a C struct, used as parameters in Dll function call.">Structure</a> </dd></dl>

</div>
</div>
<hr/><h2>属性文档</h2>
<a class="anchor" id="a3bdaadf97fcc30c6e0d280fe3926afa6"></a><!-- doxytag: member="DllCall::checkAdd" ref="a3bdaadf97fcc30c6e0d280fe3926afa6" args="" -->
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">boolean checkAdd<code> [get, set]</code></td>
        </tr>
      </table>
</div>
<div class="memdoc">

<p>Specify whether <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> popup details. Useful for Debug. </p>
<p>If set to <code>true</code>, <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> will popup details of how function is added, or error messages if something goes wrong. In addition, when <a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6" title="Specify whether DllCall.add popup details. Useful for Debug.">DllCall.checkAdd</a> is <code>true</code>, each time <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> method is invoked, <em>localJS.cfg</em> will be reloaded from disk and reparsed, so modification of the file can be applied immediately.</p>
<p>If set to <code>false</code>, then no message popped up. And <em>localJS.cfg</em> will only be loaded and parsed once for the first <a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> method invocation. The default value is <code>false</code>.</p>
<dl class="return"><dt><b>返回:</b></dt><dd>Current value, <code>true</code> or <code>false</code>.</dd></dl>
<p>A typical usage of <a class="el" href="interface_dll_call.php#a3bdaadf97fcc30c6e0d280fe3926afa6" title="Specify whether DllCall.add popup details. Useful for Debug.">DllCall.checkAdd</a> property:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// define a gloabl variable somewhere to control the checkAdd value assigned to different DllCall objects.</span>
    GLOBAL_CHECK_ADD = <span class="keyword">true</span>;

    var init_dllCall = function()
    {
        var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;DllCall&quot;</span>),
            addFunc = dllCall.add;

        dllCall.checkAdd = GLOBAL_CHECK_ADD;
</pre></div><p>Now when add functions to the <a class="el" href="interface_dll_call.php" title="DllCall object enables JavaScript call functions exported by DLL or EXE files, including most Windows...">DllCall</a> object created above, a message box will be popped up for each function added.</p>
<div class="fragment"><pre class="fragment">        <span class="comment">// All these function prototypes are copied from MSDN.</span>
        <span class="comment">// MSDN also lists the dll name contains each function, normally at the bottom of function documentation.</span>
        addFunc(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;BOOL MoveWindow(HWND hWnd,int X,int Y,int nWidth,int nHeight,BOOL bRepaint);&quot;</span>);
        addFunc(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;BOOL GetWindowRect(HWND hWnd,LPRECT lpRect);&quot;</span>);

        addFunc(<span class="stringliteral">&quot;shlwapi.dll&quot;</span>, <span class="stringliteral">&quot;BOOL PathFileExists(LPCTSTR pszPath);&quot;</span>);

        addFunc(<span class="stringliteral">&quot;shell32.dll&quot;</span>, <span class="stringliteral">&quot;HINSTANCE ShellExecute(HWND hwnd,LPCTSTR lpOperation,LPCTSTR lpFile,LPCTSTR lpParameters,LPCTSTR lpDirectory,INT nShowCmd);&quot;</span>);

        addFunc(<span class="stringliteral">&quot;Kernel32.dll&quot;</span>, <span class="stringliteral">&quot;UINT WINAPI GetPrivateProfileInt(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in INT nDefault,__in LPCTSTR lpFileName);&quot;</span>);
        addFunc(<span class="stringliteral">&quot;Kernel32.dll&quot;</span>, <span class="stringliteral">&quot;DWORD WINAPI GetPrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpDefault,__out LPTSTR lpReturnedString,__in DWORD nSize,__in LPCTSTR lpFileName);&quot;</span>);
        addFunc(<span class="stringliteral">&quot;Kernel32.dll&quot;</span>, <span class="stringliteral">&quot;BOOL WINAPI WritePrivateProfileString(__in LPCTSTR lpAppName,__in LPCTSTR lpKeyName,__in LPCTSTR lpString,__in LPCTSTR lpFileName);&quot;</span>);

        <span class="keywordflow">return</span> dllCall;
    };
</pre></div><dl class="see"><dt><b>参见:</b></dt><dd><a class="el" href="interface_dll_call.php#ab6730ea57a7678c1f07953ce331edca0" title="Add function exported by DLL or EXE file as a method of current DllCall object.">DllCall.add</a> </dd></dl>

</div>
</div>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
