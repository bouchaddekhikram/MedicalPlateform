
<?php

include "Patient.php";

class Doctor
{
    private $db ;


    function __construct()
    {
        try {
            $dbname = "webprojet";
            $username = "root";
            $password = "";
            $this->db = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
        } catch (Exception $e) {
            die ("Could not connect to the database $dbname :" . $e->getMessage());

        }
    }

    function addDoctor($data){
        try{
            $name = $data['name'];
            $phone = $data['phone'];
            $pwd = $data['pwd'];
            $adress = $data['adress'];
            $speciality = $data['speciality'];
            $req = "insert into doctors values ('','$name','$phone','$adress','$pwd','$speciality')";
            $res= $this->db->exec($req);
            if($res){
                echo "Doctor ajouté avec succèes";
            }
        } catch (Exception $e) {
            die ("Could not connect to the database $dbname :" . $e->getMessage());

        }

    }

    function getDoctorByCredentials($name,$pwd){
        $r=  $this->db->query("select * from doctors where name='$name' && pwd='$pwd'");
        return $r->fetch();
    }

    // Global function : for doctor and patient
    function signIn($data){

        // Extract the username and password from the data parameter
        $username = $data['name'];
        $password = $data['pwd'];
        $d = new Doctor();
        $p = new Patient();



        // Perform authentication checks
        if ($d->getDoctorByCredentials($username, $password)) {
            session_start();

            // Store the email and password in session variables
            $_SESSION['name'] = $username;
            $_SESSION['password'] = $password;
            header("location:../../../views/doctorScreens/doctorHome.php");
        }else if($p->getPatientByCredentials($username, $password)){
            session_start();

// Store the email and password in session variables
            $_SESSION['name'] = $username;
            $_SESSION['password'] = $password;
            header("location:../../../views/patientScreens/patientHome.php");
        }

        else {
            echo "Invalid username or password!";
        }
    }


    function listDoctor(){
        return  $this->db->query("select * from doctors");

    }

    function listDoctorBySpeciality($spec){
        return  $this->db->query("select * from doctors where speciality = '$spec'");

    }

}