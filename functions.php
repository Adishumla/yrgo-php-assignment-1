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
    } else {
        // if watchlist is not empty show all movies
        echo "<h2 class='movie-grid-header'>Your watchlist</h2>";
        echo "<section class='movie-grid'>";
        echo "<form action='watchlist.php' method='post'>";
        foreach ($_SESSION['watchlist'] as $movie) {
            echo "<div class='movie'>";
            echo "<img src='" . $GLOBALS['movies'][$movie]['photo'] . "' alt='" . $movie . "' />";
            echo "<div class='tag'>";
            echo "<p>" . "IMDB: " . $GLOBALS['movies'][$movie]['rating'] . "</p>";
            echo "</div>";
            echo "<button class='add-button' name='remove' value='" . $movie . "'>-</button>";
            echo "</div>";
        }
        echo "</form>";
        echo "</section>";
    }
}

function unsetSession()
{
    if (isset($_POST['unset'])) {
        unset($_SESSION['watchlist']);
    }
}
