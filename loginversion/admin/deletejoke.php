<?php
require "../login/Check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deleteJoke($pdo, $_POST['id']);
    header('location: jokes.php');
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in '
    . $e->getFile() . ':' . $e->getLine();
}
include '../templates/admin_layout.html.php';