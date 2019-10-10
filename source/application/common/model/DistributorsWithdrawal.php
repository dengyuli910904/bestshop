<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 16:53
 */

namespace app\common\model;
use think\Request;

class DistributorsWithdrawal extends BaseModel
{
    protected $name = 'distributors_withdrawal';

    /**
     * 订单列表
     * @param $filter
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public function getList($filter)
    {
        return $this//->with(['goods.image', 'address', 'user'])
            ->where($filter)
            ->order(['create_time' => 'desc'])->paginate(10, false, [
                'query' => Request::instance()->request()
            ]);
    }
}
