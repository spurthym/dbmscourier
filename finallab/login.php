<?php 
include('verify_user.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="col-sm-6"></div>
		<form action="verify_user.php" method="post">
			<div class="form-group">
				<label for="username">username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
			<label for="password">password</label>

				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</form>


	</div>

</body>
</html>