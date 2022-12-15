<?php
    include "inc/header.php";
?>

<?php
    // $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    // if (strpos($url, 'db=success') !== false) {
    //     echo '<div class="alert alert-success" role="alert">
    //             Database Created <strong>Successfully!!</strong>
    //         </div>';
    // }
    if(isset($_SESSION['message']))
    {
        echo '<div class="alert alert-success" role="alert">
                 '.$_SESSION['message'].'
             </div>';
        unset($_SESSION['message']);
    }

    if(isset($_SESSION['messageErr']))
    {
        echo '<div class="alert alert-danger" role="alert">
                 '.$_SESSION['messageErr'].'
             </div>';
        unset($_SESSION['messageErr']);
    }

    if(isset($_SESSION['messageInfo']))
    {
        echo '<div class="alert alert-info" role="alert">
                 '.$_SESSION['messageInfo'].'
             </div>';
        unset($_SESSION['messageInfo']);
    }
?>

    <h1>Import excel to database</h1>
    <p>Here's a test library for handling excel files and to import them to database using php file upload</p>

<?php include "inc/footer.php"; ?>
