<?php
    echo "Fizz Buzz 問題<br />\n";

       //５で割ったときのあまりの数
      for ($i = 1; $i <= 100; $i++) {
          if ($i % 3 == 0 && $i % 5 == 0) {
         echo "FizzBuzz<br />";
       } else if ($i % 3 == 0) {
            echo "Fizz<br />";
        } else if ($i % 5 == 0) {
            echo "Buzz<br />";
        } else {
            echo $i . "<br />";
        }
      }

      //被除数（$devidend)と除数($devisor)を引数に取り、余りを返す
     //function mod($dividend, $divisor) {
           //$quot = floor($devidend / $divisor);
             //$rem = $dividend - ($quot* $divisor);
            //return $rem;
        //}
