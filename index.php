<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tripper - Home</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/social.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
<nav id="navigate" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Tripper</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li id="up" class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=profile">Profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#reg" class="navbar-link"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div id="reg" class="modal fade success" tabindex="-1" aria-hidden="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" aria-hidden="true" data-dismiss="modal" class="close">&times;</button>
        <h3 class="modal-title">Login / <a href="register.php">Register</a></h3>
      </div>
      <div class="modal-body">
        <table class="table table-responsive table-bordered">
        	<tr>
        		<td><input type="text" class="form-control" placeholder="Username"></td>
        	</tr>
        	<tr>
        		<td><input type="password" class="form-control" placeholder="Password"></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a href="#" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</div>
	
<div class="clear"></div>
	<div class="plain"></div>
	<div class="header">
		<div class="container">
		<div class="col-md-7 col-sm-12 col-xs-12 headdd">
			<h3 class="page-header text-center">PLAN YOUR TRIP!</h3>
			<form action="go.php" method="post">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<input type="text" placeholder="Destination" class="form-control">
					<p class="add">
						<a href="#"><span class="glyphicon glyphicon-plus-sign"></span> Add More</a>
					</p>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">
					<p>TRIPPER</p>
					<select name="tripper" id="tripper" class="form-control">
						<option value="1">1 Adult(s)</option>
						<option value="2">2 Adult(s)</option>
						<option value="2">3 Adult(s)</option>
						<option value="2">4 Adult(s)</option>
						<option value="2">5 Adult(s)</option>
						<option value="2">6 Adult(s)</option>
					</select>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">
					<p>START</p>
					<input type="date" class="form-control">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">
					<p>END</p>
					<input type="date" class="form-control">
				</div>
				<input type="submit" class="btn btn-danger right" value="Submit">
			</form>
		</div>
		<div class="col-md-5 col-sm-12 col-xs-12 side">
			<h2>We will help you to plan your trip and make your dream comes true!</h2>
			<button class="btn btn-danger dst">Our Destination</button>	
		</div>
		</div>
	</div>
	<div class="box">
		<div class="container">
			<img src="img/benefits.JPG" alt="Benefits" class="img-responsive">
			<h2 class="page-header">Fav. Destination</h2>	
			<div class="fav">
				<div class="col-sm-3">
					<img src="fav/paris.jpg" alt="Borobudur">
				</div>
				<div class="col-sm-3">
					<img src="fav/kute.jpg" alt="Borobudur">
				</div>
				<div class="col-sm-3">
					<img src="fav/borobudur.jpg" alt="Borobudur">
				</div>
				<div class="col-sm-3">
					<img src="fav/toba.jpg" alt="Borobudur">
				</div>
			</div>
		</div>
	</div>
	<div class="plain"></div>
	<div class="clear"></div>
	<div class="footer">
		<div class="container">
			<div class="col-md-3">
				<h3>TRIPPER</h3>	
				<p>Copyright &copy; 2K17</p>
			</div>
			<div class="col-md-3">
				<h4>Browse</h4>
				<ul class="links">
					<li><a href="#">Plans by Others</a></li>
					<li><a href="#">Destinations</a></li>
					<li><a href="#">Credits</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h4>Help</h4>
				<ul class="links">
					<li><a href="#">FAQ</a></li>
					<li><a href="#">How to</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Partnership</a></li>
					<li><a href="#">Cookies</a></li>
				</ul>
			</div>
			<div class="col-md-3 text-right">
		        <ul class="social-nav model-8">
		            <li><a href="http://twitter.com/omjipanggg" class="twitter"><i class="fa fa-twitter"></i></a></li>
		            <li><a href="http://facebook.com/omjipangg" class="facebook"><i class="fa fa-facebook"></i></a></li>
		        </ul>
			</div>
		</div>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>