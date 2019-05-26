<?php

        extract ($_POST);

        $userName = trim($_POST["userName"]);
        $password = crypt(trim($_POST["password"]));
	
	$uNames = array();

	$myfile = fopen("passwd.txt","r") or die ("Unable to open file.");

	while(!feof($myfile)){

                $line = fgets($myfile);
                $str = explode(":", $line);
                array_push($uNames, trim($str[0]));
	}

	fclose($myfile);

	$myfile = fopen("passwd.txt","a") or die ("Unable to open file.");
	
	if (!(in_array(trim($userName),$uNames)) and $userName != "" and $password != "" ) {
		fwrite($myfile, "$userName:$password\n");
		fclose($myfile);
		print <<<SAVED
	<html>
	<head>
	<meta charset="UTF-8">
	<title> Alyssa June Pacleb </title>
	<link rel = "stylesheet" type = "text/css" href ="hwk17.css" media = "all" >
	</head>
	<body class = "tab">
	<p class = "title">The username has not been taken <br><br>
	<img src = "./happy.gif" alt = "happy.gif" width = "300px"> <br><br>
	<button onclick="location.href='./hwk17.html'" type="button" class="button">Back to login</button>
	<p>
	</body>
	</html>
SAVED;
	}
	else {
		print <<<NOTSAVED
	<html>
	<head>
	<meta charset="UTF-8">
	<title> Alyssa June Pacleb </title>
	<link rel = "stylesheet" type = "text/css" href ="hwk17.css" media = "all" >
        </head>
        <body class ="tab">
	<p class = "title">The username has been taken <br><br>
	<img src = "./sad.gif" alt = "sad.gif" width = "300px"><br><br>
	<button onclick="location.href='./hwk17.html'" type="button" class="button">Use a unique username</button> </p>
        </body>
        </html>
NOTSAVED;
	}
?>

