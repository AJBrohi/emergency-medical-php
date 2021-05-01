<?php

require_once('../shared/header.php') ?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Add Ambulance</h2>
        <div class="col-md-5">
            <form class="mt-5" action="../queries/addAmbulance.php" method="post">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Driver's Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Driver's Contact No.</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">License No.</label>
                        <input type="text" class="form-control" name="license">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>



<?php require_once('../shared/footer.php'); ?>