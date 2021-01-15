<?php

class Movie{
  public $titolo;
  public $uscita;

  function __construct($titolo){
    $this->titolo = $titolo;
  }
  public function getTitle(){
    return $this->titolo;
  }
}

  $film = new Movie("il traditore");
  echo $film->getTitle();

  $film->$uscita = "24 ottobre 2019" ;
  echo $film->$uscita;


 ?>
