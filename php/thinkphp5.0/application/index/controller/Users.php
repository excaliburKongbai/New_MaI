<?php
namespace app\index\controller;
//命名空间

use think\Controller;
//引入系统控制器类

use think\Db;

//声明控制器
class Users extends Controller{
    public function Index(){
        return '数据库控制器';
    }
    //增
    public function insert(){
        //执行插入
            // $data = Db::execute("insert into `user` value(null,'Excalibur','1314520',CURRENT_TIMESTAMP)");
        //占位符插入
            // $data = Db::execute("insert into `user` value(null,?,?,CURRENT_TIMESTAMP)",['大古','123']);
        //下标占位
            $data = Db::execute("insert into `user` value(null,:name,:password,CURRENT_TIMESTAMP)",['name'=>'8848','password'=>'123']);
        //成功返回影响行数
            echo $data;
    }

    //删
    public function delete(){
        //执行删除
            // $data = Db::execute("delete from `user` where id = 6");
        //占位符删除
            // $data = Db::execute("delete from `user` where id <?",[6]);
        //下标占位
            // $data = Db::execute("delete from `user` where id >:id",['id'=>3]);
        //返回影响的行数
            // echo $data;
    }

    //改
    public function update(){
        //执行修改
            // $data = Db::execute("update `user` set my_pass='987654' where id = 1");
        //占位符删除
            // $data = Db::execute("update `user` set my_pass='987654' where id = ?",[1]);
        //下标占位
            $data = Db::execute("update `user` set my_pass='987654' where id = :id",['id'=>1]);
        //返回影响的行数
            echo $data;
    }

    //查
    public function select(){
        //系统类(主要使用)
            $data1 = Db::query('select * from `user`');
            // dump($data1);
        
        //传入数据(占位符)
            $data2 = Db::query('select * from `user` where id>=? and id<=?',[0,5]);
            dump($data2);

        //获取最后执行的sql语句
            echo Db::getLastsql();


    }



}


?>