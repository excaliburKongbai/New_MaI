<?php
//空间命名
namespace PDO;

use PDO;

//第一种方法
    // $PDO = new \PDO('mysql:host=localhost;dbname=my_date','root','root');
    // var_dump($PDO);

//第二种方法 变量存储(安全)
    // $dsn = 'mysql:host=localhost;dbname=my_date';
    // $user = 'root';
    // $pass = 'root';
    // 
    // $PDO = new  \PDO($dsm,$user,$pass);


//封装成类
/**
 * @param1 string $dsm 主机地址
 * @param2 string $dbname 数据库
 * @param3 string $user 用户名
 * @param4 string $pass 密码
*/
class POD_mysql{
    public $dsn ;
    public $dbname;
    public $user;
    public $pass;
    //初始化
    public function __construct(array $info=array()){
        $this->dsn = $info['dsn']??'localhost';
        $this->dbname = $info['dbname']??'my_date';
        $this->user = $info['user']??'root';
        $this->pass = $info['pass']??'root';
        $DsmDbname = 'mysql:host='.$this->dsn.';dbname='.$this->dbname;
        $this->link($DsmDbname,$this->user,$this->pass);
        $this->Sql_charset();
    }
    //连接数据库
    public $link;
    private function link($DsmDbname,$user,$pass){
        $this->link = new \PDO($DsmDbname,$user,$pass);
        if(!$this->link){
            exit('数据库连接错误');
            exit;
        }
    }
    //设置字符集
    private function Sql_charset(){
        //设置SQL
        $sql = 'ser names utf8';
        //执行sql语句
        $this->link->query($sql);
    }
    //写入
    public function mysql_exec($sql){
        $res =  $this->link->exec($sql);
        if($res === false){
            echo 'SQL错误<br/>';
            echo '错误代码:'.$this->link->errorCode().'<br/>';
            echo '错误原因:'.$this->link->errorInfo()[2].'<br/>';
            exit;
        }
        //获取自增长id
        echo '操作成功新id：'.$this->link->lastInsertId().'<br/>';
        return $res;
    }
    // 读取操作
    public function mysql_query($sql){
        $res = $this->link->query($sql);
        if($res === false){
            echo 'SQL错误<br/>';
            echo '错误代码:'.$this->link->errorCode().'<br/>';
            echo '错误原因:'.$this->link->errorInfo()[2].'<br/>';
            exit;
        }
        $res = $res->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}
//实例化
$s = new POD_mysql();
//写入操作
    // $sql = "insert into my_message values (null,'德','wtm社保',CURRENT_TIMESTAMP)";
    // $x = $s -> mysql_exec($sql);
    // var_dump($x);


//读取操作
    $sql = 'select * from my_message';
    $a = $s->mysql_query($sql);
    echo '<pre/>';
    var_dump($a);




?>