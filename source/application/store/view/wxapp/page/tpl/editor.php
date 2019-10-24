<!--编辑器: 搜索-->
<script id="tpl_editor_search" type="text/template">
    <form class="am-form tpl-form-line-form" data-itemid="{{ id }}">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">提示文字 </label>
            <div class="am-u-sm-9 am-u-end">
                <input class="tpl-form-input" type="text" name="searchStyle"
                       data-bind="params.placeholder" value="{{ params.placeholder }}">
            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">搜索框样式 </label>
            <div class="am-u-sm-9 am-u-end">
                <label class="am-radio-inline">
                    <input data-bind="style.searchStyle" type="radio" name="searchStyle"
                           value="" {{ style.searchStyle=== '' ? 'checked' : '' }}> 方形
                </label>
                <label class="am-radio-inline">
                    <input data-bind="style.searchStyle" type="radio" name="searchStyle"
                           value="radius" {{ style.searchStyle=== 'radius' ? 'checked' : '' }}> 圆角
                </label>
                <label class="am-radio-inline">
                    <input data-bind="style.searchStyle" type="radio" name="searchStyle"
                           value="round" {{ style.searchStyle=== 'round' ? 'checked' : '' }}> 圆弧
                </label>
            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">文字对齐 </label>
            <div class="am-u-sm-9 am-u-end">
                <label class="am-radio-inline">
                    <input data-bind="style.textAlign" type="radio" name="textAlign"
                           value="left" {{ style.textAlign=== 'left' ? 'checked' : '' }}>
                    居左
                </label>
                <label class="am-radio-inline">
                    <input data-bind="style.textAlign" type="radio" name="textAlign"
                           value="center" {{ style.textAlign=== 'center' ? 'checked' : '' }}>
                    居中
                </label>
                <label class="am-radio-inline">
                    <input data-bind="style.textAlign" type="radio" name="textAlign"
                           value="right" {{ style.textAlign=== 'right' ? 'checked' : '' }}>
                    居右
                </label>
            </div>

        </div>

    </form>
</script>

<!--编辑器: banner-->
<script id="tpl_editor_banner" type="text/template">
    <form class="am-form tpl-form-line-form" data-itemid="{{ id }}">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">按钮形状 </label>
            <div class="am-u-sm-9 am-u-end">
                <label class="am-radio-inline">
                    <input data-bind="style.btnShape" type="radio" name="searchStyle"
                           value="rectangle" {{ style.btnShape=== 'rectangle' ? 'checked' : '' }}> 长方形
                </label>
                <label class="am-radio-inline">
                    <input data-bind="style.btnShape" type="radio" name="searchStyle"
                           value="square" {{ style.btnShape=== 'square' ? 'checked' : '' }}> 正方形
                </label>
                <label class="am-radio-inline">
                    <input data-bind="style.btnShape" type="radio" name="searchStyle"
                           value="round" {{ style.btnShape=== 'round' ? 'checked' : '' }}> 圆形
                </label>
            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">按钮颜色 </label>
            <div class="am-u-sm-9 am-u-end">
                <input class="" type="color" name="btnColor"
                       data-bind="style.btnColor" value="{{ style.btnColor }}">
            </div>

        </div>

        <div class="form-items">
            {{each data}}
            <div class="item" data-key="{{ $index }}">
                <div class="container">
                    <div class="item-image"><img src="{{ $value.imgUrl }}" alt=""></div>

                    <div class="item-form am-form-file">
                        <div class="input-group">
                            <input type="text" name="imgName" data-bind="data.{{ $index }}.imgName"
                                   value="{{ $value.imgName }}" placeholder="请选择图片" readonly>
                            <span class="input-group-addon">选择图片</span>
                            <input type="hidden" name="imgUrl" data-bind="data.{{ $index }}.imgUrl"
                                   value="{{ $value.imgUrl }}">
                        </div>

                        <div class="input-group" style="margin-top:10px;">
                            <input type="text" name="linkUrl" data-bind="data.{{ $index }}.linkUrl"
                                   value="{{ $value.linkUrl }}"
                                   placeholder="请输入链接地址    例：pages/index/index">
                            <!-- <span class="input-group-addon">选择链接</span> -->
                        </div>

                    </div>

                </div>

                <i class="iconfont icon-shanchu item-delete"></i>

            </div>

            {{/each}}
        </div>

        <div class="form-item-add">
            <i class="fa fa-plus"></i> 添加一个
        </div>

    </form>
</script>

