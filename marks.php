<?php
function grades($x){
    if($x>=70 && $x<100){
        echo "Grade A";
    }
    elseif($x>=63 && $x<70){
        echo "Grade B";
    }
    elseif($x>=51 && $x<63){
        echo "Grade C";
    }
    elseif($x>=44 && $x<51){
        echo "Grade D";
    }
    elseif($x>=0 && $x<44){
        echo "Grade F";
    }
    else{
        echo "N/A";
    }
}
echo grades (81);

?>