<?
include("config.inc.php");
$strSQL = "SELECT * FROM Download order by id_download";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Facebook = '0';
?>
<div class="alert alert-info" align="center">
					<p>สามารถเช่าโปรได้ตามปกติแล้วนะครับ</p>
					<p>สามารถเติมเงินและเช่าโปรได้ตามปกติแล้วครับ</p>
					<p>กรุณาตรวจสอบดีๆก่อนเช่าโปรด้วย</p>
				
</div>
<div class="alert alert-Warning" align="center">
					<p>สามาติดต่อทีมงาน <a href="https://www.facebook.com/ESTCheats.Hacker" target="_blank"><i class="icon-hand-right"></i>คลิ๊กที่นี้</a></li></p>
					</p>

</div>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
    <h5>สถานะโปรแกรม</h5>
    <?php echo $DatePro; ?> </div>
  <div class="widget-content nopadding">
    <table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
      <tr>
        <th width="29"><div align="center" class="style3">#</div></th>
        <th width="167"><div align="center" class="style3">โปรแกรม</div></th>
        <th width="126"><div align="center" class="style3">ตัวอย่างโปรแกรม</div></th>
        <th width="56"><div align="center" class="style3">เวอร์ชั่น</div></th>
        <th width="72"><div align="center" class="style3">สถานะ</div></th>
      </tr>
	  <?
while($objResult = mysql_fetch_array($objQuery))
{
$Bt = $objResult["Programe"];
$Point = $objResult["Point"];
$Day = $objResult["Day"];

$resultq = mysql_query("select * from BuyItem where Programe='".$Bt."'") or die ("Err Can not to result");
$objResult2 = mysql_fetch_array($resultq);

if($objResult['Status'] == "Online")
{
$Ststus = "$online";
}
if($objResult['Status'] == "Offline")
{
$Ststus = "$offline";
}
if($objResult['Status'] == "Soon")
{
$Ststus = "$Soon";
}


?>
<div id="<?=$objResult["Programe"];?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" align="center">ตัวอย่างโปรแกรม</h3>
  </div>
  <div class="modal-body">
  <center>
  <?=$objResult["Name"];?>
<?php
 if($objResult['LinkYouTube'] == Null)
{
?>
<p> </p>
<p>กำลังเร่งทำ VDO อยู่น่ะค่ะ</p>
<?php
}else{
?>
<iframe width="450" height="315" src="//www.youtube.com/embed/<?=$objResult["LinkYouTube"];?>" frameborder="0" allowfullscreen=""></iframe>
<?php
}
?>
  <p>รับรองการใช้งานกับ</p>
  <?=$objResult["Support"];?>
	</center>
  </div>
  <div class="modal-footer">
    <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">ปิด</button>
  </div>
</div>
      <tr>

        <td><div align="center" class="style2"><?=$objResult["id_download"];?></div></td>
        <td><div align="center" class="style2"><i class="icon-ok-sign"></i> <?=$objResult["Name"];?> </div></td>
        <td><div align="center" class="style2"><a href="#<?=$objResult["Programe"];?>" data-toggle="modal">ดูตัวอย่างโปรแกรม</a></div></td>
        <td><div align="center" class="style2">
          <?=$objResult["Version"];?>
          </i></div></td>
        <td><div align="center" class="style2"><?php echo $Ststus; ?></i></div></td>

		<?
}
?>
      </tr>
    </table>
  </div>
</div>

<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
    <h5>ตัวอย่างโปรแกรม</h5>
  </div>
  <div class="widget-content"><br/>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="carousel slide" id="carousel-804291">
            <ol class="carousel-indicators">
              <li data-slide-to="0" data-target="#carousel-804291" class="active"></li>
              <li data-slide-to="1" data-target="#carousel-804291" ></li>
			  <li data-slide-to="2" data-target="#carousel-804291" ></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active"> <img src="bootstrap/img/p1.png" alt="" width="638" height="304">
                <div class="carousel-caption">
                  <h4> WallHackPB </h4>
                  <p> สามารถเติมเงินและเช่าโปรแกรมได้แล้ว!</p>
                </div>
              </div>
              <div class="item">
                <img src="bootstrap/img/1.jpg" alt="" width="638" height="304">
                <div class="carousel-caption">
                  <h4> WarZ TH Hack </h4>
                  <p>สามารถเติมเงินและเช่าโปรแกรมได้แล้ว!</p>
                </div>
              </div>
            </div>
            <a data-slide="prev" href="#carousel-804291" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-804291" class="right carousel-control">›</a> </div>
        </div>
      </div>
    </div>
  </div>
    </div>
	<div class="widget-box">
  <div class="widget-title"> <span class="icon"><i class="icon-thumbs-up"></i></span>
      <h5>ติดตามที่เฟสบุ๊ค </h5>
    </div>
    <div class="widget-content"><br/>
        <center>
          <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FESTCheats%2F&amp;width=678&amp;height=305&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=true&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:678px; height:305px;" allowtransparency="true"></iframe>
        </center>
    </div>
</div>
 <!-- End widget-content -->
<div class="widget-box">
  <div class="widget-title"> <span class="icon"> <i class="icon-headphones"></i> </span>
    <h5>ฟังเพลงเพราะๆ</h5>
  </div>
  <div class="widget-content"><br/>


  <center>
  <iframe src="http://www.wink.in.th/musicbox/200x60-b.php" width="200" height="60" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
  </center>
</div>
</div>
</div>
    </div>
  </div>
</div>