<!--editor: imageSingle-->
<script id="tpl_editor_imageSingle" type="text/template">
    <form class="am-form tpl-form-line-form"><div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">上下边距 </label>
            <div class="am-u-sm-9 am-u-end"><input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value"><span class="value">0</span>px (像素)
                </div>

            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">左右边距 </label>
            <div class="am-u-sm-9 am-u-end">
                <input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value"><span class="value">0</span>px (像素)</div>

            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-9 am-u-end"><input type="color">
                <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
            </div>

        </div>

        <div class="form-items">
            <div>
                <div class="form-item drag"><i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image">
                                    <img src="https://demo.yiovo.com/assets/store/img/diy/banner/01.png" alt="">
                                </div>

                            </div>

                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text" value=""></div>

                        </div>

                    </div>

                </div>

                <div class="form-item drag"><i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/banner/01.png" alt=""></div>

                            </div>

                        </div>

                        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text" value=""></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="j-data-add form-item-add"><i class="fa fa-plus"></i> 添加一个
        </div>

    </form>
</script>

<!--window-->
<script id="tpl_editor_window" type="text/template">

    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">上下边距 </label>
            <div class="am-u-sm-9 am-u-end">
                <input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value">
                    <span class="value">0</span>px (像素)
                </div>

            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">左右边距 </label>
            <div class="am-u-sm-9 am-u-end">
                <input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value">
                    <span class="value">0</span>px (像素)
                </div>

            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-9 am-u-end">
                <input type="color">
                <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
            </div>

        </div>

        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">布局方式 </label>
            <div class="j-switch-help am-u-sm-8 am-u-end">
                <label class="am-radio-inline"><input type="radio" value="2" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 堆积两列</label>
                <label class="am-radio-inline"><input type="radio" value="3" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 堆积三列</label>
                <label class="am-radio-inline"><input type="radio" value="4" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 堆积四列</label>
                <label class="am-radio-inline"><input type="radio" value="-1" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 橱窗样式<small class="help am-hide">最多显示四张图片，超出隐藏</small></label>
                <div data-default="请确保所有图片的尺寸/比例相同。" class="help-block am-margin-top-xs"><small>请确保所有图片的尺寸/比例相同。</small></div>

            </div>

        </div>

        <div class="form-items">
            <div>
                <div class="form-item drag"><i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image">
                                    <img src="https://demo.yiovo.com/assets/store/img/diy/window/01.jpg" alt="">
                                </div>

                            </div>

                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>

                        </div>

                    </div>

                </div>

                <div class="form-item drag"><i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/window/02.jpg" alt=""></div>

                            </div>

                        </div>

                        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>

                        </div>

                    </div>

                </div>

                <div class="form-item drag"><i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image">
                                    <img src="https://demo.yiovo.com/assets/store/img/diy/window/03.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-item drag">
                    <i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image">
                                    <img src="https://demo.yiovo.com/assets/store/img/diy/window/04.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="j-data-add form-item-add"><i class="fa fa-plus"></i> 添加一个</div>
    </form>
</script>

<!--navBar-->
<script id="tpl_editor_navBar" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-8 am-u-end"><input type="color">
                <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">每行数量 </label>
            <div class="am-u-sm-8 am-u-end">
                <label class="am-radio-inline"><input type="radio" value="3" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 3个</label>
                <label class="am-radio-inline"><input type="radio" value="4" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 4个</label>
                <label class="am-radio-inline"><input type="radio" value="5" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 5个</label>
            </div>
        </div>
        <div class="form-items">
            <div>
                <div class="form-item drag">
                    <i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png" alt=""></div>
                                <div class="help-block"><small>建议尺寸100x100</small></div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字内容 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字颜色 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                    </div>
                </div>
                <div class="form-item drag">
                    <i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png" alt=""></div>
                                <div class="help-block"><small>建议尺寸100x100</small></div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字内容 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字颜色 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                    </div>
                </div>
                <div class="form-item drag">
                    <i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png" alt=""></div>
                                <div class="help-block"><small>建议尺寸100x100</small></div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字内容 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字颜色 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                    </div>
                </div>
                <div class="form-item drag">
                    <i class="iconfont icon-shanchu item-delete"></i>
                    <div class="item-inner">
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">图片 </label>
                            <div class="am-u-sm-8 am-u-end">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/navbar/01.png" alt=""></div>
                                <div class="help-block"><small>建议尺寸100x100</small></div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字内容 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">文字颜色 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button></div>
                        </div>
                        <div class="am-form-group">
                            <label class="am-u-sm-3 am-form-label am-text-xs">链接地址 </label>
                            <div class="am-u-sm-8 am-u-end"><input type="text"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="j-data-add form-item-add"><i class="fa fa-plus"></i> 添加一个</div>
    </form>
