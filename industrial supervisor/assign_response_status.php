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
                Industrial Supervisor
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
            </a>
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
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
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
                <div class='menu menu-item' id='student_tc'>
                  Announcement
                </div>
            </a>
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
                                    $str1="select * from user where role='student'" ;
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
                                <th class='tpl-bar-breadcrumbs' colspan='4'>Edit Status of Student ID : $student_id
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='row'>
                                <td class='item'>Job ID</td>
                                <td class='item'>Company Name</td>
                                <td class='item'>Position</td>
                                <td class='item'>Select Status</td>
                            </tr>";

                            require "../connection.php";
                            $str="select job_db.* from job_db,status_db where student_id='$student_id' and status_db.job_id=job_db.job_id;";
                            $result=mysqli_query($con, $str);
                            $x=1;
                            while($row=mysqli_fetch_array($result)) {
                                if($x==1) {
                                    $x=0;
                                    echo "<tr   class='row'>
                                    <td class='item alter'>$row[0]</td>";
                                // ---------------------------------- Getting Company Name
                                    require "../connection.php";
                                    $comp_name_str="select co_name from company_details where id='$row[1]'";
                                    $comp_result=mysqli_query($con, $comp_name_str);
                                    $comp_row=mysqli_fetch_array($comp_result);
                                    echo "<td class='item alter'>$comp_row[0]</td>";
                                // ----------------------------------- Getting Position Name
                                    require "../connection.php";
                                    $job_str="select description from job_db where job_id='$row[0]';";
                                    $job_result=mysqli_query($con, $job_str);
                                    $position_name=mysqli_fetch_array($job_result);

                                    echo "<td class='item alter'>$position_name[0]</td>
                                    <td class='item alter'>";
                                // ---------------------------------- JOB STATUS
                                        require "../connection.php";
                                        $status_str="select status from status_db where student_id='$student_id' and job_id='$row[0]';";
                                        $status_result=mysqli_query($con, $status_str);

                                        echo "<select onchange='location = this.options[this.selectedIndex].value;'>";
                                        $status_row=mysqli_fetch_array($status_result);
                                        if($status_row[0] == "Hold")
                                            echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Hold' selected >Hold</option>";
                                        else
                                            echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Hold'>Hold</option>";
                                        if($status_row[0] == "Assign")
                                            echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Assign' selected>Assign</option>";
                                        else
                                            echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Assign'>Assign</option>";
                                        if($status_row[0] == "Rejected")
                                            echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Rejected' selected >Rejected</option>";
                                        else
                                            echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Rejected'>Rejected</option>";
                                        echo "</select>​
                                    </td>
                                </tr>";

                            }
                            else {
                                $x=1;
                                echo "<tr   class='row'>
                                <td class='item'>$row[0]</td>";
                                require "../connection.php";
                                $comp_name_str="select co_name from company_details where id='$row[1]'";
                                $comp_result=mysqli_query($con, $comp_name_str);
                                $comp_row=mysqli_fetch_array($comp_result);
                                echo "<td class='item'>$comp_row[0]</td>";
                                // -----------------------getting job position name
                                require "../connection.php";
                                $job_str="select description from job_db where job_id='$row[0]';";
                                $job_result=mysqli_query($con, $job_str);
                                $position_name=mysqli_fetch_array($job_result);
                                echo "<td class='item'>$position_name[0]</td>
                                <td class='item'>";
                                // -------  Mapping Correct Status
                                    require "../connection.php";
                                    $status_str="select status from status_db where student_id='$student_id' and job_id='$row[0]';";
                                    $status_result=mysqli_query($con, $status_str);

                                    echo "<select onchange='location = this.options[this.selectedIndex].value;'>";
                                    $status_row=mysqli_fetch_array($status_result);
                                    if($status_row[0] == "Hold")
                                        echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Hold' selected >Hold</option>";
                                    else
                                        echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Hold'>Hold</option>";
                                    if($status_row[0] == "Assign")
                                        echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Assign' selected>Assign</option>";
                                    else
                                        echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Assign'>Assign</option>";
                                    if($status_row[0] == "Rejected")
                                        echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Rejected' selected >Rejected</option>";
                                    else
                                        echo "<option value='assign_manipulate.php?student_id=$student_id&job_id=$row[0]&status=Rejected'>Rejected</option>";
                                    echo "</select>​
                                </td>
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

