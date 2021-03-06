<?php
  # initialize slots array
  $slots = array(
    '8:00' => '',
    '9:00' => '',
    '10:00' => '',
    '11:00' => '',
    '12:00' => '',
    '1:00' => '',
    '2:00' => '',
    '3:00' => '',
    '4:00' => '',
    '5:00' => '',
  );
  # populate associate array with blank fields
  foreach($slots as $k => $v){
    $time = $k;
    $v = '<input type="text" name="' . $time . '">';
    $slots[$k] = $v;
  }
  # overwrite file if someone signs up, updates text files
  # get the incoming information
  extract ($_POST);
  $names = array(
    '8:00' => $name8 = $_POST['8:00'],
    '9:00' => $name9 = $_POST['9:00'],
    '10:00' => $name10 = $_POST['10:00'],
    '11:00' => $name11 = $_POST['11:00'],
    '12:00' => $name12 = $_POST['12:00'],
    '1:00' => $name1 = $_POST['1:00'],
    '2:00' => $name2 = $_POST['2:00'],
    '3:00' => $name3 = $_POST['3:00'],
    '4:00' => $name4 = $_POST['4:00'],
    '5:00' => $name5 = $_POST['5:00'],
  );
  # overwrite file
  $copy = file("signup.txt");
  $myfile = fopen ("signup.txt", "a") or die ("Unable to open file.");
  if ($myfile){
    foreach($names as $k => $v){
      $time = $k;
      # update only if name is present
      //echo file_get_contents("signup.txt");
       
      if (isset($_POST[$k]) && trim($_POST[$k]) !== ""){
        for ($i = 0; $i <count($copy);$i++){
          echo "test";
	  $hold = explode(",",$copy[$i]);
	  $timeb = $hold[0];
          $name = $hold[1];
	  echo $name;
	  if (trim($_POST[$k]) === trim($timeb)){
		echo "Nothing should happen, same times";  
	  }
	  else {
	    fwrite ($myfile, "$time, $v \n");
	  }
        } 	      
      }
    }  
  }
  fclose ($myfile);
  # read file for taken slots
  $myfile = fopen("signup.txt", "r") or die ("Unable to open file.");
  while (!feof($myfile)){
    $line =  fgets($myfile);
    $line_contents = explode(",", $line);
    $slots[$line_contents[0]] = $line_contents[1];
  }
  fclose($myfile);
  # call page
  signUpPage($slots);
  # manage html page
  function signUpPage($slots) {
    $script = $_SERVER['PHP_SELF'];
    print <<<SHEET
      <html>
        <head>
          <title>Sign Up Sheet </title>
        </head>
        <body>
          <br>
          <br>
          <form action = "$script" method = "post">
            <table align = "center" width = "50%" border = "2">
              <caption> Sign-Up Sheet </caption>
              <tr><th> Time </th><th> Name </th></tr>
              <tr><td> 8:00 am </td><td> {$slots['8:00']} </td></tr>
              <tr><td> 9:00 am </td><td> {$slots['9:00']} </td></tr>
              <tr><td> 10:00 am </td><td> {$slots['10:00']} </td></tr>
              <tr><td> 11:00 am </td><td> {$slots['11:00']} </td></tr>
              <tr><td> 12:00 pm </td><td> {$slots['12:00']} </td></tr>
              <tr><td> 1:00 pm </td><td> {$slots['1:00']} </td></tr>
              <tr><td> 2:00 pm </td><td> {$slots['2:00']} </td></tr>
              <tr><td> 3:00 pm </td><td> {$slots['3:00']} </td></tr>
              <tr><td> 4:00 pm </td><td> {$slots['4:00']} </td></tr>
              <tr><td> 5:00 pm </td><td> {$slots['5:00']} </td></tr>
            </table>
          <br>
          <input type = "submit" name = "sign" value = "Sign Up" style="margin-left: 50%;"/>
          </form>
        </body>
SHEET;
  }
?>
