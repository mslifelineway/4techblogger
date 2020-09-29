
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
	function loadPost(val){
		var value=val;
		$.ajax({
				type: 'POST',
				url: 'Pages/DisplayBlogsByMenuOptionWise.php',
				data:{send_value:value},
				success: function(data){
					$("#load").html(data);
				}
			});
	}
// code for retrieving pending posts
	function displayPendingPosts(){
		$.ajax({
				type: 'POST',
				url: 'Pages/RetrieveAllPendingPost.php',
				success: function(data){
					$("#load").html(data);
				}
		});
	}
// code for posting a blog 
	 $(document).ready(function(){
        $("#PostABlog").click(function(){
          $("#load").load("Pages/PostABlog.php");
         });
      });
	
</script>