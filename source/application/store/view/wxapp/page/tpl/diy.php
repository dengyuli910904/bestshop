<!-- diy元素: 搜索栏 -->
<script id="tpl_diy_search" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-search" style="background: {{ style.background }}; padding-top:{{ style.paddingTop  }}px; ">
            <div class="inner left {{ style.searchStyle }}" style="background: {{ style.inputBackground }};">
                <div class="search-input" style="text-align: {{ style.textAlign }}; color: {{ style.inputColor }};">
                    <i class="search-icon iconfont icon-ss-search"></i>
                    <span>{{ params.placeholder }}</span>
                </div>
            </div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-edit">编辑</div>
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>

<!-- diy元素: banner -->
<script id="tpl_diy_banner" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-banner">
            {{each data}}
                <img src="{{ $value.imgUrl }}">
            {{/each}}
            <div class="dots center {{ style.btnShape }}">
                {{each data}}
                    <span style="background: {{ style.btnColor }};"></span>
                {{/each}}
            </div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-edit">编辑</div>
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>

<!--imageSingle-->
<script id="tpl_diy_imageSingle" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-imageSingle" >
            {{each data}}
            <div class="item-image" style="padding: 0px;">
                <img src="{{ $value.imgUrl }}">
            </div>
            {{/each}}
        </div>
        <div class="btn-edit-del">
<!--            <div class="btn-edit">编辑</div>-->
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--window-->
<script id="tpl_diy_window" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-window" style="background: rgb(255, 255, 255); padding: 0px;">
            <ul class="data-list am-avg-sm-2">
                <li style="padding: 0px;">
                    <div class="item-image">
                        <img src="https://demo.yiovo.com/assets/store/img/diy/window/01.jpg">
                    </div>
                </li>
                <li style="padding: 0px;">
                    <div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/window/02.jpg"></div>
                </li>
                <li style="padding: 0px;"><div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/window/03.jpg"></div>
                </li>
                <li style="padding: 0px;"><div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/window/04.jpg"></div></li>
            </ul>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--navBar-->
<script id="tpl_diy_navBar" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-navBar" style="background: rgb(255, 255, 255);">
            <ul class="am-avg-sm-4">
                <li>
                    <div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png"></div>
                    <p class="item-text am-text-truncate" style="color: rgb(102, 102, 102);">
                        按钮文字1</p>
                </li>
                <li>
                    <div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png"></div>
                    <p class="item-text am-text-truncate" style="color: rgb(102, 102, 102);">
                        按钮文字2</p>
                </li>
                <li>
                    <div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png"></div> <p class="item-text am-text-truncate" style="color: rgb(102, 102, 102);">
                        按钮文字3</p>
                </li>
                <li><div class="item-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png"></div> <p class="item-text am-text-truncate" style="color: rgb(102, 102, 102);">
                        按钮文字4</p>
                </li>
            </ul>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>

<!--blank-->
<script id="tpl_diy_blank" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-blank" style="height: 20px; background: rgb(255, 255, 255);"></div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--guide-->
<script id="tpl_diy_guide" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-guide" style="padding: 10px 0px; background: rgb(255, 255, 255);">
            <p class="line" style="border-top: 1px solid rgb(0, 0, 0);"></p>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--video-->
<script id="tpl_diy_video" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-video" style="padding: 0px;">
            <video src="http://wxsnsdy.tc.qq.com/105/20210/snsdyvideodownload?filekey=30280201010421301f0201690402534804102ca905ce620b1241b726bc41dcff44e00204012882540400"
                   poster="https://demo.yiovo.com/assets/store/img/diy/video_poster.png" controls="controls" style="height: 190px;">
                您的浏览器不支持 video 标签
            </video>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--article-->
<script id="tpl_diy_article" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-article">
            <div class="article-item show-type__10">
                <div class="article-item__left flex-box">
                    <div class="article-item__title twolist-hidden">
                        <span class="f-30 col-3">此处显示文章标题</span>
                    </div>
                    <div class="article-item__footer">
                        <span class="article-views">309次浏览</span>
                    </div>
                </div>
                <div class="article-item__image">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/article/01.png" alt="">
                </div> <!---->
            </div>
            <div class="article-item show-type__10">
                <div class="article-item__left flex-box">
                    <div class="article-item__title twolist-hidden">
                        <span class="f-30 col-3">此处显示文章标题</span>
                    </div>
                    <div class="article-item__footer">
                        <span class="article-views">309次浏览</span>
                    </div>
                </div>
                <div class="article-item__image">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/article/01.png" alt="">
                </div> <!---->
            </div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--special-->
<script id="tpl_diy_special" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-special dis-flex flex-y-center">
            <div class="special-left">
                <img src="https://demo.yiovo.com/assets/store/img/diy/special.png" alt="">
            </div>
            <div class="special-content flex-box display_1">
                <ul class="special-content-list">
                    <li class="content-item am-text-truncate"><span>张小龙4小时演讲：你和高手之间，隔着“简单”二字</span></li>
                    <li class="content-item am-text-truncate"><span>张小龙4小时演讲：你和高手之间，隔着“简单”二字</span></li>
                </ul>
            </div>
            <div class="special-more"><i class="iconfont icon-xiangyoujiantou"></i></div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--notice-->
