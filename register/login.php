<?php
header("content-type:text/html;charset=utf-8");
require_once 'functions/mysql.func.php';
require_once 'functions/common.func.php';
require_once 'config/config.php';
$link=connect2($config);
mysql_select_db("stu_system", $link);
// echo print_r($link).'<hr />';
$username = $_GET['username'];
$password = $_GET['password'];
// echo $username.'==========='.$password .'<hr />';
$query='select * from user where username='.'"'.$username.'"'.'and password='.'"'.$password.'"';
// echo $query .'<hr />';
// $res=mysqli_query($link, $query);
$res=fetchAll($link, $query);
// echo print_r($res).'<hr>';
if($res){;
       echo json_encode(res);
//  alertMes("登录成功", "");
}else {
       echo 0;
//  alertMes("账号或密码错误", "#");
}
