<?php
  
print <<<TOP
<html>
<head>
<title> Database Access </title>
</head>
<body>
TOP;

extract ($_POST);

$ID = $_POST["id"];

$ID = trim($ID);


// Connect to the MySQL database
$host = localhost;
$user = "cs329e_mitra_daniel17";
$pwd = "his2Proud+sewage";
$dbs = "cs329e_mitra_daniel17";
$port = "3306";
$table = "students";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

if (empty($connect))
{
  die("mysqli_connect failed: " . mysqli_connect_error());
}

print "Thank you";

mysqli_query($connect, "DELETE FROM $table WHERE id ='$ID'");

print <<<BOTTOM
</body>
</html>
BOTTOM;

?>

