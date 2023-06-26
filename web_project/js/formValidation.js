//Show and hide the speciality select
function checkbox_changed() {
    var elem = document.getElementById('spec');
    if (document.getElementById("doctorChoice").checked){
        elem.style.display = 'block';
    }else {
        elem.style.display = 'none';
    }
}

//Validation name
function validationName(name){
    if(name === ""){
        alert("Name is required");
        return false;
    }
    return true;

}
function validationPhone(phone){
    if(phone === ""){
        alert("phone is required");
        return false;
    }
    return true;

}
function validationAdress(adress){
    if(adress === ""){
        alert("Adress is required");
        return false;
    }
    return true;

}

function validationPwd(pwd,pwd2){
    if(pwd === ""){
        alert("password is required");
        return false;
    }
    if(pwd2 === ""){
        alert("Confirm password is required");
        return false;
    }
    if (pwd !== pwd2){
        alert("Confirmed password is not matched");
        return false;
    }
    return true;

}

//Validation Langue
function validationDoctor(isDoctor){
    return isDoctor.checked;
}

function  validationSpeciality(speciality,isDoctor){
    if(validationDoctor(isDoctor) && speciality[0].value === "-"){
        alert("Speciality is required");
        return false;
    }
    return true;
}


//Validation globale
function validation(name,phone,adress,pwd,pwd2,isDoctor,speciality){
    return validationName(name)&& validationPhone(phone) && validationAdress(adress)&&validationPwd(pwd,pwd2)&& validationDoctor(isDoctor)&& validationSpeciality(speciality,isDoctor) ;
}
