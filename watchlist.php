<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/grid.css" />
    <link rel="stylesheet" href="styles/global.css" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="/styles/effect.css">
    <title>Watchlist</title>
</head>
<?php
require 'movies.php';
require 'functions.php';

// if movie is posted, remove from watchlist
if (isset($_POST['remove'])) {
    $movie = $_POST['remove'];
    //if watchlist array is not empty remove movie from watchlist array
    if (!empty($_SESSION['watchlist'])) {
        $key = array_search($movie, $_SESSION['watchlist']);
        unset($_SESSION['watchlist'][$key]);
    }
}
?>

<body>
    <?php
    require 'navbar.php';
    // show all movies added to watchlist
    showWatchlist();
    ?>
</body>

</html>
