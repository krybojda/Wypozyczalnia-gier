<?php
if(isSet($_GET["idzamow"])){
    $idzamow = $_GET["idzamow"];
    $con = mysqli_connect("localhost","root","","wypozyczalniawujkawieska");
    $queryzamowienia = mysqli_query($con,"SELECT * FROM zamowienia WHERE id_zamowienia=$idzamow");
    while($rowzamowienia = mysqli_fetch_assoc($queryzamowienia)){
        $tabela = $rowzamowienia["tabela"];
        $id = $rowzamowienia["nazwa"];
        $sql = "SELECT * FROM $tabela WHERE nazwa='$id'";
        $queryilosc = mysqli_query($con,$sql);
        while($rowilosc = mysqli_fetch_assoc($queryilosc)){
            $iloscwtabeli = $rowilosc["ilosc"];
            $iloscwtabeli = $iloscwtabeli + ($rowzamowienia["suma"] / $rowzamowienia["cena"]);
            $sqlt = "UPDATE $tabela SET ilosc = $iloscwtabeli WHERE nazwa='$id'";
            $queryt = mysqli_query($con,$sqlt);
        }
    }
    $sql = "DELETE FROM zamowienia WHERE id_zamowienia=$idzamow";
    $query = mysqli_query($con,$sql);
}
echo '<script type="text/javascript">
     window.location = "index.php";
     </script>';
 ?>