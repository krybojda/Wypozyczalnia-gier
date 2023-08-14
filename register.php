<?php
  if(isSet($_POST['username'])&&isSet($_POST['password'])&&isSet($_POST['email'])){
      $user = $_POST['username'];
      $pass = md5($_POST['password']);
      $email = $_POST['email'];
      $con = mysqli_connect('localhost','root','','wypozyczalniawujkawieska');
      $query = mysqli_query($con,"select count(login) FROM user WHERE login='$user'");
      $row = mysqli_fetch_array($query);
      $exists = $row[0];
      if($exists > 0)
      {
          exit('Podany login juz istnieje!');
      }
      else{
        $sql = "INSERT INTO user(login,pass,email,typ) VALUES ('$user','$pass','$email','0')";
        if (mysqli_query($con, $sql)) {
          echo '<script type="text/javascript">
                window.location = "login.html";
                </script>';
        }
      }
      mysqli_close($con);
  }
 ?>
