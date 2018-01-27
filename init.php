<?php
header('Content-type:Application/json');
$conn = mysqli_connect('127.0.0.1','root','','xuezi',3306);
mysqli_query($conn,"SET NAMES UTF8");