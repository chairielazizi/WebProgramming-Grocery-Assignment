// modal page
const beveragesModal = document.querySelector(".beverages-modal");
const cannedModal = document.querySelector(".canned-modal");
const frozenModal = document.querySelector(".frozen-modal");
const personalCareModal = document.querySelector(".personalCare-modal");

// modal data
const modalbeverages = [
  {
    name: "Coca-Cola",
    price: 12.0,
    img: "./images/products/beverages/cocacola.jpg",
  },
  {
    name: "Sprite",
    price: 14.5,
    img: "./images/products/beverages/sprite.jpg",
  },
  {
    name: "Milo",
    price: 8.0,
    img: "./images/products/beverages/milo.jfif",
  },
  {
    name: "Chrysanthemum",
    price: 9.0,
    img: "./images/products/beverages/chrysanthemum.png",
  },
  {
    name: "Carlsberg",
    price: 7.6,
    img: "./images/products/beverages/carlsberg.jpg",
  },
  {
    name: "Sagota",
    price: 10.0,
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Lipton Green Tea",
    price: 8.5,
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Lipton Iced Lemon Tea",
    price: 4.5,
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Asahi",
    price: 9.0,
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Heineken",
    price: 9.0,
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Soya",
    price: 13.0,
    img: "./images/products/beverages/sagota.jpg",
  },
];

const modalcanned = [
  {
    name: "Sardines",
    price: 12.0,
    img: "./images/products/canned/sardine.jfif",
  },
  {
    name: "Spaghetti Sauce",
    price: 14.5,
    img: "./images/products/canned/spaghettisauce.jpg",
  },
  {
    name: "Carbonara Sauce",
    price: 8.0,
    img: "./images/products/canned/carbonarasauce.jpg",
  },
  {
    name: "Mackerels",
    price: 9.0,
    img: "./images/products/canned/mackerel.jfif",
  },
  {
    name: "Canned Pineapples",
    price: 7.6,
    img: "./images/products/canned/pineapple.jfif",
  },
  {
    name: "Baked Beans",
    price: 10.0,
    img: "./images/products/canned/bakedbeans.jfif",
  },
  {
    name: "Button Mushrooms",
    price: 8.5,
    img: "./images/products/canned/sardine.jfif",
  },
  {
    name: "Chicken Curry",
    price: 4.5,
    img: "./images/products/canned/sardine.jfif",
  },
  {
    name: "Rendang",
    price: 9.0,
    img: "./images/products/canned/sardine.jfif",
  },
  {
    name: "Sambal",
    price: 9.0,
    img: "./images/products/canned/sardine.jfif",
  },
  {
    name: "Ayam Brand Sardines",
    price: 13.0,
    img: "./images/products/canned/sardine.jfif",
  },
];

const modalfrozen = [
  {
    name: "Waffles",
    price: 12.0,
    img: "./images/products/frozen/waffle.jpg",
  },
  {
    name: "Ayamas Frozen Wings",
    price: 14.5,
    img: "./images/products/frozen/ayamas_wings.jpg",
  },
  {
    name: "Chicken Frankfurters",
    price: 8.0,
    img: "./images/products/frozen/ayamas_frank.png",
  },
  {
    name: "Instant Pizza",
    price: 9.0,
    img: "./images/products/frozen/waffle.jpg",
  },
  {
    name: "Frozen Vegetables",
    price: 7.6,
    img: "./images/products/frozen/vegetables.jpg",
  },
  {
    name: "Paratha",
    price: 10.0,
    img: "./images/products/frozen/paratha.jpg",
  },
  {
    name: "Pau Krapau",
    price: 8.5,
    img: "./images/products/frozen/paratha.jpg",
  },
  {
    name: "Frozen Fried Rice",
    price: 4.5,
    img: "./images/products/frozen/paratha.jpg",
  },
  {
    name: "Beef Patties",
    price: 9.0,
    img: "./images/products/frozen/paratha.jpg",
  },
  {
    name: "Chicken Patties",
    price: 9.0,
    img: "./images/products/frozen/paratha.jpg",
  },
  {
    name: "Tilapia Fish",
    price: 13.0,
    img: "./images/products/frozen/paratha.jpg",
  },
];

const modalpersonalCareProducts = [
  {
    name: "Colgate Toothpaste",
    price: 12.0,
    img: "./images/products/personalcare/colgate.jpeg",
  },
  {
    name: "Colgate Toothbrush",
    price: 14.5,
    img: "./images/products/personalcare/colgatebrush.jpg",
  },
  {
    name: "Floss",
    price: 8.0,
    img: "./images/products/personalcare/floss.png",
  },
  {
    name: "Gatsby Hair Gel",
    price: 9.0,
    img: "./images/products/personalcare/hairgel.png",
  },
  {
    name: "Gatsby Hairwax",
    price: 7.6,
    img: "./images/products/personalcare/hairwax.jfif",
  },
  {
    name: "Razors",
    price: 10.0,
    img: "./images/products/personalcare/razors.jpg",
  },
  {
    name: "Baby Oil",
    price: 8.5,
    img: "./images/products/personalcare/hairgel.png",
  },
  {
    name: "Deodorant",
    price: 4.5,
    img: "./images/products/personalcare/hairgel.png",
  },
  {
    name: "Deodorant Spray",
    price: 9.0,
    img: "./images/products/personalcare/hairgel.png",
  },
  {
    name: "Hair Serum",
    price: 9.0,
    img: "./images/products/personalcare/hairgel.png",
  },
  {
    name: "Body Wash",
    price: 13.0,
    img: "./images/products/personalcare/hairgel.png",
  },
];

