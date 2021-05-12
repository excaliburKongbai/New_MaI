<?php
namespace Human;
const PI =3.14;
function display1(){
    //输出所在的类
    echo __NAMESPACE__,'<br/>';
}
function show(){
    //输出所在的类
    echo '这是show','<br/>';
}
class Man{
    public function __construct(){
        echo '这是Human的构造函数<br>';
    }
}

namespace Woman;
function display2(){
    //输出所在的类
    echo __NAMESPACE__,'<br/>';
}

namespace Woman\space1;
    class Man1{
        public function __construct(){
            echo '这是show的构造函数<br>';
        }
    }



//引入函数
    // use function Human\display1;
    // display1();

//引入常量
    // use const Human\PI;
    // echo PI,'<br/>';
//引入类
    // use Woman\space1\Man1;
    // new Man1();

//调用重复名函数,更改别名
    // use function Human\display1 as displays;
    // displays();

//复数引入
    // use  Human\{
        // Man,
        // function display1,show,
        // const PI,
    // }
//引入空间
    use Human; //== Woman\space1\Human
    echo Human\PI;
    new Human\Man();
    Human\show();
?>