<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src="../jquery.ui-1.5.2/jquery-1.2.6.js" type="text/javascript"></script>
<script src="../jquery.ui-1.5.2/ui/ui.datepicker.js" type="text/javascript"></script>
<link href="../jquery.ui-1.5.2/themes/ui.datepicker.css" rel="stylesheet" type="text/css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title>ระบบจัดเก็บข้อมูล</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <body>
  <body background="images/be962c33a2aa260c5007b2364d5e08aa.jpg">
<div class="container">
  <div class="row">
    <div class="col-md-12">
  <table width="313" border="0" align="center">
  <td height="15 colspan="2" align="center"">
    <table width="400" border="0" align="center">
    <h3 align="center">สมัครสมาชิก</h3>
      &nbsp;<form action="add1.php" method="POST" name="register"  id="register">
        <table width="30%" border="0" align="center" cellpadding="0" cellspacing="0">
        
        
          <tr>
            <td width="80%" align="left">เลขประจำตัวนักศึกษา &nbsp;</td>
            <td width="120%"><label for="User_ID"></label>
      <input type="text" name="User_ID" id="User_ID" class="form-control" placeholder="กรอกเลขประจำตัวนักศึกษา " required> <span id="msg2"></span> </td>
            
          </tr>
       
          
          <tr>
            <td align="center">ชื่อ&nbsp;</td>
            <td><label for="User_name"></label>
            <input type="text" name="User_name" id="User_name" class="form-control" placeholder="กรอกชื่อจริง"  required></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
             <tr> 
    <tr>
     <td><font color="#FFFFFF">oio</font></td>
    </tr>
    </tr>
          <tr>
            <td align="center">นามสกุล&nbsp;</td>
            <td>
            <label for="User_lname"></label>
      <input type="text" name="User_lname" id="User_lname" class="form-control" placeholder="กรอกนามสกุล"  required >      
</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
             
          </tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
               <tr>
            <td align="center">ระดับชั้น&nbsp;</td>
            <td>
            <select name="User_degree"><option selected>-----เลือกระดับชั้น-----</option>  
            <option value="ปวช.1">ปวช.1</option>
            <option value="ปวช.2">ปวช.2</option>
            <option value="ปวช.3">ปวช.3</option>
            <option value="ปวส.1">ปวส.1</option>
            <option value="ปวส.2">ปวส.2</option>
      		
</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
          </tr>
        
             <tr> 
    <tr>
     <td><font color="#FFFFFF">oio</font></td>
    </tr>
    </tr>
              <tr>
            <td align="center">ที่อยู่&nbsp;</td>
            <td>
            <label for="User_Address"></label>
      <input type="text" name="User_Address" id="User_Address" class="form-control" placeholder="กรอกที่อยู่"  required >      
</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
          </tr>
             <tr> 
    <tr>
     <td><font color="#FFFFFF">oio</font></td>
    </tr>
    </tr>
          
           <tr>
            <td align="center">เบอร์โทรศัพท์&nbsp;</td>
            <td>
            <label for="User_Address"></label>
      <input type="text" name="Tel" id="Tel" class="form-control" placeholder="กรอกหมายเลขโทรศัพท์"  required >      
</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
          </tr>
             <tr> 
    <tr>
     <td><font color="#FFFFFF">oio</font></td>
    </tr>
    </tr>
          
           <tr>
            <td align="center">E-mail &nbsp;</td>
            <td>
            <label for="Email"></label>
      <input type="text" name="Email" id="Email" class="form-control" placeholder="กรอกอีเมลแอดเดรส"  required >      
</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
          </tr>
          
             <tr> 
    <tr>
     <td><font color="#FFFFFF">oio</font></td>
    </tr>
    </tr>
          
          <tr>
          <td align="center">Username &nbsp;&nbsp; </td>
            <td><label for="username"></label>
      <input type="text" name="username" id="username" ></td>
      		<td>&nbsp;</td>
            <td>&nbsp;</td>
            </td>
            
            
             
             <tr> 
    <tr>
     <td><font color="#FFFFFF">oio</font></td>
    </tr>
    </tr>
             <tr>
          <td align="center">Password &nbsp;&nbsp; </td>
            <td><label for="password"></label>
      <input type="text" name="password" id="password"></td>
      		<td>&nbsp;</td>
            <td>&nbsp;</td>
            </td>
           
            
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="center">
            </td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
            <td colspan="3" align="left">
            <input type="submit" name="regis" id="regis" class="btn btn-info btn-sm" value="ยืนยัน" >
            <input type="hidden" name="status" value="User" />
            
            </td>
          </tr>
        </table>
      </form>
      </div>
    </div>
  </div>
      

&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;    
<p align="center">โปรดกรอกข้อมูลตามความจริง</p>


  </body>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>