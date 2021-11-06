<?php

	$conn = mysqli_connect("localhost", "root", "", "myli");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	} 
	
	if(isset($_POST['Confirm']))
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$task = $_POST['task'];
		$progress = $_POST['progress'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		
		$query = "INSERT INTO activityrecord (id, name, task, progress, start_date, end_date)
					VALUES ('$id', '$name', '$task', '$progress', '$start_date', '$end_date')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:../studentdetails/StudentList.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:../studentdetails/addStudent.php");
		}
	}
	
	else
	{
		header("location:../studentdetails/addStudent.php");
	}
?>