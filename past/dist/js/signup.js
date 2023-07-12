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
const error = document.getElementById("error");

firstName.addEventListener('keyup', checkValid);
lastName.addEventListener('keyup', checkValid);
emailInput.addEventListener('keyup', checkEmail);
passwordInput.addEventListener('keyup', goodPassword);
confirmPassword.addEventListener('keyup', matchPassword);
birthdate.addEventListener('click', checkDate);
birthdate.addEventListener('input', checkDate);
terms.addEventListener('change', checkTerms);

function checkValid(e) {
    if(e.target.value !== '') {
        e.target.classList.add('is-valid');
        e.target.classList.remove('is-invalid');
        return true;
    } else {
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }
}

function checkEmail(e){
    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(e.target.value.match(mailformat) && e.target.value !== '' && e.target.value.includes(".com")){
        e.target.classList.add('is-valid');
        e.target.classList.remove('is-invalid');
        return true;
    }else {
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }

}

function goodPassword(e){
    var lowerCaseLetters = /[a-z]/g;
    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    if(e.target.value.length < 8 || e.target.value.length > 10){
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }else if(!e.target.value.match(upperCaseLetters)){
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }else if(!e.target.value.match(lowerCaseLetters)){
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }else if(!e.target.value.match(numbers)){
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }else{
        e.target.classList.add('is-valid');
        e.target.classList.remove('is-invalid');
        return true;
    }
}

function matchPassword(e){
    if(passwordInput.value === e.target.value && e.target.value !== '' && goodPassword(e)){
        e.target.classList.add('is-valid');
        e.target.classList.remove('is-invalid');
        return true;
    }else{
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }
}

function checkDate(e){
    if (!e.target.value) {
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }else{
        e.target.classList.add('is-valid');
        e.target.classList.remove('is-invalid');
        return true;
    }
}

function checkTerms(e){
    if(!e.target.checked){
        e.target.classList.remove('is-valid');
        e.target.classList.add('is-invalid');
        return false;
    }else{
        e.target.classList.add('is-valid');
        e.target.classList.remove('is-invalid');
        return true;
    }
}

// function validateForm(event){
//     if(checkValid(firstName) == true && checkValid(lastName) == true && checkEmail(emailInput) == true 
//         && goodPassword(passwordInput) == true && matchPassword(confirmPassword) ==true && 
//         checkDate(birthdate) == true && checkTerms(terms) == true){
//             return true;
//         }else{
            
//             return false;
//         }
// }

(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();












