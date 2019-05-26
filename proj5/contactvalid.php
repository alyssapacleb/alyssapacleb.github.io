<?php

	function purge($str) {
		$purged_str = preg_replace("/\n/", " ", $str);
		return $purged_str;
	}

	extract ($_POST);
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$comment = purge($_POST["comment"]);

	$myfile = fopen("comments.txt","a");

	fwrite($myfile, "$name:$email:$comment\n");

	//fwrite($myfile, "$name:$email\n");


	fclose($myfile);

	header('Location: https://spring-2019.cs.utexas.edu/cs329e-mitra/apacleb/proj5/contact.php');

	exit;
	
	fclose($myfile);

?>

