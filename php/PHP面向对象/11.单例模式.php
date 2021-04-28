<?php
    //创建空类
    class Singleton{
        //静态属性:存储实例化对象
        private static $object = null ;

        //私有化构造方法
        private function __construct(){
        }

        //私有化克隆方法
        private function __clone() {  
        }

        //公共入口
        public static function gteInstance(){
            //判断是否已经存在对象
            if(!(Self::$object instanceof Self)){
                //不存在创建对象
                Self::$object = new Self();//实例化当前类 Self 相当于指针
            }
            //存在返回对象
            return Self::$object;
        }
    }
    //测试
    $s = Singleton::gteInstance();
    $s1 =  Singleton::gteInstance();
    $s2 =  Singleton::gteInstance();
    echo '<pre>';
    var_dump($s,$s1,$s2);




?>