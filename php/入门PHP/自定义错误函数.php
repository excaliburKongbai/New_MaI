<?php 
    //自定义错误处理函数
    function my_error($errno,$errstr,$errfile,$errline){
        //判断:当前会碰到错误有哪些
        if(!(error_reporting() &$errno)){ //error_reporting没有参数代表获取当前系统错误处理对应的级别
            return false;
        }
        switch($errno){
            case E_ERROR:
            case E_USER_ERROR:
                echo 'fatal error in file'.$errfile.'on line'.$errline.'<br/>';
                echo 'error info :'.$errstr;
                break;
            case E_WARNING:
            case E_USER_WARNING:
                echo 'WARNING error in file'.$errfile.'on line'.$errline.'<br/>';
                echo 'error info :'.$errstr;
                break;
            case E_NOTICE:
            case E_USER_NOTICE:
                echo 'NOTICE error in file'.$errfile.'on line'.$errline.'<br/>';
                echo 'error info :'.$errstr;
                break;
        }
        return true;
    }
    //报错
    // echo $a;

    //修改错误报告
    set_error_handler('my_error');
    echo $a;

?>