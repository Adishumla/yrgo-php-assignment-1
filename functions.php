<?php
require 'movies.php';

/* function addToWatchlist()
{
    if (isset($_POST['movie'])) {
        $movie = $_POST['movie'];
        //if watchlist array is empty add movie to watchlist array
        if (empty($_SESSION['watchlist'])) {
            $_SESSION['watchlist'] = array($movie);
        } else {
            //if watchlist array is not empty add movie to watchlist array
            array_push($_SESSION['watchlist'], $movie);
        }
    }
} */
// add movie to watchlist array function only works if movie is not already in watchlist array
function addToWatchlist()
{
    if (isset($_POST['movie'])) {
        $movie = $_POST['movie'];
        //if watchlist array is empty add movie to watchlist array
        if (empty($_SESSION['watchlist'])) {
            $_SESSION['watchlist'] = array($movie);
        } else {
            //if watchlist array is not empty add movie to watchlist array
            if (!in_array($movie, $_SESSION['watchlist'])) {
                array_push($_SESSION['watchlist'], $movie);
            }
        }
    }
}
function removeMovieFromWatchlist()
{
    if (isset($_POST['remove'])) {
        $movie = $_POST['remove'];
        //if watchlist array is not empty remove movie from watchlist array
        if (!empty($_SESSION['watchlist'])) {
            $key = array_search($movie, $_SESSION['watchlist']);
            unset($_SESSION['watchlist'][$key]);
        }
    }
}

function showWatchlist()
{
    // if watchlist is not set create it
    if (!isset($_SESSION['watchlist'])) {
        $_SESSION['watchlist'] = [];
    }
    // if watchlist is empty show message
    if (empty($_SESSION['watchlist'])) {
        echo "<h2 class='movie-grid-header'>Your watchlist is empty</h2>";
    } else { ?>
        <h2 class="movie-grid-header">Your watchlist</h2>
        <form action="watchlist.php" method="post">

            <section class="movie-grid">
                <?php foreach ($_SESSION['watchlist'] as $movie) : ?>
                    <div class="movie">
                        <img src="<?php echo $GLOBALS['movies'][$movie]['photo']; ?>" alt="<?php echo $movie; ?>" />
                        <div class="tag">
                            <p><?php echo "IMDB: " . $GLOBALS['movies'][$movie]['rating']; ?></p>
                        </div>
                        <button class="add-button" name="remove" value="<?php echo $movie; ?>">-</button>
                    </div>
                <?php endforeach; ?>
            </section>

        </form>
<?php

    }
}

function unsetSession()
{
    if (isset($_POST['unset'])) {
        unset($_SESSION['watchlist']);
    }
}
