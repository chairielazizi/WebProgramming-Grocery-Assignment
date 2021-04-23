var firstName = document.getElementById("firstName");
var lastName = document.getElementById("lastName");
var emailInput = document.getElementById("emailInput");
var passwordInput = document.getElementById("passwordInput");
var birthdate = document.getElementById("birthdate");
var confirmPassword = document.getElementById("confirmPassword");
var terms = document.getElementById("terms");
var submmit = document.getElementById("submitForm");
var errorMsg = document.getElementById("error");
var male = document.getElementById("male");
var female = document.getElementById("female");

checkForm();

function checkForm(){
    if (firstName.checkValidity() && lastName.checkValidity() && emailInput.checkValidity() && passwordInput.checkValidity()
        && birthdate.checkValidity() && confirmPassword.checkValidity() && terms.checkValidity() && matchPassword()
        && goodPassword() && checkTerms()){
        submmit.setAttribute("type", "reset");
        window.location.href = "homepage.html";
    }
}

function checkTerms(){
    if(terms.checked == false){
        errorMsg.innerHTML = "Please agree to TroliMart's Terms of Use and Privacy Policy.";
        terms.checked == true;
        return false;
    }else{
        return true;
    }
}

function goodPassword(){
    var lowerCaseLetters = /[a-z]/g;
    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    if(passwordInput.value.length < 8 || passwordInput.value.length > 10){
        errorMsg.innerHTML = "Password length must be between 8 to 10 characters";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else if(!passwordInput.value.match(upperCaseLetters)){
        errorMsg.innerHTML = "Password must contain atleast one uppercase letter";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else if(!passwordInput.value.match(lowerCaseLetters)){
        errorMsg.innerHTML = "Password must contain atleast one lowercase letter";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else if(!passwordInput.value.match(numbers)){
        errorMsg.innerHTML = "Password must contain atleast one number";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else{
        errorMsg.innerHTML = "";
        return true;
    }
}

function matchPassword(){
    if(passwordInput.value === confirmPassword.value){
        errorMsg.innerHTML = "";
        return true;
    }else{
        errorMsg.innerHTML = "Please make sure both passwords match";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }
}