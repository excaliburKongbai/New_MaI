<?php
    //父类
    class Human{
        //变量
        public $id = 1;
        protected  $age = 18;
        private $money = 100;
        protected static $name = NULL;
        //方法
        public function display(){
            echo __METHOD__,'<br/>';
        }
        ////构造方法
        // public function __construct($ClassName){
            // Human::$name = $ClassName;
        // }
        ////析构方法
        // public function __destruct(){
            // echo Human::$name;
        // }
    }

    //子类
    class Man extends Human{
        public function gti(){
            echo $this->age;
        }
    }   

    //实例化
    $s = new Man();
    //测试继承父系的方法
        // $s->display();
    //测试各个权限
        //公共权限直接调用
            //echo $s->id;
        //保护权限要从子类的内部访问
            //$s->gti();
        //可以通过接口访问父类的私有方法但是本末倒置
            //echo $s->money;
    //测试继承构造函数
        // $s = new Man('kv1');
?>