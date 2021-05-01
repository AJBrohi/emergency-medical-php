<?php
require_once('./shared/header.php');
?>

<link rel="stylesheet" href="./css/login.css">
<div class="form">

    <ul class="tab-group">
        <li class="tab"><a href="./signupForm.php">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="login">
            <h1>Welcome Back!</h1>
            <form action="./queries/login.php" method="post">

                <div class="field-wrap">
                    <input type="email" required autocomplete="off" name="email" />
                </div>

                <div class="field-wrap">
                    <input type="password" required autocomplete="off" name="password"/>
                </div>

                <button class="button button-block">Log In</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->

<?php require_once('./shared/footer.php') ?>