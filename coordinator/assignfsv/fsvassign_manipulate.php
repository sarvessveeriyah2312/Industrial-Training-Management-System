<?php

$student_id=$_GET['student_id'];
$fac_id=$_GET['fac_id'];
$status_fsv=$_GET['status_fsv'];

require "../connection.php";
if($status_fsv=='delete') {
    $str="delete from statusf_db where student_id='".$student_id."' and fac_id='".$fac_id."'";
    mysqli_query($con, $str);
}
if($status_fsv=='add') {
    $status_fsv='Prospect';
    $c=uniqid();
    $code=substr($c, -5);
    $str="insert into statusf_db values('$code', '".$_GET['student_id']."', '".$_GET['fac_id']."', '".$status_fsv."');";
    mysqli_query($con, $str);
}
require "../connection.php";
$str="select count(*) from statusf_db where student_id='$student_id';";
mysqli_query($con, $str);
$result=mysqli_query($con, $str);
$row=mysqli_fetch_array($result);
if ($row[0] > 0) {
    require "../connection.php";
    $str="update student_details set status_fsv='Prospect' where student_id='".$student_id."';";
    mysqli_query($con, $str);
}
else {
    require "../connection.php";
    $str="update student_details set status_fsv='Undecided' where student_id='".$student_id."';";
    mysqli_query($con, $str);
}
header("location:fsvassign_status_edit.php?student_id=".$student_id."");
?>
