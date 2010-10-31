<?php
require_once('../../_config.php');
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: 如何做到 ...</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>如何做到 ... </h1>  </div>
</div>
<div class="contents">
<p>本页目录：</p>
 
<style>
h3 { font-weight:normal; color:blue }
h2 { font-weight:normal; color:green }
div.jump_index a.el { font-weight:normal }
</style>
<div class="jump_index">
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_start_up">LocalJS 起步</a></div> <ul>
<li><a class="el" href="howto.php#howto_start_local_js">如何把网站变成LocalJS 桌面程序？</a> </li>
<li><a class="el" href="howto.php#howto_access_objects">如何在JavaScript 代码中使用LocalJS 对象？</a> </li>
<li><a class="el" href="howto.php#howto_debug">如何调试JavaScript？</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_browser_wnd">控制页面窗口</a></div> <ul>
<li><a class="el" href="howto.php#howto_move_wnd">如何用JavaScript 在桌面上移动页面窗口？</a> </li>
<li><a class="el" href="howto.php#howto_change_wnd_style">如何用JavaScript 显示或隐藏页面窗口的标题栏？</a> </li>
<li><a class="el" href="howto.php#howto_popup_msg">如何弹出一个比JavaScript 的alert 好看些的消息框？</a> </li>
<li><a class="el" href="howto.php#howto_close_wnd">如何用JavaScript 关闭页面窗口？</a> </li>
<li><a class="el" href="howto.php#howto_confirm_close">如何在用户关闭页面窗口时弹出确认对话框？</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_navigation">在不同页面之间切换</a></div> <ul>
<li><a class="el" href="howto.php#howto_get_webbrowser">如何得到当前页面窗口的WebBrowser 对象？</a> </li>
<li><a class="el" href="howto.php#howto_nav_2_local">如何从web 页面切换到本地页面？</a> </li>
<li><a class="el" href="howto.php#howto_cancel_nav">如何取消页面切换？</a> </li>
<li><a class="el" href="howto.php#howto_pass_para_2_nav_page">如何给即将转去的页面传递参数？</a> </li>
<li><a class="el" href="howto.php#howto_data_lost_reload">如何防止页面刷新的时候丢失数据？</a> </li>
<li><a class="el" href="howto.php#howto_f5">如何防止用户按F5 键刷新页面？</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_new_wnd">Launching New Browser Window</a></div> <ul>
<li><a class="el" href="howto.php#howto_new_wnd_by_js">How to launch a new LocalJS browser window from within JavaScript?</a> </li>
<li><a class="el" href="howto.php#howto_new_wnd_by_click">How to launch a new LocalJS browser window when user clicks a link?</a> </li>
<li><a class="el" href="howto.php#howto_interop_other_wnd">How to interop with JavaScript in another LocalJS browser window?</a> </li>
<li><a class="el" href="howto.php#howto_global_dict">How to make a variable global to JavaScript in all LocalJS browser windows?</a> </li>
<li><a class="el" href="howto.php#howto_shell_exec">How to open a url in system default browser?</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_file_access">Access Folders and Files</a></div> <ul>
<li><a class="el" href="howto.php#howto_user_data_folder">How to retrieve user data folder?</a> </li>
<li><a class="el" href="howto.php#howto_create_folder">How to create folder in disk?</a> </li>
<li><a class="el" href="howto.php#howto_save_2_file">How to save settings to disk files?</a> </li>
<li><a class="el" href="howto.php#howto_save_2_reg">How to save settings to registry?</a> </li>
<li><a class="el" href="howto.php#howto_utf_8">How to access file in utf-8 format?</a> </li>
<li><a class="el" href="howto.php#howto_browse_file">How to browse for a file?</a> </li>
<li><a class="el" href="howto.php#howto_browse_folder">How to browse for folder?</a> </li>
<li><a class="el" href="howto.php#howto_enum_file">How to enumerate files in a folder?</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_sys_info">Retrieve System Information</a></div> <ul>
<li><a class="el" href="howto.php#howto_get_exe">How to get current exe file name?</a> </li>
<li><a class="el" href="howto.php#howto_wmi">How to get system information (for example, processors descriptions)?</a> </li>
<li><a class="el" href="howto.php#howto_enumerate">How to enumerate items in collection (e.g., Files) returned by system object (e.g., FileSystemObject)?</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_db">Local Database Access</a></div> <ul>
<li><a class="el" href="howto.php#howto_access_db">How to access local database?</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_web_service">Call Web Service from any domain</a></div> <ul>
<li><a class="el" href="howto.php#howto_call_ws">How to call web service from other domains?</a> </li>
<li><a class="el" href="howto.php#howto_json">How to parse JSON format web response?</a></li>
</ul>
<div class="myli" style="padding-left:1.5em"><a class="el" href="howto.php#howto_thread">Multithreading</a></div> <ul>
<li><a class="el" href="howto.php#howto_new_thread">How to start a new thread?</a> </li>
<li><a class="el" href="howto.php#howto_thread_end">How to tell if a thread has ended?</a> </li>
<li><a class="el" href="howto.php#howto_thread_sync">How to synchronize data access among threads?</a></li>
</ul>
 </div> <h2><a class="anchor" id="howto_start_up"></a>
