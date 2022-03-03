<?php
require "../login/Check.php";
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try {
    if(isset($_POST['name'])) {
        updatePerson($pdo, $_POST['personid'], $_POST['name']);
        header('location: person.php');
    } else {
        $person = getPerson($pdo, $_GET['id']);
        $title = 'Edit Person';
        ob_start();
        include '../templates/editperson.html.php';
        $output = ob_get_clean();
    }
}  catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage() . ' in '
    . $e->getFile() . ':' . $e->getLine();

}
include '../templates/admin_layout.html.php';