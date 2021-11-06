<?php

include("err.php");
ob_start();
session_start();


echo "
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
    <title>MyLI - Internship Management Information System</title>
    <link href='../style_admin.css' rel='stylesheet'>
    <link href='../table.css' rel='stylesheet'>
    <style>
        body {
            font-family: 'open sans', 'Helvetica Neue', Helvetica, arial, sans-serif;
            background: #EDEFF0;
        }
        /*        input {
            width: 100%;
            height: 100%;
            border-collapse: collapse;
        }*/
    </style>
</head>

<body>
    <nav id='nav'>
        <ul style='list-style: none; display: inline'>
            <div id='logo' style='font-weight: bold'>
                iMIS
            </div>
            <li><a href='coordinator.php'>Menu</a></li>
            <li><a href='show_student.php'>Student </a></li>
            <li><a href='show_company.php'>Company</a></li>
            <li><a href='show_faculty.php'>Faculties</a></li>
            <li><a href='job_opening_show.php'>Job Openings</a></li>
            <li><a href='project_show.php'>Projects</a></li>
            <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
        </ul>
    </nav>

    <div id='main'>
        <div id='left'>
            <div id='sidebar'>
                <div class='menu'>
                    <a href='coordinator.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Main Menu
                        </div>
                    </a>
                    <a href='show_student.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Show Student Record
                        </div>
                    </a>
                    <a href='show_company.php'>
                        <div class='menu menu-item' id='company_tc'>
                            Show Company Record
                        </div>
                    </a>
                    <a href='show_faculty.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Show Faculty Record
                        </div>
                    </a>
                    <a href='job_opening_show.php'>
                        <div class='menu menu-item' id='company_tc'>
                            Show Job Openings
                        </div>
                    </a>
                    <a href='prospect_status_edit.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Allot Eligible Student to Job
                        </div>
                    </a>
                    <a href='company_response_status.php' >
                        <div class='menu menu-item' id='faculty_tc'>
                            Finalize Job Status
                        </div>
                    </a>
                    <a href='company_student_selected.php' >
                        <div class='menu menu-item' id='faculty_tc'>
                            View Students According to Company
                        </div>
                    </a>
                    <a href='project_show.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Show Project Record
                        </div>
                    </a>                    
                    <a href='project_allot.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Assign a Project to Student
                    </div>
                    </a>
                    <a href='presentation_show.php'>
                        <div class='menu menu-item' id='faculty_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                        color: #212121;
                        margin-top: -1px;
                        padding-top: 13px;
                        background: rgba(0,0,0,0.06);'>
                            Show Presentation Record
                        </div>
                    </a>
                    <a href='presentation_allot.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Assign a Presentation to Student
                        </div>
                    </a>
                    <a href='fsvsupervisor_student_selected.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Manage Student-Lecturer
                        </div>
                    </a>                     
                    <a href='announcement.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Manage Announcement
                        </div>
                    </a>
                    <a href='marks.php'>
                        <div class='menu menu-item' id='faculty_tc'>
                            Student Performance
                        </div>
                    </a>                    
                </div>                    
            </div>
        </div>
    </div>

        <div id='right'>";

            $presentation_id=$_GET['presentation_id'];
            require '../connection.php';
            $str="select * from presentation_db where presentation_id='$presentation_id'";
            $result=mysqli_query($con, $str);
            $row=mysqli_fetch_array($result);
            echo "
            <div class='table_container'>
                <div class='sub-table-container'>
                    <table class='tc'>
                        <thead>
                            <tr>
                                <th class='tpl-bar-breadcrumbs' colspan='3'>PRESENTATION RECORD</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class='row'>
                                <td class='item alter'>Presentation ID</td>

                                <td class='item alter'>$row[0]</td>
                            </tr>

                            <tr class='row'>
                                <td class='item'>Department</td>

                                <td class='item'>$row[1]</td>
                            </tr>

                            <tr class='row'>
                                <td class='item alter'>Date</td>

                                <td class='item alter'>$row[2]</td>
                            </tr>

                            <tr class='row'>
                                <td class='item'>Time</td>

                                <td class='item'>$row[3]</td>
                            </tr>

                            <tr class='row'>
                                <td class='item alter'>Advisor</td>
                                require '../connection.php';
                                $str="select * first_name , last_name from faculty_detail";
                                $result=mysqli_query($con, $str);
                                $row=mysqli_fetch_array($result);
                                echo "
                                <td class='item alter'>$row[4]</td>"
                            </tr>
                            

                        </tbody>
                    </table>
                </div>
            </div>


            ";

            echo "<div style='padding-left:75%;'>
            <a href='presentation_show.php'><button class='edit-button' style='float:left;line-height:40px;width:80px;visibility:visible;'>Back</button></a>
        </div>

    </div>
</div>
</body>
</html>";
?>
