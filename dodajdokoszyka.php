<?php
  session_start();
  $itemp = -1;
  if(isSet($_SESSION["koszyk"])){
    if(isSet($_GET["id"])&&isSet($_GET['tab'])&&isSet($_GET['cena'])&&isSet($_GET["ilosc"])){
      for($i=0;$i<count($_SESSION["koszyk"]);$i++){
        if($_SESSION["koszyk"][$i]["nazwa"]==$_GET["nazwa"]){
          $itemp = $i;
          break;
        }
      }
      if($itemp>=0){
        $_SESSION["koszyk"][$itemp]["ilosc"] = $_SESSION["koszyk"][$itemp]["ilosc"] + $_GET["ilosc"];
      }
      else{
        $nowyprzedmiot = array(
          'id' => $_GET['id'],
          'tab' => $_GET['tab'],
          'cena' => $_GET['cena'],
          'ilosc' => $_GET['ilosc'],
          'nazwa' => $_GET['nazwa']);
        array_push($_SESSION['koszyk'],$nowyprzedmiot);
      }
    }
  }
  else{
            $_SESSION['koszyk'] = array();
            $nowyprzedmiot = array('id' => $_GET['id'],
                                    'tab' => $_GET['tab'],
                                    'cena' => $_GET['cena'],
                                    'ilosc' => $_GET['ilosc'],
                                    'nazwa' => $_GET['nazwa']);
            array_push($_SESSION['koszyk'],$nowyprzedmiot);
  }
  header('Location: index.php');          
?>
