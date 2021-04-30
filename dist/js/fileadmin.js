const frozenFoods = document.querySelector("#c-frozen-foods");
const cannedGoods = document.querySelector("#c-canned-goods");
const beverage = document.querySelector("#c-beverages");
const personalCare = document.querySelector("#c-personal-care");
const frozenButton = document.querySelector(".c-frozen-foods-button");
const cartContent = document.querySelector(".cart-content");
const cartItems = document.querySelector(".cart-items");

const frozen = [
  {
    name: "Waffles",
    price: "RM12.00",
    img: "./images/products/frozen/waffle.jpg",
  },
  {
    name: "Ayamas Frozen Wings",
    price: "RM14.50",
    img: "./images/products/frozen/ayamas_wings.jpg",
  },
  {
    name: "Chicken Frankfurters",
    price: "RM8.00",
    img: "./images/products/frozen/ayamas_frank.png",
  },
  {
    name: "Instant Pizza",
    price: "RM9.00",
    img: "./images/products/frozen/pizza.jpg",
  },
  {
    name: "Frozen Vegetables",
    price: "RM7.60",
    img: "./images/products/frozen/vegetables.jpg",
  },
  // {
  //   name: "Paratha",
  //   price: "RM10.00",
  //   img: "./images/products/frozen/paratha.jpg",
  // },
  // { name: 'Pau', price: 'RM8.50' },
  // { name: 'Frozen Fried Rice', price: 'RM4.50' },
  // { name: 'Beef Patties', price: 'RM9.00' },
  // { name: 'Chicken Patties', price: 'RM9.00' },
  // { name: 'Tilapia Fish', price: 'RM13.00' },
];

const canned = [
  {
    name: "Sardines",
    price: "RM12.00",
    img: "./images/products/canned/sardine.jfif",
  },
  {
    name: "Spaghetti Sauce",
    price: "RM14.50",
    img: "./images/products/canned/spaghettisauce.jpg",
  },
  {
    name: "Carbonara Sauce",
    price: "RM8.00",
    img: "./images/products/canned/carbonarasauce.jpg",
  },
  {
    name: "Mackerels",
    price: "RM9.00",
    img: "./images/products/canned/mackerel.jfif",
  },
  {
    name: "Canned Pineapples",
    price: "RM7.60",
    img: "./images/products/canned/pineapple.jfif",
  },
  // {
  //   name: "Baked Beans",
  //   price: "RM10.00",
  //   img: "./images/products/canned/bakedbeans.jfif",
  // },
  // { name: 'Button Mushrooms', price: 'RM8.50' },
  // { name: 'Chicken Curry', price: 'RM4.50' },
  // { name: 'Rendang', price: 'RM9.00' },
  // { name: 'Sambal', price: 'RM9.00' },
  // { name: 'Ayam Brand Sardines', price: 'RM13.00' },
];

const beverages = [
  {
    name: "Coca-Cola",
    price: "RM12.00",
    img: "./images/products/beverages/cocacola.jpg",
  },
  {
    name: "Sprite",
    price: "RM14.50",
    img: "./images/products/beverages/sprite.jpg",
  },
  {
    name: "Milo",
    price: "RM8.00",
    img: "./images/products/beverages/milo.jfif",
  },
  {
    name: "Chrysanthemum",
    price: "RM9.00",
    img: "./images/products/beverages/chrysanthemum.png",
  },
  {
    name: "Carlsberg",
    price: "RM7.60",
    img: "./images/products/beverages/carlsberg.jpg",
  },
  // {
  //   name: "Sagota",
  //   price: "RM10.00",
  //   img: "./images/products/beverages/sagota.jpg",
  // },
  // { name: 'Lipton Green Tea', price: 'RM8.50' },
  // { name: 'Lipton Iced Lemon Tea', price: 'RM4.50' },
  // { name: 'Asahi', price: 'RM9.00' },
  // { name: 'Heineken', price: 'RM9.00' },
  // { name: 'Soya', price: 'RM13.00' },
];

