
<?php 
	include "Pages/DbConnection.php";
	include "DisplayBlogsByMenu.php";
?>



<!DOCTYPE html>
  <html lang="en">
    <head>
        <title>4Tech</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Styles/normalize.css"/>
		<link rel="stylesheet" href="css/b4_sidebar.css"/>
        <link rel="stylesheet" href="css/responsive.css"/>
        <!-- note that responsive.css must bu first or above of style.css -->
		 <link rel="stylesheet" href="css/style.css" />
		<script src="js/b4_sidebar.js"></script>
		
		<!--[if lt IE 9]>
			<script src="bower_components/html5shiv/dist/html5shiv.js"></script>
		<![endif]-->
        
    </head>
  <body onload="loadPost('0')">

    <div class="navb">
        <nav class="navbar navbar-fixed-top navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-header">
                  <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <a class="navbar-brand" href="#">4TECH</a>
                </div>
                    
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" style="cursor:pointer" onclick="loadPost('0')">Home<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link" style="cursor:pointer" onclick="loadPost('1')">C</a></li>
                        <li class="nav-item"><a class="nav-link" style="cursor:pointer" onclick="loadPost('2')">C++</a></li>
                        <li class="nav-item"><a class="nav-link" style="cursor:pointer" onclick="loadPost('3')">Java</a></li>
                        <li class="nav-item"><a class="nav-link" style="cursor:pointer" onclick="loadPost('4')">Quiz</a></li>
                        <li class="nav-item"><a class="nav-link" style="cursor:pointer" onclick="loadPost('5')">Tech</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="ProgramList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer">Program</a>
                            <div class="dropdown-menu" aria-labelledby="ProgramList">
                                <a class="dropdown-item" href="#">C</a>
                                <a class="dropdown-item" href="#">C++</a>
                                <a class="dropdown-item" href="#">Java</a>
                            </div>
                        </li>
                    </ul>
                    <form class="input-group form-inline my-2 my-lg-0">
                        <input type="text" class="form-control" placeholder="Search ..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </form>
                </div>
            </div>
          </nav>
    </div>
    
    <div class="main" style="min-height:650px;">
        <div class="container">
            <div class="row content">
                <div class="col-lg-3 col-md-3 sidenav">
                    <h4>4 Tech Blog</h4>
                    <hr>
                    <ul class="nav nav-pills nav-stacked">
                        <li ><a href="#section1">Home</a></li>
                        <li><a href="#section2">Add Blog</a></li>
                        <li><a href="#section3">Family</a></li>
                        <li><a href="#section3">Photos</a></li>
                    </ul>
                    <hr>
                    <form class="input-group form-inline my-2 my-lg-0">
                        <input type="text" class="form-control" placeholder="Search ..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </form> 
                </div>

                <div class="arti col-lg-8 col-md-9 col-sm-12" id="load">
				<!-- here all the page will displayo or load ----->
					
                </div>
            </div>
        </div>
    </div>
    

    
	<!-- test ----->
	

  <!-- Button to Open the Modal -->
 <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>
 -->
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 
	
	
	
	
	
	<!-- test---->
	<footer class="container-fluid ">
		<p class="love">Made with <i class="fa fa-heart"></i> By 4Tech Team | &copy; 2018</p>
    </footer>



        
        
        <script type="text/javascript" src="js/jquery-3.3.1.min.js" ></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>
    </body>
</html>