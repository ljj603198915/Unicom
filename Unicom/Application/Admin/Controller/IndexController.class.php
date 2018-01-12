<?php
namespace Admin\Controller;
use Tools\AdminController;
class IndexController extends AdminController {
    public function index(){
        $admin_id=session('admin_id');
        $admin_name=session('admin_name');
        $infoA=array(
            array("action_name"=>"菜单一","id"=>1),
        );
        $infoB=array(
            array("action_name"=>"子菜单一","pid"=>1),
            array("action_name"=>"子菜单二","pid"=>1),
        );

        $this->assign("infoA",$infoA);
        $this->assign("infoB",$infoB);
        $admin_name=session('admin_name');
        $this->assign('admin_name',$admin_name);
        $this->display();

    }

}