<?php
    //创建接口

    interface human{ //接口不允许实例化
        //接口不能包含变量、常接口成员只有两种,接口常量和接口方法
            // public $name = 'Tom';    //错误
            const PI = '3.14';          //很少定义在接口

        //接口只能定义方法
            public function display();
    }
    //实现接口
    class Man implements Human{
        //实现接口
        public function display(){
            echo __CLASS__; 
        }
    }

    //接口继承(可以多态继承)extends Human,xxx{}这样子
    interface Dong extends Human{}
        //Dong继承了Human定义的方法

    //调用继承过的接口
    class Master implements Dong{
        public function display(){
            echo '红A'; 
        }
    }

    //实例化
    $s = new Man();
    $s->display();

    //实例化被继承过的接口
    $m = new Master();
    $m->display();




?>