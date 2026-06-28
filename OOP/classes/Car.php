<?php

class Car
{

    private string $brand;
    private string $color;

    // constructor
    public function __construct($brand, $color)
    {
        $this -> brand = $brand;
        $this -> color = $color;
    }

    // getter and setter
    public function get_brand(){
        return $this -> brand;
    }

    public function get_color(){
        return $this -> color;
    }
    
    public function set_brand(string $brand){
        $this-> brand = $brand;
    }
    
    public function set_color(string $color){
        $this-> color = $color;
    }

    public function get_car_info(){
        return "Brand: " . $this->brand . " Color: " . $this-> color;
    }
}



