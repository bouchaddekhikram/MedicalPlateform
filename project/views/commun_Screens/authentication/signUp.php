<?php


include "../../../classes/Doctor.php";

$d = new Doctor();
$p = new Patient();
if(isset($_POST['add_doctor'])){

    if(isset($_POST['doctorChoice'])) {
        $d->addDoctor($_POST);
    }else{
        $p->addPatient($_POST);
    }


}

?>



<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="../../../js/formValidation.js"></script>
</head>
<body>
<img class="wave" src="../../../img/wave.svg">
<div class="container">
    <div class="img">
        <img src="../../../img/bg1.svg">
    </div>
    <div class="login-content">
        <form action=""  method="post">
            <!--                  onsubmit="-->
            <!--        validation(document.getElementById('userName').value,-->
            <!--					document.getElementById('phone').value,-->
            <!--					document.getElementById('Adress').value,-->
            <!--					document.getElementById('pwd').value,-->
            <!--					document.getElementById('pwd2').value,-->
            <!--        			document.getElementsByName('doctorChoice'),-->
            <!--        			document.getElementsByName('Speciality') )">-->
            <img src="../../../img/avatar.svg">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" class="input" id="userName" name="name">
                </div>
            </div>

            <div class="input-div one">
                <div class="i">
                    <i class="fa fa-phone" ></i>
                </div>
                <div class="div">
                    <h5>Phone number</h5>
                    <input type="text" class="input" id="phone" name="phone">
                </div>
            </div>


            <div class="input-div one">
                <div class="i">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                </div>
                <div class="div">
                    <h5>Adress</h5>
                    <input type="text" class="input" id="Adress" name="adress">
                </div>
            </div>








            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" id="pwd" name="pwd">
                </div>

            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Confirm Password</h5>
                    <input type="password" class="input" id="pwd2" name="pwd2">
                </div>

            </div>



            <!--				<div class="gender">-->
            <!--					<div  class="float-left">Gender :</div>-->

            <!--					<div class="form-check form-check-inline">-->
            <!--						<input class="form-check-input" type="radio" name="sexe" value="F">-->
            <!--						<label class="form-check-label" >Female</label>-->
            <!--					</div>-->
            <!--					<div class="form-check form-check-inline">-->
            <!--						<input class="form-check-input" type="radio" name="sexe"  value="M">-->
            <!--						<label class="form-check-label" >Male</label>-->
            <!--					</div>-->

            <!--				</div>-->
            <!--				<div></div>-->


            <div class="gender" id="gender" style="padding-top: 15px">
                <div  class="float-left">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="doctorChoice" id="doctorChoice" value="doctorChoice" onchange="checkbox_changed()">
                        <label class="form-check-label" >I am a doctor</label>
                    </div>
                </div>

            </div>



            <div class="form-group" id="spec" style="display: none; align-items: start;">
                <div  class="float-left">
                    <label for="Speciality" class="col-lg-4" >Speciality:</label>
                    <div  class="col-lg-8">
                        <select class="form-control selectpicker" id="Speciality" name="speciality" >
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
            </div>


            <input type="submit" class="btn" name="add_doctor" value="Sign Up">
            <a href="signIn.php">Do u have already an account? Sign In</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="../../../js/main.js"></script>
</body>
</html>
