<?php
include_once __DIR__.'/../classes/Movie.php';
include_once __DIR__.'/../classes/Genre.php';

//movies genres
$sciFi = new Genre('Sci-fi');
$horror = new Genre('Horror');
$action = new Genre('Action');
$commedy = new Genre('Commedy');
$mistery =new Genre('Mistery');

//movies
$theBlairWitchProject = new Movie ('The Blair Witch Project', 2000, 6 , 'English', $horror, $mistery);
$alien = new Movie ('Alien', 1979, 8, 'English', $sciFi, $horror);
$sharknado = new Movie ('Sharknado', 2013, 3, 'Italian', $sciFi, $commedy);
$deadPoolWolverine = new Movie ('Deadpool & Wolverine', 2024, 7, 'Italian', $sciFi, $action);

$genres = [
    $sciFi,
    $horror,
    $action,
    $commedy,
    $mistery,
];

$movies = [
    $theBlairWitchProject,
    $alien,
    $sharknado,
    $deadPoolWolverine,
];
?>