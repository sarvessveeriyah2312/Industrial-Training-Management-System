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
                    <div class='menu menu-item' id='student_tc'>
                        Main Menu
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
                <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                color: #212121;
                margin-top: -1px;
                padding-top: 13px;
                background: rgba(0,0,0,0.06);'>
                  Announcement
                </div>
            </a>
        </div>
                                                                     
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
                    
                        <th class='tpl-bar-breadcrumbs' colspan='5'> Announcement Record
                            
                        </tr>
                </thead>
                    <tbody>
                        <tr class='row'>
                            <td class='item'>Announcement ID</td>
                            <td class='item'>Announcement Date</td>
                            <td class='item'>Announcement Time</td>
                            <td class='item'>Announcement Detail</td>
                            <td class='item'>Notes</td>
                        </tr>";

                        require "../connection.php";
                        $str="select * from announcement;";
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