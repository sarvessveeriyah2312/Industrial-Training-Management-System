<?php

session_start();
if(isset($_GET['submit'])) {
    require "../connection.php";
    $str_user="insert into ind_sv_evaluate values('".$_GET['student_id']."', '".$_GET['daily_marks']."', '".$_GET['weekly_marks']."','".$_GET['logbook_marks']."', '".$_GET['presentation_marks']."', '".$_GET['total_marks']."')";
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
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                   Evaluate Student Progress
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

                    <div class='menu'>
                    <a href='announcement.php'>
                    <div class='menu menu-item' id='student_tc'>
                      Announcement
                    </div>
                </a>
            </div>
            
            </div>
           </a>
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
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>STUDENT MARKS</th>
                                </tr>
                            </thead>

                            <tbody>
                              
                                <tr class='row'>
                                    <td class='item alter'>Student ID</td>

                                    <td class='item alter'><input name='student_id' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Daily marks</td>

                                    <td class='item'><input name='daily_marks' type='text' onchange='add()' id='dm' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Weekly marks</td>

                                    <td class='item alter'><input name='weekly_marks' type='text' onchange='add()' id='wm' value=''></td>
                                </tr>

                               

                                <tr class='row'>
                                <td class='item'>Logbook Marks</td>

                                <td class='item'><input name='logbook_marks' type='text' onchange='add()' id='lm' required value=''></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Presentation Marks</td>

                                <td class='item'><input name='presentation_marks' type='text'onchange='add()' id='pm' required value=''></td>
                                </tr>

                                <tr class='row'>
                                <td class='item'>Total Marks </td>

                                <td class='item'><input name='total_marks'  name='total' id='total' value=''></td>
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
            var a,b,c,d,e;
            a=Number(document.getElementById('dm').value);
            b=Number(document.getElementById('wm').value);
            c=Number(document.getElementById('lm').value);
            d=Number(document.getElementById('pm').value);
            
            e=( a + b + c + d )/(4);
            document.getElementById('total').value= e;
            }
        </script>
        </div>
    </body>
    </html>";
    ?>
