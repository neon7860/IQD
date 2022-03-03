<?php
try {
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';
    $questions = allJokes($pdo);
    $title = 'Question list';
    $totalJokes = totalJokes($pdo);

    ob_start();

    include 'templates/jokes.html.php';
    $output = ob_get_clean();

} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage() . '
    in ' . $e->getFile() . ':' . $e->getLine();
}
include 'templates/layout.html.php';
