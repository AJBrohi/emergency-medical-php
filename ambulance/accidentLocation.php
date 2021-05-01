<?php

require_once('../shared/header.php');
require_once('../queries/showAccidents.php');

?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2 text-center">Accident Locations</h2>
        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Location</th>
                        <th>Require</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["location"]; ?></td>
                            <td><?php echo $row["need"]; ?></td>
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