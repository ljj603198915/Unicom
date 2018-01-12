<?php
namespace Service;
use Think\Controller;
use Model;
class AdminUserService extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->AdminUserModel = new Model\AdminUserModel();
    }

    function CheckNamePwd($name,$pwd){
        $info = $this->AdminUserModel->CheckNamePwd($name);
        if($info){
            if($info['password']===md5($pwd))
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

