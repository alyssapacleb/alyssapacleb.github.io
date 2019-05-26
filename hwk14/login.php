<?php
  # get the incoming information
  extract ($_POST);
  $name = $_POST["username"];
  $pass = $_POST["password"];


  #Make an empty array to hold what usernames/passwords we already have
  $info = [];

  # read file for taken slots
  $myfile = fopen("passwd.txt", "r") or die ("Unable to open file.");
  while (!feof($myfile)){    
    $line =  fgets($myfile);
    $line_contents = explode(":", $line);
    $info[$line_contents[0]] = $line_contents[1];
  }
  fclose($myfile);

  echo "first is";
  echo $info[0];
  #open and append if it isn't there.
  if ($fh = fopen ("passwd.txt", "a"))
  {
    fwrite ($fh, "$name:$pass\n");
    fclose ($fh);
  }


?>

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
      action = "http://www.cknuckles.com/cgi/echo.cgi"
      onsubmit = "return validate();" >
    <table class = "tab">
        <tr>
            <td class = "title">Login</td>
        </tr>
        <tr>
            <td> <input type = "text" name = "userName" placeholder="Username" /></td>
        </tr>
        <tr>
            <td> <input type = "password" name = "password" placeholder="Password"/></td>
        </tr>
        <tr>
            <td> <input type = "password" name = "repeatPassword" placeholder="Repeat Password"/></td>
        </tr>
        <tr>
            <td class = "small">Username and Password must be 6-10 characters long and contain only letters and digits<br>
                Password must include a capital letter, a lowercase letter, and a number</td>
        </tr>
        <tr class = buttonarea>
            <td> <input class="button" type = "submit" value = "Enter" />
                <input class="button" type = "reset" value = "Clear" /><br><br>


        </tr>
    </table>
</form>
</body>
</html>
