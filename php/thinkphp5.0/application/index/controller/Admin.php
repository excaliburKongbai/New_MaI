<?php
namespace app\index\controller;

//引入模型
use \app\index\model\Admin as User;

//引入loader类
use think\Loader;

class admin
{   
    public function index(){
        return "模型控制器";
    }
    //实例化数据模型与数据表名一致的
    public function type(){
        $type = new \app\index\model\type;
        
        dump($type::get(1)->toArray());
    }

    //实例化数据模型与数据表名不致的
    public function user(){
        //实例化模型
            $user = new \app\index\model\Admin;
        
        //实例化方式
            //实例化调用
                //$res = dump($user::get(1)->toArray());
            
            //静态方法调用
                // $res =dump(user::get(1)->toArray());
            
            //loader方法调用
                // $users = Loader::model("type");
                // $res = $users::get(1);
                // dump($res->toArray());

            //助手函数
                // $uesr = model("user");
                // $res = $user::get(1);
                // dump($res->toArray());

            //打印数据
                // dump($res->toArray());

        //读取单条数据
            //get方法
                // $res = User::get(1);//找主键
                // $res = User::get(["age"=>"20"]);//找指定的数据

            //闭包方法
                // $res = User::get(function($query){
                //     $query->where("age",20);
                // });

            //fing方法
                // $res = User::where("age",25)->find();
            
            //打印单条数据
                // dump($res->toArray());

        //读取多条数据
            //查询全部数据all
                $res = User::all();
            
                //查询主键(id)
                $res = User::all("1,3");

                //数组查询
                $res = User::all(['2','3']);

                //数组指定条件
                $res = User::all(["age"=>25]);

                //闭包
                $res = User::all(function($query){
                    $query->where("password",123)
                        ->whereOr("name",'Ex_maid')
                        ->order('id',"desc");
                        //对数据进行排序
                });
            //查询所有数据select 和all方法基本类似
                $res = User::select();

                //截取数据
                $res = User::limit(2)->select();


                    
            //打印多条数据
                foreach ($res as $key => $value) {
                    dump($value->toArray());
                }
                
                
                



            
        
        
        
        //读取多条数据
    }
}


?>