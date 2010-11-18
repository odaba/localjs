<?php
require_once('../../_config.php');
$doxygen_title = "LocalJS: JavaScript Jump Start For C++ Programmers";
include_once($base_path.'/_include/common_header_part1.php');
?>
<title>LocalJS: JavaScript Jump Start For C++ Programmers</title>
<?php include_once($base_path.'/_include/doxygen_header.php'); ?>
<!-- 制作者 Doxygen 1.7.2 -->
<script type="text/javascript"><!--
var searchBox = new SearchBox("searchBox", "search",false,'搜索');
--></script>
<div class="header">
  <div class="headertitle">
<h1>JavaScript Jump Start For C++ Programmers </h1>  </div>
</div>
<div class="contents">
<p>By Martin, author of LocalJS</p>
<p>Quick jump link: </p>
<ul>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_var_scope">Variable Scope</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_func_var">Functions are Variables</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_closure">Closure</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_namespace">Namespace in JavaScript</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_hash_obj">Named Arguments</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_json">Build in JSON Parser</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_public_private">Public and Private Members</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_oop">JavaScript OOP Methods Not Available in C++</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_optimize">Optimize JavaScript for Compressor</a> </li>
<li><a class="el" href="tutorial_js4cpp.php#js4cpp_doctype">DOCTYPE</a></li>
</ul>
<p>I originally came from C++ background. For a long time, I had thought JavaScript is a simple language which is only capable of handling DHTML event inside browser with several lines of code. That was because I barely knew much about JavaScript. As far as I know, lots of C++ programmers are not familiar with scripting languages too, and because C++ is famous of efficiency and speed, some of them are proud of knowing C++ well, not willing to learn scripting languages.</p>
<p><a href="http://developer.yahoo.com/yui/" target="_blank">YUI</a> gave me the first hit when I tried to develop some rich interactive web applications. Later I learned a lot from <a href="http://developer.yahoo.com/yui/" target="_blank">YUI</a> and other open source JavaScript libraries like <a href="http://jquery.com/" target="_blank">jQuery</a>. Here I want to share some of my experience of learning JavaScript; if you are also from C++ background and happen to be not familiar with JavaScript, after reading this article, you may start to think JavaScript differently than before. If you do, I will be very happy that I helped someone to find a new world: Welcome to JavaScript!</p>
<h2><a class="anchor" id="js4cpp_var_scope"></a>
Variable Scope</h2>
<p>In JavaScript, variable can be defined with or without var. The scope of variables (global or local) is determined as below:</p>
<div class="fragment"><pre class="fragment">    var i = 0; <span class="comment">// global variable: defined with var, and not in any function body</span>
    j = 10; <span class="comment">// global variable: variables not defined with var are always global.</span>

    function some_finc()
    {
        var k = 8; <span class="comment">// local variable: defined with var in function body</span>
        p = 9; <span class="comment">// global variable: variables not defined with var are always global.</span>
    };
</pre></div><p>However, variables will not be silently defined for the first usage. Try to use a variable not defined triggers an error:</p>
<div class="fragment"><pre class="fragment">    var i = H + 9; <span class="comment">// error, H is not defined.</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>global variables become properties of <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">JavaScript object window</a>, thus can be accessed by <code>window.variable_name</code>.</dd></dl>
<h2><a class="anchor" id="js4cpp_func_var"></a>
Functions are Variables</h2>
<p>We all get used to how a function is declared traditionally:</p>
<div class="fragment"><pre class="fragment">    var factor = 10;

    function some_func(para1, para2)
    {
        <span class="keywordflow">return</span> para1 * para2 * factor;
    };

    var result = some_func(1, 2); <span class="comment">// result is 20</span>
</pre></div><p>However, in JavaScript you can also do:</p>
<div class="fragment"><pre class="fragment">    var factor = 10;

    var some_func = function(para1, para2)
    {
        <span class="keywordflow">return</span> para1 * para2 * factor;
    };

    var result = some_func(1, 2); <span class="comment">// result is 20</span>
</pre></div><p>This is something similar to function object, or lambda expression in C++. A function can be saved into a variable, referring variables defined out of the function body, be passed to other function as parameter and get called correctly.</p>
<dl class="note"><dt><b>注解:</b></dt><dd>JavaScript function refers variables defined out of the functon body by reference, which means when the function is defined, those variables do not have to be initialized; it's OK as long as when the function is called, those variables have been initialized.</dd></dl>
<p>Code below demostrates this:</p>
<div class="fragment"><pre class="fragment">    var factor = 0;

    var some_func = function(para1, para2)
    {
        <span class="keywordflow">return</span> para1 * para2 * factor;
    };

    factor = 10;
    var result = some_func(1, 2); <span class="comment">// result is 20, not zero</span>
