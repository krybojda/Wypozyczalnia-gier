<?php
session_start();
$con = mysqli_connect("localhost","root","","wypozyczalniawujkawieska");
$query = mysqli_query($con,"SELECT id_zamowienia FROM zamowienia");
$last_order = rand(1000000,9999999);
$suma = 0;
for($i=0;$i<count($_SESSION["koszyk"]);$i++){
  $id = $_SESSION["koszyk"][$i]["id"];
  $tabela = $_SESSION["koszyk"][$i]["tab"];
  $nazwa = $_SESSION["koszyk"][$i]["nazwa"];
  $cena = $_SESSION["koszyk"][$i]["cena"];
  $suma = $cena * $_SESSION["koszyk"][$i]["ilosc"];
  $sql = "SELECT ilosc FROM $tabela WHERE id=$id";
  $query = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($query)){
    $iloscwtabeli = $row["ilosc"];
    $iloscwtabeli = $iloscwtabeli - $_SESSION["koszyk"][$i]["ilosc"];
    var_dump($iloscwtabeli);
    $sql = "UPDATE $tabela SET ilosc = $iloscwtabeli WHERE id=$id";
    $query = mysqli_query($con,$sql);
  }
  $iduser = $_SESSION['iduser'];
  $sql = "INSERT INTO zamowienia(id_zamowienia,id_prod,tabela,nazwa,cena,suma,iduser) VALUES ('$last_order','$id','$tabela','$nazwa','$cena','$suma','$iduser')";
  $query = mysqli_query($con,$sql);
}
unset($_SESSION["koszyk"]);
echo '<script type="text/javascript">
     window.location = "index.php";
     </script>';
 ?>