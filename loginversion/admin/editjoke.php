<?php
require "../login/Check.php";
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try {
    if(isset($_POST['questiontext'])) {
        updateJoke($pdo, $_POST['questionid'], $_POST['questiontext']);
        header('location: jokes.php');
    } else {
        $question = getJoke($pdo, $_GET['id']);
        $title = 'Edit question';
        ob_start();
        include '../templates/editjoke.html.php';
        $output = ob_get_clean();
    }
}  catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage() . ' in '
    . $e->getFile() . ':' . $e->getLine();

}
include '../templates/admin_layout.html.php';