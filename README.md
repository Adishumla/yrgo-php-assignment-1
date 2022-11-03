<img src="gif/toast.gif" width="100%">

# Movie Library

This is a movie Library where you can add movies to your watchlist that is saved in your current session.
To try it out, go to https://garali.se/movie-library and add some movies to your watchlist.

# Installation

-   Clone the repository
-   start a local server in the root folder of the project (e.g. php -S localhost:8000)
-   go to localhost:8000/index.php in your browser and enjoy!

# Code Review

Code review written by [Jane Doh](https://github.com/username).

1. `index.php:23-24` - Remember to add "**DIR**" when requiring files
2. `index.php:40` - "main-photos" only contains a single photo. perhaps use a name such as "main-photo-container"
3. `index.php:36` - you do not need "class = "header" when using "<header>". same for "<footer>", "<h1>", "<h2>", etc.
4. `grid.css:74` - Comments in css are made with /_ css _/. not //
5. `example.js:10-15` - More comments would be good

# Testers

Tested by the following people:

1. Niklas
2. Styrjörn