</pre></div><dl class="note"><dt><b>注解:</b></dt><dd>Functions saved to global variables are global functions, which also become properties of <a href="http://www.javascriptkit.com/jsref/window.shtml" target="_blank">JavaScript object window</a>, and can be accessed by <code>window.function_name</code>.</dd></dl>
<dl class="user"><dt><b>Anonymous Function</b></dt><dd>Similar to anonymous function object in C++, in JavaScript anonymous function is also widely used. Anonymous functions are simply anonymous variables:</dd></dl>
<div class="fragment"><pre class="fragment">    var some_func = function(callback, para1, para2)
    {
        <span class="keywordflow">return</span> callback(para1, para2);
    }

    var result = some_func(function(p1, p2) { <span class="keywordflow">return</span> p1 * p2; }, <span class="comment">// this defines an anonymous fuction</span>
                           10, 5); <span class="comment">// result is 50</span>
</pre></div><h2><a class="anchor" id="js4cpp_closure"></a>
Closure</h2>
<p>Closure is often seen in JavaScript libraries, because it limits variable scope very well. The grammar of closure looks like this:</p>
<div class="fragment"><pre class="fragment">    (function()
    {
        <span class="comment">// JavaScript code goes here.</span>
    })();
</pre></div><p>It did confuse me the first time I saw it. I didn't understand why so many (){} ? :-)</p>
<p>It's easier to understand this as long as keep in mind that <a class="el" href="tutorial_js4cpp.php#js4cpp_func_var">Functions are Variables</a>. Suppose we have function <code>some_func</code> defined and get called as below:</p>
<div class="fragment"><pre class="fragment">    var some_func = function(p1, p2){ <span class="keywordflow">return</span> 1; };
    some_func(v1, v2);
</pre></div><p>If we replace variable <code>some_func</code> with the fuction statement itself, we need to put the function statement inside a pair of ( and ). This doesn't change any grammar meaning since anonymous functions are simply anonymous variables. so the code becomes:</p>
<div class="fragment"><pre class="fragment">    ( function(p1, p2){ <span class="keywordflow">return</span> 1; } )(v1, v2);
</pre></div><p>Next if we remove parameters and spaces, it becomes:</p>
<div class="fragment"><pre class="fragment">    (function(){ <span class="keywordflow">return</span> 1; })();
</pre></div><p>That's it!</p>
<p>Closure is often used to wrap up a group of logic into an anonymous function, so all local functions and variables inside the closure have closure scope. This makes it much easier to build plugin for a JavaScript framework than for a C++ one. A famous free JavaScript library, <a href="http://jquery.com/" target="_blank">jQuery</a>, has lots of free plugins.</p>
<h2><a class="anchor" id="js4cpp_namespace"></a>
Namespace in JavaScript</h2>
<p>Although <a class="el" href="tutorial_js4cpp.php#js4cpp_closure">Closure</a> solves most of naming conflicts, there are cases when you do want to expose your code to global namespace. JavaScript doesn't support namespace in grammar, but same result can be achieved using <a href="http://www.javascriptkit.com/jsref/object.shtml" target="_blank">JavaScript Object object</a> (It's not a typo. :-)).</p>
<p>To create a global namespace, define a global object with the name of the namespace:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a> = {};
</pre></div><p>Functions, variable and sub namespace can be added as below:</p>
<div class="fragment"><pre class="fragment">    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.helper_doc = [<span class="stringliteral">&#39;Help1&#39;</span>, <span class="stringliteral">&#39;Help2&#39;</span>];
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.helper_func = function(<span class="keywordtype">id</span>) { <span class="keywordflow">return</span> <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.helper_doc[id]; }

    <span class="comment">// a subnamespace:</span>
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="返回 UI object，它提供了常用的 UI 操作。需要包含 localjs_ui.js。">UI</a> = {};
    <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>.<a class="code" href="interface_l_o_c_a_l_j_s.php#a88c39a8606c41168abfe2e3d8d0198c9" title="返回 UI object，它提供了常用的 UI 操作。需要包含 localjs_ui.js。">UI</a>.doevents = function(){};
</pre></div><p>Namespace and functions belong to it can be referred by a local variable when used, to make code looks simpler:</p>
<div class="fragment"><pre class="fragment">    var ljs = <a class="code" href="interface_l_o_c_a_l_j_s.php" title="所有 LocalJS 基本对象的根对象。要使用 LocalJS 基本对象，在 HTML 页面里包含 LocalJS Open Source Library 中的 JavaScript 文件。...">LOCALJS</a>,
        ui = ljs.ui,

        helper_func = ljs.helper_func,
        doevents = ui.doevents;

    doevents();
    helper_func(0);
</pre></div><h2><a class="anchor" id="js4cpp_hash_obj"></a>
Named Arguments</h2>
<p>In section above, we illustrated using <a href="http://www.javascriptkit.com/jsref/object.shtml" target="_blank">JavaScript Object object</a> (not a typo. :-)) for <a class="el" href="tutorial_js4cpp.php#js4cpp_namespace">Namespace in JavaScript</a>. <a href="http://www.javascriptkit.com/jsref/object.shtml" target="_blank">JavaScript Object object</a> behaves like <a href="http://msdn.microsoft.com/en-us/library/s44w4h2s.aspx" target="_blank">std.map</a> in <a href="http://msdn.microsoft.com/en-us/library/cscc687y.aspx" target="_blank">STL (Standard C++ Library)</a>, but with a much easier interface.</p>
<p>Another typical usage of <a href="http://www.javascriptkit.com/jsref/object.shtml" target="_blank">Object object</a> is to implement named arguments:</p>
<div class="fragment"><pre class="fragment">    var some_func = function(p)
    {
        <span class="keywordflow">return</span> p.left + p.right;
    }

    var result = some_func({left : 10, right : 20}); <span class="comment">// result is 30</span>
