<html>
	<head>
		<title>Personalized Greeting Form</title>
	<head>

	<body>
		<?php 
			if(isset($_POST['name'])) { #checks if name has been set
				echo "Greetings, {$_POST['name']}, and welcome!"; }
		?>

		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			Enter you name: <input type="text" name="name">
			<input type="submit" />
		</form>
	</body>
</html>