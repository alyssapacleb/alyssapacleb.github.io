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
        <title>Good Bois: Adopt</title>
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
    <button type = submit class = "signoutbutton">Sign Out</button></form>
	&nbsp;
        <a href="./proj.php"> <img src="circ2.jpg" alt="whitebackground logo" height = 50px/> </a>

</div>
<p class = "TITLE">adopt</p>



<table>
        <tr>
<td><a href = "about.php">ABOUT</a></td>
        <td><a href = "social.php">SOCIAL</a></td>
        <td><a href = "adopt.php">ADOPT</a></td>
        <td><a href = "contact.php">CONTACT US</a></td>	

</tr>
</table>

<p class = "sub">Find the perfect dog for you </p>
<table>
        <tr>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
        </tr>
        <tr>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
        </tr>
        <tr>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
                <td>
                        <img src = "error.png" alt = "error">
                </td>
        </tr>


</table>
<a href = "proj.php">Go Back To Main Page</a>
</body>
</html>