LocalJS 起步</h2>
<h3><a class="anchor" id="howto_start_local_js"></a>
如何把网站变成LocalJS 桌面程序？</h3>
<ul>
<li> <a href="<?php echo $release_zip_link; ?>" target="_blank"><span class="red">免费</span>下载LocalJS 运行库</a>，解压缩后大小<span class="red">不到1 MB</span>。 </li>
<li>在解压缩后的文件中找到 LocalJSBootstrap.html 并加入如下 JavaScript 代码：</li>
</ul>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a638f18884615ddd3e7cc901a3302f931" title="Trust web pages from given domain, url prefix, or path prefix. LocalJS objects are ONLY available in ...">trust</a>(<span class="stringliteral">&quot;mysite.com&quot;</span>);
    location.replace(<span class="stringliteral">&quot;http://mysite.com/&quot;</span>);
</pre></div><ul>
<li>运行LocalJSBootstrap.exe.</li>
</ul>
<h3><a class="anchor" id="howto_access_objects"></a>
如何在JavaScript 代码中使用LocalJS 对象？</h3>
<p>对于<a class="el" href="group___j_s_src_objects.php">LocalJS 基本对象</a>, 在你的页面中包含  <a href="<?php echo $release_zip_link; ?>" target="_blank">LocalJS 运行库</a> 自带的JavaScript 文件。</p>
<p>对于<a class="el" href="group___j_s_objects.php">LocalJS 高级对象</a> ：</p>
<ul>
<li>LocalJS 高级对象的根对象localJS 是页面中的全局变量； </li>
<li>其他的LocalJS 高级对象都派生自localJS 对象的属性，或者派生对象的属性或方法：</li>
</ul>
<div class="fragment"><pre class="fragment">    var dllCall = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&#39;DllCall&#39;</span>);
    var thr = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac12d811a674c6cc7417b6f9a8d39736c" title="Readonly. Returns object Threading, which exposes methods to create new script thread, sleep, get thread id, etc.">threading</a>.<a class="code" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">newThread</a>(<span class="stringliteral">&#39;return true;&#39;</span>);
    var globalDict = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">globalDict</a>;
</pre></div><h3><a class="anchor" id="howto_debug"></a>
如何调试JavaScript？</h3>
<p>网上有不少JavaScript 的调试工具。下面给出一个用微软的集成环境的方法：</p>
<ul>
<li>安装一个<a href="http://msdn.microsoft.com/en-us/library/5hs4b7a6.aspx" target="_blank">Just-In-Time</a> JavaScript 调试器。比如，Visual Studio 或者 <a href="http://msdn.microsoft.com/en-us/library/aa189846(office.10).aspx" target="_blank">Microsoft Script Editor</a>。 <dl class="user"><dt><b></b></dt><dd><a href="http://msdn.microsoft.com/en-us/library/5hs4b7a6.aspx" target="_blank">Just-In-Time</a> 是指当程序遇到断点的时候，调试器会弹出窗口提示用户进行调试。 </dd></dl>
</li>
<li>在系统注册表中找到位置<em>HKEY_CURRENT_USER\Software\LocalJS\WebBrowser\Main</em>，在其下添加一个字符串类型的键<em>"Disable Script Debugger"</em>，键值为<em>"no"：</em> </li>
</ul>
<div align="center">
<img src="debug_registry.JPG" alt="debug_registry.JPG"/>
<p><strong>设置注册表以允许调试</strong></p></div>
 <ul>
<li>在代码里加入<code>debugger</code> 语句来设置断点： <div class="fragment"><pre class="fragment">    (function()
    {
        debugger;
    })();
</pre></div> </li>
<li>当 <code>debugger</code> 语句被执行到的时候，<a href="http://msdn.microsoft.com/en-us/library/5hs4b7a6.aspx" target="_blank">Just-In-Time</a> 调试器会弹出如下窗口：</li>
</ul>
<div align="center">
<img src="debug_popup.JPG" alt="debug_popup.JPG"/>
<p><strong>弹出的调试窗口</strong></p></div>
 <dl class="user"><dt><b></b></dt><dd>选择调试器，点击 "Yes" 就可以在集成环境中调试JavaScript 了。</dd></dl>
<dl class="note"><dt><b>注解:</b></dt><dd>如果你调用过函数 <a class="el" href="group___host_a_p_i.php#ga7474b7f77001b41241fdadc926054645" title="Change the default registry used by LocalJS browser window to save its own options.">setBrowserControlRegPath()</a> 改变了LocalJS 页面窗口用到的的注册表位置，你需要在你所设定的位置下创建 'Disable Script Debugger' 键值。</dd></dl>
<dl class="see"><dt><b>参见:</b></dt><dd><a href="http://msdn.microsoft.com/en-us/library/k2h50zzs(VS.80).aspx" target="_blank">How to: Enable Client-Side Script Debugging</a></dd></dl>
<h2><a class="anchor" id="howto_browser_wnd"></a>
控制页面窗口</h2>
<h3><a class="anchor" id="howto_move_wnd"></a>
如何用JavaScript 在桌面上移动页面窗口？</h3>
<ul>
<li>调用 <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb">LOCALJS.UI.moveWindow</a></li>
</ul>
<h3><a class="anchor" id="howto_change_wnd_style"></a>
如何用JavaScript 显示或隐藏页面窗口的标题栏？</h3>
<ul>
<li>调用 <a class="el" href="interface_u_i.php#a8661d51c7e5389632e89177abfd92a45">LOCALJS.UI.showTitleBar</a></li>
</ul>
<h3><a class="anchor" id="howto_popup_msg"></a>
如何弹出一个比JavaScript 的alert 好看些的消息框？</h3>
<ul>
<li>在页面中包含localjs_ui.js。默认的JavaScript 函数<code>alert</code> 和 <code>confirm</code> 就会被替换为LocalJS 版本。 </li>
<li>函数 <a class="el" href="interface_u_i.php#ae4029da3a7b30a44c2a93b186146e3ae">LOCALJS.UI.msgBox</a> 和 <a class="el" href="interface_u_i.php#a8e8c34b33f063c99f3c36b7916e396b9">LOCALJS.UI.confirm</a> 提供进一步的消息框选项。</li>
</ul>
<h3><a class="anchor" id="howto_close_wnd"></a>
如何用JavaScript 关闭页面窗口？</h3>
<ul>
<li>调用方法 <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a> 关闭页面窗口。 </li>
<li>调用 <code>localJS.webBrowser.Quit()</code> 关闭Internet Explorer程序窗口。</li>
</ul>
<p>示例代码参见 <a class="el" href="interfacelocal_j_s.php#ae0a273e38f45d2547157ddb6cfa6108c" title="Close the current browser window. NOT available in standalone Internet Explorer application.">localJS.closeWindow</a>.</p>
<h3><a class="anchor" id="howto_confirm_close"></a>
如何在用户关闭页面窗口时弹出确认对话框？</h3>
<ul>
<li>把一个自定义函数赋给 <a class="el" href="interface_u_i.php#a336a7e8690beb99db79da34c2a1f2810">LOCALJS.UI.exitCallback</a>。 </li>
<li>在该自定义函数中，调用 <a class="el" href="interface_u_i.php#a8e8c34b33f063c99f3c36b7916e396b9">LOCALJS.UI.confirm</a> 弹出确认对话框。</li>
</ul>
<p>示例代码参见 <a class="el" href="interface_u_i.php#a336a7e8690beb99db79da34c2a1f2810">LOCALJS.UI.exitCallback</a>.</p>
<h2><a class="anchor" id="howto_navigation"></a>
在不同页面之间切换</h2>
<h3><a class="anchor" id="howto_get_webbrowser"></a>
如何得到当前页面窗口的WebBrowser 对象？</h3>
<ul>
<li>通过属性 <a class="el" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">localJS.webBrowser</a> 就可以：</li>
</ul>
<div class="fragment"><pre class="fragment">    var browser_obj = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">webBrowser</a>;
</pre></div><h3><a class="anchor" id="howto_nav_2_local"></a>
如何从web 页面切换到本地页面？</h3>
<ul>
<li>调用 <a href="http://msdn.microsoft.com/en-us/library/aa752085(VS.85).aspx" target="_blank">WebBrowser 对象</a>的<a href="http://msdn.microsoft.com/en-us/library/aa752093(VS.85).aspx" target="_blank">Navigate 方法</a>：</li>
</ul>
<div class="fragment"><pre class="fragment">    <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">webBrowser</a>.Navigate(<span class="stringliteral">&quot;file:///C:/test.html&quot;</span>);
</pre></div><h3><a class="anchor" id="howto_cancel_nav"></a>
如何取消页面切换？</h3>
<ul>
<li>用方法 <a class="el" href="interface_c_o_m.php#a03b548ce8da020a692d590d4a5b21247" title="Connect JavaScript functions to COM object events.">COM.connectEvents</a> 把JavaScript 函数连接到<a href="http://msdn.microsoft.com/en-us/library/aa768326(VS.85).aspx" target="_blank">BeforeNavigate2 事件</a>，把<code>cancel.returnValue</code> 设为 <code>true:</code> </li>
</ul>
<div class="fragment"><pre class="fragment">    var onBeforeNavigate2 = function(disp, url, flags, target, postData, headers, cancel)
    {
        cancel.returnValue = <span class="keyword">true</span>;
    };
    com.connectEvents(<a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#a426d92f4370abff654c9a85a060c25c9" title="Readonly. Returns WebBrowser Object of current browser. Help transparently moving forth and back betw...">webBrowser</a>, {<span class="stringliteral">&#39;BeforeNavigate2&#39;</span>:onBeforeNavigate2});
</pre></div><h3><a class="anchor" id="howto_pass_para_2_nav_page"></a>
如何给即将转去的页面传递参数？</h3>
<p>当页面切换时，前一页面中所有的JavaScript 变量都不存在了。但是保存到 <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">localJS.windowDict</a> 中的变量依然存在。</p>
<ul>
<li>把参数保存在 <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">localJS.windowDict</a> 中，下个页面就能够访问到它们。</li>
</ul>
<h3><a class="anchor" id="howto_data_lost_reload"></a>
如何防止页面刷新的时候丢失数据？</h3>
<p>当页面刷新时，页面中所有的JavaScript 变量都不存在了。但是保存到 <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">localJS.windowDict</a> 中的变量依然不变。</p>
<ul>
<li>把数据保存在 <a class="el" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">localJS.windowDict</a> 中就可以防止在页面刷新的时候丢失数据：</li>
</ul>
<div class="fragment"><pre class="fragment">    var persist_data;

    window.attachEvent(<span class="stringliteral">&quot;onload&quot;</span>, function()
    {
        var windowDict = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">windowDict</a>;
        <span class="keywordflow">if</span> (windowDict.Exists(<span class="stringliteral">&quot;key_to_persist_data&quot;</span>))
            persist_data = windowDict.Item(<span class="stringliteral">&quot;key_to_persist_data&quot;</span>);
    }};
    window.attachEvent(<span class="stringliteral">&quot;onunload&quot;</span>, function()
    {
        var windowDict = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ad22e31bcafab13df9916ae10ec5ee3fa" title="ReadOnly. Returns a Dictionary Object associated with current browser window. An ideal persistent sto...">windowDict</a>;
        windowDict.Item(<span class="stringliteral">&quot;key_to_persist_data&quot;</span>) = persist_data;
    }};
</pre></div><h3><a class="anchor" id="howto_f5"></a>
如何防止用户按F5 键刷新页面？</h3>
<p>即使有了localJS.windowDict, 处理页面刷新的逻辑还是有点麻烦的。</p>
<ul>
<li>把 <a class="el" href="interfacelocal_j_s.php#a29a79e553fe87184f3a6ed6a9e0b270f" title="Get or set a boolean value to control whether pressing F5 key reloads HTML page. Ignored by standalon...">localJS.enableF5</a> 设为<code>false</code> 就能防止用户按F5 键刷新页面。</li>
</ul>
<h2><a class="anchor" id="howto_new_wnd"></a>
Launching New Browser Window</h2>
<h3><a class="anchor" id="howto_new_wnd_by_js"></a>
How to launch a new LocalJS browser window from within JavaScript?</h3>
<ul>
<li>Call <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc">LOCALJS.UI.newWindow</a>.</li>
</ul>
<h3><a class="anchor" id="howto_new_wnd_by_click"></a>
How to launch a new LocalJS browser window when user clicks a link?</h3>
<ul>
<li>Assign a function to <a class="el" href="interface_u_i.php#a474aa92c6232d183575e5986f50a35a2">LOCALJS.UI.newWindowCallback</a>. </li>
<li>Create a new browser window with <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc">LOCALJS.UI.newWindow</a> in the function.</li>
</ul>
<p>Refer to <a class="el" href="interface_u_i.php#a474aa92c6232d183575e5986f50a35a2">LOCALJS.UI.newWindowCallback</a> for an example.</p>
<h3><a class="anchor" id="howto_interop_other_wnd"></a>
How to interop with JavaScript in another LocalJS browser window?</h3>
<ul>
<li>Call <a class="el" href="interface_browser_window.php#a280f7ebe3df2ce474a5852d5cd2191d7" title="Returns the global variable or function defined in the browser window page by name.">BrowserWindow.getJSVariable</a> to get the global variable or function by name defined in another LocalJS browser window. </li>
<li>Use the function or variable just like in same page.</li>
</ul>
<h3><a class="anchor" id="howto_global_dict"></a>
How to make a variable global to JavaScript in all LocalJS browser windows?</h3>
<ul>
<li>Save global variable to <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">localJS.globalDict</a>.</li>
</ul>
<h3><a class="anchor" id="howto_shell_exec"></a>
How to open a url in system default browser?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a7c00c5f992f9567ec7b69d6e3cf25934">LOCALJS.FILE.exec</a>.</li>
</ul>
<h2><a class="anchor" id="howto_file_access"></a>
Access Folders and Files</h2>
<h3><a class="anchor" id="howto_user_data_folder"></a>
How to retrieve user data folder?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a6181d0579cb9654e86cd506737f0475f">LOCALJS.FILE.getAppDataFolder</a>.</li>
</ul>
<h3><a class="anchor" id="howto_create_folder"></a>
How to create folder in disk?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a11c4eb341be6b3dcf3f2ce9d855b058e">LOCALJS.FILE.createFolder</a>.</li>
</ul>
<h3><a class="anchor" id="howto_save_2_file"></a>
How to save settings to disk files?</h3>
<ul>
<li>To use INI file to save settings, call <a class="el" href="interface_f_i_l_e.php#ab82c10757856fbd93d04603ce226cb38">LOCALJS.FILE.iniWrite</a>. Read with functions <a class="el" href="interface_f_i_l_e.php#a0f1894aaa83f22c87ac4cfc0f3ff05be">LOCALJS.FILE.iniReadInt</a> and <a class="el" href="interface_f_i_l_e.php#a3130fd3652e1b86373b61cfc0348981e">LOCALJS.FILE.iniReadStr</a>. </li>
<li>To save UTF8 format setting into files, call <a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">LOCALJS.FILE.writeFileUTF8</a>. Read with function <a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">LOCALJS.FILE.readFileUTF8</a>.</li>
</ul>
<h3><a class="anchor" id="howto_save_2_reg"></a>
How to save settings to registry?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a461f0e68e5dc507ba50ac94d56a2cfcd">LOCALJS.FILE.regWrite</a>. </li>
<li>Read with function <a class="el" href="interface_f_i_l_e.php#ae283d76f4b92fd2f67e1db96f607e70c">LOCALJS.FILE.regRead</a>.</li>
</ul>
<h3><a class="anchor" id="howto_utf_8"></a>
How to access file in utf-8 format?</h3>
<ul>
<li>To write UTF8 format text files, call <a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">LOCALJS.FILE.writeFileUTF8</a>. </li>
<li>To read UTF8 format text files, call <a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">LOCALJS.FILE.readFileUTF8</a>.</li>
</ul>
<h3><a class="anchor" id="howto_browse_file"></a>
How to browse for a file?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a561e6ec182a20ebe1d85653d67b0ae44">LOCALJS.FILE.browseFile</a>.</li>
</ul>
<h3><a class="anchor" id="howto_browse_folder"></a>
How to browse for folder?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a5ddc249346092c53b6e0fadd644a0fb7">LOCALJS.FILE.browseFolder</a>.</li>
</ul>
<h3><a class="anchor" id="howto_enum_file"></a>
How to enumerate files in a folder?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#af20f5de0d692771dafbeef7fb57fc500">LOCALJS.FILE.listFolder</a>.</li>
</ul>
<h2><a class="anchor" id="howto_sys_info"></a>
Retrieve System Information</h2>
<h3><a class="anchor" id="howto_get_exe"></a>
How to get current exe file name?</h3>
<ul>
<li>Call <a class="el" href="interface_f_i_l_e.php#a943b822f2c3c6f32774e389330bd6a63">LOCALJS.FILE.getExeFilename</a>.</li>
</ul>
<h3><a class="anchor" id="howto_wmi"></a>
How to get system information (for example, processors descriptions)?</h3>
<ul>
<li>Get instance of <a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">Windows Management Instrumentation (WMI) object</a> through <a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">COM.getObject</a>; </li>
<li>Retrieve system information through <a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">WMI object</a>; </li>
<li>Create <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> object with <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> method to enumerate collection returned by <a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">WMI object</a>.</li>
</ul>
<p>Refer to <a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">COM.getObject</a> for an example.</p>
<h3><a class="anchor" id="howto_enumerate"></a>
How to enumerate items in collection (e.g., Files) returned by system object (e.g., FileSystemObject)?</h3>
<ul>
<li>Create <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> object with <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> method to enumerate collection returned by system object.</li>
</ul>
<div class="fragment"><pre class="fragment">    var fso = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Scripting.FileSystemObject&quot;</span>),
        folder = fso.GetFolder(<a class="code" href="interface_l_o_c_a_l_j_s.php" title="The root object of all LocalJS Basic objects. Need to include JavaScript files from LOCALJS Open Sour...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="Returns FILE object, which provides methods for common file and registry operations. Include localjs_file.js, localjs_ui.js and localjs_webservice.js to use it.">FILE</a>.getProgramFolder()),
        fc = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Enumerator&quot;</span>, folder.Files),
        s = <span class="stringliteral">&quot;&quot;</span>;

    <span class="keywordflow">for</span> (; !fc.atEnd(); fc.moveNext())
    {
        s += fc.item();
        s += <span class="stringliteral">&quot;&lt;br/&gt;&quot;</span>;
    }
    alert(s);
</pre></div><h2><a class="anchor" id="howto_db"></a>
Local Database Access</h2>
<h3><a class="anchor" id="howto_access_db"></a>
How to access local database?</h3>
<ul>
<li>Create <a href="http://www.w3schools.com/ado/ado_ref_connection.asp" target="_blank">ADO Connection object</a> with <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a>; </li>
<li>Use properties and methods of <a href="http://www.w3schools.com/ado/ado_ref_connection.asp" target="_blank">ADO Connection object</a> to access database just like in other scripting languages.</li>
</ul>
<p>Code below opens an <a href="http://www.w3schools.com/ado/ado_ref_connection.asp" target="_blank">ADO Connection</a> to an excel <a href="file:">file:</a></p>
<div class="fragment"><pre class="fragment">    var openExcelFile = function(excel_file)
    {
        var cn = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;ADODB.Connection&quot;</span>);
        cn.Provider = <span class="stringliteral">&quot;Microsoft.Jet.OLEDB.4.0&quot;</span>;
        cn.ConnectionString = <span class="stringliteral">&quot;Data Source=&quot;</span> + excel_file + <span class="stringliteral">&quot;;Extended Properties=Excel 8.0;&quot;</span>
        cn.Open();
    }
</pre></div><h2><a class="anchor" id="howto_web_service"></a>
Call Web Service from any domain</h2>
<h3><a class="anchor" id="howto_call_ws"></a>
How to call web service from other domains?</h3>
<ul>
<li>Call <a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php#a7eb6ada1e0326fa0119b999ab83efd55">LOCALJS.WEB_SERVICE.callUrl</a>.</li>
</ul>
<h3><a class="anchor" id="howto_json"></a>
How to parse JSON format web response?</h3>
<p>Refer to <a class="el" href="tutorial_js4cpp.php#js4cpp_json">Build in JSON Parser</a>.</p>
<h2><a class="anchor" id="howto_thread"></a>
Multithreading</h2>
<h3><a class="anchor" id="howto_new_thread"></a>
How to start a new thread?</h3>
<ul>
<li>Start new thread with method <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a>.</li>
</ul>
<h3><a class="anchor" id="howto_thread_end"></a>
How to tell if a thread has ended?</h3>
<ul>
<li>Use property <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a>.</li>
</ul>
<h3><a class="anchor" id="howto_thread_sync"></a>
How to synchronize data access among threads?</h3>
<ul>
<li>Thread synchronization becomes <em>EXTREMELY</em> <em>SIMPLE</em> for localJS script: you don't need to synchronize access to variables from different script threads; they will be synchronized automatically.</li>
</ul>
<p>Refer to section <em>Synchronization</em> of <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a> description. </p>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
