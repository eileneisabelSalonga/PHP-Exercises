<!
#######################################################################
## PHP Classes and Objects Exercise 1: Select Field Class & Object 	 ##
## This exercise creates a creates a class for anh html select field ##
## Credits: phpexercises.com/php-exercise-select-field-class.html	 ##
#######################################################################
-->

<?php
//Create array.
$browsers=array(
    "Firefox",
    "Chrome",
    "Internet Explorer",
    "Safari",
    "Opera",
    "Other"
  );
 
class Select{
  //Property
  private $name;   //String variable.
  private $value;  //Array variable.
   
  //Methods
  //The string set by this method will be the name of the select field.
  public function setName($name){
     $this->name = $name;
  }
   
  public function getName(){
     return $this->name;
  }
   
  //This method provides the values used for the options
  //in the select field and checks to be sure the value is an array. 
  public function setValue($value){
     if (!is_array($value)){
        die ("Error: value is not an array.");
     }
     $this->value = $value;
   }
   
  public function getValue(){
     return $this->value;
  }
   
  //This method creates the actual select options. It is private, 
  //since there is no need for it outside the operations of the class.
  private function makeOptions($value){
     foreach($value as $v){
        echo "<option value=\"$v\">" .ucfirst($v). "</option>\n";
      }
  }
 
  //This method puts it all together to create the select field.
  public function makeSelect(){
     echo "<select name=\"" .$this->getName(). "\">\n";
     //Create options.
     $this->makeOptions($this->getValue());
     echo "</select>" ;
  }
}//end of class
 
?>
 
 
<html>
  <head>
	<title>Select Field Class</title>
  </head>
 
  <body>
	<h1>User Registration<br/></h1>
 
	<?php
  	  if(!isset($_POST['btnsubmit'])){
	?>
   
	<form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='POST'>
	  <label>Name:</label>
	  <input type="text" name="name"/><br/>
	  <label>Username:</label>
	  <input type="text" name="username"/><br/>
	  <label>Email:</label>
	  <input type="text" name="email"/><br/>
	  <label>Browser:
 
	  <?php
		//Instantiate object.
		$browser = new Select();
		//Set properties.
		$browser->setName('browser');
		$browser->setValue($browsers);

		$browser->makeSelect();
		?>
	  </label><br/>
		<input type="submit" name="btnsubmit" value="Submit"/>
	</form>
 
	<?php  
  	}//end of if statement
  	else{
      //Retrieve user responses.
      $name=$_POST['name'];
      $username=$_POST['username'];
      $email=$_POST['email'];
      //The following variable has an altered name to avoid confusion.
      $selBrowser=$_POST['browser'];
      //Confirm responses to user.
      echo "The following data has been saved for $name: <br />";
      echo "Username: $username<br />";
      echo "Email: $email<br />";
      echo "Browser: $selBrowser<br />";
	}//end of else statement
	?>
 
</body>
</html>