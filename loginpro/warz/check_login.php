<?php
$ips = getenv(REMOTE_ADDR);
date_default_timezone_set('Asia/Bangkok');
$Today = date("d/m/Y H:i:s");

	session_start();
	include("../config.inc.php");
	$strSQL = "SELECT * FROM member WHERE User = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
			exit();
	}
	else
	{
			$_SESSION["id"] = $objResult["id"];
			session_write_close();
						
			$strSQL2 = "SELECT * FROM member WHERE id = '".$_SESSION['id']."' ";
			$objQuery2 = mysql_query($strSQL2);
			$objResult2 = mysql_fetch_array($objQuery2);
			
			if($objResult2["HWID"] == "")
			{
				$strSQL = "UPDATE member SET hwid = '".$_POST['txtHWID']."'  WHERE id = '".$_SESSION["id"]."' ";
				$objQuery = mysql_query($strSQL);
			}
			$ht = 'LOGIN PB HK';
			$strSQL = "INSERT INTO history (id,List,Date,IP) VALUES ('".$objResult2["id"]."','".$ht."','".$Today."','".$ips."')";
			$objQuery = mysql_query($strSQL);
			
			//ทำเพิ่มเพื่อให้ข้อมูลอัพเดทเพิ่ม
			$strSQL2 = "SELECT * FROM member WHERE id = '".$_SESSION['id']."' ";
			$objQuery2 = mysql_query($strSQL2);
			$objResult2 = mysql_fetch_array($objQuery2);

	}
	mysql_close();

?>

<p id="HWID"><?=$objResult2["hwid"];?></p>
<p id="Date1"><?=$Today?></p>
<p id="Date2"><?=$objResult2["WarZ"];?></p>