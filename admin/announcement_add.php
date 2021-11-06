<?php

session_start();
if(isset($_GET['submit'])) {
    require "../connection.php";
    $str="insert into announcement values('".$_GET['announcement_id']."', '".$_GET['announcement_date']."', '".$_GET['announcement_time']."', '".$_GET['announcement_detail']."', '".$_GET['notes']."');";
    // echo $str;
    mysqli_query($con, $str);
    header('location:announcement.php');
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
</head>

<body>
    <nav id='nav'>
        <ul style='list-style: none; display: inline'>
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
                    <div class='menu menu-item' id='student_tc'>
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
            <form action='' method='get' accept-charset='utf-8'>
                <div class='table_container'>
                    <div class='sub-table-container'>
                        <table class='tc'>
                            <thead>
                                <tr>
                                    <th class='tpl-bar-breadcrumbs' colspan='3'>ANNOUNCEMENT INFORMATION</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class='row'>
                                    <td class='item alter'>Announcement ID</td>

                                    <td class='item alter'><input name='announcement_id' placeholder='' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Announcement Date</td>

                                    <td class='item'><input name='announcement_date' placeholder='' type='date' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Announcement Time</td>

                                    <td class='item alter'><input name='announcement_time' placeholder='' type='time' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Announcement Detail</td>

                                    <td class='item'><input name='announcement_detail' placeholder='' type='text' required value=''></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Notes</td>

                                    <td class='item alter'><input name='notes' placeholder='' type='text' value=''></td>
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
    </div>
</body>
</html>";

?>
