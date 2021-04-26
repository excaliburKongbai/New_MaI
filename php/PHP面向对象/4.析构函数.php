<?php
    class Saler{
        protected $name;
        //析构方法 销毁时自动调用
        public function __destruct(){
            echo __FUNCTION__;
        }
    }
    $s = new Saler();
    unset($s);









?>