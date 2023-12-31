<?php
include "../../../classes/Patient.php";

$p = new Patient();
// On the next page
session_start();
$name = $_SESSION['name'];
$pwd = $_SESSION['password'];

$pl = $p->getPatientByCredentials($name,$pwd);

if(isset($_POST['editP'])){
    $p->updatePatient($_POST);
    //header("location:editProfile.php");
}
?>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="../../../css/settingStyle.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</head>
<body>
<form method="post">
<div class="container rounded bg-white mt-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="../../../img/profileAvatar.svg" width="90"><span class="font-weight-bold"><?php echo $pl['name'] ?></span><span class="text-black-50"><?php echo $pl['name'] ?>@gmail.com</span><span><?php echo $pl['adress'] ?></span></div>
        </div>
        <div class="col-md-8">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                        <button onclick="goBack()"><h6>Back to home</h6></button>
                    </div>
                    <h6 class="text-right">Profile Settings</h6>
                </div>
                <input type="hidden" name="idPatient" value="<?php echo $pl['idPatient']?>">
                <input type="hidden" name="pwd" value="<?php echo $pl['pwd']?>">
                <div class="row mt-2">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Name" value="<?php echo $pl['name'] ?>" name="name"></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $pl['phone'] ?>" placeholder="+216 XX XXX XXX" name="phone"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-12"><input type="text" class="form-control" placeholder="Email" value="<?php echo $pl['name'] ?>@gmail.com"></div>

                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" placeholder="Address" value="<?php echo $pl['adress'] ?>" name="adress"></div>
                    <div class="col-md-6"><input type="text" class="form-control" value="Tunisia" placeholder="Country"></div>
                </div>

                <div class="mt-5 text-right"><button class="btn btn-success" type="submit" name="editP">Save Profile</button></div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
