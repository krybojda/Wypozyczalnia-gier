<?php
$con = mysqli_connect("localhost","root","","wypozyczalniawujkawieska");
$typ = $_GET["typ"];
$nazwa = $_POST["nazwa"];
$producent = $_POST["producent"];
$vmax = $_POST["vmax"];
$ilosc = $_POST["ilosc"];
$cena = $_POST["cena"];
$query = mysqli_query($con,"INSERT INTO $typ VALUES ('','$nazwa','$producent','$vmax','$cena','$ilosc')");
echo '<script type="text/javascript">
      window.location = "index.php";
      </script>';
 ?>
