 <!-- <link rel="stylesheet" href="assets/store/css/layer.css"/> -->
 <div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <form id="my-form" class="am-form tpl-form-line-form" method="post" novalidate="novalidate">
                    <div class="widget-body">
                        <div class="am-tabs am-margin-top" data-am-tabs="{noSwipe: 1}">
                            <ul class="am-tabs-nav am-nav am-nav-tabs">
                                <li class="am-active"><a href="#tab1">基础设置</a></li>
                                <li><a href="#tab2">分销商条件</a></li>
                                <li><a href="#tab3">佣金设置</a></li>
                                <li><a href="#tab4">结算</a></li>
                                <li><a href="#tab5">自定义文字</a></li>
                                <li><a href="#tab6">申请协议</a></li>
                                <li><a href="#tab7">页面背景图</a></li>
                                <li><a href="#tab8">模板消息</a></li>
                            </ul>
                            <div class="am-tabs-bd">
                                <div class="am-tab-panel am-margin-top-lg am-active am-in" id="tab1">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require"> 是否开启分销功能 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][is_open]" value="0" data-am-ucheck="" <?= ($data['basic']->is_open == 0? 'checked':'') ?> class="am-ucheck-radio">
                                                开启
                                            </label>
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][is_open]" value="1" data-am-ucheck="" <?= ($data['basic']->is_open == 1? 'checked':'') ?> class="am-ucheck-radio">
                                                关闭
                                            </label>
                                        </div>
                                    </div>
                                    <div class="am-form-group am-padding-top">
                                        <label class="am-u-sm-3 am-form-label form-require"> 分销层级 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][level]" value="1" <?= ($data['basic']->level == 1? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                一级分销
                                            </label>
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][level]" value="2" <?= ($data['basic']->level == 2? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                二级分销
                                            </label>
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][level]" value="3" <?= ($data['basic']->level == 3? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                三级分销
                                            </label>
                                        </div>
                                    </div>
                                    <div class="am-form-group am-padding-top">
                                        <label class="am-u-sm-3 am-form-label form-require"> 分销商内购 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][self_buy]" value="1" <?= ($data['basic']->self_buy == 1? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                开启
                                            </label>
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[basic][self_buy]" value="0" <?= ($data['basic']->self_buy == 0? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                关闭
                                            </label>
                                            <div class="help-block">
                                                <small>如开启，分销商自己购买商品，获得一级佣金</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel am-margin-top-lg" id="tab2">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require"> 成为分销商条件 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[condition][become]" value="10" <?= ($data['condition']->become == 10? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                需后台审核
                                            </label>
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[condition][become]" value="20" <?= ($data['condition']->become == 20? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                无需审核
                                            </label>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require"> 购买指定商品成为分销商 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[condition][become__buy_goods]" value="0" <?= ($data['condition']->become__buy_goods == 0? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                关闭
                                            </label>
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[condition][become__buy_goods]" value="1" <?= ($data['condition']->become__buy_goods == 1? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                开启
                                            </label>
                                            <div class="help-block">
                                                <small>购买指定商品付款后自动成为分销商，无需后台审核</small>
                                            </div>
                                            <div class="widget-become-goods am-form-file am-margin-top-xs
                                                hide">
                                                <button type="button" class="j-selectGoods upload-file am-btn am-btn-secondary am-radius">
                                                    <i class="am-icon-cloud-upload"></i> 选择商品
                                                </button>
                                                <div class="widget-goods-list uploader-list am-cf">
                                                                                                    </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group am-padding-top">
                                        <label class="am-u-sm-3 am-form-label form-require"> 成为下线条件 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-radio-inline">
                                                <input type="radio" name="setting[condition][downline]" value="10" <?= ($data['condition']->downline == 10? 'checked':'') ?> data-am-ucheck="" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                首次点击分享链接
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel am-margin-top-lg" id="tab3">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            一级佣金比例
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="number" min="0" max="100" class="tpl-form-input" name="setting[commission][first_money]" value="<?= $data['commission']->first_money ?>" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                            <small>佣金比例范围 0% - 100%</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            二级佣金比例
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="number" min="0" max="100" class="tpl-form-input" name="setting[commission][second_money]" value="<?= $data['commission']->second_money ?>" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                            <small>佣金比例范围 0% - 100%</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            三级佣金比例
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="number" min="0" max="100" class="tpl-form-input" name="setting[commission][third_money]" value="<?= $data['commission']->third_money ?>" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                            <small>佣金比例范围 0% - 100%</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel am-margin-top-lg" id="tab4">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require"> 提现方式 </label>
                                        <div class="am-u-sm-9">
                                            <label class="am-checkbox-inline">
                                                <input type="checkbox" name="setting[settlement][pay_type][]" value="10" <?= in_array("10", $data['settlement']->pay_type) ? "checked": "" ?> data-am-ucheck="" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                微信支付
                                            </label>
                                            <label class="am-checkbox-inline">
                                                <input type="checkbox" name="setting[settlement][pay_type][]" value="20" <?= in_array("20", $data['settlement']->pay_type) ? "checked": "" ?> data-am-ucheck="" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                支付宝
                                            </label>
                                            <label class="am-checkbox-inline">
                                                <input type="checkbox" name="setting[settlement][pay_type][]" value="30" <?= in_array("30", $data['settlement']->pay_type) ? "checked": "" ?> data-am-ucheck="" class="am-ucheck-checkbox"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                银行卡
                                            </label>
                                            <div class="help-block">
                                                <small>注：如使用微信支付，则需申请微信支付企业付款到零钱功能</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            最低提现额度
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="number" min="0" class="tpl-form-input" name="setting[settlement][min_money]" value="<?= $data['settlement']->min_money ?>" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                        </div>
                                    </div>
                                    <div class="am-form-group am-padding-top">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            佣金结算天数
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="number" min="0" class="tpl-form-input" name="setting[settlement][settle_days]" value="<?= $data['settlement']->settle_days ?>" required="" pattern="^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$">
                                            <div class="help-block">
                                                <small>当订单完成n天后，该订单的分销佣金才会结算到分销商余额，如果设置为0天 则订单完成时就结算</small>
                                            </div>
                                            <div class="help-block">
                                                <small>注：建议佣金结算天数大于允许发起售后申请天数，如果用户申请退款退货 则不结算佣金</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel" id="tab5">
                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">分销中心页面</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">

                                            <input type="text" class="tpl-form-input" name="setting[words][index][title][value]" value="<?= $data['words']->index->title->value ?? "分销中心" ?>" required="">
                                            <small>
                                                默认：分销中心</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            非分销商提示
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][not_dealer][value]" value="<?= $data['words']->index->words->not_dealer->value ?? "您还不是分销商,请先申请" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            申请成为分销商
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][apply_now][value]" value="<?= $data['words']->index->words->apply_now->value ?? "立即加入" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            推荐人
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][referee][value]" value="<?= $data['words']->index->words->referee->value ?? "推荐人" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            可提现佣金
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][money][value]" value="<?= $data['words']->index->words->money->value ?? "可提现" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            待提现佣金
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][freeze_money][value]" value="<?= $data['words']->index->words->freeze_money->value ?? "待体现" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            已提现金额
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][total_money][value]" value="<?= $data['words']->index->words->total_money->value ?? "已提现金额" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            去提现
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][index][words][withdraw][value]" value="<?= $data['words']->index->words->withdraw->value ?? "去提现" ?>" required="">
                                        </div>
                                    </div>

                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">申请成为分销商页面</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][apply][title][value]" value="<?= $data['words']->apply->title->value ?? "申请成为分销商" ?>" required="">
                                            <small>
                                                默认：申请成为分销商</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            请填写申请信息
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][apply][words][title][value]" value="<?= $data['words']->apply->words->title->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            分销商申请协议
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][apply][words][license][value]" value="<?= $data['words']->apply->words->license->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            申请成为经销商
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][apply][words][submit][value]" value="<?= $data['words']->apply->words->submit->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            审核中提示信息
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][apply][words][wait_audit][value]" value="<?= $data['words']->apply->words->wait_audit->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            去商城逛逛
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][apply][words][goto_mall][value]" value="<?= $data['words']->apply->words->goto_mall->value ?? "" ?>" required="">
                                        </div>
                                    </div>

                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">分销订单页面</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][order][title][value]" value="<?= $data['words']->order->title->value ?? "分销订单" ?>" required="">
                                            <small>
                                                默认：分销订单</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            全部
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][order][words][all][value]" value="<?= $data['words']->order->words->all->value ?? "全部" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            未结算
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][order][words][unsettled][value]" value="<?= $data['words']->order->words->unsettled->value ?? "未结算" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            已结算
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][order][words][settled][value]" value="<?= $data['words']->order->words->settled->value ?? "已结算" ?>" required="">
                                        </div>
                                    </div>

                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">我的团队页面</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][team][title][value]" value="<?= $data['words']->team->title->value ?? "我的团队" ?>" required="">
                                            <small>
                                                默认：我的团队</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            团队总人数
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][team][words][total_team][value]" value="<?= $data['words']->team->words->total_team->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            一级团队
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][team][words][first][value]" value="<?= $data['words']->team->words->first->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            二级团队
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][team][words][second][value]" value="<?= $data['words']->team->words->second->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            三级团队
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][team][words][third][value]" value="<?= $data['words']->team->words->third->value ?? "" ?>" required="">
                                        </div>
                                    </div>

                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">提现明细页面</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_list][title][value]" value="<?= $data['words']->withdraw_list->title->value ?? "体现明细" ?>" required="">
                                            <small>
                                                默认：提现明细</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            全部
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_list][words][all][value]" value="<?= $data['words']->withdraw_list->words->all->value ?? "全部" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            审核中
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_list][words][apply_10][value]" value="<?= $data['words']->withdraw_list->words->apply_10->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            审核通过
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_list][words][apply_20][value]" value="<?= $data['words']->withdraw_list->words->apply_20->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            已打款
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_list][words][apply_40][value]" value="<?= $data['words']->withdraw_list->words->apply_40->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            驳回
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_list][words][apply_30][value]" value="<?= $data['words']->withdraw_list->words->apply_30->value ?? "" ?>" required="">
                                        </div>
                                    </div>

                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">申请提现页面</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_apply][title][value]" value="<?= $data['words']->withdraw_apply->title->value ?? "申请提现" ?>" required="">
                                            <small>
                                                默认：申请提现</small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            可提现佣金
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_apply][words][capital][value]" value="<?= $data['words']->withdraw_apply->words->capital->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            提现金额
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_apply][words][money][value]" value="<?= $data['words']->withdraw_apply->words->money->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            请输入要提取的金额
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_apply][words][money_placeholder][value]" value="<?= $data['words']->withdraw_apply->words->money_placeholder->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            最低提现佣金
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_apply][words][min_money][value]" value="<?= $data['words']->withdraw_apply->words->min_money->value ?? "" ?>" required="">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            提交申请
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][withdraw_apply][words][submit][value]" value="<?= $data['words']->withdraw_apply->words->submit->value ?? "" ?>" required="">
                                        </div>
                                    </div>

                                    <div class="widget-head am-cf">
                                        <div class="widget-title am-fl">推广二维码</div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            页面标题
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[words][qrcode][title][value]" value="<?= $data['words']->qrcode->title->value ?? "推广二维码" ?>" required="">
                                            <small>
                                                默认：推广二维码</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="am-tab-panel am-margin-top-lg" id="tab6">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">分销商申请协议 </label>
                                        <div class="am-u-sm-9 am-u-end">
                                    <textarea class="" rows="6" placeholder="请输入分销商申请协议" name="setting[license][license]"><?= $data['license']->license ?? "" ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel am-margin-top-lg" id="tab7">
                                    <input type="hidden" name="setting[background][__]" value="">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">分销中心首页 </label>
                                        <div class="am-u-sm-9 am-u-end">
                                            <div class="am-form-file">
                                                <div class="am-form-file">
                                                    <button type="button" class="j-index upload-file am-btn am-btn-secondary am-radius">
                                                        <i class="am-icon-cloud-upload"></i> 选择图片
                                                    </button>
                                                    <div class="uploader-list am-cf">
                                                        <div class="file-item">
                                                            <a href="assets/store/img/dealer-bg.png" title="点击查看大图" target="_blank">
                                                                <img src="assets/store/img/dealer-bg.png">
                                                            </a>
                                                            <input type="hidden" name="setting[background][index]" value="<?= $data['background']->index ?? "" ?>">
                                                            <i class="iconfont icon-shanchu file-item-delete"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="help-block">
                                                    <small>尺寸：宽750像素 高度不限</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">申请成为分销商页 </label>
                                        <div class="am-u-sm-9 am-u-end">
                                            <div class="am-form-file">
                                                <div class="am-form-file">
                                                    <button type="button" class="j-apply upload-file am-btn am-btn-secondary am-radius">
                                                        <i class="am-icon-cloud-upload"></i> 选择图片
                                                    </button>
                                                    <div class="uploader-list am-cf">
                                                        <div class="file-item">
                                                            <a href="assets/store/img/dealer-bg.png" title="点击查看大图" target="_blank">
                                                                <img src="assets/store/img/dealer-bg.png">
                                                            </a>
                                                            <input type="hidden" name="setting[background][apply]" value="<?= $data['background']->apply ?? "" ?>">
                                                            <i class="iconfont icon-shanchu file-item-delete"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="help-block">
                                                    <small>尺寸：宽750像素 高度不限</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-u-lg-2 am-form-label form-require">申请提现页 </label>
                                        <div class="am-u-sm-9 am-u-end">
                                            <div class="am-form-file">
                                                <div class="am-form-file">
                                                    <button type="button" class="j-withdraw_apply upload-file am-btn am-btn-secondary am-radius">
                                                        <i class="am-icon-cloud-upload"></i> 选择图片
                                                    </button>
                                                    <div class="uploader-list am-cf">
                                                        <div class="file-item">
                                                            <a href="assets/store/img/dealer-bg.png" title="点击查看大图" target="_blank">
                                                                <img src="assets/store/img/dealer-bg.png">
                                                            </a>
                                                            <input type="hidden" name="setting[background][withdraw_apply]" value="<?= $data['background']->withdraw_apply ?? "" ?>">
                                                            <i class="iconfont icon-shanchu file-item-delete"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="help-block">
                                                    <small>尺寸：宽750像素 高度不限</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-tab-panel am-margin-top-lg" id="tab8">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            分销商入驻审核通知
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[template_msg][apply_tpl]" placeholder="请填写模板消息ID"
                                                   value="<?= $data['template_msg']->apply_tpl ?? "" ?>">
                                            <small>模板编号AT0674，关键词 (申请时间、审核状态、审核时间、备注信息)</small>
                                            <small class="am-margin-left-xs">
                                                <a href="<?= url('store/setting.help/tplmsg') ?>" target="_blank">如何获取模板消息ID？</a>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label form-require">
                                            提现状态通知
                                        </label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="setting[template_msg][withdraw_tpl]" placeholder="请填写模板消息ID"
                                                   value="<?= $data['template_msg']->withdraw_tpl ?? "" ?>">
                                            <small>模板编号AT0324，关键词 (提现时间、提现方式、提现金额、提现状态、备注)</small>
                                            <small class="am-margin-left-xs">
                                                <a href="<?= url('store/setting.help/tplmsg') ?>" target="_blank">如何获取模板消息ID？</a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3 am-margin-top-lg">
                                <button type="submit" class="j-submit am-btn am-btn-secondary">提交
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- 图片文件列表模板 -->
<script id="tpl-file-item" type="text/template">
    {{ each list }}
    <div class="file-item">
        <a href="{{ $value.file_path }}" title="点击查看大图" target="_blank">
            <img src="{{ $value.file_path }}">
        </a>
        <input type="hidden" name="{{ name }}" value="{{ $value.file_path }}">
        <i class="iconfont icon-shanchu file-item-delete" data-name="商品"></i>
    </div>
    {{ /each }}
