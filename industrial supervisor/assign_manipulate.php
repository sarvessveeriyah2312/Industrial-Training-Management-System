<?php

session_start();
$student_id=$_GET['student_id'];
$job_id=$_GET['job_id'];
$status=$_GET['status'];

require "../connection.php";

$str="update status_db set status='".$status."' where student_id='".$student_id."' and job_id='".$job_id."';";
mysqli_query($con, $str);

require "../connection.php";
$str="select count(*) from status_db where student_id='$student_id' and status='Assign';";
mysqli_query($con, $str);
$result=mysqli_query($con, $str);
$row=mysqli_fetch_array($result);
if ($row[0] > 0) {
    require "../connection.php";
    $str="update student_details set status='Assign' where student_id='".$student_id."';";
    mysqli_query($con, $str);
}
else {
    require "../connection.php";
    $str="update student_details set status='Hold' where student_id='".$student_id."';";
    mysqli_query($con, $str);
}

require "../connection.php";
$str="select count(*) from status_db where student_id='$student_id';";
mysqli_query($con, $str);
$result=mysqli_query($con, $str);
$noOfJobAllotted=mysqli_fetch_array($result);

require "../connection.php";
$str="select count(*) from status_db where student_id='$student_id' and status='Rejected';";
mysqli_query($con, $str);
$result=mysqli_query($con, $str);
$noOfRejected=mysqli_fetch_array($result);
if($noOfJobAllotted[0] == $noOfRejected[0] && $noOfJobAllotted[0] != 0) {
    require "../connection.php";
    $str="update student_details set status='Rejected' where student_id='".$student_id."';";
    mysqli_query($con, $str);
}
header("location:assign_response_status.php?student_id=".$student_id."");
?>
