<?php
session_start();
$User_name=$_SESSION['User_name'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>ประวัติการยืม</title>
   <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <style>
      body {
        font-family: 'Kanit', sans-serif;
        font-size: 14px;
      }
</style>
</head>
<body>
   <div>
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
    <div class="panel panel-info">
          <div class="panel-heading">ข้อมูลยืมคืน&nbsp;
          </div>
<div id="collapseTwo" class="panel-collapse in" style="height: auto;">
          <div class="panel-body">
<br>
    <div class="text-right">
                <form class="form-inline" action="" method="post">
                    <div class="form-group">
                         <label>ข้อมูลที่ต้องการค้นหา:</label>
                            <input type="text" class="form-control" id="txtsearch" name="txtsearch">
                    </div>
 
                 <button type="submit" class="btn btn-danger" name="btnsearch">ค้นหา</button>
                </form> 
            </div>  
<?php
 include"connection/connection.php";

  $sql = "SELECT * FROM form_petiton Where  ID_User='$ID_User"  ;
  $result = mysqli_query($conn,$sql);
  ?>
    <table class="table table-striped">
    <thead>
       <tr align="center">
        <th>รหัสการยืม</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>เลขพัสดุ</th>
        <th>ชื่อพัสดุ/ครุภัทณ์</th>
        <th>จำนวนที่ยืม</th>
        <th>วันที่ยืม</th>
        <th>วันที่คืน</th>
        <th>สถานะ</th>
        
      </tr>
    </thead>
 <?php



    if (isset($_POST['btnsearch'])) 
   {
   $sql = "SELECT * FROM form_petiton,data_material Where form_petiton.ID_material = data_material.ID_material    petition_id like'%".trim($_POST['txtsearch'])."%'";
      //$sql = "SELECT * FROM form_petiton,data_material,member Where form_petiton.ID_material = data_material.ID_material      petition_id like'%".trim($_POST['txtsearch'])."%'";

    }
    else 
   {
      $sql = "SELECT * FROM form_petiton,data_material Where form_petiton.ID_material=data_material.ID_material AND User_name='$User_name' ";
   }
    




  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $petition_id = $row['petition_id'];
      $User_name = $row['User_name'];
      $User_lname = $row['User_lname'];
      $ID_material = $row['ID_material'];
      $Name_material = $row['Name_material'];
      $total = $row['total'];
      $Data_lend = $row['Data_lend'];
      $Data_sendb = $row['Data_sendb'];
      $status = $row['status'];
    
  

  ?>
    <tbody>
      <tr>
        <td><?php echo "$petition_id";?></td>
        <td><?php echo "$User_name";?></td>
        <td><?php echo "$User_lname";?></td>
        <td><?php echo "$ID_material";?></td>
        <td><?php echo "$Name_material";?></td>
        <td><?php echo "$total";?></td>
        <td><?php echo "$Data_lend";?></td>
        <td><?php echo "$Data_sendb";?></td>
        <td><?php echo "$status";?></td>
      </tr>
</div>


       
            






                   



</div>

<?php 
                  } //while
                } //if
                ?>

                

    </tbody>
  </table>

</div>
</div>    
</div>





<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>