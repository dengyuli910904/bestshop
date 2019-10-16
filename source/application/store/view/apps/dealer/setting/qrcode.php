<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-body">
                    <div class="widget-head am-cf">
                        <div class="widget-title am-fl">分销海报设置</div>
                    </div>
                    <div class="tips am-margin-bottom">
                        <div class="pre">
                            <p> 注：可拖动头像、二维码、昵称调整位置，如修改</p>
                            <p> 注：修改后如需生效请前往 <a href="../../settings/caches.html" target="_blank">设置-清理缓存</a>，清除临时图片
                            </p>
                        </div>
                    </div>
                    <div id="app" class="poster-pannel am-cf am-padding-bottom-xl">
                        <div class="pannel__left am-fl">
                            <div id="j-preview" class="poster-preview">
                                <img id="preview-backdrop" src="./posters_files/backdrop.png" alt="" class="backdrop">
                                <div id="j-qrcode" class="drag pre-qrcode circle" style="width: 100px; height: 100px; top: 128px; left: 136px;">
                                    <img src="../../images/qrcode.png" alt="">
                                </div>
                                <div id="j-avatar" class="drag pre-avatar circle" style="width: 70px; height: 70px; top: 18px; left: 150px;">
                                    <img src="../../images/avatar.png" alt="">
                                </div> <div id="j-nickName" class="drag pre-nickName" style="font-size: 14px; color: rgb(0, 0, 0); top: 99px; left: 150px;">
                                    <span>这里是昵称</span>
                                </div>
                            </div>
                        </div>
                        <div class="pannel__right am-fl">
                            <form id="my-form" method="post" class="am-form tpl-form-line-form" novalidate="novalidate">
                                <div class="am-form-group"><label class="am-u-sm-3 am-u-lg-4 am-form-label form-require">海报背景图 </label>
                                    <div class="am-u-sm-8 am-u-end"><div class="am-form-file"><div class="am-form-file">
                                                <button type="button" class="j-image upload-file am-btn am-btn-secondary am-radius"><i class="am-icon-cloud-upload"></i> 选择图片</button>
                                            </div>
                                            <div class="help-block"><small>尺寸：宽750像素 高大于(等于)1200像素</small></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-form-group"><label class="am-u-sm-3 am-u-md-4 am-form-label form-require"> 头像宽度 </label>
                                    <div class="am-u-sm-9 am-u-md-8">
                                        <input type="number" min="30" name="qrcode[header][width]" value="<?=  isset($data->header->with) ? $data->header->with:""?>" required="required" class="tpl-form-input" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                    </div>
                                </div>
                                <div class="am-form-group"><label class="am-u-sm-3 am-u-md-4 am-form-label form-require"> 头像样式 </label>
                                    <div class="am-u-sm-9 am-u-md-8">
                                        <label class="am-radio-inline">
                                            <input type="radio" value="square" name="qrcode[header][style]" value="<?= isset($data->header->style) ? ($data->header->style == "square" ?"checked": "") :"" ?>" data-am-ucheck="" class="am-ucheck-radio">
                                            <span class="am-ucheck-icons">
                                                <i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 正方形</label>
                                        <label class="am-radio-inline">
                                            <input type="radio" value="circle" name="qrcode[header][style]"  value="<?= isset($data->header->style) ? ($data->header->style == "circle" ?"checked": "") :"" ?>"  data-am-ucheck="" class="am-ucheck-radio">
                                            <span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 圆形</label>
                                    </div>
                                </div>
                                <div class="am-form-group am-padding-top">
                                    <label class="am-u-sm-3 am-u-md-4 am-form-label form-require"> 昵称字体大小 </label>
                                    <div class="am-u-sm-9 am-u-md-8">
                                        <input type="number" min="12" name="qrcode[nickname][font][size]" required="required"  value="<?= isset($data->nickname->font->size)? ($data->nickname->font->size ?? "") :"" ?>"  class="tpl-form-input" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label class="am-u-sm-3 am-u-md-4 am-form-label form-require"> 昵称字体颜色 </label>
                                    <div class="am-u-sm-9 am-u-md-8">
                                        <input type="color" class="tpl-form-input" name="qrcode[nickname][font][color]" value="<?= isset($data->nickname->font->color)? ($data->nickname->font->color ?? "") :"" ?>">
                                    </div>
                                </div>
                                <div class="am-form-group am-padding-top">
                                    <label class="am-u-sm-3 am-u-md-4 am-form-label form-require"> 小程序码宽度 </label> <div class="am-u-sm-9 am-u-md-8">
                                        <input type="number" min="50" required="required" name="qrcode[app][width]" value="<?= isset($data->app->width)? ($data->app->width ?? "") :"" ?>" class="tpl-form-input" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label class="am-u-sm-3 am-u-md-4 am-form-label form-require"> 小程序码样式 </label> <div class="am-u-sm-9 am-u-md-8">
                                        <label class="am-radio-inline">
                                            <input type="radio" value="square" data-am-ucheck="" name="qrcode[app][style]"  value="<?= isset($data->app->style) ? ($data->app->style == "circle" ?"checked": "") :"" ?>" class="am-ucheck-radio">
                                            <span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 正方形</label>
                                        <label class="am-radio-inline">
                                            <input type="radio" value="circle" name="qrcode[app][style]" data-am-ucheck=""  value="<?= isset($data->app->style) ? ($data->app->style == "circle" ?"checked": "") :"" ?>"  class="am-ucheck-radio">
                                            <span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 圆形</label>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                        <button type="submit" class="j-submit am-btn am-btn-secondary">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 文件库弹窗 -->

