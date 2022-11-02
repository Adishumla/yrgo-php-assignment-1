<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
}
?>
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
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <title>Movie Library</title>
</head>
<?php
require 'movies.php';
require 'functions.php';
if (isset($_POST['movie'])) {
    addToWatchlist($_POST['movie']);
}
?>

<body>
    <?php
    //link navbar
    require 'navbar.php';
    ?>
    <!-- header -->
    <header class="header">
        <h1 class="header-title">Movie Library</h1>
    </header>
    <main>
        <section class="main-photos">
            <img class="main-photo" src="posters/wide-posters/Last-Night-In-Soho-023.jpeg" alt="Anya Taylor-Joy staring at the camera
             with a blue light shining on her from the left and a green light from the right, the background is black.
             img from the movie Last Night is Soho.">
        </section>
        <h2 class="movie-grid-header">All our movies</h2>

        <section class="genre-section">
            <!-- form for all genre in $genres array -->
            <form class="filter-form" action="index.php" method="POST">
                <!--dropdown that filters all genres -->
                <select class="genre-button" name="genre" id="genre">
                    <option value="All">All</option>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?= $genre ?>"><?= $genre ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="genre-button" type="submit">Filter</button>
        </section>
        <section class="movie-grid">
            <form action="" method="post">
                <?php foreach ($movies as $movie => $movieInfo) : ?>
                    <div class="movie" id="<?php echo $movieInfo['genre'] ?>">
                        <div class="add-movie">
                            <button onclick="" class="add-button watchlist-button" name="movie" value="<?php echo $movie ?>">+</button>
                        </div>
                        <img src="<?php echo $movieInfo['photo'] ?>" alt="<?php echo $movie ?>" />
                        <div class="tag">
                            <p><?php echo "IMDB: " . $movieInfo['rating'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p class="footer-text">© 2021 Movie Library</p>
    </footer>
</body>

</html>
