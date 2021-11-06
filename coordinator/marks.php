<?php
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
<script type='text/javascript' language='javascript'>

    function x(sel) {
        sel.form.submit();
    }
</script>

</head>

<body>
    <nav id='nav'>
        <ul style='list-style: none; display: inline'>
            <div id='logo' style='font-weight: bold'>
            Faculty Coordinator
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
            <a href='supervisor_student_selected.php'>
                <div class='menu menu-item' id='student_tc'>
                    Student List
                </div>
            </a>
            <a href='assign/assign_response_status.php'>
                <div class='menu menu-item' id='student_tc'>
                    Approve Student
                </div>
            </a>
            <a href='marks.php'>
                <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                color: #212121;
                margin-top: -1px;
                padding-top: 13px;
                background: rgba(0,0,0,0.06);'>
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
    </div>

        <div id='right'>
            <form action='' method='get' accept-charset='utf-8'>
                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='2'>SHOW STUDENT MARKS</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class='row'>
                                    <td class='item'>Student ID</td>
                                    <td class='item'><select name='student_id' onchange='x(this)'>
                                        <option value='' > select </option>";
                                        require "../connection.php";
                                        $str1='select Student_ID from marks';
                                        $result1=mysqli_query($con, $str1);
                                        while ($row1=mysqli_fetch_array($result1)) {
                                            echo "<option value=".$row1[0].">".$row1[0]."</option>";
                                        }
                                        echo "</select></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </form>";
                if(isset($_GET['student_id'])) {
                    require "../connection.php";
                    $student_id=$_GET['student_id'];
                    echo "<div class='table_container'>
                    <div class='sub-table-container' >

                        <table class='tc' >
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='8'>Tabel of Student Marks : $student_id
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='row'>
                                    <td class='item'>Year 1 GPA</td>
                                    <td class='item'>Year 2 GPA</td>
                                    <td class='item'>Year 3 GPA</td>
                                    <td class='item'>Year 4 GPA</td>
                                    <td class='item'>Logbook</td>
                                    <td class='item'>Presentation</td>
                                    <td class='item'>CGPA</td>
                                    <td class='item'>Delete</td>
                                </tr>";

                                require "../connection.php";
                                $str= "Select Year1_gpa, Year2_gpa, Year3_gpa, Year4_gpa, Logbook_marks, Presentation_marks, CGPA FROM marks WHERE Student_ID='$student_id'";
                                $result= mysqli_query($con, $str);
                                $x=1;
                                while($row=mysqli_fetch_array($result)) {
                                    if($x==1) {
                                        $x=0;
                                        echo "<tr   class='row'>
                                        <td class='item alter'>$row[0]</td>
                                        <td class='item alter'>$row[1]<a href='updatemarks.php?id=$student_id'><button class='edit-button'>Edit</button></a></td>
                                        <td class='item alter'>$row[2]</td>
                                        <td class='item alter'>$row[3]</td>
                                        <td class='item alter'>$row[4]</td>
                                        <td class='item alter'>$row[5]</td>
                                        <td class='item alter'>$row[6]</td>
                                        <td class='item alter'><a href='delete_marks.php?file=marks.php&table=marks&pkey_name=Student_ID&key=$student_id' title='Delete student marks from record'>✖</a></td>
                            
                                       
                                    </tr>";

                                }
                                else {
                                    $x=1;
                                    echo "<tr   class='row'>
                                    <td class='item'>$row[0]</td>
                                    <td class='item'>$row[1]<a href='updatemarks.php?id=$student_id'><button class='edit-button'>Edit</button></a></td>
                                    <td class='item'>$row[2]</td>
                                    <td class='item'>$row[3]</td>
                                    <td class='item'>$row[4]</td>
                                    <td class='item'>$row[5]</td>
                                    <td class='item'>$row[6]</td>
                                    <td class='item'><a href='delete_marks.php?file=marks.php&table=marks&pkey_name=Student_ID&key=$student_id' title='Delete student marks from record'>✖</a></td>
                                    
                                    ";
                                }

                            }
                            echo "
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>";
    }
?>
</div>
</div>
</body>
</html>
