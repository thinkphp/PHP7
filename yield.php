<?php

    function isPrime(int $n) : int {
    
            $i = 2; 
      
            $prime = 1;
                    
            if($n == 0 || $n == 1) return 0;
                    
             while(($i * $i) <= $n && $prime) { 
               
                   $prime = ($n % $i != 0);    
               
                   $i++;  
             }
                   
         return $prime;
    }
    
    
    function Primes(int $n) {
      
             for($i = 2; $i <= $n; $i++) {
               
                 if(isPrime($i)) yield $i;
             }
    }

    foreach(Primes(100000) as $prime) {
      
            echo$prime. ' , ';
    }                     

?>
