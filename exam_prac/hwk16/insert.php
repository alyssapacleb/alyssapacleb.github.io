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
$FIRST = $_POST["fn"];
$LAST = $_POST["ln"];
$MAJOR = $_POST["major"];
$GPA = $_POST["gpa"];

$ID = trim($ID);
$FIRST = trim($FIRST);
$LAST = trim($LAST);
$MAJOR = trim($MAJOR);
$GPA = trim($GPA);



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


$stmt = mysqli_prepare ($connect, "INSERT INTO $table VALUES (?, ?, ?, ?, ?)");
mysqli_stmt_bind_param ($stmt, 'sssss', $ID, $LAST, $FIRST, $MAJOR, $GPA);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);



print <<<BOTTOM
</body>
</html>
BOTTOM;

?>
          
