<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">充值套餐列表</div>
                </div>
                <div class="widget-body am-fr">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                        <div class="am-form-group">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a class="am-btn am-btn-default am-btn-success am-radius" href="<?= url('add') ?>">
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
                                <th>套餐ID</th>
                                <th>套餐名称</th>
                                <th>充值金额</th>
                                <th>赠送金额</th>
                                <th>排序</th>
                                <th>添加时间</th>
                                <th>更新时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="8" class="am-text-center">暂无记录</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="am-u-lg-12 am-cf">
                        <div class="am-fr"> </div>
                        <div class="am-fr pagination-total am-margin-right">
                            <div class="am-vertical-align-middle">总记录：0</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {

        // 删除元素
        var url = "index.php?s=/store/market.recharge.plan/delete";
        $('.item-delete').delete('plan_id', url);

    });
</script>
