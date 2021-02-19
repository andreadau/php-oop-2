<?php
class Comment {
    public $title;
    public $content;
    public $create_time;
    public $author;

    public function __construct(string $title, string $content, string $create_time, string $author) {
 
        $this->title = $title;
        $this->content = $content;
        $this->create_time = $create_time;
        $this->author = $author;

    }

}
?>