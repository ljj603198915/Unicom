<?php

namespace Admin\Controller;

use Tools\AdminController;
use Service;

class NearShopController extends AdminController
{

    function __construct()
    {
        parent::__construct();
        $this->NearShopService = new Service\NearShopService();


    }

    public function add()
    {

        $data = I("");

        $info = $this->NearShopService->saveNearShop($data);

        if($info){
            echo JsonResult(1,"成功");
        }else{
            echo JsonResult(0,"失败");
        }

    }


}


