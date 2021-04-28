<?php
    //父类

use Human as GlobalHuman;

class Human{
        public $name = 'Human';
        protected $money = 100;
        private $age = 50; 
        protected static $pass = 'root';
        public function show(){
            echo __CLASS__,'<br/>';
        }
        // public function display(array $ClassName){
        //     echo $ClassName;
        // }
    }

     //子类
     class Man extends Human{
        public $name = 'Man';
        protected $money = 15;
        private $age = 18;  //私有的无法被重写
        public function show(){
            //强制调用父系方法
            parent::show();
            echo __CLASS__,'<br/>';
        }
        // public function display(int $ClassName){
        //     echo $ClassName;
        // }
        
        //调用父系静态属性
        public function Stra(){
            echo  parent::$pass;
        }
    }
    echo '<pre>';
    //实例化
        $m = new MAN();
    //打印
        // var_dump($m);
    //运行重写方法
        $m->show();
    //测试重写的方法类型要一致
        // $m->display('123');
        //类型要一致不然会报错 array / int
    //测试输出父系静态变量
        $m->Stra();
    
    
    




?>