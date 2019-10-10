-- 拼单商品
CREATE TABLE `yoshop_sharing_goods` (
  `goods_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `goods_name` varchar(255) NOT NULL DEFAULT '' COMMENT '商品名称',
  `category_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品分类id',
  `spec_type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '商品规格(10单规格 20多规格)',
  `deduct_stock_type` tinyint(3) unsigned NOT NULL DEFAULT '20' COMMENT '库存计算方式(10下单减库存 20付款减库存)',
  `content` longtext NOT NULL COMMENT '商品详情',
  `sales_initial` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '初始销量',
  `sales_actual` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '实际销量',
  `goods_sort` int(11) unsigned NOT NULL DEFAULT '100' COMMENT '商品排序(数字越小越靠前)',
  `delivery_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '配送模板id',
  `goods_status` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '商品状态(10上架 20下架)',
  `is_delete` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	`member_num` int(11) unsigned NOT NULL DEFAULT '1' COMMENT '成单人数',
	`valid_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '有效时间，小时为单位',
  PRIMARY KEY (`goods_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

CREATE TABLE `yoshop_sharing_goods_image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `image_id` int(11) NOT NULL COMMENT '图片id(关联文件记录表)',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `yoshop_sharing_goods_spec` (
  `goods_spec_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品规格id',
  `goods_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `goods_no` varchar(100) NOT NULL DEFAULT '' COMMENT '商品编码',
  `goods_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `line_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '商品划线价',
  `stock_num` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '当前库存数量',
  `goods_sales` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品销量',
  `goods_weight` double unsigned NOT NULL DEFAULT '0' COMMENT '商品重量(Kg)',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `spec_sku_id` varchar(255) NOT NULL DEFAULT '' COMMENT '商品spu标识',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`goods_spec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;


CREATE TABLE `yoshop_sharing_goods_spec_rel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `goods_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '商品id',
  `spec_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '规格组id',
  `spec_value_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '规格值id',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- 拼单活动
CREATE TABLE `yoshop_sharing_actives` (
  `active_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '活动id',
  `goods_id` varchar(20) NOT NULL DEFAULT '' COMMENT '拼单商品id',
  `member_num` int(11) NOT NULL DEFAULT '1' COMMENT '成团人数',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id,发起人',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
	`end_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '活动结束时间',
	`status` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '状态（10 正在进行，20 已成团， 30 已取消， 40 已结束）',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`active_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 拼单活动订单
CREATE TABLE `yoshop_sharing_active_orders` (
  `active_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '活动id',
  `order_id` int(11) unsigned NOT NULL COMMENT '订单id',
  `member_num` int(11) NOT NULL DEFAULT '1' COMMENT '成团人数',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id,发起人',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	`commision` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '佣金金额',
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 拼团订单
CREATE TABLE `yoshop_sharing_orders` (
	`active_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '活动id',
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `order_no` varchar(20) NOT NULL DEFAULT '' COMMENT '订单号',
  `total_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '商品总金额',
  `pay_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '订单实付款金额',
  `pay_status` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '付款状态(10未付款 20已付款)',
  `pay_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '付款时间',
  `express_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '运费金额',
  `express_company` varchar(50) NOT NULL DEFAULT '' COMMENT '物流公司',
  `express_no` varchar(50) NOT NULL DEFAULT '' COMMENT '物流单号',
  `delivery_status` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '发货状态(10未发货 20已发货)',
  `delivery_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '发货时间',
  `receipt_status` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '收货状态(10未收货 20已收货)',
  `receipt_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '收货时间',
  `order_status` tinyint(3) unsigned NOT NULL DEFAULT '10' COMMENT '订单状态(10进行中 20取消 21待取消 30已完成)',
  `transaction_id` varchar(30) NOT NULL DEFAULT '' COMMENT '微信支付交易号',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	`commission` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '佣金金额',
	`close_commission` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '是否已结算， 10 未结算，20已结算',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_no` (`order_no`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 拼单售后管理
CREATE TABLE `yoshop_sharing_refunds` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` varchar(20) NOT NULL DEFAULT '' COMMENT '订单id',
	`goods_id` varchar(20) NOT NULL DEFAULT '' COMMENT '商品id',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
	`type` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '售后类型，人工',
	`status` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '处理状态 10 提交，20 已处理， 30 已取消， 40 已关闭',
	`comment` varchar(255)  comment '备注',
	`customer_notes` varchar(255) comment '用户备注',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`active_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 商品评价
CREATE TABLE `yoshop_sharing_comments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` varchar(20) NOT NULL DEFAULT '' COMMENT '订单id',
	`goods_id` varchar(20) NOT NULL DEFAULT '' COMMENT '商品id',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
	`scores` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分数，0——5',
	`status` int(11) unsigned NOT NULL DEFAULT '10' COMMENT '处理状态 10显示，20不显示',
	`comment` varchar(255)  comment '备注',
	`images` varchar(255) comment '图片路径，json存储',
	`sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序，0 排第一位',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 分销商佣金生成记录
CREATE TABLE `yoshop_distributors_commission` (
	 `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `order_no` varchar(20) NOT NULL DEFAULT '' COMMENT '订单号',
  `transaction_id` varchar(30) NOT NULL DEFAULT '' COMMENT '微信支付交易号',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	`commision` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '佣金金额',
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_no` (`order_no`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 分销设置
CREATE TABLE `yoshop_distributors_setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `key` varchar(20) NOT NULL DEFAULT '' COMMENT '关键字，基础设置，分销商条件，佣金设置，结算，自定义文件，申请协议，页面背景图，模板消息，分销海报',
  `value` varchar(255) NOT NULL DEFAULT '' COMMENT 'json 格式存储',
  `wxapp_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '小程序id',
  `create_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 砍价活动
-- 砍价记录
-- 砍价设置






