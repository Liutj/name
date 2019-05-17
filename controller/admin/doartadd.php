<?php
// 1. 接收表单中的数据

// var_dump( $_POST );

// 2. 生成文件
file_put_contents('./data/arts/'.trim($_POST['title']), trim($_POST['content']));

// 3. 提示，跳转到列表页
message('添加成功！', 'artlist');