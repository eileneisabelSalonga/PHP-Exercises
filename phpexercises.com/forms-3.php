<!
##########################################################################################
## PHP Forms Exercise 3: If-Elseif-Else Construction              						##
## This exercise asks for a user input and uses that input in the if-else-if conditions ##
## Credits: phpexercises.com/php-if-elseif-else-exercise.html          					##
##########################################################################################
-->

<html>
  <head>
  	<title>If-Elseif-Else</title>
  </head>

  <body>
  	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
  		<label>What day is it today?</label>
  		<input type='text' name='DayOfTheWeek'></input>
  		<input type='submit' name='btnsubmit' value='Go!'></input>
  	</form>

  <?php
  	$day = ucfirst($_POST['DayOfTheWeek']);
  	 	
  	if ($day == 'Monday') {
  		echo "Laugh on Monday, laugh for danger.";
  	}
  	elseif ($day == 'Tuesday') {
  		echo "Laugh on Tuesday, kiss a stranger.";
  	}
  	elseif ($day == 'Wednesday') {
  		echo "Laugh on Wednesday, laugh for a letter.";
  	}
  	elseif ($day == 'Thursday') {
  		echo "Laugh on Thursday, something better.";
  	}
  	elseif ($day == 'Friday') {
  		echo "Laugh on Friday, laugh for sorrow.";
  	}
  	elseif ($day == 'Saturday') {
  		echo "Laugh on Saturday, joy tomorrow.";
  	}
  	elseif ($day == 'Sunday') {
  		echo "Then today is Sunday!";
  	}
  ?>
  </body>
<html>