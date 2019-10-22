<?php
namespace app\store\controller\data;
/**
 * Created by PhpStorm.
 * User: lily
 * Date: 19/10/19
 * Time: 上午12:59
 */
use app\store\model\Category;
use app\store\model\Delivery;
use app\store\model\Goods as GoodsModel;
use app\store\controller\Controller;

/**
 * 商品管理控制器
 * Class Goods
 * @package app\store\controller
 */
class Goods extends Controller
{
    public function lists(){
        $model = new GoodsModel();
        $list = $model->getList();
//        // 隐藏api属性
//        !$list->isEmpty() && $list->hidden(['category', 'content']);
//        var_dump($list->toArray());
//        var_dump($this->renderSuccess(compact('list')));
        return $this->renderSuccess(compact('list'));
    }

}