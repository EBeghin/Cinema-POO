<h1>Cinéma</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.</p>

<h2>Résultats</h2>


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$acteur1 = new Acteur("Mickael","Keaton","masculin","05-09-1951");
$acteur2 = new Acteur("Val","Kilmer","masculin","31-12-1959");
$acteur3 = new Acteur("George","Clooney","masculin","06-05-1961");
$acteur4 = new Acteur("Christian","Bale","masculin","30-01-1974");
$acteur5 = new Acteur("Harrisson","Ford","masculin","13-07-1942");
$acteur6 = new Acteur("Mark","Hamill","masculin","25-09-1951");
$acteur7 = new Acteur("Carrie","Fisher","feminin","21-10-1956");
$acteur8 = new Acteur("Alec","Guinness","masculin","02-04-1914");

$realisateur1 = new Realisateur("Tim","Burton","masculin","25-08-1958");
$realisateur2 = new Realisateur("Joel","Schumacher","masculin","29-08-1939");
$realisateur3 = new Realisateur("Christopher","Nolan","masculin","30-07-1970");
$realisateur4 = new Realisateur("George","Lucas","masculin","14-05-1944");

$film1 = new Film("Batman",126,"1989",$realisateur1);
$film2 = new Film("Batman Forever",121,"1995",$realisateur2);
$film3 = new Film("Batman et Robin",125,"1997",$realisateur2);
$film4 = new Film("Batman Begins",140,"2005",$realisateur3);
$film5 = new Film("Star Wars IV",121,"1977",$realisateur4);
$film6 = new Film("Mars Attacks",106,"1996",$realisateur1);

$role1 = new Role("Batman");
$role2 = new Role("Han Solo");
$role3 = new Role("Luke Skywalker");
$role4 = new Role("Princesse Leia");
$role5 = new Role("Obi-Wan Kenobi");

$casting1 = new Casting($film1,$role1,$acteur1);
$casting2 = new Casting($film2,$role1,$acteur2);

$casting3 = new Casting($film3,$role1,$acteur3);
$casting4 = new Casting($film4,$role1,$acteur4);

$casting5 = new Casting($film5,$role2,$acteur5);
$casting6 = new Casting($film5,$role3,$acteur6);
$casting7 = new Casting($film5,$role4,$acteur7);
$casting6 = new Casting($film5,$role5,$acteur8);

$genre1 = new Genre("Action");
$genre2 = new Genre("Fantastique");
$genre3 = new Genre("Science-fiction");
$genre4 = new Genre("Comédie parodique");

$lien1 = new Appartenir($genre1,$film1);
$lien2 = new Appartenir($genre2,$film2);
$lien3 = new Appartenir($genre2,$film3);
$lien4 = new Appartenir($genre1,$film4);
$lien5 = new Appartenir($genre3,$film5);
$lien6 = new Appartenir($genre4,$film6);


$role1->listeActeur();

$film5->afficherDistribution();

$genre1->listeFilmGenre();
$genre2->listeFilmGenre();
$genre3->listeFilmGenre();
$genre4->listeFilmGenre();

$acteur2->filmographieActeur();
$acteur5->filmographieActeur();

$realisateur1->filmographieRealisateur();
$realisateur2->filmographieRealisateur();
$realisateur3->filmographieRealisateur();
$realisateur4->filmographieRealisateur();
