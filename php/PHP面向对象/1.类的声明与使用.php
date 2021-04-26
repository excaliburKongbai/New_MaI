<?php
    echo '<pre>';
    //声明类
    class MyClass{

        
    }
    class MyName{
        public $name;
        public $money = 0;
        function Del(){

        }
    }
    //打印
        // var_dump(new MyClass);
        // var_dump(new MyName);
    //实例化
        $n = new MyClass;
        $m1 = new MyName();
        $m2 = new MyName();
    //修改属性
        $m1->name='凯尔希';
        $m1->money=100;
        // var_dump($m);
        echo '<hr>';
    //增加属性
        $m1->age = 30;
        var_dump($m1);
        echo '<hr>';
    //删除属性
        unset($m2->money);
        var_dump($m2);//互不影响
?>