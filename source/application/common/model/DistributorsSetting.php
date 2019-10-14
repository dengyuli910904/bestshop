<?php
/**
 * Created by PhpStorm.
 * User: lily
 * Date: 19/10/12
 * Time: 下午7:42
 */

namespace app\common\model;


class DistributorsSetting extends BaseModel
{
    protected $name = 'distributors_setting';

    public function find($key){
        return $this->where(['key' => $key, 'wxapp_id' => self::$wxapp_id])->find();
    }
    public function add($key, $value){
        return $this->save([
            'key' => $key,
            'value' => $value,
            'wxapp_id' => self::$wxapp_id,
            'create_time' => time()
        ]);
    }

    public function edit($key, $value)
    {
        $wxapp_id = self::$wxapp_id;
        return $this->where(['key' => $key, 'wxapp_id' => $wxapp_id])
            ->update([
                'key' => $key,
                'value' => $value,
                'wxapp_id' => $wxapp_id,
                'update_time' => time()
            ]);
    }

    public function getConfigs(){
        $configs = [];
        $list = $this->where(['wxapp_id' => self::$wxapp_id])->select();

        foreach($list as $config){
            $configs[$config->key] = json_decode($config->value);
        }
        return $configs;
    }
}