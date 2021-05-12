<?php
//加载Smarty类,实例化
    include_once 'Smarty\Smarty.class.php';
    $smarty = new Smarty();
//模板配置
    $smarty->compile_dir = 'D:\New_MaI\php\PHP面向对象\templates_c'; 
    $smarty->caching = true;          
    $smarty->cache_dir = 'D:\New_MaI\php\PHP面向对象\cache';     
    $smarty->cache_lifetime = '3600' ; 

//提供数据
    //标量数据
    $a ='安东飞马'; 
    $smarty->assign('hello',$a);

    //数组数据
    $smarty->assign('arr',array('安东','飞马','战争雷霆'));

    //对象数据
    class dog{
        public $name = '旺财';
        public $age = 7;
    }
    $smarty->assign('obj',new dog());

//设置预定义变量
$_GET['user'] = 'bvvd';


//显示模板数据
    $smarty->display('D:\New_MaI\php\PHP面向对象\Smarty模板.HTML');


?>