<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//引入系统类
use \think\Route;

//路由动态单个注册
    //设置动态路由
        // Route::rule('/','index/index/index');
        // Route::rule('getEnv','index/index/getEnv');

    //带参数的路由
        // Route::rule('sourse/:id','index/index/sourse');

    //带复数参数的路由
        // Route::rule('sourses/:id/[:age]','index/index/sourses');

    //动态路由(不建议)
    // Route::rule(':a/:b','index/index/dongtai');

    //完全匹配路由
        // Route::rule('test1$','index/index/test1');

    //额外携带参数路由
        // Route::rule('/test2','index/index/test2?id =114514& name =Excalibur');

    //设置路由的请求方式

        //设置只能get提交
            // Route::rule('type','index/index/type','GET');
            //或
            // Route::get('type','index/index/type');

        //模拟put和delete请求请求
            //模拟put请求
            // Route::rule('type','index/index/type','put');

//动态批量注册路由
    // Route::rule([
    //     "hello"=>'index/index/hello',
    //     "sourse/:id"=>"index/index/sourse",
    // ],'','get');

//配置文件批量注册
    // return [
    //     "hello"=>'index/index/hello',
    //     "sourse/:id"=>"index/index/sourse",
    // ];

//变量规则
    // Route::rule('test2/:id','index/index/test2','get',[],['id'=>'\d{1,3}']);

//路由参数
    // Route::rule('test2/:id','index/index/test2','get',['method'=>'get'],['id'=>'\d{1,3}']);
    //设置请求方式

//资源路由
    // Route::resource('blog','Index/Blog');

//快捷路由
    // Route::controller('blog','Index/Blog');


//测试路由
    Route::rule('jiazai','index/index/jiazai');
    Route::rule('shuchu','index/index/shuchu');


//User路由
    // Route::rule('初始化','index/User/index');






// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
