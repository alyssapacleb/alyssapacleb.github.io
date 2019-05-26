<?php
print <<<TOP
<html>
<head>
<title> Database Access </title>
</head>
<body>
TOP;

// Connect to the MySQL database
$host = localhost;
$user = "cs329e_mitra_daniel17";
$pwd = "his2Proud+sewage";
$dbs = "cs329e_mitra_daniel17";
$port = "3306";

$connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

if (empty($connect))
{
  die("mysqli_connect failed: " . mysqli_connect_error());
}

// Get data from a table in the database and print it out

$table = "students";
$result = mysqli_query($connect, "SELECT * from $table order by lastName, firstName");
while ($row = $result->fetch_row())
{
  print "ID = " . $row[0] . " FirstName = " . $row[2].
        " Last Name = " . $row[1] . " Major = " . $row[3] . " GPA = " . $row[4] .  "<br /><br />\n";
}

$result->free();

print <<<BOTTOM

        </body>
        </html>
BOTTOM;




?>

