<?php

session_start();
   if(isset($_GET['submit'])) {
        require "../connection.php";

        
        $lang='default';
        $feedback=$_GET['logbook'];
		$student_id=$_GET['student_id'];
        $str_ind_sv_feedback="insert into ind_sv_feedback values('".$student_id."','".$feedback."')";
        mysqli_query($con, $str_ind_sv_feedback);
      

        header('location:show_feedback.php');
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
           <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
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

<div id='right'>
            <form action='' method='get' accept-charset='utf-8'>
                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='2'>SHOW STUDENT LOGBOOK</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class='row'>
                                    <td class='item'>Student ID</td>
                                    <td class='item'><select name='student_id' onchange='x(this)'>
                                        <option value='' > select </option>";
                                        require "../connection.php";
                                        $str1="select id from logbook ";
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
                    $id=$_GET['student_id'];
                    echo "<div class='table_container'>
                    <div class='sub-table-container' >

                        <table class='tc' >
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='8'>Table of Student Marks : $id
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='row'>
                                   
                                    <td class='item'>Title</td>
                                    <td class='item'>Date</td>
                                    <td class='item'>Progress</td>
                                    
                                </tr>";

                                require "../connection.php";
								$str= "Select title, date, progress FROM logbook WHERE id='$id'";
                                $result= mysqli_query($con, $str);
                                $x=1;
                                while($row=mysqli_fetch_array($result)) {
                                    if($x==1) {
                                        $x=0;
                                        echo "<tr   class='row'>
                                        <td class='item alter'>$row[0]</td>
                                        <td class='item alter'>$row[1]<a href='updatemarks.php?id=$id'><button class='edit-button'>Edit</button></a></td>
                                        <td class='item alter'>$row[2]</td>
                                       
                                        
                                        <td class='item alter'><a href='delete_marks.php?file=marks.php&table=marks&pkey_name=Student_ID&key=$id' title='Delete student marks from record'>✖</a></td>
                            
                                       
                                    </tr>";

                                }
                                else {
                                    $x=1;
                                    echo "<tr   class='row'>
                                    <td class='item'>$row[0]</td>
                                    <td class='item'>$row[1]<a href='updatemarks.php?id=$student_id'><button class='edit-button'>Edit</button></a></td>
                                    <td class='item'>$row[2]</td>
                                    
                                    
                                    <td class='item'><a href='delete_marks.php?file=marks.php&table=marks&pkey_name=Student_ID&key=$student_id' title='Delete student marks from record'>✖</a></td>
                                    
                                    ";
                                }

                            }
                            echo "
                        </tr>
						
						
						
                    </tbody>
                </table>

            </div>
			
			
        </div>
	<div class='table_container'>
		<form action='' method='get' accept-charset='utf-8'>
		<div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='2'>SELECT STUDENT ID</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class='row'>
                                    <td class='item'>Student ID</td>
                                    <td class='item'><select name='student_id' onchange='x(this)'>
                                        <option value='' > select </option>";
                                        require "../connection.php";
                                        $str1="select id from user where role='student'";
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
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='6'>CLARITY OF CONTENT : $id</th>
                                </tr>
                            </thead>
		<tbody>
                                <tr class='row'>
                                    <td class='item'>Explanation</td>

                                    <td class='item'>Extremely Poor</td>

                                    <td class='item'>Poor</td>

                                    <td class='item'>Moderate</td>

                                    <td class='item'>Good</td>

                                    <td class='item'>Excellent</td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>CONTENT OF LOGBOOK </td>
                                    <td onclick='z(this)' class='item alter'><input name='logbook' type='radio' value='Extremely Poor' checked></td>
                                    <td onclick='z(this)' class='item alter'><input name='logbook' type='radio' value='Poor'></td>
                                    <td onclick='z(this)' class='item alter'><input name='logbook' type='radio' value='Moderate'></td>
                                    <td onclick='z(this)' class='item alter'><input name='logbook' type='radio' value='Good'></td>
                                    <td onclick='z(this)' class='item alter'><input name='logbook' type='radio' value='Excellent'></td>
                                </tr>

                               

                              
                            </tbody>
                        </table>
                    </div>
                </div>

               
		 <div style='padding-left:75%;'>
                        <input type='submit' name='submit' value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                    </div>
		</div>
</div>
</body>
</html>
		"
		;
		
		
		
		}	
	

?>