<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<form action="routetest" method="POST">
		<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
		<input type="submit" value="POST">
	</form>
	<form action="routetest" method="POST">
		<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
		<input type="hidden" name="_method" value="PUT">
		<input type="submit" value="PUT">
	</form>
	<form action="routetest" method="POST">
		<input type="hidden" name="_token" value="<?php echo csrf_token()?>">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" value="DELETE">
	</form>
</body>
</html>