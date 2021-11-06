<?php

include("err.php");
ob_start();
session_start();


if(isset($_GET['submit'])) {
    require "../connection.php";
    /* inserting into student_details */
    $str_student_details="update student_details set first_name='".$_GET['first_name']."', middle_name='".$_GET['middle_name']."', last_name='".$_GET['last_name']."', email='".$_GET['email']."', telephone='".$_GET['telephone']."', status='".$_GET['status']."', sem_reg='".$_GET['sem_reg']."', course='".$_GET['course']."', status_fsv='".$_GET['status_fsv']."' where student_id='".$_GET['student_id']."'";
// echo "<p style='background:yellow;'>STUDENT DETAILS</p>";
// echo $str_student_details;
    mysqli_query($con, $str_student_details);
    header('location:fsvsupervisor_student_selected.php');
}
echo "
<html lang='en'>
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
    <title>MyLI - Internship Management Information System</title>
    <link href='../style_admin.css' rel='stylesheet'>
    <link href='../table.css' rel='stylesheet'>
    <script type='text/javascript' language='javascript'>
        function z(oTD) {
            var el, i = 0;
            while (el = oTD.childNodes[i++])
                if (el.type == 'radio') el.checked = true;
        }
    </script>
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

    </style>
</head>

<body>
    <nav id='nav'>
        <ul style='list-style: none; display: inline'>
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
        <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
        color: #212121;
        margin-top: -1px;
        padding-top: 13px;
        background: rgba(0,0,0,0.06);'>
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
            <form action='' method='GET' accept-charset='utf-8'>

                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>PERSONAL INFORMATION</th>
                                </tr>
                            </thead>";

                            $student_id=$_GET['student_id'];
                            require '../connection.php';
                            $str="select * from student_details where student_id='$student_id'";
                            $result=mysqli_query($con, $str);
                            $row=mysqli_fetch_array($result);

                            echo "
                            <tbody>
                            <tr class='row'>
                            <td class='item'>Semester Registration</td>

                            <td class='item'><input name='sem_reg' placeholder='' type='text' value='$row[7]'></td>
                        </tr>
                                <tr class='row'>
                                    <td class='item alter'>Student ID</td>

                                    <td class='item alter'><input name='student_id' placeholder='$row[0]' type='text' value='$row[0]' readonly></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>First Name</td>

                                    <td class='item'><input name='first_name' placeholder='' type='text' value='$row[1]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Middle Name</td>

                                    <td class='item alter'><input name='middle_name' placeholder='' type='text' value='$row[2]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Last Name</td>

                                    <td class='item'><input name='last_name' placeholder='' type='text' value='$row[3]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Email</td>

                                    <td class='item alter'><input name='email' placeholder='' type='text' value='$row[4]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Telephone</td>

                                    <td class='item'><input name='telephone' placeholder='' type='text' value='$row[5]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Internship Status</td>
                                    <td class='item alter'>
                                        <select name='status' disabled>
                                            <option value='$row[6]' selected readonly>$row[6]</option>
                                        </select>
                                        <div style='color:grey'>*info:Status automatically changes when allottment is made.</div>
                                    </td>
                                </tr>
                                <tr class='row'>
                                <td class='item'>Course</td>

                                <td class='item'><input name='course' type='text' required value='$row[8]'></td>
                            </tr>


                                <tr class='row'>
                                   <td class='item alter'>Supervisor Status</td>
                                   <td class='item alter'>
                                       <select name='status_fsv' disabled>
                                            <option value='$row[9]' selected readonly>$row[9]</option>
                                       </select>
                                    <div style='color:grey'>*info:Status automatically changes when allottment is made.</div>
                                </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            
                                        <div style='padding-left:75%;'>
                                            <input type='submit' name='submit'  value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                                          <input type='button' name='print'  value='Print' class='edit-button' onclick=window.print() style='margin-right: 80px;line-height:40px;width:80px; bottom: 50%;'>
                                            
                                
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </body>
                        </html>";

    ?>
