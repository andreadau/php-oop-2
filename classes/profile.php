<?php
include '/classes/user.php';

class Profile extends User {
    public $name;
    public $surname;
    public $dob;
    public $genre;
    
    public function __construct(string $username, string $email, string $password, string $name , string $surname , string $dob , string $genre) {
        parent::__construct($username, $email, $password);
        $this->name = $name;
        $this->surname = $surname;
        $this->dob = $dob;
        $this->genre = $genre;
    }
}

    $profile1 = new Profile('AndreaXD', 'andreaxd@gmail.com','12345','Andrea', 'Rossi','12/11/1990','male');
    $profile2 = new Profile('Giacomo2001','giacomoporcu2001@gmail.com', '54321','Giacomo', 'Porcu','31/06/2001','other');
    $profile3 = new Profile('RazzoSpaziale', 'razzospazialepittore@gmail.com','123456','Raffaele', 'Caravaggio','02/09/2001','male');
    $profile4 = new Profile('Giovyxx','xgiovyxx@gmail.com','654321','Giovanni', 'Pietrini','01/08/1998','male');

?>