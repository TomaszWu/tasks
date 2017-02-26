<?php

class Massage  {

    private $id;
    private $massage;
    private $user_id;


    function getId() {
        return $this->id;
    }

    function getMassage() {
        return $this->massage;
    }

    function getUser_id() {
        return $this->user_id;
    }


    function setMassage($massage) {
        $this->massage = $massage;
    }

    function setUser_id($user_id) {
        $this->user_id = $user_id;
    }


}
