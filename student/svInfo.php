
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
	  padding: 10px;
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

        <div id='right'>
            <form action='' method='GET' accept-charset='utf-8'>

                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
		<thread>
		<section class="section-1">
		<h1 style="font-size:30px"><b>Supervisor Information</h1></b>
		<hr><br><input id="myInput" type="text" placeholder="Search for activity.."><br>
    		<br></thread> 
		<tbody><center>

					<table id='myTable'>
					  <tr id="list">

						<th style="background-color:#00aea6; color: white"><b>ID</b></th>
						<th style="background-color:#00aea6; color: white"><b>Name</b></th>
						<th style="background-color:#00aea6; color: white"><b>Age</b></th>
						<th style="background-color:#00aea6; color: white"><b>Email</b></th>
						<th style="background-color:#00aea6; color: white"><b>Telephone</b></th>
						<th style="background-color:#00aea6; color: white"><b>Department</b></th>
					  </tr>

					  <tr>
					<td colspan="6" style="background-color:red; color: white; text-align: center; padding: 5px"><b>Industrial Supervisor</b></td>
					</tr>
					
					<?php
					$conn = mysqli_connect("localhost", "root", "", "myli");
					if(!$conn) 
					{ 
					die(" Connection Error "); 
					}
					$query = "SELECT * FROM Isupervisor
									LIMIT 50";
					$result = mysqli_query($conn, $query);
					?>

					  <?php
						while($row=mysqli_fetch_assoc($result))
						{
							$Isupervisor_id = $row['Isupervisor_id']; 
							$Isupervisor_name = $row['Isupervisor_name'];
							$Isupervisor_age = $row['Isupervisor_age'];
							$Isupervisor_email = $row['Isupervisor_email'];
							$Isupervisor_telephone = $row['Isupervisor_telephone'];
							$Isupervisor_department = $row['Isupervisor_department'];
					  ?>
						<tr id="list">
							<td><?php echo $Isupervisor_id ?></td> 
							<td><?php echo $Isupervisor_name ?></td>
							<td><?php echo $Isupervisor_age ?></td>
							<td><?php echo $Isupervisor_email ?></td>
							<td><?php echo $Isupervisor_telephone ?></td>
							<td><?php echo $Isupervisor_department ?></td>
	
						</tr>
					  <?php
						}
					  ?>
					  

					<tr>
					<td colspan="6" style="background-color:red; color: white; text-align: center; padding: 5px"><b>Faculty Supervisor</b></td>
					</tr>
					
					<?php
					$conn = mysqli_connect("localhost", "root", "", "myli");
					if(!$conn) 
					{ 
					die(" Connection Error "); 
					}
					$query = "SELECT * FROM Fsupervisor
									LIMIT 50";
					$result = mysqli_query($conn, $query);
					?>

					  <?php
						while($row=mysqli_fetch_assoc($result))
						{
							$Fsupervisor_id = $row['Fsupervisor_id']; 
							$Fsupervisor_name = $row['Fsupervisor_name'];
							$Fsupervisor_age = $row['Fsupervisor_age'];
							$Fsupervisor_email = $row['Fsupervisor_email'];
							$Fsupervisor_telephone = $row['Fsupervisor_telephone'];
							$Fsupervisor_department = $row['Fsupervisor_department'];
					  ?>
						<tr id="list">
							<td><?php echo $Fsupervisor_id ?></td> 
							<td><?php echo $Fsupervisor_name ?></td>
							<td><?php echo $Fsupervisor_age ?></td>
							<td><?php echo $Fsupervisor_email ?></td>
							<td><?php echo $Fsupervisor_telephone ?></td>
							<td><?php echo $Fsupervisor_department ?></td>
	
						</tr>
					  <?php
						}
					  ?>
					  
					</table><br>					
						<input type="button" value="Back" onclick="history.go(-1);">	
					</center>
			</section>
</tbody>
	<!------table------>
	

</body>

</html>