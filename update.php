<?php

include('db.php');

$id=$_GET['id'];
$service_name = $_POST['service_name'];
$product = $_POST['product'];

$query = "UPDATE services SET service_name='$service_name', product='$product' WHERE id='$id'";

$res = mysqli_query($dbconn, $query);
if ($res) {
    header('Location: index.php');
} else {
    die('error updating item');
}