</script>

<!-- 文件库弹窗 -->
<!-- 文件库模板 -->
<script id="tpl-file-library" type="text/template">
    <div class="row">
        <div class="file-group">
            <ul class="nav-new">
                <li class="ng-scope {{ is_default ? 'active' : '' }}" data-group-id="-1">
                    <a class="group-name am-text-truncate" href="javascript:void(0);" title="全部">全部</a>
                </li>
                <li class="ng-scope" data-group-id="0">
                    <a class="group-name am-text-truncate" href="javascript:void(0);" title="未分组">未分组</a>
                </li>
                {{ each group_list }}
                <li class="ng-scope"
                    data-group-id="{{ $value.group_id }}" title="{{ $value.group_name }}">
                    <a class="group-edit" href="javascript:void(0);" title="编辑分组">
                        <i class="iconfont icon-bianji"></i>
                    </a>
                    <a class="group-name am-text-truncate" href="javascript:void(0);">
                        {{ $value.group_name }}
                    </a>
                    <a class="group-delete" href="javascript:void(0);" title="删除分组">
                        <i class="iconfont icon-shanchu1"></i>
                    </a>
                </li>
                {{ /each }}
            </ul>
            <a class="group-add" href="javascript:void(0);">新增分组</a>
        </div>
        <div class="file-list">
            <div class="v-box-header am-cf">
                <div class="h-left am-fl am-cf">
                    <div class="am-fl">
                        <div class="group-select am-dropdown">
                            <button type="button" class="am-btn am-btn-sm am-btn-secondary am-dropdown-toggle">
                                移动至 <span class="am-icon-caret-down"></span>
                            </button>
                            <ul class="group-list am-dropdown-content">
                                <li class="am-dropdown-header">请选择分组</li>
                                {{ each group_list }}
                                <li>
                                    <a class="move-file-group" data-group-id="{{ $value.group_id }}"
                                       href="javascript:void(0);">{{ $value.group_name }}</a>
                                </li>
                                {{ /each }}
                            </ul>
                        </div>
                    </div>
                    <div class="am-fl tpl-table-black-operation">
                        <a href="javascript:void(0);" class="file-delete tpl-table-black-operation-del"
                           data-group-id="2">
                            <i class="am-icon-trash"></i> 删除
                        </a>
                    </div>
                </div>
                <div class="h-rigth am-fr">
                    <div class="j-upload upload-image">
                        <i class="iconfont icon-add1"></i>
                        上传图片
                    </div>
                </div>
            </div>
            <div id="file-list-body" class="v-box-body">
                {{ include 'tpl-file-list' file_list }}
            </div>
            <div class="v-box-footer am-cf"></div>
        </div>
    </div>

