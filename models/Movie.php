<?php

//require_once __DIR__ . 'php-oop-1\db\db-movies';

class Movie{
  public $title;
  public $genre;
  public $description;
  public $originalLang;
  public $releaseDate;


  function __construct(string $_name, string $_genre, string $_description, string $_originalLang, $_relaseDate)
  {
    $this->title = $_name;
    $this->genre = $_genre;
    $this->description = $_description;
    $this->originalLang = $_originalLang;
    $this->releaseDate = $_relaseDate;
  }

  public function fetchReleaseDate() {
    return $this->releaseDate;
  }
}