<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/14
 * Time: 15:04
 */

namespace app\store\controller\marketing;


use app\store\controller\Controller;

class Points extends Controller
{
    public function log(){
        return $this->fetch('log');
    }

    public function setting(){
        return $this->fetch('setting');
    }
}
