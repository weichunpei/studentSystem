<?php
       header("content-type:text/html;charset=utf-8");
       require_once 'functions/mysql.func.php';
       require_once 'functions/common.func.php';
       require_once 'config/config.php';
       $username = $_GET['username'];
       $link=connect2($config);
       mysql_select_db("stu_system", $link);
       $query='select * from user where username='.'"'.$username.'"';
//        echo $query;
       $res=fetchAll($link, $query);
//        echo '<hr />';
//        echo print_r($res);
//         echo '<hr />';
      if($res){
          echo 1;
      }else {
          echo 0;
      }
       $password=$_GET['password'];
       if($username!=null && $password!=null){
           $data=compact('username','password');
           $table='user';
           $ckeck=insert($link, $data, $table);
           if($ckeck){
               alertMes("注册成功", "index.php");
           }else{
               alertMes("注册失败", "index.php");
           }
       } 
    ?>
 