<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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



table{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}
td, th{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
		<div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>

		<thread>
		<section class="section-1">
		<h1 style="font-size:30px"><b>Monthly Marks</h1></b>
		<hr><br></thread> 

		<center>	
		<?php
			$conn = new mysqli("localhost","root","","myli");
			$sql = "SELECT 
				MONTHNAME(start_date) as mname,
				sum(marks) as total
				FROM activityrecord
				GROUP BY MONTH(start_date)";
			$result = $conn->query($sql);
		?>
		
		<table class='table table-stripped'>
		<tr>
			<th><b>Month</b></th>
			<th><b>Total</b></th>
		</tr>
		<?php while ($row = $result->fetch_object()): ?>
		<tr>
			<td><?php echo $row->mname; ?></td>
			<td><?php echo $row->total; ?></td>
		</tr>
		
		<?php endwhile; ?>
		</center></table><br>
	<input type="button" value="Back" onclick="history.go(-1);">
	</div>

</div>
</div>
</body>
</html>