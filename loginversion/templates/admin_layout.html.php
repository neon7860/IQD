<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../jokes.css">
        <title><?=$title?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../paper.css">
    </head>
    <body>
        <header id="admin">
            <h1>Internet Question Database Admin Area</h1>
        </header>
        <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Question list</a></li>
            <li><a href="addjoke.php">Add new question</a></li>
            <!-- <li><a href="contact.php">Contact us</a></li> -->
            <li><a href="modules.php">Module list</a></li>
            <li><a href="addmodules.php">Add new module</a></li>
            <li><a href="person.php">Author list</a></li>
            <li><a href="addperson.php">Add new author</a></li>
            <li><a href="../index.php">Public Site</a></li>
        </ul>
        </nav>
        <main>
            <?=$output?>
        </main>
        <footer>
            &copy; IJDB 2021
        </footer>
    </body>
</html>