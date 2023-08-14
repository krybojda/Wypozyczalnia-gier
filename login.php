<?php
if(isSet($_POST['username'])&&isSet($_POST['password'])){
    session_start();
    $_SESSION["typ_konta"]=NULL;
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $con = mysqli_connect('localhost','root','','wypozyczalniawujkawieska');
    $query = mysqli_query($con,"select * FROM user WHERE login='$user' && pass='$pass'");
    $row = mysqli_num_rows($query);
    if($row == 1)
    {
      while($row = mysqli_fetch_assoc($query)){
        $_SESSION["typ_konta"] = $row["typ"];
        $_SESSION["login"] = $user;
        $_SESSION["iduser"] = $row["id"];
      }
      echo '<script type="text/javascript">
             window.location = "index.php";
            </script>';
    }
    else{
      echo '<script type="text/javascript">
            window.location = "login.html";
            </script>';
    }
    mysqli_close($con);
}
?>
