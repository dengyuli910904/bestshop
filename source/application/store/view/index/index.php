<!-- <div class="row-content am-cf">
    <div class="widget am-cf">
        <div class="widget-body">
            <div class="tpl-page-state am-margin-top-xl">
                <div class="tpl-page-state-title am-text-center"><?= $setting['store']['values']['name'] ?></div>
                <div class="tpl-error-title-info">Welcome To YoShop System</div>
                <div class="tpl-page-state-content tpl-error-content">
                    <p>商城管理后台</p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- 内容区域 start -->
    <div class="tpl-content-wrapper no-sidebar-second">
        <div class="page-home row-content am-cf">

    <!-- 商城统计 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">商城统计</div>
                </div>
                <div class="widget-body am-cf">
                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__blue am-cf">
                            <div class="card-header">商品总量</div>
                            <div class="card-body">
                                <div class="card-value">63</div>
                                <div class="card-description">当前商品总数量</div>
                                <span class="card-icon iconfont icon-goods"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__red am-cf">
                            <div class="card-header">用户总量</div>
                            <div class="card-body">
                                <div class="card-value">1,634</div>
                                <div class="card-description">当前用户总数量</div>
                                <span class="card-icon iconfont icon-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__violet am-cf">
                            <div class="card-header">订单总量</div>
                            <div class="card-body">
                                <div class="card-value">148</div>
                                <div class="card-description">已付款订单总数量</div>
                                <span class="card-icon iconfont icon-order"></span>
                            </div>
                        </div>
                    </div>

                    <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                        <div class="widget-card card__primary am-cf">
                            <div class="card-header">评价总量</div>
                            <div class="card-body">
                                <div class="card-value">0</div>
                                <div class="card-description">订单评价总数量</div>
                                <span class="card-icon iconfont icon-haoping2"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- 实时概况 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">实时概况</div>
                </div>
                <div class="widget-body am-cf">
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-y-center">
                            <div class="outline-left">
                                <img src="data:image/png;base64,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" alt="">
                            </div>
                            <div class="outline-right dis-flex flex-dir-column flex-x-between">
                                <div style="color: rgb(102, 102, 102); font-size: 1.3rem;">销售额(元)</div>
                                <div style="color: rgb(51, 51, 51); font-size: 2.4rem;">1351.00</div>
                                <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                    昨日：974.00</div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-dir-column flex-x-between">
                            <div style="color: rgb(102, 102, 102); font-size: 1.2rem;">支付订单数</div>
                            <div style="color: rgb(51, 51, 51); font-size: 2.4rem;">106</div>
                            <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                昨日：76</div>
                        </div>
                    </div>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-y-center">
                            <div class="outline-left">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI4AAACMCAMAAACd62ExAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAzUExURUdwTPn///D4/+/2//T6//D3//H3//D3//D3//H5/2aq/7DT/5HC/3az/8Ld/9zs/53I/+kzVBAAAAAKdFJOUwAOY/8hooXE4kIJnP2wAAADmUlEQVR42u2ca3fCIAyGLeFqW+j//7XTOWedbUkgYHaO784+6p6FJNxCTqdyDVpZY5zz3gN475wzVoXh1F9DsO7CsCnvjNJ9USAn3wdpUHmUu5xtTBQM0ORUM1carIcCmdACRlsolWMH0gZqxAtUCcMMpIBDhifMggcmKYZwMsCn6hHjM81NtorGArdcuQdpB/zyQchA1Q2YglZygwS3qeEx0FJevy/bVPMMDlqLEmDtaSj2MQCCeCz0ES6+etHgeBT0k8nPU9BT6v0h/qQgIahW4TVIcZy8+2joL/XebPwiLWeovrPPXlT5t+DsRRciqmIcqYqxLLpCFmY8F2lOJYvnrB/P50LNBd6cNc50LtZITz4548Tv/3NakHqCX8jmQRkn6wV3peUxUpffiZybUZ6DpIm/ppnHFDE4f82TD6vrt6MMM/66/BR/BjmPY6nTAw5nZZgl/fpcHgcG4tyJwfljGAqOIq6Pszgr913Sc0ROxJnLV+PE+eG+LwkCgbN25gCVOFujRMSxtL3MEc70iOvN9InB8aSxOsIZdwxDwnmsMzBjdYQzreK6HMeQ9p0HOIcJG43jSUvk5jj32BpABo4iuE4HHEM5smiP4ym7q/Y4P84DUnAUYSc8t8exeE++pt6xMY6hHL6lBI1xHM+RDhcO8BxbsOFo5HTeCSeg47wLjsLOWN1w9AfnIA+GD85BWv7gfHBKXVl/cP7PJCFsCpW2wBC2/EIuTuM8xx6LU4s2wdxj6Y7Mgx22fYaw7Tt32vYJ2xRLOzIQdqAi7LhJ2GGcsKNKaQe5QQSO4boE4MEJXFckLDiedoF08DdZcCztem3a/1oWHE27fLxd6y9bVR9nBhxHLWs6LnpIu6u2gqtZTCZMMxknLbfPUC+ucalnoeE87tQjyZHRE0WK47Lxs4WTDm5rM45MWKIiI+thmPOSSBmZoSruL864d6eONk6VeZ5wVsUGmFHaMU6NeVY4T7Uy6C/QRaVoOZx7XFMMsxVWleWvN5zXWhmkdspgi8sYrziFhnleWfAUea6nD5phXmYrDm9O1LjO+nFdgXC8GSaWfFY1KJ9Ol6kiFX3S/KPicmml98IeJkh7tiHtUYu0Jz/SHkRJey4m7TGdsKeG0h5iinumKu0Rr7QnztIegEt7Hi+ueQBLC4yVaRiaYYhqPCGuLYe4piXSWrqIa3gjrh2QuGZJ5FZS3nZpbiWo0Za8NmQbTdqAq0nbF7i46IS8tSAEAAAAAElFTkSuQmCC" alt="">
                            </div>
                            <div class="outline-right dis-flex flex-dir-column flex-x-between">
                                <div style="color: rgb(102, 102, 102); font-size: 1.3rem;">新增用户数</div>
                                <div style="color: rgb(51, 51, 51); font-size: 2.4rem;">327</div>
                                <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                    昨日：238</div>
                            </div>
                        </div>
                    </div>
                    <div class="am-u-sm-6 am-u-md-6 am-u-lg-3">
                        <div class="widget-outline dis-flex flex-dir-column flex-x-between">
                            <div style="color: rgb(102, 102, 102); font-size: 1.2rem;">下单用户数</div>
                            <div style="color: rgb(51, 51, 51); font-size: 2.4rem;">69</div>
                            <div style="color: rgb(153, 153, 153); font-size: 1.2rem;">
                                昨日：34</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 近七日交易走势 -->
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12 am-margin-bottom">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">近七日交易走势</div>
                </div>
                <div class="widget-body am-cf">
                    <div id="echarts-trade" class="widget-echarts" _echarts_instance_="ec_1569075577519" style="-webkit-tap-highlight-color: transparent; user-select: none; position: relative; background: rgba(252, 252, 252, 0);"><div style="position: relative; overflow: hidden; width: 2330px; height: 400px; cursor: default;"><canvas width="2330" height="400" data-zr-dom-id="zr_0" style="position: absolute; left: 0px; top: 0px; width: 2330px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div><div style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; transition: left 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s, top 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgba(50, 50, 50, 0.7); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font: 14px/21px &quot;Microsoft YaHei&quot;; padding: 5px; left: 874.333px; top: 227.625px;">2019-09-17<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#3fb1e3"></span>成交额 : 969<br><span style="display:inline-block;margin-right:5px;border-radius:10px;width:9px;height:9px;background-color:#6be6c1"></span>成交量 : 22</div></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="help-block am-text-center">
                <small>本页面数据为随机模拟，并非真实数据，仅作示意。</small>
            </div>
            <div class="help-block am-text-center">
                <small>萤火科技版权所有，官方QQ：<a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2929351407&amp;site=qq&amp;menu=yes" target="_blank">2929351407</a></small>
            </div>
        </div>

    </div>

</div>
<script src="assets/store/js/echarts.min.js.下载"></script>
<script src="assets/store/js/echarts-walden.js.下载"></script>
<script type="text/javascript">

    /**
     * 近七日交易走势
     * @type {HTMLElement}
     */
    var dom = document.getElementById('echarts-trade');
    echarts.init(dom, 'walden').setOption({
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data: ['成交量', '成交额']
        },
        toolbox: {
            show: true,
            showTitle: false,
            feature: {
                mark: {show: true},
                magicType: {show: true, type: ['line', 'bar']}
            }
        },
        calculable: true,
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: ["2019-09-15","2019-09-16","2019-09-17","2019-09-18","2019-09-19","2019-09-20","2019-09-21"]        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                name: '成交额',
                type: 'line',
                data: ["798","778.00","969","1057.00","929.00","974.00","1351.00"]            },
            {
                name: '成交量',
                type: 'line',
                data: [54,26,22,37,59,76,106]            }
        ]
    }, true);

</script>
    </div>
    <!-- 内容区域 end -->