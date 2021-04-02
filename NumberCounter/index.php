<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Number  Counter</title>
</head>
<body>

<?php 
   echo `<h1> Finnish Counter Translator </h1>`;

$myNumber = rand(0,100);
echo $myNumber;
$result = " is ";

if( 0 <= $myNumber && $myNumber <= 10 ) { 

switch($myNumber){ 
  case 0 : 
  $result .= "nolla";
  break ;

  case 1 : 
  $result .= "yksi";
  break ;

  case 2 : 
  $result .= "kaksi";
  break ;

  case 3 : 
  $result .= "kolme";
  break ;

  case 4 : 
  $result .= "nelja";
  break ;

  case 5 : 
  $result .= "viisi";
  break ;

  case 6 : 
  $result .= "kuusi";
  break ;

  case 7 : 
  $result .= "seitsemän";
  break ;

  case 8 : 
    $result .= "kahdeksan";
  break ;

  case 9 : 
    $result .= "yhdeksän";
  break ;

  case 10 :
    $result .= "kymmenen";
  break; 

  default:
    break;
     }

     
}   else if (10 <$myNumber && $myNumber <= 19) { 
    $remainder = $myNumber - 10 ; 
 
  switch($remainder){   
case 1:
    $result .= "yksi";
    break;

 case 2:
    $result .= "kaksi";
    break;

 case 3:
    $result .= "kolme";
    break;

 case 4:
    $result .= "neljä";
     break;

 case 5:
    $result .= "viisi";
     break;

 case 6:
    $result .= "kuusi";
    break;

 case 7:
    $result .= "seitsemän";
  break;

 case 8:
    $result .= "kahdeksan";
  break;

 case 9:
    $result .= "yhdeksän";
  break;

default:
    break;
}
$result= $result . 'toista';  

} else if (20 <= $myNumber && $myNumber <=99 ) { 
    $module = intdiv($myNumber,10) ; 
    $remainder = $myNumber %10  ;

switch($module) { 
  case 1 : 
    $result .= "yksi";
  break; 
  
  case 2 :
    $result .= "kaksi";
  break;

  case 3 : 
    $result .= "kolme" ;
  break; 

  case 4 : 
    $result .= "nelja" ;
  break; 

  case 5 : 
    $result .= "viisi" ;
  break ;

  case 6:
    $result .= "kuusi";
 break ; 

  case 7 :
    $result .= "seitsemän" ; 
  break ;
 
  case 8 :
    $result .= "kahdeksan";
  break ; 

  case 9: 
    $result .= "yhdeksän";
  break ; 

  default:
    break ;
     }

    $result= $result . "kymmentä"; 

   switch ($remainder) {
    case 1 : 
        $result .= "yksi";
    break; 
    
    case 2 :
        $result .= "kaksi";
    break;
  
    case 3 : 
        $result .= "kolme" ;
    break; 
  
    case 4 : 
        $result .= "nelja" ;
    break; 
  
    case 5 : 
        $result .= "viisi" ;
    break ;
  
    case 6:
        $result .= "kuusi";
   break ; 
  
    case 7 :
        $result .= "seitsemän" ; 
    break ;
   
    case 8 :
        $result .= "kahdeksan" ;
    break ; 
  
    case 9: 
        $result .= "yhdeksän" ;
    break ; 
  
    default:
      break ;
       }
         }else { 
        $result = `sata`; }
   
   echo($result) ; 

    ?>
</body>
</html>