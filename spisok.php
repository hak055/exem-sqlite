<?php
session_start();
require 'funcs.php';
$db = new PDO('sqlite:db.UserNote');




$note_list = listNote($db,$user_id);
var_dump($note_list);

?>
<a href="/note_page.php">Новая заметка</a>
<div id="">
тут будет список заметок
</div>