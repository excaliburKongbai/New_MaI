<?php
    class Saler{
        public static $money;

        public static function QsMoney(){
            echo Saler::$money;
            echo self::$money;
            //相当于对象的this;
        }
        //私有化构造函数
        private function __construct(){  
            echo self::$money = 100;
        }
        //用self 在类里面实例化对象
        public static function add(){
            $s = new self(); 
        }
    }
//如果改变类名用self引用的方法就不用改
    // Saler::QsMoney();

//在类里面实例化对象 触发私密权限的构造函数(tmd隔着套娃)
    Saler::add();
    //只有sratic修饰的静态方法才可以使用


?>