<script id="tpl_diy_notice" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-notice dis-flex" style="padding: 4px 10px; background: rgb(255, 255, 255);">
            <div class="notice__icon">
                <img src="https://demo.yiovo.com/assets/store/img/diy/notice.png">
            </div>
            <div class="notice__text flex-box am-text-truncate">
                <span style="color: rgb(0, 0, 0);">这里是第一条自定义公告的标题</span>
            </div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--richText-->
<script id="tpl_diy_richText" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-richText" style="background: rgb(255, 255, 255); padding: 0px;">
            <p>这里是文本的内容</p>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>

<!--goods-->
<script id="tpl_diy_goods" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-goods" style="background: rgb(246, 246, 246);">
            <ul class="goods-list am-cf display__list column__2">
                <li class="goods-item">
                    <div class="goods-image">
                        <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png">
                    </div>
                    <div class="detail">
                        <p class="goods-name twolist-hidden">
                            此处显示商品名称
                        </p>
                        <p class="detail-price">
                            <span class="goods-price x-color-red">99.00</span>
                            <span class="line-price">139.00</span>
                        </p>
                    </div>
                </li>
                <li class="goods-item">
                    <div class="goods-image">
                        <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png"></div>
                    <div class="detail">
                        <p class="goods-name twolist-hidden">
                            此处显示商品名称
                        </p>
                        <p class="detail-price"><span class="goods-price x-color-red">99.00</span> <span class="line-price">139.00</span>
                        </p>
                    </div>
                </li>
                <li class="goods-item">
                    <div class="goods-image">
                        <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png">
                    </div>
                    <div class="detail">
                        <p class="goods-name twolist-hidden">
                            此处显示商品名称
                        </p>
                        <p class="detail-price">
                            <span class="goods-price x-color-red">99.00</span>
                            <span class="line-price">139.00</span>
                        </p>
                    </div>
                </li>
                <li class="goods-item">
                    <div class="goods-image">
                        <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png">
                    </div>
                    <div class="detail">
                        <p class="goods-name twolist-hidden">
                            此处显示商品名称
                        </p>
                        <p class="detail-price">
                            <span class="goods-price x-color-red">99.00</span>
                            <span class="line-price">139.00</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--coupon-->
<script id="tpl_diy_coupon" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-coupon dis-flex flex-x-around" style="background: rgb(255, 255, 255); padding: 10px 0px;">
            <div class="coupon-wrapper">
                <div class="coupon-item" style="background: red;">
                    <i class="before" style="background: rgb(255, 255, 255);"></i>
                    <div class="left-content dis-flex flex-dir-column flex-x-center flex-y-center" style="background: red;">
                        <div class="content-top"><span class="unit">￥</span> <span class="price">10</span>
                        </div>
                        <div class="content-bottom"><span>满100.00元可用</span></div>
                    </div>
                    <div class="right-receive dis-flex flex-dir-column flex-x-center flex-y-center">
                        <span>立即</span> <span>领取</span>
                    </div>
                </div>
            </div>
            <div class="coupon-wrapper">
                <div class="coupon-item" style="background: violet;">
                    <i class="before" style="background: rgb(255, 255, 255);"></i>
                    <div class="left-content dis-flex flex-dir-column flex-x-center flex-y-center" style="background: violet;">
                        <div class="content-top">
                            <span class="unit">￥</span>
                            <span class="price">10</span>
                        </div>
                        <div class="content-bottom">
                            <span>满100.00元可用</span>
                        </div>
                    </div>
                    <div class="right-receive dis-flex flex-dir-column flex-x-center flex-y-center">
                        <span>立即</span> <span>领取</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--sharingGoods-->
