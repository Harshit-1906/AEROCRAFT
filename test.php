<?php 

// function stringToAscii($string) {
//     $asciiCodes = array();
//     for ($i = 0; $i < strlen($string); $i++) {
//       $asciiCodes[] =pow(10,$i)*(ord($string[$i])-67);
//     }
//     return $asciiCodes;
//   }


//   echo(implode(stringToAscii("DEL")));

include 'config/waitTime.php';

$a = getWaitTime(13);
print_r($a);
?>