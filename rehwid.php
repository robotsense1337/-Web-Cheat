<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>
<!-- REHWID 
====================================== -->
<?php
if ($_POST["button"] == "rehwid") 
{
if ($dbarr['point'] < $rehwidpoint) 
{
echo $danger.'<h5>' .$iconerror. ' พ้อยคงเหลือไม่พอสำหรับย้ายเครื่อง!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='3 ;url=./?p=rehwid'>";
echo $credit;
exit();	
}else{
if ($dbarr['hwid'] == '0') 
{
echo $danger.'<h5>' .$iconerror. ' โปรแกรมของคุณยังไม่ได้ล็อกอินที่เครื่องใด (ยังไม่ได้ใช้งานโปรแกรมใดเลย)</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='4 ;url=./?p=rehwid'>";
echo $credit;
exit();	
}else{
echo $success.'<h5>' .$iconok. ' ย้ายเครื่องสำเร็จ!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=home'>";
echo $credit;
$sql_up = "update member set point= point - '$rehwidpoint' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up); // Buy Hwid 10 Point
$sql_up = "update member set hwid= '0' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up); // Buy Free Hwid
$sql_up = "update member set hwid_time= '0' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up); //Time Re 6 Hr
exit();	
}}}
?>
<script language="Javascript">
<!--
function Conf(object) {
              if (confirm("คุณแน่ใจหรือไม่ที่จะต้องการย้ายเครื่อง!") == true) {
          return true;
                }
          return false;
                }
//-->
</script>

<form class="form-horizontal" method="post">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon icon-refresh"></i></span>
      <h5><span class="style2">ย้ายเครื่อง </span></h5>
    </div>
    <div class="widget-content nopadding">
      <table width="541" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" >
        <tr>
          <th width="155"><div align="center" class="style3">ย้ายเครื่องโปรแกรม</div></th>
          <th width="159"><div align="center" class="style3">ราคา</div></th>
          <th width="227"><div align="center" class="style3">ย้ายเครื่อง</div></th>
        </tr>
        <tr>
          <td><div align="center" class="style2">ทั้งหมด</div></td>
          <td><div align="center" class="style2"><?php echo $rehwidpoint; ?> Point </div></td>
          <td><div align="center"><span class="style2"><span class="style2"></span></span>
              <button type="submit" name="button" class="btn btn-mini btn-info" onclick="return Conf(this)" value="rehwid" > <span class="glyphicon glyphicon-shopping-cart"></span><i class="icon icon-refresh icon-white"></i> ย้ายเครื่อง</button>
            </div></td>
        </tr>
      </table>
    </div>
  </div>
  <?php 
if($dbarr['hwid'] == "0")
{
$hwid = '<span class="label label-success"><i class="icon-ok icon-white"></i> สามารถย้ายได้แล้ว!</span>'; 
}else{
$hwid = '<span class="label label-important"><i class="icon-remove icon-white"></i> รอถึงเวลาที่กำหนด!</span>';  
} 
if($dbarr['hwid_time'] == "0")
{
$hwid_time = '-'; 
}else{
$hwid_time = $dbarr['hwid_time']; 
} 
  ?>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
      <h5>ย้ายเครื่องฟรีทุก 6 ชั่วโมง </h5>
  </div>
  <div class="widget-content nopadding">
    <table width="541" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" >
      <tr>
        <th width="155"><div align="center" class="style3">สถานะการย้ายฟรี</div></th>
        <th width="159"><div align="center" class="style3">เวลาที่ย้ายฟรี</div></th>
      </tr>
      <tr>
        <td><div align="center" class="style2"><?php echo $hwid;?></div></td>
        <td><div align="center" class="style2"><?php echo $hwid_time;?></div></td>
      </tr>
    </table>
  </div>
</div>

</form>