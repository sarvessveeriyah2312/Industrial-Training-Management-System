<?php

include("err.php");
ob_start();
session_start();

echo "
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
</nav>
<div id='main'>
    <div id='left'>
        <div id='sidebar'>
            <div class='menu'>
            <a href='faculty.php'>
            <div class='menu menu-item' id='student_tc'>
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
            <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
            color: #212121;
            margin-top: -1px;
            padding-top: 13px;
            background: rgba(0,0,0,0.06);'>
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

            <table class='tc' >
                <thead>
                    <tr>
                        <th class='tpl-bar-breadcrumbs' colspan='10'>Faculty Record

                        </tr>
                    </thead>
                    <tbody>
                        <tr class='row'>
                            <td class='item'>Faculty ID</td>
                            <td class='item'>First Name</td>
                            <td class='item'>Last Name</td>
                            <td class='item'>Position</td>
                            <td class='item'>School</td>
                            <td class='item'>Telephone</td>
                            <td class='item'>Extension</td>
                            <td class='item'>Mobile</td>
                            <td class='item'>Email</td>
                        </tr>";

                        require "../connection.php";
                        $str="select * from faculty_detail;";
                        $result=mysqli_query($con, $str);
                        $x=1;
                        while($row=mysqli_fetch_array($result)) {
                            if($x==1) {
                                $x=0;
                                echo "<tr   class='row'>
                                <td class='item alter'>$row[0]</td>
                                <td class='item alter'>$row[1]</td>
                                <td class='item alter'>$row[2]</td>
                                <td class='item alter'>$row[3]</td>
                                <td class='item alter'>$row[4]</td>
                                <td class='item alter'>$row[5]</td>
                                <td class='item alter'>$row[6]</td>
                                <td class='item alter'>$row[7]</td>
                                <td class='item alter'><a href='mailto:$row[8]'>$row[8]</a></td>
                            </tr>";

                        }
                        else {
                            $x=1;
                            echo "<tr   class='row'>
                            <td class='item'>$row[0]</td>
                            <td class='item'>$row[1]</td>
                            <td class='item'>$row[2]</td>
                            <td class='item'>$row[3]</td>
                            <td class='item'>$row[4]</td>
                            <td class='item'>$row[5]</td>
                            <td class='item'>$row[6]</td>
                            <td class='item'>$row[7]</td>
                            <td class='item'><a href='mailto:$row[8]'>$row[8]</a></td>
                        </tr>";
                    }

                }
                echo "         
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</body>
</html>";
?>
