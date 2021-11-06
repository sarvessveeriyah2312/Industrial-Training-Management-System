<?php

session_start();
if(isset($_GET['submit'])) {
    require "../connection.php";
    $str_user="insert into marks values('".$_GET['student_id']."', '".$_GET['year1_gpa']."', '".$_GET['year2_gpa']."', '".$_GET['year3_gpa']."', '".$_GET['year4_gpa']."', '".$_GET['logbook_marks']."', '".$_GET['presentation_marks']."', '".$_GET['total_cgpa']."')";
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
                Faculty Supervisor
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
            <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
            color: #212121;
            margin-top: -1px;
            padding-top: 13px;
            background: rgba(0,0,0,0.06);'>
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

        <div id='right'>
            <form action='' method='GET' accept-charset='utf-8'>

                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>STUDENT MARKS</th>
                                </tr>
                            </thead>

                            <tbody>
                              
                                <tr class='row'>
                                    <td class='item alter'>Student ID</td>

                                    <td class='item alter'><input name='student_id' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Year 1 GPA</td>

                                    <td class='item'><input name='year1_gpa' type='text' required value='' onchange='add()' id='y1'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Year 2 GPA</td>

                                    <td class='item alter'><input name='year2_gpa' type='text'  value='' onchange='add()' id='y2'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Year 3 GPA</td>

                                    <td class='item alter'><input name='year3_gpa' type='text' required value='' onchange='add()' id='y3'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Year 4 GPA</td>

                                    <td class='item'><input name='year4_gpa' type='text' required value='' onchange='add()' id='y4'></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Logbook Marks</td>

                                <td class='item'><input name='logbook_marks' type='text' required value='' ></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Presentation Marks</td>

                                <td class='item'><input name='presentation_marks' type='text' required value='' ></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Total CGPA</td>

                                <td class='item'><input type='text' name='total_cgpa' id='total_cgpa' required value=''></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div style='padding-left:75%;'>
                        <input type='submit' name='submit' value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                    </div>
         </form>
         <script>
         function add(){
            var a,b,c,d,e,f,g;
            a=Number(document.getElementById('y1').value);
            b=Number(document.getElementById('y2').value);
            c=Number(document.getElementById('y3').value);
            d=Number(document.getElementById('y4').value);
            
            g=( a + b + c + d )/(4.0);
            document.getElementById('total_cgpa').value= g;
            }
        </script>
        </div>
    </body>
    </html>";
    ?>
