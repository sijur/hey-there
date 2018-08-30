<?php

class HeyThere
{
    
    public function __construct()
    {
    
    }

    public function setup($name = 'Steven')
    {
        //$this->sayHey($name);
    }
    
    public function sayBye($name = 'Steven') 
    {
        $this::render("<h1>See you later " . $name . "</h1>");
    }

    public function sayHey($name = 'Matt')
    {
         $this::render("<h1>Hey there " . $name . "</h1>");
    }
    
    private static function render($data)
    {
        echo $data;
    }
}
