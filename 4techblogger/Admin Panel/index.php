
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/admin.css">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <form method="post" id="LoginForm">
                        <img class="largscr" src="images/4techlg.png" alt="">
                        <img class="smallscr" src="images/4techmob.png" alt="">
                        <h1>Login as Administrator</h1>
                        <!-- User Field-->
                        <div class="form-group">
                            <!--<label for="exampleInputEmail1">Email address</label>-->
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                        </div>
                        <!-- Password Field-->
                        <div class="form-group">
                            <!--<label for="exampleInputEmail1">Email address</label>-->
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                        </div>
						<!-- Login Button -->
                        <button type="button" class="btn btn-default" id="login">Login</button>
						<div color="#fff000" id="result" style="position:fixed;"></div>
						
                    </form>
					
                </div>
				<span color="#fff000" id="result"></span>
            </div>
        </div>
    </body>
</html>

	
	<script>
		//------******--- ajax code for admin login -----********-----
		
			$(document).ready(function() {
				$('#login').click(function() {
					$.ajax({
						type: "POST",
						url: 'AdminLogin.php',
						data: {
							AdminEmail: $("#email").val(),
							AdminPassword: $("#password").val()
						},
						success: function(data)
						{
							if ($.trim(data)!= "loggedIn"){
								
							$("#result").html(data);
							}
							if ($.trim(data)== "loggedIn") {
								window.location.replace('ValidateUniqueId.php');
							}
							else {
								alert('Invalid Credentials');
							}
						}
					});
				});
			});

		



	</script>
















