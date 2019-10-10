<?php

namespace app\common\model;

use think\Cache;

/**
 * 拼单售后管理
 * Class SharingRefund
 * @package app\common\model
 */
class SharingRefund extends BaseModel
{
    protected $name = 'sharing_refund';

    public function getList()
    {
        $request = Request::instance();
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
