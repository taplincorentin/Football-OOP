<?php
    class Club{
        //ATTRIBUTES
        private string $_name;
        private Country $_country;


        //METHODS
        //constructor
        function __construct(string $name, Country $country){
            $this->_name=$name;
            $this->_country=$country;
        }

        //getter
        public function get_name(){
            return $this->_name;
        }

        public function get_country(){
            return $this->_country;
        }

        //setter
        public function set_name($name){
            $this->_name=$name;
        }

        public function set_country($country){
            $this->_country=$country;
        }

        //toString() method
        public function __toString(){
            return $this->get_name()." ".$this->get_country();
        }
    }

?>