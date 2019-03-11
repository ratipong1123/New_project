<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>สมาชิก</title>
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <style>
      body {
        font-family: 'Kanit', sans-serif;
        font-size: 15px;
      }
</style>
</head>
<body>
<div >
<div class="container">
  <div class="tada animated">
  </div>
</div>


  <nav class="navbar navbar-default" style="background-color: #0099FF"> 
  <div class="navber-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
</div>
<div class="wrap">
<div class="navbar-header"><img src="img/2.png" height="50" width="50"></div>
<div class="navbar-collapse">
  <ul class="nav navbar-nav navbar-right">
  <li><a href="user_index.php"  style="color:#000000; font-size: 15px">หน้าแรก</a></li>
  <li><a href="showhistory.php"  style="color:#000000; font-size: 15px">ประวัติการยืม</a></li>
  <li><a href="showuser.php"  style="color:#000000; font-size: 15px">ข้อมูลทั้งหมด</a></li>

  <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="color:#000000">ช่องทางการติดต่อ</span><span class="caret"></span></a>
    <ul class="dropdown-menu" >
        <li><a href="https://www.facebook.com/First.KKM" style="font-size: 20px;" class="fa fa-facebook-square">&nbsp;Facebook</a></li>
        <li><a href="https://www.instagram.com/?hl=th" style="font-size: 20px;" class="fa fa-instagram">&nbsp;instagram</a></li>
    </ul>
  </li>
  <li><a href="index.php"  style="color:#000000; font-size: 15px">ออกจากระบบ</a></li>
</div>
</div>
  </ul>
</div>
</div>
</div>
</nav>



<div class="container">
  <div class="row">
      <div class="col-sm-12">
          <div class="panel">     
                  <div class="panel-body">
<div id="mycarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li class="active" data-target="#mycarousel" data-slide-to="0" class="active"></li>
  <li class="active" data-target="#mycarousel" data-slide-to="1"></li>
  <li class="active" data-target="#mycarousel" data-slide-to="2"></li>
</ol>


  <div class="carousel-inner" role="listbok">
    <div class="item active">
      <img src="img/1.jpg" width="1100" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="img/1.jpg">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>

    <div class="item">
      <img src="img/1.jpg">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<div class="container">
  <div class="col-md-8">
    <span class="lead">
      <h1>ระบบจัดเก็บวัศดุครุภัทณ์ คืออะไร</h1>
      <p>
          &nbsp;&nbsp;ระบบที่ช่วยในการเก็บข้อมูลวัศดุครุภัทณ์ในแผนก ในรูปแบบของระบบออนไลน์ผ่านทางอินเทอร์เน็ต โดย ระบบจัดเก็บวัศดุครุภัทณ์ จะเป็นการเก็บรวบรวมจำนวนของ วัศดุและครุภัทณ์ ต่างๆในแผนก ผ่านสื่ออิเล็กทรอนิกส์ ข้อมูลและจำนวนต่างๆ มาจาก จำนวนอุปกรณ์ จริงๆในแผนก เพื่อเก็บไว้เป็นข้อมูลสำหรับการตรวจสอบจำนวนหรือตรวจสอบได้ว่าใครคืนหรือยังไม่คืน โดยใช้เทคนิคการนำเสนอในรูปแบบเว็บไซต์</p>
          <h1>ข้อดีของ ระบบจัดเก็บวัศดุครุภัทณ์</h1>
<p>1. ลดการใช้ทรัพยากรสานักงาน เช่น กระดาษ หมึกพิมพ์ เป็นต้น</p>
<p>2. สะดวกต่อการบริหารจัดการ สามารถดูข้อมูลผ่านทางอินเตอร์เน็ตได้</p>
<p>3. สะดวกสาหรับผู้ควบคุมเว็บไซต์ สามารถดูได้ว่าใครคืน ไม่คืน</p>



