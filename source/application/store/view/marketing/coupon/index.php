<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget-body am-fr">
                <div class="tips am-margin-bottom-sm am-u-sm-12">
                    <div class="pre">
                        <p> 注：优惠券只能抵扣商品金额，最多优惠到0.01元，不能抵扣运费</p>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                    <div class="am-form-group">
                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">
                                <a class="am-btn am-btn-default am-btn-success am-radius" href="<?= url('create') ?>">
                                    <span class="am-icon-plus"></span> 新增
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-scrollable-horizontal">
                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black am-text-nowrap">
                        <thead>
                        <tr>
                            <th>优惠券ID</th>
                            <th>优惠券名称</th>
                            <th>优惠券类型</th>
                            <th>最低消费金额</th>
                            <th>优惠方式</th>
                            <th>有效期</th>
                            <th>发放总数量</th>
                            <th>已领取数量</th>
                            <th>排序</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                            <tbody>
                            <?php if (!$list->isEmpty()): foreach ($list as $coupon): ?>
                                <tr>
                                    <td class="am-text-middle"><?= $coupon['id'] ?></td>
                                    <td class="am-text-middle"><?= $coupon['title'] ?></td>
                                    <td class="am-text-middle"><?= $coupon['id'] ?></td>
                                    <td class="am-text-middle"><?= $coupon['id'] ?></td>
                                    <td class="am-text-middle">
                                        <span>立减 <strong>30.00</strong> 元</span>
                                    </td>
                                    <td class="am-text-middle">
                                        <span>领取 <strong>7</strong> 天内有效</span>
                                    </td>
                                    <td class="am-text-middle">不限制</td>
                                    <td class="am-text-middle">0</td>
                                    <td class="am-text-middle">100</td>
                                    <td class="am-text-middle">2018-10-13 10:27:42</td>
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                            <a href="discount_edit.html">
                                                <i class="am-icon-pencil"></i> 编辑
                                            </a>
                                            <a href="javascript:void(0);" class="item-delete tpl-table-black-operation-del" data-id="2">
                                                <i class="am-icon-trash"></i> 删除
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                                <tr>
                                    <td colspan="11" class="am-text-center">暂无记录</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                    </table>
                </div>
                <div class="am-u-lg-12 am-cf">
                    <div class="am-fr"><?= $list->render() ?> </div>
                    <div class="am-fr pagination-total am-margin-right">
                        <div class="am-vertical-align-middle">总记录：<?= $list->total() ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

