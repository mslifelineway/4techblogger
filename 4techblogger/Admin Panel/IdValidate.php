

<?php
	session_start();
	include "AdminClass.php";
	include "../Pages/DbConnection.php";
	$user = new Users;
	$uniqueId = trim($_POST['uniqueData']);// data getting which is coming through ajax code from ValidateUniqueId.php page
	$email=$_SESSION['adminEmail'];
	if(!($uniqueId==null)){
		
		$qu = $conn->prepare("SELECT * FROM admin WHERE adminEmail='$email'");
		$qu->setFetchMode(PDO:: FETCH_OBJ);
		$qu->execute();
		while($row = $qu->fetch())
		{
			$uniq_id=trim($row->adminUniqueId);
			if($uniq_id==$uniqueId){ 
				echo "validated";
				$_SESSION['adminUniqId']= $uniq_id;
			}
		}
		
				
    }
		
     
 
 ?>
 