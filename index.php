<?php 
include_once __DIR__.'/classes/Movie.php';
include_once __DIR__.'/classes/Genre.php';
include_once __DIR__.'/db/db.php';

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

<body class="bg-secondary">
    <main>
        <div class="container">
            <div class="row my-5 bg-dark p-4">
                <?php foreach($movies as $movie) { ?>

                <div class="col-4">
                    <div class="card border-warning mb-3" style="max-width: 25rem;">
                        <div class="card-header card-title">
                            <h3><?= $movie->title?></h3>
                        </div>
                        <div class="card-body">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <p class="fs-4"> <strong>Year: </strong><?= $movie->year?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong>Vote: </strong><?= $movie->vote?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-4"><strong>language:</strong> <?= $movie->language?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class="fs-5"><strong> Genre: </strong><?= $movie->genre->name?></p>
                                    </li>
                                    <li class="list-group-item">
                                        <p class=""><strong>Sub-Genre:</strong> <?= $movie->subGenre->name?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
    </main>
</body>

</html>