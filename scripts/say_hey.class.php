<?php

class HeyThere
{
    public function __construct()
    {
        
    }

    public function setup($name = 'Steven')
    {
        $this->sayHey($name);
    }

    public function sayHey($name)
    {
        echo "<h1>Hey there " . $name . "</h1>";
    }
}