<?php

// 1. 接收
$oldtitle = $_POST['oldtitle'];  // 原标题
$title = $_POST['title'];
$content = $_POST['content'];

// 2. 将新的内容写入原文件中
file_put_contents('./data/arts/'.$oldtitle, $content);

// 3. 修改原文件名为新的文件名
rename('./data/arts/'.$oldtitle, './data/arts/'.$title);

// 4. 提示跳转
message('修改成功！', 'artlist');

