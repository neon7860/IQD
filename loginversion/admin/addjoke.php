<?php
require "../login/Check.php";
if (isset($_POST['questiontext'])) {
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertJoke($pdo, $_POST['questiontext'], $_POST['persons'], $_POST['modules']);
        header('location: jokes.php');
    
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage() . ' in '
        . $e->getFile() . ':' . $e->getLine();
    }

} else {
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new question';
    $persons = allAuthors($pdo);
    $modules = allCategories($pdo);
    ob_start();
    include '../templates/addjoke.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';