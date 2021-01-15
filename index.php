<?php

class Movie{
  public $titolo;
  public $uscita;
  public $trama;

  function __construct($_titolo, $_uscita, $_trama){
    $this->titolo = $_titolo;
    $this->uscita = $_uscita;
    $this->trama = $_trama;
  }
  public function getTitle(){
    return $this->titolo;
  }
  public function getDate(){
    return $this->uscita;
  }
}

  $film = new Movie(" Il Traditore");
  echo $film->getTitle();


  $film->uscita = " 24 ottobre 2019" ;
  echo $film->getDate();
  $film->trama = " Le vicende del criminale Tommaso Buscetta, primo pentito di mafia,
                   che consentì ai giudici Falcone e Borsellino di comprendere l'organizzazione
                   di Cosa Nostra e di portarne i capi in tribunale.";
  echo $film->trama;
  $film2= new Movie(" Prova a Prendermi");
  echo $film2->getTitle();
  $film2->uscita = " 31 Gennaio 2003";
  echo $film2->getDate();
  $film2->trama = " Un agente dell'FBI è sulle tracce di un giovane artista del travestimento,
                    che è riuscito ad estorcere più di sei milioni di dollari in varie frodi,
                    impersonando di volta in volta un personaggio diverso.";


 ?>