</script>

<!--blank-->
<script id="tpl_editor_blank" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-8 am-u-end">
                <input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">组件高度 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="1" max="200" class="tpl-form-input"> <div class="display-value"><span class="value">20</span>px (像素)</div>
            </div>
        </div>
    </form>
</script>
<!--guide-->
<script id="tpl_editor_guide" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-8 am-u-end">
                <input type="color">
                <button type="button" class="btn-resetColor am-btn am-btn-xs">重置</button>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">线条样式 </label>
            <div class="am-u-sm-8 am-u-end">
                <label class="am-radio-inline">
                    <input type="radio" value="solid" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                    实线
                </label>
                <label class="am-radio-inline"><input type="radio" value="dashed" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 虚线
                </label>
                <label class="am-radio-inline"><input type="radio" value="dotted" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 点状
                </label>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">线条颜色 </label>
            <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">线条高度 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="1" max="20" class="tpl-form-input">
                <div class="display-value"><span class="value">1</span>px
                    (像素)
                </div>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-4 am-form-label am-text-xs">上下边距 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value"><span class="value">10</span>px(像素)
                </div>
            </div>
        </div>
    </form>
</script>
<!--viedo-->
<script id="tpl_editor_video" type="text/template">
   <form class="am-form tpl-form-line-form"><div class="am-form-group">
           <label class="am-u-sm-3 am-form-label am-text-xs">上下边距 </label>
           <div class="am-u-sm-8 am-u-end">
               <input type="range" min="0" max="50" class="tpl-form-input">
               <div class="display-value"><span class="value">0</span>px (像素)
                    </div>
           </div></div> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">视频高度 </label>
           <div class="am-u-sm-8 am-u-end">
               <input type="range" min="50" max="500" class="tpl-form-input">
               <div class="display-value"><span class="value">190</span>px
                        (像素)
                    </div>
               <div class="help-block am-margin-top-xs"><small>滑块可用左右方向键精确调整</small></div></div>
       </div> <div class="am-form-group am-padding-top"><label class="am-u-sm-3 am-form-label am-text-xs">视频封面 </label>
           <div class="am-u-sm-8 am-u-end">
               <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/video_poster.png" alt=""></div>
           </div></div> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">视频地址 </label>
           <div class="am-u-sm-9 am-u-end"><input type="url" class="tpl-form-input"></div>
       </div> <div class="am-form-group">
           <label class="am-u-sm-3 am-form-label am-text-xs">自动播放 </label>
           <div class="am-u-sm-9 am-u-end"><label class="am-radio-inline">
                   <input type="radio" value="0" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 否
                    </label>
               <label class="am-radio-inline">
                   <input type="radio" value="1" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 是
                    </label>
           </div>
       </div>
   </form>
</script>

<!--article-->
<script id="tpl_editor_article" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">文章分类 </label>
            <div class="am-u-sm-8 am-u-end">
                <select data-am-selected="{btnSize: 'sm',  placeholder:'全部分类', maxHeight: 400}"><option value="0"> -- 全部分类 --</option> </select>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">显示数量 </label>
            <div class="am-u-sm-8 am-u-end">
                <input type="number" min="1" class="tpl-form-input"> <div class="help-block am-padding-top-xs"><small>文章数据请到 <a href="index.php?s=/store/content.article/index" target="_blank">内容管理
                            - 文章列表</a>
                        中管理
                    </small>
                </div>
            </div>
        </div>
    </form>
</script>
<!--special-->
<script id="tpl_editor_special" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">文章分类 </label>
            <div class="am-u-sm-8 am-u-end">
                <select data-am-selected="{btnSize: 'sm',  placeholder:'全部分类', maxHeight: 400}"><option value="0"> -- 全部分类 --</option> </select>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">显示数量 </label>
            <div class="am-u-sm-8 am-u-end"><input type="number" min="1" class="tpl-form-input"> <div class="help-block am-padding-top-xs"><small>文章数据请到 <a href="index.php?s=/store/content.article/index" target="_blank">内容管理
                            - 文章列表</a>
                        中管理
                    </small>
                </div>
            </div>
        </div>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs form-require">图片 </label>
            <div class="am-u-sm-8 am-u-end">
                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/special.png" alt="" style="height: 38px;"></div>
                <div class="help-block am-padding-top-xs"><small>建议尺寸140×38</small></div>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs form-require"> 显示类型 </label>
            <div class="am-u-sm-8 am-u-end">
                <label class="am-radio-inline"><input type="radio" value="1" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                    单行
                </label>
                <label class="am-radio-inline"><input type="radio" value="2" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                    两行 </label>
            </div>
        </div>
    </form>
