<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/11
 * Time: 16:18
 */

namespace app\store\controller;
use app\store\model\Coupon as CouponModel;


class Marketing extends Controller
{
    public function index(){
        $model = new CouponModel;
        $list = $model->getList();
        return $this->fetch('index', compact('list'));
    }

    public function create(){
        return $this->fetch('create');
    }

    public function edit(){
        return $this->fetch('edit');
    }

    public function receive(){
        return $this->fetch('coupon/receive');
    }
}
