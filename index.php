<?php 
include_once __DIR__.'/classes/Movie.php';

var_dump($theBlairWitchProject->rateMovies());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 8 OOP-1</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container">
            <?= $theBlairWitchProject->title ?>

        </div>
    </main>
</body>

</html>

<!-- è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.
Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo gli array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare classes/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
Buon lavoro e buon divertimento a tutte e a tutti! -->