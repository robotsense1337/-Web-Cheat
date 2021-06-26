<?php
@session_start();
include("config.inc.php");
include("class.php");
include("time.php");
mysql_select_db($db);
$result = mysql_query("select * from member where user='$_SESSION[login_true]'") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);

$id = $dbarr['id'];
?>
<!DOCTYPE html>
<html lang="th">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<title>Cracker.in.th#ByHenew1125#SleepCode</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="bootstrap/css/style.css" rel="stylesheet">
<link href="bootstrap/css/animate.css" rel="stylesheet"media="screen">
<link rel="shortcut icon" href="icon.png">
<style type="text/css">
<!--
body {
	margin-top: 0px;
}
-->
</style>
  <style type="text/css">
      body {
	background-color: #F5F5F5;
	background-image: url(bootstrap/img/bg.jpg);
	background-repeat: repeat;
}

      .container-narrow {
        margin: 0 auto;
        max-width: 830px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

    </style>
</head>
<body>
<header>
  <div class="navbar navbar-fixed-top">
    <!-- navbar navbar-fixed-top -->
    <div class="navbar-inner animated fadeInDown">
      <!-- navbar-inner -->
      <div class="container"> <a href="" class="brand "><?php echo $NameWeb ;?></a>
        <!-- container -->
        <ul class="nav">
          <li>
            <?php if($_GET['p'] == null ) {
            echo "<li  class='active'>";
            }else if($_GET['p'] != "register" && $_GET['p'] != "login" && $_GET['p'] != "topup" && $_GET['p'] != "buy" && $_GET['p'] != "forgetpwd" && $_GET['p'] != "download" && $_GET['p'] != "date" && $_GET['p'] != "changepass" && $_GET['p'] != "logout" && $_GET['p'] != "expire" && $_GET['p'] != "rehwid" ){
            echo "<li  class='active'>";
            }else{
            echo "<li>";
            } ?>
            <a href="?p=home"><i class="icon icon-home"></i> หน้าแรก</a> </li>
          <?php
			if (!isset($_SESSION['login_true'])) { ?>
            <!-- ยังไม่ได้ล็อกอิน -->
            <li>
              <?php if($_GET['p'] == "register" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
          <a href="./?p=register"><i class="icon-edit"></i> ลงทะเบียน</a>
          </li>
          <li>
            <?php if($_GET['p'] == "login" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="./?p=login"><i class="icon icon-user"></i> เข้าสู่ระบบ</a> </li>
        </li>
        <li>
            <?php if($_GET['p'] == "forgetpwd" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
            <a href="./?p=forgetpwd"><i class="icon icon-envelope"></i> ลืมรหัสผ่าน</a> </li>
        </li>
        <?php }else { ?>
        <!-- ล็อกอินแล้ว -->
        <li>
          <?php if($_GET['p'] == "buy" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
          <a href="./?p=buy"><i class="icon icon-shopping-cart"></i> เช่าโปร</a> </li>
        
        <li>
          <?php if($_GET['p'] == "download" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
          <a href="./?p=download"><i class="icon-download-alt"></i> ดาวน์โหลด</a> </li>
        <li>
          <?php if($_GET['p'] == "topup" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
          <a href="./?p=topup"><i class="icon icon-th"></i> เติมเงิน</a> </li>
        <li>
          <?php if($_GET['p'] == "expire" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
          <a href="./?p=expire"><i class="icon-time"></i> เช็ควันหมดอายุ</a> </li>
		<li>
          <?php if($_GET['p'] == "rehwid" ) {
                echo "<li  class='active'>";
                }else{
                echo "<li>";
                } ?>
          <a href="./?p=rehwid"><i class="icon-refresh"></i> ย้ายเครื่อง</a> </li>
        </ul>
        <ul class="nav pull-right">
          <li><a href=""><i class="icon icon-user"></i> ชื่อผู้ใช้ : <?php echo $dbarr['User'] ;?>,พ้อย : </span><span class="badge badge-success"><?php echo $dbarr['point'] ;?></span></a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> ตัวเลือก<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./?p=date"><i class="icon-user"></i> ข้อมูลส่วนตัว</a></li>
              <li class="divider"></li>
              <li><a href="./?p=changepass"><i class="icon-lock"></i> เปลี่ยนรหัสผ่าน</a></li>
              <li class="divider"></li>
              <li><a href="./?p=logout"><i class="icon-off"></i> ออกจากระบบ</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- End container -->
      <?php }?>
    </div>
    <!-- End navbar-inner -->
  </div>
  <!-- End navbar navbar-fixed-top -->
</header>
<div class="section">
  <div class="container-narrow">
    <div class="main">
      <?php if($_GET['p'] == "register" ) {
    include("register.php");
    }else if($_GET['p'] == "login" ) {
    include("login.php");
	}else if($_GET['p'] == "topup" ) {
    include("topup.php");
	}else if($_GET['p'] == "buy" ) {
    include("buy.php");
	}else if($_GET['p'] == "date" ) {
    include("data.php");
	}else if($_GET['p'] == "forgetpwd" ) {
    include("forgetpwd.php");
	}else if($_GET['p'] == "download" ) {
    include("download.php");
	}else if($_GET['p'] == "date" ) {
    include("data.php");
	}else if($_GET['p'] == "changepass" ) {
    include("changepass.php");
	}else if($_GET['p'] == "logout" ) {
    include("logout.php");
	}else if($_GET['p'] == "home" ) {
    include("home.php");
	}else if($_GET['p'] == "expire" ) {
    include("expire.php");
  }else if($_GET['p'] == "admin" ) {
    include("admin.php");
	}else if($_GET['p'] == "rehwid" ) {
    include("rehwid.php");;
    }else{
    include("home.php");
    } ?>
    </div>
  </div>
</div>
<?php echo $credit; ?>
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>