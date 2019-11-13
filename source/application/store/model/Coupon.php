<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/8
 * Time: 16:15
 */

namespace app\store\model;
use app\common\model\Coupon as CouponModel;
use think\Request;

class Coupon extends CouponModel
{
    public function getList()
    {
        return $this->order(['sort' => 'asc'])
            ->paginate(15, false, [
                'query' => Request::instance()->request()
            ]);
    }
}
