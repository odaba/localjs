Class('UIDesigner', 'linb.Com',{
    Instance:{
        $classEditor:null,
        $pageviewType:'linb.UI.Tabs',
        $firstView:"design",
        $dftCodePath:'template/',
        $dftCodeFileName:'index.js',

        $fetchedCode:'',
        $iniCode:'',

        $url:'',

        $dirty:false,

        onDestroy:function(){
            this.$classEditor.destroy();
        },
        events:{
            onReady:function(){
                SPA=this;
                linb.ComFactory.setProfile(CONF.ComFactoryProfile);
            },
            onRender:function(com, threadid){
                com.setValue(com.$fetchedCode||com.$iniCode, com.$fetchedurl);
                com.$classEditor.setDftPage(com.$firstView);
            },
            afterIniComponents:function(){
                var self=this;
                self.popLang.setItems(CONF.localeItems);

                self.appRoot
                .append( new linb.UI.Button(
                    {
                        caption:linb.wrapRes('VisualJS.builder.save'),
                        tips:linb.getRes('VisualJS.builder.saveTips'),
                        zIndex:100, left:'auto', top:6, right:130,  width:68, height:54, type:'custom', border:true, renderer:function(item){return '<img src=img/save.gif /><br />' + item.caption;}},
                    {onClick:function(p,e,src){
                        self.popSave.updateItem('savetoserver',{disabled:!self.$url || linb.absIO.isCrossDomain(self.$url)});

                        if(self.popSave.$lang!=linb.getLang()){
                            self.popSave.$lang=linb.getLang();
                            self.popSave.refresh();
                        }

                        self.popSave.pop(src);
                    }
                    })
                )
                .append( self.$btnRun = new linb.UI.Button(
                    {
                        caption:linb.wrapRes('VisualJS.builder.run'),
                        tips:linb.getRes('VisualJS.builder.runTips'),
                        zIndex:100, left:'auto', top:6, right:210, width:68, height:54, type:'custom', border:true, renderer:function(item){return '<img src=img/run.gif /><br />' + item.caption;}},
                    {onClick:function(){
                        var content=self.getValue(),
                            clsName=VisualJS.ClassTool.getClassName(content);
                        if(false===content)return;
                        if(!clsName){
                            linb.message(linb.getRes('VisualJS.classtool.noClass'));
                            return false;
                        }

						var localjs_file = LOCALJS.FILE,
							localjs_ui = LOCALJS.UI,
							localjs_linb = LOCALJS.LINB;

						if (localjs_linb.isLocal())
						{
							var run_js = localjs_linb.callTemplateFile('single.js.tmpl', {'clsName': clsName, 'theme': linb.UI.getTheme(), 'lang': linb.getLang(), 'content': content});
							localjs_ui.newWindow(localjs_linb.getSingleTemplateUrl(), 10, 10, 800, 600, localjs_ui.WS_NORMAL, localJS.hostWnd, function(new_window)
							{
								var new_doc = new_window.document,
									new_elHead = new_doc.getElementsByTagName("head")[0],
									new_js = new_doc.createElement('script');

								new_js.type = 'text/javascript';
								new_js.text = run_js;
								new_elHead.appendChild(new_js);
							});
						}
						else
						{
							linb.Dom.submit(CONF.testphpPath,{
								clsName:clsName,
								content:content,
								theme:linb.UI.getTheme(),
								lang:linb.getLang()
							},'post');
						}
                    }
                    })
                );

                self.$btnTheme=new linb.UI.Button({
                    type:'drop',
                    caption:linb.wrapRes('VisualJS.builder.dftTheme'),
                    tips:linb.wrapRes('VisualJS.builder.dftThemeTips'),
                    position:'absolute',
                    top:38,
                    right:4,
                    left:'auto',
                    width:110,
                    zIndex:100
                },{
                    onClick:function(profile,e,src){
                        if(SPA.popMenu.$lang!=linb.getLang()){
                            SPA.popMenu.$lang=linb.getLang();
                            SPA.popMenu.refresh();
                        }
                        SPA.popMenu.pop(src);
                    },
                    onClickDrop:function(profile,e,src){
                        if(SPA.popMenu.$lang!=linb.getLang()){
                            SPA.popMenu.$lang=linb.getLang();
                            SPA.popMenu.refresh();
                        }
                        SPA.popMenu.pop(src);
                    }
                });
                self.appRoot.append(self.$btnTheme);

                self.$btnLang=new linb.UI.Button({
                    type:'drop',
                    caption:linb.wrapRes('VisualJS.'+linb.getLang()),
                    tips:'$VisualJS.langTips',
                    position:'absolute',
                    top:6,
                    right:4,
                    left:'auto',
                    width:110,
                    zIndex:100
                },{
                    onClick:function(profile,e,src){
                        if(SPA.popLang.$lang!=linb.getLang()){
                            SPA.popLang.$lang=linb.getLang();
                            SPA.popLang.refresh();
                        }
                        SPA.popLang.pop(src);
                    },
                    onClickDrop:function(profile,e,src){
                        if(SPA.popLang.$lang!=linb.getLang()){
                            SPA.popLang.$lang=linb.getLang();
                            SPA.popLang.refresh();
                        }
                        SPA.popLang.pop(src);
                    }
                });
                self.appRoot.append(self.$btnLang);
            }
        },
        iniResource:function(com, threadid){
            //Load default code(insert to the current thread)
            var com=this,
                url=_.urlDecode(location.href.split('#')[1],'url'),
                hash={};

            hash.ajax1=linb.Ajax(com.$dftCodePath + linb.getLang()+"/"+ com.$dftCodeFileName,'',function(code){
                com.$iniCode=code.replace('{className}','App');
            },function(){
                alert(linb.getRes('VisualJS.builder.noexist', com.$dftCodePath));
            });

            if(url){
                com.$url=url;
                hash.ajax2=linb.Ajax(CONF.phpPath,{
                    key:CONF.requestKey,
                    para:{
                        action:'fetchwebfile',
                        path:url
                    }
                },function(txt){
                    var obj=_.unserialize(txt);
                    if(!obj.error){
                        com.$fetchedCode=obj.data;
                        com.$fetchedurl=url;
                    }else
                        linb.message(obj.error.message);
                },function(){
                    alert(linb.getRes('VisualJS.builder.noexist', url));
                });
            }
            linb.absIO.groupCall(hash,null,null,null,threadid);
        },
        iniExComs:function(com, threadid){
            var com=this;
            //New an instance of VisualJS.JSEditor
            linb.ComFactory.newCom('VisualJS.JSEditor',function(threadid){
                var inn=this;
                inn.host = com;
                inn.setEvents('onValueChanged',function(){
                    com.$dirty=true;
                });

                //Create it first
                inn.create(function(o,threadid){
                    inn.paneMain.setDockMargin({"left":0, "top":40, "right":0, "bottom":0});
                    //Replace the Tag one
                    com.appRoot.append(inn);
                },threadid);

                com.$classEditor=inn;
            },threadid,{$pageviewType:com.$pageviewType});
        },
        getValue:function(){
            return this.$classEditor.getValue();
        },
        setValue:function(str,url){
            var self=this;
            if(str)
                self.$classEditor.setValue(str);
            if(url)
                self.$url=url;
            var dis=self.$url?!linb.absIO.isCrossDomain(self.$url)?'':'none':'none';

            self.$dirty=false;
        },
        _pop_onmenuselected:function (profile, item, src) {
            var ns=this;
            if(linb.getLang()==item.id)return;
            SPA.$btnLang.setCaption(linb.wrapRes('VisualJS.'+item.id));
            linb.setLang(item.id);
            ns.ctl_menubar1.clearPopCache();
            linb.include("lang."+item.id, CONF.path_apidir+"Locale/"+item.id+".js");
        },

        iniComponents:function(){
            // [[code created by jsLinb UI Builder
            var host=this, children=[], append=function(child){children.push(child.get(0))};

            append(
                (new linb.UI.PopMenu)
                .setHost(host,"popLang")
                .onMenuSelected("_pop_onmenuselected")
            );

            append(
                (new linb.UI.PopMenu)
                .setHost(host,"popSave")
                .setItems([{"id":"savetolocal", "caption":"$VisualJS.builder.savetolocal"}, {"id":"saveaszip", "caption":"$VisualJS.builder.saveaszip"}])
                .onMenuSelected("_popsave_onmenusel")
            );

            append(
                (new linb.UI.PopMenu)
                .setHost(host,"popMenu")
                .setItems([{"id":"default", "caption":"$VisualJS.builder.themeDft"}, {"id":"aqua", "caption":"$VisualJS.builder.themeAqua"}, {"id":"vista", "caption":"$VisualJS.builder.themeVista"}])
                .onMenuSelected("_onmenusel")
            );

            append(
                (new linb.UI.Pane)
                .setHost(host,"appRoot")
                .setDock("fill")
                .setWidth(800)
                .setHeight(600)
                .setDockMinW(800)
                .setDockMinH(400)
            );

            host.appRoot.append(
                (new linb.UI.Image)
                .setHost(host,"image1")
                .setTop(6)
                .setRight(290)
                .setZIndex(2)
                .setSrc("img/builder.gif")
            );

            host.appRoot.append(
                (new linb.UI.MenuBar)
                .setHost(host,"ctl_menubar1")
                .setItems([
                    {id:"backendcode", caption:"$VisualJS.spabuilder.menubar.backendcode",
                        sub:[
                            {id:"php", caption:"$VisualJS.spabuilder.menubar.php"},
                            {id:"csharp", caption:"$VisualJS.spabuilder.menubar.csharp"},
                            {id:"java", caption:"$VisualJS.spabuilder.menubar.java"}
                        ]
                    },{id:"links", caption:"$VisualJS.spabuilder.menubar.links",
                        sub:[
                            {id:"adv", caption:"$VisualJS.spabuilder.menubar.adv"},
                            {type:'split'},
                            {id:"linb", caption:"$VisualJS.spabuilder.menubar.linb"},
                            {id:"gcodelist", caption:"$VisualJS.spabuilder.menubar.gcodelist"},
                            {type:'split'},
                            {id:"forum", caption:"$VisualJS.spabuilder.menubar.forum"},
                            {id:"commecial", caption:"$VisualJS.spabuilder.menubar.commecial"},
                            {type:'split'},
                            {id:"api", caption:"$VisualJS.spabuilder.menubar.api"},
                            {id:"codesnipt", caption:"$VisualJS.spabuilder.menubar.codesnipt"},
                            {id:"cookbook", caption:"$VisualJS.spabuilder.menubar.cookbook"},
                            {type:'split'},
                            {id:"jsoneditor", caption:"$VisualJS.spabuilder.menubar.jsoneditor"}
                        ]
                    },
                    {id:"servicetester", caption:"<strong>$VisualJS.spabuilder.menubar.servicetester</strong>"},
                    {id:"video", caption:"$VisualJS.spabuilder.menubar.video"},
                    {id:"about", caption:"$VisualJS.spabuilder.menubar.about"}
                ])
                .setHandler(false)
                .setDockFloat(true)
                .setDockMargin({top:6,left:2,right:0,bottom:0})
                .setCustomStyle({"BORDER":"border:none;background:none;"})
                .onMenuBtnClick('_menubar_btnclick')
                .onMenuSelected('_menubar_selected')
                .setZIndex(5)
            )

            return children;
            // ]]code created by jsLinb UI Builder
        },
        _menubar_btnclick:function(profile, item, src){
            switch(item.id){
                case 'about':
                    linb.ComFactory.getCom('VisualJS.About',function(){
                        this.dialog.showModal();
                    });
                    break;
                case 'servicetester':
                    linb.ComFactory.getCom('VisualJS.ServiceTester',function(){
                        this.init();
                        this.show();
                    });
                    break;
                case 'video':
                    linb.Dom.submit(CONF.path_video);
                    break;
            }
        },
        _menubar_selected:function(profile, popProfile, item, src){
            switch(item.id){
                case 'linb':
                linb.Dom.submit("http://www.linb.net");
                break;
                case 'gcodelist':
                linb.Dom.submit("http://code.google.com/p/linb/downloads/list");
                break;
                case 'cookbook':
                linb.Dom.submit("http://linb.googlecode.com/files/linb.cookbook.zip");
                break;
                case 'api':
                linb.Dom.submit("http://www.linb.net/API");
                break;
                case 'codesnipt':
                linb.Dom.submit("http://www.linb.net/CodeSnip");
                break;
                case 'forum':
                linb.Dom.submit(CONF.path_forum);
                break;
                case 'jsoneditor':
                linb.Dom.submit("http://jsoneditor.appspot.com");
                break;
                case 'adv':
                linb.Dom.submit("index.html");
                //linb.Dom.submit("http://www.linb.net/VisualJS/");
                break;
                case 'commecial':
                linb.Dom.submit("http://www.sigmawidgets.com/");
                break;
                case 'php':
                linb.Dom.submit("http://linb.googlecode.com/files/linb.backend.PHP.zip");
                break;
                case 'java':
                linb.Dom.submit("http://linb.googlecode.com/files/linb.backend.Java.zip");
                break;
                case 'csharp':
                linb.Dom.submit("http://linb.googlecode.com/files/linb.backend.CSharp.zip");
                break;
            }
        },
        _onmenusel:function(profile,item){
            var id=item.id;
            if((SPA.$curTheme||'default')==id)return;
            linb.UI.setTheme(SPA.$curTheme=id);
            SPA.$btnTheme.setCaption(linb.wrapRes(item.caption));
        },
        _popsave_onmenusel:function(profile,item){
            var self=this,
                id=item.id;
                ifrid='ifr_for_download',
                content=self.getValue(),
                clsName=VisualJS.ClassTool.getClassName(content);
            if(false===content)return;
            if(!clsName){
                linb.message(linb.getRes('VisualJS.classtool.noClass'));
                return false;
            }

			var localjs_file = LOCALJS.FILE,
				localjs_ui = LOCALJS.UI,
				localjs_linb = LOCALJS.LINB;

            if(id=='savetolocal'){
				if (localjs_linb.isLocal())
				{
					var js_file_name = localjs_file.browseFile(true, "Save As JavaScript File", localjs_file.getExeFolder(), "JavaScript File\0*.js\0", "js");
					if (false === js_file_name)
						return;
					if (localjs_file.fileExists(js_file_name) && !confirm(js_file_name + " already exists. Do you want to overwrite?"))
						return;
					try
					{
						localjs_file.writeFileUTF8(js_file_name, content);
					}
					catch (e)
					{
						alert(linb.getRes('VisualJS.builder.fail2Save2Before') + js_file_name + linb.getRes('VisualJS.builder.fail2Save2After'));
					}
				}
				else
				{
					if(!linb.Dom.byId(ifrid))
						linb('body').append(linb.create('<iframe id="'+ifrid+'" name="'+ifrid+'" style="display:none;"/>'));
					var hash={
						key:CONF.requestKey,
						para:{
							action:'downloadjs',
							content:content
						}
					};
					linb.Dom.submit(CONF.phpPath, hash, 'post', ifrid);
				}
            }else if(id=='saveashtml'){
				if(!linb.Dom.byId(ifrid))
					linb('body').append(linb.create('<iframe id="'+ifrid+'" name="'+ifrid+'" style="display:none;"/>'));
				var hash={
					key:CONF.requestKey,
					para:{
						action:'downloadhtml',
						content:content,
						clsName:clsName,
						theme:linb.UI.getTheme(),
						lang:linb.getLang()
					}
				};
				linb.Dom.submit(CONF.phpPath, hash, 'post', ifrid);
            }else if(id=='saveaszip'){
				if (localjs_linb.isLocal())
				{
					while (true)
					{
						var exe_file_name = localjs_file.browseFile(true, "Save Your Application", "", "Executable File\0*.exe\0", "exe", "app.exe");
						if (false === exe_file_name)
							return;

						if ('exe' != localjs_file.getExtensionName(exe_file_name).toLowerCase())
							exe_file_name = exe_file_name + '.exe';

						var normalizeUrl = localjs_file.normalizeUrl,
							urlToPath = localjs_file.urlToPath,
							buildPath = localjs_file.buildPath,
							getParentFolder = localjs_file.getParentFolder,
							copyFile = localjs_file.copyFile,

							exe_folder = getParentFolder(exe_file_name),
							runtime_folder = buildPath(exe_folder, 'runtime'),
							source_exe = localjs_file.getExeFilename(),
							source_exe_folder = getParentFolder(source_exe),
							app_html_file_name = localjs_file.getBaseName(exe_file_name) + '.html',

							run_js = localjs_linb.callTemplateFile('single.js.tmpl', {'clsName': clsName, 'theme': linb.UI.getTheme(), 'lang': linb.getLang(), 'content': content}),
							html_content = localjs_file.readUrl(localjs_linb.getSingleTemplateUrl(true)).replace(/\.\.\/\.\.\/runtime/g, 'runtime') + '<script type="text/javascript">(function(){var a = LOCALJS.UI;a.centerWindow(1024, 800);a.showTitleBar();})()' + run_js + '</script>';

						localjs_file.deleteFolder(runtime_folder, true);
						localjs_file.copyFolder(urlToPath(normalizeUrl("../runtime")), runtime_folder);
						copyFile(source_exe, exe_file_name);
						localjs_file.writeFileUTF8(app_html_file_name, html_content);

						if (source_exe_folder != exe_folder)
						{
							var i, files_to_be_copied = ['LocalJS.dll', 'localJS.cfg'];
							for (i = 0; i < files_to_be_copied.length; ++i)
							{
								copyFile(buildPath(source_exe_folder, files_to_be_copied[i]), buildPath(exe_folder, files_to_be_copied[i]));
							}
						}

						if (confirm("Your application has been exported to folder " + exe_folder + ". Do you want to run it now?", true))
							localjs_file.exec(exe_file_name);
						break;
					}
				}
				else
				{
					if(!linb.Dom.byId(ifrid))
						linb('body').append(linb.create('<iframe id="'+ifrid+'" name="'+ifrid+'" style="display:none;"/>'));
					var hash={
						key:CONF.requestKey,
						para:{
							action:'downloadzip2',
							content:content,
							clsName:clsName,
							theme:linb.UI.getTheme(),
							lang:linb.getLang()
						}
					};
					linb.Dom.submit(CONF.phpPath, hash, 'post', ifrid);
				}
            }else if(id=='savetoserver'){
                var path=self.$url;
                if(!path)return;
                if(self.$dirty){
                    if(false===confirm(linb.getRes('VisualJS.builder.issave2server')))
                        return;
                }else return;

                if(/^(http|https)\:\/\//.test(self.$url)){
                    //change the url to relative path format
                    var s1=self.$url.replace(/^.+\:\/\/[^/]+\//,''),
                        s2=linb.ini.appPath.replace(/^.+\:\/\/[^/]+\//,'').replace(/\/$/,''),
                        a1=s1.split('/'),
                        a2=s2.split('/'),
                        count=0,
                        as='';
                    _.arr.each(a2,function(o,i){
                        if(a1[i]!=o)
                            return false;
                        else count++;
                    });
                    as +=_.str.repeat('../',(a2.length-count));
                    path = as + a1.slice(count,a1.length).join('/');
                }

                linb.IAjax(CONF.phpPath, {
                    key:CONF.requestKey, para:{
                        action:'savetoserver',
                        hashCode:_(),
                        path: path,
                        content:content
                    }}, function(txt){
                        var obj = typeof txt=='string'?_.unserialize(txt):txt;
                        if(obj && !obj.error && obj.data && obj.data.OK){
                            linb.message(linb.getRes('VisualJS.builder.save2serverOK'));
                            self.imgEdit.setDisplay('none');
                            self.$dirty=false;
                        }else
                            linb.message(obj.error.message);
                    },function(txt){
                        linb.message(txt);
                    }).start();

            }
        }
    }
});