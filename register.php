<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.box {
			background: url('img/candi_bg.JPG') fixed 100% no-repeat;
			background-size: cover;
			min-width: 100vw;
			min-height: 100vh;
		}
	</style>
</head>
<body>
<div class="box">
<div id="reg" class="modal show" tabindex="-1" aria-hidden="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" aria-hidden="true" data-dismiss="modal" class="close">&times;</button>
        <h3 class="modal-title"><a href="#">Login</a> / Register</h3>
      </div>
      <div class="modal-body">
        <table class="table table-responsive table-bordered">
        	<tr>
        		<td><input type="text" class="form-control" placeholder="Username"></td>
        	</tr>
        	<tr>
        		<td><input type="password" class="form-control" placeholder="Password"></td>
        	</tr>
        	<tr>
        		<td><input type="password" class="form-control" placeholder="Confirm Password"></td>
        	</tr>
        	<tr>
        		<td><input type="email" class="form-control" placeholder="Email"></td>
        	</tr>
        	<tr>
        		<td><input type="text" class="form-control" placeholder="Phone"></td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
      	<a href="index.php" class="btn btn-default">Cancel</a>
        <a href="#" class="btn btn-primary">Register</a>
      </div>
    </div>
  </div>
</div>
	
</div>	
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>