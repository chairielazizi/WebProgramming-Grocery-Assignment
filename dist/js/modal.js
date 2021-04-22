// modal page
const beveragesModal = document.querySelector(".beverages-modal");

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
    price: "RM8.50",
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Lipton Iced Lemon Tea",
    price: "RM4.50",
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Asahi",
    price: "RM9.00",
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Heineken",
    price: "RM9.00",
    img: "./images/products/beverages/sagota.jpg",
  },
  {
    name: "Soya",
    price: "RM13.00",
    img: "./images/products/beverages/sagota.jpg",
  },
];
console.log(modalbeverages);

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
