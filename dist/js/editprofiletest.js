const fullName = document.querySelector('#fullName')
const username = document.querySelector('#username')
const email = document.querySelector('#email')
const password = document.querySelector('#password')
const newPassword = document.querySelector('#newPassword')
const imgDiv = document.querySelector('form-group col-md-4')
const img = document.querySelector('#profilePic');
const file = document.querySelector('#file');
const editPic = document.querySelector('#editPic');
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

file.addEventListener('change', function(){
    const choosedFile = this.files[0];

    if (choosedFile){
        const reader = new FileReader();

        reader.addEventListener('load', function(){
            img.setAttribute('src',reader.result);
        }
        );
       reader.readAsDataURL(choosedFile);
    }
}
);

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

// function checkValid(e) {
//     if(e.target.value !== '') {
//         e.target.classList.add('is-valid')
//         e.target.classList.remove('is-invalid')
//     } else {
//         e.target.classList.remove('is-valid')
//         e.target.classList.add('is-invalid')
//     }
// }

// // function checkValidEmail(e) {
// //     const regex = new RegExp("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$")
// //     if(email.textContent.match(regex)) {
// //         e.target.classList.add('is-valid')
// //         console.log('valid')
// //     } else {
// //         e.target.classList.remove('is-invalid')
// //         console.log('invalid')
// //     }
// // }

// fullName.addEventListener('input', checkValid)
// username.addEventListener('input', checkValid)
// email.addEventListener('input', checkValid)

function displayAlert1(){
    var confirm1 = confirm('Are you sure with the changes?');
    if(confirm1 == true){
        alert("Your profile has been updated!");
        window.location.href = 'homepage.php';
    }
    
}
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