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

