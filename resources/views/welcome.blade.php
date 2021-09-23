<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="app.css">
        <script src="app.js"></script>
        <title>Welcome</title>
    </head>
    <header>
        <img src="/images/background.jpg" alt="image">
        <h1>Anime Village</h1>
    </header>
    <body>
        <section class="menu">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#review">News</a></li>
                <li><a href="#login">Contact</a></li>
            </ul>
        </section>
        <section class="banner">
        <h2>Welcome to Anime Village</h2>
        <p>Register and login to discover and explore the world of anime</p>
        <a href="#login">Login</a> <a href="#register">Register</a>
        </section>
        <section class="posts">
            <h3>Populair</h3>
            <div class="populair">
                <a href="#anime 1">anime 1</a>
            </div>
            <div class="populair">
                <a href="#anime 2">anime 2</a>
            </div>
            <div class="populair">
                <a href="#anime 3">anime 3</a>
            </div>
            <div class="populair">
                <a href="#anime 4">anime 4</a>
            </div>
        </section>
    <footer>
        <p>Indra Doerga 0957822 2021</p>
    </footer>

    </body>
</html>
