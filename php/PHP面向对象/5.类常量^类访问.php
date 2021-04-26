<?php
    class Saler{
        const PI = 3.14;
        public static $name = 'TOM';
        public static function SraFun(){
            echo Saler::PI;
        }
    }
//类名输出
echo Saler::PI;
echo '<hr>';
echo Saler::SraFun();
echo '<hr>';

//实例化输出
    $s = new Saler();
    //类访问常量
    echo $s::PI;
    echo '<hr>';
    echo $s::$name;
?>