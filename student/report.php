
<!DOCTYPE html>
<html lang='en'>
  

<head>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>

  <title>UMP Internship Management System</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href='../style_admin.css' rel='stylesheet'>
    <link href='../table.css' rel='stylesheet'>

 <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

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
		<section class='section-1'>
		<h1 style='font-size:30px'><b>Report</h1></b>
		<hr><br><br>
		</thread>

		<tbody>	<center>
					<table>
					  <tr id="list">
						<td style="background-color:#00aea6; color: white"><b>Month</b></td>
						<td style="background-color:#00aea6; color: white"><b>Percentage of Attendance %</b></td>
					  </tr>
		
					<?php
						$conn = mysqli_connect("localhost", "root", "", "myli");
						if(!$conn) 
						{ 
							die(" Connection Error "); 
						}
						$query = "SELECT * FROM attendance
									LIMIT 50";
						$result = mysqli_query($conn, $query);
					?>					  

					  <?php
						while($row=mysqli_fetch_assoc($result))
						{
							$month = $row['month']; 
							$attendance_percentage = $row['attendance_percentage'];
					  ?>
						<tr id="list">
							<td><?php echo $month ?></td> 
							<td><?php echo $attendance_percentage ?></td>
						</tr>
					  <?php
						}
					  ?>
					  
					</table><br>
    <div id="donutchart" style="width: 600px; height: 500px;"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Percentage of attendance'],
          ['April',    86],
          ['May',     100],
          ['June',  16],

        ]);

        var options = {
          title: 'Report Based on Total Attendance',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
<br><hr>



  <div id="visualization" style="width: 600px; height: 400px;"></div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "myli");
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	}
    //query all records from the database
    $query = "select		MONTHNAME(start_date) as mname,
				sum(marks) as total
				FROM activityrecord
				GROUP BY MONTH(start_date)";
 
    //execute the query
    $result = mysqli_query($conn, $query);
 
    //get number of rows returned
    $num_results = $result->num_rows;
 
    if( $num_results > 0){
 
    ?>
        <!-- load api -->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
        
        <script type="text/javascript">
            //load package
            google.load('visualization', '1', {packages: ['corechart']});
        </script>
 
        <script type="text/javascript">
            function drawVisualization() {
                // Create and populate the data table.
                var data = google.visualization.arrayToDataTable([
                    ['Month', 'Marks'],
                    <?php
                    while( $row = $result->fetch_assoc() ){
                        extract($row);
                        echo "['{$mname}', {$total}],";
                    }
                    ?>
                ]);

                // Create and draw the visualization.
                new google.visualization.PieChart(document.getElementById('visualization')).
                draw(data, {title:"Report Based on Total Marks"});
            }
 
            google.setOnLoadCallback(drawVisualization);
        </script>
    <?php
 
    }else{
        echo "No attendance list found in the database.";
    }
    ?>
	<hr>


			<input type="button" value="Back" onclick="history.go(-1);">

			</center></tbody>
           </div>  


</body>
</html>    