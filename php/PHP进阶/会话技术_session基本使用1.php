<?php
    //session基本使用

    //开启session
        session_start();

    //设置session数值
        // $_SESSION['name']='北宅';
        // $_SESSION['age']='18';
        // $_SESSION['id']='123';

    //调用session
        // echo $_SESSION['name'] ;

    //删除指定SESSSION数据
        // unset($_SESSION['name']);

    //删除全部SESSSION数据
        $_SESSION = array();
?>