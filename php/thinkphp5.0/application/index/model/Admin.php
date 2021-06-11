<?php

namespace app\index\model;

use think\Model;

//引入伪删除类
use traits\model\SoftDelete;

class admin extends Model
{
    //连接数据库
    protected $connection=[
        // 数据库类型
           'type'        => 'mysql',
           // 数据库连接DSN配置
           'dsn'         => '',
           // 服务器地址
           'hostname'    => '127.0.0.1',
           // 数据库名
           'database'    => 'admin',
           // 数据库用户名
           'username'    => 'root',
           // 数据库密码
           'password'    => 'root',
           // 数据库连接端口
           'hostport'    => '',
           // 数据库连接参数
           'params'      => [],
           // 数据库编码默认采用utf8
           'charset'     => 'utf8',
           // 数据库表前缀
           'prefix'      => '',
    ];
    //设置数据表
    protected $table="user";

    //Sex的获取器(get数据库字段名Attr)
    public function getsexAttr($val){
        switch ($val) {
            case '0':
                return '未定义';
                break;

            case '1':
                return '男';
                break;

            case '2':
                return '女';
                break;
            
            default:
                # code...
                break;
        }
    }

    //获取用户状态码
    public function getUserStatusAttr($val){

        $stats = [0=>'未激活',1=>'正常',2=>'限制用户'];

        return $stats[$val];
    }

    //修改器
    public function setPasswordAttr($val){
        //加密
        return md5($val);
    }

    //自动修改(很少用)
        //设置自动更新
            // protected $auto = ['time','User_status'];
            
        //书写自动完成
            // protected function setTimeAttr(){
            //     return time();
            // }
            // protected function setUserStatusAttr(){
            //     return 1;
            // }
    
   
    //自动写入时间戳
        // protected $autoWriteTimestamp = true;
    
    //如果数据库字段与预设不一样可以设置
        // protected $createTime = 'create_times';
        // protected $updateTime = 'update_times';

    //软删除
        //引入类
            use SoftDelete;
        //重写字段名
            protected $deleteTime = 'delete_times';

}