</pre></div><p>Named arguments makes code much easier to read and maintain over versions.</p>
<h2><a class="anchor" id="js4cpp_json"></a>
Build in JSON Parser</h2>
<p><a href="http://www.json.org/" target="_blank">JSON</a> is a lightweight data exchange format which is used more and more widely in web service and other fields. Most nowadays web services provide an option to return result in <a href="http://www.json.org/" target="_blank">JSON</a> format. It cannot be easier to parse <a href="http://www.json.org/" target="_blank">JSON</a> format string in JavaScript:</p>
<div class="fragment"><pre class="fragment">    var parseJSON = function(response_text)
    {
        <span class="keywordflow">return</span> (<span class="keyword">new</span> Function(<span class="stringliteral">&quot;return &quot;</span> + response_text))();
    };
</pre></div><h2><a class="anchor" id="js4cpp_public_private"></a>
Public and Private Members</h2>
<p>Call a JavaScript function with <code>new</code> operator returns a JavaScript Object. The function:</p>
<ul>
<li>is actually the constructor </li>
<li>keyword <code>this</code> in function body referrs to the object created, the function initializes <code>this</code> by assigning functions / properties to <code>this</code> </li>
<li>the function doesn't return a value with <code>return</code> statement</li>
</ul>
<p>Illistration:</p>
<div class="fragment"><pre class="fragment">    var fnObjectConstructor = function (parameter1, parameter2)
    {
        <span class="comment">// public property</span>
        this.para1 = parameter1;

        <span class="comment">// public method:</span>
        this.getPara2 = function () { <span class="keywordflow">return</span> parameter2; };
    };

    var obj = <span class="keyword">new</span> fnObjectConstructor(10, 50);
    alert(obj.para1); <span class="comment">// displays 10;</span>
    alert(obj.getPara2()); <span class="comment">// displays 50;</span>
</pre></div><p>To add a private member, create a variable limited to the function scope:</p>
<div class="fragment"><pre class="fragment">    var fnObjectConstructor = function (parameter1, parameter2)
    {
        <span class="comment">// private data member: not avaliable to code out of the object</span>
        var sum = parameter1 + parameter2;

        <span class="comment">// private function: not avaliable to code out of the object</span>
        var private_sum = function(a1, a2) { <span class="keywordflow">return</span> a1 + a2 + sum; };

        <span class="comment">// public method accessing private members:</span>
        this.getSum = function(a1, a2) { <span class="keywordflow">return</span> private_sum(a1, a2); };
    };

    var obj = <span class="keyword">new</span> fnObjectConstructor(10, 50);
    alert(obj.getSum(10, 30)); <span class="comment">// displays 100;</span>
