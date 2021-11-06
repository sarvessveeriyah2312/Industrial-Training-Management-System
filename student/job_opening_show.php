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
                    <div class='menu menu-item' id='student_tc'>
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
                    <div class='menu menu-item' id='company_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                    Job Openings
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
                        <th class='tpl-bar-breadcrumbs' colspan='7'>Job Openings

                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='row'>
                            <td class='item'>Job ID</td>
                            <td class='item'>Company ID</td>
                            <td class='item'>Position(s)</td>
                            <td class='item'>Description</td>
                            <td class='item'>Responsibilties</td>
                            <td class='item'>Requirements</td>
                           
                        </tr>";

                        require "../connection.php";
                        $str="select * from job_db;";
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
