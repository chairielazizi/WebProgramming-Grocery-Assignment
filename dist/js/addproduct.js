var productName = document.getElementById("productName");
var Categories = document.getElementById("Categories");
var Price = document.getElementById("Price");
const imgDiv = document.querySelector('.profile-pic-div')
const img = document.querySelector('#productImage');
const file = document.querySelector('#file');
const editPic = document.querySelector('#editPic');

function validateForm() {
  var x = document.forms["myform"]["productName"].value;
  if (x == "" || x == null) {
    alert("Product Name must be filled out");
    return false;
  }
}

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

document.getElementById("submit").onclick = function () {
	

        
		//location.href = "adminpage.html";
    
         
    };
	
	document.getElementById("cancel").onclick = function () {
	

        alert("Cancel Adding Product!");
		location.href = "adminpage.html";
    
         
    };


