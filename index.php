<?php


session_start();
$conn=mysqli_connect('localhost','root','','myli');
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT*FROM user WHERE username='$username' AND password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
      $_SESSION['user']=array(
   'username'=>$row['username'],
   'password'=>$row['password'],
   'role'=>$row['role']
   );
   $role=$_SESSION['user']['role'];
   //Redirecting User Based on Role
    switch($role){
  case 'student':
  header('location:student/student.php');
  break;
  case 'coordinator':
  header('location:coordinator/coordinator.php');
  break;
  case 'FSupervisor':
  header('location:faculty supervisor/faculty.php');
  break;
  case 'ISupervisor':
  header('location:industrial supervisor/industrial.php');
  break;
  case 'admin':
  header('location:admin/admin.php');
  break;
 }
 }
}
}
?>
<html>
<head>
	<title>MyLI -  Login Page</title>
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+sans+light|Open+sans'>
	<style>
		body, html {
			height: 100%;
			margin: 0;
			padding: 0;
			background-image:url(images/image1.webp)
			
			
		}
		#main_table {
		height: 100%;
		width: 100%;
	}
	

		#welcome_container {
	font-family: 'Open Sans Light', 'Helvetica Neue', Helvetica, arial, sans-serif;
	font-size: 360%;
	color: #000000;
	display: inline-block;
	text-align: left;
}
		#main_table b {
-webkit-text-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 3px 10px rgba(0, 0, 0, 0.3);
text-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 3px 10px rgba(0, 0, 0, 0.3);
}

</style>
<link rel='stylesheet' href='style.css'>

</head>
<div id='login_container'>
					<section class='container' style='float: right'>
 <div class='login'>
 <h1>MyLI-Internship Management System</h1>
<form method="POST" action="">
<table>
   <tr>
  <td><input type='text' required name='username'  placeholder='Username' autofocus=''></td>
   </tr>
   <tr>
  <td><input type='password' required name='password' placeholder='Password'></td>
   </tr>
   <tr>
     
  <td><p class='submit'><input type='submit' name='login' value='Login'></p></td>
  <br>						
   </tr>
</table>
								<p style='color:#050505'>QR Code for Mobile Login</p> 
								<a href='scanhere.php'>Scan Here!</a>
</form>
<?php if(isset($error)) echo "<font color='red'>".$error;"</font>" ?>
</div>
</div>
</html>