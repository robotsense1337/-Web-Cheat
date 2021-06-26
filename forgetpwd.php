<?php
include("class.php");
include('config.inc.php');

?>
<?
if ($_POST['txtUsername']){
$name = $_POST['txtUsername'];

$sql1 = "select Password,email from member where User = '$name'";
$query=mysql_query($sql1)or die (mysql_error());

$result= mysql_fetch_array($query);


$to_send = $result['email'];
$subject_send = "ESTCHEATS ระบบลืมรหัสผ่าน";
$messages_send = "สวัสดีค่ะ คุณ  $name";
$messages_send = "";
$messages_send = "ชื่อผู้ใช้งาน : $name";
$messages_send = "รหัสผ่าน :" . $result['Password'];
$from_send = "estcheats@gmail.com";
$header = "Content-type: text/html; charset=windows-874\n"; // or UTF-8 //
$header="From: " .$from_send;

if (mail($to_send,$subject_send,$messages_send,$header)){
echo $success.'<h5>' .$iconok. ' ส่งรหัสผ่านไปที่อีเมล  '.$result["email"].' เรียบร้อยแล้ว</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=home'>";
echo $credit;
exit();
}else{
echo $danger.'<h5>' .$iconerror. ' ไม่พบชื่อผู้ใช้นี้ในระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=forgetpwd'>";
echo $credit;
exit();		
}
}
?>
<style type="text/css">
<!--
.style2 {font-size: 18px}
.style3 {color: #FF6600}
-->
</style>


<div class="alert alert-warning" align="center">
<div class="brand animated flip" align="center">
					<h3 class="style2">ลืมรหัสผ่าน</h3>
</div>
</div>

<form class="form-horizontal" method="post" >
  <div class="control-group">
    <label class="control-label" for="inputUsername">ชื่อผู้ใช้</label>
    <div class="controls">
      <input name="txtUsername" type="text" class="form-control" id="txtUsername" maxlength="10" placeholder="ชื่อผู้ใช้งานที่ท่านลืมรหัสผ่าน" required>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" name="button" class="btn btn-warning" value="ส่งข้อมูล" ><i class="icon-ok icon-white"></i> ส่งข้อมูล</button>
    </div>
  </div>
  <center>
  <p class="style1 style8 style3"><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ระบบจะส่งรหัสผ่านไปทางอีเมล์ของคุณที่ใช้ในการสมัคร!</font></p>
  </center>
</form>