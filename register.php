<?php
if ($_POST["button"] == "สมัครสมาชิก")
{
if(trim($_POST["txtUsername"] && $_POST["Code1"] && $_POST["Code2"] && $_POST["txtPassword"] && $_POST["txtConPassword"] && $_POST["txtemail"]) == "") 
{
echo $danger.'<h5>' .$iconerror. ' กรุณากรอกข้อมูลให้ครบถ้วน!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=register'>";
exit();	
}
if($_POST["txtPassword"] != $_POST["txtConPassword"]) 
{
echo $danger.'<h5>' .$iconerror. ' คุณกรอกรหัสผ่านไม่ตรงกัน!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=register'>";
echo $credit;
exit();
}	
if($_POST["Code1"] != $_POST["Code2"]) 
{
echo $danger.'<h5>' .$iconerror. ' คุณกรอกรหัสรักษาความปลอดภัยไม่ถูกต้อง!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=register'>";
echo $credit;
exit();
}
if($_POST["eula"] == "") 
{
echo $danger.'<h5>' .$iconerror. ' กรุณายอมรับข้อตกลง!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=register'>";
echo $credit;
exit();
}	
$strSQL = "SELECT * FROM member WHERE User = '".trim($_POST['txtUsername'])."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult) 
{
echo $danger.'<h5>' .$iconerror. ' ชื่อผู้ใช้งานนี้มีอยู่แล้วในระบบ!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=register'>";
echo $credit;
exit();
}else{	
$strSQL = "SELECT * FROM member WHERE email = '".trim($_POST['txtemail'])."' ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if($objResult) 
{
echo $danger.'<h5>' .$iconerror. ' อีเมลล์นี้มีอยู่แล้วในระบบ!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=register'>";
echo $credit;
exit();
}else{
$strSQL = "INSERT INTO member (User,Password,email) VALUES ('".$_POST["txtUsername"]."', 
'".$_POST["txtPassword"]."','".$_POST["txtemail"]."')";
$objQuery = mysql_query($strSQL);
echo $success.'<h5>' .$iconok. ' สมัครสมาชิกสำเร็จ!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}}}
mysql_close();
?>
<style type="text/css">
<!--
.style3 {font-size: 15px}
-->
</style>

<div class="alert alert-info" align="center">
<div class="brand animated flip" align="center">
<h3 align="center" class="style3">กรุณากรอกข้อมูลให้ครบถ้วนแล้วกดสมัครสมาชิก</h3>
</div>
</div>
<form class="form-horizontal" method="post">
  <div class="control-group">
    <label class="control-label" for="txtUsername">ชื่อผู้ใช้</label>
    <div class="controls">
      <input name="txtUsername" type="text" class="form-control" id="txtUsername" maxlength="10" placeholder="ชื่อผู้ใช้" required>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="txtPassword">รหัสผ่าน</label>
    <div class="controls">
      <input name="txtPassword" type="password" id="txtPassword" placeholder="รหัสผ่าน" required class="form-control">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="txtConPassword">ยืนยันรหัสผ่าน</label>
    <div class="controls">
      <input name="txtConPassword" type="password" id="txtConPassword" placeholder="ยืนยันรหัสผ่าน" required class="form-control">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="Code1">อีเมลล์</label>
    <div class="controls">
      <input name="txtemail" type="email" id="txtemail" placeholder="อีเมลล์" required class="form-control">
    </div>
  </div>
  <div class="control-group">
  <?php $rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ23456789'),0,5); ?>
  <input name="Code2" type="hidden" id="Code2" value="<?php echo $rand;?>" />
    <label class="control-label" for="Code1"><span class="label label-success"><?php echo $rand;?> </span></label>
    <div class="controls">
      <input name="Code1" class="form-control" type="text" id="Code1" maxlength="50" required placeholder="รหัสรักษาความปลอดภัย">
    </div>
  </div>
  <div class="controls">
												<input id="eula" type="checkbox" name="eula" class=""> 
												<strong>ยอมรับข้อตกลง  <a href="#myvdo" id="idEULA" role="button" data-toggle="modal">อ่านข้อตกลง</a></strong>
											</div>
  <br>
  <div class="controls">
    <button type="submit" name="button" class="btn btn-primary" value="สมัครสมาชิก" > <i class="icon-edit icon-white"></i> สมัครสมาชิก</button>
  </div>
</form>

<!-- my P -->
<div id="myvdo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" align="center">ข้อตกลงการใช้งาน</h3>
  </div>
  <div class="modal-body">
    <ul><li>เมื่อเติมเงินเข้าสู่ระบบแล้วทางทีมงานไม่สามารถคืนเงินได้ในทุกกรณี </li>                    <li>การใช้งานโปรแกรม มีความเสี่ยงในการถูกยกเลิกการใช้งาน ID เกมส์ของท่าน ซึ่งทางผู้พัฒนาโปรแกรมไม่สามารถรับผิดชอบความเสียหายดังกล่าวได้</li>                    <li>ถ้าหากวันใดที่โปรแกรมไม่สามารถใช้ได้ ไม่ว่าจะด้วยสาเหตุอะไรก็ตาม (รวมถึงโปรแกรมไม่สามารถใช้งานได้อีกต่อไป อันเนื่องมาจาก ผู้พัฒนาไม่สามารถแก้ไขโปรแกรมให้ใช้งานได้) ผู้พัฒนาโปรแกรมไม่สามารถคืนเงินที่ท่านเช่าโปรแกรมได้</li>                    <li>ผู้ใช้งานจะต้องไม่ decompiled, disassembled, reverse engineered หรือทำการดัดแปลงแก้ไขโปรแกรม หากตรวจพบจะยกเลิกการให้บริการกับลูกค้ารายนั้นทันที และไม่คืนค่าบริการใดๆทั้งสิ้น</li>                    <li>ผู้พัฒนาขอสงวนสิทธิ์ในการเปลี่ยนแปลงนโยบาย เงื่อนไขและข้อตกลง โดยไม่ต้องแจ้งให้ทราบล่วงหน้า </li>                  </ul>
  </div>
  <div class="modal-footer">
    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">ปิด</button>
  </div>
</div>
<!-- my P End -->