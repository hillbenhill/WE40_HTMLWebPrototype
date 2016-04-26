

<?php
/*Ben Hill
Assigment : WE4.0 PHP Web App Assigment, Digital Skills Academy
  Student Id = D11128483
  Date : 20016/04/22
ref http://www.bootply.com/103783  */
  session_start();

  if(!isset($_SESSION['user_session']))
  {
   header("Location: login.php");
 }

 include_once 'dbconfig.php';

 $stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
 $stmt->execute(array(":uid"=>$_SESSION['user_session']));
 $row=$stmt->fetch(PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form using jQuery Ajax and PHP MySQL</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
  <script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
  <link href="style.css" rel="stylesheet" media="screen">

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
        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
             <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
             <ul class="dropdown-menu">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <div class = "container text-center">   
	<div class="bg"></div>
	<div class="jumbotron">
	<h1 style = "font-weight: bold;">H<font size="8">AVEN</font> </h1>
	<p class="lead">Smart Home Care For Loved Ones</p>
	</div>
</div>

<div class="container">
  <div class="row">
    <h2>Page Content</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
    Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
    dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
    Aliquam in felis sit amet augue.
  </div>
 
</div>
  
  
   <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-4">
          <h2 class = "navbar-brand">Haven </h2>
          <p><div class='alert alert-success'>
            <button class='close' data-dismiss='alert'>&times;</button>
            <strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to the members page.
          </div></p>
       </div>
	   
        <div class="col-md-4">
          <h2>Haven Product Video</h2>
          <p> <iframe src="images/HAVEN Facebook Profile page_Sanja_Trinki.jpg"></iframe> 
          <div style="height: 20px;">&nbsp;</div></p>
        </div>
		<div class="col-md-4">
          <h2>Follow</h2>
          <p>
          <a class="twitter-follow-button"
            href="https://twitter.com/bennyOohill"
            data-show-count="true"  data-size="large"  data-lang="en">
            Follow @BennyOohill
          </a>
</div>
      </div>
	  

<hr>

      
 
 </div><!-- /container-->
    <script type="text/javascript">
    window.twttr = (function (d, s, id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src= "https://platform.twitter.com/widgets.js";
      fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
    </script>

    <!-- Place this tag where you want the widget to render. -->

    <!-- Place this tag after the last widget tag. -->
    <script type="text/javascript">
    (function() {
      var po = document.createElement('script');
      po.type = 'text/javascript';
      po.async = true;
      po.src = 'https://apis.google.com/js/platform.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(po, s);
    })();
    </script>
<!-- paralax js to shrink jumbo with image scroll-->	
	
  <script type="text/javascript">
var jumboHeight = $('.jumbotron').outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
}

$(window).scroll(function(e){
    parallax();
});</script>


  <script src="bootstrap/js/bootstrap.min.js"></script>
  
</body>
</html>