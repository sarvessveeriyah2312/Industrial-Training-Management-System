<?php

session_start();
                        if(isset($_GET['submit'])) {
                            require "../connection.php";

                            /* inserting into student_details */
                            $str_user="update logbook set date='".$_GET['date']."', title='".$_GET['title']."',  progress='".$_GET['progress']."' where id='".$_GET['id']."'";
    
                            mysqli_query($con, $str_user);
                            header('location:logbook_show.php');
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
                Student
            </div>
            <li><a href='student.php'>Menu</a></li>
        <li><a href='logbook_show.php'>Logbook </a></li>
        <li><a href='job_opening_show.php'>Job Openings</a></li>
        <li align='right' ><a href='../logout.php' style='color:red;'>logout</a></li>
    </ul>
        </ul>
    </nav>

    <div id='main'>
        <div id='left'>
            <div id='sidebar'>
                <div class='menu'>
                    <a href='student.php'>
                        <div class='menu menu-item' id='student_tc'>
                            Main Menu
                        </div>
                    </a>
                    <a href='logbook_show.php'>
                        <div class='menu menu-item' id='student_tc'>
                           Show Logbook
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

                            $id=$_GET['id'];
                            require '../connection.php';
                            $str="select * from logbook where id='$id'";
                            $result=mysqli_query($con, $str);
                            $row=mysqli_fetch_array($result);

                            echo "
                            <tbody>
                                <tr class='row'>
                                    <td class='item alter'>ID</td>

                                    <td class='item alter'><input name='id' placeholder='$row[0]' type='text' value='$row[0]' readonly></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item'>Title</td>

                                    <td class='item'><input name='title' placeholder='' type='text' value='$row[1]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Date</td>

                                    <td class='item alter'><input name='date' placeholder='' type='date' value='$row[2]'></td>
                                </tr>

                                <tr class='row'>
                                    <td class='item alter'>Progress</td>

                                    <td class='item alter'><input name='progress' placeholder='' type='text' value='$row[3]'></td>
                                </tr>

                               

                                
                            </tbody>
                        </table>
                    </div>
                </div>
                     <br>
                         <div style='padding-left:75%;'>
                         <input type='submit' name='submit'  value='Submit' class='edit-button' style='float:left;line-height:40px;width:80px;'>
                     </div>

         </form>
    </div>
    </div>
</body>
</html>";


                        ?>
