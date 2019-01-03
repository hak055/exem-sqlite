<?php
  try
  {
   include('connection.php');

    //create the database
    $db->exec("CREATE TABLE User (
	          id INTEGER PRIMARY KEY, 
			  name VARCHAR, 
			  email UNIQUE)
			  ");
    
    $db->exec("CREATE TABLE note(
			  id INTEGER PRIMARY KEY,
			  user_id INTEGER NOT NULL,
			  title,
			  content ,
			  date_create DEFAULT CURRENT_TIMESTAMP,
			  FOREIGN KEY (user_id) REFERENCES user(id))
			  ");    

    
    // close the database connection
    $db = NULL;
  }
  catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }
  ?>