<?php

class Video{

    public $type;
    public $duration;
    public $published = false;
    public $title;

    public function __construct(string $type, float $duration, string $title)
    {
        $this->type = $type;
        $this->duration = $duration;
        $this->title = $title;
    }

    public function play()
    {
        return $this->published ? "The video is playing" : "This video is not yet available";
    }
    
    public function pause()
    {
        return $this->published ? 'The video is paused':"";
    }

    public function __destruct()
    {
        var_dump('Destroing instance of '. get_class());
    }

}

//header('Content-Type:text/plain', true);
$introduction = new Video('mp4', 10.5, 'Intro to OOP');

$video2 = new Video('mp4', 6525.354, 'video2');
var_dump($video2);
exit;

