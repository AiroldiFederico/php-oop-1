/*
 - è definita una classe Movie
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà

*/

<?php

class Movie {

    #variabili
    public $durata;
    public $anno;
    public $regista;
    public $genere;

    #costruttore
    function __construct($durata, $anno, $regista, $genere)
    {
        $this->durata = $durata;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->genere = $genere;
    }



}

