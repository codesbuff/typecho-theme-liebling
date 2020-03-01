<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    // 站点LOGO地址
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    // 站点TOP图片地址
    $topimg = new Typecho_Widget_Helper_Form_Element_Text('topimg', NULL, NULL, _t('站点TOP图片地址'), _t('在这里填入一个图片 URL 地址, 以在网站首页显示'));
    $form->addInput($topimg);
}

if($_SERVER['SCRIPT_NAME']=="/admin/write-post.php"){
    function themeFields($layout) {
        $thumb = new Typecho_Widget_Helper_Form_Element_Text('thumb', NULL, NULL, _t('缩略图'), _t('图片地址'));
        $layout->addItem($thumb);
    }
    }