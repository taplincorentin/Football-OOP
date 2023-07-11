<?php
    class Player{
        //ATTRIBUTES
        private string $_name;
        private string $_fName;
        private int $_age;
        private Country $_country;
        private array $_careers;



        //METHODS
        //constructor
        function __construct(string $name, string $fName, int $age, Country $country){
            $this->_name=$name;
            $this->_fName=$fName;
            $this->_age=$age;
            $this->_country=$country;
        }



        //getter
        public function get_name(){
            return $this->_name;
        }

        public function get_fName(){
            return $this->_fName;
        }

        public function get_age(){
            return $this->_age;
        }

        public function get_country(){
            return $this->_country;
        }

        public function get_careers(){
            return $this->_careers;
        }


        //setter
        public function set_name($name){
            $this->_name=$name;
        }

        public function set_fName($fName){
            $this->_fName=$fName;
        }

        public function set_age($age){
            $this->_age=$age;
        }

        public function set_country($country){
            $this->_country=$country;
        }

        public function set_career($careers){
            $this->_careers=$careers;
        }



        //toString() method
        public function __toString(){
            return $this->get_name()." ".$this->get_fName()." ".$this->get_age()." ".$this->get_country();
        }


        public function addCareer(Career $career){
            $this->_careers []= $career;
        }
    }
?>