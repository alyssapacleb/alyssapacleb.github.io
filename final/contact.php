<?php
$user = $_COOKIE["loggedin"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="topicon.ico" />
	<link rel = "stylesheet" type = "text/css" href ="./pages.css" media = "all" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Good Bois: Contact</title>
</head>
<body>

<div class = "header">
<?php
if ($user != "") {
    print "Hello, $user!";
}
?>
&nbsp;
  
    <input class = "button" type = button onclick= "window.location.href = 'login.html';" value = login>
    &nbsp;
    <input class = "button" type = "button" onclick = "window.location.href = 'signup.html';" value = "signup">
    &nbsp;
    <form method = "post" action = "signout.php">
    <button type = submit class = "signoutbutton" onclick="alert('Goodbye!')">Sign Out</button></form>
    &nbsp;
    <a href="./proj.php"> <img src="circ2.jpg" alt="whitebackground logo" height = "50"/> </a>

</div>
<p class = "TITLE">contact us</p>



<table>
	<tr>
<td><a href = "about.php">ABOUT</a></td>
        <td><a href = "social.php">SOCIAL</a></td>
        <td><a href = "adopt.php">ADOPT</a></td>
        <td><a href = "contact.php">CONTACT US</a></td>
        </tr>
</table>

<p class = "sub">How are we doing? </p>
<p>
    Let us know what features we should add to this site. Your input is greatly appreciated.
</p>


<form method = "post" action = "contactvalid.php" onsubmit = "commentSubmit()">
<table class = "form">
    <tr>
        <td>Name: </td>
        <td><input type = "text" name = "name" style="width: 300px;"></td>
    </tr>
    <tr>
        <td>E-mail:</td>
        <td><input type = "text" name = "email" style="width: 300px; "></td>
    </tr>
    <tr>
        <td>Comments:</td>
        <td><textarea rows="4" cols="47" name ="comment"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button type = submit>Submit</button>&nbsp;<button type = "reset" name = "reset">Reset</button></td>
    </tr>

</table>

</form>

<br><br>
<table class = "pparea">
    <tr>
        <td>
            <a href="mailto:danielos217@utexas.edu" class = "ournames"> <img class = "pp" src="daniel.jpg" alt="whitebackground logo" height = "150"></a>
        </td>
        <td>
            <a href="mailto:alyssapacleb@utexas.edu" class = "ournames"> <img class = "pp" src="alyssa.jpg" alt="whitebackground logo" height = "150"/></a>
        </td>
    </tr>
    <tr>
        <td>
            Daniel Sanchez<br>danielos217@utexas.edu
        </td>
        <td>
            Alyssa June Pacleb<br>alyssapacleb@utexas.edu
        </td>
    </tr>

</table>


<script>
function commentSubmit() {
	alert("Thank you for your comment!");
}
</script>


<a href = "proj.php">Go Back To Main Page</a>
</body>
</html>

