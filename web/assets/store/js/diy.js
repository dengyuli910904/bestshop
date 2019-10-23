(function () {

    // diy类参数
    var options = {}

        // diy数据
        , diyData = {}

        /**
         * 新增组件
         * @type {{}}
         */
        , defaultData = {
            search: {
                params: {'placeholder': '请输入关键字进行搜索'},
                style: {
                    textAlign: 'left',
                    searchStyle: ''
                }
            },
            banner: {
                style: {
                    btnColor: '#ffffff',
                    btnShape: 'round'
                },
                data: [
                    {
                        imgUrl: BASE_URL + 'assets/store/img/diy/banner_01.jpg',
                        imgName: 'banner-1.jpg',
                        linkUrl: ''
                    },
                    {
                        imgUrl: BASE_URL + 'assets/store/img/diy/banner_02.jpg',
                        imgName: 'banner-2.jpg',
                        linkUrl: ''
                    }
                ]
            },
            imageSingle:{
                //name:"\u5355\u56fe\u7ec4",
                //type:"imageSingle",
                style:{
                    paddingTop:0,
                    paddingLeft:0,
                    background:"#ffffff"
                },
                data:[
                    {
                        imgUrl:"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                        imgName:"image-1.jpg",
                        linkUrl:""
                    },
                    {
                        imgUrl:"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/banner\/01.png",
                        imgName:"banner-2.jpg",
                        linkUrl:""
                    }
                ]
            },
            navBar:{
                name:"\u5bfc\u822a\u7ec4",
                type:"navBar",
                style:{"background":"#ffffff","rowsNum":"4"},
                data:[
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-1.png","linkUrl":"","text":"\u6309\u94ae\u6587\u5b571","color":"#666666"},
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-2.jpg","linkUrl":"","text":"\u6309\u94ae\u6587\u5b572","color":"#666666"},
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-3.jpg","linkUrl":"","text":"\u6309\u94ae\u6587\u5b573","color":"#666666"},
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/navbar\/01.png","imgName":"icon-4.jpg","linkUrl":"","text":"\u6309\u94ae\u6587\u5b574","color":"#666666"}
                ]
            },
            blank:{name:"\u8f85\u52a9\u7a7a\u767d",type:"blank",style:{"height":"20","background":"#ffffff"}},
            guide:{
                name:"\u8f85\u52a9\u7ebf",
                type:"guide",
                style:{"background":"#ffffff","lineStyle":"solid","lineHeight":"1","lineColor":"#000000","paddingTop":10
                }
            },
            video:{
                name:"\u89c6\u9891\u7ec4",
                type:"video",
                params:{"videoUrl":"http:\/\/wxsnsdy.tc.qq.com\/105\/20210\/snsdyvideodownload?filekey=30280201010421301f0201690402534804102ca905ce620b1241b726bc41dcff44e00204012882540400",
                    "poster":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/video_poster.png","autoplay":"0"},
                style:{"paddingTop":"0","height":"190"}},
            article:{
                name:"\u6587\u7ae0\u7ec4","type":"article",
                params:{"source":"auto","auto":{"category":0,"showNum":6}},
                style:[],
                defaultData:[
                    {"article_title":"\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898","show_type":10,"image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png","views_num":"309"},
                    {"article_title":"\u6b64\u5904\u663e\u793a\u6587\u7ae0\u6807\u9898","show_type":10,"image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/article\/01.png","views_num":"309"}
                ],
                data:[]},
            special:{
                name:"\u5934\u6761\u5feb\u62a5","type":"special",
                params:{"source":"auto","auto":{"category":0,"showNum":6}},
                style:{"display":"1","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/special.png"},
                defaultData:[
                    {"article_title":"\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"},
                    {"article_title":"\u5f20\u5c0f\u9f994\u5c0f\u65f6\u6f14\u8bb2\uff1a\u4f60\u548c\u9ad8\u624b\u4e4b\u95f4\uff0c\u9694\u7740\u201c\u7b80\u5355\u201d\u4e8c\u5b57"}
                ],
                data:[]},
            notice:{
                name:"\u516c\u544a\u7ec4","type":"notice",
                params:{
                    "text":"\u8fd9\u91cc\u662f\u7b2c\u4e00\u6761\u81ea\u5b9a\u4e49\u516c\u544a\u7684\u6807\u9898","icon":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/notice.png"
                },
                style:{"paddingTop":"4","background":"#ffffff","textColor":"#000000"}
            },
            richText:{
                name:"\u5bcc\u6587\u672c",
                type:"richText",
                params:{"content":"<p>\u8fd9\u91cc\u662f\u6587\u672c\u7684\u5185\u5bb9<\/p>"
                },
                style:{
                    "paddingTop":"0","paddingLeft":"0","background":"#ffffff"
                }
            },
            window:{
                name:"\u56fe\u7247\u6a71\u7a97",
                type:"window",
                style:{"paddingTop":"0","paddingLeft":"0","background":"#ffffff","layout":"2"},
                data:[
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/01.jpg","linkUrl":""},
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/02.jpg","linkUrl":""},
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/03.jpg","linkUrl":""},
                    {"imgUrl":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/window\/04.jpg","linkUrl":""}
                ],
                dataNum:4
            },
            goods:{
                name:"\u5546\u54c1\u7ec4","type":"goods",
                params:{"source":"auto","auto":{"category":0,"goodsSort":"all","showNum":6}},
                style:{"background":"#F6F6F6","display":"list","column":"2",
                    "show":{"goodsName":"1","goodsPrice":"1","linePrice":"1","sellingPoint":"0","goodsSales":"0"}},
                defaultData:[
                    {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                        "goods_sales":"100"},
                    {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                        "goods_sales":"100"},
                    {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                        "goods_sales":"100"},
                    {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                        "goods_sales":"100"}
                ],
                data:[
                    {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0",
                        "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png","goods_price":"99.00","line_price":"139.00",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7","goods_sales":"100","is_default":true},
                    {"goods_name":"\u6b64\u5904\u663e\u793a\u5546\u54c1\u540d\u79f0","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "goods_price":"99.00","line_price":"139.00","selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u4e0d\u5bb9\u9519\u8fc7",
                        "goods_sales":"100","is_default":true}
                ]
            },
            coupon:{
                name:"\u4f18\u60e0\u5238\u7ec4",
                type:"coupon",
                style:{"paddingTop":"10","background":"#ffffff"},
                params:{"limit":"5"},
                data:[
                    {"color":"red","reduce_price":"10","min_price":"100.00"},
                    {"color":"violet","reduce_price":"10","min_price":"100.00"}
                ]
            },
            sharingGoods:{
                name:"\u62fc\u56e2\u5546\u54c1\u7ec4",
                type:"sharingGoods",
                params:{
                    "source":"auto",
                    "auto":{"category":0,"goodsSort":"all","showNum":6}},
                style:{"background":"#F6F6F6","show":{"goodsName":"1","sellingPoint":"1","sharingPrice":"1","linePrice":"1"}},
                defaultData:[
                    {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                        "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                        "sharing_price":"99.00","line_price":"139.00"},
                    {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                        "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                        "goods_price":"99.00","line_price":"139.00"},
                    {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                        "sharing_price":"99.00","line_price":"139.00"},
                    {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                        "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                        "sharing_price":"99.00","line_price":"139.00"}],
                data:[
                    {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                        "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                        "sharing_price":"99.00","line_price":"139.00","is_default":true},
                    {"goods_name":"\u6b64\u5904\u662f\u62fc\u56e2\u5546\u54c1",
                        "image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "selling_point":"\u6b64\u6b3e\u5546\u54c1\u7f8e\u89c2\u5927\u65b9 \u6027\u4ef7\u6bd4\u8f83\u9ad8 \u4e0d\u5bb9\u9519\u8fc7",
                        "sharing_price":"99.00","line_price":"139.00","is_default":true}
                ]
            },
            bargainGoods:{
                name:"\u780d\u4ef7\u5546\u54c1\u7ec4",
                type:"bargainGoods",
                params:{"source":"auto", "auto":{"category":0,"goodsSort":"all","showNum":6}},
                style:{"background":"#F6F6F6","show":{"goodsName":"1","peoples":"1","floorPrice":"1","originalPrice":"1"}},
                demo:{"helps_count":2,
                    "helps":[{"avatarUrl":"http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zrytvvj30dw0dwwes.jpg"},
                        {"avatarUrl":"http:\/\/tva1.sinaimg.cn\/large\/0060lm7Tly1g4c7zs2u5ej30b40b4dfx.jpg"}]},
                defaultData:[{"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1",
                    "goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                    "floor_price":"0.01","original_price":"139.00"},
                    {"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1","goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "floor_price":"0.01","original_price":"139.00"}],
                data:[
                    {"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1","goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "floor_price":"0.01","original_price":"139.00"},
                    {"goods_name":"\u6b64\u5904\u662f\u780d\u4ef7\u5546\u54c1","goods_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/goods\/01.png",
                        "floor_price":"0.01","original_price":"139.00"}
                ]},
            shop:{
                name:"\u7ebf\u4e0b\u95e8\u5e97","type":"shop",
                params:{"source":"auto", "auto":{"showNum":6}},
                style:[],
                defaultData:[
                    {"shop_name":"\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0","logo_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                        "phone":"010-6666666","region":{"province":"xx\u7701","city":"xx\u5e02","region":"xx\u533a"},"address":"xx\u8857\u9053"},
                    {"shop_name":"\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0","logo_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                        "phone":"010-6666666","region":{"province":"xx\u7701","city":"xx\u5e02","region":"xx\u533a"},"address":"xx\u8857\u9053"}
                ],
                data:[
                    {"shop_name":"\u6b64\u5904\u663e\u793a\u95e8\u5e97\u540d\u79f0","logo_image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/circular.png",
                        "phone":"010-6666666","region":{"province":"xx\u7701","city":"xx\u5e02","region":"xx\u533a"},"address":"xx\u8857\u9053"}]},
            service:{"name":"\u5728\u7ebf\u5ba2\u670d","type":"service",
            params:{"type":"chat","image":"https:\/\/demo.yiovo.com\/assets\/store\/img\/diy\/service.png","phone_num":""},
            style:{"right":"1","bottom":"10","opacity":"100"}}
        }

        /**
         * 私有方法
         */
        , method = {

            /**
             * 初始化类
             */
            init: {

                // 执行初始化
                execute: function () {
                    // 渲染已有diy数据
                    method.render.main();
                    // 初始化diy元素拖拽事件
                    this.diyItem.DDSort();
                    // 初始化diy元素选中事件
                    this.diyItem.selected();
                    // 初始化diy元素删除事件
                    this.diyItem.delete();
                    // 注册数据绑定
                    this.inputDataBind();
                    // 初始化工具栏事件
                    this.toolbar.execute();
                },

                /**
                 * diy元素事件类
                 */
                diyItem: {

                    /**
                     * 初始化拖拽事件
                     */
                    DDSort: function () {
                        var $phoneMain = $(options.phoneMain);
                        // diy元素拖拽
                        $phoneMain.DDSort({
                            target: '.drag',
                            delay: 50, // 延时处理，默认为 50 ms，防止手抖点击 A 链接无效
                            up: function () {
                                var newItems = {};
                                $phoneMain.find('.drag').each(function () {
                                    var itemId = $(this).data('itemid');
                                    newItems[itemId] = diyData.items[itemId]
                                });
                                diyData.items = newItems;
                            }
                        });
                    },

                    /**
                     * 初始化选中事件
                     */
                    selected: function () {
                        var $phoneMain = $(options.phoneMain);
                        $phoneMain.on('click', '.drag', function () {
                            var $drag = $(this);
                            if (!$drag.hasClass('selected')) {
                                // 设置选中
                                $phoneMain.children().removeClass('selected');
                                $drag.addClass('selected');
                                // 渲染编辑器
                                method.render.editor($drag.data('itemid'));
                            }
                        });
                    },

                    delete: function () {
                        var $phoneMain = $(options.phoneMain);
                        $phoneMain.on('click', '.btn-del', function () {
                            var $this = $(this);
                            layer.confirm('确定要删除吗？', function (index) {
                                var $item = $this.parent().parent()
                                    , $nextItem = $item.next()
                                    , itemId = $item.data('itemid');
                                method.diyData.deleteItem(itemId);
                                $item.remove();
                                $nextItem.trigger('click');
                                layer.close(index);
                            });
                        });
                    }

                },


                /**
                 * 注册数据绑定
                 */
                inputDataBind: function () {
                    // 绑定input修改事件
                    $(options.editor).on('propertychange change', 'input[data-bind]', function () {
                        var $this = $(this)
                            , val = $this.val()
                            , itemIndex = $this.data('bind').split('.')
                            , itemId = $this.parents('form').data('itemid');
                        // 数据绑定 (最多支持3级)
                        method.diyData.setData(itemId, itemIndex, val);
                        // 重新渲染diy元素
                        method.render.refreshDiyItem(itemId);
                    });
                },


                /**
                 * 工具栏事件
                 */
                toolbar: {
                    /**
                     * 工具栏元素
                     */
                    diyMenu: $('#diy-menu'),

                    /**
                     * 执行初始化事件
                     */
                    execute: function () {
                        // 返回顶部事件
                        this.backTop();
                        // 新增组件事件
                        this.components();
                        // 数据提交
                        this.submit();
                    },

                    /**
                     * 新增组件
                     */
                    components: function () {
                        this.diyMenu.find('#components .special').click(function () {
                            var type = $(this).data('type');
                            alert(type);
                            method.render.insertDiyItem(type);
                        });
                    },

                    /**
                     * 返回顶部
                     */
                    backTop: function () {
                        this.diyMenu.find('#back-top').click(function () {
                            $('html,body').animate({scrollTop: 0}, 100);
                        });
                    },

                    /**
                     * 保存数据到后端
                     */
                    submit: function () {
                        $('#submit').click(function () {
                            if ($.isEmptyObject(diyData.items)) {
                                layer.msg('至少存在一个组件', {anim: 6});
                                return false;
                            }
                            $.post('', {data: diyData}, function (result) {
                                result.code === 1 ? $.show_success(result.msg, result.url)
                                    : $.show_error(result.msg);
                            });
                        });
                    }

                }

            },

            /**
             * 编辑器类
             */
            editor: {
                // 添加元素类
                addItem: {

                    /**
                     * 添加banner
                     * @param itemId
                     * @param $items
                     */
                    banner: function (itemId, $items) {
                        var data = method.diyData.additemData(itemId, 'banner')
                            , $html = $(
                            '<div class="item" data-key="' + data.dataId + '">' +
                            '  <div class="container">' +
                            '    <div class="item-image"> <img src="' + data.imgUrl + '" alt=""> </div>' +
                            '    <div class="item-form am-form-file">' +
                            '        <div class="input-group">' +
                            '            <input type="text" name="imgName" data-bind="data.' + data.dataId + '.imgName"' +
                            '               value="' + data.imgName + '" placeholder="请选择图片" readonly>' +
                            '            <span class="input-group-addon">选择图片</span>' +
                            '            <input type="hidden" name="imgUrl" data-bind="data.' + data.dataId + '.imgUrl"' +
                            '                value="' + data.imgUrl + '">' +
                            '        </div>' +
                            '        <div class="input-group" style="margin-top:10px;">' +
                            '            <input type="text" name="linkUrl" data-bind="data.' + data.dataId + '.linkUrl"' +
                            '               value="" placeholder="请输入链接地址    例：page/index/index">' +
                            '        </div>' +
                            '    </div>' +
                            '  </div>' +
                            '  <i class="iconfont icon-shanchu item-delete"></i>' +
                            '</div>'
                        );
                        console.log('asd');
                        // 选择图片
                        method.editor.event.selectImages($html);
                        $items.append($html);
                    },
                    imageSingle: function (itemId, $items) {
                        var data = method.diyData.additemData(itemId, 'imageSingle')
                            , $html = $(
                            '<div class="item" data-key="' + data.dataId + '">' +
                            '  <div class="container">' +
                            '    <div class="item-image"> <img src="' + data.imgUrl + '" alt=""> </div>' +
                            '    <div class="item-form am-form-file">' +
                            '        <div class="input-group">' +
                            '            <input type="text" name="imgName" data-bind="data.' + data.dataId + '.imgName"' +
                            '               value="' + data.imgName + '" placeholder="请选择图片" readonly>' +
                            '            <span class="input-group-addon">选择图片</span>' +
                            '            <input type="hidden" name="imgUrl" data-bind="data.' + data.dataId + '.imgUrl"' +
                            '                value="' + data.imgUrl + '">' +
                            '        </div>' +
                            '        <div class="input-group" style="margin-top:10px;">' +
                            '            <input type="text" name="linkUrl" data-bind="data.' + data.dataId + '.linkUrl"' +
                            '               value="" placeholder="请输入链接地址    例：page/index/index">' +
                            '        </div>' +
                            '    </div>' +
                            '  </div>' +
                            '  <i class="iconfont icon-shanchu item-delete"></i>' +
                            '</div>'
                        );
                        console.log('asd');
                        // 选择图片
                        method.editor.event.selectImages($html);
                        $items.append($html);
                    }

                },

                // 事件方法
                event: {

                    /**
                     * 事件注册
                     */
                    register: function ($form) {
                        // input单/多选框事件
                        this.input($form);
                        // 删除子元素事件
                        this.itemDelete($form);
                        // 添加子元素事件
                        this.itemAdd($form);
                        // 子元素拖拽事件
                        this.itemDDSort($form);
                        // 图片选择事件
                        this.selectImages($form);
                    },

                    /**
                     * 拖拽事件
                     * @param $form
                     */
                    itemDDSort: function ($form) {
                        $form.find('.form-items').DDSort({
                            target: '.item',
                            delay: 50, // 延时处理，默认为 50 ms，防止手抖点击 A 链接无效
                            up: function () {
                                var $formItems = $(this).parent()
                                    , newData = {}
                                    , itemId = $formItems.parent().data('itemid');
                                $formItems.find('.item').each(function () {
                                    var key = $(this).data('key');
                                    newData[key] = {
                                        imgName: diyData.items[itemId].data[key].imgName,
                                        imgUrl: diyData.items[itemId].data[key].imgUrl,
                                        linkUrl: diyData.items[itemId].data[key].linkUrl
                                    };
                                });
                                diyData.items[itemId].data = newData;
                                // 重新渲染diy元素
                                method.render.refreshDiyItem(itemId);
                            }
                        });
                    },

                    /**
                     * 单/多选框事件
                     * @param $html
                     */
                    input: function ($html) {
                        // 单/多选框
                        $html.find('input[type=checkbox], input[type=radio]').uCheck();
                    },

                    /**
                     * 删除子元素事件
                     * @param $html
                     */
                    itemDelete: function ($html) {
                        // 子元素删除事件
                        $html.on('click', '.item-delete', function () {
                            var $item = $(this).parent();
                            if ($html.find('.item-delete').length <= 1) {
                                layer.msg('至少保留一个', {anim: 6});
                                return false;
                            }
                            layer.confirm('您确定要删除吗？', {
                                title: '友情提示'
                            }, function (index) {
                                var key = $item.data('key')
                                    , itemId = $item.parent().parent().data('itemid');
                                // 移除当前子元素
                                $item.remove();
                                delete diyData.items[itemId].data[key];
                                // 重新渲染diy元素
                                method.render.refreshDiyItem(itemId);
                                layer.close(index);
                            });
                        });
                    },

                    /**
                     * 添加子元素事件
                     * @param $html
                     */
                    itemAdd: function ($html) {
                        console.log($html);
                        alert('itemAdd');
                        $html.find('.form-item-add').click(function () {
                            var $items = $(this).prev('.form-items')
                                , itemId = $items.parent().data('itemid')
                                , type = diyData.items[itemId].type;
                            // 添加子元素
                            method.editor.addItem[type](itemId, $items);
                            // 重新渲染diy元素
                            method.render.refreshDiyItem(itemId);
                        });
                    },

                    /**
                     * 选择图片文件
                     */
                    selectImages: function ($html) {
                        // 选择图片
                        $html.find('.input-group-addon').selectImages({
                            imagesList: '.item-image'
                            , done: function (data, $addon) {
                                $addon.prev('input').val(data[0].file_path).change();
                                $addon.next('input').val(data[0].file_path).change();
                                $addon.parent().parent().prev(this.imagesList).html(
                                    '<img src="' + data[0].file_path + '">'
                                );
                            }
                        });
                    }

                }
            },

            /**
             * 渲染类
             */
            render: {

                /**
                 * 渲染整个diy页面
                 */
                main: function () {
                    var html = '';
                    $.each(diyData.items, function (index, item) {
                        html += template('tpl_diy_' + item.type, item);
                    });
                    $(options.phoneMain).html(html);
                },

                /**
                 * 重新渲染diy子元素
                 * @param itemId
                 */
                refreshDiyItem: function (itemId) {
                    var item = diyData.items[itemId]
                        , html = template('tpl_diy_' + item.type, item)
                        , $diy = function () {
                        return $('#diy-' + item.id);
                    };
                    $diy().prop('outerHTML', html).addClass('selected');
                    $diy().addClass('selected');
                },

                /**
                 * 新增diy子元素
                 */
                insertDiyItem: function (type) {
                    // 新记录id
                    var diyItemId = method.diyData.newDataId();
                    console.log(diyItemId,defaultData[type]);
                    var item = diyData.items[diyItemId] = $.extend(true, {}, {
                        id: diyItemId,
                        type: type
                    }, defaultData[type]);
                    console.log(item);
                    // 处理子元素集
                    if (item.hasOwnProperty('data')) {
                        var data = {};
                        $.each(item.data, function (index, val) {
                            var dataId = method.diyData.newDataId();
                            data[dataId] = val;
                        });
                        item.data = data;
                    }
                    // 渲染页面
                    var html = template('tpl_diy_' + type, item);
                    $(options.phoneMain).append(html)
                        .find('#diy-' + diyItemId).trigger('click');
                },


                /**
                 * 渲染元素编辑器
                 * @param itemId
                 */
                editor: function (itemId) {
                    var item = diyData.items[itemId]
                        , $form = $(template('tpl_editor_' + item.type, item));
                    // 注册所有事件
                    method.editor.event.register($form, diyData);
                    // 写入编辑器
                    $('#diy-editor').find('.inner').html($form);
                    // // 注册文件上传
                    // method.editor.event.upload();
                }


            },

            /**
             * diy数据类
             */
            diyData: {

                /**
                 * 生成新增数据的id
                 * @returns {string}
                 */
                newDataId: function () {
                    return 'n' + Math.random().toString().substr(3);
                },

                /**
                 * 数据绑定
                 * @param itemId
                 * @param itemIndex
                 * @param val
                 */
                setData: function (itemId, itemIndex, val) {
                    var item = diyData.items[itemId][itemIndex[0]];
                    switch (itemIndex.length) {
                        case 1:
                            item = val;
                            break;
                        case 2:
                            item[itemIndex[1]] = val;
                            break;
                        case 3:
                            item[itemIndex[1]][itemIndex[2]] = val;
                            break;
                    }
                },

                /**
                 * 添加子元素数据
                 * @param itemId
                 * @param itemType
                 * @returns {*}
                 */
                additemData: function (itemId, itemType) {
                    var dataId = this.newDataId()
                        , defaultItemData = defaultData[itemType].data[0]
                        , data = $.extend(true, {dataId: dataId}, defaultItemData);
                    diyData.items[itemId].data[dataId] = data;
                    return data;
                },

                /**
                 * 删除diy元素
                 */
                deleteItem: function (itemId) {
                    delete diyData.items[itemId];
                }

            }

        };

    /***
     * 前端可视化diy
     * @constructor
     */
    function diyPhone(data, opts) {
        // diy 数据
        diyData = data;
        // 配置信息
        options = $.extend({}, {phoneMain: '#phone-main', editor: '#diy-editor'}, opts);
        // 执行初始化
        method.init.execute();
    }

    diyPhone.prototype = {};

    window.diyPhone = diyPhone;

})(window);
