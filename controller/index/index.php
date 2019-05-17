<?php

// 1. 读取 data/arts 目录中所有文件的列表
$data = scandir('./data/arts');
// 2. 删除前两个特殊文件（. 和 ..）
unset($data[0]);
unset($data[1]);

// 3. 循环每个文章，取出每个文章的前 100 个字符
foreach($data as &$v)
{
    // 以只读取方式打开文件
    $fp = fopen('./data/arts/'.$v, 'r');
    $v = [
        'title' => $v,
        'content' => fread($fp, 100),
    ];
    fclose($fp);
}

// 加载首页
template('index');