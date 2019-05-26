<?php
  # get the incoming information
  extract ($_POST);
  $name = $_POST["user"];
  $firstPass = $_POST["pass"];
  $secPass = $_POST["repass"];
  
  # open file 'info.txt' and append the name and e-mail address
  if ($fh = fopen ("passwd.txt", "a"))
  {
    fwrite ($fh, "$name $firstPass $secPass \n");
    fclose ($fh);
  }
  
  if ($firstPass === $secPass) {

  # Write thank you page
  print <<<REGISTRATION_RESULT
  <html>
  <head>
  <title> Registration Result </title>
  </head>
  <body>
  <h1> Thank You for Registering </h1>
  <h2> An e-mail confirmation will be sent to you. </h2>
  </body>
  </html>
REGISTRATION_RESULT;
  }
  else {
	print <<<REGISTRATION_RESULT
  <html>
  <head>
  <title> Registration Result </title>
  </head>
  <body>
  <h1> Wrong you idiot</h1>
  <h2> try again. </h2>
  </body>
  </html>
REGISTRATION_RESULT;
  }

?>