<br>
</span>
</div>
<div class="col-md-4">
        <div class="alert alert-success" role="alert" style="background-color: #ffffff; color: #000;">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #00CCCC;">
                    <h3 class="panel-title">
                        <h3 style="color: #000000">ข้อมูลผู้ใช้</h3>
                    </h3>
                </div>
                
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #00CCCC;">
                    <h3 class="panel-title" style="color: #000000">ยินดีต้อนรับ</h3>
                </div>
               <div class="panel-body">
          <p>คุณ&nbsp;<?php echo $_SESSION['User_name']; ?>&nbsp;&nbsp;สถานะ&nbsp;<?php echo $_SESSION['status'] ?></p>
          </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #00CCCC;">
                    <h3 class="panel-title" style="color: #000000">แก้ไขประวัติส่วนตัว</h3>
                </div>
               <div class="panel-body">
          <p>แก้ไขประวัติส่วนตัวคลิกที่นี้&nbsp;<a href="#edit<?php echo $ID_User;?>" data-toggle="modal"><button  type='button' Title="แก้ไข" class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<?php
include "connection/connection.php";
$sql   = "SELECT * FROM member WHERE ID_User='$ID_User'";
$query = mysqli_query($conn,$sql);


                    if (isset($_POST['edit'])) {
                      $ID_User = $_POST['ID_User'];
                      $Title=$_POST['Title'];
                      $User_name=$_POST['User_name'];
                      $User_lname = $_POST['User_lname'];
                      $Address = $_POST['Address'];
                      $Tel = $_POST['Tel'];
                      $Email = $_POST['Email'];
                      $Username = $_POST['Username'];
                      $Password = $_POST['Password'];
                      $status = $_POST['status']; 
                      $sql = "UPDATE  member SET ID_User='$ID_User',Title='$Title',User_name='$User_name',User_lname='$User_lname',Address='$Address',Tel='$Tel',Email='$Email',Username='$Username',Password='$Password',status='$status'  WHERE ID_User='$ID_User'";
                      if ($conn->query($sql) === TRUE) {
                          echo '<script>window.location.href="user_index.php"</script>';
                      } else {
                          echo "Error deleting record: " . $conn->error;
                      }

                      $conn->close();
                    }
?>

<div id="edit<?php echo $ID_User; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                     <!-- Modal content-->
                    <div class="modal-dialog">
                     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00CCCC;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-Title">แก้ไขข้อมูลสมาชิก</h4>
        </div>
    <div class="modal-body"> 
<div class="col-sm-6"> 
        <form  method="POST">
          <div class="form-group">

          <label for="ID_User">เลขประจำตัว:</label>
          <input type="text" name="ID_User" id="ID_User" class="form-control" value="<?php echo $_SESSION['ID_User'];?>" >


            <label for="Title">คำนำหน้า:</label>
            <select class="form-control" name="Title">
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
          </div>

          <label for="User_name">ชื่อ:</label>
          <input type="text" name="User_name" id="User_name" class="form-control" value="<?php echo $_SESSION['User_name'];?>">


          <label for="User_lname">นามสกุล:</label>
           <input type="text" name="User_lname" id="User_lname" class="form-control" value="<?php echo $_SESSION['User_lname'];?>">


          <label for="Address">ที่อยู่:</label>
          <input type="text" name="Address" id="Address" class="form-control" value="<?php echo $_SESSION['Address'];?>">

</div>
<div class="col-lg-6">
          <label for="Tel">เบอร์โทร:</label>
          <input type="text" name="Tel" id="Tel" class="form-control" value="<?php echo $_SESSION['Tel'];?>"></td>

    
          <label for="Email">Email:</label>
          <input type="text" name="Email" id="Email" class="form-control" value="<?php echo $_SESSION['Email'];?>">



          <label for="Username">ชื่อผู้ใช้:</label>
          <input type="text" name="Username" id="Username" class="form-control" value="<?php echo $_SESSION['Username'];?>">


          <label for="Password">รหัสผ่าน:</label>
          <input type="Password" class="form-control" name="Password" id="Password" value="<?php echo $_SESSION['Password'] ;?>">


          
          <input type="submit" class="btn btn-primary" value="edit" name="edit">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>

</div>
        </div>
        <div class="modal-footer">
        </div>
      </div>
      
    </div>
  </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
<div class="modal-footer">
<p align="center">แผนกวิชาเทคโนโลยีสารสนเทศ วิทยาลัยเทคนิคชัยภูมิ</p>
<p align="center">วิทยาลัยเทคนิคชัยภูมิ</p>
<p align="center">เลขที่ 260 ตำบลในเมือง อำเภอเมือง จังหวัดชัยภูมิ 36000</p>
<p align="center">โทรศัทพ์ 044-812075-6 Fax 044-811536</p>
<p align="center">e-mail: chaiyaphumtechnicalcollege@gmail.com</p>
</div>






<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>