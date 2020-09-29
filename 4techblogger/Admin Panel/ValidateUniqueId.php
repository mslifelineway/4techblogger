
<?php 

	session_start();
	$em=@$_SESSION['adminEmail'];
	
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Validation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/style2.css">
		<script type="text/javascript" src="../js/jquery-3.3.1.min.js" ></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form>
                    <div class="row">
                    	<h4 class="text text-danger">Validate your unique id! (only for Admin)</h4>
                        
                        <div class="inp col-lg-12">
                        	<div class="col-25">
                        		<h4 id="uniqueId" name="uniqueId">Unique Id</h4>
	                        </div>
	                        <div class="col-75">
	                        	<input type="text" name="input" id="inputUniqueId" class="form-control" placeholder="Enter your unique id here .." >
	                        </div>
                        </div>
                        <br>

                        <div class="col-md-12">
                       		<button type="button" class="btn btn-warning" style="margin-top:10px;" id="validate">Validate</button>
                    	</div><br>
                    </div>
                </form>
			</div>
				<span color="#fff000" id="result"></span>
            </div>
            </div>
        </div>
    </body>
</html>

	
	<script>
		//------******--- ajax code for unique id validation -----********-----
			
			$(document).ready(function() {
				$('#validate').click(function() {
					$.ajax({
						type: "POST",
						url: 'IdValidate.php',
						data: {
							uniqueData: $("#inputUniqueId").val(),
						},
						success: function(data)
						{
							if ($.trim(data)!= "validated") {
							$("#result").html(data);
							}
							if ($.trim(data)== "validated") {
								//window.location.replace('AdminIndexPage.php');
								 window.location.href="adminIndex/AdminIndexPage.php";
							}
							else {
								alert('Invalid UniqueId!');
							}
						}
					});
				});
			});

		



	</script>


