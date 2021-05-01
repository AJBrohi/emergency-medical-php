<?php

require_once('../shared/header.php'); 
$id = $_SESSION['id'];

$sql = "SELECT * FROM hospital WHERE id = $id";
$row = mysqli_fetch_assoc(mysqli_query($con, $sql));
?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Update Hospital</h2>
        <div class="col-md-5">
            <form class="mt-5" action="../queries/updateHospital.php" method="post">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['name'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Contact No.</label>
                        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" value="<?php echo $row['location'] ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Rush Hour</label>
                        <input type="text" class="form-control" name="rush_hour" value="<?php echo $row['rush_hour'] ?>">
                    </div>
                </div>
                <input name="id" type="hidden" value="<?php echo $row['id']; ?>"/>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>



<?php require_once('../shared/footer.php') ?>