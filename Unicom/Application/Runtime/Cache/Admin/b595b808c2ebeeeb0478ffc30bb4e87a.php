<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNICOM后台管理系统</title>

<link rel="stylesheet" href="<?php echo AdminCssUrl;?>index.css" type="text/css" media="screen" />

<script type="text/javascript" src="<?php echo AdminJsUrl;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo AdminJsUrl;?>tendina.min.js"></script>
<script type="text/javascript" src="<?php echo AdminJsUrl;?>common.js"></script>

</head>
<body>
    <!--顶部-->
    <div class="layout_top_header">
            <div style="float: left"><span style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #8d8d8d">SIEMENS管理后台</h1></span></div>
            <div id="ad_setting" class="ad_setting">
                <a class="ad_setting_a" href="javascript:; ">
                    <i class="icon-user glyph-icon" style="font-size: 20px"></i>
                    <span><?php echo ($admin_name); ?></span>
                    <i class="icon-chevron-down glyph-icon"></i>
                </a>
                <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
                    <li class="ad_setting_ul_li"> <a href="/index.php/Admin/Manager/person" target="menuFrame"><i class="icon-user glyph-icon"></i> 个人中心 </a> </li>
                    <!--<li class="ad_setting_ul_li"> <a href="javascript:;"><i class="icon-cog glyph-icon"></i> 设置 </a> </li>-->
                    <li class="ad_setting_ul_li"> <a href="/index.php/Admin/Manager/logout"><i class="icon-signout glyph-icon"></i> <span class="font-bold">退出</span> </a> </li>
                </ul>
            </div>
    </div>
    <!--顶部结束-->
    <!--菜单-->
    <div class="layout_left_menu">

        <ul id="menu">
            <?php if(is_array($infoA)): foreach($infoA as $key=>$v): ?><li class="childUlLi">
               <a href="main.html"  target="menuFrame"><i class="glyph-icon icon-home"></i><?php echo ($v["action_name"]); ?></a>
                <ul>
                    <?php if(is_array($infoB)): foreach($infoB as $key=>$vv): if(($v["id"]) == $vv["pid"]): ?><li><a href="/index.php/Admin/<?php echo ($vv["action_c"]); ?>/<?php echo ($vv["action_a"]); ?>" target="menuFrame"><i class="glyph-icon icon-chevron-right"></i><?php echo ($vv["action_name"]); ?></a></li><?php endif; endforeach; endif; ?>
                </ul>
            </li><?php endforeach; endif; ?>

        </ul>

    </div>
    <!--菜单-->
    <div id="layout_right_content" class="layout_right_content">

        <!--<div class="route_bg">-->
            <!--<a href="#">主页</a><i class="glyph-icon icon-chevron-right"></i>-->
            <!--<a href="#">菜单管理</a>-->
        <!--</div>-->
        <div class="mian_content">
            <div id="page_content">
                <iframe id="menuFrame" name="menuFrame" src="main.html" style="overflow:visible;"
                        scrolling="yes" frameborder="no" width="100%" height="100%"></iframe>
            </div>
        </div>
    </div>
    <div class="layout_footer">
        <p>Copyright © 2017 - SIEMENS</p>
    </div>
</body>
</html>