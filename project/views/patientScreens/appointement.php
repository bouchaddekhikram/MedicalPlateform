<?php
include "../../classes/Patient.php";

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
    <!-- Style CSS -->
    <link rel="stylesheet" href="../../css/appointementStyle.css">
    <link rel="stylesheet" href="../../css/doctorsListStyle.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="icon" href="../../img/favicon.ico">
</head>

<body>


<header>
    <div class="mainheader">

        <div class="logo">
            <img src="../../img/profileAvatar.svg">
            <div class="dropdown">
                <div class="menubtn">
                    <button> Profile</button>
                </div>
                <div class="dropdown-options">
                    <a href="#">Setting</a>
                    <a href="../commun_Screens/authentication/signIn.php">Logout</a>
                </div>
            </div>
        </div>
        <nav>
            <a href="patientHome.php">home</a>
            <a href="#">Doctors</a>
            <a href="#">Medical folder</a>
            <a href="#contactUs">contact</a>

        </nav>

        <div class="menubtn">
            <button> HelpLine</button>
        </div>

    </div>
</header>








<!-- ***** Book An Appoinment Area Start ***** -->
<form>
<div class="medilife-book-an-appoinment-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appointment-form-content">
                    <div class="row no-gutters align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="medilife-appointment-form">
                                <form action="#" method="post">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="hidden" name="idPatient" value="<?php echo $pl['idPatient']?>">
                                                <select class="form-control" id="speciality">
                                                    <option>Speciality 1</option>
                                                    <option>Speciality 2</option>
                                                    <option>Speciality 3</option>
                                                    <option>Speciality 4</option>
                                                    <option>Speciality 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="doctors">
                                                    <option>Doctors 1</option>
                                                    <option>Doctors 2</option>
                                                    <option>Doctors 3</option>
                                                    <option>Doctors 4</option>
                                                    <option>Doctors 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="date" id="date" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="time" id="time" placeholder="Time">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="number" id="number" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7">
                                            <div class="form-group mb-0">
                                                <textarea name="message" class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5 mb-0">
                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn medilife-btn">Make an Appointment <span>+</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="medilife-contact-info">
                                <!-- Single Contact Info -->
                                <div class="single-contact-info mb-30">
                                    <img src="../../img/alarm-clock.png" alt="">
                                    <p>Mon - Sat 08:00 - 21:00 <br>Sunday CLOSED</p>
                                </div>
                                <!-- Single Contact Info -->
                                <div class="single-contact-info mb-30">
                                    <img src="../../img/envelope.png" alt="">
                                    <p>0080 673 729 766 <br>contact@business.com</p>
                                </div>
                                <!-- Single Contact Info -->
                                <div class="single-contact-info">
                                    <img src="../../img/map-pin.png" alt="">
                                    <p>Lamas Str, no 14-18 <br>41770 Miami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- ***** Book An Appoinment Area End ***** -->
</body>
</html>
