<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/12
 * Time: 18:39
 */
function R($code,$msg,$data=null){
    $arr = array(
        "data"=>$data,
        "code"=>$code,
        "msg"=>$msg,
    );

    return json_encode($arr);
}