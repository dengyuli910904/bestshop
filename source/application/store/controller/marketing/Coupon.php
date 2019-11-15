<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/13
 * Time: 19:01
 */

namespace app\store\controller\marketing;

use app\store\controller\Controller;
use app\store\model\Coupon as CouponModel;
use think\Request;

class Coupon extends Controller
{
    public function index(){
        $model = new CouponModel;
        $list = $model->getList();
        return $this->fetch('index', compact('list'));
    }

    public function create(){
        return $this->fetch('create');
    }

    public function add(){
        $model = new CouponModel;
        if ($model->add($this->postData('coupon'))) {
            return $this->renderSuccess('添加成功', url('marketing.coupon/index'));
        }
        $error = $model->getError() ?: '添加失败';
        return $this->renderError($error);
    }

    public function edit(){
        return $this->fetch('edit');
    }

    public function receive(){
        return $this->fetch('receive');
    }
}
