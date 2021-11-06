<?php

session_start();
if(isset($_GET['submit'])) {
    require "../connection.php";
    $str_user="update marks set Year1_gpa='".$_GET['year1_gpa']."',  Year2_gpa='".$_GET['year2_gpa']."',   Year3_gpa='".$_GET['year3_gpa']."',  Year4_gpa='".$_GET[' year4_gpa']."', Logbook_marks='".$_GET['logbook_marks']."',Presentation_marks='".$_GET['presentation_marks']."', CGPA='".$_GET['total_cgpa']."' where Student_ID='".$_GET['student_id']."'";
    mysqli_query($con, $str_user);
    header('location:marks.php');}

echo "
<!DOCTYPE html>
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
            <div id='logo' style='font-weight: bold'>
				Industrial Supervisor
            </div>
            <li><a href='industry.php'>Menu</a></li>
            <li><a href=''>User</a></li>
            <li><a href=''>Company</a></li>
            <li><a href=''>Faculties</a></li>
            <li><a href=''>Job Openings</a></li>
            <li><a href=''>Projects</a></li>
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
                    <a href='supervisor_student_selected.php'>
            <div class='menu menu-item' id='student_tc'>
               Student List
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
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>STUDENT MARKS</th>
                                </tr>
                            </thead>";

                            $id=$_GET['id'];
                            require '../connection.php';
                            $str="select * from marks where Student_ID='$id'";
                            $result=mysqli_query($con, $str);
                            $row=mysqli_fetch_array($result);
                            
                            echo "
                            <tbody>
                              
                                <tr class='row'>
                                    <td class='item alter'>Student ID</td>

                                    <td class='item alter'><input name='student_id' placeholder='$row[0]' type='text' value='$row[0]' readonly></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Year 1 GPA</td>

                                    <td class='item'><input name='year1_gpa' type='text'  value='$row[1]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Year 2 GPA</td>

                                    <td class='item alter'><input name='year2_gpa' type='text'  value='$row[2]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Year 3 GPA</td>

                                    <td class='item alter'><input name='year3_gpa' type='text' value='$row[3]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Year 4 GPA</td>

                                    <td class='item'><input name='year4_gpa' type='text'  value='$row[4]'></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Logbook Marks</td>

                                <td class='item'><input name='logbook_marks' type='text'  value='$row[5]'></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Presentation Marks</td>

                                <td class='item'><input name='presentation_marks' type='text' value='$row[6]'></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Total CGPA</td>

                                <td class='item'><input name='total_cgpa' type='text'  value='$row[7]'></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div style='padding-left:75%;'>
                        <input type='submit' name='submit' value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                    </div>
         </form>
        </div>
    </body>
    </html>";
    ?>
