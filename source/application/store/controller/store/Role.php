<?php

namespace app\store\controller\store;

use app\store\controller\Controller;
use app\store\model\Role as RoleModel;

/**
 * 商户管理员控制器
 * Class StoreUser
 * @package app\store\controller
 */
class Role extends Controller
{
    public function index(){
        $model = new StoreUserModel();
        $list = $model->getList();
        return $this->fetch('index', compact('list'));
    }
}
