<?php

Class Customer
{
    private $id;
    private $name;
    private $massages = null;
    
    public function getMassages(mysqli $connection){
        if(!$this->massages){
            $this->massages = CustomerRepo::getAllMassages($connection, $this->id);
        }
    }
    
    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }
}

