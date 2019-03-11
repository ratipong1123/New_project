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
          <div class="panel-heading">ข้อมูลวัศดุครุภัณฑ์&nbsp;
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

            <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">เลือกประเภท
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="show7.php">ทุกประเภท</a></li>
      <li><a href="show8.php">เครื่องคอมและจอภาพ</a></li>
      <li><a href="show9.php">เครื่องฉายโปรเจคเตอร์</a></li>
      <li><a href="show10.php">สำนักงาน</a></li>
      <li><a href="show11.php">ไฟฟ้าและวิทยุ</a></li>
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
        <th>เลขพัสดุ</th>
        <th>ชื่อพัสดุ/ครุภัทณฺ</th>
        <th>ประเภท</th>
        <th>รุ่น</th>
        <th>จำนวน</th>
        <th>ยืม</th>
      </tr>
    </thead>
 <?php



    if (isset($_POST['btnsearch'])) 
    {
      $sql = "SELECT * FROM data_material  WHERE ID_material like'%".trim($_POST['txtsearch'])."%'";
    }
    else 
    {
      $sql = "SELECT * FROM data_material  WHERE Category ='ไฟฟ้าและวิทยุ' order by ID_material";
    }
    



  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $ID_material = $row['ID_material'];
      $Name_material = $row['Name_material'];
      $Category = $row['Category'];
      $generation = $row['generation'];
      $total = $row['total'];
    
  

  ?>
    <tbody>
      <tr>
        <td><?php echo "$ID_material";?></td>
        <td><?php echo "$Name_material";?></td>
        <td><?php echo "$Category";?></td>
        <td><?php echo "$generation";?></td>
        <td><?php echo "$total";?></td>
        <td> 
        <a href="#edit<?php echo $ID_material;?>" data-toggle="modal"><button  type='button' Title="ยืมพัสดุ" class='btn btn btn-success'>ยืมวัศดุ<span class="glyphicon-plus"></span></button></td>
      </tr>
</div>


        






                   <div id="edit<?php echo $ID_material; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                     <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00CCCC;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-Title">ยืมวัสดุครุภัณฑ์</h4>
        </div>
    <div class="modal-body"> 
<div class="col-sm-6"> 
        <form action="add4.php" method="POST">
          <div class="form-group">
            <label for="User_name">ชื่อ:</label>
          <input type="text" class="form-control" name="User_name" id="User_name" value="<?php echo $_SESSION['User_name']; ?>">

          <label for="User_lname">นามสกุล:</label>
          <input type="text" class="form-control" name="User_lname" id="User_lname" value="<?php echo $_SESSION['User_lname']; ?>">

         <label for="ID_material">เลขพัสดุ:</label>
          <input type="text" class="form-control" name="ID_material" id="ID_material" value="<?php echo $ID_material ;?>">

          <label for="total">จำนวนที่ต้องการยืม:</label>
          <input type="text" class="form-control" name="total" id="total" placeholder="ใส่จำนวนที่ต้องการยืม">

          <label for="total">วันที่ยืม:</label>
          <input type="date" class="form-control" id="Data_lend" placeholder="วันที่" name="Data_lend">

          <label for="total">วันที่คืน:</label>
          <input type="date" class="form-control" id="Data_sendb" placeholder="วันที่" name="Data_sendb">
         
          
          <br>
          <input type="submit" class="btn btn-primary" value="ยืม">
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
                      $ID_material = $_POST['ID_material'];
                      $sql = "DELETE FROM data_material WHERE ID_material='$ID_material'";
                      if ($conn->query($sql) === TRUE) {
                          echo '<script>window.location.href="show2.php"</script>';
                      } else {
                          echo "Error deleting record: " . $conn->error;
                      }

                      $conn->close();
                    }

                    if (isset($_POST['edit'])) {
                      $ID_material = $_POST['ID_material'];
                      $Name_material = $_POST['Name_material'];
                      $Category = $_POST['Category'];
                      $generation = $_POST['generation'];
                      $total = $_POST['total'];
                      $sql = "UPDATE  data_material SET ID_material='$ID_material',Name_material='$Name_material',Category='$Category',generation='$generation',total='$total'  WHERE ID_material='$ID_material'";
                      if ($conn->query($sql) === TRUE) {
                          echo '<script>window.location.href="show2.php"</script>';
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
          <h4 class="modal-Title">ยืมวัสดุครุภัณฑ์</h4>
        </div>
    <div class="modal-body"> 
<div class="col-lg-6">  
        <form action="add4.php" method="POST">
          <div class="form-group">
             

            <label for="User_name">ชื่อ:</label>
          <input type="text" class="form-control" name="User_name" id="User_name" placeholder="ชื่อ">

          <label for="User_lname">นามสกุล:</label>
          <input type="text" class="form-control" name="User_lname" id="User_lname" placeholder="นามสกุล">

          <label for="ID_material">เลขพัสดุ:</label>
          <select name="ID_material"><option selected>-----เลือกหมายเลขวัสดุ-----</option>
      <option value="472-001-010">คอมพิวเตอร์อินเตอร์เน็ตพร้อมโต๊ะวาง</option>
      <option value="491-002">เครื่องฉายโปรเจคเตอร์ขนาดความสว่าง 2,000</option>
      <option value="501-030">คอมพิวเตอร์สำหรับการเรียน</option>
      <option value="501-031">คอมพิวเตอร์สำหรับการเรียน</option>
      <option value="501-010">เครื่องฉายโปรเจคเตอร์</option>
      <option value="472-001-010">คอมพิวเตอร์พ้อมโต๊ะวางและเก้าอี้</option>
      <option value="541-001-002">เครื่องปรับอากาศ</option>
      <option value="551-006-007">เครื่องฉายโปรเจคเตอร์</option>
      <option value="551-001">Sever HP MI 110G7 E3-1220 </option>
      <option value="551-002">Pinter laser</option>
      <option value="512-001-003">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-005-007">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-009">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-013">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-018-021">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-023">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-025-026">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-031">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-034-036">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-043">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-057-060">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-067">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-069">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-075-076">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-080">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-085">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="512-093-098">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="582-043ถึง52">เครื่องคอมพิวเตอร์อินเตอร์เน็ต</option>
      <option value="602-001 ถึง 002">เครื่องปรับอากาศ 30,000 BPU</option>
      <option value="602-001 ถึง 003">เครื่องฉายโปรเจคเตอร์ขนาด 3,200 ANS</option>
      <option value="612-001">ตูเก็บเอกสาร</option>
      <option value="503-006-008">เครื่องคอมพิวเตอร์สำหรับประมวลผล</option>

      </select>


          <label for="total">จำนวนที่ต้องการยืม:</label>
          <select name="total"><option selected>-----เลือกจำนวนที่ต้องการยืม-----</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      </select>
<br>

   <tr valign="baseline">
    <td nowrap="nowrap" align="right">วันที่ยืม:</td>
       <td><input type="date" class="form-control" id="Data_lend" placeholder="วันที่" name="Data_lend"></td>
   </tr>

   <tr valign="baseline">
    <td nowrap="nowrap" align="right">วันที่คืน:</td>
       <td><input type="date" class="form-control" id="Data_sendb" placeholder="วันที่" name="Data_sendb"></td>
   </tr>

<br>
          <input type="submit" class="btn btn-primary" value="ยืม">
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