</script>
<!--notice-->
<script id="tpl_editor_notice" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">上下边距 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="50" class="tpl-form-input"> <div class="display-value"><span class="value">4</span>px
                    (像素)
                </div>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-9 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button></div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">文字颜色 </label>
            <div class="am-u-sm-9 am-u-end"><input type="color">
                <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button></div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">公告图标 </label>
            <div class="am-u-sm-8 am-u-end">
                <div class="data-image">
                    <img src="https://demo.yiovo.com/assets/store/img/diy/notice.png" alt="" style="height: 30px;"></div>
                <div class="help-block"><small>建议尺寸：32×32</small></div>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">公告内容</label>
            <div class="am-u-sm-9 am-u-end"><input type="text" class="tpl-form-input"></div>
        </div>
    </form>

</script>
<!--richText-->
<script id="tpl_editor_richText" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">上下边距 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value"><span class="value">0</span>px
                    (像素)
                </div>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">左右边距 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="50" class="tpl-form-input">
                <div class="display-value"><span class="value">0</span>px
                    (像素)
                </div>
            </div>
        </div>
        <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-9 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button></div>
        </div>
        <div class="am-form-group am-padding-top-sm">
            <div class="edui-container" style="width: 375px; z-index: 999;"><div class="edui-toolbar">
                    <div class="edui-btn-toolbar" unselectable="on" onmousedown="return false">
                        <div class="edui-btn edui-btn-source" unselectable="on" onmousedown="return false" data-original-title="源代码">
                            <div unselectable="on" class="edui-icon-source edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-undo  edui-disabled" unselectable="on" onmousedown="return false" data-original-title="撤销">
                            <div unselectable="on" class="edui-icon-undo edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-redo  edui-disabled" unselectable="on" onmousedown="return false" data-original-title="重做">
                            <div unselectable="on" class="edui-icon-redo edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-bold" unselectable="on" onmousedown="return false" data-original-title="加粗"> <div unselectable="on" class="edui-icon-bold edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-italic" unselectable="on" onmousedown="return false" data-original-title="斜体">
                            <div unselectable="on" class="edui-icon-italic edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-underline" unselectable="on" onmousedown="return false" data-original-title="下划线">
                            <div unselectable="on" class="edui-icon-underline edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-strikethrough" unselectable="on" onmousedown="return false" data-original-title="删除线">
                            <div unselectable="on" class="edui-icon-strikethrough edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-superscript" unselectable="on" onmousedown="return false" data-original-title="上标">
                            <div unselectable="on" class="edui-icon-superscript edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div>
                        </div>
                        <div class="edui-btn edui-btn-subscript" unselectable="on" onmousedown="return false" data-original-title="下标"> <div unselectable="on" class="edui-icon-subscript edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false" style="z-index: 1000; display: none; top: 22px; left: -7px;">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false">下标</div>
                            </div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-splitbutton edui-splitbutton-forecolor" unselectable="on" data-original-title="字体颜色"><div class="edui-btn" unselectable="on">
                                <div unselectable="on" class="edui-icon-forecolor edui-icon"></div><div class="edui-splitbutton-color-label"></div></div>
                            <div unselectable="on" class="edui-btn edui-dropdown-toggle"><div unselectable="on" class="edui-caret"></div></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div></div>
                        <div class="edui-splitbutton edui-splitbutton-backcolor" unselectable="on" data-original-title="背景色">
                            <div class="edui-btn" unselectable="on"><div unselectable="on" class="edui-icon-backcolor edui-icon"></div><div class="edui-splitbutton-color-label"></div></div>
                            <div unselectable="on" class="edui-btn edui-dropdown-toggle"><div unselectable="on" class="edui-caret"></div></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div></div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div><div class="edui-btn edui-btn-removeformat" unselectable="on" onmousedown="return false" data-original-title="清除格式">
                            <div unselectable="on" class="edui-icon-removeformat edui-icon"></div><div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div><div class="edui-btn edui-btn-insertorderedlist" unselectable="on" onmousedown="return false" data-original-title="有序列表">
                            <div unselectable="on" class="edui-icon-insertorderedlist edui-icon"></div><div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div>
                        </div>
                        <div class="edui-btn edui-btn-insertunorderedlist" unselectable="on" onmousedown="return false" data-original-title="无序列表"> <div unselectable="on" class="edui-icon-insertunorderedlist edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div></div><div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-selectall" unselectable="on" onmousedown="return false" data-original-title="全选"> <div unselectable="on" class="edui-icon-selectall edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div></div>
                        <div class="edui-btn edui-btn- edui-btn-name-paragraph edui-combobox" unselectable="on" onmousedown="return false" data-original-title="段落格式">
                            <span unselectable="on" onmousedown="return false" class="edui-button-label">段落格式</span><span class="edui-button-spacing"></span>
                            <span unselectable="on" onmousedown="return false" class="edui-caret"></span><div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn- edui-btn-name-fontfamily edui-combobox" unselectable="on" onmousedown="return false" data-original-title="字体">
                            <span unselectable="on" onmousedown="return false" class="edui-button-label">sans-...</span><span class="edui-button-spacing"></span>
                            <span unselectable="on" onmousedown="return false" class="edui-caret"></span><div class="edui-tooltip" unselectable="on" onmousedown="return false">
                                <div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div><div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div>
                        </div>
                        <div class="edui-btn edui-btn- edui-btn-name-fontsize edui-combobox" unselectable="on" onmousedown="return false" data-original-title="字号">
                            <span unselectable="on" onmousedown="return false" class="edui-button-label">字号</span><span class="edui-button-spacing"></span>
                            <span unselectable="on" onmousedown="return false" class="edui-caret"></span>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div></div></div><div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-justifyleft" unselectable="on" onmousedown="return false" data-original-title="居左对齐"> <div unselectable="on" class="edui-icon-justifyleft edui-icon"></div>

                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-justifycenter" unselectable="on" onmousedown="return false" data-original-title="居中对齐"> <div unselectable="on" class="edui-icon-justifycenter edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-justifyright" unselectable="on" onmousedown="return false" data-original-title="居右对齐"> <div unselectable="on" class="edui-icon-justifyright edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-image" unselectable="on" onmousedown="return false" data-original-title="图片"> <div unselectable="on" class="edui-icon-image edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div>
                        <div class="edui-btn edui-btn-video" unselectable="on" onmousedown="return false" data-original-title="视频"> <div unselectable="on" class="edui-icon-video edui-icon"></div>
                            <div class="edui-tooltip" unselectable="on" onmousedown="return false"><div class="edui-tooltip-arrow" unselectable="on" onmousedown="return false"></div>
                                <div class="edui-tooltip-inner" unselectable="on" onmousedown="return false"></div>
                            </div>
                        </div><div class="edui-separator" unselectable="on" onmousedown="return false"></div>
                        <div class="edui-btn edui-btn-horizontal" unselectable="on" onmousedown="return false" data-original-title="分隔线"> <div unselectable="on" class="edui-icon-horizontal edui-icon"></div>
                        </div>
                    </div>
                    <div class="edui-dialog-container"></div>
                </div>
                <div class="edui-editor-body"><div class=" edui-body-container" contenteditable="true" style="width: 369px; height: 400px; z-index: 999;"><p>这里是文本的内容</p></div>
                    <textarea id="ume-editor" name="editorValue" style="display: none;"></textarea></div>
            </div>
        </div>
    </form>
