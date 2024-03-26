<?php

    class Skincare {
        protected $type;
        protected $ingredients;

        protected function __construct ($type, $ingredients) {
            $this -> type = $type;
            $this -> ingredients = $ingredients;
        }
        protected function getInfo(){
            echo 'Jenis skincare adalah :'. $this -> type . '<br>';
            echo 'Isi kandungan :'. $this -> ingredients . '<br>';         
        }
    }

    class FacialWash extends Skincare {
        public $function;

        public function __construct($type, $ingredients, $function) {
            parent::__construct($type, $ingredients, $function);
            $this -> function = $function;
        }

        public function getInfoFacialWash() {
            parent::getInfo();
            echo 'Manfaat dari skincare ini adalah : ' . $this -> function. '<br>';
        }
    }
    class Serum extends Skincare {
        public $function2;

        public function __construct($type, $ingredients, $function2) {
            parent::__construct($type, $ingredients, $function2) ;
            $this -> function2 = $function2;
        }

        public function getInfoSerum() {
            parent::getInfo();
            echo 'Memiliki kandungan yang bermanfaat untuk : ' . $this-> function2. '<br>';
        }
    }
    class Moist extends Skincare {
        public $function3;

        public function __construct($type, $ingredients, $function3) {
            parent::__construct($type, $ingredients, $function3) ;
            $this -> function3 = $function3;
        }

        public function getInfoMoist() {
            parent::getInfo();
            echo 'Moist ini bermanfaat untuk : ' . $this-> function3. '<br>';
        }
    }

?>