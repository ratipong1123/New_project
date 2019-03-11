<?php ///mysql_query("SET NAMES UTF8");
?>
<? @session_start ();
?>
<!DOCTYPE html>
<html>
<head>
	<title>หน้าหลัก</title>
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
  <li><a href="admin_index.php"  style="color:#000000; font-size: 15px">หน้าแรก</a></li>
  <li><a href="show.php"  style="color:#000000; font-size: 15px">สมาชิก</a></li>
  <li><a href="showhistoryaddmin.php"  style="color:#000000; font-size: 15px">ประวัติการยืม</a></li>
  <li><a href="show2.php"  style="color:#000000; font-size: 15px">ข้อมูลทั้งหมด</a></li>

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
          <div class="panel-heading">ประวัติการยืม&nbsp;
          
          </div>
<div id="collapseTwo" class="panel-collapse in" style="height: auto;">
          <div class="panel-body">
<br>
   
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">เลือกประเภท
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="show12.php">ทั้งหมด</a></li>
      <li><a href="show13.php">รอการยืนยัน</a></li>
      <li><a href="show14.php">ยังไม่คืน</a></li>
    </ul>
  </div>
</div>


<?php
 include"connection/connection.php";

  $sql = "SELECT * FROM data_material Where ID_material"  ;
  $result = mysqli_query($conn,$sql);
  ?>
    <table class="table table-striped">
    <thead>
       <tr align="center">
        <th>รหัสการยืม</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>รหัสพัสดุ</th>
        <th>ชื่อพัสดุ</th>
        <th>จำนวนที่ยืม</th>
        <th>วันที่ยืม</th>
        <th>วันที่คืน</th>
        <th>สถานะ</th>
        <th colspan="2">จัดการข้อมูล</th>
      </tr>
    </thead>
 <?php



    if (isset($_POST['btnsearch'])) 
    {
      $sql = "SELECT * FROM form_petiton,data_material Where form_petiton.ID_material = data_material.ID_material like'%".trim($_POST['txtsearch'])."%'";
    }
    else 
    {
      $sql = "SELECT * FROM form_petiton,data_material Where form_petiton.ID_material = data_material.ID_material  and status ='รอการยืนยัน'";
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
         <td align="center">
         <a href="delete.php?petition_id=<?php echo $row['petition_id']; ?> "onclick="return confirm('คุณต้องการคืนของใช่มั้ย')"><button class="btn btn-success"><i class="glyphicon glyphicon-refresh"></i> </button></a></
        </td>
      </tr>
</div>


       <!-- Modal Delete-->
                    <div id="delete<?php echo $petition_id; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <form method="post">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-Title">ลบข้อมูล</h4>
                          </div>
                          <div class="modal-body">                            
                            <input type="hidden" name="petition_id" value="<?php echo $petition_id; ?>">
                            <div class="alert alert-danger">คุณต้องการจะลบข้อมูล รหัส:<span style="font-size: 20px;color: red;"><?php echo $petition_id;?></span>ใช่หรือไม่<div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" name="delete" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span> YES</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                           </div>
</div>
                      </form>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            






                   <div id="edit<?php echo $petition_id; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #FFCC33;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-Title">แก้ไขข้อมูลสมาชิก</h4>
        </div>
    <div class="modal-body"> 
<div class="col-sm-6"> 
        <form  method="POST">
          <div class="form-group">

         <label for="petition_id">รหัสการยืม:</label>
          <input type="text" class="form-control" name="petition_id" id="petition_id" value="<?php echo $petition_id ;?>">


          <label for="User_name">ชื่อ:</label>
          <input type="text" class="form-control" name="User_name" id="User_name" value="<?php echo $User_name ;?>">


          <label for="User_lname">นามสกุล:</label>
          <input type="text" class="form-control" name="User_lname" id="User_lname" value="<?php echo $User_lname ;?>">


          <label for="ID_material">เลขพัสดุ:</label>
          <input type="text" class="form-control" name="ID_material" id="ID_material" value="<?php echo $ID_material ;?>">

          <label for="Data_lend">วันที่ยืม:</label>
          <input type="text" class="form-control" name="Data_lend" id="Data_lend" value="<?php echo $Data_lend ;?>">

          <label for="Data_sendb">วันที่คืน:</label>
          <input type="text" class="form-control" name="Data_sendb" id="Data_sendb" value="<?php echo $Data_sendb ;?>">

          <label for="status">สถานะ:</label>
          <input type="text" class="form-control" name="status" id="status" value="<?php echo $status ;?>">
          <br>
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

</div>

<?php 
                  } //while
                     
                     //code delete
                    if (isset($_POST['delete'])) {
                      $petition_id = $_POST['petition_id'];
                      $sql = "DELETE FROM form_petiton WHERE petition_id='$petition_id'";
                      if ($conn->query($sql) === TRUE) {
                          echo '<script>window.location.href="showhistoryaddmin.php"</script>';
                      } else {
                          echo "Error deleting record: " . $conn->error;
                      }

                      $conn->close();
                    }

                    if (isset($_POST['edit'])) {
                    $petition_id = $row['petition_id'];
                    $User_name = $row['User_name'];
                    $User_lname = $row['User_lname'];
                    $ID_material = $row['ID_material'];
                    $Data_lend = $row['Data_lend'];
                    $Data_sendb = $row['Data_sendb'];
                    $status = $row['status'];
                      $sql = "UPDATE  form_petiton SET petition_id='$petition_id',User_name='$User_name',User_lname='$User_lname',ID_material='$ID_material',Data_lend='$Data_lend',Data_sendb='$Data_sendb',status='$status'  WHERE petition_id='$petition_id'";
                      if ($conn->query($sql) === TRUE) {
                          echo '<script>window.location.href="showhistoryaddmin.php"</script>';
                      } else {
                          echo "Error deleting record: " . $conn->error;
                      }

                      $conn->close();
                    }


                  }  // if


                ?>

                

    </tbody>
  </table>

</div>
</div>    

      
 <!-- Modal  -->
  <div class="modal fade" id="adddata" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00CCCC;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-Title">เพิ่มข้อมูลวัศดุครุภัณฑ์</h4>
        </div>
    <div class="modal-body"> 
<div class="col-lg-6">  
        <form action="add3.php" method="POST">
          <div class="form-group">
          <label for="ID_material">เลขพัสดุ:</label>
          <input type="text" class="form-control" name="ID_material" id="ID_material" placeholder="เลขพัสดุ">


          <label for="Name_material">ชื่อพัสดุ:</label>
          <input type="text" class="form-control" name="Name_material" id="Name_material" placeholder="ชื่อพัสดุ">


          <label for="Category">ประเภท:</label>
          <input type="text" class="form-control" name="Category" id="Category" placeholder="ประเภท">


          <label for="generation">รุ่น:</label>
          <input type="text" class="form-control" name="generation" id="generation" placeholder="รุ่น">

          <label for="total">จำนวน:</label>
          <input type="text" class="form-control" name="total" id="total" placeholder="จำนวน">

<br>
          <input type="submit" class="btn btn-primary" value="Add">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>

</div>
        </div>
        <div class="modal-footer">
        </div>
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
</form>
</div>
</div>
</div>
</div>
</div>
</tbody>
</center>
</center>
</th>
</tr>
</thead>
</table>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>