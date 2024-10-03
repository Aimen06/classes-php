<?php

class User
{
    private $id;
    public $login;
    public $email;
    public $firstname;
    public $lastname;


    public function __construct($id,$login,$email,$firstname,$lastname)
    {
        $this->id = $id;
        $this->login = $login;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function register($login, $password, $email, $firstname, $lastname)
    {
        //Crée l’utilisateur en
        //base de donnée dans la
        //table “utilisateurs”.
        //Retourne un tableau
        //contenant l'ensemble
        //des informations de ce
        //même utilisateur.


    }

    public function connect($login,$password) {

    }

    public  function disconnect()
    {

    }

    public function delete()
    {

    }

    public function update($login, $password, $email, $firstname, $lastname) {

    }

    public function isConnected() {

    }

    public function getAllInfos()
    {

    }

    public function getLogin()
    {

    }

    public function getEmail()
    {

    }

    public function getFirstname()
    {

    }

    public function getLastname()
    {

    }

}