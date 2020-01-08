<?php
     class User {
           public $name = 'Adrian';
           protected $ssn = 'XXX-AA-YYY';
           private $salary = 5400.00;
     }

     $user = new User();
     echo$user->name;
     //echo$user->ssn; 
     //echo$user->salary; 
     echo"<pre>";
     var_dump($user);
     echo"</pre>";

     $reflector = new ReflectionClass('User'); 
     
     foreach($reflector->getProperties() as $prop) {
       
         $prop->setAccessible(true);
       
         if($prop->getName() == 'name') $prop->setValue($user, 'Alice');
         if($prop->getName() == 'ssn') $prop->setValue($user, 'YYY-BB-YYY');
         if($prop->getName() == 'salary') $prop->setValue($user, 7000);
     }

     echo"<pre>";
     var_dump($user);
     echo"</pre>";

class Calc {
       
          /**
           * @param $x The number x
           * @param %y The number y
           * @return mixed The number z 
           */
           public function sum($x, $y) {
                  return $x + $y;
           }
     } 

     $calc = new Calc();
     $reflector = new ReflectionClass('Calc');  
     $comment = $reflector->getMethod('sum')->getDocComment();
     echo$comment;

?>
