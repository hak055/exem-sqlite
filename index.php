<?php
require 'exem.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<br>
  <div class="create_user">
  <p>Новый пользователь</p>
          
	   <form action="create_user.php" name="create_user" method="POST">
		Name<br>
		<input type="text" required name="name">
		<br>Email<br>
		<input type="text" required name="email">
		<br>
		<input type="submit" name="submit_user" value="создать">
	   </form> 
  </div>   
   <br>
   <br>
   

</body>
</html>