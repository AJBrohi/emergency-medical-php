<?php
require_once('../shared/header.php');
?>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Find Nearest</h2>
        <div class="container" style="margin-top:50px;">
            <!-- form begins-->
            <form role="form" method="POST" action="resultMap.php">
                <div class="form-group">
                    <input type="text" class="form-control" name="location" id="place_location" placeholder="Enter Your Location" />
                </div>

                <div class="col-md-6 mt-3">
                    <input type="submit" name="submit_mes" value="SEARCH" class="btn btn-lg btn-success btn-block">
                </div>
            </form>
            <!-- end form-->
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit_mes'])) {
    $_SESSION['key_val'] = $_POST['keyword'];
}
require_once('./footer.php') ?>