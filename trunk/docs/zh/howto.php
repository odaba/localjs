<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: 如何做到 ...";
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
h3{font-weight:normal;}
h2{font-weight:normal;}
div.jump_index a.el{font-weight:normal}
</style>
 
<style>
h3{color:blue}
h2{color:green}
div.jump_index div.myli{margin-left:0}
</style>
<div class="jump_index">
<div class="myli"><a class="el" href="howto.php#howto_start_up">LocalJS 起步</a></div> <ul>
<li><a class="el" href="howto.php#howto_start_local_js">如何把网站变成LocalJS 桌面程序？</a> </li>
<li><a class="el" href="howto.php#howto_access_objects">如何在JavaScript 代码中使用LocalJS 对象？</a> </li>
<li><a class="el" href="howto.php#howto_debug">如何调试JavaScript？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_browser_wnd">控制页面窗口</a></div> <ul>
<li><a class="el" href="howto.php#howto_move_wnd">如何用JavaScript 在桌面上移动页面窗口？</a> </li>
<li><a class="el" href="howto.php#howto_change_wnd_style">如何用JavaScript 显示或隐藏页面窗口的标题栏？</a> </li>
<li><a class="el" href="howto.php#howto_popup_msg">如何弹出一个比JavaScript 的alert 好看些的消息框？</a> </li>
<li><a class="el" href="howto.php#howto_close_wnd">如何用JavaScript 关闭页面窗口？</a> </li>
<li><a class="el" href="howto.php#howto_confirm_close">如何在用户关闭页面窗口时弹出确认对话框？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_navigation">在不同页面之间切换</a></div> <ul>
<li><a class="el" href="howto.php#howto_get_webbrowser">如何得到当前页面窗口的WebBrowser 对象？</a> </li>
<li><a class="el" href="howto.php#howto_nav_2_local">如何从web 页面切换到本地页面？</a> </li>
<li><a class="el" href="howto.php#howto_cancel_nav">如何取消页面切换？</a> </li>
<li><a class="el" href="howto.php#howto_pass_para_2_nav_page">如何给即将转去的页面传递参数？</a> </li>
<li><a class="el" href="howto.php#howto_data_lost_reload">如何防止页面刷新的时候丢失数据？</a> </li>
<li><a class="el" href="howto.php#howto_f5">如何防止用户按F5 键刷新页面？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_new_wnd">创建新的页面窗口</a></div> <ul>
<li><a class="el" href="howto.php#howto_new_wnd_by_js">如何在JavaScript 中创建一个新的页面窗口？</a> </li>
<li><a class="el" href="howto.php#howto_new_wnd_by_click">当用户在新窗口中打开链接的时候，如何创建自定义的浏览器窗口？</a> </li>
<li><a class="el" href="howto.php#howto_interop_other_wnd">如何和其他页面窗口中的JavaScript 互操作？</a> </li>
<li><a class="el" href="howto.php#howto_global_dict">如何在所有的页面窗口之间共享变量？</a> </li>
<li><a class="el" href="howto.php#howto_shell_exec">如何在系统默认浏览器中打开一个url？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_file_access">访问文件和文件夹</a></div> <ul>
<li><a class="el" href="howto.php#howto_user_data_folder">如何得到用户的个人数据文件夹？</a> </li>
<li><a class="el" href="howto.php#howto_create_folder">如何创建本地文件夹？</a> </li>
<li><a class="el" href="howto.php#howto_save_2_file">如何在本地文件中保存设置？</a> </li>
<li><a class="el" href="howto.php#howto_save_2_reg">如何在注册表中保存设置？</a> </li>
<li><a class="el" href="howto.php#howto_utf_8">如何读写UTF-8 格式的文本文件？</a> </li>
<li><a class="el" href="howto.php#howto_browse_file">如何弹出一个文件选择对话框？</a> </li>
<li><a class="el" href="howto.php#howto_browse_folder">如何弹出一个文件夹选择对话框？</a> </li>
<li><a class="el" href="howto.php#howto_enum_file">如何得到文件夹中的文件列表？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_sys_info">获取系统信息</a></div> <ul>
<li><a class="el" href="howto.php#howto_get_exe">如何得到当前的可执行程序文件名？</a> </li>
<li><a class="el" href="howto.php#howto_wmi">如何获取系统信息，比如处理器的描述？</a> </li>
<li><a class="el" href="howto.php#howto_enumerate">某些系统对象（比如FileSystemObject）的属性（比如Files）返回集合对象（collection）。如何遍历集合对象中的内容？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_db">本地数据库访问</a></div> <ul>
<li><a class="el" href="howto.php#howto_access_db">如何访问本地数据库？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_web_service">调用任意域的Web 服务</a></div> <ul>
<li><a class="el" href="howto.php#howto_call_ws">如何调用其他域的Web 服务？</a> </li>
<li><a class="el" href="howto.php#howto_json">如何解析web 服务返回的JSON 格式的字符串？</a></li>
</ul>
<div class="myli"><a class="el" href="howto.php#howto_thread">多线程</a></div> <ul>
<li><a class="el" href="howto.php#howto_new_thread">如何创建一个新线程？</a> </li>
<li><a class="el" href="howto.php#howto_thread_end">如何知道一个线程是否已经结束？</a> </li>
<li><a class="el" href="howto.php#howto_thread_sync">如何同步线程对共享数据的访问？</a></li>
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
<li>调用 <a class="el" href="interface_u_i.php#a48bb86d6512ddef0a89997f6f26b28bb">LOCALJS.UI.moveWindow</a>.</li>
</ul>
<h3><a class="anchor" id="howto_change_wnd_style"></a>
如何用JavaScript 显示或隐藏页面窗口的标题栏？</h3>
<ul>
<li>调用 <a class="el" href="interface_u_i.php#a8661d51c7e5389632e89177abfd92a45">LOCALJS.UI.showTitleBar</a>.</li>
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
<ul>
<li>调用 <a class="el" href="interface_u_i.php#a8e8c34b33f063c99f3c36b7916e396b9">LOCALJS.UI.confirm</a> in the function to prompt user.</li>
</ul>
<p>Refer to <a class="el" href="interface_u_i.php#a336a7e8690beb99db79da34c2a1f2810">LOCALJS.UI.exitCallback</a> for sample code.</p>
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
创建新的页面窗口</h2>
<h3><a class="anchor" id="howto_new_wnd_by_js"></a>
如何在JavaScript 中创建一个新的页面窗口？</h3>
<ul>
<li>调用 <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc">LOCALJS.UI.newWindow</a>.</li>
</ul>
<h3><a class="anchor" id="howto_new_wnd_by_click"></a>
当用户在新窗口中打开链接的时候，如何创建自定义的浏览器窗口？</h3>
<p>默认状态下，当用户在新窗口中打开链接的时候，LocalJS 会创建一个新的页面窗口来打开这个链接；这个新页面窗口中的JavaScript 代码可以初始化这个新的页面窗口，比如设置标题栏，窗口位置等。但是有时，你也许希望能在新页面窗口打开链接之前初始化它。这种情况下，你可以创建一个自定义的浏览器窗口，并在其中打开链接。</p>
<ul>
<li>把一个自定义函数赋给 <a class="el" href="interface_u_i.php#a474aa92c6232d183575e5986f50a35a2">LOCALJS.UI.newWindowCallback</a>. </li>
<li>在该自定义函数中用 <a class="el" href="interface_u_i.php#a1affe0f3629c5b39d93ba05fd54fc3fc">LOCALJS.UI.newWindow</a> 创建一个自定义的新窗口。</li>
</ul>
<p>示例代码参见 <a class="el" href="interface_u_i.php#a474aa92c6232d183575e5986f50a35a2">LOCALJS.UI.newWindowCallback</a>.</p>
<h3><a class="anchor" id="howto_interop_other_wnd"></a>
如何和其他页面窗口中的JavaScript 互操作？</h3>
<ul>
<li>调用 <a class="el" href="interface_browser_window.php#a280f7ebe3df2ce474a5852d5cd2191d7" title="Returns the global variable or function defined in the browser window page by name.">BrowserWindow.getJSVariable</a> 可以根据变量名得到其他页面窗口中定义的全局变量或函数。 </li>
<li>可以像在同一页面中一样使用上一步得到的全局变量或函数。</li>
</ul>
<h3><a class="anchor" id="howto_global_dict"></a>
如何在所有的页面窗口之间共享变量？</h3>
<ul>
<li>把变量存入 <a class="el" href="interfacelocal_j_s.php#a3db8e9f0672a2aed8a468da67db3b2e1" title="ReadOnly. Returns a Dictionary Object globally available in the process. An ideal global persistent s...">localJS.globalDict</a>, 所有的页面窗口都能访问到它。</li>
</ul>
<h3><a class="anchor" id="howto_shell_exec"></a>
如何在系统默认浏览器中打开一个url？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#a7c00c5f992f9567ec7b69d6e3cf25934">LOCALJS.FILE.exec</a>.</li>
</ul>
<h2><a class="anchor" id="howto_file_access"></a>
访问文件和文件夹</h2>
<h3><a class="anchor" id="howto_user_data_folder"></a>
如何得到用户的个人数据文件夹？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#a6181d0579cb9654e86cd506737f0475f">LOCALJS.FILE.getAppDataFolder</a>.</li>
</ul>
<h3><a class="anchor" id="howto_create_folder"></a>
如何创建本地文件夹？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#a11c4eb341be6b3dcf3f2ce9d855b058e">LOCALJS.FILE.createFolder</a>.</li>
</ul>
<h3><a class="anchor" id="howto_save_2_file"></a>
如何在本地文件中保存设置？</h3>
<ul>
<li>如果要使用INI 文件保存设置，调用 <a class="el" href="interface_f_i_l_e.php#ab82c10757856fbd93d04603ce226cb38">LOCALJS.FILE.iniWrite</a>. 调用函数 <a class="el" href="interface_f_i_l_e.php#a0f1894aaa83f22c87ac4cfc0f3ff05be">LOCALJS.FILE.iniReadInt</a> 和 <a class="el" href="interface_f_i_l_e.php#a3130fd3652e1b86373b61cfc0348981e">LOCALJS.FILE.iniReadStr</a> 从INI 文件中读取设置。 </li>
<li>如果要把UTF-8 格式的文本存入文件，调用 <a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">LOCALJS.FILE.writeFileUTF8</a>. 调用函数 <a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">LOCALJS.FILE.readFileUTF8</a> 读取文本。</li>
</ul>
<h3><a class="anchor" id="howto_save_2_reg"></a>
如何在注册表中保存设置？</h3>
<ul>
<li>调用函数 <a class="el" href="interface_f_i_l_e.php#a461f0e68e5dc507ba50ac94d56a2cfcd">LOCALJS.FILE.regWrite</a> 写入注册表。 </li>
<li>调用函数 <a class="el" href="interface_f_i_l_e.php#ae283d76f4b92fd2f67e1db96f607e70c">LOCALJS.FILE.regRead</a> 读注册表。</li>
</ul>
<h3><a class="anchor" id="howto_utf_8"></a>
如何读写UTF-8 格式的文本文件？</h3>
<ul>
<li>调用函数 <a class="el" href="interface_f_i_l_e.php#a79aabfb4240680c61bf91440ff6e9823">LOCALJS.FILE.writeFileUTF8</a> 把UTF-8 格式的文本写入文件。 </li>
<li>调用函数 <a class="el" href="interface_f_i_l_e.php#af18bb442d4a17a21806d850fab3dcb99">LOCALJS.FILE.readFileUTF8</a> 从UTF-8 格式的文件中读取文本。</li>
</ul>
<h3><a class="anchor" id="howto_browse_file"></a>
如何弹出一个文件选择对话框？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#af5c1df26a65e2ba2aab9500ccdf23495">LOCALJS.FILE.browseFile</a>.</li>
</ul>
<h3><a class="anchor" id="howto_browse_folder"></a>
如何弹出一个文件夹选择对话框？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#a5ddc249346092c53b6e0fadd644a0fb7">LOCALJS.FILE.browseFolder</a>.</li>
</ul>
<h3><a class="anchor" id="howto_enum_file"></a>
如何得到文件夹中的文件列表？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#af20f5de0d692771dafbeef7fb57fc500">LOCALJS.FILE.listFolder</a>.</li>
</ul>
<h2><a class="anchor" id="howto_sys_info"></a>
获取系统信息</h2>
<h3><a class="anchor" id="howto_get_exe"></a>
如何得到当前的可执行程序文件名？</h3>
<ul>
<li>调用 <a class="el" href="interface_f_i_l_e.php#a943b822f2c3c6f32774e389330bd6a63">LOCALJS.FILE.getExeFilename</a>.</li>
</ul>
<h3><a class="anchor" id="howto_wmi"></a>
如何获取系统信息，比如处理器的描述？</h3>
<ul>
<li>调用 <a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">COM.getObject</a> 方法得到<a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">Windows Management Instrumentation (WMI) 对象</a>； </li>
<li>调用<a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">WMI 对象</a>获取系统信息; </li>
<li>调用 <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> 方法创建 <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> 对象来遍历<a href="http://technet.microsoft.com/en-us/library/bb684728.aspx" target="_blank">WMI 对象</a>返回的集合对象（collection）中的内容。</li>
</ul>
<p>示例代码参见 <a class="el" href="interface_c_o_m.php#aa5d75d3298d5de451ecbead91d92b32d" title="Get reference to COM object by displayName, optionally specify ProgID for the object to be created...">COM.getObject</a>.</p>
<h3><a class="anchor" id="howto_enumerate"></a>
某些系统对象（比如FileSystemObject）的属性（比如Files）返回集合对象（collection）。如何遍历集合对象中的内容？</h3>
<ul>
<li>使用 <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> 方法创建 <a class="el" href="interface_enumerator.php" title="Similar to Enumerator object in JScript, providing access to items in Collection object.">Enumerator</a> 对象来遍历集合对象（collection）中的内容。</li>
</ul>
<div class="fragment"><pre class="fragment">    var fso = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Scripting.FileSystemObject&quot;</span>),
        folder = fso.GetFolder(<a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a49ca3d2aae1b4847965178deb5633261" title="返回 FILE 对象，它提供了常用的文件和注册表操作。需要包含localjs_file.js，localjs_ui.js 和 localjs_webservice.js。">FILE</a>.getProgramFolder()),
        fc = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;Enumerator&quot;</span>, folder.Files),
        s = <span class="stringliteral">&quot;&quot;</span>;

    <span class="keywordflow">for</span> (; !fc.atEnd(); fc.moveNext())
    {
        s += fc.item();
        s += <span class="stringliteral">&quot;&lt;br/&gt;&quot;</span>;
    }
    alert(s);
