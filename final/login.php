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


                if ( $name == trim($str[0]) && hash_equals(trim($str[1]), crypt($pw, trim($str[1])))){
                        fclose($myfile);
                        setcookie("loggedin", $name, time() + (60*15));
                        header('Location: proj.php');
                        exit();
                }
                else {
                }
        }
        fclose($myfile);
        header('Location: login.php');
        exit();


        // $pw == trim($str[1])




?>

