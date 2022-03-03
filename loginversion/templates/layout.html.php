<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="jokes.css">
        <title><?=$title?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="paper.css">
    </head>
    <body>
        <header>
            <h1>Internet Question Database</h1>
        </header>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Question List</a></li>
            <li><a href="addjoke.php">Add new question</a></li> 
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="login/login.html">Admin</a></li>
        </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>
            &copy; IQDB 2021
        </footer>
    </body>
</html>