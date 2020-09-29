	
	<?php
	include "DbConnection.php";
	include "Classes.php";
	$user=new Users();
	$count=0;
	$data = $_POST['send_value'];
	if($data==0){
		$sub="Home";
		$status="technical";
	}
	if($data==1){
		$sub="C";
		$status="programming language";
	}
	if($data==2){
		$sub="C++";
		$status="programming language";
	}
	if($data==3){
		$sub="Java";
		$status="programming language";
	}
	if($data==4){
		$sub="Quiz";
		$status="technical";
	}
	if($data==5){
		$sub="Tech";
		$status="technical";
	}
 // fetching data for from Blogs 
 
	$q=$conn->prepare("SELECT * FROM blogs WHERE blogSub='$sub' AND pendingBlogs=0 ");
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
                <button class="btn" data-toggle="modal" data-target="#myModal" onclick="UpvoteBlog(<?php echo @$blogId;?>)"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Upvote&nbsp;<span style="color:#3498db;" id="<?php echo "Upvote".@$blogId;?>" upvote-blog="<?php echo @$upvote;?>"><?php echo @$upvote;?></span></button>
                <button class="btn" data-toggle="modal" data-target="#myModal" onclick="DownvoteBlog(<?php echo @$blogId;?>)"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Downvote&nbsp;<span style="color:#3498db;" id="<?php echo "Downvote".@$blogId;?>" downvote-blog="<?php echo @$upvote;?>"><?php echo @$downvote;?></span></button>
                <button class="btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-comment-o" aria-hidden="true"></i> Comment</button>
                <button class="btn pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</button>
            </div>
            <hr> 
			<h4>Leave a Query:</h4>
            <form role="form">
				<div class="form-group">
                    <textarea class="form-control" rows="3" required></textarea>
                </div>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Submit</button>
            </form>                        
        </div>
	<?php } 
	if($count==0){
		echo "no post yet...";
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
	function UpvoteBlog(blog_id){
		var upvote_button_id= 'Upvote'+blog_id;
		var x=document.getElementById(upvote_button_id).getAttribute("upvote-blog");
		x=++x;
		document.getElementById(upvote_button_id).innerHTML=x;
		// for the upvote and downvote user need to create account and signIn their account
	}
	function DownvoteBlog(blog_id){
		var downvote_button_id= 'Downvote'+blog_id;
		var x=document.getElementById(upvote_button_id).getAttribute("downvote-blog");
		x=--x;
		document.getElementById(downvote_button_id).innerHTML=x;
	}
	
</script>
		
		
		
		
		
		