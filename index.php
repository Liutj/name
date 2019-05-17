<?php

// 包含一个文件时， PHP 找这个文件的流程：
//  1. 先到当前目录中找文件
//  2. 如果没找到还会到再 php.ini 中设置 include_path 目录中去找
//  3. 如果还找不到就报错

// 为了方便修改 php.ini 中的 include_path，PHP提供了两个函数：
// get_include_path();  // 获取当前
// set_include_path();  // 设置


/*

 入口文件：

 1. 项目初始化
    SESSION
    加载函数库
 2. 加载相应的功能模块

*/

// 设置显示所有级别的错误
error_reporting(E_ALL);

define('IN', 'index.php');

/* 1. 项目初始化 */
include('functions.php');

/* 2. 加载相应功能文件 */
// 接收请求，默认是 index 页面
// isset ：判断一个变量是否存在，有可能出现值为空的情况，所以这里应该使用 empty 更合适
$action = !empty($_GET['a']) ? $_GET['a'] : 'index';

// 加载要请求的文件
include('./controller/index/'.$action . '.php');

// 先接收用