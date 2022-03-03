<?php
session_start();
session_destroy();
header("Location: login.html");
include '../templates/admin_layout.html.php';?>
