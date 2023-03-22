<?php

class compte {

    public $id;
    public $username;
    public $password;
    function __construct($id, $nom, $password) {
        $this->id = $id;
        $this->username = $nom;
        $this->password = $password;
    }
        

}



?>