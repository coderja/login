<?php
  session_start();
  @$uname = $_SESSION['uname'];
  if($uname){
    echo json_encode(["data"=>"true","uname"=>$uname]);
  }else{
    echo json_encode(["data"=>"false"]);
  }

?>