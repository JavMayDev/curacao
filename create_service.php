<?php 

include("db.php");

if(isset($_POST['submit'])){

    $service_name = $_POST['service_name'];
    $product = $_POST['product'];

    $query = "INSERT INTO services(service_name, product) values('$service_name','$product')";

    /* $query = "INSERT INTO services(service_name, product) values('$service_name', '$product')"; */

    $result = mysqli_query($dbconn, $query);
    if(!$result){
	die("db query failed");
    }
    var_dump($result);

    $_SESSION['message'] = "service created successfuly";
    $_SESSION['message-type'] = "success";
    header('Location: index.php');

}

?>
