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

$ID = trim($ID);
$FIRST = trim($FIRST);
$LAST = trim($LAST);

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

//ID
if ($ID !== ""){

        // Check if the data has been added properly to the table in the database
        $result = mysqli_query($connect, "SELECT * from $table where id = $ID");
        while ($row = $result->fetch_row())
        {
                print "ID = " . $row[0] . " First Name = " . $row[2].
                " Last Name = " . $row[1] . " Major = " . $row[3] ." GPA = " . $row[4] .  "<br /><br />\n";
        }
        $result->free();
}

else if ($LAST != "" && $FIRST == ""){

        // Check if the data has been added properly to the table in the database
        $result = mysqli_query($connect, "SELECT * from $table where lastName = '$LAST'");
        while ($row = $result->fetch_row())
        {
                print "ID = " . $row[0] . " First Name = " . $row[2].
                " Last Name = " . $row[1] . " Major = " . $row[3] ." GPA = " . $row[4] .  "<br /><br />\n";
        }
        $result->free();

}

else if ($FIRST!= "" && $LAST == ""){

        // Check if the data has been added properly to the table in the database
        $result = mysqli_query($connect, "SELECT * from $table where firstName = '$FIRST'");
        while ($row = $result->fetch_row())
        {
                print "ID = " . $row[0] . " First Name = " . $row[2].
                " Last Name = " . $row[1] . " Major = " . $row[3] ." GPA = " . $row[4] .  "<br /><br />\n";
        }
        $result->free();

}

else if ($LAST != "" && $FIRST != ""){

        // Check if the data has been added properly to the table in the database
        $result = mysqli_query($connect, "SELECT * from $table where lastName = '$LAST' && firstName = '$FIRST'");
        while ($row = $result->fetch_row())
        {
                print "ID = " . $row[0] . " First Name = " . $row[2].
                " Last Name = " . $row[1] . " Major = " . $row[3] ." GPA = " . $row[4] .  "<br /><br />\n";
        }
        $result->free();

}

print <<<BOTTOM
        </body>
        </html>

BOTTOM;



?>



