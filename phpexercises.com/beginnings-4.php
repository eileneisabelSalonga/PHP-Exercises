<! --
#################################################################################
## PHP Beginnings Exercise 4: Arithmetic Assignment Operators and Variables    ##
## This exercise does different arithmetic operations to a variable            ##
## using different arithmetic assignment operators                             ##
## Credits: phpexercise.com/php-arithmetic-assignment-operators-variables.html ##
#################################################################################
-->

<html>
  <head>
    <title>Arithemetic Assignment Operators</title>
  </head>

  <body>
    <?php
      $integer=8;
      echo "Value is now {$integer}. <br/>";
      
      $integer+=2;
      echo "Add 2. Value is now {$integer}. <br/>";

      $integer-=4;
      echo "Subtract 4. Value is now {$integer}. <br/>";

      $integer*=5;
      echo "Multiply by 5. Value is now {$integer}. <br/>";

      $integer/=3;
      echo "Divide by 3. Value is now {$integer}. <br/>";

      $integer++;
      echo "Increment value by one. Valus is now {$integer}. <br/>";

      $integer--;
      echo "Decrement value by one. Value is now {$integer}. <br/>";
    ?>
  </body>
</html>