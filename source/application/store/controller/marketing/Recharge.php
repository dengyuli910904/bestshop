<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/14
 * Time: 18:00
 */

namespace app\store\controller\marketing;


use app\store\controller\Controller;

class Recharge extends Controller
{
    public function setting(){
        return $this->fetch('setting');
    }

    public function index(){
        return $this->fetch('index');
    }

    public function add(){
        return $this->fetch('add');
    }
}
