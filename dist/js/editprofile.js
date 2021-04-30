
const imgDiv = document.querySelector('.profile-pic-div')
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
function displayAlert2(){
    confirm('Are you sure you want to delete your account?');
    window.location.href = 'index.html';
    alert("Your account has successfully been deleted!");
}
function displayAlert1(){
    confirm('Are you sure with the changes?');
    alert("Your profile has been updated!");
    window.location.href = 'homepage.html';
}
