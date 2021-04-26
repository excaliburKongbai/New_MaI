<?php
    class Saler{
        protected $count;
        protected $money;
        
        //构造函数 初始化变量 自动执行
        public function __construct($a,$b){
            // echo __CLASS__;
            $this->count = $a;
            $this->money = $b;
        }
        //输出打印
        public function Query(){
            var_dump($this);
        }
    }
$s = new Saler('群星',100);
$s->Query();




?>