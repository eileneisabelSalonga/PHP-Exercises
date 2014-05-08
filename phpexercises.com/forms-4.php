<!
#################################################################################
## PHP Forms Exercise 4: Switch Statement 			             			             ##
## This exercise asks for a user input and uses that input in the switch cases ##
## Credits: phpexercises.com/php-switch-statement-exercise.html         	     ##
#################################################################################
-->

<html>
  <head><title>Switch Statement</title>
  </head>

  <body>

  	<?php
    //if there is no day selected, display the form
  	if (!isset($_POST['btnsend'])) {
  	?>

  	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST'>
  		<label>What day is it today?</label><br/>
  		<select name='days'>
  			<option value='monday'>Monday</option>
  			<option value='tuesday'>Tuesday</option>
  			<option value='wednesday'>Wednesday</option>
  			<option value='thursday'>Thursday</option>
  			<option value='friday'>Friday</option>
  			<option value='saturday'>Saturday</option>
  			<option value='sunday'>Sunday</option>
  		</select> <br/>
  		<input type='submit' name='btnsend' value='Go!'></input>
  	</form>

  <?php
  	}//end of if statement

    //if there a selected day, process the input:
  	else { 
  		switch ($_POST['days']) {
  		case 'monday':
  			echo "Laugh on Monday, laugh for danger.";
  			break;
  		case 'tuesday':
  			echo "Laugh on Tuesday, kiss a stranger.";
  			break;
  		case 'wednesday':
  			echo "Laugh on Wednesday, laugh for a letter.";
  			break;
		  case 'thursday':
  			echo "Laugh on Thursday, something better.";
  			break;
  		case 'friday':
  			echo "Laugh on Friday, laugh for sorrow.";
  			break;
  		case 'saturday':
  			echo "Laugh on Saturday, joy tomorrow.";
  			break;
  		case 'sunday':
  			echo "Today is sunday! Godbless!.";
  			break;
  		default:
  			echo "Sorry, that day is not inlcuded in the poem.";
  			break;
  		}//end of switch statement
  ?>

    <form>
      <! back button with onclick JS event -->
      <input type='submit' name='btnback' value='Choose a different day' onclick='self.location="forms-4.php"'></input>
    </form>
  <?php }//end of else statement ?>

  </body>

<html>