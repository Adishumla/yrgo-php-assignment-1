<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/grid.css" />
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="/styles/effect.css">
    <title>Movie Library</title>
</head>
<?php //require movies.php
require 'movies.php';
session_start();
?>

<body>
    <header>
        <h1>Movie Library</h1>
    </header>
    <main>
        <section class="main-photos">
            <img class="main-photo" src="posters/wide-posters/Last-Night-In-Soho-023.jpeg" alt="">
        </section>
        <section class="genre-section">
            <!-- if button is pressed change genre in movies.php filter-->
            <form action="index.php" method="POST">
                <button class="genre-button" name="genre" value="Action">Action</button>
                <button class="genre-button" name="genre" value="Sci-Fi">Sci-Fi</button>
                <button class="genre-button" name="genre" value="Horror">Horror</button>
            </form>

        </section>
        <h2 class="movie-grid-header">All our movies</h2>
        <section class="movie-grid">
            <?php //foreach ($movies as $movie => $movieInfo) :
            ?>
            <!-- <div class="movie">
                <img src="<?php echo $movieInfo['photo'] ?>" alt="<?php echo $movie ?>" /> -->
            <!-- <h2><?php echo $movie ?></h2>
                    <p><?php echo $movieInfo['director'] ?></p>
                    <p><?php echo $movieInfo['year'] ?></p>
                    <p><?php echo $movieInfo['genre'] ?></p>
                    <p><?php echo $movieInfo['rating'] ?></p> -->
            </div>
            <?php //endforeach;
            ?>
        </section>
        <!-- movie section that gets movie movie genre from genre-section buttons and filter them-->
        <section class="movie-grid">
            <?php foreach ($movies as $movie => $movieInfo) :
            ?>
                <div class="movie" id="<?php echo $movieInfo['genre'] ?>">
                    <img src="<?php echo $movieInfo['photo'] ?>" alt="<?php echo $movie ?>" />
                    <h2><?php echo $movie ?></h2>
                    <p><?php echo $movieInfo['director'] ?></p>
                    <p><?php echo $movieInfo['year'] ?></p>
                    <p><?php echo $movieInfo['genre'] ?></p>
                    <p><?php echo $movieInfo['rating'] ?></p>
                </div>
            <?php endforeach;
            ?>
    </main>
</body>

</html>
