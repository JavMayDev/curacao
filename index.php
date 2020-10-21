<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
    
    <div class="col-md-4">
    <?php if (isset($_SESSION['message'])) : ?>
    <div class="alert alert-<?= $_SESSION['message-type']?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php session_unset();
endif ?>
    <div class="card card-body">
        <form action="create_service.php" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="service_name" placeholder="nombre servicio" autofocus>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="product" placeholder="producto" autofocus>
        </div>
        <input type="submit" class="btn btn-success btn-block" name="submit" value="Guardar servicio">
        </form>
    </div>
    </div>
    <div class="col-md-8">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th>Name</th>
        <th>product</th>
        <th>created at</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
<?php
    $query = "SELECT * FROM services";
$result = mysqli_query($dbconn, $query);
while ($row = mysqli_fetch_array($result)) :
?>
<tr>
<td><?php echo $row['service_name']; ?>
<td><?php echo $row['product']; ?>
<td><?php echo $row['service_date']; ?>
<td>
    <a href="edit.php?id=<?= $row['id']?>">Edit</a>
    <a href="delete.php?id=<?= $row['id']?>">Delete</a>
</td>
</tr>
<?php endwhile ?>
        </tbody>
    </table>
    </div>
    </div>
</div>


<?php include("includes/footer.php") ?>