<script id="tpl_diy_sharingGoods" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-sharingGoods" style="background: rgb(246, 246, 246);">
            <div class="goods-item dis-flex">
                <div class="goods-item_left">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png">
                </div>
                <div class="goods-item_right">
                    <div class="goods-item_title twolist-hidden">
                        <span>此处是拼团商品</span>
                    </div>
                    <div class="goods-item_desc">
                        <div class="desc-selling_point am-text-truncate">
                            <span>此款商品美观大方 性价比较高 不容错过</span>
                        </div>
                        <div class="desc-situation">
                            <span class="iconfont icon-pintuan_huaban"></span>
                            <span class="people">2人团</span>
                            <span class="x-color-999">已有43人进行拼团</span>
                        </div>
                        <div class="desc_footer">
                            <span class="price_x">¥99.00</span>
                            <span class="price_y x-color-999">¥139.00</span>
                        </div>
                    </div>
                    <div class="btn-settlement">去拼团</div>
                </div>
            </div>
            <div class="goods-item dis-flex">
                <div class="goods-item_left">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png">
                </div>
                <div class="goods-item_right">
                    <div class="goods-item_title twolist-hidden">
                        <span>此处是拼团商品</span>
                    </div>
                    <div class="goods-item_desc">
                        <div class="desc-selling_point am-text-truncate">
                            <span>此款商品美观大方 性价比较高 不容错过</span>
                        </div>
                        <div class="desc-situation">
                            <span class="iconfont icon-pintuan_huaban"></span>
                            <span class="people">2人团</span>
                            <span class="x-color-999">已有43人进行拼团</span>
                        </div>
                        <div class="desc_footer">
                            <span class="price_x">¥99.00</span>
                            <span class="price_y x-color-999">¥139.00</span>
                        </div>
                    </div>
                    <div class="btn-settlement">去拼团</div>
                </div>
            </div>
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--bargainGoods-->
<script id="tpl_diy_bargainGoods" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-bargainGoods" style="background: rgb(246, 246, 246);">
            <div class="goods-item dis-flex">
                <div class="goods-image">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png"></div>
                <div class="goods-info">
                    <div class="goods-name">
                        <span class="twolist-hidden">此处是砍价商品</span>
                    </div>
                    <div class="peoples dis-flex">
                        <div class="user-list dis-flex">
                            <div class="user-item-avatar">
                                <img src="http://tva1.sinaimg.cn/large/0060lm7Tly1g4c7zrytvvj30dw0dwwes.jpg">
                            </div>
                            <div class="user-item-avatar">
                                <img src="http://tva1.sinaimg.cn/large/0060lm7Tly1g4c7zs2u5ej30b40b4dfx.jpg">
                            </div>
                        </div>
                        <div class="people__text">
                            <span>2人正在砍价</span>
                        </div>
                    </div>
                    <div class="goods-price">
                        <span>￥139.00</span>
                    </div>
                    <div class="floor-price">
                        <span class="small">最低￥</span>
                        <span class="big">0.01</span>
                    </div>
                    <div class="opt-touch">
                        <div class="touch-btn">
                            <span>立即参加</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="goods-item dis-flex">
                <div class="goods-image">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png">
                </div>
                <div class="goods-info">
                    <div class="goods-name">
                        <span class="twolist-hidden">此处是砍价商品</span>
                    </div>
                    <div class="peoples dis-flex">
                        <div class="user-list dis-flex">
                            <div class="user-item-avatar">
                                <img src="http://tva1.sinaimg.cn/large/0060lm7Tly1g4c7zrytvvj30dw0dwwes.jpg">
                            </div>
                            <div class="user-item-avatar">
                                <img src="http://tva1.sinaimg.cn/large/0060lm7Tly1g4c7zs2u5ej30b40b4dfx.jpg">
                            </div>
                        </div>
                        <div class="people__text"><span>2人正在砍价</span></div>
                    </div>
                    <div class="goods-price"><span>￥139.00</span></div>
                    <div class="floor-price"><span class="small">最低￥</span><span class="big">0.01</span></div>
                    <div class="opt-touch"><div class="touch-btn"><span>立即参加</span></div></div>
                </div>
            </div>
        </div>
        <div class="btn-edit-del"><div class="btn-del">删除</div></div>
    </div>
</script>
<!--shop-->
<script id="tpl_diy_shop" type="text/template">
    <div class="drag" id="diy-{{ id }}" data-itemid="{{ id }}">
        <div class="diy-shop">
            <div class="shop-item dis-flex flex-y-center">
                <div class="shop-item__logo">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/circular.png" alt="门店logo">
                </div>
                <div class="shop-item__content flex-box">
                    <div class="shop-item__title"><span>此处显示门店名称</span></div>
                    <div class="shop-item__address am-text-truncate"><span>门店地址：xx省xx市xx区xx街道</span></div>
                    <div class="shop-item__phone"><span>联系电话：010-6666666</span></div>
                </div>
            </div>
            <div class="shop-item dis-flex flex-y-center">
                <div class="shop-item__logo">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/circular.png" alt="门店logo">
                </div>
                <div class="shop-item__content flex-box">
                    <div class="shop-item__title"><span>此处显示门店名称</span></div>
                    <div class="shop-item__address am-text-truncate"><span>门店地址：xx省xx市xx区xx街道</span></div>
                    <div class="shop-item__phone"><span>联系电话：010-6666666</span></div>
                </div>
            </div>
        </div>
        <div class="btn-edit-del"><div class="btn-del">删除</div></div>
    </div>
</script>
<!--service-->
<script id="tpl_diy_service" type="text/template">
    <div class="diy-service drag optional drag__nomove selected" style="right: 1%; bottom: 10%; opacity: 1;">
        <div class="service-icon">
            <img src="https://demo.yiovo.com/assets/store/img/diy/service.png" alt="">
        </div>
        <div class="btn-edit-del">
            <div class="btn-del">删除</div>
        </div>
    </div>
</script>
<!--catgory-->
<script id="tpl_diy_catgory" type="text/template">

</script>
<!--sharingCatgory-->
<script id="tpl_diy_sharingCatgory" type="text/template">

</script>
<!--articleCatgory-->
<script id="tpl_diy_articleCatgory" type="text/template">

</script>

<script id="tpl_diy_page" type="text/template">
    <h4 style="color: black;">{{params.title}}</h4>
</script>

