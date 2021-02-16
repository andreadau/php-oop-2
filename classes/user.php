<?php

class User {
    public $name;
    public $surname;
    public $username;
    public $email;
    public $password;


    public function __construct(string $email, string $username, string $password){
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function setName(string $name, string $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setUser(string $username){
        $this->username = $username;
    }

}

// User 

    $user1 = new User('andreaxd@gmail.com','AndreaXD', '12345');
    $user1->setName('Andrea', 'Rossi');

    $user2 = new User('giacomoporcu2001@gmail.com','Giacomo2001', '54321');
    $user2->setName('Giacomo', 'Porcu');

    $user3 = new User('razzospazialepittore@gmail.com','RazzoSpaziale', '123456');
    $user3->setName('Raffaele', 'Caravaggio');

    $user4 = new User('xgiovyxx@gmail.com','Giovyxx', '654321');
    $user4->setName('Giovanni', 'Pietrini');

// /User 

?>