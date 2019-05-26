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
    <title>Good Bois: About</title>
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
    <a href="./proj.php"> <img src="circ2.jpg" alt="whitebackground logo" height = "50"> </a>

</div>
<p class = "TITLE">about </p>



<table>
    <tr>
	<td><a href = "about.php">ABOUT</a></td>
        <td><a href = "social.php">SOCIAL</a></td>
        <td><a href = "adopt.php">ADOPT</a></td>
        <td><a href = "contact.php">CONTACT US</a></td>    
</tr>
</table>

<p class = "sub">Our Mission Statement</p>
<p>
    Every animal deserves a home and family that cares for it.
    Good Bois is a way to show off your pet to others and view other pet owner's animals.
    We at Good Bois aim to pair you with your perfect pooch! Our site will surely help you find your “good boy”
    (or girl) at a local animal shelter!<br><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/X82RPg6rlGA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br>
Visit this website to learn more about why YOU should adopt a pet: <br><a href = "https://www.humanesociety.org/resources/top-reasons-adopt-pet">The Humane Society</a>
<br><Br></p>
<a href = "proj.php">Go Back To Main Page</a>
</body>
</html>



