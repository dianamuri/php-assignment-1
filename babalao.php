<?php
for($x=255; $x>=155; $x--){
    if($x%7==0){
        echo "Baba"."<br>";
    }
    elseif($x%9==0){
        echo "Lao"."<br>";
    }
    else{
        echo $x."<br>";
    }
}

?>