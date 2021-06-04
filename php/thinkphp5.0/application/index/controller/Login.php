<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller{
    public function index(){
        //跳转页面
        return view();
    }
    public function check(){
        
        //提交后
        if($_POST['username']=='admin' && $_POST['password'] =='123'){
            $this->success('跳转成功',url('index/login/dumpdata'));
        }else{
            $this->error('密码错误');
        }
    }
    public function dumpdata(){
       return '登录成功';
    }
}



?>