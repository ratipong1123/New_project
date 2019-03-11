<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
 	font-family: "Roboto", sans-serif;
  	outline: 0;
  	background: #f2f2f2;
  	width: 100%;
  	border: 0;
  	margin: 0 0 15px;
  	padding: 15px;
  	box-sizing: border-box;
  	font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
    </style>

	</head>
	<meta charset="utf-8">
	<body background="images/ww.jpg">
		<header>
			<center><img src="images/b2.png" height="150" width="700"></center>
		</header>


  <?php
include('connection/connection.php');
if(isset($_POST['btnlogin'])){
// mysqli_select_db($database_connections,$conn);
  $sql="SELECT * FROM member WHERE Username='".trim($_POST['txtuser'])."' AND Password='".trim($_POST['txtpass'])."' ";
  $obj=mysqli_query($conn,$sql);
  $rs=mysqli_fetch_array($obj);

  if($rs){
    $_SESSION['User_name']=$rs['User_name'];
    $_SESSION['status']=$rs['status'];
    $_SESSION['ID_User']=$rs['ID_User'];
    $_SESSION['Username']=$rs['Username'];
    $_SESSION['Title']=$rs['Title'];
    $_SESSION['User_lname']=$rs['User_lname'];
    $_SESSION['Address']=$rs['Address'];
    $_SESSION['Tel']=$rs['Tel'];
    $_SESSION['Email']=$rs['Email'];
    $_SESSION['Password']=$rs['Password'];


    if($rs['status']=='User'){
      header('location:user_index.php');
    }else if($rs['status']=='Admin'){
      header('location:admin_index.php');
    }
  }else{
    echo "<script type=\"text/javascript\">alert('Username หรือ Password ผิดพลาด');</script>";
  }
}
?>
<div class="login-page">
  <div class="form">
    <h2>Sign in</h2>
    <form class="Login-form" id="form1" name="form1" method="post" action="" >
      <input type="text" name="txtuser" id="txtuser" placeholder="Username" class="form-control" />
      <input type="password" name="txtpass" id="txtpass" placeholder="Password" class="form-control" />
      <input class="btn btn-info" type="submit" name="btnlogin" id="btnlogin" value="เข้าสู่ระบบ" />
      <p class="message">กรุณาสมัครสมาชิกก่อนเข้าสู่ระบบ <a href="#reg">สมัครสมาชิก</a></p>
    </form>
  </div>
</div>

  </div>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>