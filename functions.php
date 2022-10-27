<?php
require 'movies.php';

function addToWatchlist($movie)
{
    // if watchlist is not set create it
    if (!isset($_SESSION['watchlist'])) {
        $_SESSION['watchlist'] = [];
    }
    // if movie is not in watchlist add it
    if (!in_array($movie, $_SESSION['watchlist'])) {
        array_push($_SESSION['watchlist'], $movie);
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
        foreach ($_SESSION['watchlist'] as $movie) {
            echo "<div class='movie'>";
            echo "<img src='" . $GLOBALS['movies'][$movie]['photo'] . "' alt='" . $movie . "' />";
            echo "<div class='tag'>";
            echo "<p>" . "IMDB: " . $GLOBALS['movies'][$movie]['rating'] . "</p>";
            echo "</div>";
            echo "<button class='save-button' onclick='removeMovie(\"" . $movie . "\")'>-</button>";
            echo "</div>";
        }
        echo "</section>";
    }
}
