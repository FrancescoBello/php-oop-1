<?php

class Movie{
  public $titolo;
  public $uscita;

  function __construct($_titolo){
    $this->titolo = $_titolo;
  }
  public function getTitle(){
    return $this->titolo;
  }
}

  $film = new Movie("il traditore");
  echo $film->getTitle();

  $film->uscita = "24 ottobre 2019" ;
  echo $film->uscita;


 ?>
