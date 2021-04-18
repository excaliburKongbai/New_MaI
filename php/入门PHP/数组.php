<?php
//二维数组
    $info = array(
        array('name'=>'Jin','age'=>'20'),
        array('name'=>'Min','age'=>'24'),
        array('name'=>'HeiLe','age'=>'37'),
    );

    echo '<pre>';
    print_r($info);
    echo'<hr/>';
    //数组遍历
    $arr=[1,2,3,4,5,'s','f','y','u'];
    foreach($arr as $key => $v){
        echo 'key=',$key,'value=',$v ,'<br/>';
    }
    echo'<hr/>';
    //多维数组遍历
    foreach($info as $val){
        foreach($val as $c){
            echo $c,'<br/>';
        }
    }
    echo'<hr/>';
    //获取数组长度

        // echo 'arr数组长度是：'.count($arr);
        // echo'<hr/>';
        // while(list($key,$value) =$a each($arr)){
        //     echo 'key=',$key,'value=',$value ,'<br/>';
        // } 
        //用下标函数指针遍历

        echo'<hr/>';
        $arr1=[1,2,3,4,5,'s','f','y','u'];
        //排序
        // $a =sort($arr1);
        //需要赋值
        // print_r($arr1);
        //排序改变key

        // asort($arr1);
        // print_r($arr1);
        //排序不改变key

        // shuffle($arr1);
        // print_r($arr1);
        //打乱数组,改变key

    //指针
        echo'<hr/>';
        echo current($arr1),'<br/>';
        echo key($arr1),'<br/>';
        echo next($arr),'<br/>';
        
     



        
        





?>