<?php
session_start();




require 'funcs.php';
//require 'connection.php';
$db = new PDO('sqlite:db.UserNote');


if(isset($_POST['submit_user'])){
	
	$name = clear($_POST['name']);
	$email = clear($_POST['email']);
	
	$str = insert_user($db,$name,$email);
    
		$_SESSION['name'] = $name;
	$_SESSION['email'] = $email;
	
	header("Location: note_page.php");
         exit;
	
		
	
	
}


?>