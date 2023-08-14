<?php
session_start();
if (isset($_SESSION['login']))
{
  unset($_SESSION['login']);
  unset($_SESSION['koszyk']);
}
header("location:login.html");
 ?>
