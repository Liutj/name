<?php
/*

 入口文件：

 1. 项目初始化
    SESSION
    加载函数库
 2. 加载相应的功能模块

*/

// 设置显示所有级别的错误
error_reporting(E_ALL);

define('IN', 'admin.php');

/* 1. 项目初始化 */
session_start();
include('functions.php');

/* 2. 加载相应功能文件 */
// 接收请求，默认是 main 页面
// isset ：判断一个变量是否存在，有可能出现值为空的情况，所以这里应该使用 empty 更合适
$action = !empty($_GET['a']) ? $_GET['a'] : 'main';

/* 3. 登录权限验证 */
$noNeedLogin = ['login', 'dologin'];   // 不需要验证登录的地址
if( !in_array($action, $noNeedLogin) )
{
   check_login();
}

// 加载要请求的文件
include('./controller/admin/'.$action . '.php');