<?php
   
    $rub = (int) 1;
    $rub1 = (int)$rub;
    do { 
        if ($rub1%10 == 1 && strlen($rub1)==1 || $rub1%10== 1 && strlen($rub1) > 1 && $rub1[1] >=2 || $rub1%10== 1 && strlen($rub1) >= 3 && $rub1[1] ==0 ) {
            echo $rub1 . " рубль". "\n";
        } elseif ($rub1%10 >= 2 && $rub1%10 <=4 && strlen($rub1)<= 1 || $rub1%10 >= 2 && $rub1%10 <=4 && strlen($rub1)>= 2 && $rub1[1] == 0) {
            echo $rub1 . " рубля". "\n";
        } else {
            echo $rub1 . " рублей". "\n";
        }
        $rub1++;
    } while ($rub1 <= 300);
?>