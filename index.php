<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
// -----------------Genre de films----------------
$thriller= new Genre("Thriller");
$scienceFiction= new Genre("Science Fiction");

// -------------------realisateurs-------------------------
$ChristopherNolan= new Realisateur("Christopher", "Nolan", "homme", "1970-07-30");

// --------------------acteurs--------------------------------
$christianBale= new Acteur("Christian", "Bale", "homme", "1974-01-24");
$garyOldman= new Acteur("Gary", "Oldman", "homme", "1958-03-21");

// --------------------films-------------------------------
$batman= new Film($thriller, $ChristopherNolan, "Batman", 2008, 152, "Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker.");

$interstellar= new Film($scienceFiction, $ChristopherNolan, "Interstellar", 2014, 169, "Dans un proche futur, la Terre est devenue hostile pour l'homme. Les tempêtes de sable sont fréquentes et il n'y a plus que le maïs qui peut être cultivé, en raison d'un sol trop aride. Cooper est un pilote, recyclé en agriculteur, qui vit avec son fils et sa fille dans la ferme familiale. Lorsqu'une force qu'il ne peut expliquer lui indique les coordonnées d'une division secrète de la NASA, il est alors embarqué dans une expédition pour sauver l'humanité." );

// --------------------------roles--------------------------
$batmanPerso= new Role("Batman");
$jamesGordon= new Role("James Gordon");

// --------------------castings----------------------------
$casting1= new Casting($christianBale, $batmanPerso, $batman);
$casting2= new Casting($garyOldman, $jamesGordon, $batman);

echo $batman->afficherInfoFilm();
echo "<br> <br>";
echo $interstellar->afficherInfoFilm();

echo $thriller->afficherFilmographieGenre();
echo $ChristopherNolan->afficherFilmographieRealisateur();
echo "<br> <br>";


echo $casting1->afficherInfoCasting()."<br><br>";


// echo $christianBale->afficherFilmographieActeur();

