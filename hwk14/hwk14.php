<?php
$full_page = <<<FULL_PAGE
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" type = "text/css" href ="./hwk14.css" media = "all" >
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <meta charset="UTF-8">
    <title>Alyssa June Pacleb</title>
</head>
<body>

<p class = "TITLE">USA Games <br>Today</p>

<table>
    <tr>
        <td><a href = "1.php">Pokemon <br>Go</a></td>
        <td><a href = "2.php">Overwatch</a></td>
        <td><a href = "3.php">Pokemon Sword <br>and Shield</a></td>
        <td><a href = "4.php">Stardew <br>Valley</a></td>
        <td><a href = "5.php">Overwatch <br>Leauge</a></td>
    </tr>
</table>

<p  class = "sub">Games are super cool</p>
<p>Everyone loves games and this website is an example of cookies and sessions<br><br>
The headlines are above.</p>
</body>
</html>
FULL_PAGE;
?>


<?php
$login = <<<LOGIN
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
      action = "https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/hwk14/hwk14.php"
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
            <td class = "small">Both Username and Password must entered.<br>Just enter something in for both fields.</td>
        </tr>
        <tr class = buttonarea>
            <td> <input class="button" type = "submit" value = "Enter" />
                <input class="button" type = "reset" value = "Clear" /><br><br>


        </tr>
    </table>
</form>
</body>
</html>
LOGIN;
?>

<?php
?>
<html>
<body>
<?php
echo $full_page;
?>
</body>
</html>
<?php
?>

