<?php
    //重载
class Human{
        public $name = 'Tom';
        //读取错误运行
        public function __get($name){
            echo '不存在：'.$name;
        }
        //写入的时候操作
        public function __set($name,$value){
            //可以做if判断限制写入操作
            echo '类名:'.$name.'值：'.$value;
        }
        //删除的时候操作
        public function __unset($name){
            //是否删除和判断删除是否存在都在这里
            echo '删除的类名:'.$name;
        }
    }


    //实例化
    $h = new Human;
    // echo $h->age;
    $h->age = '18';
    unset($h->age);

    






?>