<?php


setcookie("loggedin", "", time()-3600);
echo "clicked";
header('Location: proj.php');

exit;
?>
