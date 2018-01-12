<?php

namespace Admin\Controller;

use Tools\AdminController;
use Think\Verify;

class ManagerController extends AdminController
{

    function __construct()
    {
        $this->ManagerService = new \Service\ManagerService();
        parent::__construct();

    }

    public function login()
    {

        if (!empty($_POST)) {

            //验证码判断
            $ver = new Verify();
            if ($ver->check($_POST['captcha'])) {
                $info = $this->ManagerService->CheckNamePwd($_POST['admin_name'], $_POST['admin_pwd']);
                if ($info) {
                    session('admin_id', $info['id']);
                    session('admin_name', $info['admin_name']);
                    session('admin_rank', $info['admin_rank']);
                    $this->redirect('Index/index');
                } else {
                    echo '<script> alert("用户名密码不一致");</script>';
                }
            } else {
                echo '<script> alert("验证码错误")</script>';
            }
        }
        $this->display();
    }

    function verifyImg()
    {
        $conf = array(
            'fontSize' => 14,              // 验证码字体大小(px)
            'imageH' => 45,               // 验证码图片高度
            'imageW' => 100,               // 验证码图片宽度
            'length' => 4,               // 验证码位数
            'fontttf' => '4.ttf',              // 验证码字体，不设置随机获取
        );
        $veri = new Verify($conf);
        $veri->entry();

    }

//退出系统并清除缓存
    public function logout()
    {
        session(null);
        $this->redirect('login');
    }





}