modalbeverages.forEach((products) => {
  var beverageCard = document.createElement("div");
  beverageCard.className = "card card-block mx-2 text-center";

  var beveragePhoto = document.createElement("img");
  beveragePhoto.className = "card-img-top";
  beveragePhoto.src = products.img;
  beveragePhoto.style.height = "9em";

  var beverageButton = document.createElement("button");
  beverageButton.className = "add-to-cart-button btn btn-success";
  beverageButton.textContent = "Add to List";
  addtolist(beverageButton, products.name, products.price);

  var beverageName = document.createElement("h6");
  beverageName.className = "card-title";
  beverageName.textContent = products.name;

  var beveragePrice = document.createElement("p");
  beveragePrice.className = "card-text";
  beveragePrice.textContent = "RM " + products.price.toFixed(2);

  beverageCard.appendChild(beveragePhoto);
  beverageCard.appendChild(beverageName);
  beverageCard.appendChild(beveragePrice);
  beverageCard.appendChild(beverageButton);
  beveragesModal.appendChild(beverageCard);
});

modalcanned.forEach((products) => {
  var cannedGoodsCard = document.createElement("div");
  cannedGoodsCard.className = "card card-block mx-2 text-center";

  var cannedGoodsPhoto = document.createElement("img");
  cannedGoodsPhoto.className = "card-img-top";
  cannedGoodsPhoto.src = products.img;
  cannedGoodsPhoto.style.height = "9em";

  var cannedButton = document.createElement("button");
  cannedButton.className = "add-to-cart-button btn btn-success";
  cannedButton.textContent = "Add to List";
  addtolist(cannedButton, products.name, products.price);

  var cannedGoodsName = document.createElement("h6");
  cannedGoodsName.className = "card-title";
  cannedGoodsName.textContent = products.name;

  var cannedGoodsPrice = document.createElement("p");
  cannedGoodsPrice.className = "card-text";
  cannedGoodsPrice.textContent = "RM " + products.price.toFixed(2);

  cannedGoodsCard.appendChild(cannedGoodsPhoto);
  cannedGoodsCard.appendChild(cannedGoodsName);
  cannedGoodsCard.appendChild(cannedGoodsPrice);
  cannedGoodsCard.appendChild(cannedButton);

  cannedModal.appendChild(cannedGoodsCard);
});

modalfrozen.forEach((products) => {
  var frozenFoodCard = document.createElement("div");
  frozenFoodCard.className = "card card-block mx-2 text-center";

  var frozenFoodPhoto = document.createElement("img");
  frozenFoodPhoto.className = "card-img-top";
  frozenFoodPhoto.src = products.img;
  frozenFoodPhoto.style.height = "9em";

  var frozenFoodButton = document.createElement("button");
  frozenFoodButton.className =
    "add-to-cart-button btn btn-success align-self-end";
  frozenFoodButton.textContent = "Add to List";
  addtolist(frozenFoodButton, products.name, products.price);

  var frozenFoodName = document.createElement("h6");
  frozenFoodName.className = "card-title";
  frozenFoodName.textContent = products.name;

  var frozenFoodPrice = document.createElement("p");
  frozenFoodPrice.className = "card-text";
  frozenFoodPrice.textContent = "RM " + products.price.toFixed(2);

  frozenFoodCard.appendChild(frozenFoodPhoto);
  frozenFoodCard.appendChild(frozenFoodName);
  frozenFoodCard.appendChild(frozenFoodPrice);
  frozenFoodCard.appendChild(frozenFoodButton);

  frozenModal.appendChild(frozenFoodCard);
});

modalpersonalCareProducts.forEach((products) => {
  var personalCareCard = document.createElement("div");
  personalCareCard.className = "card card-block mx-2 text-center";

  var personalCarePhoto = document.createElement("img");
  personalCarePhoto.className = "card-img-top";
  personalCarePhoto.src = products.img;
  personalCarePhoto.style.height = "9em";

  var personalCareButton = document.createElement("button");
  personalCareButton.className = "add-to-cart-button btn btn-success";
  personalCareButton.textContent = "Add to List";
  addtolist(personalCareButton, products.name, products.price);

  var personalCareName = document.createElement("h6");
  personalCareName.className = "card-title";
  personalCareName.textContent = products.name;

  var personalCarePrice = document.createElement("p");
  personalCarePrice.className = "card-text";
  personalCarePrice.textContent = products.price.toFixed(2);

  personalCareCard.appendChild(personalCarePhoto);
  personalCareCard.appendChild(personalCareName);
  personalCareCard.appendChild(personalCarePrice);
  personalCareCard.appendChild(personalCareButton);

  personalCareModal.appendChild(personalCareCard);
});
