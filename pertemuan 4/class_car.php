<?php

    class Car {
        //hak akses: public, private, protected
        //property
        public $brand; 
        public $color;

        //method
        function getBrand(){
            return $this->brand;
        }

        function getColor(){
            return $this->color;
        }
    }

    //object
    $tesla = new Car();    
    $supra = new Car();
    
    // set value/ setter
    $tesla->brand ='Tesla';
    $tesla->color ='pink babi';     
    $supra->brand = 'Supra';
    $supra->color = 'Hitam';

    //echo
    echo $tesla->getBrand();
    echo $tesla->getColor();
    echo '<br>';
    echo $supra->getBrand();
    echo $supra->getColor();
    
?>