<div class="row-content am-cf">
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-cf">分销申请</div>
                </div>
                <div class="widget-body am-fr">
<!--                    工具栏-->
                    <div class="page_toolbar am-margin-bottom-xs am-cf">
                            <form class="toolbar-form" action="<?= url('/store/apps.dealer.apply/index') ?>">
                                <input type="hidden" name="s" value="/store/apps.dealer.apply/index">
                                <div class="am-u-sm-12 am-u-md-9 am-u-sm-push-3">
                                    <div class="am fr">
                                        <div class="am-form-group am-fl">
                                            <div class="am-input-group am-input-group-sm tpl-form-border-form">
                                                <input type="text" class="am-form-field" name="search" placeholder="请输入昵称/姓名/手机号" value="">
                                                <div class="am-input-group-btn">
                                                    <button class="am-btn am-btn-default am-icon-search" type="submit"></button>
                                                </div>
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
                                <th>用户ID</th>
                                <th>微信头像</th>
                                <th>微信昵称</th>
                                <th>姓名<br/>手机号</th>
                                <th>推荐人</th>
                                <th>审核状态</th>
                                <th>审核方式</th>
                                <th>申请时间</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (!$list->isEmpty()): foreach ($list as $item): ?>
                                <tr>
                                    <td class="am-text-middle"><?= $item['apps_user_id'] ?></td>
                                    <td class="am-text-middle">
                                        <a href="<?= $item['wx_image_url'] ?>"
                                           title="点击查看大图" target="_blank">
                                            <img src="<?= $item['wx_image_url']?>"
                                                 width="50" height="50" alt="微信头像">
                                        </a>
                                    </td>
                                    <td class="am-text-middle">
                                        <p class="item-title"><?= $item['wx_nickname'] ?></p>
                                    </td>
                                    <td class="am-text-middle"><?= $item['username'] ?><br/><?= $item['phone'] ?></td>
                                    <td class="am-text-middle"><?= $item['referrer_apps_user_id'] ?></td>
                                    <td class="am-text-middle"><?= $item['status'] ?></td>
<!--                                    <td class="am-text-middle">-->
<!--                                            <span class="--><?//= $item['goods_status']['value'] == 10 ? 'x-color-green'
//                                                : 'x-color-red' ?><!--">-->
<!--                                            --><?//= $item['goods_status']['text'] ?>
<!--                                            </span>-->
<!--                                    </td>-->
                                    <td class="am-text-middle"><?= $item['changeway'] ?></td>
                                    <td class="am-text-middle"><?= $item['create_time'] ?></td>
                                    <td class="am-text-middle">
                                        <div class="tpl-table-black-operation">
                                            <a href="<?= url('goods/edit',
                                                ['goods_id' => $item['goods_id']]) ?>">
                                                <i class="am-icon-pencil"></i> 编辑
                                            </a>
                                            <a href="javascript:;" class="item-delete tpl-table-black-operation-del"
                                               data-id="<?= $item['goods_id'] ?>">
                                                <i class="am-icon-trash"></i> 删除
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; else: ?>
                                <tr>
                                    <td colspan="9" class="am-text-center">暂无记录</td>
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
</div>
<script>
    $(function () {

        // 删除元素
        var url = "<?= url('goods/delete') ?>";
        $('.item-delete').delete('goods_id', url);

    });
</script>

