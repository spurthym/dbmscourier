<?php 

if (isset($_GET['submit'])) {

	echo "got it";
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form action="index.php" method="post" >
		

		<div class="form-group">
			<label for="username">username</label>
			<input type="text" name="usr" class="form-control">
			<input type="submit" name="submit" value="submitting" class="btn btn-primary">

		</div>
	</form>

</body>
</html>