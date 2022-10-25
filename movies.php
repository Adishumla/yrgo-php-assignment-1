<?php

declare(strict_types=1);
$movies = [
    'Blade Runner 2049' => [
        'director' => 'Ridley Scott',
        'year' => 1982,
        'genre' => 'Sci-Fi',
        'rating' => 8.2,
        'photo' => 'posters/Blade-Runner-2049.jpeg'
    ],
    'The Matrix' => [
        'director' => 'Andy Wachowski',
        'year' => 1999,
        'genre' => 'Sci-Fi',
        'rating' => 8.7,
        'photo' => 'posters/The-Matrix.jpeg'
    ],
    'E.T. the Extra-Terrestrial' => [
        'director' => 'Steven Spielberg',
        'year' => 1982,
        'genre' => 'Sci-Fi',
        'rating' => 7.9,
        'photo' => 'posters/E.T..jpeg'
    ],
    'The Thing' => [
        'director' => 'John Carpenter',
        'year' => 1982,
        'genre' => 'Horror',
        'rating' => 8.2,
        'photo' => 'posters/The-Thing.jpeg'
    ],
    'Inception' => [
        'director' => 'Christopher Nolan',
        'year' => 2010,
        'genre' => 'Sci-Fi',
        'rating' => 8.8,
        'photo' => 'posters/Inception.jpeg'
    ],
    'Interstellar' => [
        'director' => 'Christopher Nolan',
        'year' => 2014,
        'genre' => 'Sci-Fi',
        'rating' => 8.6,
        'photo' => 'posters/Interstellar.jpeg'
    ],
    'Kong: Skull Island' => [
        'director' => 'Jordan Vogt-Roberts',
        'year' => 2017,
        'genre' => 'Action',
        'rating' => 6.7,
        'photo' => 'posters/Kong-Skull-Island.jpeg'
    ],
    'RoboCop' => [
        'director' => 'Paul Verhoeven',
        'year' => 1987,
        'genre' => 'Action',
        'rating' => 7.5,
        'photo' => 'posters/RoboCop.jpeg'
    ],

];

//filter movies by genre if genre button is pressed in index.php form
if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
    $movies = array_filter($movies, function ($movie) use ($genre) {
        return $movie['genre'] === $genre;
    });
}
