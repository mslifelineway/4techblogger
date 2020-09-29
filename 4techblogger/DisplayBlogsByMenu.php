
<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
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
</script>