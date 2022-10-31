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
<?php
//require movies.php
require 'movies.php';
require 'functions.php';
if (isset($_POST['movie'])) {
    var_dump($_POST['movie']);
    addToWatchlist($_POST['movie']);
}
echo "<pre>";
var_dump($_SESSION['watchlist']);
echo "</pre>";
showWatchlist();

session_start();
?>

<body>
    <header>
        <h1>Movie Library</h1>
        <!--button to watchlist.php-->
        <a href="watchlist.php" class="watchlist-button">Watchlist</a>
    </header>
    <main>
        <section class="main-photos">
            <img class="main-photo" src="posters/wide-posters/Last-Night-In-Soho-023.jpeg" alt="">
        </section>
        <section class="genre-section">
            <!-- if button is pressed change genre in movies.php filter-->
            <!-- <form class="filter-form" action="index.php" method="POST">
                <button class="genre-button" name="genre" value="Action">Action</button>
                <button class="genre-button" name="genre" value="Sci-Fi">Sci-Fi</button>
                <button class="genre-button" name="genre" value="Horror">Horror</button>
                 remove filter
            <button class="genre-button" name="genre" value="All">All</button>
            </form> -->

            <!-- form for all genre in $genres array -->
            <form class="filter-form" action="index.php" method="POST">
                <?php foreach ($genres as $genre) : ?>
                    <button class="genre-button" name="genre" value="<?= $genre ?>"><?= $genre ?></button>
                <?php endforeach; ?>
                <!-- remove filter -->
                <button class="genre-button" name="genre" value="All">All</button>

        </section>
        <h2 class="movie-grid-header">All our movies</h2>
        <?php
        //show movies added to watchlist
        ?>
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
            <form action="index.php" method="post">
                <?php foreach ($movies as $movie => $movieInfo) : ?>
                    <div class="movie" id="<?php echo $movieInfo['genre'] ?>">
                        <img src="<?php echo $movieInfo['photo'] ?>" alt="<?php echo $movie ?>" />
                        <!-- <h2><?php echo $movie ?></h2>
                        <p><?php echo $movieInfo['director'] ?></p>
                        <p><?php echo $movieInfo['year'] ?></p>
                        <p><?php echo $movieInfo['genre'] ?></p>
                        <p><?php echo $movieInfo['rating'] ?></p> -->
                        <!-- movie rating as tag -->
                        <div class="tag">
                            <p><?php echo "IMDB: " . $movieInfo['rating'] ?></p>
                        </div>
                        <button class="add-button watchlist-button" name="movie" value="<?php echo $movie ?>">+</button>


                    </div>
                <?php endforeach; ?>
            </form>
        </section>
    </main>

</body>

</html>
