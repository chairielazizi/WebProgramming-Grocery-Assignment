const beveragesModal = document.querySelector(".adminrow-beverage");
const breadbakeryModal = document.querySelector(".adminrow-breadbakery");
const cannedModal = document.querySelector(".adminrow-canned");
const drybakingModal = document.querySelector(".adminrow-drybaking");
const dairyModal = document.querySelector(".adminrow-dairy");
const frozenModal = document.querySelector(".adminrow-frozen");
const meatModal = document.querySelector(".adminrow-meat");
const fruitModal = document.querySelector(".adminrow-fruit");
const vegeModal = document.querySelector(".adminrow-vege");
const cleanersModal = document.querySelector(".adminrow-cleaners");
const personalCareModal = document.querySelector(".adminrow-personalCare");
const othersModal = document.querySelector(".adminrow-others");

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
      price: 7.5,
      img: "./images/products/beverages/greentea.jpg",
    },
    {
      name: "Lipton Iced Lemon Tea",
      price: 4.5,
      img: "./images/products/beverages/lemontea.jpg",
    },
    {
      name: "Asahi",
      price: 9.0,
      img: "./images/products/beverages/asahi.jpg",
    },
    {
      name: "Heineken",
      price: 9.0,
      img: "./images/products/beverages/heineken.png",
    },
    {
      name: "Soya",
      price: 13.0,
      img: "./images/products/beverages/soya.png",
    },
  ];
  
  const modalbreadbakery = [
    {
      name: "Roti Gardenia Classic Jumbo",
      price: 3.79,
      img: "./images/products/bread/jumbo.jfif",
    },
    {
      name: "Roti Gardenia Coklat Kismis",
      price: 4.99,
      img: "./images/products/bread/rotikismis.jpg",
    },
    {
      name: "Gardenia Roti Coklat",
      price: 0.99,
      img: "./images/products/bread/roticoklat.jfif",
    },
    {
      name: "Roti Gardenia Twiggies Choc",
      price: 1.6,
      img: "./images/products/bread/twiggies.jfif",
    },
    {
      name: "Roti Sambal Bilis Gardenia",
      price: 1.39,
      img: "./images/products/bread/bilis.jpg",
    },
    {
      name: "Roti Gardenia Wholemeal",
      price: 4.9,
      img: "./images/products/bread/wholemeal.jpg",
    },
    {
      name: "Gardenia Delicia Choc Waffle",
      price: 1.58,
      img: "./images/products/bread/waffle.jpg",
    },
    {
      name: "Gardenia Roll Up Garlic",
      price: 4.9,
      img: "./images/products/bread/garlic.jfif",
    },
    {
      name: "Roti Sweetie",
      price: 9.0,
      img: "./images/products/bread/sweetie.jfif",
    },
    {
      name: "Panko Bread Crumbs",
      price: 9.0,
      img: "./images/products/bread/panko.jpg",
    },
    {
      name: "Nazri Bread Crumbs",
      price: 13.0,
      img: "./images/products/bread/nazri.jpg",
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
      img: "./images/products/canned/mushroom.jfif",
    },
    {
      name: "Yeos Chicken Curry",
      price: 4.5,
      img: "./images/products/canned/kari.jpg",
    },
    {
      name: "Rendang",
      price: 9.0,
      img: "./images/products/canned/rendang.jpg",
    },
    {
      name: "Sambal",
      price: 9.0,
      img: "./images/products/canned/sambal.jpg",
    },
    {
      name: "Ayam Brand Sardines",
      price: 13.0,
      img: "./images/products/canned/ayamsardin.jpg",
    },
  ];
  
  const modaldairy = [
    {
      name: "Dairy Champ Sweteened Creamer",
      price: 2.45,
      img: "./images/products/dairy/creamer.jpg",
    },
    {
      name: "Almond Chocolate Milk",
      price: 4.9,
      img: "./images/products/dairy/almond.jpg",
    },
    {
      name: "Dairy Strawberry Milk",
      price: 2.98,
      img: "./images/products/dairy/straw.jfif",
    },
    {
      name: "Barista Almond Milk",
      price: 18.9,
      img: "./images/products/dairy/barista.png",
    },
    {
      name: "Susu Farm Fresh",
      price: 3.45,
      img: "./images/products/dairy/farmfresh.jfif",
    },
    {
      name: "Susu Dutch Lady Pisang",
      price: 4.99,
      img: "./images/products/dairy/pisang.jfif",
    },
    {
      name: "Susu Dutch Lady Full Cream",
      price: 5.9,
      img: "./images/products/dairy/fullcream.jpg",
    },
    {
      name: "Ballantyne Cheese Slices",
      price: 4.5,
      img: "./images/products/dairy/ballancheese.jpg",
    },
    {
      name: "Beqa Cheddar Cheese",
      price: 9.0,
      img: "./images/products/dairy/beqa.jfif",
    },
    {
      name: "Farmcow Butter",
      price: 9.0,
      img: "./images/products/dairy/farmcow.jpg",
    },
    {
      name: "Anchor Butter",
      price: 13.0,
      img: "./images/products/dairy/anchor.jpg",
    },
  ];
  
  const modaldrybaking = [
    {
      name: "Adabi Cucur Powder",
      price: 3.04,
      img: "./images/products/drybakery/adabiudang.jfif",
    },
    {
      name: "Cap Ros Tepung Gandum",
      price: 1.89,
      img: "./images/products/drybakery/capros.jpg",
    },
    {
      name: "Cap Sauh Wheat Flour",
      price: 2.52,
      img: "./images/products/drybakery/capsauh.png",
    },
    {
      name: "Star Brand Corn Flour",
      price: 1.31,
      img: "./images/products/drybakery/corn.jpeg",
    },
    {
      name: "Bird's Custard Foil Powder",
      price: 5.5,
      img: "./images/products/drybakery/custard.jfif",
    },
    {
      name: "Tepung Goreng Pisang",
      price: 3.52,
      img: "./images/products/drybakery/gorengpisang.jpg",
    },
    {
      name: "Erawan Rice Flour",
      price: 1.89,
      img: "./images/products/drybakery/rice.jfif",
    },
    {
      name: "MFM Self-Raising Flour",
      price: 3.5,
      img: "./images/products/drybakery/mfm.jfif",
    },
    {
      name: "Blue Key Self-Raising Flour",
      price: 3.8,
      img: "./images/products/drybakery/blue.jpg",
    },
    {
      name: "MFM Tepung Paling Halus",
      price: 4.0,
      img: "./images/products/drybakery/halus.jpg",
    },
    {
      name: "Alagappa's Tepung Atta",
      price: 3.76,
      img: "./images/products/drybakery/atta.jpg",
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
      img: "./images/products/frozen/pao.jpg",
    },
    {
      name: "Frozen Fried Rice",
      price: 4.5,
      img: "./images/products/frozen/friedrice.jpg",
    },
    {
      name: "Beef Patties",
      price: 9.0,
      img: "./images/products/frozen/beefpatty.jfif",
    },
    {
      name: "Chicken Patties",
      price: 9.0,
      img: "./images/products/frozen/chicpatty.png",
    },
    {
      name: "Tilapia Fish",
      price: 13.0,
      img: "./images/products/frozen/tilapia.jpg",
    },
  ];
  
  const modalmeat = [
    {
      name: "Ramly Frankfurter",
      price: 8.5,
      img: "./images/products/meat/ramly.jpg",
    },
    {
      name: "Smoke Chicken Frankfurter",
      price: 4.6,
      img: "./images/products/meat/farmbest.jpg",
    },
    {
      name: "Chicken Cheese Frankfurter",
      price: 8.2,
      img: "./images/products/meat/chickencheese.jpeg",
    },
    {
      name: "Ayamas Drummet",
      price: 17.0,
      img: "./images/products/meat/drummet.jpg",
    },
    {
      name: "Ayamas Koktel Sosej",
      price: 13.9,
      img: "./images/products/meat/koktel.jpg",
    },
    {
      name: "Ayamas Bebola Ayam",
      price: 15.7,
      img: "./images/products/meat/bebola.jfif",
    },
    {
      name: "Ayamas Meatloaf",
      price: 5.95,
      img: "./images/products/meat/meatloaf.jpg",
    },
    {
      name: "Beyond Meat",
      price: 4.5,
      img: "./images/products/meat/beyond.png",
    },
    {
      name: "Tony Roma's Pork",
      price: 9.0,
      img: "./images/products/meat/tonypork.jpeg",
    },
    {
      name: "Chicken Thighs",
      price: 9.0,
      img: "./images/products/meat/thigh.jpg",
    },
    {
      name: "Chicken Drumsticks",
      price: 13.0,
      img: "./images/products/meat/drumsticks.jpg",
    },
  ];
  
  const modalfruit = [
    {
      name: "Orange",
      price: 12.0,
      img: "./images/products/fruit/orange.jpg",
    },
    {
      name: "Apple",
      price: 6.99,
      img: "./images/products/fruit/apple.jpg",
    },
    {
      name: "Watermelon",
      price: 8.0,
      img: "./images/products/fruit/watermelon.png",
    },
    {
      name: "Honey Dew",
      price: 5.9,
      img: "./images/products/fruit/honeydew.jfif",
    },
    {
      name: "Pineapple",
      price: 6.0,
      img: "./images/products/fruit/pineapple.jpg",
    },
    {
      name: "Star Fruit",
      price: 3.99,
      img: "./images/products/fruit/starfruit.jpeg",
    },
    {
      name: "Dragon Fruit",
      price: 8.5,
      img: "./images/products/fruit/dragon.jpg",
    },
    {
      name: "Durian",
      price: 20.0,
      img: "./images/products/fruit/durian.png",
    },
    {
      name: "Papaya",
      price: 5.99,
      img: "./images/products/fruit/papaya.jpg",
    },
    {
      name: "mango",
      price: 4.99,
      img: "./images/products/fruit/mango.jpg",
    },
    {
      name: "Banana",
      price: 13.0,
      img: "./images/products/fruit/banana.jpg",
    },
  ];
  
  const modalcleaners = [
    {
      name: "Scotch Brite Sponge",
      price: 6.9,
      img: "./images/products/cleaners/sponge.jpg",
    },
    {
      name: "Magic Brush Electric Bath",
      price: 28.0,
      img: "./images/products/cleaners/magic.jfif",
    },
    {
      name: "Toilet Brush",
      price: 9.99,
      img: "./images/products/cleaners/toilet.jpg",
    },
    {
      name: "Aquarium Cleaning Kit",
      price: 11.59,
      img: "./images/products/cleaners/aquarium.jfif",
    },
    {
      name: "Cleaning Brush",
      price: 2.18,
      img: "./images/products/cleaners/brush.jpg",
    },
    {
      name: "Ajax Apple",
      price: 11.99,
      img: "./images/products/cleaners/apple.jpg",
    },
    {
      name: "Ajax Lavender",
      price: 11.55,
      img: "./images/products/cleaners/lavender.jpg",
    },
    {
      name: "Scotch Brite Mop",
      price: 35.5,
      img: "./images/products/cleaners/mop.jfif",
    },
    {
      name: "Klorox",
      price: 9.0,
      img: "./images/products/cleaners/clorox.jpg",
    },
    {
      name: "Broom",
      price: 7.5,
      img: "./images/products/cleaners/broom.jpg",
    },
    {
      name: "Cloth Piece",
      price: 3.9,
      img: "./images/products/cleaners/kain.jfif",
    },
  ];
  
  const modalvege = [
    {
      name: "Asparagus",
      price: 12.0,
      img: "./images/products/vegetable/asparagus.jpg",
    },
    {
      name: "Broccoli",
      price: 12.0,
      img: "./images/products/vegetable/broccoli.jpg",
    },
    {
      name: "Brussel Sprout",
      price: 11.69,
      img: "./images/products/vegetable/sprout.jpg",
    },
    {
      name: "Cabbage",
      price: 3.89,
      img: "./images/products/vegetable/cabbage.jpg",
    },
    {
      name: "Carrot",
      price: 3.3,
      img: "./images/products/vegetable/carrot.jpg",
    },
    {
      name: "Cauliflower",
      price: 8.0,
      img: "./images/products/vegetable/cauli.png",
    },
    {
      name: "Celery",
      price: 7.22,
      img: "./images/products/vegetable/celery.jpg",
    },
    {
      name: "Corn",
      price: 4.5,
      img: "./images/products/vegetable/corn.jpg",
    },
    {
      name: "Cucumber",
      price: 3.56,
      img: "./images/products/vegetable/cucumber.jpg",
    },
    {
      name: "Eggplant",
      price: 5.8,
      img: "./images/products/vegetable/eggplant.jpeg",
    },
    {
      name: "Potato",
      price: 4.7,
      img: "./images/products/vegetable/potato.jpg",
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
      img: "./images/products/personalcare/baby.png",
    },
    {
      name: "Body Wash",
      price: 4.5,
      img: "./images/products/personalcare/body.jpg",
    },
    {
      name: "Deodorant Roller",
      price: 9.0,
      img: "./images/products/personalcare/roller.jfif",
    },
    {
      name: "Dove Hair Serum",
      price: 9.0,
      img: "./images/products/personalcare/dove.jfif",
    },
    {
      name: "Deodorant Spray",
      price: 13.0,
      img: "./images/products/personalcare/spray.jpg",
    },
  ];
  
  const modalothers = [
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

modalbeverages.forEach(function (products,i){
  var beverageCard = document.createElement("div");
  beverageCard.className = "card card-block mx-2 text-center mb-2";
  beverageCard.id = products.name + "model";

  var beveragePhoto = document.createElement("img");
  beveragePhoto.className = "card-img-top";
  beveragePhoto.src = products.img;
  beveragePhoto.style.height = "9em";

  var beverageButton = document.createElement("button");
  beverageButton.className = "delete-button btn btn-danger";
  beverageButton.textContent = "Delete";
  deleteproduct(beverageButton,modalbeverages,i,products.name);


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

modalbreadbakery.forEach(function (products,i){
  var breadBakeryCard = document.createElement("div");
  breadBakeryCard.className = "card card-block mx-2 text-center mb-2";
  breadBakeryCard.id = products.name + "model";

  var breadBakeryPhoto = document.createElement("img");
  breadBakeryPhoto.className = "card-img-top";
  breadBakeryPhoto.src = products.img;
  breadBakeryPhoto.style.height = "9em";

  var breadBakeryButton = document.createElement("button");
  breadBakeryButton.className = "delete-button btn btn-danger align-self-end";
  breadBakeryButton.textContent = "Delete";
  deleteproduct(breadBakeryButton,modalbreadbakery,i,products.name);
  
  var breadBakeryName = document.createElement("h6");
  breadBakeryName.className = "card-title";
  breadBakeryName.textContent = products.name;

  var breadBakeryPrice = document.createElement("p");
  breadBakeryPrice.className = "card-text";
  breadBakeryPrice.textContent = "RM " + products.price.toFixed(2);

  breadBakeryCard.appendChild(breadBakeryPhoto);
  breadBakeryCard.appendChild(breadBakeryName);
  breadBakeryCard.appendChild(breadBakeryPrice);
  breadBakeryCard.appendChild(breadBakeryButton);

  breadbakeryModal.appendChild(breadBakeryCard);
});

modalcanned.forEach(function (products,i){
  var cannedGoodsCard = document.createElement("div");
  cannedGoodsCard.className = "card card-block mx-2 text-center mb-2";
  cannedGoodsCard.id = products.name + "model";

  var cannedGoodsPhoto = document.createElement("img");
  cannedGoodsPhoto.className = "card-img-top";
  cannedGoodsPhoto.src = products.img;
  cannedGoodsPhoto.style.height = "9em";

  var cannedButton = document.createElement("button");
  cannedButton.className = "delete-button btn btn-danger";
  cannedButton.textContent = "Delete";
  deleteproduct(cannedButton,modalcanned,i,products.name);
  
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

modaldairy.forEach(function (products,i){
  var dairyCard = document.createElement("div");
  dairyCard.className = "card card-block mx-2 text-center mb-2";
  dairyCard.id = products.name + "model";

  var dairyPhoto = document.createElement("img");
  dairyPhoto.className = "card-img-top";
  dairyPhoto.src = products.img;
  dairyPhoto.style.height = "9em";

  var dairyButton = document.createElement("button");
  dairyButton.className = "delete-button btn btn-danger";
  dairyButton.textContent = "Delete";
  deleteproduct(dairyButton,modaldairy,i,products.name);
  

  var dairyName = document.createElement("h6");
  dairyName.className = "card-title";
  dairyName.textContent = products.name;

  var dairyPrice = document.createElement("p");
  dairyPrice.className = "card-text";
  dairyPrice.textContent = "RM " + products.price.toFixed(2);

  dairyCard.appendChild(dairyPhoto);
  dairyCard.appendChild(dairyName);
  dairyCard.appendChild(dairyPrice);
  dairyCard.appendChild(dairyButton);

  dairyModal.appendChild(dairyCard);
});

modaldrybaking.forEach(function (products,i){
  var drybakingCard = document.createElement("div");
  drybakingCard.className = "card card-block mx-2 text-center mb-2";
  drybakingCard.id = products.name + "model";

  var drybakingPhoto = document.createElement("img");
  drybakingPhoto.className = "card-img-top";
  drybakingPhoto.src = products.img;
  drybakingPhoto.style.height = "9em";

  var drybakingButton = document.createElement("button");
  drybakingButton.className = "delete-button btn btn-danger";
  drybakingButton.textContent = "Delete";
  deleteproduct(drybakingButton,modaldrybaking,i,products.name);

  var drybakingName = document.createElement("h6");
  drybakingName.className = "card-title";
  drybakingName.textContent = products.name;

  var drybakingPrice = document.createElement("p");
  drybakingPrice.className = "card-text";
  drybakingPrice.textContent = "RM " + products.price.toFixed(2);

  drybakingCard.appendChild(drybakingPhoto);
  drybakingCard.appendChild(drybakingName);
  drybakingCard.appendChild(drybakingPrice);
  drybakingCard.appendChild(drybakingButton);

  drybakingModal.appendChild(drybakingCard);
});

modalfrozen.forEach(function (products,i){
  var frozenFoodCard = document.createElement("div");
  frozenFoodCard.className = "card card-block mx-2 text-center mb-2";
  frozenFoodCard.id = products.name + "model";

  var frozenFoodPhoto = document.createElement("img");
  frozenFoodPhoto.className = "card-img-top";
  frozenFoodPhoto.src = products.img;
  frozenFoodPhoto.style.height = "9em";

  var frozenFoodButton = document.createElement("button");
  frozenFoodButton.className = "delete-button btn btn-danger align-self-end";
  frozenFoodButton.textContent = "Delete";
  deleteproduct(frozenFoodButton,modalfrozen,i,products.name);

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

modalmeat.forEach(function (products,i) {
  var meatCard = document.createElement("div");
  meatCard.className = "card card-block mx-2 text-center mb-2";
  meatCard.id = products.name + "model";

  var meatPhoto = document.createElement("img");
  meatPhoto.className = "card-img-top";
  meatPhoto.src = products.img;
  meatPhoto.style.height = "9em";

  var meatButton = document.createElement("button");
  meatButton.className = "delete-button btn btn-danger";
  meatButton.textContent = "Delete";
  deleteproduct(meatButton,modalmeat,i,products.name);
  

  var meatName = document.createElement("h6");
  meatName.className = "card-title";
  meatName.textContent = products.name;

  var meatPrice = document.createElement("p");
  meatPrice.className = "card-text";
  meatPrice.textContent = "RM " + products.price.toFixed(2);

  meatCard.appendChild(meatPhoto);
  meatCard.appendChild(meatName);
  meatCard.appendChild(meatPrice);
  meatCard.appendChild(meatButton);

  meatModal.appendChild(meatCard);
});

modalfruit.forEach(function (products,i){
  var produceCard = document.createElement("div");
  produceCard.className = "card card-block mx-2 text-center mb-2";
  produceCard.id = products.name + "model";

  var producePhoto = document.createElement("img");
  producePhoto.className = "card-img-top";
  producePhoto.src = products.img;
  producePhoto.style.height = "9em";

  var produceButton = document.createElement("button");
  produceButton.className = "delete-button btn btn-danger";
  produceButton.textContent = "Delete";
  deleteproduct(produceButton,modalfruit,i,products.name);

  var produceName = document.createElement("h6");
  produceName.className = "card-title";
  produceName.textContent = products.name;

  var producePrice = document.createElement("p");
  producePrice.className = "card-text";
  producePrice.textContent = "RM " + products.price.toFixed(2);

  produceCard.appendChild(producePhoto);
  produceCard.appendChild(produceName);
  produceCard.appendChild(producePrice);
  produceCard.appendChild(produceButton);

  fruitModal.appendChild(produceCard);
});

modalcleaners.forEach(function (products,i){
  var cleanersCard = document.createElement("div");
  cleanersCard.className = "card card-block mx-2 text-center mb-2";
  cleanersCard.id = products.name + "model";

  var cleanersPhoto = document.createElement("img");
  cleanersPhoto.className = "card-img-top";
  cleanersPhoto.src = products.img;
  cleanersPhoto.style.height = "9em";

  var cleanersButton = document.createElement("button");
  cleanersButton.className = "delete-button btn btn-danger";
  cleanersButton.textContent = "Delete";
  deleteproduct(cleanersButton,modalcleaners,i,products.name);

  var cleanersName = document.createElement("h6");
  cleanersName.className = "card-title";
  cleanersName.textContent = products.name;

  var cleanersPrice = document.createElement("p");
  cleanersPrice.className = "card-text";
  cleanersPrice.textContent = "RM " + products.price.toFixed(2);

  cleanersCard.appendChild(cleanersPhoto);
  cleanersCard.appendChild(cleanersName);
  cleanersCard.appendChild(cleanersPrice);
  cleanersCard.appendChild(cleanersButton);

  cleanersModal.appendChild(cleanersCard);
});

modalvege.forEach(function (products,i){
  var paperCard = document.createElement("div");
  paperCard.className = "card card-block mx-2 text-center mb-2";
  paperCard.id = products.name + "model";

  var paperPhoto = document.createElement("img");
  paperPhoto.className = "card-img-top";
  paperPhoto.src = products.img;
  paperPhoto.style.height = "9em";

  var paperButton = document.createElement("button");
  paperButton.className = "delete-button btn btn-danger";
  paperButton.textContent = "Delete";
  deleteproduct(paperButton,modalvege,i,products.name);
 
  var paperName = document.createElement("h6");
  paperName.className = "card-title";
  paperName.textContent = products.name;

  var paperPrice = document.createElement("p");
  paperPrice.className = "card-text";
  paperPrice.textContent = "RM " + products.price.toFixed(2);

  paperCard.appendChild(paperPhoto);
  paperCard.appendChild(paperName);
  paperCard.appendChild(paperPrice);
  paperCard.appendChild(paperButton);

  vegeModal.appendChild(paperCard);
});

modalpersonalCareProducts.forEach(function (products,i){
  var personalCareCard = document.createElement("div");
  personalCareCard.className = "card card-block mx-2 text-center mb-2";
  personalCareCard.id = products.name + "model";

  var personalCarePhoto = document.createElement("img");
  personalCarePhoto.className = "card-img-top";
  personalCarePhoto.src = products.img;
  personalCarePhoto.style.height = "9em";

  var personalCareButton = document.createElement("button");
  personalCareButton.className = "delete-button btn btn-danger";
  personalCareButton.textContent = "Delete";
  deleteproduct(personalCareButton,modalpersonalCareProducts,i,products.name);
  
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

function deleteproduct(deletebutton,arr,i,name){
  deletebutton.addEventListener("click",function (){
    
  var result = confirm("Are you sure you want to remove this product from the store ?");
  if (result) {
    arr.splice(i,1);
    var deletedcard =  document.getElementById(name+ "model");
    console.log(deletedcard);
    console.log(arr);
    deletedcard.remove();
  }
  });
}


