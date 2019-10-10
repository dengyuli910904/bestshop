<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/8
 * Time: 16:48
 */

namespace app\store\controller;
use app\store\model\Manager as ManagerModel;

class Manager
{
    public function index(){
        $model = new ManagerModel;
        $list = $model->getList();
        return $this->fetch('index', compact('list'));
    }
}
