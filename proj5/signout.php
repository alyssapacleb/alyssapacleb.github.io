<?php


setcookie("loggedin", "", time()-3600);
echo "clicked";
header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/proj.php');

exit;
?>
