<?php

require_once('../shared/header.php');
require_once('../queries/showDoctors.php');

?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2 text-center">Show Doctors List</h2>
        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Sector</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["sector"]; ?></td>
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