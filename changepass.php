<?php
@session_start();
include("config.inc.php");
include("class.php");
mysql_select_db($db);
$result = mysql_query("select * from member where user='$_SESSION[login_true]'") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);

$id = $dbarr['id'];
?>
<center>
<div class="well">
<?php
$strSQL = "SELECT * FROM member  ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
?>
<div class="alert alert-info" align="center">
<div class="brand animated flip" align="center">
  <h3 class="style2">เปลี่ยนรหัสผ่าน</h3>
</div>
</div>
<form class="form-horizontal" method="post" action="chack_pass.php" >
<div class="control-group">
    <label class="control-label" for="txtPass">ชือผู้ใช้</label>
    <div class="controls">
      <input name="txtPass" type="text" id="User" value="<?php echo $objResult["User"];?>" placeholder="ชื่อผู้ใช้" required="" class="form-control">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="txtPass">รหัสผ่านปัจจุบัน</label>
    <div class="controls">
      <input name="txtPass" type="password" id="txtPass" placeholder="รหัสผ่านปัจจุบัน" required="" class="form-control">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="txtPassword">รหัสผ่านใหม่</label>
    <div class="controls">
      <input name="txtPassword" type="password" id="txtPassword" placeholder="รหัสผ่านใหม่" required="" class="form-control">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="txtConPassword">ยืนยันรหัสผ่าน</label>
    <div class="controls">
      <input name="txtConPassword" type="password" id="txtConPassword" placeholder="ยืนยันรหัสผ่าน" required="" class="form-control">
    </div>
  </div>
  <div class="controls">
    <button type="submit" name="button" class="btn btn-primary" value="เปลี่ยนรหัสผ่าน"> <i class="icon-edit icon-white"></i> เปลี่ยนรหัสผ่าน</button> 
  </div>
</form>