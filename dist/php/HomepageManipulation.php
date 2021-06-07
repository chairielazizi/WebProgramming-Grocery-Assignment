<?php
include_once './dist/php/connection.php';

function addlifst()
{
echo "<p>".$_SESSION['user_name']."</p>";
  
}








// echo ' <script> </script>';

// echo ' <script>
// var list = {};
// var currenttab = "list_itemstab1";
// var numoftab = 1;
// </script>';

//ToggleList
echo ' <script> 
  function toggleCart() {
    var cart = document.querySelector(".cart");
    console.log(cart);
    cart.classList.toggle("display-cart");
  }
</script>';

// //
// echo ' <script>

// </script>';


// echo '<script>

// function addlist() {
//   numoftab += 1;
//   var currenttabnum = numoftab;
//   var tablist = document.getElementById("addtab");
//   var divreference = document.getElementById("contentd");

//   var newlist = \'<li class="" id="tab\' + currenttabnum + \'" ><a id="hreftab\' + currenttabnum + \'" class="nav-link" data-toggle="tab" aria-current="page" href="#tabdiv\' + currenttabnum + \'" ">List \' + currenttabnum + \'<button id="tab\' + numoftab + \'btn" class="delete-list-btn">❌</button></a></li>\';

//   tablist.insertAdjacentHTML("beforebegin", newlist);
//   console.log(tablist);

//   var whichtabiam = document.getElementById(\'hreftab\' + currenttabnum);
//   whichtabiam.addEventListener("click", function () {
//     whatiscurrenttab("list_itemstab" + currenttabnum);
//   });

//   totalprice["list_itemstab" + currenttabnum] = 0;
//   console.log(totalprice["list_itemstab" + currenttabnum]);

//   var newdiv = \'<div id="tabdiv\' + currenttabnum + \'" class="tab-pane fade ml-15px"><div class="cart-items overflow-auto"><ol id="list_itemstab\' + currenttabnum + \'" class="list-group list-group-flush"></ol></div><div id="calculatedprice" class="row total-price-container"><div class="col">Total Price: <span>RM </span><span class="spantotalprice" id="list_itemstab\' + currenttabnum + \'-total-price-value">0.00</span></div></div></div>\';

//   divreference.insertAdjacentHTML("beforeend", newdiv);
//   console.log(divreference);

//   document.getElementById("tab" + numoftab + "btn").addEventListener("click", function () {

//     var result = confirm("Are you sure you want to remove List " + currenttabnum + " ?");
//     if (result) {
//       deletetab("tab" + currenttabnum, "tabdiv" + currenttabnum);
//     }

//   });


// }
// function deletetab(deletedtab, deleteddiv) {
//   console.log("deleted id = " + deleteddiv + " and " + deletedtab);
//   document.getElementById(deletedtab).remove();
//   document.getElementById(deleteddiv).remove();
// }

// function whatiscurrenttab(tabid) {
//   currenttab = tabid;
//   console.log(tabid + "sini");
// }
// </script>';
