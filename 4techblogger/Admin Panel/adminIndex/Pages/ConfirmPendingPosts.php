
<?php 
	include "DbConnection.php";
	$postId = $_POST['post_id'];

	$confirmPostQue=$conn->prepare("UPDATE blogs SET pendingBlogs='0' WHERE blogId=:b_id");
	$confirmPostQue->bindParam(':b_id',$postId);
	$confirmPostQue->execute();
	if(!$confirmPostQue){
		echo "Oops! something went wrong..";
	}
?>

