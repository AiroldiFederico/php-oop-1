<?php

include __DIR__ . '/../../models/movie.php';

$movie1 = new Movie("Alien",117, 1979, "Ridley Scott", "fantascienza, thriller, horror", 'https://images.photowall.com/products/59754/alien.jpg?h=699&q=85');
$movie2 = new Movie("Terminator", 137, 1984, "James Cameron", "azione, fantascienza, thriller", 'https://images.photowall.com/products/71005/terminator.jpg?h=699&q=85');

?>

<main>

    <div>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $movie1->poster?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie1->titolo?></h5>
                <p class="card-text">Dettagli film:</p>
                <p class="card-text">
                    <ul>
                        <li><?php echo "Durata: " . $movie1->durata . " minuti" ?> </li>
                        <li><?php echo "Anno: " . $movie1->anno?> </li>
                        <li><?php echo "Regista: " . $movie1->regista?> </li>
                        <li><?php echo "Genere: " . $movie1->genere?> </li>
                        <li><?php echo "Prezzo: " . $movie1->getPrezzo()?> </li>

                    </ul>
                </p>
            </div>
        </div>
    </div>
</main>