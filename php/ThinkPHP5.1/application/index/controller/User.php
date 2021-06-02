<?php
namespace app\index\controller;

use think\Controller;

class User extends Controller{

    protected $beforeActionList =[
        'second' =>  ['except'=>'index'],
        'index'  =>  ['only'=>'two'],
    ];
    public function Index(){
        return "我是Index下的User文件";
    }
    public function two(){
        return '233';
    } 
}
?>