</script>

<!-- 文件列表模板 -->
<script id="tpl-file-list" type="text/template">
    <ul class="file-list-item">
        {{ include 'tpl-file-list-item' data }}
    </ul>
    {{ if last_page > 1 }}
    <div class="file-page-box am-fr">
        <ul class="pagination">
            {{ if current_page > 1 }}
            <li>
                <a class="switch-page" href="javascript:void(0);" title="上一页" data-page="{{ current_page - 1 }}">«</a>
            </li>
            {{ /if }}
            {{ if current_page < last_page }}
            <li>
                <a class="switch-page" href="javascript:void(0);" title="下一页" data-page="{{ current_page + 1 }}">»</a>
            </li>
            {{ /if }}
        </ul>
    </div>
    {{ /if }}
</script>

<!-- 文件列表模板 -->
<script id="tpl-file-list-item" type="text/template">
    {{ each $data }}
    <li class="ng-scope" title="{{ $value.file_name }}" data-file-id="{{ $value.file_id }}"
        data-file-path="{{ $value.file_path }}">
        <div class="img-cover"
             style="background-image: url('{{ $value.file_path }}')">
        </div>
        <p class="file-name am-text-center am-text-truncate">{{ $value.file_name }}</p>
        <div class="select-mask">
            <img src="assets/store/img/chose.png">
        </div>
    </li>
    {{ /each }}
