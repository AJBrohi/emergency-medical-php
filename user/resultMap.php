<?php
require_once('../shared/header.php');
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDmFqQa3GmRdYRtITKJnv3qF3-tsL5H2A&v=3.exp&sensor=false&libraries=places"></script>

<div class="row">
    <?php require_once('../shared/sidebar.php') ?>
    <div class="col-md-10 p-4 pr-5">
        <h2 class="mt-5 ml-2">Hospital Near (<strong><?php echo $_POST['location'];?></strong>)</h2>
        <div class="container row" id="results" style="margin-top:120px;">
            <div class="col-md-6  col-lg-6 hidden-xs hidden-sm " id="map" style="position:relative">
                <?php
                $_POST['location'] = $_POST['location'].' hospital';
                echo '                              
                <div class="fixedContainer">
                    <iframe 
                    width="650" height="460"
                    frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAnPd6rDXQ8pUSBOkvy5TCI5PCDUFQXTdk&q=' . $_POST['location'] . '" allowfullscreen>
                    </iframe>
                </div>';
                ?>
            </div>
        </div>
    </div>
</div>

<?php require_once('../shared/footer.php') ?>