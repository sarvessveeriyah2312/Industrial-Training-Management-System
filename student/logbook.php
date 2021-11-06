<?php

session_start();
if(isset($_GET['submit'])) {
        require "../connection.php";
        $str_events="insert into logbook values('".$_GET['id']."','".$_GET['title']."','".$_GET['date']."', '".$_GET['progress']."')";
        mysqli_query($con, $str_events);
        header('location:logbook.php');}
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>MyLI - Internship Management Information System</title>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
    <link rel='stylesheet' href='../style_admin.css'>
    <link rel='stylesheet' href='../table.css'>
	    <script type='text/javascript' language='javascript'>
        function z(oTD) {
            var el, i = 0;
            while (el = oTD.childNodes[i++])
                if (el.type == 'radio') el.checked = true;
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

            font-size:14px;
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
	
	
	#logbook {
		border: 2px solid grey;
		margin: 30px;
		padding: 20px;
		text-align: left;
		vertical-align:'middle';
	}
	
	textarea {
  vertical-align: top;
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
            <a href='logbook.php'>
            <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
            color: #212121;
            margin-top: -1px;
            padding-top: 13px;
            background: rgba(0,0,0,0.06);'>
               Logbook
            </div>
        </a>
		
		 <a href='logbook_show.php'>
            <div class='menu menu-item' id='student_tc'>
              Show Logbook
            </div>
        </a>
        </div>		
</div>	
</div>
</div>
		<div id='right'>
				<form action='' method='GET' accept-charset='utf-8' id='logbook'>
				<br><br><br>
                    <label for='id'> Student ID:</label>
					<input type='text' name='id' style='height:40px; width:200px'>
					<label for='date'>Date:</label>
					<input type='date' name='date' style='height:40px; width:200px'>
					<br><br>
					<label for='title'>Title</label>
					<br>
					<input name='title' style='height:40px; width:600px'></input>
					<br><br>
					<label for='explain'>Progress</label>
					<br>
					<textarea name='progress' style='height:100px; width:600px'></textarea>
					<br>
				
                    
					<div style='padding-left:75%;'>
                        <input type='submit' name='submit' value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                    </div>
                    <br><br>
                  
				</form>
			</div>
	
</body>
</html>
";
?>