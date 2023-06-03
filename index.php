

<?php

// - è definita una classe Movie
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti Movie e stampati a schermo i valori delle relative proprietà


// class Movie {

//     #variabili
//     public $durata;
//     public $anno;
//     public $regista;
//     public $genere;
//     public $prezzoBiglietto;

//     #costruttore
//     function __construct($durata, $anno, $regista, $genere)
//     {
//         $this->durata = $durata;
//         $this->anno = $anno;
//         $this->regista = $regista;
//         $this->genere = $genere;
//         $this->setPrezzo($durata);
//     }

//     #metodo
//     public function setPrezzo($durata){
//         if( $durata > 120 ){
//             $this->prezzoBiglietto = '12$'; 
//         } else {
//             $this->prezzoBiglietto = '9$';
//         }
//     }

//     public function getPrezzo() {
//         return $this->prezzoBiglietto;
//     }

// }

// #creazione ogetti
// $alien = new Movie(117, 1979, "Ridley Scott", "fantascienza, thriller, horror");
// echo "Durata: " . $alien->durata . " minuti" . "<br>";
// echo "Anno: " . $alien->anno . "<br>";
// echo "Regista: " . $alien->regista . "<br>";
// echo "Genere: " . $alien->genere . "<br>";
// echo "Prezzo: " . $alien->getPrezzo() . "<br>";


// $terminator = new Movie(137, 1984, "James Cameron", "azione, fantascienza, thriller");
// echo "Durata: " . $terminator->durata . " minuti" . "<br>";
// echo "Anno: " . $terminator->anno . "<br>";
// echo "Regista: " . $terminator->regista . "<br>";
// echo "Genere: " . $terminator->genere . "<br>";
// echo "Prezzo: " . $terminator->getPrezzo() . "<br>";


include_once __DIR__ . '/views/partials/head.php';
include_once __DIR__ . '/views/partials/movies.php';
include_once __DIR__ . '/views/partials/footer.php';