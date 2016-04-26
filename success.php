
<!--/*Assigment : WE4.0 PHP Web App Assigment, Digital Skills Academy
  Student Id = D11128483
  Date : 20016/04/22*/ -->
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Haven Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
		// go to login page when user is signed up then they sign in to get acess to members page home.php			
		window.location.href = "login.php";
										
	}, 6000);
	
	// click or timeout fumtion when user is signed up
	$("#back").click(function(){
		window.location.href = "login.php";
	});
});
</script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
			<a class="navbar-brand" rel="home" href="#" title="Haven">
			<img class="img-responsive" style="max-width:auto; margin-top: -7px;"
             src="Images/haven_logo.png">
				</a>          
				</div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="login.php">login</a></li>
          </ul>



            
         
        </div><!--/.nav-collapse -->
      </div>
</nav>
    
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong>  Successfully Registered.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
    </button>
    
</div>

</div>

</body>
</html>