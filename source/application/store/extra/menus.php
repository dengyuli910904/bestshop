<?php
/**
 * 后台菜单配置
 *    'home' => [
 *       'name' => '首页',                // 菜单名称
 *       'icon' => 'icon-home',          // 图标 (class)
 *       'index' => 'index/index',         // 链接
 *     ],
 */
return [
    'index' => [
        'name' => '首页',
        'icon' => 'icon-home',
        'index' => 'index/index',
    ],
    'store' => [
        'name' => '管理员管理',
        'icon' => 'icon-home',
        'index' => 'store.user/index',
        'submenu' => [
            [
                'name' => '管理员列表',
                'index' => 'store.user/index',
                'uris' => [
                    'store.user/index',
                    'store.user/add',
                    'store.user/edit'
                ],
            ],
            [
                'name' => '角色管理',
                'index' => 'store.role/index',
                'uris' => [
                    'store.role/index',
                    'store.role/add',
                    'store.role/edit'
                ]
            ]
        ],

    ],
    'goods' => [
        'name' => '商品管理',
        'icon' => 'icon-goods',
        'index' => 'goods/index',
        'submenu' => [
            [
                'name' => '商品列表',
                'index' => 'goods/index',
                'uris' => [
                    'goods/index',
                    'goods/add',
                    'goods/edit'
                ],
            ],
            [
                'name' => '商品分类',
                'index' => 'goods.category/index',
                'uris' => [
                    'goods.category/index',
                    'goods.category/add',
                    'goods.category/edit',
                ],
            ],
            [
                'name' => '商品评价',
                'index' => 'goods.comment/index',
                'uris' => [
                    'goods.comment/index',
                    'goods.comment/add',
                    'goods.comment/edit',
                ],
            ]
        ],
    ],
    'order' => [
        'name' => '订单管理',
        'icon' => 'icon-order',
        'index' => 'order/delivery_list',
        'submenu' => [
            [
                'name' => '全部订单',
                'index' => 'order/all_list',
            ],
            [
                'name' => '待发货',
                'index' => 'order/delivery_list',
            ],
            [
                'name' => '待收货',
                'index' => 'order/receipt_list',
            ],
            [
                'name' => '待付款',
                'index' => 'order/pay_list',
            ],
            [
                'name' => '已完成',
                'index' => 'order/complete_list',

            ],
            [
                'name' => '已取消',
                'index' => 'order/cancel_list',
            ],
            [
                'name' => '售后管理',
                'index' => 'order/aftersale',
            ],
        ]
    ],
    'user' => [
        'name' => '用户管理',
        'icon' => 'icon-user',
        'index' => 'user/index',
        'submenu' => [
            [
                'name' => '用户列表',
                'index' => 'goods/index',
                'uris' => [
                    'goods/index',
                    'goods/add',
                    'goods/edit'
                ],
            ],
            [
                'name' => '会员等级',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '等级管理',
                        'index' => 'wxapp.page/home'
                    ]
                ],
            ],
            [
                'name' => '余额记录',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '充值记录',
                        'index' => 'wxapp.page/home'
                    ],
                    [
                        'name' => '余额明细',
                        'index' => 'wxapp.page/home'
                    ]
                ],
            ]
        ],
    ],
    'shop' => [
        'name' => '门店管理',
        'icon' => 'icon-marketing',
        'index' => 'marketing/index',
        'submenu' => [
            [
                'name' => '门店管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '门店列表',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '店员管理',
                        'index' => 'setting/store',
                    ]
                ],
            ],
            [
                'name' => '订单核销记录',
                'index' => 'wxapp/setting',
            ],
        ],
    ],
    'shop' => [
        'name' => '内容管理',
        'icon' => 'icon-marketing',
        'index' => 'marketing/index',
        'submenu' => [
            [
                'name' => '文章管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '文章列表',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '文章分类',
                        'index' => 'setting/store',
                    ]
                ],
            ],
            [
                'name' => '文件库管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '文件分组',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '文件列表',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '回收站',
                        'index' => 'setting/store',
                    ]
                ],
            ],
        ],
    ],

    'marketing' => [
        'name' => '营销管理',
        'icon' => 'icon-marketing',
        'index' => 'marketing/index',
        'submenu' => [
            [
                'name' => '优惠券',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '优惠券列表',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '领取记录',
                        'index' => 'setting/store',
                    ]
                ],
            ],
            [
                'name' => '用户充值',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '充值套餐',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '充值设置',
                        'index' => 'setting/store',
                    ],
                ],
            ],
            [
                'name' => '积分管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '积分设置',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '积分明细',
                        'index' => 'setting/store',
                    ],
                ],
            ],
            [
                'name' => '消息推送',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '发送消息',
                        'index' => 'setting/store',
                    ],
                    [
                        'name' => '活跃用户',
                        'index' => 'setting/store',
                    ],
                ],
            ],
            [
                'name' => '满额包邮',
                'index' => 'wxapp/setting',
            ],
        ],
    ],
    'wxapp' => [
        'name' => '小程序',
        'icon' => 'icon-wxapp',
        'color' => '#36b313',
        'index' => 'wxapp/setting',
        'submenu' => [
            [
                'name' => '小程序设置',
                'index' => 'wxapp/setting',
            ],
            [
                'name' => '页面管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '首页设计',
                        'index' => 'wxapp.page/home'
                    ],
                    [
                        'name' => '分类模板',
                        'index' => 'wxapp.page/links'
                    ],
                    [
                        'name' => '页面链接',
                        'index' => 'wxapp.page/links'
                    ],
                ]
            ],
            [
                'name' => '帮助中心',
                'index' => 'wxapp.help/index',
                'urls' => [
                    'wxapp.help/index',
                    'wxapp.help/add',
                    'wxapp.help/edit',
                    'wxapp.help/delete'
                ]
            ],
            [
                'name' => '导航设置',
                'index' => 'wxapp/tabbar'
            ],

        ],
    ],
    'apps' => [
        'name' => '应用中心',
        'icon' => 'icon-application',
        'is_svg' => true,   // 多色图标
        'index' => 'apps.dealer.apply/index',
        'submenu' => [
            [
                'name' => '分销中心',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '分销申请',
                        'index' => 'apps.dealer.apply/index'
                    ],
                    [
                        'name' => '分销商用户',
                        'index' => 'apps.dealer.user/index'
                    ],
                    [
                        'name' => '分销订单',
                        'index' => 'apps.dealer.order/index'
                    ],
                    [
                        'name' => '提现申请',
                        'index' => 'apps.dealer.withdrawal/index'
                    ],
                    [
                        'name' => '分销设置',
                        'index' => 'apps.dealer.setting/index'
                    ],
                    [
                        'name' => '分销海报',
                        'index' => 'apps.dealer.setting/qrcode'
                    ]
                ]
            ],
            [
                'name' => '拼团管理',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '商品分类',
                        'index' => 'apps.sharing.category/index'
                    ],
                    [
                        'name' => '商品列表',
                        'index' => 'apps.sharing.goods/index'
                    ],
                    [
                        'name' => '拼单管理',
                        'index' => 'apps.sharing.active/index'
                    ],
                    [
                        'name' => '订单管理',
                        'index' => 'apps.sharing.order/index'
                    ],
                    [
                        'name' => '售后管理',
                        'index' => 'apps.sharing.refund/index'
                    ],
                    [
                        'name' => '商品评价',
                        'index' => 'apps.sharing.comment/index'
                    ],
                    [
                        'name' => '拼团设置',
                        'index' => 'apps.sharing.setting/index'
                    ]
                ]
            ],
            [
                'name' => '砍价活动',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '活动列表',
                        'index' => 'apps.bargain.active/index'
                    ],
                    [
                        'name' => '砍价记录',
                        'index' => 'apps.bargain.task/index'
                    ],
                    [
                        'name' => '砍价设置',
                        'index' => 'apps.bargain.setting/index'
                    ]
                ]
            ],
            [
                'name' => '好物圈',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '商品收藏',
                        'index' => 'apps.wow.shopping/index'
                    ],
                    [
                        'name' => '订单信息',
                        'index' => 'apps.wow.order/index'
                    ],
                    [
                        'name' => '基础设置',
                        'index' => 'apps.wow.setting/index'
                    ]
                ]
            ]
        ],
    ],
    'setting' => [
        'name' => '设置',
        'icon' => 'icon-setting',
        'index' => 'setting/store',
        'submenu' => [
            [
                'name' => '商城设置',
                'index' => 'setting/store',
            ],
            [
                'name' => '交易设置',
                'index' => 'setting/trade',
            ],
            [
                'name' => '配送设置',
                'index' => 'setting.delivery/index',
                'uris' => [
                    'setting.delivery/index',
                    'setting.delivery/add',
                    'setting.delivery/edit',
                ],
            ],
            [
                'name' => '短信通知',
                'index' => 'setting/sms'
            ],
            [
                'name' => '上传设置',
                'index' => 'setting/storage',
            ],
            [
                'name' => '其他',
                'active' => true,
                'submenu' => [
                    [
                        'name' => '清理缓存',
                        'index' => 'setting.cache/clear'
                    ],
                    [
                        'name' => '环境检测',
                        'index' => 'setting.science/index'
                    ],
                ]
            ]
        ],
    ],
];
