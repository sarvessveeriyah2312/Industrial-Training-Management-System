<?php

	$conn = mysqli_connect("localhost", "root", "", "myli");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	$id = $_GET['GetStudent'];
	$query = "SELECT * FROM activityrecord
				WHERE id='".$id."'";

	$result = mysqli_query($conn, $query);
	
	while($row=mysqli_fetch_assoc($result))
	{
		$id = $row['id'];
		$name = $row['name'];
		$task = $row['task'];
		$progress = $row['progress'];
		$start_date = $row['start_date'];
		$end_date = $row['end_date'];
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Activity List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='../style_admin.css' rel='stylesheet'>
    <link href='../table.css' rel='stylesheet'>

  <style>
        body {
            font-family: 'open sans', 'Helvetica Neu', Helvetica, arial, sans-serif;
            background: #EDEFF0;
        }
        /*        input {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }*/



	input[type=text], input[type=number], input[type=date]
	{
	  width: 99%;
	  padding: 10px;
	}
	
	input[type=submit],input[type=button]
	{
	  background-color: #00aea6;
      border: 3px solid black;
      color: white;
      padding: 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
	  border-radius: 2px;
	}
	
	table, tr, th, td
	{
		border: 3px solid black;
		border-collapse: collapse;
		padding: 5px;
		text-align: left;
		background: white;
	}
	
	th
	{
		background: #00aea6;
		color: black;
		width: 20%;
	}
	
	td
	{
		width: 80%;
	}
  </style>
</head>

<body>
  <nav id='nav'>
        <ul style='list-style: none; display: inline'>
            <div id='logo' style='font-weight: bold'>
                Student
            </div>
            <li><a href='student.php'>Menu</a></li>
            <li><a href='show_student.php'>Student </a></li>
            <li><a href=''>Company</a></li>
            <li><a href=''>Faculties</a></li>
            <li><a href=''>Job Openings</a></li>
            <li><a href=''>Projects</a></li>
            <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
        </ul>
    </nav>

    <div id='main'>
        <div id='left'>
            <div id='sidebar'>
                <div class='menu'>
                    <a href='student.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Main Menu
                        </div>
                    </a>
                    <a href='StudentList.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Manage Activity
                        </div>
                    </a>
                </div>
            </div>
        </div>

<!-- Update -->
        <div id='right'>
                <div class='table_container'>
                <div class='sub-table-container'>
                <table class='tc'>
		<h1 style="font-size:30px"><b>Update List</h1></b>
		<hr><br>
       				
			 <section class="section-1">
				<form action="updateStudentForm.php?Getuserid=<?php echo $id ?>" method="POST">
				<input type="hidden" name="action" value="update">
					<center>
						<table>
							<tr>
								<th>ID</th>
								<td><input type="text" id="id" name="id" value="<?php echo $id ?>" disabled></td>
							</tr>
							
							<tr>
								<th>Name</th>
								<td><input type="text" id="name" name="name" value="<?php echo $name ?>"></td>
							</tr>
							
							<tr>
								<th>Task</th>
								<td><input type="text" id="task" name="task" value="<?php echo $task ?>"></td>
							</tr>
							
							<tr>
								<th>Progress</th>
								<td><input type="text" id="progress" name="progress" value="<?php echo $progress ?>"></td>
							</tr>
							
							<tr>
								<th>Start Date</th>
								<td><input type="date" id="start_date" name="start_date" value="<?php echo $start_date ?>"></td>
							</tr>
							
							<tr>
								<th>End Date</th>
								<td><input type="date" id="end_date" name="end_date" value="<?php echo $end_date ?>"></td>
							</tr>
			
						</table><br>
						<input type="button" value="Back" onclick="history.go(-1);">						
						<input type="submit" name="Update" value="Update" onclick="updateStudent()">
					</center>
				</form>
              
        </section>
		
	</div>
	<!------End Update----->
	
  <!-- Update User Confirmation -->
  
  <script>
  function updateStudent()
  {
	if (confirm("Please confirm all the details of the student is correct"))
	{
		alert("The student was successfully updated");
	}
	else
	{
		alert("Cancelled");
	}
  }
  </script>

</body>

</html>