<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $infoA = array(array("action_name" => "菜单一", "id" => 1));
        $infoB = array(
             array("action_name" => "子菜单一", "pid" => 1),
             array("action_name" => "子菜单二", "pid" => 1)
        );
        $this->assign("infoA",$infoA);
        $this->assign("infoB",$infoB);
       $this->display();
    }

    public function login(){
        $this->display();
    }
}