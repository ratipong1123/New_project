<!DOCTYPE html>
<html>
<head>
	<title>สมาชิก</title>
	 <link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>

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
  <li><a href="admin_index.php"  style="color:#000000; font-size: 15px">หน้าแรก</a></li>
  <li><a href="show.php"  style="color:#000000; font-size: 15px">สมาชิก</a></li>
  <li><a href="#"  style="color:#000000; font-size: 15px">ประวัติการยืม</a></li>
  <li><a href="#""  style="color:#000000; font-size: 15px">ข้อมูลทั้งหมด</a></li>

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
      		<div class="panel-heading">ข้อมูลสมาชิก<a data-toggle="collapse" data-parent="#adccordion" href="#collapseTwo"><button type="button" class="btn btn-warning">admin<span class="badge"><?php echo $a ;?></span></button></a>&nbsp;
      		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addmember">Add<span class="glyphicon-plus"></span></button></button>
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
  $sql = "SELECT * FROM member Where status"  ;
  $result = mysqli_query($conn,$sql);
  ?>
    <table class="table table-striped">
    <thead>
       <tr align="center">
        <th>เลขพัศดุ</th>
        <th>ชื่อพัศดุ</th>
        <th>ประเภท</th>
        <th>รุ่น</th>
        <th>จำนวน</th>
        <th colspan="2"><center>จัดการข้อมูล<center></th>
      </tr>
    </thead>
 <?php



    if (isset($_POST['btnsearch'])) 
    {
      $sql = "SELECT * FROM data_material  WHERE ID_material like'%".trim($_POST['txtsearch'])."%'";
    }
    else 
    {
      $sql = "SELECT * FROM data_material WHERE ID_material";
    }
    



	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $ID_material = $row['ID_material'];
      $Name_material = $row['Name_material'];
      $Category = $row['Category'];
      $generation = $row['generation'];
      $Number = $row['Number'];
	?>
    <tbody>
    	<tr>
    		<td><?php echo "$ID_material";?></td>
        <td><?php echo "$Name_material";?></td>
        <td><?php echo "$Category";?></td>
        <td><?php echo "$generation";?></td>
        <td><?php echo "$Number";?></td>
    		<td align="center">
         <a href="#edit<?php echo $ID_User;?>" data-toggle="modal"><button  type='button' Title="แก้ไข" class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
         <a href="#delete<?php echo $ID_User; ?>" data-toggle="modal"><button type='button' Title="ลบ" class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></a>
        </td>
    	</tr>
</div>


        <!-- Modal Delete-->
                    <div id="delete<?php echo $ID_User; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <form method="post">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-Title">ลบข้อมูล</h4>
                          </div>
                          <div class="modal-body">                            
                            <input type="hidden" name="ID_User" value="<?php echo $ID_User; ?>">
                            <div class="alert alert-danger">คุณต้องการจะลบข้อมูล คุณ:<span style="font-size: 20px;color: red;"><?php echo $User_name;?></span>ใช่หรือไม่<div>
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
            






                   <div id="edit<?php echo $ID_User; ?>" class="modal fade" role="dialog">
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

          <label for="ID_User">เลขประจำตัว:</label>
          <input type="text" class="form-control" name="ID_User" id="ID_User" value="<?php echo $ID_User ;?>">


            <label for="Title">คำนำหน้า:</label>
            <select class="form-control" name="Title">
              <option value="นาย">นาย</option>
              <option value="นาง">นาง</option>
              <option value="นางสาว">นางสาว</option>
            </select>
          </div>

          <label for="User_name">ชื่อ:</label>
          <input type="text" class="form-control" name="User_name" id="User_name" value="<?php echo $User_name ;?>">


          <label for="User_lname">นามสกุล:</label>
          <input type="text" class="form-control" name="User_lname" id="User_lname" value="<?php echo $User_lname ;?>">


          <label for="Address">ที่อยู่:</label>
          <input type="text" class="form-control" name="Address" id="Address" value="<?php echo $Address ;?>">

</div>
<div class="col-lg-6">
          <label for="Tel">เบอร์โทร:</label>
          <input type="text" class="form-control" name="Tel" id="Tel" value="<?php echo $Tel ;?>">

    
          <label for="Email">Email:</label>
          <input type="text" class="form-control" name="Email" id="Email" value="<?php echo $Email ;?>">



          <label for="Username">ชื่อผู้ใช้:</label>
          <input type="text" class="form-control" name="Username" id="Username" value="<?php echo $Username ;?>">


          <label for="Password">รหัสผ่าน:</label>
          <input type="Password" class="form-control" name="Password" id="Password" value="<?php echo $Password ;?>">


          <div class="form-group">
            <label for="status">สถานะ:</label>
            <select class="form-control" name="status">
              <option value="Admin">Admin</option>
              <option value="User">User</option>
            </select>
          </div>
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
                      $ID_User = $_POST['ID_User'];
                      $sql = "DELETE FROM member WHERE ID_User='$ID_User'";
                      if ($conn->query($sql) === TRUE) {
                          echo '<script>window.location.href="member.php"</script>';
                      } else {
                          echo "Error deleting record: " . $conn->error;
                      }

                      $conn->close();
                    }

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
                          echo '<script>window.location.href="show.php"</script>';
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
  <div class="modal fade" id="addmember" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #00CCCC;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-Title">เพิ่มข้อมูลสมาชิก</h4>
        </div>
		<div class="modal-body"> 
<div class="col-lg-6">  
			  <form action="add2.php" method="POST">
			    <div class="form-group">
			      <label for="Title">คำนำหน้า:</label>
			      <select class="form-control" name="Title">
			      	<option value="นาย">นาย</option>
			      	<option value="นาง">นาง</option>
			      	<option value="นางสาว">นางสาว</option>
			      </select>
			    </div>

			    <label for="User_name">ชื่อ:</label>
			    <input type="text" class="form-control" name="User_name" id="User_name" placeholder="ชื่อ">


			    <label for="User_lname">นามสกุล:</label>
			    <input type="text" class="form-control" name="User_lname" id="User_lname" placeholder="ชื่อ">


			    <label for="Address">ที่อยู่:</label>
			    <input type="text" class="form-control" name="Address" id="Address" placeholder="ที่อยู่">

</div>
<div class="col-lg-6">
			    <label for="Tel">เบอร์โทร:</label>
			    <input type="text" class="form-control" name="Tel" id="Tel" placeholder="เบอร์โทร">


          <label for="Email">Email:</label>
          <input type="text" class="form-control" name="Email" id="Email" value="<?php echo $Email ;?>">
		

			    <label for="Username">ชื่อผู้ใช้:</label>
			    <input type="text" class="form-control" name="Username" id="Username" placeholder="ชื่อผู้ใช้">


			    <label for="Password">รหัสผ่าน:</label>
			    <input type="Password" class="form-control" name="Password" id="Password" placeholder="รหัสผ่าน">


			    <div class="form-group">
			      <label for="status">สถานะ:</label>
			      <select class="form-control" name="status">
			      	<option value="Admin">Admin</option>
			      	<option value="User">User</option>
			      </select>
			    </div>
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