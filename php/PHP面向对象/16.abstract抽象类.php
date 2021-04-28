<?php
    //声明抽象类

abstract class Human{
        public $name = 'Tom';
        //抽象方法子类必须要重写 权限只要不是私密(不被继承)
        abstract protected function display();
    }

    //加上abstract 变成抽象,继承就没事
    abstract class Wuman extends Human{};

    //子类
    class Man extends Human{
        //重写如果没有继承了抽象类会报错
        public function display(){ 
            echo __CLASS__;
        }
    }
    //实例化对象
    $s = new Man();
    $s->display();  
    //获取抽象类的变量
    echo $s->name;
?>