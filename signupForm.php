<?php
require_once('./shared/header.php') ?>

<link rel="stylesheet" href="./css/login.css">
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="./index.php">Log In</a></li>
    </ul>

    <div class="tab-content">
        <div id="signup">
            <h1>Sign Up for Free</h1>

            <form action="./queries/signup.php" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <input type="text" placeholder="Enter Your Name" name="name" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <input type="text" placeholder="Enter Your Contact No." name="phone" required autocomplete="off" />
                    </div>
                </div>

                <div class="top-row">
                    <div class="field-wrap">
                        <input type="text" placeholder="Enter Your Age" name="age" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <input type="text" placeholder="Enter Your Gender" name="gender" required autocomplete="off" />
                    </div>
                </div>
                
                <div class="field-wrap">
                    <input type="text" placeholder="Enter Your Blood Group" name="blood" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <input type="email" placeholder="Enter Your Email" name="email" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                    <input type="password" placeholder="Enter Your Password" name="password" required autocomplete="off" />
                </div>

                <button type="submit" class="button button-block">Get Started</button>

            </form>

        </div>

    </div><!-- tab-content -->

</div> <!-- /form -->

<?php require_once('./shared/footer.php') ?>