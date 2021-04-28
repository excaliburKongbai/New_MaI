<?php
//三个功能类似的类
class Tank{
    public function display(){
        echo '虎王H';
    }
}
class Aircraft{
    public function display(){
        echo 'BF190';
    }
}
class Ships{
    public function display(){
        echo 'Z15';
    }
}
//普通工厂(可以普通,但是静态效率高)
// class HumanFactory{
    // public static function getInstance($ClassName){
        // return new $ClassName;
    // }
// }
//普通工厂调用函数
    // $s = HumanFactory::getInstance('Ships');
    // $s->display();

//匿名工厂
class HumanFactory{
    public static function getInstance($ClassName){
        switch($ClassName){ 
            case 'T':
                return new Tank();
            case 'A':
                return new Aircraft();
            case 'S':
                return new Ships();
            default:
                return NULL; 
        }
    }
}
//匿名工厂调用函数
$s = HumanFactory::getInstance('T');
$s->display();




?>