const personalCareProducts = [
  {
    name: "Colgate Toothpaste",
    price: "RM12.00",
    img: "./images/products/personalcare/colgate.jpeg",
  },
  {
    name: "Colgate Toothbrush",
    price: "RM14.50",
    img: "./images/products/personalcare/colgatebrush.jpg",
  },
  {
    name: "Floss",
    price: "RM8.00",
    img: "./images/products/personalcare/floss.png",
  },
  {
    name: "Gatsby Hair Gel",
    price: "RM9.00",
    img: "./images/products/personalcare/hairgel.png",
  },
  {
    name: "Gatsby Hairwax",
    price: "RM7.60",
    img: "./images/products/personalcare/hairwax.jfif",
  },
  // {
  //   name: "Razors",
  //   price: "RM10.00",
  //   img: "./images/products/personalcare/razors.jpg",
  // },
  // { name: 'Baby Oil', price: 'RM8.50' },
  // { name: 'Deodorant', price: 'RM4.50' },
  // { name: 'Deodorant Spray', price: 'RM9.00' },
  // { name: 'Hair Serum', price: 'RM9.00' },
  // { name: 'Body Wash', price: 'RM13.00' },
];

for (var i = 0; i < frozen.length; i++) {
  var frozenFoodCard = document.createElement("div");
  frozenFoodCard.className = "card card-block mx-2 text-center";
  frozenFoodCard.id = frozen[i].name + "card";

  var frozenFoodPhoto = document.createElement("img");
  frozenFoodPhoto.className = "card-img-top";
  frozenFoodPhoto.src = frozen[i].img;
  frozenFoodPhoto.style.height = "9em";

  var frozenFoodButton = document.createElement("button");
  frozenFoodButton.className = "delete-button btn btn-danger";
  frozenFoodButton.textContent = "Delete";
  deleteproduct(frozenFoodButton,frozen,i,frozen[i].name);

  var frozenFoodEditButton = document.createElement("button");
  frozenFoodEditButton.className = "edit-button btn btn-info";
  frozenFoodEditButton.textContent = "Edit";
  
  
  // $(".edit-button").attr("data-toggle", "modal");

  editproduct(frozenFoodEditButton);

// <button type="button" class="add-button btn btn-success" data-toggle="modal" data-target="#addModal">
//             Add Products
//         </button>


  var frozenFoodName = document.createElement("h6");
  frozenFoodName.className = "card-title";
  frozenFoodName.textContent = frozen[i].name;

  var frozenFoodPrice = document.createElement("p");
  frozenFoodPrice.className = "card-text";
  frozenFoodPrice.textContent = frozen[i].price;

  frozenFoodCard.appendChild(frozenFoodPhoto);
  frozenFoodCard.appendChild(frozenFoodName);
  frozenFoodCard.appendChild(frozenFoodPrice);
  frozenFoodCard.appendChild(frozenFoodButton);
  frozenFoodCard.appendChild(frozenFoodEditButton);

  frozenFoods.appendChild(frozenFoodCard);
}

beverages.forEach(function (products,i) {
  var beverageCard = document.createElement("div");
  beverageCard.className = "card card-block mx-2 text-center";
  beverageCard.id = products.name + "card";

  var beveragePhoto = document.createElement("img");
  beveragePhoto.className = "card-img-top";
  beveragePhoto.src = products.img;
  beveragePhoto.style.height = "9em";

  var beverageButton = document.createElement("button");
  beverageButton.className = "delete-button btn btn-danger";
  beverageButton.textContent = "Delete";
  deleteproduct(beverageButton,beverages,i,products.name);


  

  var beverageName = document.createElement("h6");
  beverageName.className = "card-title";
  beverageName.textContent = products.name;

  var beveragePrice = document.createElement("p");
  beveragePrice.className = "card-text";
  beveragePrice.textContent = products.price;

  beverageCard.appendChild(beveragePhoto);
  beverageCard.appendChild(beverageName);
  beverageCard.appendChild(beveragePrice);
  beverageCard.appendChild(beverageButton);

  beverage.appendChild(beverageCard);
});

