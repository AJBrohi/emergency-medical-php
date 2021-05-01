<?php

require_once('../shared/header.php');
require_once('../queries/showUsers.php');
?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2 text-center">Manage Users</h2>
        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Blood Group</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i; $i++; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["age"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["blood"]; ?></td>
                            <td>
                                <a href="./updateUserForm.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Update</button></a>
                                <a href="../queries/deleteUser.php?id=<?php echo $row['id'] ?>"><button class="btn btn-danger ms-3">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php require_once('../shared/footer.php') ?>