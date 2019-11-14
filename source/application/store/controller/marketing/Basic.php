<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/14
 * Time: 15:04
 */

namespace app\store\controller\marketing;


use app\store\controller\Controller;

class Basic extends Controller
{
    public function index(){
        return $this->fetch('full_free');
    }

}