</script>

<!--goods-->
<script id="tpl_editor_goods" type="text/template">
    <form class="am-form tpl-form-line-form"><div data-item-class="switch-source" class="j-switch-box">
            <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label am-text-xs">商品来源 </label>
                <div class="am-u-sm-8 am-u-end">
                    <label class="am-radio-inline"><input type="radio" value="auto" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 自动获取
                    </label>
                <label class="am-radio-inline"><input type="radio" value="choice" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 手动选择
                    </label></div>
            </div>
            <div class="switch-source __choice " style="display: none;">
                <div class="form-items __goods am-cf"><div>
                        <div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i>
                            <div class="item-inner">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png" alt=""></div>
                            </div>
                        </div>
                        <div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i>
                            <div class="item-inner"><div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="j-selectGoods form-item-add"><i class="fa fa-plus"></i> 选择商品
                </div>
            </div>
            <div class="switch-source"><div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品分类 </label>
                    <div class="am-u-sm-8 am-u-end">
                        <select data-am-selected="{btnSize: 'sm',  placeholder:'全部分类', maxHeight: 400}"><option value="0"> -- 全部分类 --</option>
                            <option value="10001"> 手机数码</option> <option value="10010">
                                　小米
                            </option><option value="10011">
                                　华为
                            </option><option value="10012">
                                　Iphone
                            </option><option value="10013">
                                　vivo
                            </option><option value="10014">
                                　OPPO
                            </option><option value="10015">
                                　魅族
                            </option><option value="10016">
                                　三星
                            </option><option value="10017">
                                　女性手机
                            </option><option value="10002"> 家用电器</option> <option value="10018">
                                　电水壶/热水瓶
                            </option><option value="10019">
                                　电压力锅
                            </option><option value="10020">
                                　电饭煲
                            </option><option value="10021">
                                　电磁炉
                            </option><option value="10022">
                                　微波炉
                            </option><option value="10023">
                                　电饼铛
                            </option><option value="10024">
                                　豆浆机
                            </option><option value="10025">
                                　多用途锅
                            </option><option value="10003"> 电脑办公</option> <option value="10026">
                                　轻薄本
                            </option><option value="10027">
                                　游戏本
                            </option><option value="10028">
                                　机械键盘
                            </option><option value="10029">
                                　组装电脑
                            </option><option value="10030">
                                　移动硬盘
                            </option><option value="10031">
                                　显卡
                            </option><option value="10032">
                                　游戏台式机
                            </option><option value="10033">
                                　家用打印机
                            </option><option value="10034">
                                　吃鸡装备
                            </option><option value="10004"> 汽车用品</option> <option value="10036">
                                　机油
                            </option><option value="10037">
                                　汽车坐垫
                            </option><option value="10038">
                                　洗车水枪
                            </option><option value="10039">
                                　行车记录仪
                            </option><option value="10040">
                                　轮胎
                            </option><option value="10041">
                                　应急救援
                            </option><option value="10042">
                                　香水
                            </option><option value="10043">
                                　功能小件
                            </option><option value="10044">
                                　挂件
                            </option><option value="10005"> 男装</option> <option value="10045">
                                　夹克
                            </option><option value="10046">
                                　T恤
                            </option><option value="10047">
                                　 针织衫
                            </option><option value="10048">
                                　衬衫
                            </option><option value="10049">
                                　卫衣
                            </option><option value="10050">
                                　风衣
                            </option><option value="10051">
                                　牛仔裤
                            </option><option value="10052">
                                　休闲裤
                            </option><option value="10053">
                                　自营男装
                            </option><option value="10006"> 女装</option> <option value="10054">
                                　早春新品
                            </option><option value="10055">
                                　连衣裙
                            </option><option value="10056">
                                　衬衫
                            </option><option value="10057">
                                　T恤
                            </option><option value="10058">
                                　牛仔裤
                            </option><option value="10059">
                                　卫衣
                            </option><option value="10060">
                                　针织衫
                            </option><option value="10061">
                                　牛仔外套
                            </option><option value="10062">
                                　自营女装
                            </option><option value="10007"> 钟表珠宝</option> <option value="10069">
                                　瑞表
                            </option><option value="10070">
                                　国表
                            </option><option value="10071">
                                　德表
                            </option><option value="10072">
                                　日韩表
                            </option><option value="10073">
                                　儿童手表
                            </option><option value="10074">
                                　欧美表
                            </option><option value="10008"> 内衣配饰</option> <option value="10063">
                                　内衣馆
                            </option><option value="10064">
                                　大牌文胸
                            </option><option value="10065">
                                　自营内衣
                            </option><option value="10066">
                                　内衣爆款
                            </option><option value="10067">
                                　女士围巾/披肩
                            </option><option value="10068">
                                　配饰馆
                            </option><option value="10009"> 箱包手袋</option> <option value="10075">
                                　拉杆箱
                            </option><option value="10076">
                                　时尚男包
                            </option><option value="10077">
                                　男士腰带
                            </option><option value="10078">
                                　男包上新
                            </option><option value="10079">
                                　自营女包
                            </option><option value="10080">
                                　新款双肩包
                            </option></select></div>
                </div>
                <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 商品排序 </label> <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="all" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            综合
                        </label> <label class="am-radio-inline"><input type="radio" value="sales" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            销量 </label> <label class="am-radio-inline"><input type="radio" value="price" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            价格 </label></div>
                </div>
                <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 显示数量 </label> <div class="am-u-sm-8 am-u-end"><input type="number" min="1" class="tpl-form-input"></div>
                </div>
            </div>
        </div>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed"> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label> <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button></div>
        </div>
        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">显示类型 </label> <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="list" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 列表平铺
                </label> <label class="am-radio-inline"><input type="radio" value="slide" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 横向滑动
                </label></div>
        </div>
        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">分列数量 </label> <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="1" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 单列
                </label> <label class="am-radio-inline"><input type="radio" value="2" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 两列
                </label> <label class="am-radio-inline"><input type="radio" value="3" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 三列
                </label></div></div> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">显示内容 </label> <div class="am-u-sm-8 am-u-end"><label class="am-checkbox-inline"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品名称
                </label> <label class="am-checkbox-inline"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品价格
                </label> <label class="am-checkbox-inline"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 划线价格
                </label> <label class="am-checkbox-inline" style="display: none;"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品卖点
                </label> <label class="am-checkbox-inline" style="display: none;"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品销量
                </label></div></div></form>