</script>

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


<!-- 商品列表 -->
<script id="tpl-goods-list-item" type="text/template">
    {{ each $data }}
    <div class="file-item">
        <a href="{{ $value.image }}" title="{{ $value.goods_name }}" target="_blank">
            <img src="{{ $value.image }}">
        </a>
        <input type="hidden" name="setting[condition][become__buy_goods_ids][]" value="{{ $value.goods_id }}">
        <i class="iconfont icon-shanchu file-item-delete" data-name="商品"></i>
    </div>
    {{ /each }}
</script>

<script src="assets/store/js/ddsort.js"></script>
<script src="assets/store/js/select.data.js"></script>
<script>
    $(function () {

        // 选择图片：分销中心首页
        $('.j-index').selectImages({
            name: 'setting[background][index]'
            , multiple: false
        });

        // 选择图片：申请成为分销商页
        $('.j-apply').selectImages({
            name: 'setting[background][apply]'
            , multiple: false
        });

        // 选择图片：申请提现页
        $('.j-withdraw_apply').selectImages({
            name: 'setting[background][withdraw_apply]'
            , multiple: false
        });

        // 购买指定商品成为分销商：选择商品
        var $goodsList = $('.widget-goods-list');
        $('.j-selectGoods').selectData({
            title: '选择商品',
            uri: 'goods/lists&status=10',
            duplicate: false,
            dataIndex: 'goods_id',
            done: function (data) {
                if (this.getExistData().length + data.length > 5) {
                    layer.msg('选择商品的数量不能超过5个', {anim: 6});
                    return;
                }
                var $html = $(template('tpl-goods-list-item', data));
                // 删除文件
                $html.find('.file-item-delete').on('click', function () {
                    $(this).parent().remove();
                });
                $goodsList.append($html);
            },
            getExistData: function () {
                var data = [];
                $("input[name='setting[condition][become__buy_goods_ids][]']")
                    .each(function (index, item) {
                        data.push(item.value);
                    });
                return data;
            }
        });

        /**
         * 表单验证提交
         * @type {*}
         */
        $('#my-form').superForm();

        // 购买指定商品成为分销商  是否开启
        $("input:radio[name='setting[condition][become__buy_goods]']").change(function(e) {
            var $content = $('.widget-become-goods');
            e.currentTarget.value == '0' ? $content.hide() : $content.show();
        });

    });
</script>
