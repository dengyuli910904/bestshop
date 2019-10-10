<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 15:15
 */

namespace app\store\controller\apps\dealer;
use app\store\model\DistributorsUsers as ApplyModel;
use app\store\controller\Controller;

class User extends Controller
{
    public function index(){
        $model = new ApplyModel();
        $list = $model->getList(ApplyModel::STATUS_PASS);
        return $this->fetch('index', compact('list'));
    }
}
