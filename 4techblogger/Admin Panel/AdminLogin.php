		
	
<?php
//note : here don't use echo more than one time in this page
	include "AdminClass.php";
	include "../Pages/DbConnection.php";
	$user = new Users;
	$email = trim($_POST["AdminEmail"]);
	$password = trim($_POST['AdminPassword']);
	
	if(!($email==null OR $password==null)){
		
		$q = $conn->prepare("SELECT adminEmail FROM admin WHERE adminEmail='$email' AND adminPassword='$password' ");
		$q->setFetchMode(PDO:: FETCH_OBJ);
		$q->execute();
			if( $q->rowCount()>0) {
				session_start();
				session_regenerate_id();
				$_SESSION['adminEmail']=$email;
				session_write_close();
				echo"loggedIn";
				exit();
				
			}
	}
?>
 