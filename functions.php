<?php
require 'movies.php';

function saveMovie($movie)
{
    if (!isset($_SESSION['watchlist'])) {
        $_SESSION['watchlist'] = [];
    }
    if (isset($_SESSION['watchlist'][$movie])) {
        $_SESSION['watchlist'][$movie]++;
    } else {
        $_SESSION['watchlist'][$movie] = 1;
    }
}
function showWatchlist()
{
    if (isset($_SESSION['watchlist'])) {
        echo '<h2>Watchlist</h2>';
        echo '<table>';
        echo '<tr>';
        echo '<th>Movie</th>';
        echo '<th>Quantity</th>';
        echo '<th>Remove</th>';
        echo '</tr>';
        foreach ($_SESSION['watchlist'] as $movie => $quantity) {
            echo '<tr>';
            echo '<td>' . $movie . '</td>';
            echo '<td>' . $quantity . '</td>';
            echo '<td><a href="watchlist.php?remove=' . $movie . '">Remove</a></td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}
