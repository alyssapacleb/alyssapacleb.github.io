<?php
$user = $_COOKIE["loggedin"];
//print $user;
$cookie_name = "loggedin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="topicon.ico" />
    <link rel = "stylesheet" type = "text/css" href ="./proj.css" media = "all" >
    <meta charset="UTF-8">
    <title>Good Bois</title>
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



<p class = "TITLE">good bois &nbsp;<a href="./proj.php"><img src = "circ1.jpg" alt = "Purple Background logo"></a> </p>

<table>
    <tr>
        <td><a href = "about.php">ABOUT</a></td>
        <td><a href = "social.php">SOCIAL</a></td>
        <td><a href = "adopt.php">ADOPT</a></td>
        <td><a href = "contact.php">CONTACT US</a></td>
    </tr>
</table>


<table class = "maintab">
    <tr>
        <td class = "sub">social</td>
        <td class = "sub">adopt</td>
    </tr>
    <tr>
        <td class = "bod">
           Already have your best friend?<br>Connect with other dog owners and show off your good boy using Good Bois <em>social</em>!
        </td>
        <td class = "bod">Looking for a furry friend?<br>Enter your pet and living preferences to be matched with your perfect pup with Good Bois<em> adopt</em>!
        </td>

    </tr>
        
</table>
<br><br><br>
<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext"><b>1 / 6</b></div>
        <img src="img01.JPG" style="width:100%" alt = "img">
        <div class="text"><b>Leo</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>2 / 6</b></div>
        <img src="img02.JPG" style="width:100%" alt = "img">
        <div class="text"><b>Marley</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>3 / 6</b></div>
        <img src="img03.JPG" style="width:100%" alt = "img">
        <div class="text"><b>Xasha</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>4 / 6</b></div>
        <img src="img04.JPG" style="width:100%" alt = "img">
        <div class="text"><b>Waffle</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>5 / 6</b></div>
        <img src="img05.jpg" style="width:100%" alt = "img">
        <div class="text"><b>Snowy</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>6 / 6</b></div>
        <img src="img06.jpg" style="width:100%" alt = "img">
        <div class="text"><b>Fudge</b></div>
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
</div>
<script type="text/javascript" src="proj.js"></script>

</body>
</html>

