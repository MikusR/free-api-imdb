<?php

namespace app;

use hmerritt\Imdb;
use App\Movie;
use Carbon\Carbon;

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
        $now = (new Carbon())->now();

        echo $movie->getTitle() . "\ncame out " . $now->diffInYears(Carbon::parse($movie->getYear() . '-01-01')) . " years ago\n";
    }
}