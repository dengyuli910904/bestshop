<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" method="post" novalidate="novalidate">
                    <div class="widget-body">
                        <fieldset>
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">充值设置</div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 是否允许用户充值 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" name="recharge[is_entrance]" value="1" data-am-ucheck="" checked="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 允许
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="recharge[is_entrance]" value="0" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 不允许
                                    </label>
                                    <div class="help-block">
                                        <small>如设置不允许则用户端不显示充值按钮</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 是否允许自定义金额 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" name="recharge[is_custom]" value="1" data-am-ucheck="" checked="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 允许
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="recharge[is_custom]" value="0" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 不允许
                                    </label>
                                    <div class="help-block">
                                        <small>是否允许用户填写自定义的充值金额</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 是否自动匹配套餐 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <label class="am-radio-inline">
                                        <input type="radio" name="recharge[is_match_plan]" value="1" data-am-ucheck="" checked="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 是
                                    </label>
                                    <label class="am-radio-inline">
                                        <input type="radio" name="recharge[is_match_plan]" value="0" data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 否
                                    </label>
                                    <div class="help-block">
                                        <small>用户充值自定义金额是否自动匹配套餐，如不开启则不参与套餐金额赠送</small>
                                    </div>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label class="am-u-sm-3  am-u-lg-2 am-form-label form-require"> 充值说明 </label>
                                <div class="am-u-sm-9 am-u-end">
                                    <textarea rows="5" name="recharge[describe]" placeholder="请输入充值说明">1. 账户充值仅限微信在线方式支付，充值金额实时到账；
2. 账户充值套餐赠送的金额即时到账；
3. 账户余额有效期：自充值日起至用完即止；
4. 若有其它疑问，可拨打客服电话400-000-1234</textarea>
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
