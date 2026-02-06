<?php
class fruit{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
}

$apple = [
    new fruit("Apple"),
    new fruit("Banana"),
    new fruit("Mango"),
];
foreach($apple as $fruit){
    echo "fruit name: " . $fruit->name . "<br>";
}