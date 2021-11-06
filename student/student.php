<?php

session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict admin or Moderator to Access user.php page
if($_SESSION['user']['role']=='admin'){
 header('location:admin.php');
}
if($_SESSION['user']['role']=='moderator'){
 header('location:moderator.php');
}
if($_SESSION['user']['role']=='FSupervisor'){
    header('location:faculty supervisor/admin.php');
}
 if($_SESSION['user']['role']=='ISupervisor'){
header('location:industrial supervisor/admin.php');
 }
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>MyLI - Internship Management Information System</title>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
    <link rel='stylesheet' href='../style_admin.css'>
    <link rel='stylesheet' href='../table.css'>

 <link rel='stylesheet' type='text/css' href='clock_style.css'>
  <script type='text/javascript'>
    window.onload = setInterval(clock,1000);
    function clock()
    {
	  var d = new Date();
	  
	  var date = d.getDate();
	  
	  var month = d.getMonth();
	  var montharr =['Jan','Feb','Mar','April','May','June','July','Aug','Sep','Oct','Nov','Dec'];
	  month=montharr[month];
	  
	  var year = d.getFullYear();
	  
	  var day = d.getDay();
	  var dayarr =['Sun','Mon','Tues','Wed','Thurs','Fri','Sat'];
	  day=dayarr[day];
	  
	  var hour =d.getHours();
    	  var min = d.getMinutes();
	  var sec = d.getSeconds();
	
	  document.getElementById('date').innerHTML=day+' '+date+' '+month+' '+year;
	  document.getElementById('time').innerHTML=hour+':'+min+':'+sec;
    }
  </script>

    <style>
        body {
            font-family: 'open sans', 'Helvetica Neue', Helvetica, arial, sans-serif;
            background: #EDEFF0;
           
        }
        .table_container table {
            width: 100%;
        }
        td a {
            display:block;
            text-decoration:none;
        }
	.tg  {
            box-shadow: 1px 1px 1px 1px #888888;
	    border-radius: 14px;
            font-family: 'open sans', 'Helvetica Neue', Helvetica, arial, sans-serif;
            border-collapse:collapse;
            border-width: 2px;
            background-color: #E0E4CC;
        }
        .tg td + th,
        .tg th + td { border-left: 1px solid #1FDA9A; }
        .tg tr + tr { border-top: 1px solid #1FDA9A; } 

        .tg td{
            font-size:14px;
            padding:10px 5px;
            padding-left: 10px;
            overflow:hidden;
            word-break:normal;
        }

        .tg th{

            font-size:30px; 
	    text-align: center;
            font-weight:normal;
            padding:10px 5px;
    	    
            overflow:hidden;
            word-break:normal;
        }

        .num {
            font-family: 'Open Sans Light',Arial, sans-serif;
            font-size: 60px;

            color: #83BF17;
        }
        .stats_head {
            font-size:20px;
        }
        .stats_sub {

        }
        .num_sub {
            float:right;
            padding-left: 10px;
            padding-right: 16px;
            color: #5A6A62;
            font-family: 'Open Sans Bold',Arial, sans-serif;
            font-size: 20px;

        }

        #head_msg {

        text-align: center;
        font-size:20px;
        font-family:'open sans light', 'Helvetica Neue', Helvetica, arial, sans-serif;
    }

    </style>
</head>

<body>
  <nav id='nav'>
    <ul>
        <div id='logo'>
            <b>Student</b>
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
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                    Main Menu
                </div>
            </a>
                <a href='StudentList.php'>
                <div class='menu menu-item' id='student_tc'>
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
<div class='table_container'>
	<div class='sub-table-container' >
        <div id=head_msg style='font-size:60px;'>Logbook</div><br>
	<table class='tg'  class='tc' style='undefined;table-layout: fixed; width: 100%; height:50px'>
	<hr><center>
	<tr></br>
	<th><p id='date'></p>
	   <p id='time'></p></th>
	</tr></center>
	</table>
	
</div>
</div>
</body>
</html>
";
?>