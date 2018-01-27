<?php
session_start();
require('init.php');
  @$uname = $_REQUEST['uname'];
  @$upwd = $_REQUEST['upwd'];
  $sql = "select * from xz_user where uname='$uname' and  upwd=$upwd";
  $result = mysqli_query($conn,$sql);
  $user = mysqli_fetch_row($result);
  if($user){
     echo json_encode(["code"=>"1","uname"=>$uname]);
     $_SESSION['uname']=$uname;
  }else{
    echo json_encode(["code"=>"0"]);
  }
?>