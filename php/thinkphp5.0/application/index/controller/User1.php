<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\Db;

class User1 extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     * 页面显示
     */
    public function index()
    {
        // 查询数据
        $data = Db::query("select * from `user`"); 

        //给页面分配数据(给模板传值)
        $this->assign("data",$data);

        //加载页面
        return view();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     * 添加用户
     */
    public function create()
    {
        //加载添加页面
        return view();
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     * 处理数据增加的数据
     */
    public function save(Request $request)
    {
        //接收数据
        $data = input("post.");
        //执行插入数据
        $code = Db::execute("insert into `user` value(null,:my_name,:my_pass,CURRENT_TIMESTAMP)",$data);
        //判断是否插入成功
        if($code){
            $this->success("添加成功","/user");
        }else{
            $this->error("插入失败");
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     * 
     */
    public function read($id)
    {
        //
        
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     * 修改
     */
    public function edit($id)
    {
        //数据库查询要被修改的数据
        $data = Db::query("select * from `user` where id = ?",[$id]);
        //分配数据给模板
        $this->assign("data",$data[0]);
        //渲染模板
        return view();
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     * 提交修改的数据
     */
    public function update(Request $request, $id)
    {   
        //接收数据(去除不要的参数)
            $data = $request->instance()->except('_method,/user/4');
        //执行更细操作
            $code = Db::execute("update user set my_name = :my_name,my_pass=:my_pass where id=:id",$data);
        //判断是否执行成功
            if($code){
                $this->success("修改成功","/user");
            }else{
                $this->error("修改失败");
            }
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //执行删除语句
        $codr = Db::execute("delete from `user` where id = {$id} ");
        if($codr){
            $this->success("删除成功","/user");
        }else{
            $this->error("删除失败");
        }
    }
    /**
     * Ajax删除
     */
    public function Ajax_del(){
        //接收数据
        $id = input("post.id/d");
        //执行数据库删除
        $code=Db::execute("delete from user where id = {$id}");
        if($code){
            $data=[
                'statu'=>200,
                'info'=>"删除成功",
            ];
        }else{
            $data=[
                'statu'=>400,
                'info'=>"删除失败",
            ];
        }
        return $data;
    }
}
