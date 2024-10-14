<?php

require('Connexion.php');

class Userpdo extends Connexion
{
    protected $id;
    protected $login;
    protected $email;
    protected $firstname;
    protected $lastname;
    protected $password;

    protected $connected;




    public function __construct()

    {
        $this->id = null;
        $this->login = '';
        $this->email = '';
        $this->firstname = '';
        $this->lastname = '';
        $this->password = '';
        $this->connected = false;
        parent::__construct();
    }

    public function register($login, $password, $email,$firstname,$lastname)
    {
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setEmail($email);
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $insert = $this->bdd->prepare('INSERT INTO utilisateurs (login, password, email,firstname,lastname) VALUES (?, ?, ?, ?, ?)');
        $insert->execute(array($this->login, $this->password,  $this->email,$this->firstname, $this->lastname));
        $this->id =  $this->bdd->lastInsertId();
        return [$this->id,$this->login, $this->password ,$this->email ,$this->firstname, $this->lastname];
    }

    public function connect(string $login, string $password) : void
    {
        $this->setLogin($login);
        $this->setPassword($password);
        if(!empty($this->login) && !empty($this->password)) {
            $query = $this->bdd->prepare('SELECT *  FROM utilisateurs WHERE login= ? AND password= ?');
            $query->execute([$this->login, $this->password]);
            $userDetail = $query->fetch(PDO::FETCH_ASSOC);
            foreach ($userDetail as  $index => $value)
            {
                $this->$index = $value;
            }
            $this->connected = true;
        }
    }

    public  function disconnect()
    {
        if($this->connected) {
            $this->connected = false;
        }
    }

    public function delete()
    {
        $delete = $this->bdd->prepare('DELETE  FROM utilisateurs WHERE id= ?');
        $delete->execute([$this->id]);
    }

    public function update($login, $password, $email, $firstname, $lastname)
    {
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setEmail($email);
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $update = $this->bdd->prepare('UPDATE utilisateurs SET login= ? , password = ? , email = ? , firstname =  ?, lastname = ? WHERE id= ?');
        $update->execute([$this->login, $this->password, $this->email, $this->firstname, $this->lastname, $this->id]);
    }

    public function isConnected() : bool
    {
        return $this->connected;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getLogin() : string
    {
        return $this->login;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getFirstname() : string
    {
        return $this->firstname;
    }

    public function getLastname() : string
    {
        return $this->lastname;
    }

    public function getUserfromId(int $id) 
    {
        $query = $this->bdd->prepare("SELECT id, login, email, firstname, lastname, password  FROM utilisateurs WHERE id=?");
        $query->execute([$id]);
        $userDetail = $query->fetch(PDO::FETCH_ASSOC);
        foreach ($userDetail as  $index => $value)
        {
            $this->$index = $value;
        }
        return $this;
    }

    public function setLogin(string $login) : void
    {
        if (strlen($login)>6) {
            $this->login = $login;
        }

    }

    public function setPassword(string $password)  : void
    {
        $pattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;"\'<>,.?~`-])[A-Za-z\d!@#$%^&*()_+{}\[\]:;"\'<>,.?~`-]{8,}$/';
        if (preg_match($pattern,$password))
        {
            $this->password = $password;
        }
    }

    public function setEmail(string $email) : void
    {
        $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        if (preg_match($pattern,$email))
        {
            $this->email = $email;
        }
    }

    public function setFirstname(string $firstname) : void
    {

        $pattern = "/^[a-zA-ZÀ-ÖØ-öø-ÿ' -]{2,}$/";
        if (preg_match($pattern,$firstname))
        {
            $this->firstname = $firstname;
        }
    }

    public function setLastname(string $lastname) : void
    {
        $pattern = "/^[a-zA-ZÀ-ÖØ-öø-ÿ' -]{2,}$/";
        if (preg_match($pattern,$lastname))
        {
            $this->lastname = $lastname;
        }
    }

    public function getConnected()
    {
        return $this->connected;
    }

}