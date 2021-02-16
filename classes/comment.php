<?php
class Comment extends User {
    public $title;
    public $content;
    public $create_time;
    public $author;

    /**
     * Get the Author of the post from the User setUser function
     * @param string $uservname Nome dell'autore dell'articolo
     * @return string
     * Polimorphism
     */

    public function setUser(){
        $this->author = $this->username;
    }

}
?>
