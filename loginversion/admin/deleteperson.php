<?php
require "../login/Check.php";
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    deletePerson($pdo, $_POST['id']);
    header('location: person.php');
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Unable to connect to the database server: ' . $e->getMessage() . ' in '
    . $e->getFile() . ':' . $e->getLine();
}
include '../templates/admin_layout.html.php';