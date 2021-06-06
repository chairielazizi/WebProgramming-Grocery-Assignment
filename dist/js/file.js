const frozenFoods = document.querySelector("#c-frozen-foods");// what is this?
const cartContent = document.querySelector(".cart-content");
const cartItems = document.querySelector(".cart-items");
var totalprice = {}; //total price of the list
var list = {};
var currenttab = 'list_itemstab1';
var numoftab = 1;
totalprice[currenttab] = 0;

const frozen = [
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
    img: "./images/products/frozen/pizza.jpg",
  },
  {
    name: "Frozen Vegetables",
    price: 7.6,
    img: "./images/products/frozen/vegetables.jpg",
  },
];

for (var i = 0; i < frozen.length; i++) {
  var frozenFoodCard = document.createElement("div");
  frozenFoodCard.className = "card card-block mx-2 text-center";

  var frozenFoodPhoto = document.createElement("img");
  frozenFoodPhoto.className = "card-img-top";
  frozenFoodPhoto.src = frozen[i].img;
  frozenFoodPhoto.style.height = "9em";

  var frozenFoodButton = document.createElement("button");
  frozenFoodButton.className =
    "add-to-cart-button btn btn-success align-self-end";
  frozenFoodButton.textContent = "Add to List";
  addtolist(frozenFoodButton, frozen[i].name, frozen[i].price);

  var frozenFoodName = document.createElement("h6");
  frozenFoodName.className = "card-title";
  frozenFoodName.textContent = frozen[i].name;

  var frozenFoodPrice = document.createElement("p");
  frozenFoodPrice.className = "card-text";
  frozenFoodPrice.textContent = "RM " + frozen[i].price.toFixed(2);

  frozenFoodCard.appendChild(frozenFoodPhoto);
  frozenFoodCard.appendChild(frozenFoodName);
  frozenFoodCard.appendChild(frozenFoodPrice);
  frozenFoodCard.appendChild(frozenFoodButton);

  frozenFoods.appendChild(frozenFoodCard);
}

function addtolist(button, productname, productprice) {
  button.addEventListener("click", function () {
    if (list.hasOwnProperty(currenttab + productname)) {
      list[currenttab + productname].total += 1;
      totalprice[currenttab] += productprice;
      var temp = totalprice[currenttab];
      document.getElementById(
        currenttab +"-total-price-value"
      ).innerHTML = temp.toFixed(2);
      document.getElementById("multiplier" + currenttab + productname).innerHTML =
        list[currenttab + productname].total;
    } else {
      list[currenttab + productname] = {
        total: 1,
        price: productprice,
      };

      var paper = document.getElementById(currenttab);

      var productAdded =
        '<li class="list-group-item mx-4" id="li'+ currenttab +
        productname +
        '"><div class="inlist width-auto"><div class="row"><div class="col px-0 my-auto" id="divinrowname">' +
        productname +
        '</div><div class="col px-0 float right my-auto mx-2" id="divinrowprice">RM ' +
        productprice.toFixed(2) +
        '</div><div class="col mx-2 px-0 float-right" id="minusbutton"> <a href="#"><img id="Minus'+ currenttab +
        productname +
        '" alt="" src="../images/redminus.png" width="28"></div></a><div class="col px-0 m-auto" id="multipliervalue"><span id="multiplier' + currenttab + productname +
        '"> ' +
        list[currenttab + productname].total +
        '</span></div><div class="col px-0 mx-2" id="plusbutton"><a href="#"><img id="Add' + currenttab +
        productname +
        '" alt="" src="../images/Green pluss.png" width="28"></a></div><div class="col px-0 ml-2 mr-2 float-right" id="deletebutton"><a href="#"><img id="Bin' + currenttab +
        productname +
        '" alt="" src="../images/delete.png" width="28"></a></div></div></div></li>';
      
      paper.insertAdjacentHTML("beforeend", productAdded);
      
      totalprice[currenttab] += productprice;
      console.log(totalprice[currenttab] + "  " + currenttab);
      document.getElementById(currenttab + "-total-price-value").innerHTML = totalprice[currenttab].toFixed(2);

      var addbutton = document.getElementById("Add" + currenttab + productname);
      addbutton.addEventListener("click", function () {
        additem(productname);
      });

      var minusbutton = document.getElementById("Minus" + currenttab + productname);
      minusbutton.addEventListener("click", function () {
        minusitem(productname);
      });
      var deletebutton = document.getElementById("Bin" + currenttab + productname);
      deletebutton.addEventListener("click", function () {
        var result = confirm("Are you sure you want to remove " + productname + " ?");
        if (result) {
          delitemlist(productname);
        }

      });
    }


  });
}

