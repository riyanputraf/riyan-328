<?php
    class Animal
    {
        private $family;
        private $food;


        public function _construct($family, $food){
            $this->family = $family;
            $this->food = $food;
        }

        public function setFamily($family){
            $this->family = $family;
        }

        public function getFamily(){
            $family = $this->family;
            return $family;
        }
        
        public function setFood($food){
            $this->food = $food;
        }

        public function getFood(){
            $food = $this->food;
            return $food;
        }
        
    }

    class Sapi extends Animal
    {
        public $owner;

        public function _construct($family, $food)
        {
            parent::_construct($family, $food);
            $this->owner = $owner;
        }

        public function getOwner(){
            $owner = $this->owner;
            return $owner;
        }
        
        public function setowner($owner){
            $this->owner = $owner;
        }


    }

    $objAnimal = new Animal("Mamalia", "Daging");
    $objAnimal->setFood("Daging");
    echo "Makanan adalah : " .$objAnimal->getFood();

    $objSapi = new Sapi("Mamalia", "Daging"); 
    $objSapi->setOwner("Jack");
    echo "Owner adalah : " .$objSapi->getOwner();


?>