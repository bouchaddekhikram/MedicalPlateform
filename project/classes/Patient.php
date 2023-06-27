<?php


class Patient
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

    function addPatient($data)
    {
        try {
            $name = $data['name'];
            $phone = $data['phone'];
            $pwd = $data['pwd'];
            $adress = $data['adress'];

            $req = "insert into patient values ('','$name','$phone','$adress','$pwd')";
            $res = $this->db->exec($req);
            if ($res) {
                echo "Patient ajouté avec succèes";
            }
        } catch (Exception $e) {
            die ("Could not connect to the database $dbname :" . $e->getMessage());

        }
    }


    function getPatientByCredentials($name, $pwd)
    {
        $r = $this->db->query("select * from patient where name='$name' && pwd='$pwd'");
        return $r->fetch();


    }

    function updatePatient($data){
        $nom = $data['name'];
        $phone = $data['phone'];
        $adress = $data['adress'];
        $pwd = $data['pwd'];
        $id = $data['idPatient'];
        $req = "update patient set  name='$nom', phone='$phone',adress='$adress', pwd='$pwd' where idPatient='$id' ";
        $res= $this->db->exec($req);
        if($res){
            echo " Profile has updated successfully";
        }
    }
}