
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

document.getElementById("myButton").onclick = function () {
         alert("Product Added Successfully !");
		 location.href = "addproduct.html";
    };