<!-- 图片文件列表模板 -->
{{include file="layouts/_template/tpl_file_item" /}}

<!-- 文件库弹窗 -->
{{include file="layouts/_template/file_library" /}}
<!---->
<!--<!-- 文件库模板 -->-->
<!--<script id="tpl-file-library" type="text/template">-->
<!--    <div class="row">-->
<!--        <div class="file-group">-->
<!--            <ul class="nav-new">-->
<!--                <li class="ng-scope {{ is_default ? 'active' : '' }}" data-group-id="-1">-->
<!--                    <a class="group-name am-text-truncate" href="javascript:void(0);" title="全部">全部</a>-->
<!--                </li>-->
<!--                <li class="ng-scope" data-group-id="0">-->
<!--                    <a class="group-name am-text-truncate" href="javascript:void(0);" title="未分组">未分组</a>-->
<!--                </li>-->
<!--                {{ each group_list }}-->
<!--                <li class="ng-scope"-->
<!--                    data-group-id="{{ $value.group_id }}" title="{{ $value.group_name }}">-->
<!--                    <a class="group-edit" href="javascript:void(0);" title="编辑分组">-->
<!--                        <i class="iconfont icon-bianji"></i>-->
<!--                    </a>-->
<!--                    <a class="group-name am-text-truncate" href="javascript:void(0);">-->
<!--                        {{ $value.group_name }}-->
<!--                    </a>-->
<!--                    <a class="group-delete" href="javascript:void(0);" title="删除分组">-->
<!--                        <i class="iconfont icon-shanchu1"></i>-->
<!--                    </a>-->
<!--                </li>-->
<!--                {{ /each }}-->
<!--            </ul>-->
<!--            <a class="group-add" href="javascript:void(0);">新增分组</a>-->
<!--        </div>-->
<!--        <div class="file-list">-->
<!--            <div class="v-box-header am-cf">-->
<!--                <div class="h-left am-fl am-cf">-->
<!--                    <div class="am-fl">-->
<!--                        <div class="group-select am-dropdown">-->
<!--                            <button type="button" class="am-btn am-btn-sm am-btn-secondary am-dropdown-toggle">-->
<!--                                移动至 <span class="am-icon-caret-down"></span>-->
<!--                            </button>-->
<!--                            <ul class="group-list am-dropdown-content">-->
<!--                                <li class="am-dropdown-header">请选择分组</li>-->
<!--                                {{ each group_list }}-->
<!--                                <li>-->
<!--                                    <a class="move-file-group" data-group-id="{{ $value.group_id }}"-->
<!--                                       href="javascript:void(0);">{{ $value.group_name }}</a>-->
<!--                                </li>-->
<!--                                {{ /each }}-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="am-fl tpl-table-black-operation">-->
<!--                        <a href="javascript:void(0);" class="file-delete tpl-table-black-operation-del"-->
<!--                           data-group-id="2">-->
<!--                            <i class="am-icon-trash"></i> 删除-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="h-rigth am-fr">-->
<!--                    <div class="j-upload upload-image">-->
<!--                        <i class="iconfont icon-add1"></i>-->
<!--                        上传图片-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div id="file-list-body" class="v-box-body">-->
<!--                {{ include 'tpl-file-list' file_list }}-->
<!--            </div>-->
<!--            <div class="v-box-footer am-cf"></div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</script>-->
<!---->
<!--<!-- 文件列表模板 -->-->
<!--<script id="tpl-file-list" type="text/template">-->
<!--    <ul class="file-list-item">-->
<!--        {{ include 'tpl-file-list-item' data }}-->
<!--    </ul>-->
<!--    {{ if last_page > 1 }}-->
<!--    <div class="file-page-box am-fr">-->
<!--        <ul class="pagination">-->
<!--            {{ if current_page > 1 }}-->
<!--            <li>-->
<!--                <a class="switch-page" href="javascript:void(0);" title="上一页" data-page="{{ current_page - 1 }}">«</a>-->
<!--            </li>-->
<!--            {{ /if }}-->
<!--            {{ if current_page < last_page }}-->
<!--            <li>-->
<!--                <a class="switch-page" href="javascript:void(0);" title="下一页" data-page="{{ current_page + 1 }}">»</a>-->
<!--            </li>-->
<!--            {{ /if }}-->
<!--        </ul>-->
<!--    </div>-->
<!--    {{ /if }}-->
<!--</script>-->
<!---->
<!--<!-- 文件列表模板 -->-->
<!--<script id="tpl-file-list-item" type="text/template">-->
<!--    {{ each $data }}-->
<!--    <li class="ng-scope" title="{{ $value.file_name }}" data-file-id="{{ $value.file_id }}"-->
<!--        data-file-path="{{ $value.file_path }}">-->
<!--        <div class="img-cover"-->
<!--             style="background-image: url('{{ $value.file_path }}')">-->
<!--        </div>-->
<!--        <p class="file-name am-text-center am-text-truncate">{{ $value.file_name }}</p>-->
<!--        <div class="select-mask">-->
<!--            <img src="assets/store/img/chose.png">-->
<!--        </div>-->
<!--    </li>-->
<!--    {{ /each }}-->
<!--</script>-->
<!---->
<!--<!-- 分组元素-->-->
<!--<script id="tpl-group-item" type="text/template">-->
<!--    <li class="ng-scope" data-group-id="{{ group_id }}" title="{{ group_name }}">-->
<!--        <a class="group-edit" href="javascript:void(0);" title="编辑分组">-->
<!--            <i class="iconfont icon-bianji"></i>-->
<!--        </a>-->
<!--        <a class="group-name am-text-truncate" href="javascript:void(0);">-->
<!--            {{ group_name }}-->
<!--        </a>-->
<!--        <a class="group-delete" href="javascript:void(0);" title="删除分组">-->
<!--            <i class="iconfont icon-shanchu1"></i>-->
<!--        </a>-->
<!--    </li>-->
<!--</script>-->


