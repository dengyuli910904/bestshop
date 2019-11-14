<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">积分明细</div>
                </div>
                <div class="widget-body am-fr">
                    <!-- 工具栏 -->
                    <div class="page_toolbar am-margin-bottom-xl am-cf">
                        <form id="form-search" class="toolbar-form" action="https://demo.yiovo.com/index.php?s=/store/market.points/log">
                            <input type="hidden" name="s" value="/store/market.points/log">
                            <div class="am fr">
                                <div class="am-form-group tpl-form-border-form am-fl">
                                    <input type="text" name="start_time" class="am-form-field" value="" placeholder="请选择起始日期" data-am-datepicker="">
                                </div>
                                <div class="am-form-group tpl-form-border-form am-fl">
                                    <input type="text" name="end_time" class="am-form-field" value="" placeholder="请选择截止日期" data-am-datepicker="">
                                </div>
                                <div class="am-form-group am-fl">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form">
                                        <input type="text" class="am-form-field" name="search" placeholder="请输入用户昵称" value="">
                                        <div class="am-input-group-btn">
                                            <button class="am-btn am-btn-default am-icon-search" type="submit"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="am-scrollable-horizontal am-u-sm-12">
                        <table width="100%" class="am-table am-table-compact am-table-striped
                         tpl-table-black am-text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>微信头像</th>
                                <th>微信昵称</th>
                                <th>变动数量</th>
                                <th>描述/说明</th>
                                <th>管理员备注</th>
                                <th>创建时间</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td colspan="10" class="am-text-center">暂无记录</td>
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

    });
</script>
