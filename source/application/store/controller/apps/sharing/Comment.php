<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 19:35
 */

namespace app\store\controller\apps\sharing;
use app\store\controller\Controller;
use app\store\model\SharingComment as CommentModel;

class Goods extends Controller
{
	public function index(){
        $model = new CommentModel;
        $list = $model->getList($filter);
        return $this->fetch('index', compact('list'));
    }
}