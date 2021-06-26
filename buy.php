<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>
<?
include("config.inc.php");
$strSQL = "SELECT * FROM Download order by id_download";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<!-- ====================================== -->
<style type="text/css">
<!--
.testred {color: #FF0000}
-->
</style>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-shopping-cart"></i></span>
    <h5>เช่าโปร</h5>
    <?php echo $New; ?> </div>
  <div class="widget-content nopadding">

	  <?
while($objResult = mysql_fetch_array($objQuery)){
$Programe = $objResult["Programe"];
?>
<form class="form-horizontal" method="post">
 <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
      <tr>
          <th width="237"><div align="center" class="style3">โปรแกรม</div></th>
          <th width="105"><div align="center" class="style3">ราคา</div></th>
          <th width="110"><div align="center" class="style3">ระยะเวลา</div></th>
          <th width="94"><div align="center" class="style3">เช่าโปรแกรม</div></th>
      </tr>
  <?
$result1 = mysql_query("select * from BuyItem where Programe='$Programe'") or die ("Err Can not to result");
while( $dbarr1 = mysql_fetch_array($result1)){

$Bt = $dbarr1["Programe"];
$Point = $dbarr1["Point"];
$Day = $dbarr1["Day"];


if ($_POST["button"] == "$Bt$Point") 
{
date_default_timezone_set('Asia/Bangkok');
$today_date=date ('d-m-Y',strtotime("+ $Day day"));
$today_time=date("H:i:s");
$Bt = $dbarr1["Programe"];
$Point = $dbarr1["Point"];
//ตรวจสอบสถาณะโปรแกรมว่าได้ออฟไลน์หรือไม่
if($objResult["Status"] == 'Offline')
{
//ตรวจเจอว่า ออฟไลน์
$TESTBOX =  "<script > alert('โปรแกรมกำลังแก้ไขอยู่ไม่สามารถเช่าได้!'); </script>";
print "<meta http-equiv=refresh content=0;URL=./?p=home>";
}
else
{
//ตรวจเจอ ว่าออนไลน์
if ($dbarr[$objResult["Programe"]] > 0) 
{
$TESTBOX =  "<script > alert('วันใช้งานของคุณยังคงเหลืออยู่ ไม่สามารถเช่าเพิ่มได้!'); </script>";
print "<meta http-equiv=refresh content=0;URL=./?p=download>";
} else {
if ($dbarr['point'] < $dbarr1["Point"]) 
{
$TESTBOX =  "<script > alert('พ้อยคงเหลือไม่พอสำหรับเช่าโปรแกรมนี้!'); </script>";
print "<meta http-equiv=refresh content=0;URL=./?p=topup>";
} else {
$TESTBOX =  "<script > alert('เช่าโปรแกรมสำเร็จ!'); </script>";
print "<meta http-equiv=refresh content=0;URL=./?p=download>";
$sql_up = "update member set point= point - '$Point' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up);
$sql_up = "update member set $Bt = '$today_date $today_time' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up);	
$sql_up = "update member set hwid = '0' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up);		
}
}
}
}
?>
    <tr>
          <td><div align="center" class="style2"><?=$objResult["Name"];?> </div></td>
          <td><div align="center" class="style2"><?=$dbarr1["Point"];?> Point</div></td>
          <td><div align="center" class="style2"><?=$dbarr1["Day"];?> วัน</div></td>
          <td><div align="center"><span class="style2"><span class="style2"></span></span>
		  
<?php
//// ตรวจสอบสถาณโปรแกรม
if($objResult['Status'] == "Offline")
{
?>
<span class="label label-important"><i class="icon-remove icon-white"></i> กำลังแก้ไข!</span>     
<?php
}
if($objResult['Status'] == "Soon")
{
?>
<span class="label label-warning"><i class="icon-edit icon-white"></i> เร็วๆนี้!</span>   
<?php
}
if($objResult["Status"] == 'Online')
{
?>
              <button type="submit" name="button" class="btn btn-mini btn-info" onclick="return confirm('แน่ใจหรือไม่ที่จะต้องการเช่าโปรนี้!\nโปรนี้รับรองการใช้งานกับ\n<?=$objResult['Support'];?>')" value="<?=$dbarr1["Programe"];?><?=$dbarr1["Point"];?>" > <span class="glyphicon glyphicon-shopping-cart"></span><i class="icon icon-shopping-cart icon-white"></i> เช่าโปร</button>
<?php
}
?>
            </div></td>
        </tr>
		<?
}
}
?>
      </tr>
    </table>
	   <?php echo $TESTBOX ; ?>
	   
	   <!-- TEST --->
	   <div id="test" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" align="center">ตัวอย่างโปรแกรม</h3>
  </div>
  <div class="modal-body">
  <center>
<p> </p>
<p>กำลังเร่งทำ VDO อยู่น่ะค่ะ</p>
  <p>รับรองการใช้งานกับ</p>
	</center>
  </div>
  <div class="modal-footer">
    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">ปิด</button>
  </div>
</div>
	  <!-- ---> 
	  
  </form>