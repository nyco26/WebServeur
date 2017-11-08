<?php

class Movies
{
    public $name = 'name film';
    public $description = 'description ';
    public $lenght = 120;
    public $release ='.......';
    
    function __construct(String $name, String $description, Int $lenght, Date $release )
    { 
        $this->name=$name;
        $this->description=$description;
        $this->lenght=$lenght;
        //$this->release=$release;
        
    }
    
    function write()
    {
        echo "name:  $this->name, description :  $this->description, lenght :  $this->lenght";  //,release : $this->release
    }
    
}

$f1 = new Movie ('un film trop bien','il est bien',120);
$f1->write();
    
    



        
    
    
    
    

