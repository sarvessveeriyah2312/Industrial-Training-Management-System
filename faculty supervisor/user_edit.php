<?php

session_start(); if(isset($_GET['submit'])) {
    require "../connection.php";
    $str_user="update student_details set username='".$_GET['username']."', password='".$_GET['password']."',  email='".$_GET['email']."', telephone='".$_GET['telephone']."', role='".$_GET['role']."' where id='".$_GET['id']."'";
    mysqli_query($con, $str_user);
    header('location:show_user.php');
}

echo "
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
                if (el.type == 'radio') el. = true;

        }
    </script>
    <style>
        body {
            font-family: 'open sans';
            background: #EDEFF0;
        }

    </style>
</head>

<body>
    <nav id='nav'>
        <ul style='list-style: none; display: inline'>
            <div id='logo' style='font-weight: bold'>
                Administrator
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
                        <div class='menu menu-item' id='student_tc'>
                            Manage User
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
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>ACCOUNT INFORMATION</th>
                                </tr>
                            </thead>";

                            $id=$_GET['student_id'];
                            require '../connection.php';
                            $str="select * from student_details where STUDENT_ID='$id'";
                            $result=mysqli_query($con, $str);
                            $row=mysqli_fetch_array($result);

                            echo "
                            <tbody>
                                <tr class='row'>
                                    <td class='item alter'>ID</td>

                                    <td class='item alter'><input name='id' placeholder='$row[0]' type='text' value='$row[0]' readonly></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Username</td>

                                    <td class='item'><input name='username' placeholder='' type='text' value='$row[1]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Password</td>

                                    <td class='item alter'><input name='password' placeholder='' type='password' value='$row[2]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Telephone</td>

                                    <td class='item alter'><input name='telephone' placeholder='' type='text' value='$row[3]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Email</td>

                                    <td class='item'><input name='email' placeholder='' type='text' value='$row[4]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Role</td>
                                    <td class='item alter'>
                                        <select name='role'>
                                            <option value='$row[5]' >$row[5]</option>
                                            
                                        </select>
                                        <div style='color:grey'>*INFO:System Role Is Fixed.</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                     <br>
                         <div style='padding-left:75%;'>
                         <input type='submit' name='submit'  value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                         <input type='button' name='print'  value='Print' class='edit-button' onclick=window.print() style='margin-right: 80px;line-height:40px;width:80px; bottom: 50%;'>           
                     </div>
         </form>
    </div>
    </div>
</body>
</html>";
?>
