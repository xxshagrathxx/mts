<?php    
    $pdo = new PDO('sqlite:../excel.db') or die("cannot open the database");

    $statement = $pdo->query("SELECT * FROM invoices");

    if($statement){
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        header('Content-type: text/javascript');
        echo json_encode($rows, JSON_PRETTY_PRINT);
    }
    else
        echo "No Data";
   
?>