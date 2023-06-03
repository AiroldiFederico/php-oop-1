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
    public $prezzoBiglietto;

    #costruttore
    function __construct($durata, $anno, $regista, $genere)
    {
        $this->durata = $durata;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->genere = $genere;
    }

    #metodo
    public function setPrezzo($durata){
        if( $durata > 120 ){
            $this->prezzoBiglietto = '12$';
        } else {
            $this->prezzoBiglietto = '9$';
        }
    }

    public function getDurata() {
        return $this->durata;
    }

}

