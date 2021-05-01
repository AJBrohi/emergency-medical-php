<?php
require_once('../shared/header.php')
?>
<link rel="stylesheet" href="../css/sidebar.css">
<div class="sidebar col-md-2 d-flex flex-column justify-content-between py-5 px-4">
    <ul class="list-unstyled">
    <li><a href="../shared/dashboard.php"><button class="btn btn-primary btn-rounded">Home</button></a></li>
    <?php if($_SESSION['role'] === 'admin') { ?>
        <div>
            <li><a href="../admin/addHospitalForm.php"><button class="btn btn-primary btn-rounded">Add Hospital</button></a></li>
            <li><a href="../admin/manageHospitals.php"><button class="btn btn-primary">Manage Hospitals</button></a></li>

            <li><a href="../admin/addRiderForm.php"><button class="btn btn-primary btn-rounded">Add Rider</button></a></li>
            <li><a href="../admin/manageRiders.php"><button class="btn btn-primary">Manage Riders</button></a></li>

            <li><a href="../admin/addAmbulanceForm.php"><button class="btn btn-primary btn-rounded">Add Ambulance</button></a></li>
            <li><a href="../admin/manageAmbulances.php"><button class="btn btn-primary">Manage Ambulances</button></a></li>

            <li><a href="../admin/manageFirstAid.php"><button class="btn btn-primary btn-rounded">First Aid Requests</button></a></li>

            <li><a href="../admin/manageUsers.php"><button class="btn btn-primary">Manage Users</button></a></li>
        </div>
        <?php } 
        if($_SESSION['role'] === 'user') { ?>

        <!-- user -->
        <div>
            <li><a href="../user/findNearest.php"><button class="btn btn-primary">Find Nearest Hospital</button></a></li>
            <li><a href="../user/accidentForm.php"><button class="btn btn-primary">Accident</button></a></li>
            <li><a href="../user/updateUserForm.php"><button class="btn btn-primary">Update Profile</button></a></li>
            <li><a href="../user/contactAdmin.php"><button class="btn btn-primary">Contact Admin</button></a></li>
        </div>
        <?php } 
        if($_SESSION['role'] === 'hospital') {?>
        <div>
            <li><a href="../hospital/addDoctorForm.php"><button class="btn btn-primary">Add Doctor</button></a></li>
            <li><a href="../hospital/updateHospitalForm.php"><button class="btn btn-primary">Update Hospital</button></a></li>
            <li><a href="../hospital/manageDoctors.php"><button class="btn btn-primary">Manage Doctors</button></a></li>
        </div>
        <?php } 
        if($_SESSION['role'] === 'rider') { ?>

        <!-- rider -->
        <div>
            <li><a href="../queries/addFirstAid.php"><button class="btn btn-primary">First Aid Request</button></a></li>
            <li><a href="../rider/accidentLocation.php"><button class="btn btn-primary">Accident Location</button></a></li>
        </div>
        <?php } 
        if($_SESSION['role'] === 'ambulance') { ?>

        <!-- ambulance -->
        <div>
            <li><a href="../ambulance/accidentLocation.php"><button class="btn btn-primary">See Accident Location</button></a></li>
        </div>
        <?php } ?>

    </ul>
    <div>
        <small class="text-white"><?php echo $_SESSION['email']; ?></small>
        <br>
        <a href="../queries/logout.php"><button class="btn btn-danger">Logout</button></a>
    </div>
</div>