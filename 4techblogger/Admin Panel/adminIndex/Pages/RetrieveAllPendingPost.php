	
	<?php
	include "DbConnection.php";
	include "Classes.php";
	$user=new Users();
	$count=0;
	//fetching pendingBlogs for from Blogs 
 
	$q=$conn->prepare("SELECT * FROM blogs WHERE pendingBlogs=1 ");
	$q->setFetchMode(PDO:: FETCH_OBJ);
	$q->execute();
	while($row = $q->fetch())
	{
		$blogId = $row->blogId;
		$blogTitle = $row->blogTitle;
		$blogDesc = $row->blogDesc;
		$blogImage = $row->blogImage;
		$upvote = $row->Upvote;
		$downvote = $row->Downvote;
		$date = $row->blogPostDate;
		$totalComments = $row->totalComments;
		$count++;
		$blogFullDesc=$blogDesc."<span  style='cursor:pointer;color:#204c9e;text-decoration:underline' onclick='DisplayLessDesc($blogId)'>Show Less</span>";
		$new_blog_desc=substr($blogDesc,0,800);
		if(strlen($blogDesc)>800){
			$blogDesc=$new_blog_desc."..."."<span  style='cursor:pointer;color:#204c9e;text-decoration:underline' onclick='DisplayFullDesc($blogId)'>Show More</span>";
			
		}
	?>	
		<div class="pst">
			<h4><small>RECENT POSTS </small></h4>
            <hr>
            <h2 style="color:blue;font-weight:bold;cursor:pointer;" ><?php echo @$blogTitle;?></h2>
            <h5 style="color:#262626"><span class="glyphicon glyphicon-time"></span> Published By 4techblogger , <?php echo @$user->formatDate($date)?></h5>
            <h5><span class="label label-danger" style="cursor:pointer;"><?php echo @$sub;?></span> <span class="label label-primary" style="cursor:pointer;"><?php echo @$status;?></span></h5><br>
            <p id='<?php echo @$blogId;?>' less-desc="<?php echo @$blogDesc;?>" full-desc="<?php echo @$blogFullDesc;?>"><?php echo @$blogDesc;?></p><br>
            <hr>
            <div class="icn">
                <button class="btn" data-toggle="modal" data-target="#myModal" id='editPost' value='<?php $blogId;?>'> Edit</button>
                <button class="btn" data-toggle="modal" data-target="#myModal" id='deletePost' value='". $blogId."'> Delete</button>
                <button class="btn pull-right" data-toggle="modal" data-target="#myModal" id='confirmPost' onclick="confirmPendingPost(<?php echo $blogId?>)">Confirm</button>
            </div>
         </div>
	<?php } 
	if($count==0){
		echo "no pending blogs yet...";
	}
	
	?>
	
<!-- code for SHOW MORE / SHOW LESS blog description -->	

<script>
	function DisplayFullDesc(blog_id){
		var x=document.getElementById(blog_id).getAttribute("full-desc");
		document.getElementById(blog_id).innerHTML=x;
	}
	function DisplayLessDesc(blog_id){
		var x=document.getElementById(blog_id).getAttribute("less-desc");
		document.getElementById(blog_id).innerHTML=x;
	}
// code for confirming pending blogs
	function confirmPendingPost(get_id){
		var get_post_id = get_id;
		$.ajax({
	        type: 'POST',
	        url: 'Pages/ConfirmPendingPosts.php',
	        data:{post_id:get_post_id},
	        success: function(data){
					$("#load").html(data);
					location.reload();
					alert("Confirmed!");
					popuot("done");
					
	         }
	    });

	}
	
</script>
		
		
		
		
		
		