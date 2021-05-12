<?php
//加载Smarty类,实例化
    include_once 'Smarty\Smarty.class.php';
    $smarty = new Smarty();
//模板配置
    $smarty->compile_dir = 'D:\New_MaI\php\PHP面向对象\templates_c'; 
    $smarty->caching = true;          
    $smarty->cache_dir = 'D:\New_MaI\php\PHP面向对象\cache';     
    $smarty->cache_lifetime = '3600' ; 
//设置数据
    $smarty->assign('arr',array('小明','张大炮','群星','陈睿'));
    $smarty->assign('arr1',array('小明','张大炮','群星','陈睿'));
    $smarty->assign('arr2',array());
    $smarty->assign('arr3',array('tank','CCCP','T72B','CN','ZTZ99'));
    


//显示模板数据
    $smarty->display('D:\New_MaI\php\PHP面向对象\Snarty变量模板.html');





?>