<script src="assets/store/js/vue.min.js"></script>
<script>

    $(function () {
        var appVue = new Vue({
            el: '#app',
            data: {
                "backdrop":{"src": "https:\/\/demo.yiovo.com\/assets\/store\/img\/dealer\/backdrop.png"},
                "nickName":{"fontSize":14,"color":"#000000","left":150,"top":99},
                "avatar":{"width":70,"style":"circle","left":150,"top":18},
                "qrcode":{"width":100,"style":"circle","left":136,"top":128}},
            created: function () {
                /**
                 * 注册拖拽事件
                 */
                this.$nextTick(function () {
                    this.dragEvent('qrcode');
                    this.dragEvent('avatar');
                    this.dragEvent('nickName');
                });
            },
            methods: {
                /**
                 * 注册拖拽事件
                 * @param ele
                 */
                dragEvent: function (ele) {
                    var _this = this
                        , $preview = this.$refs.preview
                        , $ele = this.$refs[ele]
                        , l = 0
                        , t = 0
                        , r = $preview.offsetWidth - $ele.offsetWidth
                        , b = $preview.offsetHeight - $ele.offsetHeight;
                    $ele.onmousedown = function (ev) {
                        var sentX = ev.clientX - $ele.offsetLeft;
                        var sentY = ev.clientY - $ele.offsetTop;
                        document.onmousemove = function (ev) {
                            var slideLeft = ev.clientX - sentX;
                            var slideTop = ev.clientY - sentY;
                            slideLeft <= l && (slideLeft = l);
                            slideLeft >= r && (slideLeft = r);
                            slideTop <= t && (slideTop = t);
                            slideTop >= b && (slideTop = b);

                            _this[ele].left = slideLeft;
                            _this[ele].top = slideTop;
                        };
                        document.onmouseup = function () {
                            document.onmousemove = null;
                            document.onmouseup = null;
                        };
                        return false;
                    }
                }
            }
        });

        // 选择图片：分销中心首页
        $('.j-image').selectImages({
            multiple: false,
            done: function (data) {
                appVue.$data.backdrop.src = data[0].file_path;
            }
        });

        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm({
            buildData: function () {
                return {
                    qrcode: appVue.$data
                };
            }
        });

    });

</script>

</div>
<!-- 内容区域 end -->
