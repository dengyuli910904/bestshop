<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 2019/11/14
 * Time: 17:59
 */

namespace app\store\controller\marketing;


use app\store\controller\Controller;

class Push extends Controller
{
    public function send(){
        return $this->fetch('send');
    }

    public function user(){
        return $this->fetch('user');
    }
}
