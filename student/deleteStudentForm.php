<?php
	$conn = mysqli_connect("localhost", "root", "", "myli");

	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	if(isset($_GET['DeleteStudent']))
	{
		$id = $_GET['DeleteStudent'];
		
		$query = "DELETE FROM activityrecord 
					WHERE id = '".$id."'";
			
		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully deleted from system";
			header("location:../studentdetails/StudentList.php");
		}
		
		else
		{
			die("Error deleting data !  ".$conn->error);
		}
	}
	else
	{
		header("location:../studentdetails/StudentList.php");
	}
?>