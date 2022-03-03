<?php
require "../login/Check.php";
try {
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    $modules = allModules($pdo);
    $title = 'Module list';
    $totalModules = totalModules($pdo);

    ob_start();

    include '../templates/admin_modules.html.php';
    $output = ob_get_clean();

} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage() . '
    in ' . $e->getFile() . ':' . $e->getLine();
}
include '../templates/admin_layout.html.php';