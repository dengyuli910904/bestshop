<?php

namespace app\common\model;

use think\Cache;

/**
 * 拼单商品评价
 * Class Category
 * @package app\common\model
 */
class SharingComment extends BaseModel
{
    protected $name = 'sharing_comments';

    public function getList()
    {
        $request = Request::instance();
        return $this->order(['create_time' => 'desc'])
            ->paginate(15, false, ['query' => $request->request()]);
    }
}
