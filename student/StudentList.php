
<?php

	$conn = mysqli_connect("localhost", "root", "", "myli");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
	
	$query = "SELECT * FROM activityrecord
				LIMIT 50";
				
	
	$result = mysqli_query($conn, $query);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UMP Internship Management System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='../style_admin.css' rel='stylesheet'>
    <link href='../table.css' rel='stylesheet'>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

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

 
	input[type=text] 
	{
	  width: 70%;
	  padding: 10px;
	  
	}
	input[type=button]
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
 
	#list th, #list td 
	{
	  border: 3px solid black;
	  border-collapse: collapse;
	  background: white;
	  padding: 5px;
	}

	#list th 
	{
	  background-color: #ffd503;
	  color: white;
	}
	
	button
	{
		border:2px solid black;
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
        <li><a href='logbook_show.php'>Logbook </a></li>
        <li><a href='job_opening_show.php'>Job Openings</a></li>
        <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
    </ul>
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
					<div class='menu menu-item' id='company_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                            Manage Activity
                        </div>
                    </a>
					<a href='logbook.php'>
                   <div class='menu menu-item' id='student_tc'>
               Logbook
            </div>
        </a>	
        <a href='confirmation.php'>
            <div class='menu menu-item' id='student_tc'>
              Upload Offer Letter
            </div>
        </a>
        <a href='job_opening_show.php'>
            <div class='menu menu-item' id='student_tc'>
              Job Openings
            </div>
        </a>									
                </div>
            </div>
        </div>

        <div id='right'>
            <form action='' method='GET' accept-charset='utf-8'>

                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
		<thread>
		<section class="section-1">
		<h1 style="font-size:30px"><b>Activity List</h1></b>
		<hr><br><input id="myInput" type="text" placeholder="Search for activity.."><br>
    		<br></thread> 
		<tbody><center>

					<table id='myTable'>
					  <tr id="list">
						<td style="background-color:#00aea6; color: white"><b>ID</b></td>
						<td style="background-color:#00aea6; color: white"><b>Name</b></td>
						<td style="background-color:#00aea6; color: white"><b>Task</b></td>
						<td style="background-color:#00aea6; color: white"><b>Progress</b></td>
						<td style="background-color:#00aea6; color: white"><b>Start Date</b></td>
						<td style="background-color:#00aea6; color: white"><b>End Date</b></td>
						<td colspan="3" style="background-color:red; color: white"><b>ACTIONS</b></td>
					  </tr>
					  
					  <?php
						while($row=mysqli_fetch_assoc($result))
						{
							$id = $row['id']; 
							$name = $row['name'];
							$task = $row['task'];
							$progress = $row['progress'];
							$start_date = $row['start_date'];
							$end_date = $row['end_date'];
					  ?>
						<tr id="list">
							<td><?php echo $id ?></td> 
							<td><?php echo $name ?></td>
							<td><?php echo $task ?></td>
							<td><?php echo $progress ?></td>
							<td><?php echo $start_date ?></td>
							<td><?php echo $end_date ?></td>
							<td style="background-color:#ffff4d;"><button><a href="viewStudent.php?GetStudent=<?php echo $id ?>">View</a></button></td>
							<td style="background-color:#79ff4d;"><button><a href="updateStudent.php?GetStudent=<?php echo $id ?>">Edit</a></button></td>
                            <td style="background-color:#ff704d;"><button><a onclick="deleteStudent()" href="deleteStudentForm.php?DeleteStudent=<?php echo $id ?>">Delete</a></button></td>
						</tr>
					  <?php
						}
					  ?>
					  
					  
					</table><br>
					
					  <br><input type="button" value="Add Activity" onclick="location.href='./addStudent.php'">
					  <input type="button" value="Supervisor Info" onclick="location.href='./svInfo.php'">
					  <input type="button" value="Marks" onclick="location.href='./markstest.php'">		
					  <input type="button" value="Report" onclick="location.href='./report.php'"><br>			
					</center>
			</section>
</tbody>
	<!------table------>
	

  
  <!-- DeleteConfirmation -->
  
  <script>
  
  function deleteStudent()
  {
	if (confirm("All details of the student will be deleted\nAre you sure you want to delete this student details?"))
	{
		alert("The student detail has been deleted");
	}
	else
	{
		alert("Cancelled");
	}
  }
  
  </script>

</body>

</html>