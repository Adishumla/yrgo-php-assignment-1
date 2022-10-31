<?php session_start(); ?>
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
            <img class="main-photo" src="posters/wide-posters/Last-Night-In-Soho-023.jpeg" alt="">
        </section>
        <section class="genre-section">
            <!-- form for all genre in $genres array -->
            <form class="filter-form" action="index.php" method="POST">
                <!-- <?php foreach ($genres as $genre) : ?>
                    <button class="genre-button" name="genre" value="<?= $genre ?>"><?= $genre ?></button>
                <?php endforeach; ?>
                 remove filter
                <button class="genre-button" name="genre" value="All">All</button> -->
                <!--dropdown that filters all genres -->
                <select class="genre-button" name="genre" id="genre">
                    <option value="All">All</option>
                    <?php foreach ($genres as $genre) : ?>
                        <option value="<?= $genre ?>"><?= $genre ?></option>
                    <?php endforeach; ?>
                </select>

                <button class="genre-button" type="submit">Filter</button>


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
    <footer>
        <p>© 2021 Movie Library</p>
    </footer>
</body>

</html>
