<?php

	function purge($str) {
		$purged_str = preg_replace("/\n/", " ", $str);
		return $purged_str;
	}

	extract ($_POST);
	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$comment = trim($_POST["comment"]);

	$name = purge($name);
	$email =purge($email);
	$comment = purge($comment);
	
	$name = strip_tags($name);
        $email = strip_tags($email);
        $comment = strip_tags($comment);
	

	$myfile = fopen("comments.txt","a");

	fwrite($myfile, "$name:$email:$comment\n");

	//fwrite($myfile, "$name:$email\n");


	fclose($myfile);

	header('Location: contact.php');

	exit;
	
	fclose($myfile);

?>

