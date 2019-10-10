<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/10/9
 * Time: 16:47
 */

namespace app\store\controller\apps\dealer;

use app\store\controller\Controller;
use app\store\model\DistributorsWithdrawal as WithdrawalModel;

class Withdrawal extends Controller
{
    public function index(){
        $model = new WithdrawalModel();
        $filter = [];
        $list = $model->getList($filter);
        return $this->fetch('index', compact('list'));
    }
}
