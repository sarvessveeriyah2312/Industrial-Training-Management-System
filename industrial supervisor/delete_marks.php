<?php

session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:..index.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['user']['role']=='student'){
 header('location:../student/student.php');
}
if($_SESSION['user']['role']=='moderator'){
 header('location:../coordinator/coordinator.php');
}
if($_SESSION['user']['role']=='FSupervisor'){
    header('location:../faculty supervisor/faculty.php');
}
 if($_SESSION['user']['role']=='ISupervisor'){
header('location:../industrial supervisor/admin.php');
 }
require "../connection.php";
ob_start();
session_start();
$table_name=$_GET['table'];
$key=$_GET['key'];
$key_name=$_GET['key_name'];
$file=$_GET['file'];

require "../connection.php";
$str="delete from $table_name where $key_name='".$key."'";
mysqli_query($con, $str);
header("location:$file");
?>
