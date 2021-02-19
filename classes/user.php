<?php

class User {
    public $name;
    public $surname;
    public $username;
    public $email;
    public $password;


    public function __construct(string $email, string $username, string $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

}

// User 

    // $user1 = new User('Andrea', 'Rossi','andreaxd@gmail.com','AndreaXD', '12345');
    // $user2 = new User('Giacomo', 'Porcu','giacomoporcu2001@gmail.com','Giacomo2001', '54321');
    // $user3 = new User('Raffaele', 'Caravaggio','razzospazialepittore@gmail.com','RazzoSpaziale', '123456');
    // $user4 = new User('Giovanni', 'Pietrini','xgiovyxx@gmail.com','Giovyxx', '654321');

// /User 

?>