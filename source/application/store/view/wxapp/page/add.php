<link rel="stylesheet" href="assets/store/css/diy.css">
<link rel="stylesheet" href="assets/store/plugins/umeditor/themes/default/css/umeditor.css">
<link rel="stylesheet" href="assets/store/css/diy.css?v=1.1.30">
<div class="row-content am-cf">
    <div class="widget am-cf">
        <div class="widget-body">
            <!-- diy 工作区 -->
            <div id="app" class="work-diy dis-flex flex-x-between">
                <div id="diy-menu" class="diy-menu">
                    <div class="menu-title">
                        <span>组件库</span>
                    </div>
                    <div class="navs" id="components">
                        <div class="navs-group">
                            <div class="title">媒体组件</div>
                            <div class="navs-components am-cf">
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-tupianlunbo"></i></p> <p>图片轮播</p></nav>
                                <nav class="special" data-type="imageSingle"><p class="item-icon"><i class="iconfont icon-tupian1"></i></p> <p>单图组</p></nav>
                                <nav class="special" data-type="window"><p class="item-icon"><i class="iconfont icon-newbilayout"></i></p> <p>图片橱窗</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-shipin7"></i></p> <p>视频组</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-zixun"></i></p> <p>文章组</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-toutiao"></i></p> <p>头条快报</p></nav>
                            </div>
                            <div class="title">商城组件</div>
                            <div class="navs-components am-cf">
                                <nav class="special" data-type="search"><p class="item-icon"><i class="iconfont icon-wxbsousuotuiguang"></i></p> <p>搜索框</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-gonggao"></i></p> <p>公告组</p></nav>
                                <nav class="special" data-type="guide"><p class="item-icon"><i class="iconfont icon-daohang"></i></p> <p>导航组</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-shangpin5"></i></p> <p>商品组</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-youhuiquan2"></i></p> <p>优惠券组</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-shangpin5"></i></p> <p>拼团商品</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-kanjia"></i></p> <p>砍价商品</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-mendian"></i></p> <p>线下门店</p></nav>
                            </div>
                            <div class="title">工具组件</div>
                            <div class="navs-components am-cf">
                                <nav class="special" data-type="service"><p class="item-icon"><i class="iconfont icon-kefu"></i></p> <p>在线客服</p></nav>
                                <nav class="special" data-type="richText"><p class="item-icon"><i class="iconfont icon-wenbenbianji"></i></p> <p>富文本</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-kongbai"></i></p> <p>辅助空白</p></nav>
                                <nav class="special" data-type="banner"><p class="item-icon"><i class="iconfont icon-fengexian1"></i></p> <p>辅助线</p></nav>
                            </div>
                        </div>
                    </div>
                    <div class="action"><button type="button" class="am-btn am-btn-xs am-btn-secondary">
                            保存页面
                        </button></div>
                </div>
                <div class="diy-phone">
                    <div id="diy-page" class="phone-top optional" style="background: url(&quot;assets/store/img/diy/phone-top-black.png&quot;) center center / contain no-repeat rgb(255, 255, 255);">
                        <h4 style="color: black;">页面标题</h4></div>
                    <div id="phone-main" class="phone-main">
                        <div class="dragArea"></div>
                    </div>
                </div>
                <div id="diy-editor" class="diy-editor form-horizontal" style="visibility: hidden;"><!----> <!----></div>
            </div>
            <!-- 提示 -->
            <div class="tips am-margin-top-lg am-margin-bottom-sm">
                <div class="pre">
                    <p>1. 设计完成后点击"保存页面"，在小程序端页面下拉刷新即可看到效果。</p>
                    <p>2. 如需填写链接地址请参考<a href="index.php?s=/store/wxapp.page/links" target="_blank">页面链接</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- 文件库弹窗 -->
    <!-- 文件库模板 -->
    {{include file="layouts/_template/file_library" /}}

    <!--diy元素-->
    {{include file="wxapp/page/tpl/diy" /}}

    <!--编辑器: 搜索栏-->
    {{include file="wxapp/page/tpl/editor" /}}

    <!-- 分组元素-->
    <script id="tpl-group-item" type="text/template">
        <li class="ng-scope" data-group-id="{{ group_id }}" title="{{ group_name }}">
            <a class="group-edit" href="javascript:void(0);" title="编辑分组">
                <i class="iconfont icon-bianji"></i>
            </a>
            <a class="group-name am-text-truncate" href="javascript:void(0);">
                {{ group_name }}
            </a>
            <a class="group-delete" href="javascript:void(0);" title="删除分组">
                <i class="iconfont icon-shanchu1"></i>
            </a>
        </li>
    </script>


    <script src="assets/store/js/vue.min.js?v=1.1.30"></script>
    <script src="assets/store/js/Sortable.min.js?v=1.1.30"></script>
    <script src="assets/store/js/vuedraggable.min.js?v=1.1.30"></script>
    <script src="assets/store/js/select.data.js?v=1.1.30"></script>
    <script src="assets/store/plugins/umeditor/umeditor.config.js?v=1.1.30"></script>
    <script src="assets/store/plugins/umeditor/umeditor.min.js?v=1.1.30"></script>
    <script src="assets/store/js/diy.js?v=1.1.30"></script>
    <script src="assets/store/js/ddsort.js"></script>
    <script>
       $(function () {
           jsonData = [
           {
               "search":{
                   "name":"\u641c\u7d22\u6846",
                   "type":"search",
                   "params":{
                   "placeholder":"\u8bf7\u8f93\u5165\u5173\u952e\u5b57\u8fdb\u884c\u641c\u7d22"},
               "style":{"textAlign":"left",
                   "searchStyle"
                   :
                       "square"
                   }
               }
           ,
               "banner"
           :
               {
                   "name"
               :
                   "\u56fe\u7247\u8f6e\u64ad",
                       "type"
               :
                   "banner",
                       "style"
               :
                   {
                       "btnColor"
                   :
                       "#ffffff",
                           "btnShape"
                   :
                       "round"
                   }
               ,
                   "params"
               :
                   {
                       "interval"
                   :
                       "2800"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "linkUrl": ""
                   }]
               }
           ,
               "imageSingle"
           :
               {
                   "name"
               :
                   "\u5355\u56fe\u7ec4",
                       "type"
               :
                   "imageSingle",
                       "style"
               :
                   {
                       "paddingTop"
                   :
                       0,
                           "paddingLeft"
                   :
                       0,
                           "background"
                   :
                       "#ffffff"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "imgName": "image-1.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "imgName": "banner-2.jpg",
                       "linkUrl": ""
                   }]
               }
           ,
               "navBar"
           :
               {
                   "name"
               :
                   "\u5bfc\u822a\u7ec4",
                       "type"
               :
                   "navBar",
                       "style"
               :
                   {
                       "background"
                   :
                       "#ffffff",
                           "rowsNum"
                   :
                       "4"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-1.png",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b571",
                       "color": "#666666"
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-2.jpg",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b572",
                       "color": "#666666"
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-3.jpg",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b573",
                       "color": "#666666"
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-4.jpg",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b574",
                       "color": "#666666"
                   }]
               }
           ,
               "blank"
           :
               {
                   "name"
               :
                   "\u8f85\u52a9\u7a7a\u767d",
                       "type"
               :
                   "blank",
                       "style"
               :
                   {
                       "height"
                   :
                       "20",
                           "background"
                   :
                       "#ffffff"
                   }
               }
           ,
               "guide"
           :
               {
                   "name"
               :
                   "\u8f85\u52a9\u7ebf",
                       "type"
               :
                   "guide",
                       "style"
               :
                   {
                       "background"
                   :
                       "#ffffff",
                           "lineStyle"
                   :
                       "solid",
                           "lineHeight"
                   :
                       "1",
                           "lineColor"
                   :
                       "#000000",
                           "paddingTop"
                   :
                       10
                   }
               }
           ,
               "video"
           :
               {
                   "name"
               :
                   "\u89c6\u9891\u7ec4",
                       "type"
               :
                   "video",
                       "params"
               :
                   {
                       "videoUrl"
                   :
                       "http:\/\/wxsnsdy.tc.qq.com\/105\/20210\/snsdyvideodownload?filekey=30280201010421301f0201690402534804102ca905ce620b1241b726bc41dcff44e00204012882540400",
                           "poster"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/video_poster.png",
                           "autoplay"
                   :
                       "0"
                   }
               ,
                   "style"
               :
                   {
                       "paddingTop"
                   :
                       "0",
                           "height"
                   :
                       "190"
                   }
               }
           ,
               "article"
           :
               {
                   "name"
               :
                   "\u6587\u7ae0\u7ec4",
                       "type"
               :
                   "article",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   [],
                       "defaultData"
               :
                   [{
                       "article_title": "\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898",
                       "show_type": 10,
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png",
                       "views_num": "309"
                   }, {
                       "article_title": "\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898",
                       "show_type": 10,
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png",
                       "views_num": "309"
                   }],
                       "data"
               :
                   []
               }
           ,
               "special"
           :
               {
                   "name"
               :
                   "\u5934\u6761\u5feb\u62a5",
                       "type"
               :
                   "special",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "display"
                   :
                       "1",
                           "image"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/special.png"
                   }
               ,
                   "defaultData"
               :
                   [{
                       "article_title": "\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"
                   }, {
                       "article_title": "\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"
                   }],
                       "data"
               :
                   []
               }
           ,
               "notice"
           :
               {
                   "name"
               :
                   "\u516c\u544a\u7ec4",
                       "type"
               :
                   "notice",
                       "params"
               :
                   {
                       "text"
                   :
                       "\u8fd9\u91cc\u662f\u7b2c\u4e00\u6761\u81ea\u5b9a\u4e49\u516c\u544a\u7684\u6807\u9898",
                           "icon"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/notice.png"
                   }
               ,
                   "style"
               :
                   {
                       "paddingTop"
                   :
                       "4",
                           "background"
                   :
                       "#ffffff",
                           "textColor"
                   :
                       "#000000"
                   }
               }
           ,
               "richText"
           :
               {
                   "name"
               :
                   "\u5bcc\u6587\u672c",
                       "type"
               :
                   "richText",
                       "params"
               :
                   {
                       "content"
                   :
                       "<p>\u8fd9\u91cc\u662f\u6587\u672c\u7684\u5185\u5bb9<\/p>"
                   }
               ,
                   "style"
               :
                   {
                       "paddingTop"
                   :
                       "0",
                           "paddingLeft"
                   :
                       "0",
                           "background"
                   :
                       "#ffffff"
                   }
               }
           ,
               "window"
           :
               {
                   "name"
               :
                   "\u56fe\u7247\u6a71\u7a97",
                       "type"
               :
                   "window",
                       "style"
               :
                   {
                       "paddingTop"
                   :
                       "0",
                           "paddingLeft"
                   :
                       "0",
                           "background"
                   :
                       "#ffffff",
                           "layout"
                   :
                       "2"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/01.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/02.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/03.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/04.jpg",
                       "linkUrl": ""
                   }],
                       "dataNum"
               :
                   4
               }
           ,
               "goods"
           :
               {
                   "name"
               :
                   "\u5546\u54c1\u7ec4",
                       "type"
               :
                   "goods",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "goodsSort"
                       :
                           "all",
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "background"
                   :
                       "#F6F6F6",
                           "display"
                   :
                       "list",
                           "column"
                   :
                       "2",
                           "show"
                   :
                       {
                           "goodsName"
                       :
                           "1",
                               "goodsPrice"
                       :
                           "1",
                               "linePrice"
                       :
                           "1",
                               "sellingPoint"
                       :
                           "0",
                               "goodsSales"
                       :
                           "0"
                       }
                   }
               ,
                   "defaultData"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }],
                       "data"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100",
                       "is_default": true
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100",
                       "is_default": true
                   }]
               }
           ,
               "coupon"
           :
               {
                   "name"
               :
                   "\u4f18\u60e0\u5238\u7ec4",
                       "type"
               :
                   "coupon",
                       "style"
               :
                   {
                       "paddingTop"
                   :
                       "10",
                           "background"
                   :
                       "#ffffff"
                   }
               ,
                   "params"
               :
                   {
                       "limit"
                   :
                       "5"
                   }
               ,
                   "data"
               :
                   [{
                       "color": "red",
                       "reduce_price": "10",
                       "min_price": "100.00"
                   }, {
                       "color": "violet",
                       "reduce_price": "10",
                       "min_price": "100.00"
                   }]
               }
           ,
               "sharingGoods"
           :
               {
                   "name"
               :
                   "\u62fc\u56e2\u5546\u54c1\u7ec4",
                       "type"
               :
                   "sharingGoods",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "goodsSort"
                       :
                           "all",
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "background"
                   :
                       "#F6F6F6",
                           "show"
                   :
                       {
                           "goodsName"
                       :
                           "1",
                               "sellingPoint"
                       :
                           "1",
                               "sharingPrice"
                       :
                           "1",
                               "linePrice"
                       :
                           "1"
                       }
                   }
               ,
                   "defaultData"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_price": "99.00",
                       "line_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00"
                   }],
                       "data"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00",
                       "is_default": true
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00",
                       "is_default": true
                   }]
               }
           ,
               "bargainGoods"
           :
               {
                   "name"
               :
                   "\u780d\u4ef7\u5546\u54c1\u7ec4",
                       "type"
               :
                   "bargainGoods",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "goodsSort"
                       :
                           "all",
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "background"
                   :
                       "#F6F6F6",
                           "show"
                   :
                       {
                           "goodsName"
                       :
                           "1",
                               "peoples"
                       :
                           "1",
                               "floorPrice"
                       :
                           "1",
                               "originalPrice"
                       :
                           "1"
                       }
                   }
               ,
                   "demo"
               :
                   {
                       "helps_count"
                   :
                       2,
                           "helps"
                   :
                       [{
                           "avatarUrl": "http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zrytvvj30dw0dwwes.jpg"
                       }, {
                           "avatarUrl": "http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zs2u5ej30b40b4dfx.jpg"
                       }]
                   }
               ,
                   "defaultData"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }],
                       "data"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }]
               }
           ,
               "shop"
           :
               {
                   "name"
               :
                   "\u7ebf\u4e0b\u95e8\u5e97",
                       "type"
               :
                   "shop",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   [],
                       "defaultData"
               :
                   [{
                       "shop_name": "\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0",
                       "logo_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                       "phone": "010-6666666",
                       "region": {
                           "province": "xx\u7701",
                           "city": "xx\u5e02",
                           "region": "xx\u533a"
                       },
                       "address": "xx\u8857\u9053"
                   }, {
                       "shop_name": "\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0",
                       "logo_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                       "phone": "010-6666666",
                       "region": {
                           "province": "xx\u7701",
                           "city": "xx\u5e02",
                           "region": "xx\u533a"
                       },
                       "address": "xx\u8857\u9053"
                   }],
                       "data"
               :
                   [{
                       "shop_name": "\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0",
                       "logo_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                       "phone": "010-6666666",
                       "region": {
                           "province": "xx\u7701",
                           "city": "xx\u5e02",
                           "region": "xx\u533a"
                       },
                       "address": "xx\u8857\u9053"
                   }]
               }
           ,
               "service"
           :
               {
                   "name"
               :
                   "\u5728\u7ebf\u5ba2\u670d",
                       "type"
               :
                   "service",
                       "params"
               :
                   {
                       "type"
                   :
                       "chat",
                           "image"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/service.png",
                           "phone_num"
                   :
                       ""
                   }
               ,
                   "style"
               :
                   {
                       "right"
                   :
                       "1",
                           "bottom"
                   :
                       "10",
                           "opacity"
                   :
                       "100"
                   }
               }
           },
           {
               "page"
           :
               {
                   "type"
               :
                   "page",
                       "name"
               :
                   "\u9875\u9762\u8bbe\u7f6e",
                       "params"
               :
                   {
                       "name"
                   :
                       "\u9875\u9762\u540d\u79f0",
                           "title"
                   :
                       "\u9875\u9762\u6807\u9898",
                           "share_title"
                   :
                       "\u5206\u4eab\u6807\u9898"
                   }
               ,
                   "style"
               :
                   {
                       "titleTextColor"
                   :
                       "black",
                           "titleBackgroundColor"
                   :
                       "#ffffff"
                   }
               }
           ,
               "items"
           :
               []
           },
           {
               "catgory"
           :
               {
                   "10001"
               :
                   {
                       "category_id"
                   :
                       10001,
                           "name"
                   :
                       "\u624b\u673a\u6570\u7801",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       50,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:07",
                           "update_time"
                   :
                       "2018-07-27 20:14:26",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10010,
                           "name": "\u5c0f\u7c73",
                           "parent_id": 10001,
                           "image_id": 10001,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:21:04",
                           "update_time": "2018-07-17 10:21:04",
                           "image": {
                               "file_id": 10001,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171021031720f9679.png",
                               "file_size": 6412,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:21:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171021031720f9679.png"
                           }
                       }, {
                           "category_id": 10011,
                           "name": "\u534e\u4e3a",
                           "parent_id": 10001,
                           "image_id": 10002,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:21:30",
                           "update_time": "2018-07-17 10:21:30",
                           "image": {
                               "file_id": 10002,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717102129b4e214214.jpg",
                               "file_size": 1926,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:21:29",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717102129b4e214214.jpg"
                           }
                       }, {
                           "category_id": 10012,
                           "name": "Iphone",
                           "parent_id": 10001,
                           "image_id": 10003,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:36:05",
                           "update_time": "2018-07-17 10:36:05",
                           "image": {
                               "file_id": 10003,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103600edf9f5038.jpg",
                               "file_size": 3967,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:36:00",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103600edf9f5038.jpg"
                           }
                       }, {
                           "category_id": 10013,
                           "name": "vivo",
                           "parent_id": 10001,
                           "image_id": 10004,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:36:44",
                           "update_time": "2018-07-17 10:36:44",
                           "image": {
                               "file_id": 10004,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103633c69c94138.png",
                               "file_size": 4927,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:36:33",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103633c69c94138.png"
                           }
                       }, {
                           "category_id": 10014,
                           "name": "OPPO",
                           "parent_id": 10001,
                           "image_id": 10005,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:37:23",
                           "update_time": "2018-07-17 10:37:23",
                           "image": {
                               "file_id": 10005,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710372269a633020.png",
                               "file_size": 4675,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:37:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710372269a633020.png"
                           }
                       }, {
                           "category_id": 10015,
                           "name": "\u9b45\u65cf",
                           "parent_id": 10001,
                           "image_id": 10006,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:37:58",
                           "update_time": "2018-07-17 10:37:58",
                           "image": {
                               "file_id": 10006,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171037574f1163513.jpg",
                               "file_size": 13114,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:37:57",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171037574f1163513.jpg"
                           }
                       }, {
                           "category_id": 10016,
                           "name": "\u4e09\u661f",
                           "parent_id": 10001,
                           "image_id": 10007,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:38:18",
                           "update_time": "2018-07-17 10:38:18",
                           "image": {
                               "file_id": 10007,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103817b50602761.png",
                               "file_size": 5996,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:38:17",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103817b50602761.png"
                           }
                       }, {
                           "category_id": 10017,
                           "name": "\u5973\u6027\u624b\u673a",
                           "parent_id": 10001,
                           "image_id": 10008,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:38:59",
                           "update_time": "2018-07-17 10:38:59",
                           "image": {
                               "file_id": 10008,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103858579b29364.jpg",
                               "file_size": 4018,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:38:58",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103858579b29364.jpg"
                           }
                       }]
                   }
               ,
                   "10002"
               :
                   {
                       "category_id"
                   :
                       10002,
                           "name"
                   :
                       "\u5bb6\u7528\u7535\u5668",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       55,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:13",
                           "update_time"
                   :
                       "2018-07-27 20:16:08",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10018,
                           "name": "\u7535\u6c34\u58f6\/\u70ed\u6c34\u74f6",
                           "parent_id": 10002,
                           "image_id": 10009,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:45:17",
                           "update_time": "2018-07-17 10:45:17",
                           "image": {
                               "file_id": 10009,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104516f15c71914.jpg",
                               "file_size": 5141,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:45:16",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104516f15c71914.jpg"
                           }
                       }, {
                           "category_id": 10019,
                           "name": "\u7535\u538b\u529b\u9505",
                           "parent_id": 10002,
                           "image_id": 10010,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:45:46",
                           "update_time": "2018-07-17 10:45:46",
                           "image": {
                               "file_id": 10010,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104545203c11990.jpg",
                               "file_size": 3704,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:45:45",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104545203c11990.jpg"
                           }
                       }, {
                           "category_id": 10020,
                           "name": "\u7535\u996d\u7172",
                           "parent_id": 10002,
                           "image_id": 10011,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:46:04",
                           "update_time": "2018-07-17 10:46:04",
                           "image": {
                               "file_id": 10011,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104603be4eb3302.jpg",
                               "file_size": 5549,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:46:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104603be4eb3302.jpg"
                           }
                       }, {
                           "category_id": 10021,
                           "name": "\u7535\u78c1\u7089",
                           "parent_id": 10002,
                           "image_id": 10012,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:46:34",
                           "update_time": "2018-07-17 10:46:34",
                           "image": {
                               "file_id": 10012,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710463313a4c6481.jpg",
                               "file_size": 4231,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:46:33",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710463313a4c6481.jpg"
                           }
                       }, {
                           "category_id": 10022,
                           "name": "\u5fae\u6ce2\u7089",
                           "parent_id": 10002,
                           "image_id": 10013,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:47:01",
                           "update_time": "2018-07-17 10:47:01",
                           "image": {
                               "file_id": 10013,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171046566fa078397.jpg",
                               "file_size": 2598,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:46:56",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171046566fa078397.jpg"
                           }
                       }, {
                           "category_id": 10023,
                           "name": "\u7535\u997c\u94db",
                           "parent_id": 10002,
                           "image_id": 10014,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:47:23",
                           "update_time": "2018-07-17 10:47:23",
                           "image": {
                               "file_id": 10014,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710472279ea01034.jpg",
                               "file_size": 4373,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:47:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710472279ea01034.jpg"
                           }
                       }, {
                           "category_id": 10024,
                           "name": "\u8c46\u6d46\u673a",
                           "parent_id": 10002,
                           "image_id": 10015,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:47:56",
                           "update_time": "2018-07-17 10:47:56",
                           "image": {
                               "file_id": 10015,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104753612ab0376.jpg",
                               "file_size": 2373,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:47:53",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104753612ab0376.jpg"
                           }
                       }, {
                           "category_id": 10025,
                           "name": "\u591a\u7528\u9014\u9505",
                           "parent_id": 10002,
                           "image_id": 10016,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:48:11",
                           "update_time": "2018-07-17 10:48:11",
                           "image": {
                               "file_id": 10016,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104810f958a9886.jpg",
                               "file_size": 3578,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:48:10",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104810f958a9886.jpg"
                           }
                       }]
                   }
               ,
                   "10003"
               :
                   {
                       "category_id"
                   :
                       10003,
                           "name"
                   :
                       "\u7535\u8111\u529e\u516c",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       60,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:18",
                           "update_time"
                   :
                       "2018-07-17 10:10:18",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10026,
                           "name": "\u8f7b\u8584\u672c",
                           "parent_id": 10003,
                           "image_id": 10017,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:57:45",
                           "update_time": "2018-07-17 10:57:45",
                           "image": {
                               "file_id": 10017,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717105744dd1269197.png",
                               "file_size": 14559,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:57:44",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717105744dd1269197.png"
                           }
                       }, {
                           "category_id": 10027,
                           "name": "\u6e38\u620f\u672c",
                           "parent_id": 10003,
                           "image_id": 10018,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:58:09",
                           "update_time": "2018-07-17 10:58:09",
                           "image": {
                               "file_id": 10018,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717105805e81ec0398.png",
                               "file_size": 17237,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:58:05",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717105805e81ec0398.png"
                           }
                       }, {
                           "category_id": 10028,
                           "name": "\u673a\u68b0\u952e\u76d8",
                           "parent_id": 10003,
                           "image_id": 10019,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:58:28",
                           "update_time": "2018-07-17 10:58:28",
                           "image": {
                               "file_id": 10019,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710582753f808887.jpg",
                               "file_size": 11549,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:58:27",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710582753f808887.jpg"
                           }
                       }, {
                           "category_id": 10029,
                           "name": "\u7ec4\u88c5\u7535\u8111",
                           "parent_id": 10003,
                           "image_id": 10020,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:58:58",
                           "update_time": "2018-07-17 10:58:58",
                           "image": {
                               "file_id": 10020,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710585094a2e1515.jpg",
                               "file_size": 13744,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:58:50",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710585094a2e1515.jpg"
                           }
                       }, {
                           "category_id": 10030,
                           "name": "\u79fb\u52a8\u786c\u76d8",
                           "parent_id": 10003,
                           "image_id": 10021,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:59:23",
                           "update_time": "2018-07-17 10:59:23",
                           "image": {
                               "file_id": 10021,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171059225fe4a0683.jpg",
                               "file_size": 8563,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:59:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171059225fe4a0683.jpg"
                           }
                       }, {
                           "category_id": 10031,
                           "name": "\u663e\u5361",
                           "parent_id": 10003,
                           "image_id": 10022,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:59:45",
                           "update_time": "2018-07-17 10:59:45",
                           "image": {
                               "file_id": 10022,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171059459e20d6548.jpg",
                               "file_size": 12124,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:59:45",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171059459e20d6548.jpg"
                           }
                       }, {
                           "category_id": 10032,
                           "name": "\u6e38\u620f\u53f0\u5f0f\u673a",
                           "parent_id": 10003,
                           "image_id": 10023,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:00:17",
                           "update_time": "2018-07-17 11:00:17",
                           "image": {
                               "file_id": 10023,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171100132e1e65488.jpg",
                               "file_size": 9831,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:00:13",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171100132e1e65488.jpg"
                           }
                       }, {
                           "category_id": 10033,
                           "name": "\u5bb6\u7528\u6253\u5370\u673a",
                           "parent_id": 10003,
                           "image_id": 10024,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:01:13",
                           "update_time": "2018-07-17 11:01:13",
                           "image": {
                               "file_id": 10024,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717110113a228e2926.jpg",
                               "file_size": 5268,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:01:13",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717110113a228e2926.jpg"
                           }
                       }, {
                           "category_id": 10034,
                           "name": "\u5403\u9e21\u88c5\u5907",
                           "parent_id": 10003,
                           "image_id": 10025,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:01:56",
                           "update_time": "2018-07-17 11:01:56",
                           "image": {
                               "file_id": 10025,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717110155a2c675940.jpg",
                               "file_size": 12093,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:01:55",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717110155a2c675940.jpg"
                           }
                       }]
                   }
               ,
                   "10004"
               :
                   {
                       "category_id"
                   :
                       10004,
                           "name"
                   :
                       "\u6c7d\u8f66\u7528\u54c1",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       65,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:23",
                           "update_time"
                   :
                       "2018-07-17 10:10:23",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10036,
                           "name": "\u673a\u6cb9",
                           "parent_id": 10004,
                           "image_id": 10026,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:10:06",
                           "update_time": "2018-07-17 11:10:06",
                           "image": {
                               "file_id": 10026,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111006b08a71831.jpg",
                               "file_size": 4997,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:10:06",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111006b08a71831.jpg"
                           }
                       }, {
                           "category_id": 10037,
                           "name": "\u6c7d\u8f66\u5750\u57ab",
                           "parent_id": 10004,
                           "image_id": 10027,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:10:23",
                           "update_time": "2018-07-17 11:10:23",
                           "image": {
                               "file_id": 10027,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111022b868d7975.jpg",
                               "file_size": 6135,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:10:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111022b868d7975.jpg"
                           }
                       }, {
                           "category_id": 10038,
                           "name": "\u6d17\u8f66\u6c34\u67aa",
                           "parent_id": 10004,
                           "image_id": 10028,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:10:53",
                           "update_time": "2018-07-17 11:10:53",
                           "image": {
                               "file_id": 10028,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111051000d82311.jpg",
                               "file_size": 14490,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:10:51",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111051000d82311.jpg"
                           }
                       }, {
                           "category_id": 10039,
                           "name": "\u884c\u8f66\u8bb0\u5f55\u4eea",
                           "parent_id": 10004,
                           "image_id": 10029,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:11:10",
                           "update_time": "2018-07-17 11:11:10",
                           "image": {
                               "file_id": 10029,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111109f7fa08380.jpg",
                               "file_size": 14950,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:11:09",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111109f7fa08380.jpg"
                           }
                       }, {
                           "category_id": 10040,
                           "name": "\u8f6e\u80ce",
                           "parent_id": 10004,
                           "image_id": 10030,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:11:28",
                           "update_time": "2018-07-17 11:11:28",
                           "image": {
                               "file_id": 10030,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111127823353846.jpg",
                               "file_size": 9196,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:11:27",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111127823353846.jpg"
                           }
                       }, {
                           "category_id": 10041,
                           "name": "\u5e94\u6025\u6551\u63f4",
                           "parent_id": 10004,
                           "image_id": 10031,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:11:47",
                           "update_time": "2018-07-17 11:11:47",
                           "image": {
                               "file_id": 10031,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111146d51048663.png",
                               "file_size": 10152,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:11:46",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111146d51048663.png"
                           }
                       }, {
                           "category_id": 10042,
                           "name": "\u9999\u6c34",
                           "parent_id": 10004,
                           "image_id": 10032,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:12:04",
                           "update_time": "2018-07-17 11:12:04",
                           "image": {
                               "file_id": 10032,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111203b9dfd9346.jpg",
                               "file_size": 8718,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:12:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111203b9dfd9346.jpg"
                           }
                       }, {
                           "category_id": 10043,
                           "name": "\u529f\u80fd\u5c0f\u4ef6",
                           "parent_id": 10004,
                           "image_id": 10033,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:12:30",
                           "update_time": "2018-07-17 11:12:30",
                           "image": {
                               "file_id": 10033,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111229ee1cc6809.jpg",
                               "file_size": 7495,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:12:29",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111229ee1cc6809.jpg"
                           }
                       }, {
                           "category_id": 10044,
                           "name": "\u6302\u4ef6",
                           "parent_id": 10004,
                           "image_id": 10034,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:12:44",
                           "update_time": "2018-07-17 11:12:44",
                           "image": {
                               "file_id": 10034,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171112441551b5825.jpg",
                               "file_size": 7259,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:12:44",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171112441551b5825.jpg"
                           }
                       }]
                   }
               ,
                   "10005"
               :
                   {
                       "category_id"
                   :
                       10005,
                           "name"
                   :
                       "\u7537\u88c5",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       70,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:28",
                           "update_time"
                   :
                       "2018-07-17 10:10:28",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10045,
                           "name": "\u5939\u514b",
                           "parent_id": 10005,
                           "image_id": 10035,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:19:20",
                           "update_time": "2018-07-17 11:19:20",
                           "image": {
                               "file_id": 10035,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111920ceed03487.jpg",
                               "file_size": 5192,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:19:20",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111920ceed03487.jpg"
                           }
                       }, {
                           "category_id": 10046,
                           "name": "T\u6064",
                           "parent_id": 10005,
                           "image_id": 10036,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:19:35",
                           "update_time": "2018-07-17 11:19:35",
                           "image": {
                               "file_id": 10036,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111934843975679.jpg",
                               "file_size": 7368,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:19:34",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111934843975679.jpg"
                           }
                       }, {
                           "category_id": 10047,
                           "name": " \u9488\u7ec7\u886b",
                           "parent_id": 10005,
                           "image_id": 10037,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:19:51",
                           "update_time": "2018-07-17 11:19:51",
                           "image": {
                               "file_id": 10037,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111947621281997.jpg",
                               "file_size": 6422,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:19:47",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111947621281997.jpg"
                           }
                       }, {
                           "category_id": 10048,
                           "name": "\u886c\u886b",
                           "parent_id": 10005,
                           "image_id": 10038,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:04",
                           "update_time": "2018-07-17 11:20:04",
                           "image": {
                               "file_id": 10038,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112003e256b0783.jpg",
                               "file_size": 3410,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112003e256b0783.jpg"
                           }
                       }, {
                           "category_id": 10049,
                           "name": "\u536b\u8863",
                           "parent_id": 10005,
                           "image_id": 10039,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:18",
                           "update_time": "2018-07-17 11:20:18",
                           "image": {
                               "file_id": 10039,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112017badbf2419.jpg",
                               "file_size": 6368,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:17",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112017badbf2419.jpg"
                           }
                       }, {
                           "category_id": 10050,
                           "name": "\u98ce\u8863",
                           "parent_id": 10005,
                           "image_id": 10040,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:31",
                           "update_time": "2018-07-17 11:20:31",
                           "image": {
                               "file_id": 10040,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171120302592a7226.jpg",
                               "file_size": 4184,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:30",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171120302592a7226.jpg"
                           }
                       }, {
                           "category_id": 10051,
                           "name": "\u725b\u4ed4\u88e4",
                           "parent_id": 10005,
                           "image_id": 10041,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:42",
                           "update_time": "2018-07-17 11:20:42",
                           "image": {
                               "file_id": 10041,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112041f0b904756.jpg",
                               "file_size": 10103,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:41",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112041f0b904756.jpg"
                           }
                       }, {
                           "category_id": 10052,
                           "name": "\u4f11\u95f2\u88e4",
                           "parent_id": 10005,
                           "image_id": 10042,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:56",
                           "update_time": "2018-07-17 11:20:56",
                           "image": {
                               "file_id": 10042,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112056240332466.jpg",
                               "file_size": 4264,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:56",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112056240332466.jpg"
                           }
                       }, {
                           "category_id": 10053,
                           "name": "\u81ea\u8425\u7537\u88c5",
                           "parent_id": 10005,
                           "image_id": 10043,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:21:09",
                           "update_time": "2018-07-17 11:21:09",
                           "image": {
                               "file_id": 10043,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112108ae6848513.jpg",
                               "file_size": 15062,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:21:08",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112108ae6848513.jpg"
                           }
                       }]
                   }
               ,
                   "10006"
               :
                   {
                       "category_id"
                   :
                       10006,
                           "name"
                   :
                       "\u5973\u88c5",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       75,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:34",
                           "update_time"
                   :
                       "2018-07-17 10:10:34",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10054,
                           "name": "\u65e9\u6625\u65b0\u54c1",
                           "parent_id": 10006,
                           "image_id": 10044,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:11:14",
                           "update_time": "2018-07-17 13:11:14",
                           "image": {
                               "file_id": 10044,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171311135ad417707.jpg",
                               "file_size": 3792,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:11:13",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171311135ad417707.jpg"
                           }
                       }, {
                           "category_id": 10055,
                           "name": "\u8fde\u8863\u88d9",
                           "parent_id": 10006,
                           "image_id": 10045,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:11:48",
                           "update_time": "2018-07-17 13:11:48",
                           "image": {
                               "file_id": 10045,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131147254102370.jpg",
                               "file_size": 4624,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:11:47",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131147254102370.jpg"
                           }
                       }, {
                           "category_id": 10056,
                           "name": "\u886c\u886b",
                           "parent_id": 10006,
                           "image_id": 10046,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:05",
                           "update_time": "2018-07-17 13:12:05",
                           "image": {
                               "file_id": 10046,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131203b2d096600.jpg",
                               "file_size": 6460,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131203b2d096600.jpg"
                           }
                       }, {
                           "category_id": 10057,
                           "name": "T\u6064",
                           "parent_id": 10006,
                           "image_id": 10047,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:22",
                           "update_time": "2018-07-17 13:12:22",
                           "image": {
                               "file_id": 10047,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131221305a62112.jpg",
                               "file_size": 6995,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:21",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131221305a62112.jpg"
                           }
                       }, {
                           "category_id": 10058,
                           "name": "\u725b\u4ed4\u88e4",
                           "parent_id": 10006,
                           "image_id": 10048,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:34",
                           "update_time": "2018-07-17 13:12:34",
                           "image": {
                               "file_id": 10048,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131233a76585133.jpg",
                               "file_size": 4764,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:33",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131233a76585133.jpg"
                           }
                       }, {
                           "category_id": 10059,
                           "name": "\u536b\u8863",
                           "parent_id": 10006,
                           "image_id": 10049,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:45",
                           "update_time": "2018-07-17 13:12:45",
                           "image": {
                               "file_id": 10049,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131244f99b38300.jpg",
                               "file_size": 6260,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:44",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131244f99b38300.jpg"
                           }
                       }, {
                           "category_id": 10060,
                           "name": "\u9488\u7ec7\u886b",
                           "parent_id": 10006,
                           "image_id": 10050,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:13:03",
                           "update_time": "2018-07-17 13:13:03",
                           "image": {
                               "file_id": 10050,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171313023ada84138.jpg",
                               "file_size": 3672,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:13:02",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171313023ada84138.jpg"
                           }
                       }, {
                           "category_id": 10061,
                           "name": "\u725b\u4ed4\u5916\u5957",
                           "parent_id": 10006,
                           "image_id": 10051,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:13:18",
                           "update_time": "2018-07-17 13:13:18",
                           "image": {
                               "file_id": 10051,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071713131446f0c9984.jpg",
                               "file_size": 6518,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:13:14",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071713131446f0c9984.jpg"
                           }
                       }, {
                           "category_id": 10062,
                           "name": "\u81ea\u8425\u5973\u88c5",
                           "parent_id": 10006,
                           "image_id": 10052,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:13:30",
                           "update_time": "2018-07-17 13:13:30",
                           "image": {
                               "file_id": 10052,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131329ec4c16995.jpg",
                               "file_size": 6660,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:13:29",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131329ec4c16995.jpg"
                           }
                       }]
                   }
               ,
                   "10007"
               :
                   {
                       "category_id"
                   :
                       10007,
                           "name"
                   :
                       "\u949f\u8868\u73e0\u5b9d",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       80,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:38",
                           "update_time"
                   :
                       "2018-07-17 10:10:38",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10069,
                           "name": "\u745e\u8868 ",
                           "parent_id": 10007,
                           "image_id": 10059,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:25",
                           "update_time": "2018-07-17 13:26:25",
                           "image": {
                               "file_id": 10059,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132624d5fbe7006.jpg",
                               "file_size": 6588,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:24",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132624d5fbe7006.jpg"
                           }
                       }, {
                           "category_id": 10070,
                           "name": "\u56fd\u8868",
                           "parent_id": 10007,
                           "image_id": 10060,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:35",
                           "update_time": "2018-07-17 13:26:35",
                           "image": {
                               "file_id": 10060,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132634e4bf75583.jpg",
                               "file_size": 9885,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:34",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132634e4bf75583.jpg"
                           }
                       }, {
                           "category_id": 10071,
                           "name": "\u5fb7\u8868",
                           "parent_id": 10007,
                           "image_id": 10061,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:45",
                           "update_time": "2018-07-17 13:26:45",
                           "image": {
                               "file_id": 10061,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132644d48de9165.jpg",
                               "file_size": 13620,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:45",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132644d48de9165.jpg"
                           }
                       }, {
                           "category_id": 10072,
                           "name": "\u65e5\u97e9\u8868",
                           "parent_id": 10007,
                           "image_id": 10062,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:57",
                           "update_time": "2018-07-17 13:26:57",
                           "image": {
                               "file_id": 10062,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071713265693a4f9387.jpg",
                               "file_size": 7428,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:56",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071713265693a4f9387.jpg"
                           }
                       }, {
                           "category_id": 10073,
                           "name": "\u513f\u7ae5\u624b\u8868",
                           "parent_id": 10007,
                           "image_id": 10063,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:27:08",
                           "update_time": "2018-07-17 13:27:08",
                           "image": {
                               "file_id": 10063,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132707c4a8f0033.jpg",
                               "file_size": 4140,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:27:07",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132707c4a8f0033.jpg"
                           }
                       }, {
                           "category_id": 10074,
                           "name": "\u6b27\u7f8e\u8868",
                           "parent_id": 10007,
                           "image_id": 10064,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:27:23",
                           "update_time": "2018-07-17 13:27:23",
                           "image": {
                               "file_id": 10064,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171327225fbab4337.jpg",
                               "file_size": 10433,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:27:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171327225fbab4337.jpg"
                           }
                       }]
                   }
               ,
                   "10008"
               :
                   {
                       "category_id"
                   :
                       10008,
                           "name"
                   :
                       "\u5185\u8863\u914d\u9970",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       85,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:14:54",
                           "update_time"
                   :
                       "2018-07-17 10:14:54",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10063,
                           "name": "\u5185\u8863\u9986",
                           "parent_id": 10008,
                           "image_id": 10053,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:20:38",
                           "update_time": "2018-07-17 13:20:38",
                           "image": {
                               "file_id": 10053,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171320372e8bc5809.jpg",
                               "file_size": 13037,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:20:37",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171320372e8bc5809.jpg"
                           }
                       }, {
                           "category_id": 10064,
                           "name": "\u5927\u724c\u6587\u80f8",
                           "parent_id": 10008,
                           "image_id": 10054,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:20:51",
                           "update_time": "2018-07-17 13:20:51",
                           "image": {
                               "file_id": 10054,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132050e21532763.jpg",
                               "file_size": 16067,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:20:50",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132050e21532763.jpg"
                           }
                       }, {
                           "category_id": 10065,
                           "name": "\u81ea\u8425\u5185\u8863",
                           "parent_id": 10008,
                           "image_id": 10055,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:05",
                           "update_time": "2018-07-17 13:21:05",
                           "image": {
                               "file_id": 10055,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132104618394299.jpg",
                               "file_size": 17475,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:04",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132104618394299.jpg"
                           }
                       }, {
                           "category_id": 10066,
                           "name": "\u5185\u8863\u7206\u6b3e",
                           "parent_id": 10008,
                           "image_id": 10056,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:22",
                           "update_time": "2018-07-17 13:21:22",
                           "image": {
                               "file_id": 10056,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132121264643605.jpg",
                               "file_size": 6351,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:21",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132121264643605.jpg"
                           }
                       }, {
                           "category_id": 10067,
                           "name": "\u5973\u58eb\u56f4\u5dfe\/\u62ab\u80a9",
                           "parent_id": 10008,
                           "image_id": 10057,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:42",
                           "update_time": "2018-07-17 13:21:42",
                           "image": {
                               "file_id": 10057,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132140550de7975.jpg",
                               "file_size": 3993,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:40",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132140550de7975.jpg"
                           }
                       }, {
                           "category_id": 10068,
                           "name": "\u914d\u9970\u9986",
                           "parent_id": 10008,
                           "image_id": 10058,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:56",
                           "update_time": "2018-07-17 13:21:56",
                           "image": {
                               "file_id": 10058,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132155b43889897.jpg",
                               "file_size": 5946,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:55",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132155b43889897.jpg"
                           }
                       }]
                   }
               ,
                   "10009"
               :
                   {
                       "category_id"
                   :
                       10009,
                           "name"
                   :
                       "\u7bb1\u5305\u624b\u888b",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       90,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:14:59",
                           "update_time"
                   :
                       "2018-07-17 10:14:59",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10075,
                           "name": "\u62c9\u6746\u7bb1",
                           "parent_id": 10009,
                           "image_id": 10065,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:31:44",
                           "update_time": "2018-07-17 13:31:44",
                           "image": {
                               "file_id": 10065,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717133143a45f59273.jpg",
                               "file_size": 11379,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:31:43",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717133143a45f59273.jpg"
                           }
                       }, {
                           "category_id": 10076,
                           "name": "\u65f6\u5c1a\u7537\u5305",
                           "parent_id": 10009,
                           "image_id": 10066,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:31:59",
                           "update_time": "2018-07-17 13:31:59",
                           "image": {
                               "file_id": 10066,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717133158bf0436318.jpg",
                               "file_size": 4243,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:31:58",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717133158bf0436318.jpg"
                           }
                       }, {
                           "category_id": 10077,
                           "name": "\u7537\u58eb\u8170\u5e26",
                           "parent_id": 10009,
                           "image_id": 10067,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:13",
                           "update_time": "2018-07-17 13:32:13",
                           "image": {
                               "file_id": 10067,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171332128992b6822.jpg",
                               "file_size": 9902,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:12",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171332128992b6822.jpg"
                           }
                       }, {
                           "category_id": 10078,
                           "name": "\u7537\u5305\u4e0a\u65b0",
                           "parent_id": 10009,
                           "image_id": 10068,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:28",
                           "update_time": "2018-07-17 13:32:28",
                           "image": {
                               "file_id": 10068,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717133227cfde21313.jpg",
                               "file_size": 14739,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:27",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717133227cfde21313.jpg"
                           }
                       }, {
                           "category_id": 10079,
                           "name": "\u81ea\u8425\u5973\u5305",
                           "parent_id": 10009,
                           "image_id": 10069,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:48",
                           "update_time": "2018-07-17 13:32:48",
                           "image": {
                               "file_id": 10069,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171332472e5603287.jpg",
                               "file_size": 4437,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:47",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171332472e5603287.jpg"
                           }
                       }, {
                           "category_id": 10080,
                           "name": "\u65b0\u6b3e\u53cc\u80a9\u5305",
                           "parent_id": 10009,
                           "image_id": 10070,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:58",
                           "update_time": "2018-07-17 13:32:58",
                           "image": {
                               "file_id": 10070,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071713325709a965823.jpg",
                               "file_size": 7190,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:57",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071713325709a965823.jpg"
                           }
                       }]
                   }
               }
           ,
               "sharingCatgory"
           :
               [],
                   "articleCatgory"
           :
               []
           },
           {
               "search"
           :
               {
                   "name"
               :
                   "\u641c\u7d22\u6846",
                       "type"
               :
                   "search",
                       "params"
               :
                   {
                       "placeholder"
                   :
                       "\u8bf7\u8f93\u5165\u5173\u952e\u5b57\u8fdb\u884c\u641c\u7d22"
                   }
               ,
                   "style"
               :
                   {
                       "textAlign"
                   :
                       "left",
                           "searchStyle"
                   :
                       "square"
                   }
               }
           ,
               "banner"
           :
               {
                   "name"
               :
                   "\u56fe\u7247\u8f6e\u64ad",
                       "type"
               :
                   "banner",
                       "style"
               :
                   {
                       "btnColor"
                   :
                       "#ffffff",
                           "btnShape"
                   :
                       "round"
                   }
               ,
                   "params"
               :
                   {
                       "interval"
                   :
                       "2800"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "linkUrl": ""
                   }]
               }
           ,
               "imageSingle"
           :
               {
                   "name"
               :
                   "\u5355\u56fe\u7ec4",
                       "type"
               :
                   "imageSingle",
                       "style"
               :
                   {
                       "paddingTop"
                   :
                       0,
                           "paddingLeft"
                   :
                       0,
                           "background"
                   :
                       "#ffffff"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "imgName": "image-1.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                       "imgName": "banner-2.jpg",
                       "linkUrl": ""
                   }]
               }
           ,
               "navBar"
           :
               {
                   "name"
               :
                   "\u5bfc\u822a\u7ec4",
                       "type"
               :
                   "navBar",
                       "style"
               :
                   {
                       "background"
                   :
                       "#ffffff",
                           "rowsNum"
                   :
                       "4"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-1.png",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b571",
                       "color": "#666666"
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-2.jpg",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b572",
                       "color": "#666666"
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-3.jpg",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b573",
                       "color": "#666666"
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png",
                       "imgName": "icon-4.jpg",
                       "linkUrl": "",
                       "text": "\u6309\u94ae\u6587\u5b574",
                       "color": "#666666"
                   }]
               }
           ,
               "blank"
           :
               {
                   "name"
               :
                   "\u8f85\u52a9\u7a7a\u767d",
                       "type"
               :
                   "blank",
                       "style"
               :
                   {
                       "height"
                   :
                       "20",
                           "background"
                   :
                       "#ffffff"
                   }
               }
           ,
               "guide"
           :
               {
                   "name"
               :
                   "\u8f85\u52a9\u7ebf",
                       "type"
               :
                   "guide",
                       "style"
               :
                   {
                       "background"
                   :
                       "#ffffff",
                           "lineStyle"
                   :
                       "solid",
                           "lineHeight"
                   :
                       "1",
                           "lineColor"
                   :
                       "#000000",
                           "paddingTop"
                   :
                       10
                   }
               }
           ,
               "video"
           :
               {
                   "name"
               :
                   "\u89c6\u9891\u7ec4",
                       "type"
               :
                   "video",
                       "params"
               :
                   {
                       "videoUrl"
                   :
                       "http:\/\/wxsnsdy.tc.qq.com\/105\/20210\/snsdyvideodownload?filekey=30280201010421301f0201690402534804102ca905ce620b1241b726bc41dcff44e00204012882540400",
                           "poster"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/video_poster.png",
                           "autoplay"
                   :
                       "0"
                   }
               ,
                   "style"
               :
                   {
                       "paddingTop"
                   :
                       "0",
                           "height"
                   :
                       "190"
                   }
               }
           ,
               "article"
           :
               {
                   "name"
               :
                   "\u6587\u7ae0\u7ec4",
                       "type"
               :
                   "article",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   [],
                       "defaultData"
               :
                   [{
                       "article_title": "\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898",
                       "show_type": 10,
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png",
                       "views_num": "309"
                   }, {
                       "article_title": "\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898",
                       "show_type": 10,
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png",
                       "views_num": "309"
                   }],
                       "data"
               :
                   []
               }
           ,
               "special"
           :
               {
                   "name"
               :
                   "\u5934\u6761\u5feb\u62a5",
                       "type"
               :
                   "special",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "display"
                   :
                       "1",
                           "image"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/special.png"
                   }
               ,
                   "defaultData"
               :
                   [{
                       "article_title": "\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"
                   }, {
                       "article_title": "\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"
                   }],
                       "data"
               :
                   []
               }
           ,
               "notice"
           :
               {
                   "name"
               :
                   "\u516c\u544a\u7ec4",
                       "type"
               :
                   "notice",
                       "params"
               :
                   {
                       "text"
                   :
                       "\u8fd9\u91cc\u662f\u7b2c\u4e00\u6761\u81ea\u5b9a\u4e49\u516c\u544a\u7684\u6807\u9898",
                           "icon"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/notice.png"
                   }
               ,
                   "style"
               :
                   {
                       "paddingTop"
                   :
                       "4",
                           "background"
                   :
                       "#ffffff",
                           "textColor"
                   :
                       "#000000"
                   }
               }
           ,
               "richText"
           :
               {
                   "name"
               :
                   "\u5bcc\u6587\u672c",
                       "type"
               :
                   "richText",
                       "params"
               :
                   {
                       "content"
                   :
                       "<p>\u8fd9\u91cc\u662f\u6587\u672c\u7684\u5185\u5bb9<\/p>"
                   }
               ,
                   "style"
               :
                   {
                       "paddingTop"
                   :
                       "0",
                           "paddingLeft"
                   :
                       "0",
                           "background"
                   :
                       "#ffffff"
                   }
               }
           ,
               "window"
           :
               {
                   "name"
               :
                   "\u56fe\u7247\u6a71\u7a97",
                       "type"
               :
                   "window",
                       "style"
               :
                   {
                       "paddingTop"
                   :
                       "0",
                           "paddingLeft"
                   :
                       "0",
                           "background"
                   :
                       "#ffffff",
                           "layout"
                   :
                       "2"
                   }
               ,
                   "data"
               :
                   [{
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/01.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/02.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/03.jpg",
                       "linkUrl": ""
                   }, {
                       "imgUrl": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/04.jpg",
                       "linkUrl": ""
                   }],
                       "dataNum"
               :
                   4
               }
           ,
               "goods"
           :
               {
                   "name"
               :
                   "\u5546\u54c1\u7ec4",
                       "type"
               :
                   "goods",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "goodsSort"
                       :
                           "all",
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "background"
                   :
                       "#F6F6F6",
                           "display"
                   :
                       "list",
                           "column"
                   :
                       "2",
                           "show"
                   :
                       {
                           "goodsName"
                       :
                           "1",
                               "goodsPrice"
                       :
                           "1",
                               "linePrice"
                       :
                           "1",
                               "sellingPoint"
                       :
                           "0",
                               "goodsSales"
                       :
                           "0"
                       }
                   }
               ,
                   "defaultData"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100"
                   }],
                       "data"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100",
                       "is_default": true
                   }, {
                       "goods_name": "\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "goods_price": "99.00",
                       "line_price": "139.00",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_sales": "100",
                       "is_default": true
                   }]
               }
           ,
               "coupon"
           :
               {
                   "name"
               :
                   "\u4f18\u60e0\u5238\u7ec4",
                       "type"
               :
                   "coupon",
                       "style"
               :
                   {
                       "paddingTop"
                   :
                       "10",
                           "background"
                   :
                       "#ffffff"
                   }
               ,
                   "params"
               :
                   {
                       "limit"
                   :
                       "5"
                   }
               ,
                   "data"
               :
                   [{
                       "color": "red",
                       "reduce_price": "10",
                       "min_price": "100.00"
                   }, {
                       "color": "violet",
                       "reduce_price": "10",
                       "min_price": "100.00"
                   }]
               }
           ,
               "sharingGoods"
           :
               {
                   "name"
               :
                   "\u62fc\u56e2\u5546\u54c1\u7ec4",
                       "type"
               :
                   "sharingGoods",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "goodsSort"
                       :
                           "all",
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "background"
                   :
                       "#F6F6F6",
                           "show"
                   :
                       {
                           "goodsName"
                       :
                           "1",
                               "sellingPoint"
                       :
                           "1",
                               "sharingPrice"
                       :
                           "1",
                               "linePrice"
                       :
                           "1"
                       }
                   }
               ,
                   "defaultData"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "goods_price": "99.00",
                       "line_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00"
                   }],
                       "data"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00",
                       "is_default": true
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                       "image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "selling_point": "\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                       "sharing_price": "99.00",
                       "line_price": "139.00",
                       "is_default": true
                   }]
               }
           ,
               "bargainGoods"
           :
               {
                   "name"
               :
                   "\u780d\u4ef7\u5546\u54c1\u7ec4",
                       "type"
               :
                   "bargainGoods",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "category"
                       :
                           0,
                               "goodsSort"
                       :
                           "all",
                               "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   {
                       "background"
                   :
                       "#F6F6F6",
                           "show"
                   :
                       {
                           "goodsName"
                       :
                           "1",
                               "peoples"
                       :
                           "1",
                               "floorPrice"
                       :
                           "1",
                               "originalPrice"
                       :
                           "1"
                       }
                   }
               ,
                   "demo"
               :
                   {
                       "helps_count"
                   :
                       2,
                           "helps"
                   :
                       [{
                           "avatarUrl": "http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zrytvvj30dw0dwwes.jpg"
                       }, {
                           "avatarUrl": "http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zs2u5ej30b40b4dfx.jpg"
                       }]
                   }
               ,
                   "defaultData"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }],
                       "data"
               :
                   [{
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }, {
                       "goods_name": "\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                       "goods_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                       "floor_price": "0.01",
                       "original_price": "139.00"
                   }]
               }
           ,
               "shop"
           :
               {
                   "name"
               :
                   "\u7ebf\u4e0b\u95e8\u5e97",
                       "type"
               :
                   "shop",
                       "params"
               :
                   {
                       "source"
                   :
                       "auto",
                           "auto"
                   :
                       {
                           "showNum"
                       :
                           6
                       }
                   }
               ,
                   "style"
               :
                   [],
                       "defaultData"
               :
                   [{
                       "shop_name": "\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0",
                       "logo_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                       "phone": "010-6666666",
                       "region": {
                           "province": "xx\u7701",
                           "city": "xx\u5e02",
                           "region": "xx\u533a"
                       },
                       "address": "xx\u8857\u9053"
                   }, {
                       "shop_name": "\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0",
                       "logo_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                       "phone": "010-6666666",
                       "region": {
                           "province": "xx\u7701",
                           "city": "xx\u5e02",
                           "region": "xx\u533a"
                       },
                       "address": "xx\u8857\u9053"
                   }],
                       "data"
               :
                   [{
                       "shop_name": "\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0",
                       "logo_image": "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                       "phone": "010-6666666",
                       "region": {
                           "province": "xx\u7701",
                           "city": "xx\u5e02",
                           "region": "xx\u533a"
                       },
                       "address": "xx\u8857\u9053"
                   }]
               }
           ,
               "service"
           :
               {
                   "name"
               :
                   "\u5728\u7ebf\u5ba2\u670d",
                       "type"
               :
                   "service",
                       "params"
               :
                   {
                       "type"
                   :
                       "chat",
                           "image"
                   :
                       "https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/service.png",
                           "phone_num"
                   :
                       ""
                   }
               ,
                   "style"
               :
                   {
                       "right"
                   :
                       "1",
                           "bottom"
                   :
                       "10",
                           "opacity"
                   :
                       "100"
                   }
               }
           },
           {
               "page"
           :
               {
                   "type"
               :
                   "page",
                       "name"
               :
                   "\u9875\u9762\u8bbe\u7f6e",
                       "params"
               :
                   {
                       "name"
                   :
                       "\u9875\u9762\u540d\u79f0",
                           "title"
                   :
                       "\u9875\u9762\u6807\u9898",
                           "share_title"
                   :
                       "\u5206\u4eab\u6807\u9898"
                   }
               ,
                   "style"
               :
                   {
                       "titleTextColor"
                   :
                       "black",
                           "titleBackgroundColor"
                   :
                       "#ffffff"
                   }
               }
           ,
               "items"
           :
               []
           },
           {
               "catgory"
           :
               {
                   "10001"
               :
                   {
                       "category_id"
                   :
                       10001,
                           "name"
                   :
                       "\u624b\u673a\u6570\u7801",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       50,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:07",
                           "update_time"
                   :
                       "2018-07-27 20:14:26",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10010,
                           "name": "\u5c0f\u7c73",
                           "parent_id": 10001,
                           "image_id": 10001,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:21:04",
                           "update_time": "2018-07-17 10:21:04",
                           "image": {
                               "file_id": 10001,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171021031720f9679.png",
                               "file_size": 6412,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:21:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171021031720f9679.png"
                           }
                       }, {
                           "category_id": 10011,
                           "name": "\u534e\u4e3a",
                           "parent_id": 10001,
                           "image_id": 10002,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:21:30",
                           "update_time": "2018-07-17 10:21:30",
                           "image": {
                               "file_id": 10002,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717102129b4e214214.jpg",
                               "file_size": 1926,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:21:29",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717102129b4e214214.jpg"
                           }
                       }, {
                           "category_id": 10012,
                           "name": "Iphone",
                           "parent_id": 10001,
                           "image_id": 10003,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:36:05",
                           "update_time": "2018-07-17 10:36:05",
                           "image": {
                               "file_id": 10003,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103600edf9f5038.jpg",
                               "file_size": 3967,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:36:00",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103600edf9f5038.jpg"
                           }
                       }, {
                           "category_id": 10013,
                           "name": "vivo",
                           "parent_id": 10001,
                           "image_id": 10004,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:36:44",
                           "update_time": "2018-07-17 10:36:44",
                           "image": {
                               "file_id": 10004,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103633c69c94138.png",
                               "file_size": 4927,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:36:33",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103633c69c94138.png"
                           }
                       }, {
                           "category_id": 10014,
                           "name": "OPPO",
                           "parent_id": 10001,
                           "image_id": 10005,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:37:23",
                           "update_time": "2018-07-17 10:37:23",
                           "image": {
                               "file_id": 10005,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710372269a633020.png",
                               "file_size": 4675,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:37:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710372269a633020.png"
                           }
                       }, {
                           "category_id": 10015,
                           "name": "\u9b45\u65cf",
                           "parent_id": 10001,
                           "image_id": 10006,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:37:58",
                           "update_time": "2018-07-17 10:37:58",
                           "image": {
                               "file_id": 10006,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171037574f1163513.jpg",
                               "file_size": 13114,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:37:57",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171037574f1163513.jpg"
                           }
                       }, {
                           "category_id": 10016,
                           "name": "\u4e09\u661f",
                           "parent_id": 10001,
                           "image_id": 10007,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:38:18",
                           "update_time": "2018-07-17 10:38:18",
                           "image": {
                               "file_id": 10007,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103817b50602761.png",
                               "file_size": 5996,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:38:17",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103817b50602761.png"
                           }
                       }, {
                           "category_id": 10017,
                           "name": "\u5973\u6027\u624b\u673a",
                           "parent_id": 10001,
                           "image_id": 10008,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:38:59",
                           "update_time": "2018-07-17 10:38:59",
                           "image": {
                               "file_id": 10008,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717103858579b29364.jpg",
                               "file_size": 4018,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:38:58",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717103858579b29364.jpg"
                           }
                       }]
                   }
               ,
                   "10002"
               :
                   {
                       "category_id"
                   :
                       10002,
                           "name"
                   :
                       "\u5bb6\u7528\u7535\u5668",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       55,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:13",
                           "update_time"
                   :
                       "2018-07-27 20:16:08",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10018,
                           "name": "\u7535\u6c34\u58f6\/\u70ed\u6c34\u74f6",
                           "parent_id": 10002,
                           "image_id": 10009,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:45:17",
                           "update_time": "2018-07-17 10:45:17",
                           "image": {
                               "file_id": 10009,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104516f15c71914.jpg",
                               "file_size": 5141,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:45:16",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104516f15c71914.jpg"
                           }
                       }, {
                           "category_id": 10019,
                           "name": "\u7535\u538b\u529b\u9505",
                           "parent_id": 10002,
                           "image_id": 10010,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:45:46",
                           "update_time": "2018-07-17 10:45:46",
                           "image": {
                               "file_id": 10010,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104545203c11990.jpg",
                               "file_size": 3704,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:45:45",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104545203c11990.jpg"
                           }
                       }, {
                           "category_id": 10020,
                           "name": "\u7535\u996d\u7172",
                           "parent_id": 10002,
                           "image_id": 10011,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:46:04",
                           "update_time": "2018-07-17 10:46:04",
                           "image": {
                               "file_id": 10011,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104603be4eb3302.jpg",
                               "file_size": 5549,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:46:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104603be4eb3302.jpg"
                           }
                       }, {
                           "category_id": 10021,
                           "name": "\u7535\u78c1\u7089",
                           "parent_id": 10002,
                           "image_id": 10012,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:46:34",
                           "update_time": "2018-07-17 10:46:34",
                           "image": {
                               "file_id": 10012,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710463313a4c6481.jpg",
                               "file_size": 4231,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:46:33",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710463313a4c6481.jpg"
                           }
                       }, {
                           "category_id": 10022,
                           "name": "\u5fae\u6ce2\u7089",
                           "parent_id": 10002,
                           "image_id": 10013,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:47:01",
                           "update_time": "2018-07-17 10:47:01",
                           "image": {
                               "file_id": 10013,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171046566fa078397.jpg",
                               "file_size": 2598,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:46:56",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171046566fa078397.jpg"
                           }
                       }, {
                           "category_id": 10023,
                           "name": "\u7535\u997c\u94db",
                           "parent_id": 10002,
                           "image_id": 10014,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:47:23",
                           "update_time": "2018-07-17 10:47:23",
                           "image": {
                               "file_id": 10014,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710472279ea01034.jpg",
                               "file_size": 4373,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:47:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710472279ea01034.jpg"
                           }
                       }, {
                           "category_id": 10024,
                           "name": "\u8c46\u6d46\u673a",
                           "parent_id": 10002,
                           "image_id": 10015,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:47:56",
                           "update_time": "2018-07-17 10:47:56",
                           "image": {
                               "file_id": 10015,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104753612ab0376.jpg",
                               "file_size": 2373,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:47:53",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104753612ab0376.jpg"
                           }
                       }, {
                           "category_id": 10025,
                           "name": "\u591a\u7528\u9014\u9505",
                           "parent_id": 10002,
                           "image_id": 10016,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:48:11",
                           "update_time": "2018-07-17 10:48:11",
                           "image": {
                               "file_id": 10016,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717104810f958a9886.jpg",
                               "file_size": 3578,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:48:10",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717104810f958a9886.jpg"
                           }
                       }]
                   }
               ,
                   "10003"
               :
                   {
                       "category_id"
                   :
                       10003,
                           "name"
                   :
                       "\u7535\u8111\u529e\u516c",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       60,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:18",
                           "update_time"
                   :
                       "2018-07-17 10:10:18",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10026,
                           "name": "\u8f7b\u8584\u672c",
                           "parent_id": 10003,
                           "image_id": 10017,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:57:45",
                           "update_time": "2018-07-17 10:57:45",
                           "image": {
                               "file_id": 10017,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717105744dd1269197.png",
                               "file_size": 14559,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:57:44",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717105744dd1269197.png"
                           }
                       }, {
                           "category_id": 10027,
                           "name": "\u6e38\u620f\u672c",
                           "parent_id": 10003,
                           "image_id": 10018,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:58:09",
                           "update_time": "2018-07-17 10:58:09",
                           "image": {
                               "file_id": 10018,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717105805e81ec0398.png",
                               "file_size": 17237,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:58:05",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717105805e81ec0398.png"
                           }
                       }, {
                           "category_id": 10028,
                           "name": "\u673a\u68b0\u952e\u76d8",
                           "parent_id": 10003,
                           "image_id": 10019,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:58:28",
                           "update_time": "2018-07-17 10:58:28",
                           "image": {
                               "file_id": 10019,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710582753f808887.jpg",
                               "file_size": 11549,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:58:27",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710582753f808887.jpg"
                           }
                       }, {
                           "category_id": 10029,
                           "name": "\u7ec4\u88c5\u7535\u8111",
                           "parent_id": 10003,
                           "image_id": 10020,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:58:58",
                           "update_time": "2018-07-17 10:58:58",
                           "image": {
                               "file_id": 10020,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071710585094a2e1515.jpg",
                               "file_size": 13744,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:58:50",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071710585094a2e1515.jpg"
                           }
                       }, {
                           "category_id": 10030,
                           "name": "\u79fb\u52a8\u786c\u76d8",
                           "parent_id": 10003,
                           "image_id": 10021,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:59:23",
                           "update_time": "2018-07-17 10:59:23",
                           "image": {
                               "file_id": 10021,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171059225fe4a0683.jpg",
                               "file_size": 8563,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:59:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171059225fe4a0683.jpg"
                           }
                       }, {
                           "category_id": 10031,
                           "name": "\u663e\u5361",
                           "parent_id": 10003,
                           "image_id": 10022,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 10:59:45",
                           "update_time": "2018-07-17 10:59:45",
                           "image": {
                               "file_id": 10022,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171059459e20d6548.jpg",
                               "file_size": 12124,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 10:59:45",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171059459e20d6548.jpg"
                           }
                       }, {
                           "category_id": 10032,
                           "name": "\u6e38\u620f\u53f0\u5f0f\u673a",
                           "parent_id": 10003,
                           "image_id": 10023,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:00:17",
                           "update_time": "2018-07-17 11:00:17",
                           "image": {
                               "file_id": 10023,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171100132e1e65488.jpg",
                               "file_size": 9831,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:00:13",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171100132e1e65488.jpg"
                           }
                       }, {
                           "category_id": 10033,
                           "name": "\u5bb6\u7528\u6253\u5370\u673a",
                           "parent_id": 10003,
                           "image_id": 10024,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:01:13",
                           "update_time": "2018-07-17 11:01:13",
                           "image": {
                               "file_id": 10024,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717110113a228e2926.jpg",
                               "file_size": 5268,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:01:13",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717110113a228e2926.jpg"
                           }
                       }, {
                           "category_id": 10034,
                           "name": "\u5403\u9e21\u88c5\u5907",
                           "parent_id": 10003,
                           "image_id": 10025,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:01:56",
                           "update_time": "2018-07-17 11:01:56",
                           "image": {
                               "file_id": 10025,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717110155a2c675940.jpg",
                               "file_size": 12093,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:01:55",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717110155a2c675940.jpg"
                           }
                       }]
                   }
               ,
                   "10004"
               :
                   {
                       "category_id"
                   :
                       10004,
                           "name"
                   :
                       "\u6c7d\u8f66\u7528\u54c1",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       65,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:23",
                           "update_time"
                   :
                       "2018-07-17 10:10:23",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10036,
                           "name": "\u673a\u6cb9",
                           "parent_id": 10004,
                           "image_id": 10026,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:10:06",
                           "update_time": "2018-07-17 11:10:06",
                           "image": {
                               "file_id": 10026,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111006b08a71831.jpg",
                               "file_size": 4997,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:10:06",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111006b08a71831.jpg"
                           }
                       }, {
                           "category_id": 10037,
                           "name": "\u6c7d\u8f66\u5750\u57ab",
                           "parent_id": 10004,
                           "image_id": 10027,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:10:23",
                           "update_time": "2018-07-17 11:10:23",
                           "image": {
                               "file_id": 10027,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111022b868d7975.jpg",
                               "file_size": 6135,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:10:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111022b868d7975.jpg"
                           }
                       }, {
                           "category_id": 10038,
                           "name": "\u6d17\u8f66\u6c34\u67aa",
                           "parent_id": 10004,
                           "image_id": 10028,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:10:53",
                           "update_time": "2018-07-17 11:10:53",
                           "image": {
                               "file_id": 10028,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111051000d82311.jpg",
                               "file_size": 14490,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:10:51",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111051000d82311.jpg"
                           }
                       }, {
                           "category_id": 10039,
                           "name": "\u884c\u8f66\u8bb0\u5f55\u4eea",
                           "parent_id": 10004,
                           "image_id": 10029,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:11:10",
                           "update_time": "2018-07-17 11:11:10",
                           "image": {
                               "file_id": 10029,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111109f7fa08380.jpg",
                               "file_size": 14950,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:11:09",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111109f7fa08380.jpg"
                           }
                       }, {
                           "category_id": 10040,
                           "name": "\u8f6e\u80ce",
                           "parent_id": 10004,
                           "image_id": 10030,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:11:28",
                           "update_time": "2018-07-17 11:11:28",
                           "image": {
                               "file_id": 10030,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111127823353846.jpg",
                               "file_size": 9196,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:11:27",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111127823353846.jpg"
                           }
                       }, {
                           "category_id": 10041,
                           "name": "\u5e94\u6025\u6551\u63f4",
                           "parent_id": 10004,
                           "image_id": 10031,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:11:47",
                           "update_time": "2018-07-17 11:11:47",
                           "image": {
                               "file_id": 10031,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111146d51048663.png",
                               "file_size": 10152,
                               "file_type": "image",
                               "extension": "png",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:11:46",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111146d51048663.png"
                           }
                       }, {
                           "category_id": 10042,
                           "name": "\u9999\u6c34",
                           "parent_id": 10004,
                           "image_id": 10032,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:12:04",
                           "update_time": "2018-07-17 11:12:04",
                           "image": {
                               "file_id": 10032,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111203b9dfd9346.jpg",
                               "file_size": 8718,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:12:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111203b9dfd9346.jpg"
                           }
                       }, {
                           "category_id": 10043,
                           "name": "\u529f\u80fd\u5c0f\u4ef6",
                           "parent_id": 10004,
                           "image_id": 10033,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:12:30",
                           "update_time": "2018-07-17 11:12:30",
                           "image": {
                               "file_id": 10033,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111229ee1cc6809.jpg",
                               "file_size": 7495,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:12:29",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111229ee1cc6809.jpg"
                           }
                       }, {
                           "category_id": 10044,
                           "name": "\u6302\u4ef6",
                           "parent_id": 10004,
                           "image_id": 10034,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:12:44",
                           "update_time": "2018-07-17 11:12:44",
                           "image": {
                               "file_id": 10034,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171112441551b5825.jpg",
                               "file_size": 7259,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:12:44",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171112441551b5825.jpg"
                           }
                       }]
                   }
               ,
                   "10005"
               :
                   {
                       "category_id"
                   :
                       10005,
                           "name"
                   :
                       "\u7537\u88c5",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       70,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:28",
                           "update_time"
                   :
                       "2018-07-17 10:10:28",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10045,
                           "name": "\u5939\u514b",
                           "parent_id": 10005,
                           "image_id": 10035,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:19:20",
                           "update_time": "2018-07-17 11:19:20",
                           "image": {
                               "file_id": 10035,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111920ceed03487.jpg",
                               "file_size": 5192,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:19:20",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111920ceed03487.jpg"
                           }
                       }, {
                           "category_id": 10046,
                           "name": "T\u6064",
                           "parent_id": 10005,
                           "image_id": 10036,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:19:35",
                           "update_time": "2018-07-17 11:19:35",
                           "image": {
                               "file_id": 10036,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111934843975679.jpg",
                               "file_size": 7368,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:19:34",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111934843975679.jpg"
                           }
                       }, {
                           "category_id": 10047,
                           "name": " \u9488\u7ec7\u886b",
                           "parent_id": 10005,
                           "image_id": 10037,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:19:51",
                           "update_time": "2018-07-17 11:19:51",
                           "image": {
                               "file_id": 10037,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717111947621281997.jpg",
                               "file_size": 6422,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:19:47",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717111947621281997.jpg"
                           }
                       }, {
                           "category_id": 10048,
                           "name": "\u886c\u886b",
                           "parent_id": 10005,
                           "image_id": 10038,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:04",
                           "update_time": "2018-07-17 11:20:04",
                           "image": {
                               "file_id": 10038,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112003e256b0783.jpg",
                               "file_size": 3410,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112003e256b0783.jpg"
                           }
                       }, {
                           "category_id": 10049,
                           "name": "\u536b\u8863",
                           "parent_id": 10005,
                           "image_id": 10039,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:18",
                           "update_time": "2018-07-17 11:20:18",
                           "image": {
                               "file_id": 10039,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112017badbf2419.jpg",
                               "file_size": 6368,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:17",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112017badbf2419.jpg"
                           }
                       }, {
                           "category_id": 10050,
                           "name": "\u98ce\u8863",
                           "parent_id": 10005,
                           "image_id": 10040,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:31",
                           "update_time": "2018-07-17 11:20:31",
                           "image": {
                               "file_id": 10040,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171120302592a7226.jpg",
                               "file_size": 4184,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:30",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171120302592a7226.jpg"
                           }
                       }, {
                           "category_id": 10051,
                           "name": "\u725b\u4ed4\u88e4",
                           "parent_id": 10005,
                           "image_id": 10041,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:42",
                           "update_time": "2018-07-17 11:20:42",
                           "image": {
                               "file_id": 10041,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112041f0b904756.jpg",
                               "file_size": 10103,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:41",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112041f0b904756.jpg"
                           }
                       }, {
                           "category_id": 10052,
                           "name": "\u4f11\u95f2\u88e4",
                           "parent_id": 10005,
                           "image_id": 10042,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:20:56",
                           "update_time": "2018-07-17 11:20:56",
                           "image": {
                               "file_id": 10042,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112056240332466.jpg",
                               "file_size": 4264,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:20:56",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112056240332466.jpg"
                           }
                       }, {
                           "category_id": 10053,
                           "name": "\u81ea\u8425\u7537\u88c5",
                           "parent_id": 10005,
                           "image_id": 10043,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 11:21:09",
                           "update_time": "2018-07-17 11:21:09",
                           "image": {
                               "file_id": 10043,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717112108ae6848513.jpg",
                               "file_size": 15062,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 11:21:08",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717112108ae6848513.jpg"
                           }
                       }]
                   }
               ,
                   "10006"
               :
                   {
                       "category_id"
                   :
                       10006,
                           "name"
                   :
                       "\u5973\u88c5",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       75,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:34",
                           "update_time"
                   :
                       "2018-07-17 10:10:34",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10054,
                           "name": "\u65e9\u6625\u65b0\u54c1",
                           "parent_id": 10006,
                           "image_id": 10044,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:11:14",
                           "update_time": "2018-07-17 13:11:14",
                           "image": {
                               "file_id": 10044,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171311135ad417707.jpg",
                               "file_size": 3792,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:11:13",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171311135ad417707.jpg"
                           }
                       }, {
                           "category_id": 10055,
                           "name": "\u8fde\u8863\u88d9",
                           "parent_id": 10006,
                           "image_id": 10045,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:11:48",
                           "update_time": "2018-07-17 13:11:48",
                           "image": {
                               "file_id": 10045,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131147254102370.jpg",
                               "file_size": 4624,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:11:47",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131147254102370.jpg"
                           }
                       }, {
                           "category_id": 10056,
                           "name": "\u886c\u886b",
                           "parent_id": 10006,
                           "image_id": 10046,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:05",
                           "update_time": "2018-07-17 13:12:05",
                           "image": {
                               "file_id": 10046,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131203b2d096600.jpg",
                               "file_size": 6460,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:03",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131203b2d096600.jpg"
                           }
                       }, {
                           "category_id": 10057,
                           "name": "T\u6064",
                           "parent_id": 10006,
                           "image_id": 10047,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:22",
                           "update_time": "2018-07-17 13:12:22",
                           "image": {
                               "file_id": 10047,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131221305a62112.jpg",
                               "file_size": 6995,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:21",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131221305a62112.jpg"
                           }
                       }, {
                           "category_id": 10058,
                           "name": "\u725b\u4ed4\u88e4",
                           "parent_id": 10006,
                           "image_id": 10048,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:34",
                           "update_time": "2018-07-17 13:12:34",
                           "image": {
                               "file_id": 10048,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131233a76585133.jpg",
                               "file_size": 4764,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:33",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131233a76585133.jpg"
                           }
                       }, {
                           "category_id": 10059,
                           "name": "\u536b\u8863",
                           "parent_id": 10006,
                           "image_id": 10049,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:12:45",
                           "update_time": "2018-07-17 13:12:45",
                           "image": {
                               "file_id": 10049,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131244f99b38300.jpg",
                               "file_size": 6260,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:12:44",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131244f99b38300.jpg"
                           }
                       }, {
                           "category_id": 10060,
                           "name": "\u9488\u7ec7\u886b",
                           "parent_id": 10006,
                           "image_id": 10050,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:13:03",
                           "update_time": "2018-07-17 13:13:03",
                           "image": {
                               "file_id": 10050,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171313023ada84138.jpg",
                               "file_size": 3672,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:13:02",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171313023ada84138.jpg"
                           }
                       }, {
                           "category_id": 10061,
                           "name": "\u725b\u4ed4\u5916\u5957",
                           "parent_id": 10006,
                           "image_id": 10051,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:13:18",
                           "update_time": "2018-07-17 13:13:18",
                           "image": {
                               "file_id": 10051,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071713131446f0c9984.jpg",
                               "file_size": 6518,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:13:14",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071713131446f0c9984.jpg"
                           }
                       }, {
                           "category_id": 10062,
                           "name": "\u81ea\u8425\u5973\u88c5",
                           "parent_id": 10006,
                           "image_id": 10052,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:13:30",
                           "update_time": "2018-07-17 13:13:30",
                           "image": {
                               "file_id": 10052,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717131329ec4c16995.jpg",
                               "file_size": 6660,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:13:29",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717131329ec4c16995.jpg"
                           }
                       }]
                   }
               ,
                   "10007"
               :
                   {
                       "category_id"
                   :
                       10007,
                           "name"
                   :
                       "\u949f\u8868\u73e0\u5b9d",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       80,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:10:38",
                           "update_time"
                   :
                       "2018-07-17 10:10:38",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10069,
                           "name": "\u745e\u8868 ",
                           "parent_id": 10007,
                           "image_id": 10059,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:25",
                           "update_time": "2018-07-17 13:26:25",
                           "image": {
                               "file_id": 10059,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132624d5fbe7006.jpg",
                               "file_size": 6588,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:24",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132624d5fbe7006.jpg"
                           }
                       }, {
                           "category_id": 10070,
                           "name": "\u56fd\u8868",
                           "parent_id": 10007,
                           "image_id": 10060,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:35",
                           "update_time": "2018-07-17 13:26:35",
                           "image": {
                               "file_id": 10060,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132634e4bf75583.jpg",
                               "file_size": 9885,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:34",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132634e4bf75583.jpg"
                           }
                       }, {
                           "category_id": 10071,
                           "name": "\u5fb7\u8868",
                           "parent_id": 10007,
                           "image_id": 10061,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:45",
                           "update_time": "2018-07-17 13:26:45",
                           "image": {
                               "file_id": 10061,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132644d48de9165.jpg",
                               "file_size": 13620,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:45",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132644d48de9165.jpg"
                           }
                       }, {
                           "category_id": 10072,
                           "name": "\u65e5\u97e9\u8868",
                           "parent_id": 10007,
                           "image_id": 10062,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:26:57",
                           "update_time": "2018-07-17 13:26:57",
                           "image": {
                               "file_id": 10062,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071713265693a4f9387.jpg",
                               "file_size": 7428,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:26:56",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071713265693a4f9387.jpg"
                           }
                       }, {
                           "category_id": 10073,
                           "name": "\u513f\u7ae5\u624b\u8868",
                           "parent_id": 10007,
                           "image_id": 10063,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:27:08",
                           "update_time": "2018-07-17 13:27:08",
                           "image": {
                               "file_id": 10063,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132707c4a8f0033.jpg",
                               "file_size": 4140,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:27:07",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132707c4a8f0033.jpg"
                           }
                       }, {
                           "category_id": 10074,
                           "name": "\u6b27\u7f8e\u8868",
                           "parent_id": 10007,
                           "image_id": 10064,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:27:23",
                           "update_time": "2018-07-17 13:27:23",
                           "image": {
                               "file_id": 10064,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171327225fbab4337.jpg",
                               "file_size": 10433,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:27:22",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171327225fbab4337.jpg"
                           }
                       }]
                   }
               ,
                   "10008"
               :
                   {
                       "category_id"
                   :
                       10008,
                           "name"
                   :
                       "\u5185\u8863\u914d\u9970",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       85,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:14:54",
                           "update_time"
                   :
                       "2018-07-17 10:14:54",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10063,
                           "name": "\u5185\u8863\u9986",
                           "parent_id": 10008,
                           "image_id": 10053,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:20:38",
                           "update_time": "2018-07-17 13:20:38",
                           "image": {
                               "file_id": 10053,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171320372e8bc5809.jpg",
                               "file_size": 13037,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:20:37",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171320372e8bc5809.jpg"
                           }
                       }, {
                           "category_id": 10064,
                           "name": "\u5927\u724c\u6587\u80f8",
                           "parent_id": 10008,
                           "image_id": 10054,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:20:51",
                           "update_time": "2018-07-17 13:20:51",
                           "image": {
                               "file_id": 10054,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132050e21532763.jpg",
                               "file_size": 16067,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:20:50",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132050e21532763.jpg"
                           }
                       }, {
                           "category_id": 10065,
                           "name": "\u81ea\u8425\u5185\u8863",
                           "parent_id": 10008,
                           "image_id": 10055,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:05",
                           "update_time": "2018-07-17 13:21:05",
                           "image": {
                               "file_id": 10055,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132104618394299.jpg",
                               "file_size": 17475,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:04",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132104618394299.jpg"
                           }
                       }, {
                           "category_id": 10066,
                           "name": "\u5185\u8863\u7206\u6b3e",
                           "parent_id": 10008,
                           "image_id": 10056,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:22",
                           "update_time": "2018-07-17 13:21:22",
                           "image": {
                               "file_id": 10056,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132121264643605.jpg",
                               "file_size": 6351,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:21",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132121264643605.jpg"
                           }
                       }, {
                           "category_id": 10067,
                           "name": "\u5973\u58eb\u56f4\u5dfe\/\u62ab\u80a9",
                           "parent_id": 10008,
                           "image_id": 10057,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:42",
                           "update_time": "2018-07-17 13:21:42",
                           "image": {
                               "file_id": 10057,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132140550de7975.jpg",
                               "file_size": 3993,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:40",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132140550de7975.jpg"
                           }
                       }, {
                           "category_id": 10068,
                           "name": "\u914d\u9970\u9986",
                           "parent_id": 10008,
                           "image_id": 10058,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:21:56",
                           "update_time": "2018-07-17 13:21:56",
                           "image": {
                               "file_id": 10058,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717132155b43889897.jpg",
                               "file_size": 5946,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:21:55",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717132155b43889897.jpg"
                           }
                       }]
                   }
               ,
                   "10009"
               :
                   {
                       "category_id"
                   :
                       10009,
                           "name"
                   :
                       "\u7bb1\u5305\u624b\u888b",
                           "parent_id"
                   :
                       0,
                           "image_id"
                   :
                       0,
                           "sort"
                   :
                       90,
                           "wxapp_id"
                   :
                       10001,
                           "create_time"
                   :
                       "2018-07-17 10:14:59",
                           "update_time"
                   :
                       "2018-07-17 10:14:59",
                           "image"
                   :
                       null,
                           "child"
                   :
                       [{
                           "category_id": 10075,
                           "name": "\u62c9\u6746\u7bb1",
                           "parent_id": 10009,
                           "image_id": 10065,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:31:44",
                           "update_time": "2018-07-17 13:31:44",
                           "image": {
                               "file_id": 10065,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717133143a45f59273.jpg",
                               "file_size": 11379,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:31:43",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717133143a45f59273.jpg"
                           }
                       }, {
                           "category_id": 10076,
                           "name": "\u65f6\u5c1a\u7537\u5305",
                           "parent_id": 10009,
                           "image_id": 10066,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:31:59",
                           "update_time": "2018-07-17 13:31:59",
                           "image": {
                               "file_id": 10066,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717133158bf0436318.jpg",
                               "file_size": 4243,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:31:58",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717133158bf0436318.jpg"
                           }
                       }, {
                           "category_id": 10077,
                           "name": "\u7537\u58eb\u8170\u5e26",
                           "parent_id": 10009,
                           "image_id": 10067,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:13",
                           "update_time": "2018-07-17 13:32:13",
                           "image": {
                               "file_id": 10067,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171332128992b6822.jpg",
                               "file_size": 9902,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:12",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171332128992b6822.jpg"
                           }
                       }, {
                           "category_id": 10078,
                           "name": "\u7537\u5305\u4e0a\u65b0",
                           "parent_id": 10009,
                           "image_id": 10068,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:28",
                           "update_time": "2018-07-17 13:32:28",
                           "image": {
                               "file_id": 10068,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "20180717133227cfde21313.jpg",
                               "file_size": 14739,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:27",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/20180717133227cfde21313.jpg"
                           }
                       }, {
                           "category_id": 10079,
                           "name": "\u81ea\u8425\u5973\u5305",
                           "parent_id": 10009,
                           "image_id": 10069,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:48",
                           "update_time": "2018-07-17 13:32:48",
                           "image": {
                               "file_id": 10069,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "201807171332472e5603287.jpg",
                               "file_size": 4437,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:47",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/201807171332472e5603287.jpg"
                           }
                       }, {
                           "category_id": 10080,
                           "name": "\u65b0\u6b3e\u53cc\u80a9\u5305",
                           "parent_id": 10009,
                           "image_id": 10070,
                           "sort": 100,
                           "wxapp_id": 10001,
                           "create_time": "2018-07-17 13:32:58",
                           "update_time": "2018-07-17 13:32:58",
                           "image": {
                               "file_id": 10070,
                               "storage": "qiniu",
                               "group_id": 0,
                               "file_url": "http:\/\/static.yoshop.xany6.com",
                               "file_name": "2018071713325709a965823.jpg",
                               "file_size": 7190,
                               "file_type": "image",
                               "extension": "jpg",
                               "is_user": 0,
                               "is_delete": 0,
                               "wxapp_id": 10001,
                               "create_time": "2018-07-17 13:32:57",
                               "file_path": "http:\/\/static.yoshop.xany6.com\/2018071713325709a965823.jpg"
                           }
                       }]
                   }
               },
               "sharingCatgory":[],
               "articleCatgory":[]
           }
       ]
           // {
           //     "search":{
           //         "name":"\u641c\u7d22\u6846",
           //         "type":"search",
           //         "params":{
           //             "placeholder":"\u8bf7\u8f93\u5165\u5173\u952e\u5b57\u8fdb\u884c\u641c\u7d22"
           //         },
           //         "style":{
           //             "textAlign":"left","searchStyle":"square"
           //         }
           //     },
           //     "banner":{
           //         "name":"\u56fe\u7247\u8f6e\u64ad",
           //         "type":"banner",
           //         "style":{
           //             "btnColor":"#ffffff",
           //             "btnShape":"round"
           //         },
           //         "params":{
           //             "interval":"2800"
           //         },
           //         "data":[
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png","linkUrl":""},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png","linkUrl":""}
           //         ]
           //     },
           //     "imageSingle":{
           //         "name":"\u5355\u56fe\u7ec4",
           //         "type":"imageSingle",
           //         "style":{
           //             "paddingTop":0,"paddingLeft":0,"background":"#ffffff"
           //         },
           //         "data":[
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png","imgName":"image-1.jpg","linkUrl":""},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png","imgName":"banner-2.jpg","linkUrl":""}
           //         ]
           //     },
           //     "navBar":{
           //         "name":"\u5bfc\u822a\u7ec4",
           //         "type":"navBar",
           //         "style":{"background":"#ffffff","rowsNum":"4"},
           //         "data":[
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-1.png","linkUrl":"","text":"\u6309\u94ae\u6587\u5b571","color":"#666666"},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-2.jpg","linkUrl":"","text":"\u6309\u94ae\u6587\u5b572","color":"#666666"},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-3.jpg","linkUrl":"","text":"\u6309\u94ae\u6587\u5b573","color":"#666666"},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-4.jpg","linkUrl":"","text":"\u6309\u94ae\u6587\u5b574","color":"#666666"}
           //         ]
           //     },
           //     "blank":{"name":"\u8f85\u52a9\u7a7a\u767d","type":"blank","style":{"height":"20","background":"#ffffff"}},
           //     "guide":{
           //         "name":"\u8f85\u52a9\u7ebf",
           //         "type":"guide",
           //         "style":{"background":"#ffffff","lineStyle":"solid","lineHeight":"1","lineColor":"#000000","paddingTop":10
           //         }
           //     },
           //     "video":{
           //         "name":"\u89c6\u9891\u7ec4",
           //         "type":"video",
           //         "params":
           //         {"videoUrl":"http:\/\/wxsnsdy.tc.qq.com\/105\/20210\/snsdyvideodownload?filekey=30280201010421301f0201690402534804102ca905ce620b1241b726bc41dcff44e00204012882540400",
           //             "poster":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/video_poster.png","autoplay":"0"},
           //         "style":{"paddingTop":"0","height":"190"}},
           //     "article":{
           //         "name":"\u6587\u7ae0\u7ec4","type":"article",
           //         "params":{"source":"auto","auto":{"category":0,"showNum":6}},
           //         "style":[],
           //         "defaultData":[
           //             {"article_title":"\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898","show_type":10,"image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png","views_num":"309"},
           //             {"article_title":"\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898","show_type":10,"image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png","views_num":"309"}
           //         ],
           //         "data":[]},
           //     "special":{
           //         "name":"\u5934\u6761\u5feb\u62a5","type":"special",
           //         "params":{"source":"auto","auto":{"category":0,"showNum":6}},
           //         "style":{"display":"1","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/special.png"},
           //         "defaultData":[
           //             {"article_title":"\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"},
           //             {"article_title":"\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"}
           //         ],
           //         "data":[]},
           //     "notice":{
           //         "name":"\u516c\u544a\u7ec4","type":"notice",
           //         "params":{
           //             "text":"\u8fd9\u91cc\u662f\u7b2c\u4e00\u6761\u81ea\u5b9a\u4e49\u516c\u544a\u7684\u6807\u9898","icon":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/notice.png"
           //         },
           //         "style":{"paddingTop":"4","background":"#ffffff","textColor":"#000000"}
           //     },
           //     "richText":{
           //         "name":"\u5bcc\u6587\u672c",
           //         "type":"richText",
           //         "params":{"content":"<p>\u8fd9\u91cc\u662f\u6587\u672c\u7684\u5185\u5bb9<\/p>"
           //         },
           //         "style":{
           //             "paddingTop":"0","paddingLeft":"0","background":"#ffffff"
           //         }
           //     },
           //     "window":{
           //         "name":"\u56fe\u7247\u6a71\u7a97",
           //         "type":"window",
           //         "style":{"paddingTop":"0","paddingLeft":"0","background":"#ffffff","layout":"2"},
           //         "data":[
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/01.jpg","linkUrl":""},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/02.jpg","linkUrl":""},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/03.jpg","linkUrl":""},
           //             {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/04.jpg","linkUrl":""}
           //         ],
           //         "dataNum":4
           //     },
           //     "goods":{
           //         "name":"\u5546\u54c1\u7ec4","type":"goods",
           //         "params":{"source":"auto","auto":{"category":0,"goodsSort":"all","showNum":6}},
           //         "style":{"background":"#F6F6F6","display":"list","column":"2",
           //             "show":{"goodsName":"1","goodsPrice":"1","linePrice":"1","sellingPoint":"0","goodsSales":"0"}},
           //         "defaultData":[
           //             {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "goods_sales":"100"},
           //             {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "goods_sales":"100"},
           //             {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "goods_sales":"100"},
           //             {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "goods_sales":"100"}
           //         ],
           //         "data":[
           //             {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
           //                 "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png","goods_price":"99.00","line_price":"139.00",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7","goods_sales":"100","is_default":true},
           //             {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "goods_sales":"100","is_default":true}
           //         ]
           //     },
           //     "coupon":{"name":"\u4f18\u60e0\u5238\u7ec4","type":"coupon", "style":{"paddingTop":"10","background":"#ffffff"},
           //         "params":{"limit":"5"},
           //         "data":[
           //             {"color":"red","reduce_price":"10","min_price":"100.00"},
           //             {"color":"violet","reduce_price":"10","min_price":"100.00"}
           //         ]
           //     },
           //     "sharingGoods":{
           //         "name":"\u62fc\u56e2\u5546\u54c1\u7ec4",
           //         "type":"sharingGoods",
           //         "params":{
           //             "source":"auto",
           //             "auto":{"category":0,"goodsSort":"all","showNum":6}},
           //         "style":{"background":"#F6F6F6","show":{"goodsName":"1","sellingPoint":"1","sharingPrice":"1","linePrice":"1"}},
           //         "defaultData":[
           //             {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
           //                 "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "sharing_price":"99.00","line_price":"139.00"},
           //             {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
           //                 "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "goods_price":"99.00","line_price":"139.00"},
           //             {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "sharing_price":"99.00","line_price":"139.00"},
           //             {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
           //                 "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "sharing_price":"99.00","line_price":"139.00"}],
           //         "data":[
           //             {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
           //                 "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "sharing_price":"99.00","line_price":"139.00","is_default":true},
           //             {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
           //                 "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
           //                 "sharing_price":"99.00","line_price":"139.00","is_default":true}
           //         ]
           //     },
           //     "bargainGoods":{
           //         "name":"\u780d\u4ef7\u5546\u54c1\u7ec4","type":"bargainGoods",
           //         "params":{
           //             "source":"auto",
           //             "auto":{"category":0,"goodsSort":"all","showNum":6}},
           //         "style":{"background":"#F6F6F6","show":{"goodsName":"1","peoples":"1","floorPrice":"1","originalPrice":"1"}},
           //         "demo":{"helps_count":2,
           //             "helps":[{"avatarUrl":"http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zrytvvj30dw0dwwes.jpg"},
           //                 {"avatarUrl":"http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zs2u5ej30b40b4dfx.jpg"}]},
           //         "defaultData":[{"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
           //             "goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //             "floor_price":"0.01","original_price":"139.00"},
           //             {"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1","goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "floor_price":"0.01","original_price":"139.00"}],
           //         "data":[
           //             {"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1","goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "floor_price":"0.01","original_price":"139.00"},
           //             {"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1","goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
           //                 "floor_price":"0.01","original_price":"139.00"}
           //         ]},
           //     "shop":{
           //         "name":"\u7ebf\u4e0b\u95e8\u5e97","type":"shop",
           //         "params":{"source":"auto",
           //             "auto":{"showNum":6}
           //         },
           //         "style":[],
           //         "defaultData":[
           //             {"shop_name":"\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0","logo_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
           //                 "phone":"010-6666666","region":{"province":"xx\u7701","city":"xx\u5e02","region":"xx\u533a"},"address":"xx\u8857\u9053"},
           //             {"shop_name":"\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0","logo_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
           //                 "phone":"010-6666666","region":{"province":"xx\u7701","city":"xx\u5e02","region":"xx\u533a"},"address":"xx\u8857\u9053"}
           //         ],
           //         "data":[
           //             {"shop_name":"\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0","logo_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
           //                 "phone":"010-6666666","region":{"province":"xx\u7701","city":"xx\u5e02","region":"xx\u533a"},"address":"xx\u8857\u9053"}]},
           //     "service":{"name":"\u5728\u7ebf\u5ba2\u670d","type":"service",
           //         "params":{"type":"chat","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/service.png","phone_num":""},
           //         "style":{"right":"1","bottom":"10","opacity":"100"}}
           // },
           // {"page":{"type":"page","name":"\u9875\u9762\u8bbe\u7f6e",
           //     "params":{"name":"\u9875\u9762\u540d\u79f0","title":"\u9875\u9762\u6807\u9898","share_title":"\u5206\u4eab\u6807\u9898"},
           //     "style":{"titleTextColor":"black","titleBackgroundColor":"#ffffff"}},"items":[]}, {
           //     "catgory":{
           //         "10001":
           //         {"category_id":10001,"name":"\u624b\u673a\u6570\u7801","parent_id":0,"image_id":0,"sort":50,"wxapp_id":10001,"create_time":"2018-07-17 10:10:07", "update_time":"2018-07-27 20:14:26","image":null,
           //             "child":[
           //                 {"category_id":10010,"name":"\u5c0f\u7c73","parent_id":10001,"image_id":10001,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:21:04", "update_time":"2018-07-17 10:21:04",
           //                     "image":{"file_id":10001,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com", "file_name":"201807171021031720f9679.png","file_size":6412,"file_type":"image",
           //                         "extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001, "create_time":"2018-07-17 10:21:03","file_path":"http:\/\/static.yoshop.xany6.com\/201807171021031720f9679.png"}},
           //                 {"category_id":10011,"name":"\u534e\u4e3a","parent_id":10001,"image_id":10002,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:21:30", "update_time":"2018-07-17 10:21:30",
           //                     "image":{"file_id":10002,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com", "file_name":"20180717102129b4e214214.jpg","file_size":1926,"file_type":"image",
           //                         "extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001, "create_time":"2018-07-17 10:21:29","file_path":"http:\/\/static.yoshop.xany6.com\/20180717102129b4e214214.jpg"}},
           //                 {"category_id":10012,"name":"Iphone","parent_id":10001,"image_id":10003,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:36:05",
           //                     "update_time":"2018-07-17 10:36:05","image":{"file_id":10003,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com",
           //                     "file_name":"20180717103600edf9f5038.jpg","file_size":3967,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,
           //                     "create_time":"2018-07-17 10:36:00","file_path":"http:\/\/static.yoshop.xany6.com\/20180717103600edf9f5038.jpg"}},
           //                 {"category_id":10013,"name":"vivo","parent_id":10001,"image_id":10004,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:36:44","update_time":"2018-07-17 10:36:44",
           //                     "image":{"file_id":10004,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717103633c69c94138.png","file_size":4927,
           //                         "file_type":"image","extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:36:33",
           //                         "file_path":"http:\/\/static.yoshop.xany6.com\/20180717103633c69c94138.png"}},
           //                 {"category_id":10014,"name":"OPPO","parent_id":10001,"image_id":10005,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:37:23","update_time":"2018-07-17 10:37:23",
           //                     "image":{"file_id":10005,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071710372269a633020.png","file_size":4675,
           //                         "file_type":"image","extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:37:22",
           //                         "file_path":"http:\/\/static.yoshop.xany6.com\/2018071710372269a633020.png"}},
           //                 {"category_id":10015,"name":"\u9b45\u65cf","parent_id":10001,"image_id":10006,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:37:58",
           //                     "update_time":"2018-07-17 10:37:58",
           //                     "image":{"file_id":10006,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com",
           //                         "file_name":"201807171037574f1163513.jpg","file_size":13114,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,
           //                         "create_time":"2018-07-17 10:37:57","file_path":"http:\/\/static.yoshop.xany6.com\/201807171037574f1163513.jpg"}},
           //                 {"category_id":10016,"name":"\u4e09\u661f","parent_id":10001,"image_id":10007,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:38:18",
           //                     "update_time":"2018-07-17 10:38:18","image":{"file_id":10007,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com",
           //                     "file_name":"20180717103817b50602761.png","file_size":5996,"file_type":"image","extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001,
           //                     "create_time":"2018-07-17 10:38:17","file_path":"http:\/\/static.yoshop.xany6.com\/20180717103817b50602761.png"}},
           //                 {"category_id":10017,"name":"\u5973\u6027\u624b\u673a","parent_id":10001,"image_id":10008,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:38:59",
           //                     "update_time":"2018-07-17 10:38:59",
           //                     "image":{"file_id":10008,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com",
           //                         "file_name":"20180717103858579b29364.jpg","file_size":4018,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,
           //                         "create_time":"2018-07-17 10:38:58","file_path":"http:\/\/static.yoshop.xany6.com\/20180717103858579b29364.jpg"}}]
           //         },
           //         "10002":
           //         {"category_id":10002,"name":"\u5bb6\u7528\u7535\u5668","parent_id":0,"image_id":0,"sort":55,"wxapp_id":10001,"create_time":"2018-07-17 10:10:13","update_time":"2018-07-27 20:16:08","image":null,
           //             "child":[
           //                 {"category_id":10018,"name":"\u7535\u6c34\u58f6\/\u70ed\u6c34\u74f6","parent_id":10002,"image_id":10009,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:45:17","update_time":"2018-07-17 10:45:17","image":{"file_id":10009,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717104516f15c71914.jpg","file_size":5141,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:45:16","file_path":"http:\/\/static.yoshop.xany6.com\/20180717104516f15c71914.jpg"}},
           //                 {"category_id":10019,"name":"\u7535\u538b\u529b\u9505","parent_id":10002,"image_id":10010,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:45:46","update_time":"2018-07-17 10:45:46","image":{"file_id":10010,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717104545203c11990.jpg","file_size":3704,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:45:45","file_path":"http:\/\/static.yoshop.xany6.com\/20180717104545203c11990.jpg"}},
           //                 {"category_id":10020,"name":"\u7535\u996d\u7172","parent_id":10002,"image_id":10011,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:46:04","update_time":"2018-07-17 10:46:04","image":{"file_id":10011,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717104603be4eb3302.jpg","file_size":5549,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:46:03","file_path":"http:\/\/static.yoshop.xany6.com\/20180717104603be4eb3302.jpg"}},
           //                 {"category_id":10021,"name":"\u7535\u78c1\u7089","parent_id":10002,"image_id":10012,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:46:34","update_time":"2018-07-17 10:46:34","image":{"file_id":10012,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071710463313a4c6481.jpg","file_size":4231,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:46:33","file_path":"http:\/\/static.yoshop.xany6.com\/2018071710463313a4c6481.jpg"}},
           //                 {"category_id":10022,"name":"\u5fae\u6ce2\u7089","parent_id":10002,"image_id":10013,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:47:01","update_time":"2018-07-17 10:47:01","image":{"file_id":10013,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171046566fa078397.jpg","file_size":2598,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:46:56","file_path":"http:\/\/static.yoshop.xany6.com\/201807171046566fa078397.jpg"}},
           //                 {"category_id":10023,"name":"\u7535\u997c\u94db","parent_id":10002,"image_id":10014,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:47:23","update_time":"2018-07-17 10:47:23","image":{"file_id":10014,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071710472279ea01034.jpg","file_size":4373,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:47:22","file_path":"http:\/\/static.yoshop.xany6.com\/2018071710472279ea01034.jpg"}},
           //                 {"category_id":10024,"name":"\u8c46\u6d46\u673a","parent_id":10002,"image_id":10015,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:47:56","update_time":"2018-07-17 10:47:56","image":{"file_id":10015,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717104753612ab0376.jpg","file_size":2373,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:47:53","file_path":"http:\/\/static.yoshop.xany6.com\/20180717104753612ab0376.jpg"}},
           //                 {"category_id":10025,"name":"\u591a\u7528\u9014\u9505","parent_id":10002,"image_id":10016,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:48:11","update_time":"2018-07-17 10:48:11","image":{"file_id":10016,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717104810f958a9886.jpg","file_size":3578,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:48:10","file_path":"http:\/\/static.yoshop.xany6.com\/20180717104810f958a9886.jpg"}}]},
           //         "10003":
           //         {"category_id":10003,"name":"\u7535\u8111\u529e\u516c","parent_id":0,"image_id":0,"sort":60,"wxapp_id":10001,"create_time":"2018-07-17 10:10:18","update_time":"2018-07-17 10:10:18","image":null,
           //             "child":[
           //                 {"category_id":10026,"name":"\u8f7b\u8584\u672c","parent_id":10003,"image_id":10017,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:57:45","update_time":"2018-07-17 10:57:45","image":{"file_id":10017,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717105744dd1269197.png","file_size":14559,"file_type":"image","extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:57:44","file_path":"http:\/\/static.yoshop.xany6.com\/20180717105744dd1269197.png"}},
           //                 {"category_id":10027,"name":"\u6e38\u620f\u672c","parent_id":10003,"image_id":10018,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:58:09","update_time":"2018-07-17 10:58:09","image":{"file_id":10018,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717105805e81ec0398.png","file_size":17237,"file_type":"image","extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:58:05","file_path":"http:\/\/static.yoshop.xany6.com\/20180717105805e81ec0398.png"}},
           //                 {"category_id":10028,"name":"\u673a\u68b0\u952e\u76d8","parent_id":10003,"image_id":10019,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:58:28","update_time":"2018-07-17 10:58:28","image":{"file_id":10019,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071710582753f808887.jpg","file_size":11549,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:58:27","file_path":"http:\/\/static.yoshop.xany6.com\/2018071710582753f808887.jpg"}},
           //                 {"category_id":10029,"name":"\u7ec4\u88c5\u7535\u8111","parent_id":10003,"image_id":10020,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:58:58","update_time":"2018-07-17 10:58:58","image":{"file_id":10020,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071710585094a2e1515.jpg","file_size":13744,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:58:50","file_path":"http:\/\/static.yoshop.xany6.com\/2018071710585094a2e1515.jpg"}},
           //                 {"category_id":10030,"name":"\u79fb\u52a8\u786c\u76d8","parent_id":10003,"image_id":10021,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:59:23","update_time":"2018-07-17 10:59:23","image":{"file_id":10021,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171059225fe4a0683.jpg","file_size":8563,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:59:22","file_path":"http:\/\/static.yoshop.xany6.com\/201807171059225fe4a0683.jpg"}},
           //                 {"category_id":10031,"name":"\u663e\u5361","parent_id":10003,"image_id":10022,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 10:59:45","update_time":"2018-07-17 10:59:45","image":{"file_id":10022,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171059459e20d6548.jpg","file_size":12124,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 10:59:45","file_path":"http:\/\/static.yoshop.xany6.com\/201807171059459e20d6548.jpg"}},
           //                 {"category_id":10032,"name":"\u6e38\u620f\u53f0\u5f0f\u673a","parent_id":10003,"image_id":10023,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:00:17","update_time":"2018-07-17 11:00:17","image":{"file_id":10023,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171100132e1e65488.jpg","file_size":9831,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:00:13","file_path":"http:\/\/static.yoshop.xany6.com\/201807171100132e1e65488.jpg"}},
           //                 {"category_id":10033,"name":"\u5bb6\u7528\u6253\u5370\u673a","parent_id":10003,"image_id":10024,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:01:13","update_time":"2018-07-17 11:01:13","image":{"file_id":10024,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717110113a228e2926.jpg","file_size":5268,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:01:13","file_path":"http:\/\/static.yoshop.xany6.com\/20180717110113a228e2926.jpg"}},
           //                 {"category_id":10034,"name":"\u5403\u9e21\u88c5\u5907","parent_id":10003,"image_id":10025,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:01:56","update_time":"2018-07-17 11:01:56","image":{"file_id":10025,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717110155a2c675940.jpg","file_size":12093,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:01:55","file_path":"http:\/\/static.yoshop.xany6.com\/20180717110155a2c675940.jpg"}}]},
           //         "10004":
           //         {"category_id":10004,"name":"\u6c7d\u8f66\u7528\u54c1","parent_id":0,"image_id":0,"sort":65,"wxapp_id":10001,"create_time":"2018-07-17 10:10:23","update_time":"2018-07-17 10:10:23","image":null,
           //             "child":[
           //                 {"category_id":10036,"name":"\u673a\u6cb9","parent_id":10004,"image_id":10026,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:10:06","update_time":"2018-07-17 11:10:06","image":{"file_id":10026,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111006b08a71831.jpg","file_size":4997,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:10:06","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111006b08a71831.jpg"}},
           //                 {"category_id":10037,"name":"\u6c7d\u8f66\u5750\u57ab","parent_id":10004,"image_id":10027,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:10:23","update_time":"2018-07-17 11:10:23","image":{"file_id":10027,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111022b868d7975.jpg","file_size":6135,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:10:22","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111022b868d7975.jpg"}},
           //                 {"category_id":10038,"name":"\u6d17\u8f66\u6c34\u67aa","parent_id":10004,"image_id":10028,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:10:53","update_time":"2018-07-17 11:10:53","image":{"file_id":10028,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111051000d82311.jpg","file_size":14490,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:10:51","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111051000d82311.jpg"}},
           //                 {"category_id":10039,"name":"\u884c\u8f66\u8bb0\u5f55\u4eea","parent_id":10004,"image_id":10029,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:11:10","update_time":"2018-07-17 11:11:10","image":{"file_id":10029,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111109f7fa08380.jpg","file_size":14950,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:11:09","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111109f7fa08380.jpg"}},
           //                 {"category_id":10040,"name":"\u8f6e\u80ce","parent_id":10004,"image_id":10030,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:11:28","update_time":"2018-07-17 11:11:28","image":{"file_id":10030,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111127823353846.jpg","file_size":9196,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:11:27","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111127823353846.jpg"}},
           //                 {"category_id":10041,"name":"\u5e94\u6025\u6551\u63f4","parent_id":10004,"image_id":10031,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:11:47","update_time":"2018-07-17 11:11:47","image":{"file_id":10031,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111146d51048663.png","file_size":10152,"file_type":"image","extension":"png","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:11:46","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111146d51048663.png"}},
           //                 {"category_id":10042,"name":"\u9999\u6c34","parent_id":10004,"image_id":10032,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:12:04","update_time":"2018-07-17 11:12:04","image":{"file_id":10032,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111203b9dfd9346.jpg","file_size":8718,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:12:03","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111203b9dfd9346.jpg"}},
           //                 {"category_id":10043,"name":"\u529f\u80fd\u5c0f\u4ef6","parent_id":10004,"image_id":10033,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:12:30","update_time":"2018-07-17 11:12:30","image":{"file_id":10033,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111229ee1cc6809.jpg","file_size":7495,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:12:29","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111229ee1cc6809.jpg"}},
           //                 {"category_id":10044,"name":"\u6302\u4ef6","parent_id":10004,"image_id":10034,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:12:44","update_time":"2018-07-17 11:12:44","image":{"file_id":10034,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171112441551b5825.jpg","file_size":7259,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:12:44","file_path":"http:\/\/static.yoshop.xany6.com\/201807171112441551b5825.jpg"}}]},
           //         "10005":
           //         {"category_id":10005,"name":"\u7537\u88c5","parent_id":0,"image_id":0,"sort":70,"wxapp_id":10001,"create_time":"2018-07-17 10:10:28","update_time":"2018-07-17 10:10:28","image":null,
           //             "child":[
           //                 {"category_id":10045,"name":"\u5939\u514b","parent_id":10005,"image_id":10035,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:19:20","update_time":"2018-07-17 11:19:20","image":{"file_id":10035,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111920ceed03487.jpg","file_size":5192,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:19:20","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111920ceed03487.jpg"}},
           //                 {"category_id":10046,"name":"T\u6064","parent_id":10005,"image_id":10036,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:19:35","update_time":"2018-07-17 11:19:35","image":{"file_id":10036,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111934843975679.jpg","file_size":7368,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:19:34","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111934843975679.jpg"}},
           //                 {"category_id":10047,"name":" \u9488\u7ec7\u886b","parent_id":10005,"image_id":10037,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:19:51","update_time":"2018-07-17 11:19:51","image":{"file_id":10037,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717111947621281997.jpg","file_size":6422,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:19:47","file_path":"http:\/\/static.yoshop.xany6.com\/20180717111947621281997.jpg"}},
           //                 {"category_id":10048,"name":"\u886c\u886b","parent_id":10005,"image_id":10038,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:20:04","update_time":"2018-07-17 11:20:04","image":{"file_id":10038,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717112003e256b0783.jpg","file_size":3410,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:20:03","file_path":"http:\/\/static.yoshop.xany6.com\/20180717112003e256b0783.jpg"}},
           //                 {"category_id":10049,"name":"\u536b\u8863","parent_id":10005,"image_id":10039,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:20:18","update_time":"2018-07-17 11:20:18","image":{"file_id":10039,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717112017badbf2419.jpg","file_size":6368,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:20:17","file_path":"http:\/\/static.yoshop.xany6.com\/20180717112017badbf2419.jpg"}},
           //                 {"category_id":10050,"name":"\u98ce\u8863","parent_id":10005,"image_id":10040,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:20:31","update_time":"2018-07-17 11:20:31","image":{"file_id":10040,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171120302592a7226.jpg","file_size":4184,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:20:30","file_path":"http:\/\/static.yoshop.xany6.com\/201807171120302592a7226.jpg"}},
           //                 {"category_id":10051,"name":"\u725b\u4ed4\u88e4","parent_id":10005,"image_id":10041,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:20:42","update_time":"2018-07-17 11:20:42","image":{"file_id":10041,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717112041f0b904756.jpg","file_size":10103,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:20:41","file_path":"http:\/\/static.yoshop.xany6.com\/20180717112041f0b904756.jpg"}},
           //                 {"category_id":10052,"name":"\u4f11\u95f2\u88e4","parent_id":10005,"image_id":10042,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:20:56","update_time":"2018-07-17 11:20:56","image":{"file_id":10042,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717112056240332466.jpg","file_size":4264,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:20:56","file_path":"http:\/\/static.yoshop.xany6.com\/20180717112056240332466.jpg"}},
           //                 {"category_id":10053,"name":"\u81ea\u8425\u7537\u88c5","parent_id":10005,"image_id":10043,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 11:21:09","update_time":"2018-07-17 11:21:09","image":{"file_id":10043,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717112108ae6848513.jpg","file_size":15062,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 11:21:08","file_path":"http:\/\/static.yoshop.xany6.com\/20180717112108ae6848513.jpg"}}]},
           //         "10006":
           //         {"category_id":10006,"name":"\u5973\u88c5","parent_id":0,"image_id":0,"sort":75,"wxapp_id":10001,"create_time":"2018-07-17 10:10:34","update_time":"2018-07-17 10:10:34","image":null,
           //             "child":[
           //                 {"category_id":10054,"name":"\u65e9\u6625\u65b0\u54c1","parent_id":10006,"image_id":10044,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:11:14","update_time":"2018-07-17 13:11:14","image":{"file_id":10044,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171311135ad417707.jpg","file_size":3792,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:11:13","file_path":"http:\/\/static.yoshop.xany6.com\/201807171311135ad417707.jpg"}},
           //                 {"category_id":10055,"name":"\u8fde\u8863\u88d9","parent_id":10006,"image_id":10045,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:11:48","update_time":"2018-07-17 13:11:48","image":{"file_id":10045,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717131147254102370.jpg","file_size":4624,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:11:47","file_path":"http:\/\/static.yoshop.xany6.com\/20180717131147254102370.jpg"}},
           //                 {"category_id":10056,"name":"\u886c\u886b","parent_id":10006,"image_id":10046,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:12:05","update_time":"2018-07-17 13:12:05","image":{"file_id":10046,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717131203b2d096600.jpg","file_size":6460,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:12:03","file_path":"http:\/\/static.yoshop.xany6.com\/20180717131203b2d096600.jpg"}},
           //                 {"category_id":10057,"name":"T\u6064","parent_id":10006,"image_id":10047,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:12:22","update_time":"2018-07-17 13:12:22","image":{"file_id":10047,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717131221305a62112.jpg","file_size":6995,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:12:21","file_path":"http:\/\/static.yoshop.xany6.com\/20180717131221305a62112.jpg"}},
           //                 {"category_id":10058,"name":"\u725b\u4ed4\u88e4","parent_id":10006,"image_id":10048,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:12:34","update_time":"2018-07-17 13:12:34","image":{"file_id":10048,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717131233a76585133.jpg","file_size":4764,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:12:33","file_path":"http:\/\/static.yoshop.xany6.com\/20180717131233a76585133.jpg"}},
           //                 {"category_id":10059,"name":"\u536b\u8863","parent_id":10006,"image_id":10049,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:12:45","update_time":"2018-07-17 13:12:45","image":{"file_id":10049,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717131244f99b38300.jpg","file_size":6260,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:12:44","file_path":"http:\/\/static.yoshop.xany6.com\/20180717131244f99b38300.jpg"}},
           //                 {"category_id":10060,"name":"\u9488\u7ec7\u886b","parent_id":10006,"image_id":10050,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:13:03","update_time":"2018-07-17 13:13:03","image":{"file_id":10050,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171313023ada84138.jpg","file_size":3672,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:13:02","file_path":"http:\/\/static.yoshop.xany6.com\/201807171313023ada84138.jpg"}},
           //                 {"category_id":10061,"name":"\u725b\u4ed4\u5916\u5957","parent_id":10006,"image_id":10051,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:13:18","update_time":"2018-07-17 13:13:18","image":{"file_id":10051,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071713131446f0c9984.jpg","file_size":6518,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:13:14","file_path":"http:\/\/static.yoshop.xany6.com\/2018071713131446f0c9984.jpg"}},
           //                 {"category_id":10062,"name":"\u81ea\u8425\u5973\u88c5","parent_id":10006,"image_id":10052,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:13:30","update_time":"2018-07-17 13:13:30","image":{"file_id":10052,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717131329ec4c16995.jpg","file_size":6660,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:13:29","file_path":"http:\/\/static.yoshop.xany6.com\/20180717131329ec4c16995.jpg"}}]},
           //         "10007":
           //         {"category_id":10007,"name":"\u949f\u8868\u73e0\u5b9d","parent_id":0,"image_id":0,"sort":80,"wxapp_id":10001,"create_time":"2018-07-17 10:10:38","update_time":"2018-07-17 10:10:38","image":null,
           //             "child":[
           //                 {"category_id":10069,"name":"\u745e\u8868 ","parent_id":10007,"image_id":10059,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:26:25","update_time":"2018-07-17 13:26:25","image":{"file_id":10059,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132624d5fbe7006.jpg","file_size":6588,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:26:24","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132624d5fbe7006.jpg"}},
           //                 {"category_id":10070,"name":"\u56fd\u8868","parent_id":10007,"image_id":10060,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:26:35","update_time":"2018-07-17 13:26:35","image":{"file_id":10060,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132634e4bf75583.jpg","file_size":9885,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:26:34","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132634e4bf75583.jpg"}},
           //                 {"category_id":10071,"name":"\u5fb7\u8868","parent_id":10007,"image_id":10061,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:26:45","update_time":"2018-07-17 13:26:45","image":{"file_id":10061,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132644d48de9165.jpg","file_size":13620,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:26:45","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132644d48de9165.jpg"}},
           //                 {"category_id":10072,"name":"\u65e5\u97e9\u8868","parent_id":10007,"image_id":10062,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:26:57","update_time":"2018-07-17 13:26:57","image":{"file_id":10062,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071713265693a4f9387.jpg","file_size":7428,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:26:56","file_path":"http:\/\/static.yoshop.xany6.com\/2018071713265693a4f9387.jpg"}},
           //                 {"category_id":10073,"name":"\u513f\u7ae5\u624b\u8868","parent_id":10007,"image_id":10063,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:27:08","update_time":"2018-07-17 13:27:08","image":{"file_id":10063,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132707c4a8f0033.jpg","file_size":4140,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:27:07","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132707c4a8f0033.jpg"}},
           //                 {"category_id":10074,"name":"\u6b27\u7f8e\u8868","parent_id":10007,"image_id":10064,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:27:23","update_time":"2018-07-17 13:27:23","image":{"file_id":10064,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171327225fbab4337.jpg","file_size":10433,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:27:22","file_path":"http:\/\/static.yoshop.xany6.com\/201807171327225fbab4337.jpg"}}]},
           //         "10008":
           //         {"category_id":10008,"name":"\u5185\u8863\u914d\u9970","parent_id":0,"image_id":0,"sort":85,"wxapp_id":10001,"create_time":"2018-07-17 10:14:54","update_time":"2018-07-17 10:14:54","image":null,
           //             "child":[
           //                 {"category_id":10063,"name":"\u5185\u8863\u9986","parent_id":10008,"image_id":10053,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:20:38","update_time":"2018-07-17 13:20:38","image":{"file_id":10053,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171320372e8bc5809.jpg","file_size":13037,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:20:37","file_path":"http:\/\/static.yoshop.xany6.com\/201807171320372e8bc5809.jpg"}},
           //                 {"category_id":10064,"name":"\u5927\u724c\u6587\u80f8","parent_id":10008,"image_id":10054,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:20:51","update_time":"2018-07-17 13:20:51","image":{"file_id":10054,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132050e21532763.jpg","file_size":16067,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:20:50","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132050e21532763.jpg"}},
           //                 {"category_id":10065,"name":"\u81ea\u8425\u5185\u8863","parent_id":10008,"image_id":10055,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:21:05","update_time":"2018-07-17 13:21:05","image":{"file_id":10055,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132104618394299.jpg","file_size":17475,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:21:04","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132104618394299.jpg"}},
           //                 {"category_id":10066,"name":"\u5185\u8863\u7206\u6b3e","parent_id":10008,"image_id":10056,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:21:22","update_time":"2018-07-17 13:21:22","image":{"file_id":10056,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132121264643605.jpg","file_size":6351,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:21:21","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132121264643605.jpg"}},
           //                 {"category_id":10067,"name":"\u5973\u58eb\u56f4\u5dfe\/\u62ab\u80a9","parent_id":10008,"image_id":10057,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:21:42","update_time":"2018-07-17 13:21:42","image":{"file_id":10057,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132140550de7975.jpg","file_size":3993,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:21:40","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132140550de7975.jpg"}},
           //                 {"category_id":10068,"name":"\u914d\u9970\u9986","parent_id":10008,"image_id":10058,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:21:56","update_time":"2018-07-17 13:21:56","image":{"file_id":10058,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717132155b43889897.jpg","file_size":5946,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:21:55","file_path":"http:\/\/static.yoshop.xany6.com\/20180717132155b43889897.jpg"}}]},"10009":
           //         {"category_id":10009,"name":"\u7bb1\u5305\u624b\u888b","parent_id":0,"image_id":0,"sort":90,"wxapp_id":10001,"create_time":"2018-07-17 10:14:59","update_time":"2018-07-17 10:14:59","image":null,
           //             "child":[
           //                 {"category_id":10075,"name":"\u62c9\u6746\u7bb1","parent_id":10009,"image_id":10065,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:31:44","update_time":"2018-07-17 13:31:44","image":{"file_id":10065,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717133143a45f59273.jpg","file_size":11379,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:31:43","file_path":"http:\/\/static.yoshop.xany6.com\/20180717133143a45f59273.jpg"}},
           //                 {"category_id":10076,"name":"\u65f6\u5c1a\u7537\u5305","parent_id":10009,"image_id":10066,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:31:59","update_time":"2018-07-17 13:31:59","image":{"file_id":10066,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717133158bf0436318.jpg","file_size":4243,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:31:58","file_path":"http:\/\/static.yoshop.xany6.com\/20180717133158bf0436318.jpg"}},
           //                 {"category_id":10077,"name":"\u7537\u58eb\u8170\u5e26","parent_id":10009,"image_id":10067,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:32:13","update_time":"2018-07-17 13:32:13","image":{"file_id":10067,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171332128992b6822.jpg","file_size":9902,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:32:12","file_path":"http:\/\/static.yoshop.xany6.com\/201807171332128992b6822.jpg"}},
           //                 {"category_id":10078,"name":"\u7537\u5305\u4e0a\u65b0","parent_id":10009,"image_id":10068,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:32:28","update_time":"2018-07-17 13:32:28","image":{"file_id":10068,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"20180717133227cfde21313.jpg","file_size":14739,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:32:27","file_path":"http:\/\/static.yoshop.xany6.com\/20180717133227cfde21313.jpg"}},
           //                 {"category_id":10079,"name":"\u81ea\u8425\u5973\u5305","parent_id":10009,"image_id":10069,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:32:48","update_time":"2018-07-17 13:32:48","image":{"file_id":10069,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"201807171332472e5603287.jpg","file_size":4437,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0,"wxapp_id":10001,"create_time":"2018-07-17 13:32:47","file_path":"http:\/\/static.yoshop.xany6.com\/201807171332472e5603287.jpg"}},
           //                 {"category_id":10080,"name":"\u65b0\u6b3e\u53cc\u80a9\u5305","parent_id":10009,"image_id":10070,"sort":100,"wxapp_id":10001,"create_time":"2018-07-17 13:32:58","update_time":"2018-07-17 13:32:58","image":{"file_id":10070,"storage":"qiniu","group_id":0,"file_url":"http:\/\/static.yoshop.xany6.com","file_name":"2018071713325709a965823.jpg","file_size":7190,"file_type":"image","extension":"jpg","is_user":0,"is_delete":0, "wxapp_id":10001,"create_time":"2018-07-17 13:32:57","file_path":"http:\/\/static.yoshop.xany6.com\/2018071713325709a965823.jpg"}
           //                 }
           //             ]
           //         }
           //     },
           //     "sharingCatgory":[],
           //     "articleCatgory":[]
           // };
           // $jsonData = {};
    //        // 渲染diy页面
    //        new diyPhone(jsonData);
           new diyPhone(<?= $jsonData?>);
       });

    </script>
</div>

