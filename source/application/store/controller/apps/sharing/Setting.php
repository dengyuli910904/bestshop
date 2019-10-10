<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 19:35
 */

namespace app\store\controller\apps\sharing;
use app\store\controller\Controller;
use app\store\model\SharingSetting as SettingModel;

class Goods extends Controller
{
	public function index(){
        $model = new SettingModel;
        $list = $model->getList($filter);
        $title = '拼单管理';
        return $this->fetch('index', compact('title','list'));
    }
}