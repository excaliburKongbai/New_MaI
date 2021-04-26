<?php
class Saler{
    //成员变量
    public $name = '十字军FU-8';
    //定义方法里的类常量
    const PI = 3.14;
    //成员方法
    public function display(){
        echo $this->name;
    }
}
//实例化
$s = new saler();
//调用实例化函数
$s->display(); 



?>