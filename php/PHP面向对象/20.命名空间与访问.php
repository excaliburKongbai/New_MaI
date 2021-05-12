<?php
    //定义空间之前不能有任何代码段
    namespace Human\space1;
    function display(){
        //输出所在的类
        echo __NAMESPACE__,'<br/>';
    }

    //非限定名称访问
    display();

    namespace Human\space2;
    function display(){
        //输出所在的类
        echo __NAMESPACE__,'<br/>';
    }
    function display2(){
        //输出所在的类
        echo '我是完全访问调用的<br>';
    }

    //父类空间
    namespace Human;


    
    //限定名称访问
    space2\display();
    //因为上级是父类说以会补全成 Human\space2\display
    
    //完全限定访问
    \Human\space2\display2();




?>