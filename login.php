<?php
$user_login = $_POST['user_login'];
$pwd_login = ($_POST['pwd_login']);
if(isset($user_login) and isset($pwd_login)) {
?>
<?php 
if ($_POST["button"] == "เข้าสู่ระบบ") {
if(trim($_POST["user_login"] && ($_POST["pwd_login"])) == "" ) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณากรอกข้อมูลให้ครบถ้วน</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();	
}
$result = mysql_query("select User,Password from member where User='$user_login' and Password='$pwd_login' ");
$num = mysql_num_rows($result) ;
if($num <=0 ) 
{
echo $danger.'<h5>' .$iconerror. ' ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();	
}else{
$_SESSION['login_true'] = $user_login;
echo $success.'<h5>' .$iconok. ' เข้าสู่ระบบสำเร็จ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=home'>";
echo $credit;
exit();	
}}}
?>
<style type="text/css">
<!--
.style2 {font-size: 15px}
.style3 {color: #FF6600}
-->
</style>


<div class="alert alert-error" align="center">
<div class="brand animated flip" align="center">
					<h3 class="style2">กรุณาเข้าสู่ระบบก่อน</h3>
</div>
</div>

<form class="form-horizontal" method="post">
  <div class="control-group">
    <label class="control-label" for="inputUsername">ชื่อผู้ใช้</label>
    <div class="controls">
      <input name="user_login" type="text" class="form-control" id="user_login" maxlength="10" placeholder="ชื่อผู้ใช้" required>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">รหัสผ่าน</label>
    <div class="controls">
      <input name="pwd_login" type="password" id="pwd_login" placeholder="รหัสผ่าน" required class="form-control">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" name="button" class="btn btn-primary" value="เข้าสู่ระบบ" ><i class="icon-ok icon-white"></i> เข้าสู่ระบบ</button>
    </div>
  </div>
</form>
    <p align="center">
                 <iframe frameborder="100" height="25" scrolling="No" src="http://www.siamvip.com/ManageFiles/counter/?web=thecheats.tk" width="155"></iframe>
</p>
                <p align="center" class="style5">จำนวนสมาชิก
                  <?php
$sql=mysql_query("select * from member");
$num=mysql_num_rows($sql);
print $num;
?> ไอดี</p>
                <p align="center" class="style5">สมาชิกล่าสุด
                  <?
include('config.inc.php');
$sql = "select * from member order by ID desc";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
echo $row[User]."";
?>