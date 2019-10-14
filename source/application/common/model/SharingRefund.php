<?php

namespace app\common\model;

use think\Cache;
use think\Request;

/**
 * 拼单售后管理
 * Class SharingRefund
 * @package app\common\model
 */
class SharingRefund extends BaseModel
{
    protected $name = 'sharing_refunds';

    public function getList()
    {
        $request = Request::instance();
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
