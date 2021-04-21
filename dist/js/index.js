function checkForm(){
    var emailInput = document.getElementById("inputEmail");
    var passwordInput = document.getElementById("inputPassword");
    if (emailInput.checkValidity() && passwordInput.checkValidity()){
        window.location.href = "homepage.html"; 
    }
}