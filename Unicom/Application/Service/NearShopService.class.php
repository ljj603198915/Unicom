<?php

namespace Service;

use Think\Controller;
use Model;


class NearShopService extends Controller
{

    function __construct()
    {
        parent::__construct();
        $this->NearShopModel = new Model\NearShopModel();
    }

    function saveNearShop($data)
    {
        if(empty($data))
            return null;
        return $this->NearShopModel->saveNearShop($data);
    }


}


