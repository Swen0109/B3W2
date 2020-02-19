
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="welcome.css">
	<title></title>
</head>
<body>
	<form class="indeling" action="lab3.php" method="POST">
		<h1>De ingevulde gegevens zijn:</h1>

		Name:<input type="text" name="Naam" required/><script>alert('hoi')</script><br>

		Email:<input type="email" name="Email">
		<input type="submit" name="verzenden" id="klaar" required/>
	</form>

</body>
</html>

<?php
	print('Naam $_POST[Naam] <br>');
	print('Email $_POST[Email] <br>');
	
?>