function delitemlist(productname) {
  
  totalprice[currenttab] -= list[currenttab + productname].total * list[currenttab + productname].price;
  console.log(totalprice[currenttab]+" -= " + list[currenttab + productname].total + " X " + list[currenttab + productname].price);
  document.getElementById("li" + currenttab + productname).remove();
  delete list[currenttab + productname];
  document.getElementById( currenttab +"-total-price-value").innerText = Math.abs(totalprice[currenttab]).toFixed(2);
}

function additem(productname) {
  totalprice[currenttab] += list[currenttab + productname].price;
  list[currenttab + productname].total += 1;
  document.getElementById( currenttab + "-total-price-value").innerHTML = totalprice[currenttab].toFixed(2);
  document.getElementById("multiplier" + currenttab + productname).innerHTML =
    list[currenttab + productname].total;
}

function minusitem(productname) {
  totalprice[currenttab] -= list[currenttab + productname].price;
  if (list[currenttab + productname].total == 1) {
    var result = confirm("Are you sure you want to remove " + productname + " ?");
    if (result) {
      delete list[currenttab + productname];
      document.getElementById("li" + currenttab + productname).remove();
    }
  } else {
    list[currenttab + productname].total -= 1;
    console.log(currenttab+"  rn");
    
    console.log(totalprice[currenttab].toFixed(2));
    document.getElementById("multiplier"+ currenttab + productname).innerText =
      list[currenttab + productname].total;
  }
  document.getElementById( currenttab + "-total-price-value").innerText = Math.abs(totalprice[currenttab]).toFixed(2);
}

function toggleCart() {
  var cart = document.querySelector(".cart");
  console.log(cart);
  cart.classList.toggle("display-cart");
}

function toggleCategories() {
  var sidebar = document.querySelector('#sidebar')
  sidebar.classList.toggle("display-sidebar")
}


function addlist() {
  numoftab += 1;
  var currenttabnum = numoftab;
  var tablist = document.getElementById("addtab");
  var divreference = document.getElementById("contentd");

  var newlist = '<li class="" id="tab' + currenttabnum + '" ><a id="hreftab' + currenttabnum + '" class="nav-link" data-toggle="tab" aria-current="page" href="#tabdiv' + currenttabnum + '" ">List ' + currenttabnum + '<button id="tab' + numoftab + 'btn" class="delete-list-btn">❌</button></a></li>';

  tablist.insertAdjacentHTML("beforebegin", newlist);
  console.log(tablist);

  var whichtabiam = document.getElementById('hreftab' + currenttabnum);
  whichtabiam.addEventListener("click", function () {
    whatiscurrenttab("list_itemstab" + currenttabnum);
  });

  totalprice["list_itemstab"+currenttabnum] = 0 ;
  console.log(totalprice["list_itemstab"+currenttabnum]);

  var newdiv = '<div id="tabdiv' + currenttabnum + '" class="tab-pane fade ml-15px"><div class="cart-items overflow-auto"><ol id="list_itemstab' + currenttabnum + '" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="list_itemstab' + currenttabnum +'-total-price-value">0.00</span></div></div></div>';

  divreference.insertAdjacentHTML("beforeend", newdiv);
  console.log(divreference); 

  document.getElementById("tab" + numoftab + "btn").addEventListener("click", function () {

    var result = confirm("Are you sure you want to remove List " + currenttabnum + " ?");
    if (result) {
      deletetab("tab" + currenttabnum,"tabdiv" + currenttabnum);
    }

  });

  
}
function deletetab(deletedtab, deleteddiv) {
  console.log("deleted id = "+deleteddiv + " and " + deletedtab);
  document.getElementById(deletedtab).remove();
  document.getElementById(deleteddiv).remove();
}

function whatiscurrenttab(tabid) {
  currenttab = tabid;
  console.log(tabid + "sini");
}

function deletedefaulttab(deletedtab, deleteddiv) {
  console.log("deletedefault id = " + deleteddiv + " and " + deletedtab);
  var result = confirm("Are you sure you want to remove List 1 ?");
  if (result) {
    document.getElementById(deletedtab).remove();
    document.getElementById(deleteddiv).remove();
  }
}
// "afterbegin"
// "afterend"
// "beforebegin"
// "beforeend"