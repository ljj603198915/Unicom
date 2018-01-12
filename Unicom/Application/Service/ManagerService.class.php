<?php
namespace Service;
use Think\Controller;
use Model;
class ManagerService extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->ManagerModel = new Model\ManagerModel();
    }

    function CheckNamePwd($name,$pwd){
        $info = $this->ManagerModel->CheckNamePwd($name);
        if($info){
            if($info['admin_pwd']===md5($pwd))
                return $info;
        }
        return null;
    }
    function check_pwd($pwd){
        if(preg_match('/\s/',$pwd)){
            return false;
        }else{
            return true;
        }
    }
}

