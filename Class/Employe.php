<?php
    
    /**
     * Voici ma classe Employe 
     */
    class Employe {
        
        public $name;
        public $surname;
        private $age;
        public $sex;
        // private $hiring_date;
        private $contract;
        
                
        public function __construct($name,$surname,$age,$sex,$contract) {
            $this->name = $name;
            $this->surname = $surname;
            $this->age = $age;
            $this->sex = $sex;
            // $this->hiring_date = $hiring_date;
            $this->contract = $contract;
        }
        
        function afficher_employe(){
            echo 'Voici les données de l\'employé : <br>';
            echo 'name : ' . $this->name . '<br>';
            echo 'surname : ' . $this->surname . '<br>';
            echo 'age : ' . $this->age . '<br>';
            echo 'sex : ' . $this->sex . '<br>';
            // echo 'hiring date : ' . $this->hiring_date . '<br>';
            echo 'contract : ' . $this->contract . '<br>';
        }


        public function getAge() {
            return $this->age;
        }
        public function getContract() {
            return $this->contract;
        }

        private function setAge($key, $value) {
            
        }
        private function setContract($key, $value) {
            
        }

      
    }