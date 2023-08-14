<?php 
session_start();
unset($_SESSION['koszyk']);
echo '<script type="text/javascript">
window.location = "index.php";
</script>';
?>