<?php
namespace app\index\controller;

use think\Controller;

use think\Db;

use think\Request;

class Userfy extends Controller{
    
    //分页
    public function index(){
        //获取数据库的数据
        $data=Db::table('user')->paginate(3);

        //分配数据
        $this->assign('data',$data);

        //渲染视图
        return $this->fetch('index');
    }

    //文件上传
    public function add(){
        //渲染视图
        return $this->fetch();
    }

    //多文件上传
    public function adds(){
        return $this->fetch();
    }

    //获取上传的数据
    public function upload(Request $request){
        //获取数据
        $file=$request->file('img');
        dump($file);
        // 将数据移动到指定文件
        if($info=$file->move('./upload/')){
            dump($info->getsaveName());
        }else{
            echo $info->getError();
        }
    }

    //获取多条上传的数据
    public function uploads(Request $request){
        $file=$request->file('img');
        
        foreach ($file as $val) {
           if($info=$val->move('./upload/')){
                return $info->getsaveName();
           }else{
                return $info->getError();
           }
        }
    }
     
}
?>