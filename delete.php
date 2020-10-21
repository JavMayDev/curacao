<?php

include('db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM services WHERE id=$id";
    $res = mysqli_query($dbconn, $query);

    if (!$res) {
        die('Query failed');
    }

    $_SESSION['message'] = 'item deleted';
    $_SESSION['message-type'] = 'success';

    /* redirect to index */
    header('Location: index.php');
}
