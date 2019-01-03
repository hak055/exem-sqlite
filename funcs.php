<?php
/*
* проверка и чистка опасных элементов
*/
function clear($str) {
	$str = trim($str);
	$str = strip_tags($str);
	
	return $str;
}

/*
* создание нового пользователя
*/

function insert_user($db,$name,$email)
	{				
			
	$data = $db->exec("INSERT INTO User (name, email) VALUES ('$name', '$email')");
   
	}

/*
* получение id текущего пользователя по уникальному email
*/	
function getId($db,$email)
	{
		$email = $_SESSION['email'];
		$stmt = $db->prepare("SELECT id FROM User WHERE email=:email");
        $stmt->execute(['email' => $email]); 
        $user_id = $stmt->fetch();
		
		
		return $user_id[id];
	
	}	
/*
* создание новой записи для текущего пользователя
*/	

function insert_note($db,$title,$content,$user_id)
	{
		
		$user_id = getId($db,$email);
		
		$data = $db->exec("INSERT INTO note (title, content, user_id)
                             		VALUES ('$title', '$content', '$user_id')");
		
		return $data;
	}
	
/*
* Добавление заметки от текущего пользователя
*/	
function listNote($db,$user_id)	
	{
		//$email = $_SESSION['email'];
		$user_id = getId($db,$email);
		$sql = "SELECT * FROM note WHERE user_id=:user_id";
		$str = $db->prepare($sql);
		$str->execute(['user_id' => $user_id]);
		$listNote = $str->fetchAll();
		
		return $listNote;
	}