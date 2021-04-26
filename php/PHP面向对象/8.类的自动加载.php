<?php
    //方法自动连接类
    function load($CalssName){
        //可以做判断 $CalssName.'php';
        $c_file= 'D:/New_MaI/php/PHP面向对象/7.'.$CalssName.'类的加载.php';
       if(file_exists($c_file)){
            require_once $c_file;
       }else{
            return false;
       }
    }
    // spl_autoload_register( 'load' );

    //用类实现自动加载
    class Autoload{
        public static function loadC($CalssName){
            $c_file= 'D:/New_MaI/php/PHP面向对象/7.'.$CalssName.'类的加载.php';
            require_once $c_file;
        }
    }
    //用数组传入 变量名和参数
    spl_autoload_register(array('Autoload','loadC') );


    //自动调用
    $s=new Saler();

  

?>