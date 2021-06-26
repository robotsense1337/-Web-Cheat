<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>
<div class="alert alert-success" align="center">
<div class="brand animated flip" align="center">
					<h3 class="style2">ข้อมูลส่วนตัว</h3>
</div>
</div>
<form>
<div style="padding-left:10px;">
     
        <table width="100%" class="table table-bordered">
          <tr>
            <td width="30%" align="left" valign="middle"><strong>ID ของคุณ</strong></td>
            <td align="left" valign="middle"><div ><span class="label label-primary"><i class="icon-certificate icon-white"></i> <?php echo $dbarr['id'] ;?></span></div></td>
          </tr>
		  <tr>
            <td width="30%" align="left" valign="middle"><strong>ชื่อผู้ใช้</strong></td>
            <td align="left" valign="middle"><div ><span class="label label-info"><i class="icon-user icon-white"></i> <?php echo $dbarr['User'] ;?></span></div></td>
          </tr>
          <tr>
            <td width="30%" align="left" valign="middle"><strong>อีเมล</strong></td>
            <td align="left" valign="middle"><div ><span class="label label-inverse"><i class="icon-envelope icon-white"></i> <?php echo $dbarr['email'] ;?></span></div></td>
          </tr>
          <tr>
            <td width="30%" align="left" valign="middle"><strong>จำนวนเงินของคุณ</strong></td>
            <td align="left" valign="middle"><div ><span class="label label label-success"><i class="icon-plus-sign icon-white"></i> <?php echo $dbarr['point'] ;?></span></div></td>
          </tr>
		  <tr>
            <td width="30%" align="left" valign="middle"><strong>ระดับของคุณ</strong></td>
            <td align="left" valign="middle"><div ><span class="label label label-warning"><i class="icon-star icon-white"></i> <?php echo $dbarr['status'] ;?></span></div></td>
          </tr>
        </table>
        
      </div>
</form>