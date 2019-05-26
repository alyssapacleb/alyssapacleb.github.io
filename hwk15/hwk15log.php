<?php
  


function login(){
        $last1 = $_COOKIE["last"];
        print $last1;
	



        extract ($_POST);
        $name = $_POST["user"];
        $pw = $_POST["pw"];

        $name = trim($name);
        $pw = trim($pw);
	
	$my_results = fopen("results.txt", "r");
	
	while(!feof($my_results)){
		$line = fgets($my_results);
		$str = explode(":", $line);
		if ($name == $str[0]) {
			fclose($my_results);
			header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/hwk15/login.php');
			exit;
		}
	}
	fclose($my_results);
 
	$myfile = fopen("passwd.txt","r");

        while(!feof($myfile)){

                $line = fgets($myfile);
                $str = explode(":", $line);


                if ( $name == trim($str[0]) && $pw == trim($str[1])){

                        fclose($myfile);
			setcookie("started", $name, time() + (60*15));
			session_start();

                        header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/hwk15/15.php');
                        exit;
                }

        }
        fclose($myfile);
        header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/hwk15/login.php');
        exit;

}

login();



?>