</script>
<!--coupon-->
<script id="tpl_editor_coupon" type="text/template">
    <form class="am-form tpl-form-line-form"><div data-item-class="switch-source" class="j-switch-box"><div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品来源 </label> <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="auto" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 自动获取
                    </label> <label class="am-radio-inline"><input type="radio" value="choice" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 手动选择
                    </label></div></div> <div class="switch-source __choice" style="display: none;"><div class="form-items __goods am-cf"><div><div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i> <div class="item-inner"><div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png" alt=""></div></div></div><div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i> <div class="item-inner"><div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png" alt=""></div></div></div></div></div> <div class="j-selectGoods form-item-add"><i class="fa fa-plus"></i> 选择商品
                </div></div> <div class="switch-source __auto"><div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品分类 </label> <div class="am-u-sm-8 am-u-end"><select data-am-selected="{btnSize: 'sm',  placeholder:'全部分类', maxHeight: 400}"><option value="0"> -- 全部分类 --</option> </select></div></div> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品排序 </label> <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="all" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            综合
                        </label> <label class="am-radio-inline"><input type="radio" value="sales" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            销量
                        </label> <label class="am-radio-inline"><input type="radio" value="price" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            价格
                        </label></div></div> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">显示数量 </label> <div class="am-u-sm-8 am-u-end"><input type="number" min="1" class="tpl-form-input"></div></div></div></div> <hr data-am-widget="divider" class="am-divider am-divider-dashed"> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label> <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button></div></div> <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">显示内容 </label> <div class="am-u-sm-8 am-u-end"><label class="am-checkbox-inline"><input type="checkbox" value="1" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品卖点
                </label> <label class="am-checkbox-inline"><input type="checkbox" value="1" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 拼团价格
                </label> <label class="am-checkbox-inline"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 划线价格
                </label></div></div></form>

