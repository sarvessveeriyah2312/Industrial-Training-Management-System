<?php

session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['user']['role']=='student'){
 header('location:student/student.php');
}
if($_SESSION['user']['role']=='moderator'){
 header('location:coordinator/coordinator.php');
}
if($_SESSION['user']['role']=='FSupervisor'){
    header('location:faculty supervisor/faculty.php');
}
 if($_SESSION['user']['role']=='admin'){
header('location:admin/admin.php');
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
    </style>
</head>
<body>
  <nav id='nav'>
    <ul>
        <div id='logo'>
            <b>Industrial Supervisor</b>
        </div>
        <li><a href='industrial.php'>Menu</a></li>
        <li><a href='show_user.php'>Student </a></li>
        <li><a href='announcement.php'>Announcement</a></li>
        <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
    </ul>
</nav>
<div id='main'>
    <div id='left'>
        <div id='sidebar'>
            <div class='menu'>
                <a href='industrial.php'>
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                    Main Menu
                </div>
            </a>
        </div>
		<div class='menu'>
                <a href='show_user.php'>
                <div class='menu menu-item' id='student_tc'>
                    Show Student Record
                </div>
            </a>
        </div>
		
		<div class='menu'>
                <a href='assign_response_status.php'>
                <div class='menu menu-item' id='student_tc'>
                    Approve Student
                </div>
            </a>
        </div>
		
		<div class='menu'>
                <a href='show_feedback.php'>
                <div class='menu menu-item' id='student_tc'>
                   View Student Progress
                </div>
            </a>
        </div>
		
		<div class='menu'>
                <a href='marks.php'>
                <div class='menu menu-item' id='student_tc'>
                   Evaluate Student Progress
                </div>
            </a>
        </div>
        <div class='menu'>
                <a href='announcement.php'>
                <div class='menu menu-item' id='student_tc'>
                  Announcement
                </div>
            </a>
        </div>
		
		
		
		
    </div>

</div>
<div id='right'>
<div class='table_container'>
        <div class='sub-table-container' >
        <div id=head_msg>Overall Stats of Industrial Supervisor</div><br>
            <table class='tg' class='tc' style='undefined;table-layout: fixed; width: 100%; height:500px'>
                <colgroup>
                <col style='width: 25%'>
                <col style='width: 25%'>
                <col style='width: 25%'>
                <col style='width: 25%'>
            </colgroup>
            <tr>";
                // no of students
                require "../connection.php";
                $str="select count(*) from user;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<th class='tg-031e' rowspan='5'><div class='num'>$row[0]</div><br><div class='stats_head'>Users</div></th>";

                // no of undecided student
                require "../connection.php";
                $str="select count(*) from user where role='student';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Students:<div class='num_sub'>$row[0]</div></div></td>";

                // no of faculty
                require "../connection.php";
                $str="select count(*) from announcement;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<th class='tg-031e' rowspan='5'><div class='num'>$row[0]</div><br><div class='stats_head'>Announcement</div></th>";

                // no of faculty who are advisor to Project
                require "../connection.php";
                $str="select count(*) from user where role='ISupervisor';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e' rowspan='2'><div class='stats_sub'>Industrial Supervisor:<div class='num_sub'>$row[0]</div></div></td>

                
            </tr>
            <tr>";
                // no of students with Prospect Status
                require "../connection.php";
                $str="select count(*) from user where role='admin';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Administrator:<div class='num_sub'>$row[0]</div></div></td>";

                echo "
            </tr>
           
            <tr>";
			
			// no of students with Hired Status
                require "../connection.php";
                $str="select count(*) from student_details where status='Hired';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Hired:<div class='num_sub'>$row[0]</div></div></td>";
				
				
            // no of students with Prospect Status
            require "../connection.php";
            $str="select count(*) from user where role='coordinator';";
            mysqli_query($con, $str);
            $result=mysqli_query($con, $str);
            $row=mysqli_fetch_array($result);
            echo "<td class='tg-031e'><div class='stats_sub'>Faculty Coordinator:<div class='num_sub'>$row[0]</div></div></td>";

            echo "
            </tr>
			
			 <tr>";
                // no of student who have been rejected
                require "../connection.php";
                $str="select count(*) from student_details where status='Rejected';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Rejected:<div class='num_sub'>$row[0]</div></div></td>";

                // no of faculty with work no in Internship programme
                // select count(*)  from faculty_detail where faculty_id not in ()
                echo "<td class='tg-031e' rowspan='2'></td>
            </tr>
        </table>

    </div>
</div> 

</body>
</html>
";
?>