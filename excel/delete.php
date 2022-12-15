<?php
    session_start();

    $pdo = new PDO('sqlite:../excel.db') or die("cannot open the database");

    $query = "DROP TABLE invoices";
    $pdo->exec($query);

    $_SESSION['messageInfo'] = 'Table Dropped <strong>Successfully!!</strong>';

    header("location: ../index.php");