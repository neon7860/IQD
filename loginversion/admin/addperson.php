<?php
require "../login/Check.php";
if (isset($_POST['name'])) {
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertPerson($pdo, $_POST['name'], $_POST['email']);
        header('location: person.php');
    
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage() . ' in '
        . $e->getFile() . ':' . $e->getLine();
    }

} else {
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new author';
    ob_start();
    include '../templates/addperson.html.php';
    $output = ob_get_clean();
}   
include '../templates/admin_layout.html.php';