<?php

	$conn = mysqli_connect("localhost", "root", "", "student_db");
	
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

  <title>User List</title>
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
	
	form	
	
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
            <form action='' method='GET' accept-charset='utf-8'>
	                    <div class='table_container'>
                    	    <div class='sub-table-container'>
			    <table class='tc'>
		            <section class="section-1">
		<h1 style="font-size:30px"><b>View List</h1></b><hr><br>
				

			
			<form method="POST">
					
						    <div class="form-group">
                                    <label>ID :<span class="font-weight-bold text text-success"> <?php echo $id ?></span></label>
                            </div>

							
							<div class="form-group">
                                    <label>Name :<span class="font-weight-bold text text-success"> <?php echo $name ?></span></label>
                                </div>

							
							<div class="form-group">
                                    <label>Task :<span class="font-weight-bold text text-success"> <?php echo $task ?></span></label>
                                </div>

							
							<div class="form-group">
                                    <label>Progress :<span class="font-weight-bold text text-success"> <?php echo $progress ?></span></label>
                            </div>

							
							<div class="form-group">
                                    <label>Start Dtae :<span class="font-weight-bold text text-success"><?php echo $start_date ?></span></label>
                                </div>

							
							<div class="form-group">
                                    <label>End date :<span class="font-weight-bold text text-success"> <?php echo $end_date?></span></label>
                                </div>

			
						<br>
						
						<input type="button" value="Back" onclick="history.go(-1);">			

				
				</form>
              
        </section>
		
	</div>
	<!------End view----->
	
  
</body>

</html>