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
if($_SESSION['user']['role']=='admin'){
    header('location:admin/admin.php');
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
            <b>Faculty Supervisor</b>
        </div>
        <li><a href='faculty.php'>Menu</a></li>
        <li><a href='fsvsupervisor_student_selected.php'>Student </a></li>
        <li><a href='show_faculty.php'>Faculties</a></li>
        <li><a href='announcement.php'>Announcement</a></li>
        <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
    </ul>
    </ul>
</nav>
<div id='main'>
    <div id='left'>
        <div id='sidebar'>
            <div class='menu'>
                <a href='faculty.php'>
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                    Main Menu
                </div>
            </a>
            <a href='fsvsupervisor_student_selected.php'>
            <div class='menu menu-item' id='student_tc'>
               Student List
            </div>
           </a>
           <a href='show_feedback.php'>
           <div class='menu menu-item' id='student_tc'>
         Student Progress
           </div>
           </a>
            <a href='marks.php'>
                    <div class='menu menu-item' id='student_tc'>
                  Show Marks
                    </div>
                    </a>
            <a href='addmarks.php'>
                    <div class='menu menu-item' id='student_tc'>
                  Calculate Marks
                    </div>
                    </a>
            <a href='announcement.php'>
                    <div class='menu menu-item' id='student_tc'>
                  Announcement
                    </div>
                    </a>
                    <a href='overallprogress.php'>
                    <div class='menu menu-item' id='student_tc'>
                 Student Evaluation
                    </div>
                    </a>
                    <a href='show_faculty.php'>
            <div class='menu menu-item' id='student_tc'>
         Faculties
            </div>
            </a>  
            <a href='viewconfirmation.php'>
                    <div class='menu menu-item' id='student_tc'>
                 Confirmation Letter
                    </div>
                    </a>                                   
            </div>   


                    
          
        </div>
    </div>

</div>

<div id='right'>
<div class='table_container'>
        <div class='sub-table-container' >
        <div id=head_msg>Overall Stats of Faculty Supervisor</div><br>
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
                $str="select count(*) from student_details;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<th class='tg-031e' rowspan='5'><div class='num'>$row[0]</div><br><div class='stats_head'>Students</div></th>";

                require "../connection.php";
                $str="select count(*) from student_details where status='Undecided';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Undecided:<div class='num_sub'>$row[0]</div></div></td>";

                require "../connection.php";
                $str="select count(*) from faculty_detail;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<th class='tg-031e' rowspan='5'><div class='num'>$row[0]</div><br><div class='stats_head'>Faculties</div></th>"; "
                
            </tr>
           

           
            <tr>";
            // --------------------------------------------------------- 2nd ROW

            require "../connection.php";
            $str="select * from job_db;";
            mysqli_query($con, $str);
            $result=mysqli_query($con, $str);
            $sum=0;
            while ($row=mysqli_fetch_array($result)) {
                $int = (int)$row[2];
                $sum=$sum+$int;
            }
            echo "<td class='tg-031e'><div class='stats_sub'>Total No of Jobs:<div class='num_sub'>$sum</div></div></td>

            </tr>
            <tr>";
                // company which does not have job opening
                require "../connection.php";
                $str="select count(*) from company_details where id not in ( select distinct company_id from job_db );";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Companies with no Job Openings:<div class='num_sub'>$row[0]</div></div></td>";

                // no of Vacancy
                $str="select count(*) from student_details where status='Hired';";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                $vacancy=$sum-$row[0];
                echo "<td class='tg-031e'><div class='stats_sub'>No Of Vacancies:<div class='num_sub'>$vacancy</div></div></td>
            </tr>
               
            <tr>";
            // --------------------------------------------------------- 2nd ROW
                

                // # of companies that have job openings
                require "../connection.php";
                $str="select count(*) from job_db;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<td class='tg-031e'><div class='stats_sub'>Companies with Job Openings:<div class='num_sub'>$row[0]</div></div></td>";


                // no of job openings
                require "../connection.php";
                $str="select count(*) from announcement;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $row=mysqli_fetch_array($result);
                echo "<th class='tg-031e' rowspan='2'><div class='num'>$row[0]</div><br><div class='stats_head'>Announcements</div></th>";

                // Total no of positions collectively in all job opennings
                require "../connection.php";
                $str="select * from job_db;";
                mysqli_query($con, $str);
                $result=mysqli_query($con, $str);
                $sum=0;
                while ($row=mysqli_fetch_array($result)) {
                    $int = (int)$row[2];
                    $sum= $sum+$int;
                }
                echo "<td class='tg-031e'><div class='stats_sub'>Total No of Jobs:<div class='num_sub'>$sum</div></div></td>
            </tr>

           
        
         

</div>
</div>
</body>
</html>
";
?>