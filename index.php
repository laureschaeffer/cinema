<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$thriller= new Genre("Thriller");
$scienceFiction= new Genre("Science Fiction");
$ChristopherNolan= new Realisateur("Christopher", "Nolan", "homme", "1970-07-30");
$christianBale= new Acteur("Christian", "Bale", "homme", "1974-01-30");
$batman= new Film($thriller, $ChristopherNolan, $christianBale, "Batman", 2008, 152, "Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker.");

$interstellar= new Film($scienceFiction, $ChristopherNolan, $christianBale, "Interstellar", 2014, 169, "Dans un proche futur, la Terre est devenue hostile pour l'homme. Les tempêtes de sable sont fréquentes et il n'y a plus que le maïs qui peut être cultivé, en raison d'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale. Lorsqu'une force qu'il ne peut expliquer lui indique les coordonnées d'une division secrète de la NASA, il est alors embarqué dans une expédition pour sauver l'humanité." );




echo $batman->afficherInfoFilm();
echo "<br> <br>";
echo $interstellar->afficherInfoFilm();

echo $thriller->afficherFilmographieGenre();
echo $ChristopherNolan->afficherFilmographieRealisateur();
echo "<br> <br>";
// echo $christianBale->afficherFilmographieActeur();




// $jdepp = new Acteur("Johnny");
// $jsparrow = new Role("Jack Sparrow");
// $pdc = new Film("Pirates");

// $casting1 = new Casting($jdepp, $jsparrow, $pdc);