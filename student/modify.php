<?php
require_once '../functions/mysql.func.php';
require_once '../functions/common.func.php';
    require_once '../config/config.php';
    header("content-type:text/html;charset=utf-8");
    $link=connect2($config);
//     echo print_r($link);
    mysql_select_db("stu_system", $link);
    $table='student';
    $id=$_GET['id']?$_GET["id"]:"";
if($id){
    $username=$_GET['username'];
    $age=$_GET['age'];
    $sex=$_GET['sex'];
    $data = compact('username','age','sex');
    $res=update($link, $data, $table,"id = ".$id);
    if($res){
        alertMes("更新数据成功", "layout-index.php");
    }else {
        alertMes("更新数据失败", "layout-index.php");
    } 
}
$sid=$_GET['sid'];
$query="select * from student where id={$sid}";
$rows=fetchOne($link, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>detail</title>
	<link rel="stylesheet" href="static/css/bootstrap.min.css">  
	<style type="text/css">
		body{ font-family: 'Microsoft YaHei';}
		/*.panel-body{ padding: 0; }*/
        .input-group{
            margin: 30px 0px;
        }
    </style>
</head>
<body>
  <div class="jumbotron">
        <div class="container">
            <h1>Laravel 为web艺术家设计</h1>
            <h3>——我就是玩不转form表单</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="../images/lf.jpg" alt="..." img-thumbnail">
            </div>
            <div class="col-md-9">
                <form action="modify.php" method="get">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">姓名</span>
                        <input type="text" class="form-control" name="username" placeholder=<?php echo $rows['username']?> aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">年龄</span>
                        <input type="text" class="form-control" name="age" placeholder=<?php echo $rows['age']?> aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">性别</span>
                        <input type="text" class="form-control" name="sex" placeholder=<?php echo $rows['sex']?> aria-describedby="basic-addon3">
                    </div>
                    <input type="text" name="id" style="display: none" value=<?php echo $_GET['sid'] ?>>
                    <input type="submit" value='提交' class="btn btn-info"/>
                </form>
            </div>
        </div>
    </div>
    <div class="jumbotron" style=" margin-bottom:0;margin-top:105px;">
        <div class="container">
            <span>&copy; 2016 Saitmob</span>
        </div>
    </div>

<script src="static/js/jquery-3.1.0.min.js"></script>
	<script src="static/js/bootstrap.min.js"></script>
</body>
</html>