canned.forEach(function (products,i) {
  var cannedGoodsCard = document.createElement("div");
  cannedGoodsCard.className = "card card-block mx-2 text-center";
  cannedGoodsCard.id = products.name + "card";

  var cannedGoodsPhoto = document.createElement("img");
  cannedGoodsPhoto.className = "card-img-top";
  cannedGoodsPhoto.src = products.img;
  cannedGoodsPhoto.style.height = "9em";

  var cannedButton = document.createElement("button");
  cannedButton.className = "delete-button btn btn-danger";
  cannedButton.textContent = "Delete";
  deleteproduct(cannedButton,beverages,i,products.name);

  
  var cannedGoodsName = document.createElement("h6");
  cannedGoodsName.className = "card-title";
  cannedGoodsName.textContent = products.name;

  var cannedGoodsPrice = document.createElement("p");
  cannedGoodsPrice.className = "card-text";
  cannedGoodsPrice.textContent = products.price;

  cannedGoodsCard.appendChild(cannedGoodsPhoto);
  cannedGoodsCard.appendChild(cannedGoodsName);
  cannedGoodsCard.appendChild(cannedGoodsPrice);
  cannedGoodsCard.appendChild(cannedButton);

  cannedGoods.appendChild(cannedGoodsCard);
});

personalCareProducts.forEach(function (products,i) {
  var personalCareCard = document.createElement("div");
  personalCareCard.className = "card card-block mx-2 text-center";
  personalCareCard.id = products.name + "card";

  var personalCarePhoto = document.createElement("img");
  personalCarePhoto.className = "card-img-top";
  personalCarePhoto.src = products.img;
  personalCarePhoto.style.height = "9em";


  var personalCareButton = document.createElement("button");
  personalCareButton.className = "delete-button btn btn-danger";
  personalCareButton.textContent = "Delete";
  deleteproduct(personalCareButton,beverages,i,products.name);
  


  var personalCareName = document.createElement("h6");
  personalCareName.className = "card-title";
  personalCareName.textContent = products.name;

  var personalCarePrice = document.createElement("p");
  personalCarePrice.className = "card-text";
  personalCarePrice.textContent = products.price;

  personalCareCard.appendChild(personalCarePhoto);
  personalCareCard.appendChild(personalCareName);
  personalCareCard.appendChild(personalCarePrice);
  personalCareCard.appendChild(personalCareButton);

  personalCare.appendChild(personalCareCard);
});


function deleteproduct(deletebutton,arr,i,name){
  deletebutton.addEventListener("click",function (){
    
  var result = confirm("Are you sure you want to remove this product from the store ?");
  if (result) {
    arr.splice(i,1);
    var deletedcard =  document.getElementById(name+ "card");
    console.log(deletedcard);
    deletedcard.remove();
  }
  });
}

function editproduct(EditButton,Imgtag,anchortag){
  EditButton.addEventListener("click", function(){
    var editmodal = document.getElementById("EditModal");
    var newmodal = '<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="false"><div class="modal-dialog modal-dialog-centered modal-lg" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="addLabel">Edit Product</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="iframe-container"><iframe class="video"src="addproduct.html" name="targetframe" allowTransparency="true" frameborder="-1" scrolling="yes" ></iframe></div><div class="modal-footer"><button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button><!-- <button type="button" class="btn btn-primary">Save changes</button> --></div></div></div></div>';
    
    editmodal.insertAdjacentElement("beforeend",newmodal);
    // console.log("adfa");
    // var newEditProductDiv = document.getElementById("EditProductContent");
  
    // var newEditProductContent = '<h1>Hello<h1><img src="'+Imgtag+'" alt="">';
    // console.log(newEditProductDiv);
    // newEditProductDiv.insertAdjacentHTML("beforeend",newEditProductContent);
    // console.log(newEditProductContent);
    // alert("a");
    // window.location.href = anchortag;
  });
}
