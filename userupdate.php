<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
  </head>
  <body>
    <?php
    session_start();
    $login = $_SESSION["login"];
    $email = trim($_POST["email"]);
    $password = md5(trim($_POST["password"]));
    $con = mysqli_connect("localhost", "root", "", "wypozyczalniawujkawieska");
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    mysqli_query($con,'SET NAMES \'utf8\'');
      $query = "UPDATE user SET email=\"$email\", pass=\"$password\" WHERE login=\"$login\"";
      mysqli_query($con,$query);
      echo '<script type="text/javascript">
            window.location = "user.php";
            </script>';
      ?>
  </div>
  </body>
</html>
