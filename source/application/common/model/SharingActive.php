<?php

namespace app\common\model;

use think\Cache;

/**
 * 拼单活动
 * Class Category
 * @package app\common\model
 */
class SharingActive extends BaseModel
{
    protected $name = 'sharing_actives';

    public function getList()
    {
        $request = Request::instance();
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
