<?php
    //使用COOLIE
    //设置COOKIE(关闭结束)
        // setcookie('age',1);
        // setcookie('name','Tank');

    //设置生命周期
        setcookie('a','阿帕奇',time()+7*24*60*60);
    //当前时间戳+7天的倒计时结束当前COOKIE(单位秒)
    
    //注销
        // setcookie('a','阿帕奇',time()-1);

    //设置全局COOKIE
        setcookie('name1','2233',time()+60*60,"/");






?>