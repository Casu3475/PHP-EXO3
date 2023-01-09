<?php
class Gecko {

  private $name;
    public function __construct($par_name = null){
        if (!empty(func_get_args())) {
            $this->name = $par_name;
            echo "Hello " . $par_name . " !"."\n";
        } else {
            echo "Hello !"."\n";
        }
    }
 
    public function setName($name){   
        $this->name = $name;
    }
 
    public function getName(){      
        return $this->name;
    }
   
    public function __destruct()
{
    if (empty($this->name)) 
    { echo "Bye !\n"; } 
    else { echo "Bye $this->name !\n"; }
}
}



