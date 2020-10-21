<?php

include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM services WHERE id='$id'";
    $res = mysqli_query($dbconn, $query);
    $row = mysqli_fetch_array($res);
}
echo 'row id:'.$row['id'];
?>

<?php include('includes/header.php') ?>

<div class="container p-4">
    <div class="row">
    <div class="card card-body col-md-4 mx-auto">
        
    <form action="update.php?id=<?= $row['id']?>" method="POST">
    <div class="form-group">
        <input class='form-control' name='service_name' placeholder="service name" type="text" value="<?= $row['service_name']?>">
        <input class='form-control' name='product' placeholder="product" type="text" value="<?= $row['product']?>">
    </div>
    <div class="form-group "><input class='form-control btn btn-success' type="submit" value='update'></div>
    </form>
    </div>
    </div>
</div>

<?php include('includes/footer.php') ?>
