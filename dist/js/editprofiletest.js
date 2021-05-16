const fullName = document.querySelector('#fullName')
const username = document.querySelector('#username')
const email = document.querySelector('#email')
const password = document.querySelector('#password')
const newPassword = document.querySelector('#newPassword')



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