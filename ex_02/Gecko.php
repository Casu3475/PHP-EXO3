<?php
class Gecko {

    public $name;
    public function __construct($par_name = null)
    {
        if (!empty(func_get_args())) {
            $this->name = $par_name;
            echo "Hello " . $par_name . " !"."\n";
        } else {
            echo "Hello !"."\n";
        }
    }
}


