checkForm();
function checkForm(){
    var emailInput = document.getElementById("inputEmail");
    var passwordInput = document.getElementById("inputPassword");
    var submmit = document.getElementById("submitForm");
    if (emailInput.checkValidity() && passwordInput.checkValidity()){
        submmit.setAttribute("type", "reset");
        if(document.getElementById("option1").checked == true){
            window.location.href = "homepage.html";
        }else{
            window.location.href = "adminpage.html";
    }
    }
}

const updatePassword = document.getElementById("updatePassword");
const modalError = document.getElementById("modalError");
const username = document.getElementById("username");
const passwordInput = document.getElementById("passwordInput");
const confirmPassword = document.getElementById("confirmPassword");
const passwordModal = document.getElementById("passwordModal");

updatePassword.addEventListener("click", function(){
    if(checkFormModal()==true && matchPassword()==true && goodPassword()==true){
        alert("You have successfully changed your password!");
        $('#passwordModal').modal('hide');
    }
});


function checkFormModal(){
    if(username.value==""){
        modalError.innerHTML = "Please insert your username";
        return false;
    }if(passwordInput.value==""){
        modalError.innerHTML = "Please insert your password";
        return false;
    }if(confirmPassword.value==""){
        modalError.innerHTML = "Please insert your confirmed password";
        return false;
    }else{
        modalError.innerHTML = "";
        return true;
    }
}

function goodPassword(){
    var lowerCaseLetters = /[a-z]/g;
    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    if(passwordInput.value.length < 8 || passwordInput.value.length > 10){
        modalError.innerHTML = "Password length must be between 8 to 10 characters";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else if(!passwordInput.value.match(upperCaseLetters)){
        modalError.innerHTML = "Password must contain atleast one uppercase letter";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else if(!passwordInput.value.match(lowerCaseLetters)){
        modalError.innerHTML = "Password must contain atleast one lowercase letter";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else if(!passwordInput.value.match(numbers)){
        modalError.innerHTML = "Password must contain atleast one number";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }else{
        modalError.innerHTML = "";
        return true;
    }
}

function matchPassword(){
    if(passwordInput.value === confirmPassword.value){
        modalError.innerHTML = "";
        return true;
    }else{
        modalError.innerHTML = "Please make sure both passwords match";
        passwordInput.value = "";
        confirmPassword.value = "";
        return false;
    }
}

