<?php

        extract ($_POST);
        $name = $_POST["userName"];
        $pw = $_POST["password"];

        $name = trim($name);
        $pw = trim($pw);

        $myfile = fopen("passwd.txt","r");

        while(!feof($myfile)){

                $line = fgets($myfile);
                $str = explode(":", $line);


                if ( $name == trim($str[0]) && $pw == trim($str[1])){
                        fclose($myfile);
			setcookie("loggedin", $name, time() + (60*1));
			header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/proj.php');
			exit();
		}
		else {
                }
	}
        fclose($myfile);
        header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/login.php');
	exit();







?>
