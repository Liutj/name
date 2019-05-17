<?php

// 1. 接收数据

$title = $_POST['deltitle'];

// 2. 循环每个文章删除
foreach($title as $v)
{
    unlink('./data/arts/'.$v);
}

// 3. 提示跳转
message('删除成功！', 'artlist');