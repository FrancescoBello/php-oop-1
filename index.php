<?php

class Movie{
  public $titolo;
  public $uscita;
  public $trama;
  public $genere;

  function __construct($_titolo, $_uscita, $_trama, $_genere){
    $this->titolo = $_titolo;
    $this->uscita = $_uscita;
    $this->trama = $_trama;
    $this->genere = $_genere;

  }
  public function getTitle(){
    return $this->titolo;
  }
  public function getDate(){
    return $this->uscita;
  }
  public function getDescription(){
    return $this->trama;
  }
  public function getGenre(){
    return $this->genere;
  }
}



  $film = new Movie(" Il Traditore",  " 24 ottobre 2019"," Le vicende del criminale Tommaso Buscetta, primo pentito di mafia,
                di Cosa Nostra e di portarne i capi in tribunale.", "Giallo/Drammatico");

  echo $film->getTitle(). "<br>";
  echo $film->getDate(). "<br>";
  echo $film->getDescription() . "<br>";
  echo $film->getGenre() . "<br>";
  $film2= new Movie(" Prova a Prendermi", " 31 Gennaio 2003", " Un agente dell'FBI è sulle tracce di un giovane artista del travestimento,
                    che è riuscito ad estorcere più di sei milioni di dollari in varie frodi,
                    impersonando di volta in volta un personaggio diverso.", "Giallo/Drammatico");
  echo $film2->getTitle(). "<br>";
  echo $film2->getDate(). "<br>";
  echo $film2->getDescription(). "<br>";
  echo $film->getGenre() . "<br>";


 ?>
