<?php



	function insert_user($db,$name,$email)
	{
		
		$db = new PDO('sqlite:db.UserNote');
		$name_test = 'Виктор';
		$email_test = 'viktor@mail.ru';				
			
	$data = $db->exec("INSERT INTO User (name, email) VALUES ('$name_test', '$email_test')");
    return $data;	
	}
	
	