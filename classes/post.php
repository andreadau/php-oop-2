<?php

class Post {
    public $title;
    public $content;
    public $create_time;
    public $tags;

    public function __construct(string $title, string $content, string $create_time, string $tags) {

        $this->title = $title;
        $this->content = $content;
        $this->create_time = $create_time;
        $this->tags = $tags;

    }
}

$post1 = new Post('title1','lorem5', '19-02-2021','carnevale');

$post2 = new Post('title2','lorem10', '19-02-2021','festa');

$post3 = new Post('title3','lorem5', '19-02-2021','giochi');

$post4 = new Post('title4','lorem10', '19-02-2021','moda');

?>

