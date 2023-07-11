<?php
    class Career{
        private Player $_player;
        private Club $_club;
        private DateTime $_startYear;

        //construct
        function __construct(Player $player, Club $club, string $startYear){
            $this->_player = $player;
            $this->_club = $club;
            $this->_startYear = new DateTime($startYear);
            $this->_player->addCareer($this);
        }

        //getters
        public function get_player(){
            return $this->_player;
        }

        public function get_club(){
            return $this->_club;
        }

        public function get_startYear(){
            return $this->_startYear;
        }

        //setters
        public function set_player($player){
            $this->_player = $player;
        }

        public function set_club($club){
            $this->_club = $club;
        }

        public function set_startYear($startYear){
            $this->_startYear = $startYear;
        }

        //toString method
        public function __toString(){
            return $this->get_player()." ".$this->get_club()." ".$this->get_startYear()->format("Y");
        }
    }
?>