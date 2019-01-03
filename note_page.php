<?php
session_start();

require 'funcs.php';
//require 'connection.php';
$db = new PDO('sqlite:db.UserNote');




if(isset($_POST['submit'])){



$title = clear($_POST['title']);
$content = clear($_POST['content']);

$str = insert_note($db,$title,$content,$user_id);

header('Location: /spisok.php');
}

echo "<br>";
?>

<p><h5><a href="/spisok.php">Список заметок</a></h5></p>
<span>Количество заметок: 0</span>
<br>
    
	<div id="elem" style="background-color: grey; width: 400px;text-align: center;overflow: auto;">
	
		<form action="" method="post">
		<P><input type="text" name="title" cols="45" placeholder="название заметки..."></p>
		<p><textarea rows="10" cols="45" name="content" placeholder="контент заметки..."></textarea></p>
		<input type="submit" name="submit" value="save" cols="45">
		</form>
	</div>
