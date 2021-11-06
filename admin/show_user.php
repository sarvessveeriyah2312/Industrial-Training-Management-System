<?php

session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}
//Restrict User or Moderator to Access Admin.php page
if($_SESSION['user']['role']=='student'){
 header('location:student/student.php');
}
if($_SESSION['user']['role']=='moderator'){
 header('location:coordinator/coordinator.php');
}
if($_SESSION['user']['role']=='FSupervisor'){
    header('location:faculty supervisor/faculty.php');
}
 if($_SESSION['user']['role']=='ISupervisor'){
header('location:industrial supervisor/admin.php');
 }
echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>MyLI - Internship Management Information System</title>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
    <link rel='stylesheet' href='../style_admin.css'>
    <link rel='stylesheet' href='../table.css'>
    <style>
        body {
            font-family: 'open sans', 'Helvetica Neue', Helvetica, arial, sans-serif;
            background: #EDEFF0;
           
        }
        .table_container table {
            width: 100%;
        }
        td a {
            display:block;
            text-decoration:none;
        }
.tg  {
            box-shadow: 1px 1px 1px 1px #888888;
            border-radius: 14px;
            font-family: 'open sans', 'Helvetica Neue', Helvetica, arial, sans-serif;
            border-collapse:collapse;
            border-width: 2px;
            background-color: #E0E4CC;
        }
        .tg td + th,
        .tg th + td { border-left: 1px solid #1FDA9A; }
        .tg tr + tr { border-top: 1px solid #1FDA9A; }

        .tg td{
            font-size:14px;
            padding:10px 5px;
            padding-left: 10px;
            overflow:hidden;
            word-break:normal;
        }
        .tg th{

            font-size:14px;
            font-weight:normal;
            padding:10px 5px;


            overflow:hidden;
            word-break:normal;
        }

        .num {
            font-family: 'Open Sans Light',Arial, sans-serif;
            font-size: 60px;

            color: #83BF17;
        }
        .stats_head {
            font-size:20px;
        }
        .stats_sub {

        }
        .num_sub {
            float:right;
            padding-left: 10px;
            padding-right: 16px;
            color: #5A6A62;
            font-family: 'Open Sans Bold',Arial, sans-serif;
            font-size: 20px;

        }

        #head_msg {

        text-align: center;
        font-size:20px;
        font-family:'open sans light', 'Helvetica Neue', Helvetica, arial, sans-serif;
    }
    </style>
</head>
<body>
  <nav id='nav'>
    <ul>
        <div id='logo'>
            <b>Administrator</b>
        </div>
        <li><a href='admin.php'>Menu</a></li>
        <li><a href='show_user.php'>Users</a></li>
        <li><a href='announcement.php'>Announcement</a></li>
        <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
    </ul>
</nav>
<div id='main'>
    <div id='left'>
        <div id='sidebar'>
            <div class='menu'>
                <a href='admin.php'>
                <div class='menu menu-item' id='student_tc'>
                    Main Menu
                </div>
                </a>
                <a href='show_user.php'>
                <div class='menu menu-item' id='student_tc' style='box-shadow: inset 0px 1px 3px rgba(0,0,0,0.2), inset 0 0 3px rgba(0,0,0,0.05);
                    color: #212121;
                    margin-top: -1px;
                    padding-top: 13px;
                    background: rgba(0,0,0,0.06);'>
                    Manage User
                </div>
            </a>
            <a href='announcement.php'>
            <div class='menu menu-item' id='student_tc'>
                Manage Announcement
            </div>
        </a>
        </div>
    </div>

</div>
<div id='right'>
    <div class='table_container'>
        <div class='sub-table-container' >


            <table class='tc' >
                <thead>
                    <tr>
                        <th class='tpl-bar-breadcrumbs' colspan='9'>User Record

                            <a href='print/printshow_user.php' title='Print Student record'><button class='edit-button' style='visibility:visible;width: 55px;height: 32px;line-height: 32px;margin: 5px;'>Record</button></a>
                            <a href='user_add.php' title='Add a User to record'><button class='edit-button' style='visibility:visible;width: 43px;height: 32px;line-height: 32px;margin: 5px;'>Add</button></a></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='row'>
                            <td class='item'>ID</td>
                            <td class='item'>Username</td>
                            <td class='item'>Role</td>
                            <td class='item'>Telephone</td>
                            <td class='item'>Email</td>
                            <td class='item'>Delete</td>
                        </tr>";

                        require "../connection.php";
                        $str="select * from user ;";
                        $result=mysqli_query($con, $str);
                        $x=1;
                        while($row=mysqli_fetch_array($result)) {
                            if($x==1) {
                                $x=0;
                                echo "<trclass='row'>
                                <td class='item alter'>$row[0]</td>
                                <td class='item alter'>$row[1]<a href='user_edit.php?id=$row[0]'><button class='edit-button'>Edit</button></a></td>
                                <td class='item alter'>$row[5]</td>
                                <td class='item alter'>$row[3]</td>
                                <td class='item alter'>$row[4]</td>
                                <td class='item alter'><a href='delete_record.php?file=show_user.php&table=user&pkey_name=id&key=$row[0]' title='Delete this student from record'>✖</a></td>
                            </trclass=>";

                        }
                        else {
                            $x=1;
                            echo "<tr   class='row'>
                            <td class='item'>$row[0]</td>
                            <td class='item'>$row[1]<a href='user_edit.php?id=$row[0]'><button class='edit-button' >Edit</button></a></td>
                            <td class='item'>$row[5]</td>
                            <td class='item'>$row[3]</td>
                            <td class='item'>$row[4]</td>
                            <td class='item'><a href='delete_record.php?file=show_user.php&table=user&pkey_name=id&key=$row[0]' title='Delete this student from record'>✖</a></td>
                        </tr>";
                    }
                }
                echo "
            </tbody>
        </table>

    </div>
</div>
</div>
</div>

</div>      
</body>
</html>
";
?>