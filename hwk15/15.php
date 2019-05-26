<?php

session_start();

if (!isset($_SESSION["number"]))
{ 
  $_SESSION["number"] = 0;
  $_SESSION["answer"] = 0;
  $_SESSION["correct"] = 0;
  $_SESSION["question"] = "";

}

$total_number = 6;

if (!isset($_COOKIE["started"])) {
	$user = $_COOKIE["started"];
        $scoreb = $correct * 10;
        $myfile = fopen("results.txt", "a");
        fwrite($myfile, "$user:$scoreb\n");
	fclose($myfile);
	session_destroy();
	header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/hwk15/login.php');
	exit;
}

print <<<TOP
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" type = "text/css" href ="hwk15.css" media = "all" >
    <title>Alyssa June Pacleb</title>
</head>
<body class = "tab">
TOP;

$number = $_SESSION["number"];
$answer = $_SESSION["answer"];
$correct = $_SESSION["correct"];
$question = $_SESSION["question"];

function check($data) {
        $data = trim($data);
        $data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = strtolower($data);
        return $data;
}

if ($number == 0)
{
}

if ($number > 0)
{
  if (check($_POST["answer"]) == $answer)
  {
    $correct++;
    $_SESSION["correct"] = $correct;
  }
  else
  {
  }
}


if ($number >= $total_number)
{	
	$user = $_COOKIE["started"];
	setcookie("started", "", time()-3600);
	$scoreb = $correct * 10;
	$myfile = fopen("results.txt", "a");
	fwrite($myfile, "$user:$scoreb\n");
	fclose($myfile);
	print <<<FINAL_SCORE
  <h2>Your final score is $scoreb out of 60. <br /><br />
  Thank you for playing. <br /><br /></h2>
FINAL_SCORE;
  session_destroy();
}
else if($number == 0)
{
  $number++;
  $_SESSION["number"] = $number;
  $answer = "false";
  $_SESSION["answer"] = $answer;
  $script = $_SERVER['PHP_SELF'];
  print <<<FORM
<form name = "quiz" method = "post" action=$script class = "info">
    <h1>Astronomy Quiz</h1>
    <h2>True/False</h2>

    <b>1)</b>According to Kepler the orbit of the earth is a circle with the sun at the center. <br>
    <input type = "radio" name = "answer" value = "true">True
    <input type = "radio" name = "answer" value = "false">False
<div class = "buttonarea">
        <br><br><input type="submit" value="Submit" class = "button"></div>
</form>
</body>
</html>


FORM;
}
else if($number == 1)
{
  $number++;
  $_SESSION["number"] = $number;
  $answer = "true";
  $_SESSION["answer"] = $answer;
  $script = $_SERVER['PHP_SELF'];
  print <<<FORM
<form name = "quiz" method = "post" action=$script class = "info">
    <h1>Astronomy Quiz</h1>
    <h2>True/False</h2>

<b>2)</b> Ancient astronomers did consider the heliocentric model of the solar system but
    rejected it because they could not detect parallax. <br>
    <input type = "radio" name = "answer" value = "true">True
    <input type = "radio" name = "answer" value = "false">False

<div class = "buttonarea">
        <br><br><input type="submit" value="Submit" class = "button"></div>
</form>
</body>
</html>
	
FORM;
}

else if($number == 2 )
{
  $number++;
  $_SESSION["number"] = $number;
  $answer = "b";
  $_SESSION["answer"] = $answer;
  $script = $_SERVER['PHP_SELF'];
  print <<<FORM
<form name = "quiz" method = "post" action=$script class = "info">
    <h1>Astronomy Quiz</h1>
    <h2>Multiple Choice</h2>

<b>3)</b> The total amount of energy that a star emits is directly related to its<br>
    <input type = "checkbox" name = "answer" value = "a">a) surface gravity and magnetic field<br>
    <input type = "checkbox" name = "answer" value = "b">b) radius and temperature<br>
    <input type = "checkbox" name = "answer" value = "c">c) pressure and volume<br>
    <input type = "checkbox" name = "answer" value = "d">d) location and velocity<br>

<div class = "buttonarea">
        <br><br><input type="submit" value="Submit" class = "button"></div>
</form>
</body>
</html>
FORM;
}

else if($number == 3)
{
  $number++;
  $_SESSION["number"] = $number;
  $answer = "d";
  $_SESSION["answer"] = $answer;
  $script = $_SERVER['PHP_SELF'];
  print <<<FORM
<form name = "quiz" method = "post" action=$script class = "info">
    <h1>Astronomy Quiz</h1>
    <h2>Multiple Choice</h2>

<b>4)</b> Stars that live the longest have<br>
    <input type = "checkbox" name = "answer" value = "a">a) high mass<br>
    <input type = "checkbox" name = "answer" value = "b">b) high temperature<br>
    <input type = "checkbox" name = "answer" value = "c">c) lots of hydrogen<br>
    <input type = "checkbox" name = "answer" value = "d">d) small mass<br>

<div class = "buttonarea">
        <br><br><input type="submit" value="Submit" class = "button"></div>
</form>
</body>
</html>
FORM;
}
else if($number == 4)
{
  $number++;
  $_SESSION["number"] = $number;
  $answer = "galaxy";
  $_SESSION["answer"] = $answer;
  $script = $_SERVER['PHP_SELF'];
  print <<<FORM
<form name = "quiz" method = "post" action=$script class = "info">
    <h1>Astronomy Quiz</h1>
    <h2>Fill in the blank</h2>

<b>5)</b> A collection of a hundred billion stars, gas, and dust is called a <input type = "text" id = "5" class = "box" name = "answer">.

<div class = "buttonarea">
        <br><br><input type="submit" value="Submit" class = "button"></div>
</form>
</body>
</html>
FORM;
}
else if($number == 5)
{
  $number++;
  $_SESSION["number"] = $number;
  $answer = "age";
  $_SESSION["answer"] = $answer;
  $script = $_SERVER['PHP_SELF'];
  print <<<FORM
<form name = "quiz" method = "post" action=$script class = "info">
    <h1>Astronomy Quiz</h1>
    <h2>Fill in the blank</h2>

The inverse of the Hubble's constant is a measure of the <input type = "text" id = "6" class = "box" name = "answer"> of the universe.
<div class = "buttonarea">
        <br><br><input type="submit" value="Submit" class = "button"></div>
</form>
</body>
</html>
FORM;
}

print <<<BOTTOM
</body>
</html>
BOTTOM;

?>

