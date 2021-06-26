<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>
<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-download-alt"></i></span>
    <h5>ดาวน์โหลดโปรแกรม</h5>
  </div>
  <div class="widget-content nopadding">
  	  <?

$strSQL = "SELECT * FROM Download order by id_download";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>
    <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" >
      <tr>
        <th width="6%"><div align="center" class="style3">#</div></th>
        <th width="34%"><div align="center" class="style3">โปรแกรม</div></th>
		<th width="12%"><div align="center" class="style3">เวอร์ชั่น</div></th>
        <th width="28%"><div align="center" class="style3">ดาวน์โหลด</div></th>
      </tr>
		<?
while($objResult = mysql_fetch_array($objQuery))
{
$Bt = $objResult["Programe"];
$Point = $objResult["Point"];
$Day = $objResult["Day"];

$resultq = mysql_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult2 = mysql_fetch_array($resultq);
?>
      <tr>
<?php
//// ตรวจสอบสถาณโปรแกรม
if($objResult['Status'] == "Offline")
{
?>
        <td><div align="center" class="style2">#<?=$objResult["id_download"];?></div></td>
        <td><div align="center" class="style2"><?=$objResult["Name"];?> </div></td>
		<td><div align="center" class="style2"><?=$objResult["Version"];?></div></td>
        <td><div align="center" class="style1"><span class="label label-important"><i class="icon-remove icon-white"></i> ปิดให้ดาวน์โหลดชั่วคราว!</span></div></td>
		
<?php
}
if($objResult['Status'] == "Soon")
{
?>
        <td><div align="center" class="style2">#<?=$objResult["id_download"];?></div></td>
        <td><div align="center" class="style2"><?=$objResult["Name"];?> </div></td>
		<td><div align="center" class="style2"><?=$objResult["Version"];?></div></td>
        <td><div align="center" class="style1"><span class="label label-warning"><i class="icon-edit icon-white"></i> เร็วๆนี้!</span></div></td>
<?php
}
if($objResult["Status"] == 'Online')
{
?>
 <?php
if($dbarr[$objResult["Programe"]] == "0")
{

?>

        <td><div align="center" class="style2">#<?=$objResult["id_download"];?></div></td>
        <td><div align="center" class="style2"><?=$objResult["Name"];?> </div></td>
		<td><div align="center" class="style2"><?=$objResult["Version"];?></div></td>
        <td><div align="center" class="style1"><a href="#"><?php echo $cantdownload; ?></a></div></td>
        <?
}
else
{
?>
        <td width="4%"><div align="center" class="style2">#<?=$objResult["id_download"];?></div></td>
        <td width="7%"><div align="center" class="style2"><?=$objResult["Name"];?> </div></td>
		<td width="4%"><div align="center" class="style2"><?=$objResult["Version"];?></div></td>
        <td width="5%"><div align="center" class="style1"><a href=<?=$objResult["link"];?> target="_blank"> <?php echo $download; ?></a><a href="download/<?=$objResult["link2"];?>" target="_blank"> <?php echo $download; ?></a></div></td>

		<?
}
?>
        <?
}
?>
<?php
}
?>
      </tr>
    </table>
  </div>
</div>