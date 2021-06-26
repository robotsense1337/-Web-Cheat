<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>

<!--- เวลาคงเหลือ---->
<?php

function get_datetime_diff($datetime_start,$datetime_end)
{
    $seconds = strtotime($datetime_end) - strtotime($datetime_start);

     $days    = floor($seconds / 86400);
     $hours   = floor(($seconds - ($days * 86400)) / 3600);
     $minutes = floor(($seconds - ($days * 86400) - ($hours * 3600))/60);
     $seconds = floor(($seconds - ($days * 86400) - ($hours * 3600) - ($minutes*60)));

     echo $days." วัน ".$hours." ชั่วโมง ".$minutes." นาที ".$seconds." วินาที";
}
date_default_timezone_set('Asia/Bangkok');
$testdate = date("d-m-Y H:i:s");
?>  
<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
    <h5>เช็คเวลาที่เหลือ</h5>
  </div>
  <div class="widget-content nopadding">
    	  <?

$strSQL7 = "SELECT * FROM Download order by id_download";
$objQuery7 = mysql_query($strSQL7) or die ("Error Query [".$strSQL7."]");

?>
    <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" >
      <tr>
      <th width="9%"><div align="center" class="style3">#</div></th>
        <th width="35%"><div align="center" class="style3">โปรแกรม</div></th>
        <th width="36%"><div align="center" class="style3">เวลาที่เหลือ</div></th>
      </tr>
	  		<?
while($objResult7 = mysql_fetch_array($objQuery7))
{
$Bt7 = $objResult7["Programe"];
$Point7 = $objResult7["Point"];
$Day7 = $objResult7["Day"];

$resultq7 = mysql_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult27 = mysql_fetch_array($resultq7);
?>
      <tr>
<?php
if($dbarr[$objResult7["Programe"]] == "0")
{
?>
		<td><div align="center" class="style2">#<?=$objResult7["id_download"];?></div></td>
        <td><div align="center" class="style2"><?=$objResult7["Name"];?> </div></td>
        <td><div align="center" class="style2"><span class="label label-important"><i class="icon-ban-circle icon-white"></i> คุณยังไม่ได้เช่าโปรแกรม</span></div></td>
        
<?
}
else
{
?> 
		<td width="7%"><div align="center" class="style2">#<?=$objResult7["id_download"];?></div></td>
        <td width="9%"><div align="center" class="style2"><?=$objResult7["Name"];?> </div></td>
        <td width="4%"><div align="center" class="style2"><span class="label label-success"><i class="icon-time icon-white"></i> <?=get_datetime_diff($testdate,$dbarr[$objResult7["Programe"]]); ?></span></div></td> 
<?
}
?>

<?
}
?>
      </tr>
    </table>
  </div>
</div>