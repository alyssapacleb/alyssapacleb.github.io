<?php
$user = $_COOKIE["loggedin"];

function gtToken(){
//	$ch = curl_init("https://api.petfinder.com/v2/oauth2/token");

	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	//$result = curl_exec($ch);

        //curl_close($ch);

	//return $result;
	
}

gtToken();
/*
if ($tk){
	echo $tk;
}
else {
	echo "no response";
}
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="topicon.ico" />
	<link rel = "stylesheet" type = "text/css" href ="./pages.css" media = "all" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src='script.js'></script>
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
    <form method = "post" action = "signout.php" onclick="alert('Goodbye!')">
    <button type = submit class = "signoutbutton">Sign Out</button></form>
	&nbsp;
        <a href="./proj.php"> <img src="circ2.jpg" alt="whitebackground logo" height = "50"/> </a>

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
<p>Search for a pet in your area and click on their name to learn more about them!</p>
<form>
<table class = "form">
	<tr>
        	<td><label for="zip">Zip</label></td>
        	<td><input type="text" name="zip" id="zip"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" id="submitZip" value = "Search" class = "button"></td>
	</tr>
</table>
</form>
        
<!--
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
-->
<!--<a id = "bot" href = "proj.php">Go Back To Main Page</a> -->

<p id = "bot"> </p>
</body>
</html>

