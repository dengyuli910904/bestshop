<?php

namespace app\common\model;

use think\Cache;

/**
 * 拼单订单
 * Class Category
 * @package app\common\model
 */
class SharingOrder extends BaseModel
{
    protected $name = 'sharing_orders';

    public function getList()
    {
        $request = Request::instance();
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
