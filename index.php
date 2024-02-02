<?php

class Movie
{

    public $title;
    public $nameActor;
    public $description;

    public function __construct($title, $nameActor, $description)
    {
        $this->title = $title;
        $this->nameActor = $nameActor;
        $this->description = $description;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getNameActor()
    {
        return $this->nameActor;
    }

    public function getDescription()
    {
        return $this->description;
    }

}

$movie = new Movie("Spider-man", "Peter Parker", "lorem ipsum");

// METODO 1

echo "METODO 1<br>";
var_dump($movie->title);
echo "<br>";
var_dump($movie->nameActor);
echo "<br>";
var_dump($movie->description);

// METODO 2

echo "<br>--------------------------------<br>METODO 2<br>";
var_dump($movie->getTitle());
echo "<br>";
var_dump($movie->getNameActor());
echo "<br>";
var_dump($movie->getDescription());

// ALTRO FILM

$movie2 = new Movie("Fast & Furious", "Dom Toretto", "lorem ipsum");

echo "<br>--------------------------------<br>ALTRO FILM<br>";
var_dump($movie2->title);
echo "<br>";
var_dump($movie2->nameActor);
echo "<br>";
var_dump($movie2->description);