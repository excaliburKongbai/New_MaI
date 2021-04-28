<?php

class Human{
        public static $name = 'Muman';

        public function display(){
            echo self::$name,':Human:<br>';
            echo static::$name,':Human:<br>';//指向被调用的类
        }
    }

    class Man extends Human{
        public static $name = 'Man'; //必须存在不然会向父系寻找(相当于白写)
    }
    //实例化   
    $s = new Man();
    $s->display();
    // var_dump($s);



?>