</script>
<!--sharingGoods-->
<script id="tpl_editor_sharingGoods" type="text/template">
    <div class="drag optional selected"><div class="diy-sharingGoods" style="background: rgb(246, 246, 246);"><div class="goods-item dis-flex"><div class="goods-item_left"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png"></div> <div class="goods-item_right"><div class="goods-item_title twolist-hidden"><span>此处是拼团商品</span></div> <div class="goods-item_desc"><div class="desc-selling_point am-text-truncate"><span>此款商品美观大方 性价比较高 不容错过</span></div> <div class="desc-situation"><span class="iconfont icon-pintuan_huaban"></span> <span class="people">2人团</span> <span class="x-color-999">已有43人进行拼团</span></div> <div class="desc_footer"><span class="price_x">¥99.00</span> <span class="price_y x-color-999">¥139.00</span></div></div> <div class="btn-settlement">去拼团</div></div></div><div class="goods-item dis-flex"><div class="goods-item_left"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png"></div> <div class="goods-item_right"><div class="goods-item_title twolist-hidden"><span>此处是拼团商品</span></div> <div class="goods-item_desc"><div class="desc-selling_point am-text-truncate"><span>此款商品美观大方 性价比较高 不容错过</span></div> <div class="desc-situation"><span class="iconfont icon-pintuan_huaban"></span> <span class="people">2人团</span> <span class="x-color-999">已有43人进行拼团</span></div> <div class="desc_footer"><span class="price_x">¥99.00</span> <span class="price_y x-color-999">¥139.00</span></div></div> <div class="btn-settlement">去拼团</div></div></div></div> <div class="btn-edit-del"><div class="btn-del">删除</div></div></div>