</pre></div><h2><a class="anchor" id="howto_db"></a>
本地数据库访问</h2>
<h3><a class="anchor" id="howto_access_db"></a>
如何访问本地数据库？</h3>
<ul>
<li>调用 <a class="el" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">COM.createObject</a> 方法创建 <a href="http://www.w3schools.com/ado/ado_ref_connection.asp" target="_blank">ADO Connection 对象</a>； </li>
<li>和其他script 语言一样，调用 <a href="http://www.w3schools.com/ado/ado_ref_connection.asp" target="_blank">ADO Connection 对象</a>的属性和方法访问数据库。</li>
</ul>
<p>下面的例子打开一个到Excel 文件的数据库连接：</p>
<div class="fragment"><pre class="fragment">    var openExcelFile = function(excel_file)
    {
        var cn = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>.<a class="code" href="interface_c_o_m.php#a14285e3676c39b414cac2652046ec881" title="Create COM object by ProgID, optionally specify object location.">createObject</a>(<span class="stringliteral">&quot;ADODB.Connection&quot;</span>);
        cn.Provider = <span class="stringliteral">&quot;Microsoft.Jet.OLEDB.4.0&quot;</span>;
        cn.ConnectionString = <span class="stringliteral">&quot;Data Source=&quot;</span> + excel_file + <span class="stringliteral">&quot;;Extended Properties=Excel 8.0;&quot;</span>
        cn.Open();
    }
