<?php
// 1. 接收表单中的数据
$username = $_POST['username'];
$password = $_POST['password'];
// 2. 判断账号是否正确
// 2.1 // 读取账号
$account = file_get_contents('./data/account');   
// 2.2 根据行转成数组（一行一个账号）
$account = explode("\n", $account);    // [ 'xiaoming e10adc3949ba59abbe56e057f20f883e'  ,   'xiaomei 4297f44b13955235245b2497399d7a93']
// 2.3 循环数组中的每个账号判断有没有一样的
foreach($account as $v)
{
    // 2.4 把用户提交的账号和密码拼出和账号文件中格式一样的字符串
    $tmp = $username . ' ' . md5($password);
    // 2.4 判断账号是否正确
    if($tmp == $v)
    {
        // 3. 账号登录，在 SESSION 中保存 name 做为登录成功的标记
        $_SESSION['name'] = $username;
        // 4. 提示信息
        message('登录成功！', '');
    }
}

message('登录或者密码错误！', 'login');


