
	<?php 
		include "DbConnection.php";
		$admin_email=@$_GET['sendData'];
		$title = trim(@$_POST['postTitle']);
		$desc=trim(@$_POST['postDesc']);
		$sub = trim(@$_POST['subject']);
		$blogImage="default.jpg";
		$blogPending=1;
		if($title==null || $desc==null){
			echo "<h4 class='text text-danger'>Failed to post! , title and description must not be empty...!</h4>";
		}
		else{
			$que=$conn->prepare("INSERT INTO blogs (adminEmail,blogSub,blogTitle,blogDesc,blogImage,pendingBlogs) VALUES (:email,:b_sub,:b_title,:b_desc,:b_image,:b_pending)");
			$que->bindParam(':email',$admin_email);
			$que->bindParam(':b_sub',$sub);
			$que->bindParam(':b_title',$title);
			$que->bindParam(':b_desc',$desc);
			$que->bindParam(':b_image',$blogImage);
			$que->bindParam(':b_pending',$blogPending);
			$que->execute();
			if($que)
			echo "Posted!";
			else
				echo "something went wrong!";
		}
	?>