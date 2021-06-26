<?
$strSQL = "SELECT * FROM Download order by Programe";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<?
while($objResult = mysql_fetch_array($objQuery))
{
$resultq = mysql_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult2 = mysql_fetch_array($resultq);
$Bt = $objResult["Programe"];
?>
<?php
$result = mysql_query("select * from member where User='$_SESSION[login_true]'") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result) ;
$Programe = $dbarr[$objResult["Programe"]];

if ($dbarr[$objResult["Programe"]] < 1) { 
	
	} else {
	date_default_timezone_set('Asia/Bangkok');
    $exp_date = "$Programe"; 
    $todays_date = date("d-m-Y H:i:s"); 
    $today = strtotime($todays_date); 
    $expiration_date = strtotime($exp_date); 
    if ($expiration_date > $today) { 
    } else { 
    $sql_up = "update member set $Bt = '0' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up);
	$sql_up = "update member set hwid= '0' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up);
	}
}
?>
<?
}
/////// Re Hwid all 6 Hr ////////
$hwid_time = $dbarr["hwid_time"];
date_default_timezone_set('Asia/Bangkok');
    $exp_date1 = "$hwid_time"; 
    $todays_date1 = date("d-m-Y H:i:s"); 
    $today1 = strtotime($todays_date1); 
    $expiration_date1 = strtotime($exp_date1); 
    if ($expiration_date1 > $today1) { 
    } else { 
$sql_up = "update member set hwid_time = '0' where User='$_SESSION[login_true]' ";$dbquery_up = mysql_query($sql_up);
	}
?>