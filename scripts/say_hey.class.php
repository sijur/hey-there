<?php

class HeyThere
{
    public function __construct()
    {
        
    }

    public function setup()
    {
        $this->sayHey('Steven');
    }

    public function sayHey($name)
    {
        echo "Hey there " . $name;
    }
}