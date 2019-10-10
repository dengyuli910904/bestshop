<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 16:41
 */

namespace app\store\controller\apps\dealer;
use app\store\controller\Controller;
use app\store\model\Order as OrderModel;

class Order extends Controller
{
    public function index(){
        $model = new OrderModel;
        $filter = [];
        $list = $model->getList($filter);
        $title = '分销订单';
        return $this->fetch('index', compact('title','list'));
    }
}