</script>
<!--bargainGoods-->
<script id="tpl_editor_bargainGoods" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div data-item-class="switch-source" class="j-switch-box">
            <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品来源 </label>
                <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="auto" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 自动获取
                    </label> <label class="am-radio-inline"><input type="radio" value="choice" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 手动选择
                    </label></div></div>
            <div class="switch-source __choice" style="display: none;">
                <div class="form-items __goods am-cf">
                    <div>
                        <div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i>
                            <div class="item-inner">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png" alt=""></div></div></div>
                        <div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i>
                            <div class="item-inner">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/goods/01.png" alt=""></div></div></div></div></div>
                <div class="j-selectGoods form-item-add"><i class="fa fa-plus"></i> 选择商品
                </div></div>
            <div class="switch-source __auto">
                <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品排序 </label>
                    <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="all" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            综合
                        </label> <label class="am-radio-inline"><input type="radio" value="sales" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            销量
                        </label> <label class="am-radio-inline"><input type="radio" value="price" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                            价格
                        </label></div></div>
                <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">显示数量 </label>
                    <div class="am-u-sm-8 am-u-end"><input type="number" min="1" class="tpl-form-input"></div></div></div></div> <hr data-am-widget="divider" class="am-divider am-divider-dashed">
        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">背景颜色 </label>
            <div class="am-u-sm-8 am-u-end"><input type="color"> <button type="button" class="btn-resetColor am-btn am-btn-xs">
                    重置
                </button></div></div>
        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">显示内容 </label>
            <div class="am-u-sm-8 am-u-end"><label class="am-checkbox-inline"><input type="checkbox" value="1" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品名称
                </label> <label class="am-checkbox-inline"><input type="checkbox" value="1" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 正在砍价
                </label> <label class="am-checkbox-inline"><input type="checkbox" value="1" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 砍价底价
                </label> <label class="am-checkbox-inline"><input type="checkbox" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 商品原价
                </label></div></div></form>
</script>
<!--shop-->
<script id="tpl_editor_shop" type="text/template">
    <form class="am-form tpl-form-line-form">
        <div data-item-class="switch-source" class="j-switch-box">
            <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs">商品来源 </label>
                <div class="am-u-sm-8 am-u-end"><label class="am-radio-inline"><input type="radio" value="auto" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 自动获取
                    </label> <label class="am-radio-inline"><input type="radio" value="choice" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 手动选择
                    </label></div></div>
            <div class="switch-source __choice" style="display: none;">
                <div class="form-items __goods am-cf">
                    <div>
                        <div class="form-item drag"><i data-no-confirm="true" class="iconfont icon-shanchu item-delete"></i>
                            <div class="item-inner">
                                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/circular.png" alt=""></div></div></div></div></div>
                <div class="j-selectShop form-item-add"><span>选择门店</span></div></div>
            <div class="switch-source">
                <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 展示数量 </label>
                    <div class="am-u-sm-8 am-u-end"><input type="number" min="1" class="tpl-form-input"></div></div></div></div></form>
</script>
<!--service-->
<script id="tpl_editor_service" type="text/template">
    <form class="am-form tpl-form-line-form">

        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 底边距 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="100" class="tpl-form-input">
                <div class="display-value"><span class="value">10</span>%
                </div></div></div>
        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 右边距 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="100" class="tpl-form-input">
                <div class="display-value"><span class="value">1</span>%
                </div></div>
        </div>

        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 不透明度 </label>
            <div class="am-u-sm-8 am-u-end"><input type="range" min="0" max="100" class="tpl-form-input">
                <div class="display-value"><span class="value">100</span>%
                </div>
            </div>
        </div>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed">
        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 客服类型 </label>
            <div class="am-u-sm-9 am-u-end"><label class="am-radio-inline"><input type="radio" value="chat" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 在线聊天
                </label> <label class="am-radio-inline"><input type="radio" value="phone" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 拨打电话
                </label></div>
        </div>

        <div class="am-form-group" style="display: none;"><label class="am-u-sm-3 am-form-label am-text-xs"> 电话号码 </label>
            <div class="am-u-sm-9 am-u-end"><input type="text" placeholder="请输入电话号码" class="tpl-form-input"></div>
        </div>

        <div class="am-form-group"><label class="am-u-sm-3 am-form-label am-text-xs"> 客服图标 </label>
            <div class="am-u-sm-8 am-u-end">
                <div class="data-image"><img src="https://demo.yiovo.com/assets/store/img/diy/service.png" title="点击更换图片" alt="" style="height: 45px;"></div>
                <div class="help-block"><small>建议尺寸：90×90</small></div>
            </div>
        </div>
    </form>
</script>
<!--catgory-->
<script id="tpl_editor_catgory" type="text/template">

</script>
<!--sharingCatgory-->
<script id="tpl_editor_sharingCatgory" type="text/template">

</script>
<!--articleCatgory-->
<script id="tpl_editor_articleCatgory" type="text/template">

