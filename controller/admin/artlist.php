<?php
// 读取 arts 目录中所有的文件名
$data = scandir('./data/arts');

// 从数组中删除前两个文件名
unset($data[0]);
unset($data[1]);

// 加载页面
view('posts');
