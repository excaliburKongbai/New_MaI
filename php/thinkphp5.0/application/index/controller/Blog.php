<?php
namespace app\index\controller;

use think\Url;
class Blog{
    public function Index(){
        dump(url::build('index/index/index'));
        dump(url('index/index/index',['id'=>10,'name'=>'ZhangSan']));
    }
    public function geta(){
        echo 'aaa';
     }
     
}




?>