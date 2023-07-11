<?php
    
    class Country{
        //ATTRIBUTES
        private string $_name;


        //METHODS
        //constructor
        function __construct(string $name){
            $this->_name=$name;
        }

        //getter
        public function get_name(){
            return $this->_name;
        }

        //setter
        public function set_name($name){
            $this->_name=$name;
        }


        //toString() method
        public function __toString(){
            return $this->get_name();
        }
    }

?>