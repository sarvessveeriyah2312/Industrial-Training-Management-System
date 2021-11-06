<?php

session_start();
echo "
<!DOCTYPE html>

<html lang='en'>
<head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
    <title>MyLI - Internship Management Information System</title>
    <link href='../../style_admin.css' rel='stylesheet'>
    <link href='../../table.css' rel='stylesheet'>
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
            <li><a href='../coordinator.php'>Menu</a></li>
            <li><a href='show_student.php'>Student </a></li>
            <li><a href='show_company.php'>Company</a></li>
            <li><a href='show_faculty.php'>Faculties</a></li>
            <li><a href='job_opening_show.php'>Job Openings</a></li>
            <li><a href='project_show.php'>Projects</a></li>
            <li align='right' ><a href='../../logout.php' style='color:red;'>logout</a></li>
        </ul>
    </nav>

    <div id='main'>
        <div id='left'>
            <div id='sidebar'>
                <div class='menu'>
                    <a href='../coordinator.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Main Menu
                        </div>
                        </a>

                    <a href='fsvsupervisor_student_selected.php'>
                        <div class='menu menu-item' id='student_tc'>
                        Manage Student-Lecturer
                        </div>
                    </a>
                    <a href='fsvassign_response_status.php'>
                        <div class='menu menu-item' id='student_tc'>
                        Student Status
                        </div>
                    </a>
                    <a href='fsvassign_status_edit.php'>
                        <div class='menu menu-item' id='student_tc'>
                        Assign Student
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
                                <th class='tpl-bar-breadcrumbs' colspan='2'>SELECT STUDENT</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class='row'>
                                <td class='item'>Student ID</td>
                                <td class='item'><select name='student_id' onchange='x(this)'>
                                    <option value='' > select </option>";
                                    require "../connection.php";
                                    $str1='select * from student_details';
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
                                <th class='tpl-bar-breadcrumbs' colspan='7'>Edit Status of Student ID : $student_id
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='row'>
                                <td class='item'>Fac ID</td>
                                <td class='item'>Faculty SV ID</td>
                                
                                <td class='item'>Description</td>
                                <td class='item'>Responsibilties</td>
                                
                                <td class='item'>Select Fac</td>
                            </tr>";

                            require "../connection.php";
                            $str="select fac_db.* from fac_db,statusf_db where student_id='$student_id' and statusf_db.fac_id=fac_db.fac_id;";
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
                                    

                                    <td onclick='z(this)' class='item alter'><a href='fsvassign_manipulate.php?student_id=$student_id&fac_id=$row[0]&status_fsv=delete'' style='font-size:20px'><b>✓</b></a></td>
                                </tr>";

                            }
                            else {
                                $x=1;
                                echo "<tr   class='row'>
                                <td class='item'>$row[0]</td>
                                <td class='item'>$row[1]</td>
                                <td class='item'>$row[2]</td>
                                <td class='item'>$row[3]</td>
                                

                                <td onclick='z(this)' class='item'><a href='fsvassign_manipulate.php?student_id=$student_id&fac_id=$row[0]&status_fsv=delete' style='font-size:20px'><b>✓</b></a></td>
                                ";
                            }

                        }
                        require "../connection.php";
                        $str="select fac_db.* from fac_db where fac_id not in ( select fac_id from statusf_db where student_id='$student_id');";
                        $result=mysqli_query($con, $str);

                        while($row=mysqli_fetch_array($result)) {
                            if($x==1) {
                                $x=0;
                                echo "<tr   class='row'>
                                <td class='item alter'>$row[0]</td>
                                <td class='item alter'>$row[1]</td>
                                <td class='item alter'>$row[2]</td>
                                <td class='item alter'>$row[3]</td>
                                

                                <td onclick='z(this)' class='item alter'><a href='fsvassign_manipulate.php?student_id=$student_id&fac_id=$row[0]&status_fsv=add' style='font-size:20px'><b>□</b></td>
                            </tr>";

                        }
                        else {
                            $x=1;
                            echo "<tr   class='row'>
                            <td class='item'>$row[0]</td>
                            <td class='item'>$row[1]</td>
                            <td class='item'>$row[2]</td>
                            <td class='item'>$row[3]</td>
                            

                            <td onclick='z(this)' class='item'><a href='fsvassign_manipulate.php?student_id=$student_id&fac_id=$row[0]&status_fsv=add' style='font-size:20px'><b>□</b></td>
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
