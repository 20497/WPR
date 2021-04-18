<html>
<body>
<form method="post" attribute="post">
    <p>Number<input type="text" id="number" name="number"></p>
    <p></p>
    <button name="check" id="answer" value="answer">Check</button>
</form>
</body>

<?php


if (isset($_POST['check'])) {

    $number = (int)$_POST['number'];
   
    $primeNumber = true;
    $iteration = 0;

       if ($number < 1) 
       {
         echo 'The number is lower than 1.';
           $primeNumber = false;
       } 
       elseif ($number == 1) 
       {
           $primeNumber = false;
       } 
       else 
       {
         for ($i = 2; $i < $number; $i++) 
         {
           if ($primeNumber) 
           {
             if ($number % $i == 0)
              {
              $primeNumber = false;
              break;
              }
           }
             $iteration++;
         }
      }
      
      if ($primeNumber) 
      {
        echo  $number . ' This is a prime number, amount of iterations ' . $iteration;
      } 
      else 
      {
          echo  $number . 'This is not a prime number, amount of iterations ' . $iteration;
      }
}

    ?>
</body>
</html>