</pre></div><h2><a class="anchor" id="js4cpp_oop"></a>
JavaScript OOP Methods Not Available in C++</h2>
<p>There are lots of good JavaScript tutorials about JavaScript and OOP. For example:</p>
<ul>
<li><a href="http://www.javascriptkit.com/javatutors/oopjs.shtml" target="_blank">JavaScript and OOP</a> </li>
<li><a href="http://www.javascriptkit.com/javatutors/object.shtml" target="_blank">Creating custom objects in JavaScript</a> </li>
<li><a href="http://www.javascriptkit.com/javatutors/proto.shtml" target="_blank">The prototype object of JavaScript 1.1</a></li>
</ul>
<p>Here I just want to highlight some JavaScript OOP methods which are unavailable in C++:</p>
<ul>
<li><em>Prototype</em>. Enable adding custom properties and methods to all instances of objects in same type, including pre-built JavaScript types like <a href="http://www.javascriptkit.com/jsref/string.shtml" target="_blank">String</a>. </li>
<li>Methods <code>apply</code> and <code>call</code> of <a href="http://www.javascriptkit.com/jsref/function.shtml" target="_blank">JavaScript Function</a>. Enable one object "borrow" a method from another object and use it within its own context.</li>
</ul>
<h2><a class="anchor" id="js4cpp_optimize"></a>
Optimize JavaScript for Compressor</h2>
<p>JavaScript Compressor is a type of tool to rename variables in JavaScript with shortest names, remove all unnecessary spaces and new line, so the original JavaScript source code becomes both shorten and obfuscated. <a href="http://developer.yahoo.com/yui/compressor/" target="_blank">YUI Compressor</a> is a very good JavaScript Compressor.</p>
<p>To know how to optimize JavaScript code for compressor, first check out what JavaScript compressor can do and can not do.</p>
<p>JavaScript compressor can:</p>
<ul>
<li>Rename local variables.</li>
</ul>
<p>JavaScript compressor cannot:</p>
<ul>
<li>Merge separated <code>var</code> declarations into one. </li>
<li>Rename global variables and functions. </li>
<li>Rename properties and methods of objects. </li>
<li>Rename everything in the context available to <a href="http://www.javascriptkit.com/jsref/globalfunctions.shtml" target="_blank">JavaScript <code>eval</code> fuction</a>.</li>
</ul>
<p>So, to optimize for JavaScript compressor:</p>
<ul>
<li>Define multiple variables in one <code>var</code> declaration. </li>
<li>Use closure inside closure to limit variable scope as small as possible. Variables in different closures can be renamed to same new name, which obfuscates the code more. </li>
<li>Define function in way of <code>var func = function(){}</code> so the function name can be renamed. </li>
<li>Use local variable to refer to global variables and functions, then use the local variable instead. </li>
<li>Use local variable to refer to properties and methods of objects, then use the local variable instead (not for property set). </li>
<li>Avoid using <a href="http://www.javascriptkit.com/jsref/globalfunctions.shtml" target="_blank"><code>eval</code> fuction</a>. </li>
<li>If <a href="http://www.javascriptkit.com/jsref/globalfunctions.shtml" target="_blank"><code>eval</code> fuction</a> has to be used, wrap up the call to <a href="http://www.javascriptkit.com/jsref/globalfunctions.shtml" target="_blank"><code>eval</code> </a>into a function and put it at the beginning of JavaScript source file so the context of the <a href="http://www.javascriptkit.com/jsref/globalfunctions.shtml" target="_blank"><code>eval</code> fuction</a> becomes the smallest.</li>
</ul>
<p>Demostration:</p>
<div class="fragment"><pre class="fragment">    <span class="comment">// Put eval statement at the beginning of the file</span>
    var eval_is_evil = function(statement_for_eval)
    {
        <span class="keywordflow">return</span> eval(statement_for_eval);
    };
    <span class="comment">// Will be compressed to: var eval_is_evil=fuction(a){return eval(a)};</span>
    <span class="comment">// Note that the fuction name belongs to context of eval statement so it cannot be renamed.</span>

    <span class="comment">// define multiple variables in one var statement</span>
    <span class="comment">// refer global variables with local variables</span>
    var local_js = <a class="code" href="interfacelocal_j_s.php" title="The root object of all advanced JavaScript objects. Available directly in JavaScript.">localJS</a>,                 <span class="comment">// Will be compressed to: var a=localJS,</span>

        <span class="comment">// refer properties and methods of objects with local variables</span>
        com = local_js.<a class="code" href="interfacelocal_j_s.php#ac46dd82aca231ab33f6308ba12975594" title="Readonly. Returns object COM, which exposes methods to create COM object, connect COM events...">COM</a>,                 <span class="comment">// Will be compressed to: b=a.COM,</span>
        createObject = com.createObject,    <span class="comment">// Will be compressed to: c=b.createObject,</span>
        connectEvents = com.connectEvents,  <span class="comment">// Will be compressed to: d=b.connectEvents,</span>

        dllCall = createObject(<span class="stringliteral">&#39;DllCall&#39;</span>),  <span class="comment">// Will be compressed to: e=c(&#39;DllCall&#39;),</span>
        addFunc = dllCall.add,              <span class="comment">// Will be compressed to: f=e.add,</span>

        hostWnd = local_js.<a class="code" href="interfacelocal_j_s.php#aa05066bf1c7f31ea898c0d2aed29eedb" title="ReadOnly. Returns the HWND handle of current browser window.">hostWnd</a>,         <span class="comment">// Will be compressed to: g=a.hostWnd,</span>

        shellApp = createObject(<span class="stringliteral">&quot;Shell.Application&quot;</span>),       <span class="comment">// Will be compressed to: h=c(&quot;Shell.Application&quot;),</span>
        fso = createObject(<span class="stringliteral">&quot;Scripting.FileSystemObject&quot;</span>);   <span class="comment">// Will be compressed to: i=c(&quot;Scripting.FileSystemObject&quot;);</span>

    addFunc(<span class="stringliteral">&quot;shlwapi.dll&quot;</span>, <span class="stringliteral">&quot;BOOL PathFileExists(LPCTSTR pszPath);&quot;</span>);
    <span class="comment">// Will be compressed to: f(&quot;shlwapi.dll&quot;,&quot;BOOL PathFileExists(LPCTSTR pszPath);&quot;);</span>

    addFunc(<span class="stringliteral">&quot;user32.dll&quot;</span>, <span class="stringliteral">&quot;int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;</span>);
    <span class="comment">// Will be compressed to: f(&quot;user32.dll&quot;,&quot;int MessageBox(HWND hWnd,LPCTSTR lpText,LPCTSTR lpCaption,UINT uType);&quot;);</span>

    var pathFileExists = dllCall.PathFileExists,    <span class="comment">// Will be compressed to: j=e.PathFileExists,</span>
        messageBox = dllCall.MessageBox;            <span class="comment">// Will be compressed to: k=e.MessageBox;</span>

    <span class="keywordflow">if</span> (pathFileExists(<span class="stringliteral">&quot;C:\\windows&quot;</span>))
    {
        messageBox(hostWnd, <span class="stringliteral">&quot;OK&quot;</span>, <span class="stringliteral">&quot;Title&quot;</span>, 0);
    }
    <span class="comment">// Will be compressed to: if(j(&quot;C:\\windows&quot;)){k(g,&quot;OK&quot;,&quot;Title&quot;,0)}</span>
</pre></div><h2><a class="anchor" id="js4cpp_doctype"></a>
DOCTYPE</h2>
<p><a href="http://www.w3schools.com/tags/tag_DOCTYPE.asp" target="_blank">DOCTYPE</a> is more a HTML issue than JavaScript. However, if <a href="http://www.w3schools.com/tags/tag_DOCTYPE.asp" target="_blank">DOCTYPE</a> is omitted at the beginning of HTML file, or incorrect <a href="http://www.w3schools.com/tags/tag_DOCTYPE.asp" target="_blank">DOCTYPE</a> is set, some JavaScript <a class="el" href="interface_u_i.php" title="开源的 JavaScript 对象。提供了常用的界面操作。需要包含localjs_ui.js。">UI</a> control (for example, <a href="http://developer.yahoo.com/yui/datatable/" target="_blank">YUI datatable</a> may behaves strangely when resized. <a href="http://www.w3schools.com/tags/tag_DOCTYPE.asp" target="_blank">DOCTYPE</a> below works well:</p>
<div class="fragment"><pre class="fragment">    &lt;!DOCTYPE html PUBLIC <span class="stringliteral">&quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot;</span>
    <span class="stringliteral">&quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;</span>&gt;
</pre></div> </div>
<?php include_once($base_path.'/_include/common_footer.php'); ?>
</html>
