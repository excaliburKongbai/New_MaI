<?php
namespace app\index\controller;

use think\Controller;

class User extends Controller{
    //初始化方法
    public function _initialize(){
        echo '我是一个初始化的方法<hr>';
    }
    public function Index(){
        return 'User主页';
    }
    //前置方法
    protected $beforeActionList =[
        'two'=>['except'=>'index'],
        //除了index都可以调用
        'one'=>['only'=>'index'],
        //只让index调用的同时,调用one
    ];
    public function one(){
        echo 'one<hr>';
    }
    public function two(){
        echo 'two<hr>';
    }
    public function three(){
        echo 'three<hr>';
    }
     
}



?>