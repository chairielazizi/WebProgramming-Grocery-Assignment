const firstName = document.getElementById("firstName");
const lastName = document.getElementById("lastName");
const emailInput = document.getElementById("emailInput");
const passwordInput = document.getElementById("passwordInput");
const birthdate = document.getElementById("birthdate");
const confirmPassword = document.getElementById("confirmPassword");
const terms = document.getElementById("terms");
const submmit = document.getElementById("submitForm");
const male = document.getElementById("male");
const female = document.getElementById("female");

firstName.addEventListener('keyup', checkValid)
lastName.addEventListener('keyup', checkValid)
emailInput.addEventListener('keyup', checkEmail)
passwordInput.addEventListener('keyup', goodPassword)
confirmPassword.addEventListener('keyup', matchPassword)
birthdate.addEventListener('click', ckeckDate)
terms.addEventListener('keyup', checkValid)

function checkValid(e) {
    if(e.target.value !== '') {
        e.target.classList.add('is-valid')
        e.target.classList.remove('is-invalid')
    } else {
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
    }
}

function checkEmail(e){
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(e.target.value.match(mailformat) && e.target.value !== '' && e.target.value.includes(".com")){
        e.target.classList.add('is-valid')
        e.target.classList.remove('is-invalid')
    }else {
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
    }

}

function goodPassword(e){
    var lowerCaseLetters = /[a-z]/g;
    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    if(e.target.value.length < 8 || e.target.value.length > 10){
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
        return false;
    }else if(!e.target.value.match(upperCaseLetters)){
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
        return false;
    }else if(!e.target.value.match(lowerCaseLetters)){
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
        return false;
    }else if(!e.target.value.match(numbers)){
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
        return false;
    }else{
        e.target.classList.add('is-valid')
        e.target.classList.remove('is-invalid')
        return true;
    }
}

function matchPassword(e){
    if(passwordInput.value === e.target.value && e.target.value !== '' && goodPassword(e)){
        e.target.classList.add('is-valid')
        e.target.classList.remove('is-invalid')
        return true;
    }else{
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
        return false;
    }
}

function checkDate(e){
    if (e.target.value == "" || e.target.value == null) {
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
    }else{
        e.target.classList.add('is-valid')
        e.target.classList.remove('is-invalid')
    }
}
// checkForm();

// function checkForm(){
//     if (firstName.checkValidity() && lastName.checkValidity() && emailInput.checkValidity() && passwordInput.checkValidity()
//         && birthdate.checkValidity() && confirmPassword.checkValidity() && terms.checkValidity() && matchPassword()
//         && goodPassword() && checkTerms()){
//         submmit.setAttribute("type", "reset");
//         window.location.href = "homepage.html";
//     }
// }

// function checkTerms(){
//     if(terms.checked == false){
//         errorMsg.innerHTML = "Please agree to TroliMart's Terms of Use and Privacy Policy.";
//         terms.checked == true;
//         return false;
//     }else{
//         return true;
//     }
// }





