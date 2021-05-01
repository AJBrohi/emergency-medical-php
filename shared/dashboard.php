<?php
require_once('./header.php');
?>

<div class="row">
    <?php require_once('./sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Hello <?php echo $_SESSION['role']; ?></h2>
    </div>
</div>

<?php require_once('./footer.php') ?>