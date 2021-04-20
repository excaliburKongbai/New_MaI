<?php
    //创建COOKIE伪*数组
        setcookie('goods_id[0]',1);
        setcookie('goods_id[1]',2);
        setcookie('goods_id[2]',3);
        setcookie('goods_id[3]',4);
        setcookie('goods_id[4]',5);

        //输出全部
        echo '<pre>';
        print_r($_COOKIE);
        //输出伪数组
        echo '输出：'.$_COOKIE['goods_id'][0];



?>