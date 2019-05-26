<?php

$user = $_COOKIE["loggedin"];

/*
if (isset($_COOKIE["loggedin"]) {
	echo $social_logged_in;
}

 */
/*
else {
	echo $social_not_logged_in;
}
 */

?>

<?php


$social_logged_in = <<<LOGGEDIN
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="topicon.ico" />
	<link rel = "stylesheet" type = "text/css" href ="./pages.css" media = "all" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Good Bois: Social</title>
</head>
<body onload="setup()">
<script>
            function setup() {
                document.getElementById('buttonid').addEventListener('click', openDialog);
                function openDialog() {
                    document.getElementById('fileid').click();
                }
                document.getElementById('fileid').addEventListener('change', submitForm);
                function submitForm() {
                    document.getElementById('formid').submit();
                }
            }
</script> 


<div class = "header">
	Hello, $user! &nbsp;
        <input class = "button" type = button onclick= "window.location.href = 'login.html';" value = login>
        &nbsp;
        <input class = "button" type = "button" onclick = "window.location.href = 'signup.html';" value = "signup">
	&nbsp;
        <form method = "post" action = "signout.php">
        <button type = submit class = "signoutbutton">Sign Out</button></form>
	&nbsp;
        <a href="./proj.php"> <img src="circ2.jpg" alt="whitebackground logo" height = 50px/> </a>

</div>
<p class = "TITLE">social</p>



<table>
	<tr>
<td><a href = "about.php">ABOUT</a></td>
        <td><a href = "social.php">SOCIAL</a></td>
        <td><a href = "adopt.php">ADOPT</a></td>
        <td><a href = "contact.php">CONTACT US</a></td>
        </tr>
</table>

<p class = "sub">Connect with other dog lovers </p>
<p><br><br>
<form id='formid' action="social.php" method="POST" enctype="multipart/form-data"> 
            <input id='fileid' type='file' class = "button" name='filename' hidden/>
            <input id='buttonid' type='button' class = "button" value='Upload' /> 
            <input type='submit' value='Submit'class = "button" /> 
</form> 
</p>

<table class = "all">
        <tr>
                <td class = "post"><span class = "user">XXxxdog_lover_ajpacsxxXX</span><br><span class = "caption">Fudge loves playing with his ball!</span><br><br><img src = "./img06.jpg" alt = "Fudge" height = 500px> </td>
        </tr>
        <tr>

        </tr>
        <tr>
                <td class = "post"><span class = "user">bug_in_a_rug98</span><br><span class = "caption">Snowy is a princess and her bed is her throne</span><br><br><img src = "./img05.jpg" alt = "Snowy" height = 500px> </td>
        </tr>

</table>

<a href = "proj.php">Go Back To Main Page</a>
</body>
</html>
LOGGEDIN;

?>



<?php

$social_not_logged_in = <<<NOTLOGGEDIN
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" type="image/x-icon" href="topicon.ico" />
        <link rel = "stylesheet" type = "text/css" href ="./pages.css" media = "all" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Good Bois: Social</title>
</head>
<body onload="setup()">
<script>
            function setup() {
                document.getElementById('buttonid').addEventListener('click', openDialog);
                function openDialog() {
                    document.getElementById('fileid').click();
                }
                document.getElementById('fileid').addEventListener('change', submitForm);
                function submitForm() {
                    document.getElementById('formid').submit();
                }
            }
</script>


<div class = "header">

        <input class = "button" type = button onclick= "window.location.href = 'login.html';" value = login>
        &nbsp;
	<input class = "button" type = "button" onclick = "window.location.href = 'signup.html';" value = "signup">
        &nbsp;
        <form method = "post" action = "signout.php">
        <button type = submit class = "signoutbutton">Sign Out</button></form>

        &nbsp;
        <a href="./proj.php"> <img src="circ2.jpg" alt="whitebackground logo" height = 50px/> </a>

</div>
<p class = "TITLE">social</p>

<table>
        <tr>
<td><a href = "about.php">ABOUT</a></td>
        <td><a href = "social.php">SOCIAL</a></td>
        <td><a href = "adopt.php">ADOPT</a></td>
        <td><a href = "contact.php">CONTACT US</a></td>	
</tr>
</table>

<p class = "sub">Connect with other dog lovers </p>
<p>
Please login to post your dog pictures to Good Bois Social<br><br>
</p>

<a href = "proj.php">Go Back To Main Page</a>
</body>
</html>
NOTLOGGEDIN;

?>


<?php

if ($user != "") {
        echo $social_logged_in;
}
else {
	echo $social_not_logged_in;
}


?>
