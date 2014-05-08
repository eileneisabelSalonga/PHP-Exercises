<!
####################################################################
## PHP Arrays Exercise 3: Arrays from User Input       			  ##
## This exercise creates an array from user input and checkboxes  ##
## Credits: phpexercises.com/php-user-input-arrays-exercise.html  ##
####################################################################
-->

<html>
  <head>
  	<title>Arrays from User Input</title>
  </head>

  <body>
  	<?php if (!isset($_POST['btnsend'])) { ?>
  	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
  		<label>Please enter your information:</label><br/>
  		<table>
  		  <tr>
  		  	<td><label>City:</label></td>
  		  	<td><input type='text' name='city'/></td>
  		  </tr>
  		  <tr>
  		    <td><label>Month:</label></td>
  		    <td><input type='text' name='month'/></td>
  		  </tr>
  		  <tr>
  		  <td><label>Year:</label></td>
  		  <td><input type='text' name='year'/></td>
  		  </tr>
  		</table>

  		<br/><label>What kinds of weather have you experienced?</label><br/>
  		<input type='checkbox' name='weatherConditions[]' value='sunshine'/>Sunshine<br/>
  		<input type='checkbox' name='weatherConditions[]' value='clouds'/>Clouds<br/>
  		<input type='checkbox' name='weatherConditions[]' value='rain'/>Rain<br/>
  		<input type='checkbox' name='weatherConditions[]' value='hail'/>Hail<br/>
  		<input type='checkbox' name='weatherConditions[]' value='sleet'/>Sleet<br/>
  		<input type='checkbox' name='weatherConditions[]' value='snow'/>Snow<br/>
  		<input type='checkbox' name='weatherConditions[]' value='wind'/>Wind<br/>
  		<input type='checkbox' name='weatherConditions[]' value='cold'/>Cold<br/>
  		<input type='checkbox' name='weatherConditions[]' value='heat'/>Heat<br/>
  		<input type='submit' name='btnsend' value='Send'/>
  	</form>
  	<?php
  	  }
  	  else {
  	  	$user_input=array(
  	  			$_POST['city'],
  	  			$_POST['month'],
  	  			$_POST['year']
  	  			);
  	  	$weather=$_POST['weatherConditions'];
	  	
 	    echo "In {$user_input[0]} in the month of {$user_input[1]} {$user_input[2]},
  	  	  	  you observed the following weather:";
  	  
  	    echo "<ul>";
  	      foreach ($weather as $w) {
  	    	echo "<li>$w</li>";
  	      }
  	    echo "<ul>";
  	?>
  	<input type='submit' name='btnback' value='Back' onclick='self.location="arrays-3.php"'/>
  	<?php } ?>
  </body>
<html>