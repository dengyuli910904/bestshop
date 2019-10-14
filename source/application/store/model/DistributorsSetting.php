<?php
/**
 * Created by PhpStorm.
 * User: lily
 * Date: 19/10/12
 * Time: 下午7:51
 */

namespace app\store\model;
use app\common\model\DistributorsSetting as SettingModel;


class DistributorsSetting extends SettingModel
{
    public function saveSetting($data){
        foreach($data as $key=>$item){
            $setting = $this->find($key);
            if($setting){
                $this->edit($key,$item);
            }else{
                $this->add($key,$item);
            }
        }
    }

    public function getConfig($key){
        return $this->getConfigs()[$key];
    }
}