<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 17:55
 */

namespace app\store\controller\apps\dealer;
use app\store\controller\Controller;

class Setting extends Controller
{
	public function index(){
		$data = [];
		return $this->fetch('index', compact('data'));
	}
    public function qrcode(){
//        $model = new ApplyModel();
//        $list = $model->getList(ApplyModel::STATUS_APPLY);
        $data = [];
        return $this->fetch('qrcode', compact('data'));
    }
}
