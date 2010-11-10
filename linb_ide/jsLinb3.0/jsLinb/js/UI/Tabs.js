Class("linb.UI.Tabs", ["linb.UI", "linb.absList","linb.absValue"],{
    Instance:{
        _setCtrlValue:function(value){
            this.each(function(profile){
                var id=profile.domId,
                    box = profile.boxing(),
                    uiv = box.getUIValue(),
                    p = profile.properties,
                    itemId = profile.getSubIdByItemId(uiv),
                    item,
                    temp,t
                    ;
                    if(uiv && profile.getSubIdByItemId(uiv)){
                        profile.getSubNodes(['ITEM','BOX'],itemId).tagClass('-checked',false);

                        if(!p.noPanel)
                            // hide pane
                            //box.getPanel(uiv).hide();
                            box.getPanel(uiv).css('display','none');
                    }
                    itemId = profile.getSubIdByItemId(value);
                    item=profile.getItemByItemId(value);
                    if(itemId){
                        // to show the seleted one
                        _.tryF(profile.box._adjustScroll,[profile,value],profile.box);

                        profile.getSubNodes(['ITEM','BOX'],itemId).tagClass('-checked');

                        if(!p.noPanel){
                            // show pane
                            //box.getPanel(value).css('position','relative').show('auto','auto');
                            box.getPanel(value).css('display','block');

                            t=profile.getRootNode().style;
                            //reset width and height
                            linb.UI.$tryResize(profile, t.width, t.height, true, value);
                            t=null;

                            //dynamic render
                            if(p.lazyAppend){
                                var arr=profile.children,a=[];
                                _.arr.each(arr,function(o){
                                    if(o[1]==value && !o[0]['parent:'+profile.$linbid]){
                                        a.push(o[0]);
                                        o[0]['parent:'+profile.$linbid]=1;
                                    }
                                });
                                if(a.length)
                                    box.append(linb.UI.pack(a),value);

                                // $attached is dynamic
                                if(profile.$attached){
                                    for(var i=0,v;v=profile.$attached[i++];)
                                        if(v._render)
                                            v._render(true);
                                    delete profile.$attached;
                                }

                                arr=profile.exchildren;
                                if(arr && arr.length){
                                    a=[];
                                    _.arr.filter(arr,function(o){
                                        if(o[1]==value){
                                            a.push(o[0]);
                                            return false;
                                        }
                                    });
                                    if(a.length)
                                        _.arr.each(a,function(o){
                                            box.append(linb(o),value);
                                        });
                                }
                                
                                arr=profile.excoms;
                                if(arr && arr.length){
                                    a=[];
                                    _.arr.filter(arr,function(o){
                                        if(o[1]==value){
                                            a.push(o[0]);
                                            return false;
                                        }
                                    });
                                    if(a.length)
                                        _.arr.each(a,function(o){
                                            o.show(null, box, value, false);
                                        });
                                }
                            }

                            if(!item._$ini)
                                if(box.onIniPanelView){
                                    if(box.onIniPanelView(profile,item)!==false)
                                        item._$ini=true;
                                    if(item.iframeAutoLoad){
                                        box.getPanel(item.id).css('overflow','hidden');

                                        if(typeof item.iframeAutoLoad=='string')
                                            item.iframeAutoLoad={url:item.iframeAutoLoad};
                                        var hash=item.iframeAutoLoad,
                                            ifr=document.createElement("iframe");
                                        ifr.name="diframe:"+_();
                                        ifr.id=ifr.name;
                                        ifr.src=hash.url;
                                        ifr.frameBorder='0';
                                        ifr.marginWidth='0';
                                        ifr.marginHeight='0';
                                        ifr.vspace='0';
                                        ifr.hspace='0';
                                        ifr.allowTransparency='true';
                                        ifr.width='100%';
                                        ifr.height='100%';
                                        box.getPanel(item.id).append(ifr);
                                        linb.Dom.submit(hash.url, hash.query, hash.method, ifr.name, hash.enctype);
                                    }else if(item.ajaxAutoLoad){
                                        if(typeof item.ajaxAutoLoad=='string')
                                            item.ajaxAutoLoad={url:item.ajaxAutoLoad};
                                        var hash=item.ajaxAutoLoad;
                                        box.busy(null,null,"PANEL",profile.getSubIdByItemId(item.id));
                                        linb.Ajax(hash.url, hash.query, function(rsp){
                                            var n=linb.create("div");
                                            n.html(rsp,false,true);
                                            box.getPanel(item.id).append(n.children());
                                            box.free();
                                        }, function(err){
                                            box.getPanel(item.id).append("<div>"+err+"</div>");
                                            box.free();
                                        }, null, hash.options).start();
                                    }else if(item.html){
                                        box.getPanel(item.id).append(item.html);
                                    }
                                }
                        }
                    }
            });
        },
        append:function(target,subId){
            var p=this.get(0).properties;
            if(subId=subId||p.$UIvalue||p.value)
                arguments.callee.upper.call(this, target, subId);
            return this;
        },
        getCurPanel:function(){
            var profile = this.get(0);
            return this.getPanel(profile.properties.$UIvalue);
        },
        // get pane in page views
        getPanel:function(subId){
            var profile = this.get(0);
            return profile.getSubNodeByItemId('PANEL', subId);
        },
        ////
        addPanel:function(para, children, item){
            var i={},
                id = item&&item.id,
                items = this.getItems(),
                id2=para.id||para.tag;
            if(items.length){
                if(-1!=_.arr.subIndexOf(items,'id',id2))
                    return false;

                if(!id)
                    id = items[items.length-1].id;
            }

            _.merge(i, {
                caption:para.caption,
                image:para.image,
                closeBtn:para.closeBtn || false,
                popBtn:para.popBtn || false,
                optBtn:para.optBtn || false,
                imagePos:para.imagePos,
                dragKey:para.dragKey,
                dropKeys:para.dropKeys,
                id : para.id || para.tag || _.id()
            });

            this.insertItems([i], id);
            var arr=[];
            _.arr.each(children,function(o){
                arr.push(o[0]);
            });
            this.append(linb.UI.pack(arr,false), i.id);

            return this;
        },
        removePanel:function(domId){
            var self=this,
                item = self.getItemByDom(domId);
            return self.removeItems([item.id]);
        },
        getPanelPara:function(domId){
            var profile=this.get(0),
                pp=profile.properties,
                item = profile.getItemByDom(domId),
                para = _.clone(item);
            if(!para.dragKey)para.dragKey=pp.dragKey;
            if(!para.dropKeys)para.dropKeys=pp.dropKeys;
            return para;
        },
        getPanelChildren:function(domId){
            var profile=this.get(0),
                id = profile.getItemIdByDom(domId),
                arr=[];
            if(id)
                _.arr.each(profile.children,function(o){
                    if(o[1]==id)arr.push(o);
                });
            return arr;
        },

        ////
        fireItemClickEvent:function(subId){
            this.getSubNodeByItemId('ITEM', subId).onMousedown();
            return this;
        },
        /* insert some views to pageView widgets
            arr: hash(view properties) or array of hash
            before: views will insert before it, string
        */
        _afterInsertItems:function(profile, data){
            if(!profile.renderId)return;
            var box=profile.box,obj,v,pp=profile.properties;
            if(obj=profile.getSubNode(profile.keys.BOX||profile.keys.KEY)){
                // add panels anyway
                obj.append(profile._buildItems('panels', data));
                // for stacks only
                if(!pp.hasOwnProperty("noPanel")){
                    if(!(v=this.getUIValue()))
                        this.fireItemClickEvent((v=pp.items[0]) && (v=v.id));

                    var t=profile.getRootNode().style;
                    linb.UI.$tryResize(profile, t.width, t.height, true,v);
                    t=null;
                }
            }
        },
        /*  remove some views from pageView
            arr: array for id
        */
        removeItems:function(arr){
            var self=this,
                obj,serialId;
            if(!_.isArr(arr))arr=[arr];

            self.each(function(profile){
                if(!profile.properties.noPanel)
                    _.arr.each(arr,function(o){
                        // get ui serial id
                        serialId=profile.getSubIdByItemId(o);
                        if(serialId && !(obj = profile.getSubNode('PANEL', serialId) ).isEmpty() ){
                            // remove ui
                            obj.remove();
                        }
                    });
            });
            arguments.callee.upper.apply(self,arguments);

            self.each(function(profile){
                if(!profile.boxing().getUIValue()){
                    var i;
                    profile.boxing().fireItemClickEvent((i=profile.properties.items[0]) && i.id);
                }
                if(!profile.properties.noPanel){
                    var t=profile.getRootNode().style;
                    linb.UI.$tryResize(profile, t.width, t.height, true, profile.boxing().getUIValue());
                    t=null;
                }
            });

            return self;
        },
        clearItems:function(){
            var self=this;
            self.each(function(profile){
                if(!profile.properties.noPanel)
                    profile.getSubNode('PANEL',true).remove();
            });
            self.setValue(null,true);
            arguments.callee.upper.apply(self,arguments);
            return self;
        },
        markItemCaption:function(subId, mark, force){
            var profile = this.get(0);
            subId=profile.getItemByItemId(subId);

            if((subId._dirty !=mark) || force){
                var id = subId.id,
                    caption = profile.getItemByItemId(id).caption;
                profile.getSubNodeByItemId('CAPTION', id).html(
                    profile.getItemByItemId(id).caption=mark?('*'+caption):caption.replace(/^\*/,'')
                ).css('fontStyle',mark?'italic':'normal');
                subId._dirty=mark;
            }
            return this;
        },
        _scrollToBottom:function(){
            return this.each(function(profile){
                var o = profile.getSubNode('ITEMS'),
                border = profile.getSubNode('LIST'),
                y = o.left(),
                offset,
                h = o.width(),
                b=false,
                bh = border.width();
                if(bh<h+y){
                    if(!profile.$scrollStep)profile.$scrollStep=1;

                    if(profile.$scrollStep<5)
                        profile.$scrollStep = profile.$scrollStep*1.01;

                    y -= profile.$scrollStep;
                    if(bh>h+y){
                        y=bh-h;
                        b=true;
                    }
                    o.left(y);
                    if(b){
                        profile.getSubNode('RIGHT').css('display','none');
                        profile.$scrollTobottom=false;
                        profile.$scrollStep=null;
                    }else{
                        profile.getSubNode('LEFT').css('display','block');
                        if(profile.$scrollTobottom)
                            _.asyRun(arguments.callee, 0, [profile], this);
                    }
                }
            });
        },
        _scrollToTop:function(){
            return this.each(function(profile){
                var o = profile.getSubNode('ITEMS'),
                y = o.left(),
                b=false;

                if(y<0){
                    if(!profile.$scrollStep)profile.$scrollStep=1;

                    if(profile.$scrollStep<5)
                        profile.$scrollStep = profile.$scrollStep*1.01;

                    y += profile.$scrollStep;
                    if(y>=-1){
                        y=0;
                        b=true;
                    }
                    o.left(y);
                    if(b){
                        profile.getSubNode('LEFT').css('display','none');
                        profile.$scrollToTop=false;
                        profile.$scrollStep=null;
                    }else{
                        profile.getSubNode('RIGHT').css('display','block');
                        if(profile.$scrollToTop)
                            _.asyRun(arguments.callee, 0, [profile], this);
                    }
                }
            });
        }
    },
    Static:{
        Templates:{
            tagName : 'div',
            style:'{_style};',
            LIST:{
                $order:0,
                tagName : 'div',
                ITEMS:{
                    tagName : 'div',
                    text:"{items}",
                    style:'{HAlign}'
                },
                LEFT:{},
                RIGHT:{}
            },
            PNAELS:{
                $order:1,
                tagName:'text',
                text:'{panels}'
            },
            $submap:{
                items:{
                    ITEM:{
                        className:'{itemClass} {disabled} {readonly}',
                        style:'{itemDisplay} {itemStyle}',
                        ITEMI:{
                            ITEMC:{
                                HANDLE:{
                                    tabindex: '{_tabindex}',
                                    IBWRAP:{
                                        tagName:'div',
                                        style:"white-space:nowrap;",
                                        RULER:{},
                                        ICON:{
                                            $order:0,
                                            className:'ui-icon {imageClass}',
                                            style:'{backgroundImage} {backgroundPosition} {backgroundRepeat} {imageDisplay}'
                                        },
                                        CAPTION:{
                                            text: '{caption}',
                                            $order:1
                                        },
                                        CMDS:{
                                            $order:2,
                                            OPT:{
                                                $order:1,
                                                className:'uicmd-opt',
                                                style:'{_opt}'
                                            },
                                            POP:{
                                                className:'uicmd-pop',
                                                style:'{popDisplay}',
                                                $order:1
                                            },
                                            CLOSE:{
                                                className:'uicmd-close ',
                                                style:'{closeDisplay}',
                                                $order:2
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                panels:{
                    PANEL:{
                        tagName : 'div',
                        className:'uibg-base',
                        text:linb.UI.$childTag
                    }
                }
            }
        },
        Appearances:{
            KEY:{
                position:'absolute',
                overflow:'hidden'
            },
            LIST:{
                position:'relative',
                overflow:'hidden',
                left:0,
                width:'100%',
                background: linb.UI.$bg('line.gif', 'repeat-x center bottom')
            },
            LEFT:{
                cursor:'pointer',
                display:'none',
                position:'absolute',
                top:0,
                left:0,
                height:'16px',
                width:'16px',
                'z-index':'10',
                background: linb.UI.$bg('icons.gif', 'no-repeat -152px -244px', true)
            },
            RIGHT:{
                cursor:'pointer',
                display:'none',
                position:'absolute',
                top:0,
                right:0,
                height:'16px',
                width:'16px',
                'z-index':'10',
                background: linb.UI.$bg('icons.gif', 'no-repeat -170px -244px', true)
            },
            ITEMS:{
                padding:'0 4px 2px 0',
                position:'relative',
                left:0,
                top:0,
                'white-space':'nowrap'
            },
            ITEM:{
                $order:0,
                'font-family': '"Verdana", "Helvetica", "sans-serif"',
                cursor:'pointer',
                'padding-right':'6px',
                'vertical-align':'top',
                background: linb.UI.$bg('button.gif', 'no-repeat right -540px', true)
            },
            'ITEM-mouseover':{
                $order:1,
                'background-position' : 'right -690px'
            },
            'ITEM-mousedown, ITEM-checked':{
                $order:2,
                'background-position' : 'right -840px',
                'border-bottom':'solid 1px #FAD600;'
            },
            ITEMI:{
                $order:0,
                'padding-left':'6px',
                //keep this same with ITEM
                'vertical-align':'top',
                background: linb.UI.$bg('button.gif', 'no-repeat left -640px',true)
            },
            'ITEM-mouseover ITEMI':{
                $order:1,
                'background-position' : 'left -790px'
            },
            'ITEM-mousedown ITEMI, ITEM-checked ITEMI':{
                $order:2,
                'background-position' : 'left -940px'
            },
            ITEMC:{
                $order:0,
                padding:'5px 0 3px 0',
                //keep this same with ITEM
                'vertical-align':'top',
                'text-align': 'center',
                background: linb.UI.$bg('button.gif', 'repeat-x left -590px',true)
            },
            'ITEM-mouseover ITEMC':{
                $order:1,
                'background-position' : 'left -740px'
            },
            'ITEM-mousedown ITEMC, ITEM-checked ITEMC':{
                $order:2,
                'background-position' : 'left -890px'
            },
            HANDLE:{
                display:linb.$inlineBlock,
                zoom:linb.browser.ie6?1:null,
                cursor:'pointer',
                'vertical-align':'middle',
                'font-size':'12px'
            },
            RULER:{
                height:'18px',
                width:'1px',
                'vertical-align':'middle'
            },
            PANEL:{
                position:'relative',
                //visibility:'hidden',
                //top:'-10000px',
                //left:'-10000px',
                display:'none',
                width:'100%',
                overflow:'auto'
            },
            CAPTION:{
                'vertical-align':linb.browser.ie6?'baseline':'middle',
                margin:'0 4px'
            },
            CMDS:{
                'vertical-align':'middle'
            }
        },
        Behaviors:{
            DroppableKeys:['PANEL','KEY', 'ITEM'],
            DraggableKeys:['ITEM'],
            HoverEffected:{ITEM:'ITEM',OPT:'OPT',CLOSE:'CLOSE',POP:'POP'},
            ClickEffected:{ITEM:'ITEM',OPT:'OPT',CLOSE:'CLOSE',POP:'POP'},
            onSize:linb.UI.$onSize,
            OPT:{
                onMousedown:function(){
                    return false;
                },
                onClick:function(profile, e, src){
                    profile.boxing().onShowOptions(profile, profile.getItemByDom(src), e, src);
                    return false;
                }
            },
            CAPTION:{
                onMousedown:function(profile, e, src){
                    if(linb.Event.getBtn(e)!='left')return;
                    var properties = profile.properties,
                        item = profile.getItemByDom(src),
                        box = profile.boxing();

                    if(properties.disabled || item.disabled)return false;
                    if(properties.readonly || item.readonly)return false;
                    if(box.getUIValue() == item.id){
                         if(profile.onCaptionActive)
                            profile.boxing().onCaptionActive(profile, profile.getItemByDom(src), e, src);
                    }
                }
            },
            ITEM:{
                onClick:function(profile, e, src){
                    return false;
                },
                onMousedown:function(profile, e, src){
                    if(linb.Event.getBtn(e)!='left')return false;
                    if(profile.getKey(linb.Event.getSrc(e).parentNode.id)==profile.keys.CMDS)return false;

                    var properties = profile.properties,
                        itemId = profile.getSubId(src),
                        item = profile.getItemByDom(src),
                        box = profile.boxing();

                    if(properties.disabled || item.disabled)return false;
                    if(properties.readonly || item.readonly)return false;
                    if(box.getUIValue() == item.id)return;

                    //for some input onblur event
                    profile.getSubNode('HANDLE', itemId).focus();

                    box.setUIValue(item.id);

                    //if success
                    if(box.getUIValue() == item.id){
                        box.onItemSelected(profile, item, e, src);
                        return false;
                    }
                }
            },
            HANDLE:{
                onClick:function(profile, e, src){
                    return linb.Event.getKey(e).shiftKey;
                },
                onKeydown:function(profile, e, src){
                    var keys=linb.Event.getKey(e), key = keys.key, shift=keys.shiftKey;
                    if(key==' '||key=='enter'){
                        profile.getSubNode('ITEM',profile.getSubId(src)).onMousedown();
                        return false;
                    }

                    var cur = linb(src),
                    target = profile.getSubNode('ITEMS'),
                    first = target.nextFocus(true, true, false),
                    last = target.nextFocus(false, true, false);

                    switch(key){
                        case 'tab':
                            if(shift){
                                if(cur.get(0)!=first.get(0)){
                                    first.focus();
                                    return false;
                                }
                            }else{
                                if(cur.get(0)!=last.get(0)){
                                    last.focus();
                                    return false;
                                }
                            }
                            break;
                        case 'left':
                        case 'up':
                            var next = cur.nextFocus(false, true, false);
                            if(cur.get(0)==first.get(0))
                                last.focus();
                            else
                                cur.nextFocus(false);
                            return false;
                            break;
                        case 'right':
                        case 'down':
                            var next = cur.nextFocus(true, false, false);
                            if(cur.get(0)==last.get(0))
                                first.focus();
                            else
                                cur.nextFocus();
                            return false;
                            break;
                    }
                }
            },
            CLOSE:{
                onMousedown:function(){
                    return false;
                },
                onClick:function(profile, e, src){
                    var properties = profile.properties,
                        item = profile.getItemByDom(src),
                        uiv=properties.$UIvalue,                        
                        bak;

                    if(properties.disabled || item.disabled)return;
                    if(properties.readonly || item.readonly)return false;
                    var instance = profile.boxing();

                    if(false===instance.beforePageClose(profile, item, src)) return;

                    bak=_.copy(item);

                    // if the current item is selected, select the next or the pre one item
                    if(uiv && uiv==item.id){
                        var items=properties.items,
                        index=_.arr.subIndexOf(items,"id",item.id),
                        t,
                        nuiv=(t=items[index+1])?t.id:(t=items[index-1])?t.id:(t=items[0])?t.id:null;
                        if(nuiv && nuiv!=uiv){
                            profile.boxing().fireItemClickEvent(nuiv);
                        }
                    }

                    instance.removeItems(item.id);

                    instance.afterPageClose(profile, bak);

                    var t=profile.getRootNode().style;
                    linb.UI.$tryResize(profile, t.width, t.height,true);
                    t=null;
                    //for design mode in firefox
                    return false;
                }
            },
            POP:{
                onMousedown:function(){
                    return false;
                },
                onClick:function(profile, e, src){
                    var properties = profile.properties,
                        item = profile.getItemByDom(src),
                        id=item.id;

                    if(properties.disabled || item.disabled)return;
                    if(properties.readonly || item.readonly)return false;

                     if(profile.beforePagePop && false==profile.boxing().beforePagePop(profile,item))
                        return false;

                    var panel = profile.boxing().getPanel(id),
                        pos = profile.getRoot().offset(),
                        size=profile.getRoot().cssSize(),
                        pro = _.copy(linb.UI.Dialog.$DataStruct);
                    _.merge(pro, item, 'with');
                    _.merge(pro,{
                        dragKey: item.dragkey || properties.dragKey ,
                        dock:'none',
                        tag:item.tag||item.id,
                        width:Math.max(size.width,200),
                        height:Math.max(size.height,100),
                        left:pos.left,
                        top:pos.top
                    },'all');
                    var dialog = new linb.UI.Dialog(pro);
                    linb('body').append(dialog);

                    var arr=[];
                    _.arr.each(profile.children,function(o){
                        if(o[1]==id)
                            arr.push(o[0]);
                    },null,true);

                    if(arr.length)
                        dialog.append(linb.UI.pack(arr,false));

                    profile.boxing().removeItems(id);

                    //for design mode in firefox
                    return false;
                }
            },
            ITEMS:{
                onMousedown:function(profile, e, src){
                    var ep=linb.Event.getPos(e);
                    if(!profile._$scroll_l && !profile._$scroll_r)return;
                    linb.use(src).startDrag(e, {
                        horizontalOnly:true,
                        dragType:'blank',
                        dragDefer:2,
                        targetLeft:ep.left,
                        targetTop:ep.top,
                        targetReposition:false,
                        maxLeftOffset:profile._$scroll_l,
                        maxRightOffset:profile._$scroll_r
                    });
                },
                onDrag:function(profile, e, src){
                    var dd=linb.DragDrop.getProfile();
                    linb.use(src).left(-profile._$scroll_r + dd.offset.x);
                },
                onDragstop:function(profile, e, src){
                    profile.box._adjustScroll(profile);
                }
            },
            LEFT:{
                onMouseover:function(profile, e, src){
                    profile.$scrollToTop=true;
                    profile.boxing()._scrollToTop();
                },
                onMouseout:function(profile, e, src){
                    profile.$scrollToTop=false;
                    profile.$scrollStep=null;
                },
                onClick:function(profile, e, src){
                    profile.$scrollStep*=2;
                }
            },
            RIGHT:{
                onMouseover:function(profile, e, src){
                    profile.$scrollTobottom=true;
                    profile.boxing()._scrollToBottom();
                },
                onMouseout:function(profile, e, src){
                    profile.$scrollTobottom=false;
                    profile.$scrollStep=null;
                },
                onClick:function(profile, e, src){
                    profile.$scrollStep*=2;
                }
            }
        },
        DataModel:{
            dirtyMark:false,

            dataBinder:null,
            dataField:null,

            lazyAppend:true,

            dock:'fill',
            noPanel:false,
            width:200,
            height:200,
            position:'absolute',
            HAlign:{
                ini:'left',
                listbox:['left','center','right'],
                action:function(value){
                    this.getSubNode('ITEMS').css('textAlign',value);
                }
            },
            dropKeysPanel:'',
            value:{
                ini:''
            },
            //use ilist defualt items
            items:{
                set:function(value){
                    var o=this;
                    if(o.renderId){
                        var box = o.boxing(),
                            p,
                            temp = linb.$getGhostDiv(),
                            children = _.copy(o.children);
                        o.children.length=0;
                        _.arr.each(children,function(o){
                            //for flush dock
                            delete o[0].$dockParent;
                            //keep it in dom
                            temp.appendChild(o[0].getRootNode());
                        });

                        //bak value
                        var bv = o.properties.value;

                        //clear all
                        box.clearItems();

                        //inset items
                        box.insertItems(value);

                        //restore children
                        _.arr.each(children,function(v){
                            box.append.apply(box,v);
                        });

                        //clear
                        temp.innerHTML='';

                        //set value
                        box.setValue(bv,true);

                        //resize
                        var t=o.getRootNode().style;
                        linb.UI.$tryResize(o, t.width, t.height,true);
                        t=null;
                    }else
                        o.properties.items = _.copy(value);
                }
            }
        },
        EventHandlers:{
            onIniPanelView:function(profile, item){},
            beforePagePop:function(profile, item){},
            beforePageClose:function(profile, item, src){},
            afterPageClose:function(profile, item){},
            onShowOptions:function(profile,item,e,src){},
            onItemSelected:function(profile, item,e,src){},
            onCaptionActive:function(profile, item,e,src){}
        },
        RenderTrigger:function(){
            var self=this,v,i,ins;
            // set default value
            if(v=self.properties.value){
                (ins=self.boxing()).setUIValue(v);
                if(i=self.getItemByItemId(v))
                    ins.onItemSelected(self, i);
            }
        },
        _prepareData:function(profile){
            var data = arguments.callee.upper.call(this, profile);
            data.panels = data.items;
            if(data.HAlign)
                data.HAlign = 'text-align:'+data.HAlign+';';
            return data;
        },
        _prepareItem:function(profile, item){
            var dpn = 'display:none';
            item.closeDisplay = item.closeBtn?'':dpn;
            item.popDisplay = item.popBtn?'':dpn;
            item._opt = item.optBtn?'':dpn;
            item.itemDisplay = item.hidden?dpn:'';
        },
        getDropKeys:function(profile,node){
            return profile.properties[profile.getKey(linb.use(node).id())==profile.keys.PANEL?'dropKeys':'dropKeysPanel'];
        },
        _showTips:function(profile, node, pos){
            if(profile.properties.disableTips)return;
            if(profile.onShowTips)
                return profile.boxing().onShowTips(profile, node, pos);
            if(!linb.Tips)return;

            if(!node.id)return false;
            return arguments.callee.upper.apply(this,arguments);
        },
        //for tabs only
        _onresize:function(profile,width,height,force,key){
            var t=profile.properties,
                item = profile.getItemByItemId(key);
            if(!item)
                key=t.$UIvalue;
            item = profile.getItemByItemId(key);
            var o = profile.boxing().getPanel(key),
                l=profile.getSubNode('LIST'),
                listH;
            ;
            if(!o || o.isEmpty())return;

            var hc=null,wc=null;
            if(force)item._w=item._h=null;
            if(height && item._h!=height){
                item._h=height;
                if(height && height!='auto'){
                    listH = l.get(0).offsetHeight ||
                        //for opear 9.0 get height bug, get offsetheight in firefox is slow
                        l.offsetHeight();

                    height = height-listH;
                    if(height>0)hc=height;
                }else hc=height;
            }

            if(width && item._w!=width){
                l.width(item._w=width);
                this._adjustScroll(profile);
                wc=width;
            }
            if(hc||wc)o.height(hc).onSize();
        },

        _adjustScroll:function(profile, itemid){
            // SCROLL
            var list = profile.getSubNode('LIST'),
                w=list.offsetWidth(),
                items = profile.getSubNode('ITEMS'),
                l=items.left(),
                left =  profile.getSubNode('LEFT'),
                right =  profile.getSubNode('RIGHT'),
                wi=0,
                sl=0,sw=0;
            items.children().each(function(item){
                // to show the seleted one
                if(itemid && profile.getItemIdByDom(item.id) == itemid){
                    sl=wi;
                    sw=item.offsetWidth;
                }
                wi += item.offsetWidth;
            });
            items.width(Math.max(wi,w));

            if(wi<=w){
                items.left(0);
                profile._$scroll_r=profile._$scroll_l=0;
                items.css('cursor','');
            }else{
                // to show the seleted one
                if(sw){
                    if((sl+l<0) || (sl+sw-l>w)){
                        l=-sl;
                    }
                }

                if(wi+l<w){
                    items.left(w-wi);
                    profile._$scroll_r = wi-w;
                    profile._$scroll_l = 0;
                }else{
                    items.left(l);
                    profile._$scroll_r = -l;
                    profile._$scroll_l =  wi - w + l;
                }
                items.css('cursor','move');
            }


            left.css('display', profile._$scroll_r ? 'block' : 'none');
            right.css('display', profile._$scroll_l ? 'block' : 'none');

        }

    }
});