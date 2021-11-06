<?php
ob_start();
session_start();
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    <title>MyLI - Internship Management Information System</title>
    <link rel='stylesheet' href='../../style_admin.css'>
    <link rel='stylesheet' href='../../table.css'>
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans+light'>
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
        td a {
            display:block;
            text-decoration:none;
        }
    </style>
</head>
<body>

<br>


            
<div id='center'>
    <div class='table_container'>
        <div class='sub-table-container' >


            <table class='tc' >
                <thead>
                    <tr>
                        <th class='tpl-bar-breadcrumbs' colspan='9'>User Record

                            <a title='Back User Record'  href='../show_student.php'><button class='edit-button' style='visibility:visible;width: 43px;height: 32px;line-height: 32px;margin: left;'>Back</button></a>
                            <a title='Print User Record'><button class='edit-button' onclick= window.print() style='visibility:visible;width: 43px;height: 32px;line-height: 32px;margin: right;'>Print</button></a>
                           
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='row'>
                            <td class='item'> ID</td>
                            <td class='item'>First Name</td>
							<td class='item'>Middle Name</td>
							<td class='item'>Last Name</td>
                            <td class='item'>Phone.No</td>
                            <td class='item'>Email</td>
                            <td class='item'>Status</td>
                        </tr>";

                        require "../../connection.php";
                        $str="select * from student_details;";
                        $result=mysqli_query($con, $str);
                        $x=1;
                        while($row=mysqli_fetch_array($result)) {
                            if($x==1) {
                                $x=0;
                                echo "<tr   class='row'>
                                <td class='item alter'>$row[0]</td>
                                <td class='item alter'>$row[1]</td>
                                <td class='item alter'>$row[3]</td>
                                <td class='item alter'>$row[4]</td>
                                <td class='item alter'>$row[5]</td>
                                <td class='item alter'>$row[6]</td>
                                
                            </tr>";

                        }
                        else {
                            $x=1;
                            echo "<tr   class='row'>
                            <td class='item'>$row[0]</td>
                            <td class='item'>$row[1]</td>
                            <td class='item'>$row[3]</td>
                            <td class='item'>$row[4]</td>
                            <td class='item'>$row[5]</td>
							<td class='item'>$row[6]</td>
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
</body>
</html>";
?>
