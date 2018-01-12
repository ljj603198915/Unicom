<?php

namespace Model;

use Think\Model;

class NearShopModel extends Model
{


    function saveNearShop($data)
    {
        return $this->add($data);
    }
}