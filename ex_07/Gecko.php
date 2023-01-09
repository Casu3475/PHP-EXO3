<?php

class Gecko {
  private $age;
  private $name;
    public function __construct($par_name = null, $age = null){
            $this->name = $par_name;
            $this->age = $age;
            if (!empty(func_get_args())) {
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

    public function getAge(){      
        return $this->age;
    }
   
    public function setAge($age){   
        $this->age = $age;
    }

    public function __destruct()
{
    if (empty($this->name)) 
    { echo "Bye !\n"; } 
    else { echo "Bye $this->name !\n"; }
}

public function status()
{
    switch (true)
    {
            case $this->age == 0:
              echo "Unborn Gecko\n";
              break;
            case $this->age <= 2:
              echo "Baby Gecko\n";
              break;
            case $this->age <= 10:
              echo "Adult Gecko\n";
              break;
            case $this->age <= 13:
              echo "Old Gecko\n";
              break;
            default:
              echo "Impossible Gecko\n";
    }
}

public function hello($str){
  if (is_string($str)){

    if (empty($this->name)) { 
      echo "Hello $str!\n"; 
    }  
    else {
      echo "Hello $str, I'm $this->name!\n"; 
    }
  }


  elseif (is_integer($str)) {

      if (empty($this->name)) { for ($i = 1; $i <= $str; $i++) {echo "Hello !\n"; }  
      }
      else { 
        for ($i = 1; $i <= $str; $i++) {
          echo "Hello, I'm $this->name!\n"; 
        }  
      } 
    }

  else { return; }   
  
  
  }

    public function setEnergy($energy){
        if ($energy > 100){
            $this->energy = 100;
        } elseif ($energy < 0) {
            $this->energy = 0;
        } else {
            $this->energy = $energy;
        }
    }

    public function getEnergy(){      
        return $this->energy;
    }

public function eat($mangerCasse)
    {   
        // $this->energy = $energy;
        if (is_string($mangerCasse)==true)
        {
            $manger= strtolower($mangerCasse);
            $this->manger = $manger;
        }
        else
        {
            return;
        }
        if ($this->manger == "meat")
        {
            echo "Yummy!\n";
            $this->energy = ($this->energy +10);
            echo ($this->energy);
        }
        else if ($this->manger == "vegetable")
        {
            echo "Erk!\n";
            $this->energy = ($this->energy - 10);
            echo ($this->energy);
        }
        else
        {
            echo "I can't eat this\n";
        }
    }

    public function work() {
      if ($this->energy >25)
      {
          echo "I'm working T.T\n";
          $this->energy = ($this->energy -9);
      }
      else ($this->energy <25)
      {  $this->energy = 0;
        echo "Heyyy. . . I'm too sleepy, better take a nap!\n";
        $this->energy = ($this->energy -9);

      }
    }

}