</pre></div><h2><a class="anchor" id="howto_web_service"></a>
调用任意域的Web 服务</h2>
<h3><a class="anchor" id="howto_call_ws"></a>
如何调用其他域的Web 服务？</h3>
<ul>
<li>调用 <a class="el" href="interface_w_e_b___s_e_r_v_i_c_e.php#a7eb6ada1e0326fa0119b999ab83efd55">LOCALJS.WEB_SERVICE.callUrl</a>.</li>
</ul>
<h3><a class="anchor" id="howto_json"></a>
如何解析web 服务返回的JSON 格式的字符串？</h3>
<p>参见 <a class="el" href="tutorial_js4cpp.php#js4cpp_json">Build in JSON Parser</a>.</p>
<h2><a class="anchor" id="howto_thread"></a>
多线程</h2>
<h3><a class="anchor" id="howto_new_thread"></a>
如何创建一个新线程？</h3>
<ul>
<li>调用 <a class="el" href="interface_threading.php#ab83b569dcb6b1ed35d6e9f13a8376a64" title="Create new script thread with optional arguments. Returns Thread object represents the new thread...">Threading.newThread</a> 创建新线程。</li>
</ul>
<h3><a class="anchor" id="howto_thread_end"></a>
如何知道一个线程是否已经结束？</h3>
<ul>
<li>检查属性 <a class="el" href="interface_thread.php#a2bb58b88ac256b165a95a806ae3b41e5" title="ReadOnly. Returns true if the thread is running, false if the thread has ended.">Thread.running</a>.</li>
</ul>
<h3><a class="anchor" id="howto_thread_sync"></a>
如何同步线程对共享数据的访问？</h3>
<ul>
<li>LocalJS 的线程同步<span class="red">非常简单</span>：你不需要考虑同步问题；所有对共享数据的访问都会被自动同步。</li>
</ul>
<p>参见<a href="interface_threading.php#synchronization" class="el">线程同步</a>. </p>
</div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
