<?php

require_once('../shared/header.php') ?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Add Doctor</h2>
        <div class="col-md-5">
            <form class="mt-5" action="../queries/addDoctor.php" method="post">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Contact No.</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Sector</label>
                        <input type="text" class="form-control" name="sector">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



<?php require_once('../shared/footer.php') ?>