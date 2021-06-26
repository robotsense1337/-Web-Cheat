<?php 
     session_start();
include("config.inc.php");
include("class.php");
      if(isset($_POST['submit']))
      {
      $passwordvalue=$_POST['txtPass'];
      $password=$_POST['txtPassword'];
      $confirm_pwd=$_POST['txtConPassword'];   
      $select=mysql_query("select * from member"); 
      $fetch=mysql_fetch_array($select);
      $data_pwd=$fetch['Password'];
      $email=$fetch['id'];

      if($password==$confirm_pwd && $data_pwd==$passwordvalue)
        {
      $insert=mysql_query("update member set Password='$password' where id='$email'"); 
       $login1="password changed";
        }
      else
        {
      $login1="password not match plz try again";
        }
      }
      ?>