

<?php
$set3 = <<<SET_3


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href ="./hwk14.css" media = "all" >
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <title>Pokemon Sword and Shield</title>
</head>
<body>
<p class = "sub">Pokemon Sword and Shield</p>
<p>
Game Freak has announced a new Pokemon game called Pokemon Sword and Shield.
<br>The games are scheduled for a worldwide release in late 2019.
</p></body>
</html>

SET_3;

$not3 = <<<NOT_3
<html>
<head>
    <title> Good Bois Login </title>
    <link rel = "stylesheet" type = "text/css" href ="signup.css" media = "all" >
    <meta charset="UTF-8">
    <script type ="text/javascript" src = "./signup.js"></script>
</head>
<body>
<br><br><br>
<form id = "textForm" method = "post"
      action = "3.php"
      onsubmit = "return validate();" >
    <table class = "tab">
        <tr>
            <td class = "title">Login</td>
        </tr>
        <tr><td> <input type = "text" name = "userName" placeholder="Username" /></td></tr>
        <tr><td> <input type = "password" name = "password" placeholder="Password"/></td></tr>
        <tr><td class = "small">Both Username and Password must entered.<br>Just enter something in for both fields.</td></tr>
        <tr class = buttonarea>
            <td> <input name = "submit" class="button" type = "submit" value = "Enter" />
                <input class="button" type = "reset" value = "Clear" /><br><br>
        </tr>
    </table>
</form>
</body>
</html>
NOT_3;

?>

<?php

#get the incoming information

extract ($_POST);
$name = $_POST["userName"];
$pass = $_POST["password"];



$lines = file("passwd.txt");
$count = count($lines);
$file = array();

for ($i = 0; $i<$count;$i++) {
        #echo $lines[$i];
        #echo "<br>";
        $log = explode(":", $lines[$i]);
        array_push($file, $log[0],$log[1]);

}

#SO WE'RE ASSUMING THAT USERNAME:PASSWORD
#USERNAMES ARE EVEN 0,2,4,6...
#PASSWORDS ARE ODD 1,3,5,7...

for ($i = 0; $i <count($file); $i++) {
        if (($i%2) == 0){

                #echo $file[$i];
                #echo "<br>";
                if (trim($name) == trim($file[$i]) && trim($pass) == trim($file[$i+1] )) {
                        #echo "welcome back";
                        #echo "<br>";
                        break;
                }
                else{
                        #echo "not the same";
                        #echo "<br>";
                        $myfile = fopen("passwd.txt", "a") or die("Unable to open file");
                        fwrite($myfile, $name.":".$pass."\n");
                        fclose($myfile);
                }
        }
}

setcookie($name, $password, time() + (30*1), "/"); // 30 seconds

#echo "<br>";

if(!isset($_COOKIE[$name])) {
        if (trim($name) === ""){
                #echo "Cookie named '" . $name . "' is not set!";
                echo $not3;
        }
        else{
                echo $set3;
        }
}
else {
    # echo "Cookie '" . $name . "' is set!<br>";
    # echo "Value is: " . $_COOKIE[$name];
    echo $set3;
}

?>


