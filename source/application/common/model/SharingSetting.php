<?php

namespace app\common\model;

use think\Cache;

/**
 * 拼单设置
 * Class SharingSetting
 * @package app\common\model
 */
class SharingSetting extends BaseModel
{
    protected $name = 'sharing_refund';

    public function getList()
    {
        $request = Request::instance();
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
