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
    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <meta charset="UTF-8">
    <title>Good Bois</title>
</head>
<body>
<!--=========================================CSS STUFF =========================-->
<style>
* {box-sizing: border-box}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
    max-width: 300px;
    position: relative;
    margin: auto;
}

/* Next & previous buttons */
.prev, .next {
    cursor: url(http://cur.cursors-4u.net/nature/nat-10/nat976.gif),auto;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    background-color: rgba(0,0,0,0.8);
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    background-color: rgba(0,0,0,0.8);
}

/* The dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active, .dot:hover {
    background-color: #717171;
}

/* Fading animation */
.fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}

@-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
}

@keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
}
</style>
<!--=========================================CSS STUFF========================== -->


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
        <img src="img01.JPG" style="width:100%">
        <div class="text"><b>Leo</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>2 / 6</b></div>
        <img src="img02.JPG" style="width:100%">
        <div class="text"><b>Marley</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>3 / 6</b></div>
        <img src="img03.JPG" style="width:100%">
        <div class="text"><b>Xasha</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>4 / 6</b></div>
        <img src="img04.JPG" style="width:100%">
        <div class="text"><b>Waffle</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>5 / 6</b></div>
        <img src="img05.jpg" style="width:100%">
        <div class="text"><b>Snowy</b></div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext"><b>6 / 6</b></div>
        <img src="img06.jpg" style="width:100%">
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

