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

    /**
     * 添加优惠券
     * @param array $data
     * @return bool
     */
    public function add(array $data)
    {
        $data['wxapp_id'] = self::$wxapp_id;
        $this->allowField(true)->save($data);
        return true;
    }
}
