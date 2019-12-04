<?php
$contact= "+257710103279";
 //number of digits
 switch($contact){
     case strlen($contact)==13:
     echo "contact valid";
     break;
     case strlen($contact) < 13 || strlen($contact) > 13:
     echo "contact invalid";
     break;
 }
 echo "<br><br>";
switch ($contact){
    //which country
    case substr($contact, 0, 4)==+254 && strlen($contact) ==13:  
    echo "Kenya";
    break;
    case substr($contact, 0, 4)==+256 && strlen($contact)==13:
    echo "Uganda";
    break;
    case substr($contact,0,4)==+255 && strlen($contact)==13:
    echo "Tanzania";
    break;
    case substr($contact,0,4)==+257 && strlen($contact)==13:
    echo "Rwanda";
    break;
    default:
    echo "error";
}

?>