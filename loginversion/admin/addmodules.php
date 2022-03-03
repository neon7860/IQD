<?php
require "../login/Check.php";
if (isset($_POST['moduleName'])) {
    try {
        include '../includes/DatabaseConnection.php';
        include '../includes/DatabaseFunctions.php';
        insertModule($pdo, $_POST['moduleName']);
        header('location: modules.php');
    
    } catch (PDOException $e) {
        $title = 'An error has occured';
        $output = 'Database error: ' . $e->getMessage() . ' in '
        . $e->getFile() . ':' . $e->getLine();
    }

} else {
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $title = 'Add a new module';
    ob_start();
    include '../templates/admin_addmodules.html.php';
    $output = ob_get_clean();
}
include '../templates/admin_layout.html.php';