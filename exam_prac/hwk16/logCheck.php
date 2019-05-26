<?php
  
function login(){

        extract ($_POST);
        $name = $_POST["user"];
        $pw = $_POST["pw"];

        $name = trim($name);
        $pw = trim($pw);


        $myfile = fopen("passwd","r");

        while(!feof($myfile)){

                $line = fgets($myfile);
                $str = explode(":", $line);


                if ( $name == trim($str[0]) && $pw == trim($str[1])){

                        fclose($myfile);
                        //setcookie("started", $name, time() + (60*15));
                        //session_start();

                        header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/daniel17/dbase/home.php');
                        exit;
                }

        }
        fclose($myfile);
        echo "Login Failed";

}

login();

?>

