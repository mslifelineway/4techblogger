<script>
		
		//``````````-----------*********--------  code for Home menu -------------------*****---
		$(document).ready(function(){
				$("#home").click(function(){
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "Home";?>',
						  success: function(data){
							  $("#load").html(data);
							 
						  }
					});
				});
			});
		
		/*$(document).ready(function(val){
				$("#C").click(function(){
				$("#load").load("Pages/HomePage.php");
			});
		}); */
		
		// ``````````***************** --------------code for C-menu -------------------*******-------
		$(document).ready(function(val){
				$("#C").click(function(){
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "C";?>',
						  success: function(data){
							  $("#load").html(data);
							  
						  }
					});
				});
			});
	//---------------------------***********-------- code for c++ menu ---------******------	
		$(document).ready(function(val){
				$("#CPlus").click(function(){
				
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "CPlus";?>',
						  success: function(data){
							  $("#load").html(data);
							 
						  }
					});
				});
			});
	//-----------------------------************--------- code for Java menu -------**********------	
		$(document).ready(function(val){
				$("#Java").click(function(){
				
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "Java";?>',
						  success: function(data){
							  $("#load").html(data);
							  
						  }
					});
				});
			});
	//--------------------------------******--------- code for 	Quiz menu ------*********-------	
			$(document).ready(function(val){
				$("#Quiz").click(function(){
				
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "Quiz";?>',
						  success: function(data){
							  $("#load").html(data);
							 
						  }
					});
				});
			});
		
		//--------------------------------******--------- code for 	Tech menu ------*********-------	
			$(document).ready(function(val){
				$("#Tech").click(function(){
				
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "Tech";?>',
						  success: function(data){
							  $("#load").html(data);
							  
						  }
					});
				});
			});
		
		//--------------------------------******--------- code for 	ProgramList menu ------*********-------	
			$(document).ready(function(val){
				$("#ProgramList").click(function(){
				
				$.ajax({
						  type: 'POST',
						  url: 'Pages/HomePage.php?sendData=<?php echo "ProgramList";?>',
						  success: function(data){
							  $("#load").html(data);
							 
						  }
					});
				});
			});
		</script>
		
	