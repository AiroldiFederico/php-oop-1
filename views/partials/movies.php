<?php

//include __DIR__ . '/../../models/movie.php';
include __DIR__ . '/../../database/db.php';


// $arrayMovies = [

//     $movie1 = new Movie("Alien",117, 1979, "Ridley Scott", "fantascienza, thriller, horror", 'https://images.photowall.com/products/59754/alien.jpg?h=699&q=85'),
//     $movie2 = new Movie("Terminator", 137, 1984, "James Cameron", "azione, fantascienza, thriller", 'https://images.photowall.com/products/71005/terminator.jpg?h=699&q=85')
// ];


?>

<main class="col-8 m-auto">

    <h1 class="text-center">MOVIE</h1>

    <div class="d-flex  justify-content-center mt-4 gap-2">

        <?php foreach($arrayMovies as $elem) { ?>

        <div class="card" style="width: 18rem;">
            <img src="<?php echo $elem->poster?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $elem->titolo?></h5>
                <p class="card-text">Dettagli film:</p>
                <p class="card-text">
                    <ul>
                        <li><?php echo "Durata: " . $elem->durata . " minuti" ?> </li>
                        <li><?php echo "Anno: " . $elem->anno?> </li>
                        <li><?php echo "Regista: " . $elem->regista?> </li>
                        

                        <li>
                        Genere:
                        <?php foreach($elem->genere as $elem2) { ?>
                              <?php echo $elem2->name ?>
                        <?php } ?>
                        </li>

                        <li><?php echo "Prezzo: " . $elem->getPrezzo()?> </li>
                    </ul>
                </p>
            </div>
        </div>

        <?php } ?>

    </div>
</main>