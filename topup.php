<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>
﻿<?php
@session_start();
include("config.inc.php");
include("class.php");
mysql_select_db($db);
$result = mysql_query("select * from member where user='$_SESSION[login_true]'") or die ("Err Can not to result");
$dbarr = mysql_fetch_array($result);

$id = $dbarr['id'];
?>
  <body>
<header>

</header>
<script type="text/javascript" src='https://www.tmtopup.com/topup/3rdTopup.php?uid=74966'></script>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon icon-th"></i></span>
    <h5>เติมเงิน</h5>
  </div>
  <div class="widget-content nopadding">
    <table  width="250" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered" >
      <tr>
        <th width="126"><div align="center" class="style3">ราคาบัตร</div></th>
        <th width="124"><div align="center" class="style3">ได้รับ Point</div></th>
      </tr>
      <tr>
        <td><div align="center" class="style2">50</div></td>
        <td><div align="center" class="style2">50 Point</div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">90</div></td>
        <td><div align="center" class="style2">90 Point</div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">150</div></td>
        <td><div align="center" class="style2">150 Point</div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">300</div></td>
        <td><div align="center" class="style2">300 Point</div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">500</div></td>
        <td><div align="center" class="style2">500 Point</div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">1000</div></td>
        <td><div align="center" class="style2">1000 Point</div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="bootstrap/img/tmcard.png" width="359" height="240" /></div></td>
      </tr>
      <tr>
        <td><div align="center" class="style2">
           
			
			<input name="tmn_password" type="text" id="tmn_password" placeholder="รหัสบัตรทรูมันนี่ 14 หลัก" required class="form-control" maxlength="14" />
          </div></td>
        <td><div align="center" class="style2">
            <input name="button" class="btn btn-primary" type="button" onClick="submit_tmnc()" value="เติมเงิน" size="" />
          </div></td>
      </tr>
    </table>
    <div align="center">
	<input type="hidden" value="<?php echo $dbarr['User'] ;?>" id="ref1" name="ref1">&nbsp;
      <input type="hidden" value="<?php echo $dbarr['email'] ;?>" id="ref2" name="ref2">
      <input type="hidden" value="<?php echo $dbarr['point'] ;?>" id="ref3" name="ref3">
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</body>
</html>