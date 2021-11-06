<?php

	error_reporting(E_ALL & ~E_NOTICE);
	$conn = mysqli_connect("localhost", "root", "", "student_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_POST['Update']))
	{
		$id = $_GET['Getid'];
		$name = $_POST['name'];
		$task = $_POST['task'];
		$progress = $_POST['progress'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		
		$query = "UPDATE activityrecord
					SET id='".$id."',
					name='".$name."', 
					task='".$task."',
					progress='".$progress."',
					start_date='".$start_date."',
					end_date='".$end_date."'
					WHERE id='".$id."'";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "User data successfully updated";
			header("location:StudentList.php");
		}
		else
		{
			die("Error updating user data !  ".$conn->error);
		}
	}

	else
	{
		header("location:StudentList.php");
	}
	
?>