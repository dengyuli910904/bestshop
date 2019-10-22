<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/17
 * Time: 10:48
 */

namespace app\store\controller\apps\wow;

use app\store\model\SharingActive as ActiveModel;
use app\store\controller\Controller;
use think\Request;

class Shopping extends Controller
{
    public function index(){
        $model = new ActiveModel();
        $list = $model->getList();
        return $this->fetch('index', compact('list'));
    }

    public function add(){
        $request = Request::instance();
        if($request->isAjax()){

        }
        return $this->fetch('add');
    }

}
