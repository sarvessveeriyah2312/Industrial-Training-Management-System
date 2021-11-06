<?php

session_start();
if(isset($_GET['submit'])) {
    require "../connection.php";
    $str="insert into presentation_db values('".$_GET['presentation_id']."', '".$_GET['department']."', '".$_GET['date']."', '".$_GET['time']."', '".$_GET['advisor']."');";
    // echo $str;
    mysqli_query($con, $str);
    header('location:presentation_show.php');
}
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
        /* Move nav bar to top of page */
        /*#nav {

           position: absolute;
           top: 0;
       }
*/
       /* Move banner down below top nav bar */
       /*#main {
           position: relative;
           top: 30px;
       }
*/        /*input {
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
                <b>Faculty Coordinator</b>
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
                        <div class='menu menu-item' id='faculty_tc'>
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

        <div id='right'>
            <form action='' method='get' accept-charset='utf-8'>
                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>PRESENTATION INFORMATION</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class='row'>
                                    <td class='item alter'>Presentation ID</td>

                                    <td class='item alter'><input name='presentation_id' placeholder='' type='text' required value='' autofocus></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Department</td>

                                    <td class='item'><input name='department' placeholder='' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Date</td>

                                    <td class='item alter'><input name='date' placeholder='' type='date' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Time</td>

                                    <td class='item alter'><input name='time' placeholder='' type='time' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Advisor</td>";
                                    echo "<td class='item'><select name='advisor'>";
                                    require "../connection.php";
                                    $str="select first_name, last_name from faculty_detail;";
                                    $result=mysqli_query($con, $str);
                                    while ($row=mysqli_fetch_array($result)) {
                                        echo "<option value='$row[0] $row[1]'>$row[0] $row[1]</option>";
                                    }

                                echo "</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style='padding-left:75%;'>
                    <input type='submit' name='submit' value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                </div>

            </form>

        </div>
    </div>
</body>
</html>";

?>
