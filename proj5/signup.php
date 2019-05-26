<?php

        extract ($_POST);

        $userName = trim($_POST["userName"]);
	$password = trim($_POST["password"]);
	$repPass = trim($_POST["repeatPassword"]);

        $uNames = array();

        $myfile = fopen("passwd.txt","r");

        while(!feof($myfile)){

                $line = fgets($myfile);
                $str = explode(":", $line);
                array_push($uNames, trim($str[0]));
        }
        fclose($myfile);


	$myfile = fopen("passwd.txt","a");


	if (in_array(trim($userName),$uNames)) {
		fclose($myfile);
		$message = "This user already exists";
		echo $message;
                print "<script type='text/javascript'>alert('$message');</script>";
                header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/login.html');
                exit;
	}
	else if ($password != $repPass ) {
		fclose($myfile);
		print "<script type='text/javascript'>alert('Passwords are not the same');</script>";
		header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/signup.php');
		exit;
	}

	else if ($userName == "" or $password == "" or $repPass == "") {
		fclose($myfile);
                print "<script type='text/javascript'>alert('Please complete all fields');</script>";
                header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/signup.php');
                exit;
	}

	else {
		fwrite($myfile, "$userName:$password\n");
		fclose($myfile);
		setcookie("loggedin", $userName, time() + (60*1));
                //session_start();
                echo "<script type='text/javascript'>alert('Welcome to Good Bois, $userName!');</script>";
                header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/proj.php');
                exit;
	}
	/*
        if ( $userName != "" and $password != "" and $password === $repPass and !(in_array(trim($userName),$uNames))){

                fwrite($myfile, "$userName:$password\n");
		fclose($myfile);
		echo "<script type='text/javascript'>alert('Welcome to Good Bois, $userName!');</script>";
                header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/proj.html');
                exit;
	}
        else{
		fclose($myfile);

		echo "<script type='text/javascript'>alert('');</script>";
                header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/signup.html');
                exit;
        }
	*/
        fclose($myfile);

?>
