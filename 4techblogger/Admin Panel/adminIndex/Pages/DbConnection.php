
<?php
 
 try{
	 
	 $conn = new PDO("mysql:host=localhost;dbname=4tech",'root','');
	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 }
 catch(PDOException $e)
 {
	 
	 echo "Database connection Failed! because of : <br>".$e->getMessage();
 }


?>