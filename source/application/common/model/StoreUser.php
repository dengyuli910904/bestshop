<?php

namespace app\common\model;
use think\Request;
/**
 * 商家用户模型
 * Class StoreUser
 * @package app\common\model
 */
class StoreUser extends BaseModel
{
    protected $name = 'store_user';

    /**
     * 关联微信小程序表
     * @return \think\model\relation\BelongsTo
     */
    public function wxapp() {
        return $this->belongsTo('Wxapp');
    }

    /**
     * 新增默认商家用户信息
     * @param $wxapp_id
     * @return false|int
     */
    public function insertDefault($wxapp_id)
    {
        return $this->save([
            'user_name' => 'yoshop_' . $wxapp_id,
            'password' => md5(uniqid()),
            'wxapp_id' => $wxapp_id,
        ]);
    }

    public function getList()
    {
        return $this//->with(['rule'])
            ->order(['create_time' => 'asc'])
            ->paginate(15, false, [
                'query' => Request::instance()->request()
            ]);
    }

}
