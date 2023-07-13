<?php
include "../../classes/Doctor.php";

$p = new Patient();
// On the next page
session_start();
$name = $_SESSION['name'];
$pwd = $_SESSION['password'];

$pl = $p->getPatientByCredentials($name,$pwd);



if (isset($_POST['speciality'])) {
    $speciality = $_POST['speciality'];

    $doctor = new Doctor();
    $doctors = $doctor->listDoctorBySpeciality($speciality)->fetchAll();

    // Prepare the HTML options for the doctors
    $options = '<option value="">Choose a doctor</option>';
    foreach ($doctors as $doc) {
        $options .= '<option value="' . $doc['idDoctor'] . '">' . $doc['name'] . '</option>';
    }

    // Return the HTML options
    echo $options;
    exit;
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
<!--            <a href="#">Medical folder</a>-->
            <a href="#contactUs">contact</a>

        </nav>

        <div class="menubtn">
            <button> HelpLine</button>
        </div>

    </div>
</header>








<!-- ***** Book An Appoinment Area Start ***** -->

<div class="medilife-book-an-appoinment-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="appointment-form-content">
                    <div class="row no-gutters align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="medilife-appointment-form">
                                <form action="#" method="post" onsubmit="validateDateTime()">
                                    <div class="row align-items-end">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="hidden" name="idPatient" value="<?php echo $pl['idPatient']?>">
                                                <select class="form-control" id="speciality" name="speciality">
                                                    <option value="-">Choose a speciality</option>
                                                    <option value="Allergy">Allergy and immunology</option>
                                                    <option value="Anesthesiology">Anesthesiology</option>
                                                    <option value="Dermatology">Dermatology</option>
                                                    <option value="Diagnostic">Diagnostic radiology</option>
                                                    <option value="Emergency">Emergency medicine</option>
                                                    <option value="Family">Family medicine</option>
                                                    <option value="Internal">Internal medicine</option>
                                                    <option value="genetics">Medical genetics</option>
                                                    <option value="Neurology">Neurology</option>
                                                    <option value="Nuclear">Nuclear medicine</option>
                                                    <option value="Obstetrics">Obstetrics and gynecology</option>
                                                    <option value="Ophthalmology">Ophthalmology</option>
                                                    <option value="Pathology">Pathology</option>
                                                    <option value="Pediatrics">Pediatrics</option>
                                                    <option value="Physical">Physical medicine and rehabilitation</option>
                                                    <option value="Preventive">Preventive medicine</option>
                                                    <option value="Psychiatry">Psychiatry</option>
                                                    <option value="Radiation">Radiation oncology</option>
                                                    <option value="Surgery">Surgery</option>
                                                    <option value="Urology">Urology</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="doctors" name="doctors">
                                                    <option value="">Choose a doctor</option>
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
                                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="name" id="name" placeholder="Name" value="<?php echo $pl['name']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="number" id="number" placeholder="Phone" value="<?php echo $pl['phone']?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="email" id="email" placeholder="E-mail" value="<?php echo $pl['name']?>@gmail.com">
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
                                    <p>+216 22 222 222 <br>doctors@gmail.com</p>
                                </div>
                                <!-- Single Contact Info -->
                                <div class="single-contact-info">
                                    <img src="../../img/map-pin.png" alt="">
                                    <p>Tunisia<br>4180 Petite Arianah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ***** Book An Appoinment Area End ***** -->
</body>
</html>



<!-- script function to show the adequate doctors to a specialty  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Get the select elements
        const specialitySelect = document.getElementById('speciality');
        const doctorsSelect = document.getElementById('doctors');

        // Add an event listener to the speciality select element
        specialitySelect.addEventListener('change', function() {
            const selectedSpeciality = specialitySelect.value;

            // Send an AJAX request to get the doctors based on the selected speciality
            $.ajax({
                type: 'POST',
                url: 'appointement.php',
                data: { speciality: selectedSpeciality },
                success: function(response) {
                    // Update the doctors select menu with the returned options
                    doctorsSelect.innerHTML = response;
                },
                error: function() {
                    // Handle error if the request fails
                    console.log('Error occurred while fetching doctors.');
                }
            });
        });
    });

    function validateDateTime() {
        // Get the values of the date and time fields
        const dateInput = document.getElementById('date').value;
        const timeInput = document.getElementById('time').value;

        // Create Date objects to validate the input
        const currentDate = new Date();
        const inputDate = new Date(dateInput + ' ' + timeInput);

        // Compare the input date with the current date
        if (inputDate <= currentDate) {
            alert('Please select a future date and time.');
            return false;
        }

        // Check if the date and time values are valid
        if (!dateInput || !timeInput) {
            alert('Please enter both the date and time.');
            return false;
        }

        // Return true if the input is valid
        return true;
    }

</script>


