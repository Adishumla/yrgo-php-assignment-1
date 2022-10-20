<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/grid.css" />
    <link rel="stylesheet" href="styles/global.css" />
    <title>Movie Library</title>
</head>
<?php //require movies.php
require 'movies.php';

?>

<body>
    <header>
        <h1>Movie Library</h1>
    </header>
    <main>
        <section class="movie-grid">
            <?php foreach ($movies as $movie => $movieInfo) : ?>
                <div class="movie">
                    <img src="<?php echo $movieInfo['photo'] ?>" alt="<?php echo $movie ?>" />
                    <h2><?php echo $movie ?></h2>
                    <p><?php echo $movieInfo['director'] ?></p>
                    <p><?php echo $movieInfo['year'] ?></p>
                    <p><?php echo $movieInfo['genre'] ?></p>
                    <p><?php echo $movieInfo['rating'] ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>
