  

<?php
include("app/database/db.php");
if(isset($_POST['Add-Post'])){
    unset($_POST['Add-Post']);
    $Posts_id = create('Posts', $_POST);
    $_SESSION['message'] = 'Post has been created';
    $_SESSION['type'] = 'succes';

    exit();
}