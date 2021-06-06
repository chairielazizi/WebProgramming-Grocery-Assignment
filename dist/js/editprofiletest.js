const fullName = document.querySelector('#fullName')
const username = document.querySelector('#username')
const email = document.querySelector('#email')
const password = document.querySelector('#password')
const newPassword = document.querySelector('#newPassword')
const imgDiv = document.querySelector('form-group col-md-4')
const img = document.querySelector('#profilePic');
const file = document.querySelector('#file');
const editPic = document.querySelector('#editPic');

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
        e.target.classList.add('is-valid')
        e.target.classList.remove('is-invalid')
    } else {
        e.target.classList.remove('is-valid')
        e.target.classList.add('is-invalid')
    }
}

// function checkValidEmail(e) {
//     const regex = new RegExp("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$")
//     if(email.textContent.match(regex)) {
//         e.target.classList.add('is-valid')
//         console.log('valid')
//     } else {
//         e.target.classList.remove('is-invalid')
//         console.log('invalid')
//     }
// }

fullName.addEventListener('input', checkValid)
username.addEventListener('input', checkValid)
email.addEventListener('input', checkValid)

function displayAlert1(){
    var confirm1 = confirm('Are you sure with the changes?');
    if(confirm1 == true){
        alert("Your profile has been updated!");
        window.location.href = 'homepage.html';
    }
    
}