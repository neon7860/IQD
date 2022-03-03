<?php 

    $pdo = new PDO('mysql:host=mysql.cms.gre.ac.uk;dbname=mdb_mi7500j;charset=utf8', 'mi7500j','mi7500j');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);