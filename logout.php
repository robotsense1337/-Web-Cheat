<?php
if (!isset($_SESSION['login_true'])) 
{
echo $danger.'<h5>' .$iconerror. ' กรุณาเข้าสู่ระบบ</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=login'>";
echo $credit;
exit();
}
?>

<?php
session_start();
session_destroy();
echo $danger.'<h5>' .$iconerror. ' ออกจากระบบสำเร็จ!</h5><h5>(ระบบกำลังพาท่านไป...)</h5></div>'."<meta http-equiv='refresh' content='2 ;url=./?p=home'>";
echo $credit;
exit;
?>

