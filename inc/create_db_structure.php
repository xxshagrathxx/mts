<?php
    session_start();

    $pdo = new PDO('sqlite:../excel.db') or die("cannot open the database");

    $query = "CREATE TABLE invoices(
        id INTEGER PRIMARY KEY,
        invoice_id INTEGER,
        invoice_date VARCHAR(255),
        customer_name VARCHAR(255),
        customer_address TEXT,
        product_name VARCHAR(255),
        quantity INTEGER,
        price FLOAT,
        total FLOAT,
        grand_total FLOAT
    );";
    $pdo->exec($query);

    $_SESSION['message'] = 'Database Created <strong>Successfully!!</strong>';

    header("location: ../index.php");