<?php

session_start();
if(isset($_GET['submit'])) {
        require "../connection.php";
        $str_user="insert into user values('".$_GET['user_id']."', '".$_GET['username']."', '".$_GET['password']."', '".$_GET['telephone']."', '".$_GET['email']."', '".$_GET['role']."')";
        mysqli_query($con, $str_user);
        header('location:show_user.php');}
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
            <li><a href='show_user.php'>User</a></li>
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
                <a href='industrial.php'>
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                    Main Menu
                </div>
            </a>
        </div>
		<div class='menu'>
                <a href='show_user.php'>
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
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
                    <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
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
                            </thead>

                            <tbody>
                              
                                <tr class='row'>
                                    <td class='item alter'>ID</td>

                                    <td class='item alter'><input name='user_id' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Username</td>

                                    <td class='item'><input name='username' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Password</td>

                                    <td class='item alter'><input name='password' type='password'  value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Email</td>

                                    <td class='item alter'><input name='email' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Telephone</td>

                                    <td class='item'><input name='telephone' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Role</td>

                                    <td class='item alter'>
                                        <select name='role' >
                                            <option value='admin' >Administrator</option>
                                            <option value='student'>Student</option>
                                            <option value='coordinator' >Faculty Coordinator</option>
                                            <option value='FSupervisor' >Faculty Supervisor</option>
                                            <option value='ISupervisor' >Industrial Supervisor</option>
                                        </select>
                                    </td>
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
