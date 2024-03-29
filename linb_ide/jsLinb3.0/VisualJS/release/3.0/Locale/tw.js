﻿(linb.Locale.tw||(linb.Locale.tw={})).VisualJS={
    message:"系統消息!",
    noMessage:"尚無任何消息!",
    soon:'即將實現',
    ok:'確認',
    cancel:'取消',
    'close':'關閉',
    notsave:'尚未保存',
    notsave2:'您即將關閉的窗口尚未保存，是否放棄修改並繼續關閉操作?',
    notsave3:'當前工程中還有未保存的文件，是否要繼續操作?',
    checkOK:'代碼沒有語法錯誤!',
    en:'英文',
    cn:'中文',
    ja:'日語',
    tw:'中文繁體',
    langTips:'改變語言',

    spabuilder:{
        nosavefirst:'打開新的文件意味著放棄當前文件的內容（您是否已經保存了當前編輯的內容？），請確認是否繼續？ ',
        menubar:{
            servicetester:'LINB 服務測試器',
            backendcode:'後台服務代碼',
            php:'PHP 服務代碼',
            csharp:'C# 服務代碼',
            java:'JAVA 服務代碼',
            links:'相關鏈接',
            linb:'linb.net 主網站',
            gcodelist:'Google Code下載列表',
            cookbook:'入門指南',
            api:'API 文檔',
            codesnipt:'代碼片段',
            forum:'論壇',
            jsoneditor:'JSON 編輯器',
            adv:'Builder 高級版本',
            commecial:'商業支持',
            video:'教學視頻',
            about:'關於'
        },
        st_title:"LINB 服務測試器",
        st_nodata:"經檢驗你的”服務地址“和”請求測試數據“!",
        st_uri:"服務地址",
        st_queryobj:"請求測試數據",
        st_createcode:"代碼生成",
        st_send:"發送請求測試數據",
        st_sending:"正在嘗試與服務交互...",
        st_result:"結果",
        st_format:"格式化",
        st_method:"請求方法"
    },

    builder:{
        open:'打開',
        openTips:'打開一個jsLinb類文件',
        save:'保存',
        saveTips:'保存或下載',
        run:'運行',
        runTips:'在debug頁面中運行當前jsLinb類',
        dftTheme:'默認界面主題',
        dftThemeTips:'切換界面主題',
        advancedBuilder:'工程版',
        originalFile:"文件來自：",
        issave2server:'這會覆蓋伺服器上的原始文件，請確認是否繼續？',
        save2serverOK:'伺服器上的原始文件已經被覆蓋！',
        nosavefirst:'打開新的文件意味著放棄當前文件的所有更改（您是否已經保存當前文件？），請確認是否繼續？',

        savetoserver:'保存文件到伺服器上的原始文件',
        savetolocal:"保存 jsLinb 類文件(.js)",
        saveashtml:"保存一個可以運行的網頁文件(.html)到本地",
        saveaszip:"保存應用程序到目錄",

		fail2Save2Before:"存儲為 ",
		fail2Save2After:" 的時候發生錯誤",

        themeDft:'默認界面主題',
        themeAqua:'Aqua 界面主題',
        themeVista:'Vista 界面主題',

        noexist:"$0 不存在!"
    },

    menu:{
        file:'文件',
        newproject:'新建工程',
        openproject:'打開工程',
        closeproject:'關閉工程',
        deleteproject:'刪除工程',
        save:'保存',
        saveall:'保存所有',

        tools: '工具',
            servicetester:'LINB 服務測試器',
            command:'命令窗口',
            jsoneditor:'JSON 編輯器',

            cookbook:'入門指南',
            api:'API 文檔',
            codesnipt:'代碼片段',
            backendcode:'後台服務代碼',
                php:'PHP 服務代碼',
                csharp:'C# 服務代碼',
                java:'JAVA 服務代碼',
            spy:'控件瀏覽',

        build: '生成',
        debug: '運行程式',
        release: '打包下載',
        setting: '編譯設置',

        help: '幫助',
        simple: '入門版',
        video:'教學視頻',
        forum: '到論壇...',
        license:'授權許可',
        gpllicense:'LGPL 開源許可',
        clicense: '商業許可',
        purchase:'購買商業許可',
        about: '關於...'
    },

    tool:{
        newp:'新建一個工程',
        open:'打開一個存在的工程',
        save:'保存當前文件',
        saveall:'保存所有更改過的文件',
        command:'打開命令窗口',
        spy:'打開控件 spy 窗口',
        debug:'運行當前程式',
        release:'打包並下載當前程式代碼' ,
        ec: '轉換語言',
        manual:'用戶手冊',
        api:'API參考',
        demo:'示例',
        flash:'Flash 視頻介紹'
    },
    tool2:{
        'new':'向工程中添加文件',
        del: '從工程中刪除文件',
        refresh:'刷新工程文件',
        refreshOK:'工程文件刷新成功!'
    },

    pm:{
        title:'工程管理窗口',
        html:'HTML 文件',
        js:'jsLinb 類文件'
    },
    ps:{
        noselected:'請先選擇一個工程',
        noprj:'尚未打開工程!',
        getting:'正在得到工程列表...',
        saved:'$0 個文件保存成功!',
        noSaved:'沒有要保存的文件!'
    },

    projectPro:{
        type:"範本類別：",
        template:"範本列表：",
        name:"工程名稱 :",
        'class':"類名 :",
        pagefile:"頁面文件為 :",
        classfile:"類文件為 :",
        onlyword:'僅允許輸入由 3 到 15 個有效字元組成的英文單詞！'  ,
        invalid :'請確認輸入的有效性!'
    },

    dialog:{
        newone: '新建一個工程...',
        select:'請選擇一個要打開的工程...'
    },
    JSEditor:{
        sv:'代碼',
        dv:'設計器',
        svtips:'編輯代碼文件',
        dvtips:'在設計器中編輯',
        codeerr:'代碼不能解析，存在錯誤: $0',
        pecifytype:"指定類型",
        clickapi:"API 窗口"
    },
    pageEditor:{
        check:"語法檢查",
        'reset':"恢復上次",
        checktips:"對代碼進行語法檢查",
        resettips:"重新恢復代碼到上次保存的狀態",
        formatted:'格式化的代碼',
        outline:'Class 綱要',
        'search':'搜索',
        'replace':'替換',
        searchreplace:'查找/替換',
        replacesearch:'先替換再查找',
        replacewith:'替換為',
        replaceall:'替換所有',
        findnone:'沒找到',
        replaceCount:'共查找并替换了 $0 个',
        jumpto:'跳轉到行',
        indentall:"重新縮進",
        outlinetips:'Class 綱要',
        'searchtips':'搜索',
        'replacetips':'替換',
        jumptotips:'跳轉到行',
        indentalltips:"重新縮進"
    },
    classtool:{
        err1:'代碼格式不正確，請檢查代碼!',
        err2:'代碼格式不正確，請檢查代碼!',
        err3:'代碼格式不正確，請檢查代碼!',
        err4:'代碼格式不正確，請檢查代碼!',
        noClass:'該文件不是一個 jsLinb 類文件！'
    },
    designer:{
        toolsbox:'元件窗口',
        configwnd:'元件配置窗口',

        emptyContent:'正在清空內容...',
        prepare:'準備類...',
        createContent:'刷新設計界面...',
        loading:'正在加載 ',
        comCodeErr:'在函數 "iniComponents" 中存在錯誤，請返回檢查代碼!',
        nameExists:'別名 "$0" 已經存在，不能重複命名!',
        domIdExists:'DOM id "$0" 已經存在!',
        domIdValid:'DOM id 只能是數字或英文字母',
        confirmdel:'刪除?',
        confirmdel2:"您是否確認刪除選中的$0個控件?",
        confirmrefresh1:"重新刷新設計視圖",
        confirmrefresh2:"當前設計視圖已經改動，刷新將導致這些改動丟失，是否繼續刷新?",
        refreshOK:'刷新成功!',
        wlist: '元件樹',
        weditor:'元件編輯器',
        gridcol1: '鍵',
        gridcol2: '值',
        colneOK:'$0 個控件克隆成功!',
        openwidgets:'打開/折疊控件列表',
        dragwidget:'可以拖拽這個控件到設計窗口中!',
        openapi:'可雙擊滑鼠查看 API 文檔',
        tool:{
            viewsize:"視圖大小",
            refresh:"重新刷新設計視圖",
            tocode:"序列化到 javascript 代碼",
            tojson:"序列化到 JSON 代碼",
            left: '左對齊',
            center:'居中對齊',
            right:'右對齊',
            top:'頂部對齊',
            middle:'中間對齊',
            bottom:'底部對齊',
            width:'使寬度相同',
            wh:'使大小相同',
            height:'使高度相同',
            toplayer: '置於頂層',
            bottomlayer: '置於底層',
            gridxy: '對齊到網格',
            gridwh: '按網格調整大小',
            clone:'克隆選中控件',
            'delete': '刪除選中控件'
        }
    },
    addfile:{
        caption:'新建文件（夾）到工程...',
        sel:'選擇目標文件夾',
        filename:'文件名',
        filenameformat:'自允許 2 到 18 個字元',
        add:'新建',
        'iDir':'文件夾',
        'iHtml':'新建 HTML 文件',
        'iCSS':'新建 CSS 文件',
        'iJs':'新建 JS 文件',
        'iPhp':'新建 PHP 文件',
        'iUpload':'上傳一個文件',
        'target':'目標文件(夾)',
        filetype:'文件類型',
        notarget:'沒有待生成的目標文件...',
        invalidExts:'該文件類型不允許上傳',
        invalidName: '只允許上傳由英文字母或數字組成的文件名'
    },
    delfile:{
        caption:'從工程中刪除文件（夾）...',
        sel:'選擇目標文件夾',
        notarget:'沒有待刪除的目標文件...',
        confirmdel:'刪除?',
        confirmdel2:"您是否確認刪除選中的$0個文件（夾）?",
        confirmdel3:"您是否確認刪除當前工程?"
   }
}
