<?php

namespace app;

use hmerritt\Imdb;
use App\Movie;

class Application
{
    public function run(): void
    {
        $title = readline("Enter title of Movie ");
        $result = $this->search($title);
        $this->showResult($result);

    }

    public function search(string $title): Movie
    {
        $imdb = new Imdb;
        $result = $imdb->film($title);
        return new Movie($result['id'], $result['title'], $result['year']);
    }

    public function showResult(Movie $movie): void
    {
        echo $movie->getTitle() . "\n" . $movie->getYear() . "\n";
    }
}