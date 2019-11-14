<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" method="post" novalidate="novalidate">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">积分设置</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require"> 积分名称 </label>
                                <div class="am-u-sm-9 am-u-md-6 am-u-lg-5 am-u-end">
                                    <input type="text" class="tpl-form-input" name="points[points_name]" value="积分" required="">
                                    <div class="help-block">
                                        <small>注：修改积分名称后，在买家端的所有页面里，看到的都是自定义的名称</small>
                                    </div>
                                    <div class="help-block">
                                        <small>注：商家使用自定义的积分名称来做品牌运营。如京东把积分称为“京豆”，淘宝把积分称为“淘金币”</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 积分说明 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <textarea rows="5" name="points[describe]" placeholder="请输入积分说明/规则">a) 积分不可兑现、不可转让,仅可在本平台使用;
b) 您在本平台参加特定活动也可使用积分,详细使用规则以具体活动时的规则为准;
c) 积分的数值精确到个位(小数点后全部舍弃,不进行四舍五入)
d) 买家在完成该笔交易(订单状态为“已签收”)后才能得到此笔交易的相应积分,如购买商品参加店铺其他优惠,则优惠的金额部分不享受积分获取;</textarea>
                                </div>
                            </div>

                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">积分赠送</div>
                            </div>
                            <div class="am-form-group am-padding-top">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 是否开启购物送积分 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" name="points[is_shopping_gift]" value="1" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 开启
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="points[is_shopping_gift]" value="0" data-am-ucheck="" checked="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 关闭
                                    </label>
                                    <div class="help-block">
                                        <small>注：如开启则订单完成后赠送用户积分</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require"> 积分赠送比例 </label>
                                <div class="am-u-sm-9 am-u-md-6 am-u-lg-5 am-u-end">
                                    <div class="am-input-group">
                                        <input type="number" name="points[gift_ratio]" class="am-form-field" min="0" value="100" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                        <span class="am-input-group-label am-input-group-label__right">%</span>
                                    </div>
                                    <div class="help-block">
                                        <small>注：赠送比例请填写数字0~100；订单的运费不参与积分赠送</small>
                                    </div>
                                    <div class="help-block">
                                        <small>例：订单付款金额(100.00元) * 积分赠送比例(100%) = 实际赠送的积分(100积分)</small>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">积分抵扣</div>
                            </div>
                            <div class="am-form-group am-padding-top">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 是否允许下单使用积分抵扣 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" name="points[is_shopping_discount]" value="1" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 允许
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="points[is_shopping_discount]" value="0" data-am-ucheck="" checked="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 不允许
                                    </label>
                                    <div class="help-block">
                                        <small>注：如开启则用户下单时可选择使用积分抵扣订单金额</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require"> 积分抵扣比例 </label>
                                <div class="am-u-sm-9 am-u-md-6 am-u-lg-5 am-u-end">
                                    <div class="am-input-group">
                                        <span class="am-input-group-label am-input-group-label__left">1个积分可抵扣</span>
                                        <input type="number" class="am-form-field" min="0.01" name="points[discount][discount_ratio]" value="0.01" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                        <span class="am-input-group-label am-input-group-label__right">元</span>
                                    </div>
                                    <div class="help-block">
                                        <small>例如：1积分可抵扣0.01元，100积分则可抵扣1元，1000积分则可抵扣10元</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require"> 抵扣条件 </label>
                                <div class="am-u-sm-9 am-u-md-6 am-u-lg-5 am-u-end">
                                    <div class="am-input-group am-form-group">
                                        <span class="am-input-group-label am-input-group-label__left">订单满</span>
                                        <input type="number" class="am-form-field" min="0" name="points[discount][full_order_price]" value="100.00" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                        <span class="am-input-group-label am-input-group-label__right">元</span>
                                    </div>
                                    <div class="am-input-group am-form-group am-margin-top-sm">
                                        <span class="am-input-group-label am-input-group-label__left">
                                            最高可抵扣金额
                                        </span>
                                        <input type="number" class="am-form-field" min="0" max="50" name="points[discount][max_money_ratio]" value="10" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                        <span class="am-input-group-label am-input-group-label__right">%</span>
                                    </div>
                                    <div class="help-block">
                                        <small>温馨提示：例如订单金额100元，最高可抵扣10%，此时用户可抵扣10元</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                    <button type="submit" class="j-submit am-btn am-btn-secondary">提交
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm();
    });
</script>
