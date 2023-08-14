<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Strona Główna</title>
  </head>
  <body>
    <div class="sidenav">
      <a href="index.php"><img src="logo.png"></a>
	  <hr>
      <a href="index.php?typ=fps">FPS</a>
      <a href="index.php?typ=strategia">Strategia</a>
      <a href="index.php?typ=rpg">RPG</a>
      <a href="index.php?typ=visual_novel">Visual Novel</a>
      <a href="index.php?typ=wyscigi">Wyścigi</a>
      <a href="zamowienia.php">Zamówienia</a>
      <a href="koszyk.php">Koszyk</a>
      <?php
      session_start();
        if(isSet($_SESSION["login"])){
          $user = $_SESSION["login"];
        }
        else{
          echo '<script type="text/javascript">
                window.location = "login.html";
                </script>';
        }
      if(isSet($_SESSION["login"])){
        $con = mysqli_connect("localhost","root","","wypozyczalniawujkawieska");
        $query = mysqli_query($con,"SELECT * FROM user WHERE login=\"$user\"");
        if (mysqli_num_rows($query) > 0) {
            while($row = mysqli_fetch_assoc($query)) {
              if($row["typ"]==1){
                echo "<a href='admin.php'>Admin</a>";
                $_SESSION["typkonta"] = "1";
              }
            }
          }
          echo "<a href='user.php'>Użytkownik</a>";
      }
      ?>
      <a href="wyloguj.php">Wyloguj</a>
    </div>
    <div class="main">
        <?php
          if(isSet($_SESSION["login"])&&isSet($_GET["typ"])){
            $typ = $_GET["typ"];
            echo '<h1 style="text-align: center">' . ucwords($typ) . "</h1>";
            $con = mysqli_connect("localhost","root","","wypozyczalniawujkawieska");
            $query = mysqli_query($con, "SELECT * FROM $typ");
            if (mysqli_num_rows($query) > 0) {
              echo '<table class="jq-toggle-table table table-condensed table-striped">';
              echo "<tr><th>nazwa</th><th>producent</th><th>Rok wydania</th>
              <th>ilosc</th><th>Ilość na stanie</th><th>Cena za tydzień wypożyczenia</th><th>Wypożycz</th></tr>";
              $i = 0;
              $k = 0;
                while($row = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td class='text-center'>" .  $row["nazwa"] . "</td>";
                        echo "<td class='text-center'>" .  $row["producent"] . "</td>";
                        echo "<td class='text-center'>" .  $row["rok_wydania"] . "</td>";
                        //echo "<td class='text-center'>" .  $row["ilosc"] . "</td>";
                        echo "<td class='text-center'><input type=\"number\" min=\"1\" id=\"ilosc".$i."\"></td>";
                        echo "<td class='text-center'>" . $row["ilosc"] . "</td>";
                        echo "<td class='text-center'>" .  $row["cena"] . "</td>";
                        if(isSet($_SESSION['koszyk'])){
                          for($j=0;$j<count($_SESSION["koszyk"]);$j++){
                            if($_SESSION["koszyk"][$j]["nazwa"] == $row["nazwa"]){
                              $k = $_SESSION["koszyk"][$j]["ilosc"];
                            }
                          }
                        }
                        echo "<td class='text-center'><button onclick='url(".$row["id"] .",\"".$typ."\"" . ",\"" .$row["nazwa"]."\"," .$row["cena"]."," .$row["ilosc"] . "," . $i . "," . $k . ")'>Dodaj do koszyka</button></td>";
                        echo "</td>";
                        $i++;
                }
                echo "</table>";
              }
              else{
                echo "Brak na stanie!";
              }
          }
          else{
            echo "<h1><center>Witamy na stronie głównej wypozyczalniawujkawieska!</center></h1>";
			echo "<br>";
			echo '<center><div id="gif"><img src="sg.gif"></a></div></center>';
          }
         ?>
         <script type="text/javascript">
           function url(id, tab, nazwa, cena, tempilosc,i,k){
             valueBox = "ilosc" + i;
             ilosc = document.getElementById(valueBox).value;
             if(ilosc > tempilosc){
              
               alert("Wprowadzona ilość wieksza niż dostępna na stanie!");
             }
             else if(parseInt(ilosc) + parseInt(k) > tempilosc){
              alert("Suma produków wprowadzonych i z koszyka większa niż na stanie!");
             }
             else if(ilosc<1){
               alert("Ilość nie może być mniejsza niż 1!");
             }
             else{
              var idrow = "idrow" + id;
              var url = "dodajdokoszyka.php?tab=" + tab + "&id=" + id + "&cena=" + cena + "&nazwa=" + nazwa + "&ilosc=" + ilosc;
              window.location = url;
             }
             
           }
         </script>
         <script type="text/javascript">
           $(document).ready(function() {
             $("#jq-toggle-button").click(function(){
               $(".jq-toggle-table").toggle();
             });
           });
         </script>
    </div>
  </body>
</html>