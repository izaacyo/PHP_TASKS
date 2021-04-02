<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot</title>
</head>
<body>
      <ul> <li> Generate 5 randomize numbers </li>
<li> Make those random numbers either 0 or 1 </li>
<li> Check what is the combination that we get </li>
<li> Decide wether the user has won or not </li>
<li> Display the message according to hte results </li></ul>
      <?php
 
 $numberOne= 0;
 $numberZero= 0;


 for($i=0; $i<5; $i++){
     $randomNumber = rand(0,1);
     echo $randomNumber;
     if($randomNumber == 1) {
        $numberOne ++;
    } else {
         $numberZero ++;

    }
 };

 echo "<br>";

  if ($numberOne == 5){
      echo "Congratulations, you have 5 ones which means you won! The chances to win were " . 1/2**5;
    } else if ($numberZero === 5) {
    echo "You got five zeros! Unfortunately, is not the jackpot winning combination but still impressive!";

}  else { 
 echo"Sorry, not a winning combination";
}


?>
</body>
</html>