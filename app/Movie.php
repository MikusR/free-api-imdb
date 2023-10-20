<?php

namespace app;

class Movie
{
    private string $id;
    private string $title;
    private int $year;

    public function __construct(string $id, string $title, int $year)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}