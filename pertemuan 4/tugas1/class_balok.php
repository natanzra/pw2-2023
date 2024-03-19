<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        function __construct($p, $l, $t) 
        {
            $this -> panjang = $p;
            $this -> lebar = $l;
            $this -> tinggi = $t;
        }
    
        function getLuas() 
        {
        // L = 2 x [(p x l) + (p x t) + (l x t)]
            return 2 * (($this -> panjang * $this -> lebar) + ($this -> panjang * $this -> tinggi) + ($this -> lebar * $this -> tinggi));
        }
    
        function getKeliling() 
        {
        // K = 4 x (p+l+t)
            return 4 * ($this -> panjang + $this -> lebar + $this -> tinggi);
        }
    
        function getVolume() 
        {
        // V = P X L X T
            return $this -> panjang * $this -> lebar * $this -> tinggi;
        }
    }
?>